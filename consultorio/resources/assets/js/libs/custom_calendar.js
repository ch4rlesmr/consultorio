$(window).load(function() {
        var date = new Date(),
            d = date.getDate(),
            m = date.getMonth(),
            y = date.getFullYear(),
            started,
            categoryClass;

            

        var calendar = $('#calendar').fullCalendar({
          locale: 'es',
          header: {
            left: 'prev, next, today',
            center: 'title',
            right: 'month,agendaWeek,agendaDay'
          },
          defaultView: 'agendaDay',
          navLinks: true,
          businessHours: {
            dow: [1,2,3,4,5,6],
            start: '08:00',
            end: '20:00'  
          },
          minTime: "07:00",
          maxTime: "20:00",
          selectable: true,
          editable: false,
          hiddenDays: [ 0 ], //--> para ocultar dias de la semana [0 al 6]
          selectConstraint: 'businessHours',
          allDaySlot: false,
          slotDuration: '00:20:00',
          axisFormat: 'hh:mm p',
          slotMinutes: 20,
          contentHeight: 760,
          ignoreTimezone: true,
          timezone: "local",

          select: function(start, end, jsEvent, view) {

            // console.log(calendar.fullCalendar('getView').name);
            console.log(start, end, jsEvent, view);
            console.log(view.name + ' --> nombre de vista');

            $('#fc_create').click();

            startAgenda = moment(start._d).format('YYYY-MM-DD hh:mm');
            console.log('formato fecha hora: ' + startAgenda);

            $('#result-search-patient tbody').on('click', '.meeting-assignment', function () {
              console.log($(this).parent());

              var id = $(this).parent().attr('data-patient-id');
              
              $('.form-date-assignment-hidden input#old-patient-id').attr('value', id);
              $('.form-date-assignment-hidden input#date-meeting-old-patient').attr('value', startAgenda);
              // validateMeetingAJAX(id);

              console.log($('.form-date-assignment-hidden').html());
              $('.form-date-assignment-hidden').submit();
              /*$('.form-date-assignment-hidden').on('submit', function () {
                console.warn('test front-end asignacion de cita');
                return false;
              });*/
            });

            // $("#register_calendar_patient #save_new_patient").on("click", function() {
            $("#register_calendar_patient").on("submit", function() {
              
              if ( !validator.checkAll($('#register_calendar_patient')) ) {
                return false;
              } else {
                
                data = {
                  name_patient: $('#name-patient').val(),
                  lastname_patient: $('#lastname-patient').val(),
                  document_type: $('#type-document').val(),
                  number_document: $('#number-document').val(),
                  phone_patient: $('#phone-patient').val(),
                  email_patient: $('#email-patient').val(),
                  address_patient: $('#address-patient').val(),
                  start: startAgenda
                };

                $('#date-agenda').val(startAgenda);

                console.log('la info de la cita para nuevo paciente: ', data);
                return true;

                // app.httpPost('dra/agenda', data, 
                //   function onSuccess(response) {
                //     console.log(response);
                //   }, function onError(response) {
                //     console.log(response);
                //   }
                // );

              }

            });

              /*categoryClass = $("#event_type").val();

              if (title) {
                calendar.fullCalendar('renderEvent', {
                    title: title,
                    start: started,
                    end: end,
                    allDay: allDay
                  },
                  true // make the event "stick"
                );
              }

              $('#title').val('');

              calendar.fullCalendar('unselect');

              $('.antoclose').click();

              return false;*/
            

          },
          eventClick: function(calEvent, jsEvent, view) {
            /*$('#title2').val(calEvent.title);

            console.log(calEvent, jsEvent, view);*/

            console.log(view.name + ' --> nombre de vista');
            if ( view.name !== 'month' ) {
            $('#fc_edit').click();
            //alert(calEvent.id);
            $('#delete-meeting').val(calEvent.id);

            categoryClass = $("#event_type").val();

            $(".antosubmit2").on("click", function() {
              calEvent.title = $("#title2").val();

              calendar.fullCalendar('updateEvent', calEvent);
              $('.antoclose2').click();
            });

            calendar.fullCalendar('unselect');

            } else {
              $('#calendar').fullCalendar('changeView', 'agendaDay');
              // $('#calendar').fullCalendar('gotoDate', start);
            }

          },
          //editable: false, --> para arrastrar los eventos
          // editable: false,
          events: function(start, end, timezone, callback) {

            $.ajax({
              url: app.host + 'dra/list',
              type: 'GET',
              success: function (response) {
                var events = [];
                console.log(response);
                $.each(response.meetings, function (index, value){
                  events.push({
                    title: value['name'] + ' ' + value['last_name'] , //
                    start: value['start_meeting'],//moment(start._d).format('YYYY-MM-DD hh:mm')
                    end: value['end_meeting'],
                    id: value['id'],
                    textColor: 'white',
                    color: 'green',
                    allDay: false
                  });
                });
                events.push({
                  title: 'Birthday Party',
                  start: new Date(y, m, d + 1, 19, 0),
                  end: new Date(y, m, d + 1, 22, 30),
                  allDay: false
                });
                callback(events);
              }
            });

          }

        });
      });

/*
[{
  title: 'All Day Event',
  start: new Date(y, m, 1)
}, {
  title: 'Long Event',
  start: new Date(y, m, d - 5),
  end: new Date(y, m, d - 2)
}, {
  title: 'Meeting',
  start: new Date(y, m, d, 10, 30),
  allDay: false
}, {
  title: 'Lunch',
  start: new Date(y, m, d + 14, 12, 0),
  end: new Date(y, m, d, 14, 0),
  allDay: false
}, {
  title: 'Birthday Party',
  start: new Date(y, m, d + 1, 19, 0),
  end: new Date(y, m, d + 1, 22, 30),
  allDay: false
}, {
  title: 'Click for Google',
  start: new Date(y, m, 28),
  end: new Date(y, m, 29),
  url: 'http://google.com/'
}]
*/