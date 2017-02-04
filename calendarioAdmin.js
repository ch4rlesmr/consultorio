var resultadoAjax;
var repeticion = 0;
var app = {

  host: "http://pcredesycomputadores.com/services/pcredeswb.php",

  httpPost: function (url, data, onSuccess, onError) {

        $.ajax({
            type: 'POST',
            url: url, 
            data: data,
            success: function (response) {
                onSuccess(response);
                resultadoAjax = response;
            }, error: function (xhr, ajaxOptions, thrownError) {
                console.log(xhr, ajaxOptions, thrownError);
                onError(thrownError);
            }
        });

    }

};

var eventInsert;

$(document).ready(function() {

  var started;
  var ended;

  var calendar = $('#calendar').fullCalendar({
    locale: 'es',
    header: {
      left: 'prev,next today',
      center: 'title',
      right: 'month,agendaWeek,agendaDay,listMonth'
    },
    defaultView: 'agendaDay',
    // defaultDate: '2016-09-13',
    navLinks: true, // can click day/week names to navigate views
    //businessHours: true,  display business hours
    businessHours: {
      dow: [1,2,3,4,5,6],
      start: '05:00',
      end: '18:00'  
    },
    minTime: "06:00",
    maxTime: "19:00",
    hiddenDays:[0], //Ocultar Dias doming
    editable: false,
    selectable: true,

    /*dayClick: function (date, allDay, jsEvent, view) {
      if (allDay) {
        alert('no disponible');
        return;
      }
    },*/

    select: function (start, end, jsEvent, view) {

      console.log(start, end, jsEvent, view);

      if (view.name == 'month') {
        $('#calendar').fullCalendar('changeView', 'agendaDay');
        $('#calendar').fullCalendar('gotoDate', start);
      } else {

        $('#btnCancelMaintenance').click(function () {
          start._i = [];
          end._i = [];
        });


        $('#addMaintenance').modal('show');

        $('#btnAddMaintenance').click(function () {

          if (validateAddEvent()) {

          $('#addMaintenance').modal('hide');

            var titleEvent = $('#registroPC_add').val();
            var desc = $('#descripcion_add').val();

            var dateStart = start.format();
            var dateEnd = end.format();
            repeticion++;

            var data = {
              method: 'create',
              title: titleEvent,
              description: desc,
              start: dateStart.replace('T', ' '),
              end: dateEnd.replace('T', ' ')
            };

            titleEvent = null;
            desc = null;
            dateEnd = null;
            dateStart = null;


            if (repeticion == 1) {
              insertIntoCalendar(data);
            } else 
              console.log('r');

              /*app.httpPost(app.host, data,
                  function onSuccess (response) {
                      // location.reload();
                      console.log(response);
                  }, function onError (thrownError) {
                      console.log("error", thrownError);
                  });*/

            /*calendar.fullCalendar('renderEvent', {
              title: "Mantenimiento: " + titleEvent,
              description: desc,
              start: start, 
              end: end
            }, true);*/

          } else {

            alert('Complete los campos');

          }

        });

      }

    },

    eventClick: function (calEvent, jsEvent, view) {

      $('#titleEvent').text("");
      $('#content-event').text("");

      var idEvent = calEvent.id;
      $('#titleEvent').text(calEvent.title);
      $('#content-event').text(calEvent.description);


      if (calEvent.done === "SI") {
        $('#madeit').text('REALIZADO');
        $('#checkEvent .modal-dialog .modal-footer').css('display', 'none');
      } else {
        $('#checkEvent .modal-dialog .modal-footer').css('display', 'block');
        $('#madeit').text('');
      }

      $('#checkEvent').modal('show');

      $('#btnCheckEvent').click(function () {
        var data = {method: 'checkMaintenance', id: calEvent.id};
        app.httpPost(app.host, data,
          function onSuccess (response) {
            $('#checkEvent').modal('hide');
            $(this).css('background-color', '#4cae4c');
            location.reload();
          }, function onError (thrownError) {
            console.log("error", thrownError);
          });
      });

    },

    events: function(start, end, timezone, callback) {

      var data = {method: 'getAll'};
      app.httpPost(app.host, data,
      function onSuccess (response) {

        var events = [];
        
        $.each(response.info, function (i, val) {

          var colorBackground = '#337ab7';

          if (val[0].realizado === 'SI') {
            colorBackground = '#4cae4c';
          }

          events.push({
            title: val[0].nombre_equipo,
            description: val[0].descripcion_agenda,
            start: val[0].fecha_agenda_inicio.replace(' ', 'T'),
            end: val[0].fecha_agenda_fin.replace(' ', 'T'),
            id: val[0].id_agenda,
            done: val[0].realizado,
            color: colorBackground
          });

        });

        callback(events);

      }, function onError (thrownError) {
        console.log("error", thrownError);
      });

    },

  });

function insertIntoCalendar(data) {
    app.httpPost(app.host, data,
        function onSuccess (response) {
            location.reload();
        }, function onError (thrownError) {
            console.log("error", thrownError);
        });
}

function validateAddEvent() {
  
  var titleEvent = $('#registroPC_add').val();
  var desc = $('#descripcion_add').val();

  if (titleEvent !== '' && desc !== '') {
    return true;
  }

  return false;

}

var calendar = $('#calendar_user').fullCalendar({
    locale: 'es',
    header: {
      left: 'prev,next today',
      center: 'title',
      right: 'month,agendaWeek,agendaDay,listMonth'
    },
    defaultView: 'agendaDay',
    // defaultDate: '2016-09-13',
    navLinks: true, // can click day/week names to navigate views
    //businessHours: true,  display business hours
    businessHours: {
      dow: [1,2,3,4,5,6],
      start: '05:00',
      end: '18:00'  
    },
    minTime: "06:00",
    maxTime: "19:00",
    hiddenDays:[0], //Ocultar Dias doming
    editable: false,
    selectable: true,

    

    eventClick: function (calEvent, jsEvent, view) {

      $('#titleEvent').text("");
      $('#content-event').text("");

      var idEvent = calEvent.id;
      $('#titleEvent').text(calEvent.title);
      $('#content-event').text(calEvent.description);

      if (calEvent.done === "SI") {
        $('#madeit').text('REALIZADO');
        $('#checkEvent .modal-dialog .modal-footer').css('display', 'none');
      } else {
        $('#checkEvent .modal-dialog .modal-footer').css('display', 'block');
        $('#madeit').text('');
      }

      $('#checkEvent').modal('show');

      $('#btnCheckEvent').click(function () {
        var data = {method: 'checkMaintenance', id: calEvent.id};
        app.httpPost(app.host, data,
          function onSuccess (response) {

            $('#checkEvent').modal('hide');
            $(this).css('background-color', '#4cae4c');
            location.reload();
          }, function onError (thrownError) {
            console.log("error", thrownError);
          });
      });

    },

    events: function(start, end, timezone, callback) {

      var data = {method: 'getAll'};
      app.httpPost(app.host, data,
      function onSuccess (response) {

        var events = [];
        
        $.each(response.info, function (i, val) {

          var colorBackground = '#337ab7';

          if (val[0].realizado === 'SI') {
            colorBackground = '#4cae4c';
          }

          events.push({
            title: val[0].nombre_equipo,
            description: val[0].descripcion_agenda,
            start: val[0].fecha_agenda_inicio.replace(' ', 'T'),
            end: val[0].fecha_agenda_fin.replace(' ', 'T'),
            id: val[0].id_agenda,
            done: val[0].realizado,
            color: colorBackground
          });

        });

        callback(events);

      }, function onError (thrownError) {
        console.log("error", thrownError);
      });

    }
  });
  
});
