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
          axisFormat: 'h(:mm) a',
          slotMinutes: 20,

          select: function(start, end, allDay) {

            // console.log(calendar.fullCalendar('getView').name);

            $('#fc_create').click();

            started = start;
            ended = end;
            console.log('inicio: ',start, 'fin: ',end,'allday: ', allDay);

            $(".antosubmit").on("click", function() {
              var title = $("#title").val();
              if (end) {
                ended = end;
              }

              categoryClass = $("#event_type").val();

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

              return false;
            });

          },
          eventClick: function(calEvent, jsEvent, view) {
            $('#fc_edit').click();
            $('#title2').val(calEvent.title);

            console.log(calEvent, jsEvent, view);

            categoryClass = $("#event_type").val();

            $(".antosubmit2").on("click", function() {
              calEvent.title = $("#title2").val();

              calendar.fullCalendar('updateEvent', calEvent);
              $('.antoclose2').click();
            });

            calendar.fullCalendar('unselect');
          },
          //editable: false, --> para arrastrar los eventos
          // editable: false,
          events: [{
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
        });
      });