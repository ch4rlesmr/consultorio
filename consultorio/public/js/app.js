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
            start: '06:00',
            end: '22:00'  
          },
          minTime: "05:00",
          maxTime: "23:00",
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

            startAgenda = moment(start._d).format('YYYY-MM-DD HH:mm');
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
            if ( view.name !== 'month' || view.name !== 'agendaWeek' ) {

              if ( calEvent.status == 'DONE' ) {
                $('#fc_detail').click();
                var link = app.host + 'dra/agenda/' + calEvent.id;
                $('#link_meeting_detail').attr( 'href', link);

              } else {
                $('#fc_edit').click();
                $('#delete-meeting').val(calEvent.id);
              }

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
                  var eventColor = 'green';
                  if (value['meeting_status'] == 'DONE') {
                    eventColor = '#337ab7';
                  }

                  events.push({
                    title: value['name'] + ' ' + value['last_name'] , //
                    start: value['start_meeting'],//moment(start._d).format('YYYY-MM-DD hh:mm')
                    end: value['end_meeting'],
                    id: value['id'],
                    status: value['meeting_status'],
                    textColor: 'white',
                    color: eventColor,
                    allDay: false
                  });
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

var app = {

	host:"http://consultorio/consultorio/",

	ajaxSetup:function(){
	  $.ajaxSetup({
	      headers: {
	          'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
	      }
	  });
	},

	httpGet:function(url,data,onSuccess,onError){
	  $.ajax({
	    type: "GET",
	    url: this.host+url,
	    data: data,
	    dataType: 'json',
	    success: function (response) {
	      onSuccess(response);
	    },
	    error: function (error) {
	        onError(error);
	    }
	  });
	},

	httpShow:function(id,url,onSuccess,onError){
	  $.ajax({
	    type: "GET",
	    url: this.host+url+"/"+id,
	    dataType: 'json',
	    success: function (response) {
	      onSuccess(response);
	    },
	    error: function (error) {
	        onError(error);
	    }
	  });
	},

	httpPost:function(url,data,onSuccess,onError){
	  $.ajax({
	    type: "POST",
	    url: this.host+url,
	    data: data,
	    dataType: 'json',
	    success: function (response) {
	      onSuccess(response);
	    },
	    error: function (error) {
	        onError(error);
	    }
	  });
	},


	httpPut:function(id,url,data,onSuccess,onError){
	  $.ajax({
	    type: "PUT",
	    url: this.host+url+"/"+id,
	    data: data,
	    dataType: 'json',
	    success: function (response) {
	      onSuccess(response);
	    },
	    error: function (error) {
	      onError(error);
	    }
	  });
	},

	httpDelete:function(id,url,onSuccess,onError){
	  $.ajax({
	    type: "DELETE",
	    url: this.host+url+"/"+id,
	    dataType: 'json',
	    success: function (response) {
	      onSuccess(response);
	    },
	    error: function (error) {
	      onError(error);
	    }
	  }); 
	},

	dataFormPatient: [],

};

$(function () {

	// $('.single_cal1').daterangepicker({
	// 	singleDatePicker: true,
	// 	showDropdowns: true,
	// 	calender_style: "picker_1"
	// }, function(start, end, label) {
	// 	console.log(start.toISOString(), end.toISOString(), label);
	// });

	$('.datepicker').datepicker({
		changeMonth: true,
		changeYear: true,
		yearRange: "-100:+0",
	}); //agregar date picker jQuery UI para campos de fecha en formularios

	$(".image-picker").imagepicker({
		show_label: true,
		// hide_select: false
	});

	$('.star-rating').starrr({
		rating: 2,
		change: function(e, value){
			
			if ( value == undefined ) { 
				$('#rating-tracing').val(0);
			} else
				$('#rating-tracing').val(value);
		}
	});

	$('.starrr-readonly').starrr({
		readOnly: true,
		rating: $('#qualification').val()
	});

	$('#dob-patient').change(function () {
		var dateString = $(this).val().toString();

		dateString = dateString.split('/');
		var dob = new Date( dateString[2], (dateString[1] -1), dateString[0] );

		var today = new Date();
		var years = today.getFullYear() - dob.getFullYear();

		dob.setFullYear(today.getFullYear());
		if (today < dob) { years--; }

		$('#age-patient').val(years);

	});

	$('.num_input').numeric(); //agregar validacion para ingreso unico de numeros para campos de formulario

	var next = 1;
	var next_aliment = 1;
	var next_habit = 1;
	var next_medicine = 1;

	$('.add-field').click(function (e) {
		e.preventDefault();
		var rowFields = $('#aliments .fields-container').first().clone();
		$(rowFields).find('input').val("");
		next_aliment ++;
		$(rowFields).find('input, textarea, select').each(function () {
			var name = $(this).attr('name') + '-' + next_aliment;
			$(this).attr('name', name);
		});
		$(rowFields).css('display', 'none');
		$(rowFields).insertAfter($('#aliments .fields-container').last());
		$(rowFields).fadeIn('slow');

		verifyChild();
	});

	$('.rm-field').click(function (e) {
		e.preventDefault();
		var rowDelete = $('#aliments .fields-container').last();
		/*$(rowDelete).fadeOut('slow', function () {
			$(this).remove();
		});*/
		$(rowDelete).fadeOut('slow');
		$(rowDelete).remove();
		next_aliment --;

		verifyChild();
	});

	function verifyChild() {

		var rowsLength = $('#aliments .fields-container').length;
		console.log('Numero de alimentos: ' + rowsLength);

		if (rowsLength > 1) {
			$('.rm-field').fadeIn('slow');
		} else
			$('.rm-field').fadeOut('slow');

	}

	$('.add-field-habit').click(function (e) {
		e.preventDefault();
		var rowFields = $('#habits .habit-container').first().clone();
		$(rowFields).find('input, textarea').val("");
		next_habit ++;
		$(rowFields).find('input, textarea, select').each(function () {
			var name = $(this).attr('name') + '-' + next_habit;
			$(this).attr('name', name);
		});
		$(rowFields).css('display', 'none');
		$(rowFields).insertAfter($('#habits .habit-container').last());
		$(rowFields).fadeIn('slow');

		verifyHabitChild();
	});

	$('.rm-field-habit').click(function (e) {
		e.preventDefault();
		var rowDelete = $('#habits .habit-container').last();
		/*$(rowDelete).fadeOut('slow', function () {
			$(this).remove();
		});*/
		$(rowDelete).fadeOut('slow');
		$(rowDelete).remove();
		next_habit --;

		verifyHabitChild();
	});

	function verifyHabitChild() {

		var rowsLength = $('#habits .habit-container').length;
		console.log('Numero de alimentos: ' + rowsLength);

		if (rowsLength > 1) {
			$('.rm-field-habit').fadeIn('slow');
		} else
			$('.rm-field-habit').fadeOut('slow');

	}

	$('.add-field-medicine').click(function (e) {
		e.preventDefault();
		var rowFields = $('#medicine .medicines-container').first().clone();
		$(rowFields).find('input, textarea').val("");
		next_medicine ++;
		$(rowFields).find('input, textarea, select').each(function () {
			var name = $(this).attr('name') + '-' + next_medicine;
			$(this).attr('name', name);
		});
		$(rowFields).css('display', 'none');
		$(rowFields).insertAfter($('#medicine .medicines-container').last());
		$(rowFields).fadeIn('slow');

		verifyMedicineChild();
	});

	$('.rm-field-medicine').click(function (e) {
		e.preventDefault();
		var rowDelete = $('#medicine .medicines-container').last();
		/*$(rowDelete).fadeOut('slow', function () {
			$(this).remove();
		});*/
		$(rowDelete).fadeOut('slow');
		$(rowDelete).remove();
		next_medicine --;
		

		verifyMedicineChild();
	});

	function verifyMedicineChild() {

		var rowsLength = $('#medicine .medicines-container').length;
		console.log('Numero de medicinas: ' + rowsLength);

		if (rowsLength > 1) {
			$('.rm-field-medicine').fadeIn('slow');
		} else
			$('.rm-field-medicine').fadeOut('slow');

	}

});

$('#searchOldPatients').click(function () {
	
	var data = {
		name_patient: $('#search-patient-name').val(),
		nubmer_document: $('#search-document-patient').val()
	};

	console.log(data);

	app.httpPost('dra/buscar_cita_paciente', data, function onSuccess (response) {
		console.log(response.patients);
		loadResultPatientTable(response.patients);
	}, function onError (response) {
		console.log(response);
	});

});

function loadResultPatientTable(patientsResult) {
	var table = $('#result-search-patient tbody');
	$("#result-search-patient tbody").find("tr").remove();
	for (var patient = 0; patient < patientsResult.length; patient++) {
		table.append('<tr>' + 
		'<td>'+ patientsResult[patient].id_number +'</td>' + 
		'<td>'+ patientsResult[patient].name + ' ' + patientsResult[patient].last_name +'</td>' + 
		'<td data-patient-id="' + patientsResult[patient].id + '"><a href="#" class="btn btn-success btn-xs meeting-assignment"><i class="fa fa-calendar"></i> <strong>Asignar</strong></a></td>' + 
		'</tr>');
	}
}

function validateMeetingAJAX (patientId) {
	var data = { id: patientId };
	app.httpPost('dra/valida_cita', data, function onSuccess (response) {
		console.log(response);
	}, function onError (response) {
		console.log(response);
	});
}

Chart.defaults.global.legend = {
        enabled: false
      };

var ctx = document.getElementById("lineChart");

if (ctx !== null) {

	ctx = ctx.getContext("2d");
	ctx.canvas.height = 100;

	var dates = $('#date-meetings').data('date-meetings').split(',');
	var weights = $('#weight-values').data('weight-values').split(',');

	var lineChart = new Chart(ctx, {
		type: 'line',
		data: {
		  // labels: ["January", "February", "March", "April", "May", "June", "July"],
		  labels: dates,
		  datasets: [{
		    label: "Peso (Kg)",
		    backgroundColor: "rgba(38, 185, 154, 0.31)",
		    borderColor: "rgba(38, 185, 154, 0.7)",
		    pointBorderColor: "rgba(38, 185, 154, 0.7)",
		    pointBackgroundColor: "rgba(38, 185, 154, 0.7)",
		    pointHoverBackgroundColor: "#fff",
		    pointHoverBorderColor: "rgba(220,220,220,1)",
		    pointBorderWidth: 1,
		    data: weights
		    // data: [31, 74, 6, 39, 20, 85, 7]
		  }/*, {
		    label: "My Second dataset",
		    backgroundColor: "rgba(3, 88, 106, 0.3)",
		    borderColor: "rgba(3, 88, 106, 0.70)",
		    pointBorderColor: "rgba(3, 88, 106, 0.70)",
		    pointBackgroundColor: "rgba(3, 88, 106, 0.70)",
		    pointHoverBackgroundColor: "#fff",
		    pointHoverBorderColor: "rgba(151,187,205,1)",
		    pointBorderWidth: 1,
		    data: [82, 23, 66, 9, 99, 4, 2]
		  }*/]
		},
	});

}

$('.meeting_delete').click(function () {
	console.info( $(this).parent().data('meeting-id') );//delete-meeting
	$('#delete-meeting').val( $(this).parent().data('meeting-id') );
});
function countChecked(){"all"===checkState&&$(".bulk_action input[name='table_records']").iCheck("check"),"none"===checkState&&$(".bulk_action input[name='table_records']").iCheck("uncheck");var e=$(".bulk_action input[name='table_records']:checked").length;e?($(".column-title").hide(),$(".bulk-actions").show(),$(".action-cnt").html(e+" Records Selected")):($(".column-title").show(),$(".bulk-actions").hide())}!function(e,t){var n=function(e,t,n){var i;return function(){function c(){n||e.apply(a,o),i=null}var a=this,o=arguments;i?clearTimeout(i):n&&e.apply(a,o),i=setTimeout(c,t||100)}};jQuery.fn[t]=function(e){return e?this.bind("resize",n(e)):this.trigger(t)}}(jQuery,"smartresize");var CURRENT_URL=window.location.href.split("?")[0],$BODY=$("body"),$MENU_TOGGLE=$("#menu_toggle"),$SIDEBAR_MENU=$("#sidebar-menu"),$SIDEBAR_FOOTER=$(".sidebar-footer"),$LEFT_COL=$(".left_col"),$RIGHT_COL=$(".right_col"),$NAV_MENU=$(".nav_menu"),$FOOTER=$("footer");$(document).ready(function(){var e=function(){$RIGHT_COL.css("min-height",$(window).height());var e=$BODY.outerHeight(),t=$BODY.hasClass("footer_fixed")?-10:$FOOTER.height(),n=$LEFT_COL.eq(1).height()+$SIDEBAR_FOOTER.height(),i=n>e?n:e;i-=$NAV_MENU.height()+t,$RIGHT_COL.css("min-height",i)};$SIDEBAR_MENU.find("a").on("click",function(t){var n=$(this).parent();n.is(".active")?(n.removeClass("active active-sm"),$("ul:first",n).slideUp(function(){e()})):(n.parent().is(".child_menu")||($SIDEBAR_MENU.find("li").removeClass("active active-sm"),$SIDEBAR_MENU.find("li ul").slideUp()),n.addClass("active"),$("ul:first",n).slideDown(function(){e()}))}),$MENU_TOGGLE.on("click",function(){$BODY.hasClass("nav-md")?($SIDEBAR_MENU.find("li.active ul").hide(),$SIDEBAR_MENU.find("li.active").addClass("active-sm").removeClass("active")):($SIDEBAR_MENU.find("li.active-sm ul").show(),$SIDEBAR_MENU.find("li.active-sm").addClass("active").removeClass("active-sm")),$BODY.toggleClass("nav-md nav-sm"),e()}),$SIDEBAR_MENU.find('a[href="'+CURRENT_URL+'"]').parent("li").addClass("current-page"),$SIDEBAR_MENU.find("a").filter(function(){return this.href==CURRENT_URL}).parent("li").addClass("current-page").parents("ul").slideDown(function(){e()}).parent().addClass("active"),$(window).smartresize(function(){e()}),e(),$.fn.mCustomScrollbar&&$(".menu_fixed").mCustomScrollbar({autoHideScrollbar:!0,theme:"minimal",mouseWheel:{preventDefault:!0}})}),$(document).ready(function(){$(".collapse-link").on("click",function(){var e=$(this).closest(".x_panel"),t=$(this).find("i"),n=e.find(".x_content");e.attr("style")?n.slideToggle(200,function(){e.removeAttr("style")}):(n.slideToggle(200),e.css("height","auto")),t.toggleClass("fa-chevron-up fa-chevron-down")}),$(".close-link").click(function(){var e=$(this).closest(".x_panel");e.remove()})}),$(document).ready(function(){$('[data-toggle="tooltip"]').tooltip({container:"body"})}),$(".progress .progress-bar")[0]&&$(".progress .progress-bar").progressbar(),$(document).ready(function(){if($(".js-switch")[0]){var e=Array.prototype.slice.call(document.querySelectorAll(".js-switch"));e.forEach(function(e){new Switchery(e,{color:"#26B99A"})})}}),$(document).ready(function(){$("input.flat")[0]&&$(document).ready(function(){$("input.flat").iCheck({checkboxClass:"icheckbox_flat-green",radioClass:"iradio_flat-green"})})}),$("table input").on("ifChecked",function(){checkState="",$(this).parent().parent().parent().addClass("selected"),countChecked()}),$("table input").on("ifUnchecked",function(){checkState="",$(this).parent().parent().parent().removeClass("selected"),countChecked()});var checkState="";$(".bulk_action input").on("ifChecked",function(){checkState="",$(this).parent().parent().parent().addClass("selected"),countChecked()}),$(".bulk_action input").on("ifUnchecked",function(){checkState="",$(this).parent().parent().parent().removeClass("selected"),countChecked()}),$(".bulk_action input#check-all").on("ifChecked",function(){checkState="all",countChecked()}),$(".bulk_action input#check-all").on("ifUnchecked",function(){checkState="none",countChecked()}),$(document).ready(function(){$(".expand").on("click",function(){$(this).next().slideToggle(200),$expand=$(this).find(">:first-child"),"+"==$expand.text()?$expand.text("-"):$expand.text("+")})}),"undefined"!=typeof NProgress&&($(document).ready(function(){NProgress.start()}),$(window).load(function(){NProgress.done()}));

$(document).ready(function() {

  app.ajaxSetup();

    $('#wizard').smartWizard({
        labelNext:'Siguiente', // label for Next button
    	labelPrevious:'Anterior', // label for Previous button
    	labelFinish:'Guardar',
        keyNavigation: false,
    	onLeaveStep:leaveAStepCallback,
        onFinish:onFinishCallback
    });

    function leaveAStepCallback(obj, context){

        var validatedStep;

        if (context.fromStep > context.toStep) {
            return true;
        } else {
            validatedStep = validateFormStep();
        }
        //alert("Leaving step " + context.fromStep + " to go to step " + context.toStep);
        //alert("Paso " + context.fromStep +  " validado ? = " + validatedStep);
        //return validateSteps(context.fromStep); // return false to stay on step and true to continue navigation 
        
        return validatedStep;
        // return true;

    }

    function onFinishCallback(objs, context){
        /*if (validateFormStep()) {
          alert('Guardar');
          var datosForm = {data: JSON.stringify(app.dataFormPatient)}
          app.httpPost('dra/paciente_nuevo', datosForm,
            function (response){
            console.log(response);
            }, function (response){
            console.log(response);
            });
        } */
        var aliments = [];
        $("#aliments .fields-container").each(function(){
            var aliment = {};
            var dayMoment = $(this).find(".day-moment").val();
            var placeMoment = $(this).find(".place-moment").val();
            var foodId = $(this).find(".food_id").val();
            aliment.day_moment = dayMoment;
            aliment.place = placeMoment;
            aliment.food_id = foodId;
            aliments.push(aliment);
        });
        console.log(aliments);
        $("#input_aliments").val(JSON.stringify(aliments));
        

        var habits = [];
        $("#habits .habit-container").each(function(){
            var habit = {};
            var nameHabit = $(this).find(".habit-name").val();
            var frecuency = $(this).find(".frecuency-habit").val();
            var timeHabit = $(this).find(".time-habit").val();
            var timeUnits = $(this).find(".time-habit-unit").val();
            var description = $(this).find(".habit-description").val();
            habit.name = nameHabit;
            habit.frecuency = frecuency;
            habit.time = timeHabit;
            habit.units = timeUnits;
            habit.description = description;
            habits.push(habit);
        });
        console.log(habits);
        $("#input_habits").val(JSON.stringify(habits));

        var medicines = [];
        $("#medicines .medicines-container").each(function(){
            var medicine = {};
            var nameMedicine = $(this).find(".medicine-name").val();
            var typeMedicine = $(this).find(".medicine-type").val();
            var medicineDoses = $(this).find(".medicine-doses").val();

            medicine.name = nameMedicine;
            medicine.type = typeMedicine;
            medicine.doses = medicineDoses;
            medicines.push(medicine);
        });
        $("#input_medicines").val(JSON.stringify(medicines));

        $("#form_patient").submit();
    }

    $('#wizard_verticle').smartWizard({
        transitionEffect: 'fade',
    });

    $('.buttonNext').addClass('btn btn-success');
    $('.buttonPrevious').addClass('btn btn-primary');
    $('.buttonFinish').addClass('btn btn-default'); 

    function saveData() {
    	alert('Guardar Form');
    }

    function validateFormStep() {
        var formElement = $('body').find('div.form-data:visible');
        return validateForm($(formElement));
    }

    function validateForm(formElement) {
        console.log($(formElement));

        var submit = true;
        // evaluate the form using generic validaing
        if (!validator.checkAll($(formElement))) {
          submit = false;
        } else
          app.dataFormPatient.push( $(formElement).serializeArray('datos') );
        console.log(app.dataFormPatient);

        return submit;

    }

    function getSubmittedFormAJAX(dataValues, onSuccess, onError) {

        $.ajax({
            type: 'GET',
            url: 'http://consultorio/consultorio/dra/paciente_nuevo',
            data: dataValues,
            success: function (response) {
                onSuccess(response);
            },
            error: function (xhr, ajaxOptions, thrownError) {
                onError(thrownError);
            }
        });
    }

    function callAjax() {
        var dataValues = {validado: true};
        var resultado = getSubmittedFormAJAX(dataValues, 
            function onSuccess (response) {
                console.log(dataValues);
            }, function onError (thrownError) {
                console.log(thrownError);
            });
    }

    function validateBasicData() {
        alert('form 1');
        validator.message.date = 'not a real date';

        // validate a field on "blur" event, a 'select' on 'change' event & a '.reuired' classed multifield on 'keyup':
        $('form.basic-data-form, form.inventory')
          .on('blur', 'input[required], input.optional, select[required], select.required', validator.checkField)
          .on('change', 'select.required', validator.checkField)
          .on('keypress', 'input[required][pattern]', validator.keypress);

        $('.multi.required').on('keyup blur', 'input', function() {
          validator.checkField.apply($(this).siblings().last()[0]);
        });

        $('form.inventory').submit(function(e) {
          e.preventDefault();
          var submit = true;

          // evaluate the form using generic validaing
          if (!validator.checkAll($(this))) {
            submit = false;
          }

          if (submit)
            this.submit();

          return false;
        });
    }

    /*Validacion de formularios*/
    validator.message['date'] = 'not a real date';

    $('form, #register_calendar_patient, .tracing')
    .on('blur', 'input[required], input.optional, select[required], select.required', validator.checkField)
    .on('change', 'input.datepicker, select[required], select.required', validator.checkField)
    .on('keypress', 'input[required][pattern]', validator.keypress);
    $('form').toggleClass('mode2');

    $('.multi.required').on('keyup blur', 'input', function() {
    validator.checkField.apply($(this).siblings().last()[0]);
    });

    $('form.inventory').submit(function(e) {
      e.preventDefault();
      var submit = true;

      // evaluate the form using generic validaing
      if (!validator.checkAll($(this))) {
        submit = false;
      }

      if (submit)
        this.submit();

      return false;
    });

    $('form.tracing').submit(function (e) {
        var medicines = [];
        $("#medicine .medicines-container").each(function(){
            var medicine = {};
            var nameMedicine = $(this).find(".medicine-name").val();
            var typeMedicine = $(this).find(".medicine-type").val();
            var medicineDoses = $(this).find(".medicine-doses").val();

            medicine.name = nameMedicine;
            medicine.type = typeMedicine;
            medicine.doses = medicineDoses;
            medicines.push(medicine);
        });
        $("#input_medicines").val(JSON.stringify(medicines));

        e.preventDefault();
        var submit = true;

        // evaluate the form using generic validaing
        if (!validator.checkAll($(this))) {
          submit = false;
        }

        if (submit)
          this.submit();

        return false;
    });

});

$(function () {

	$('.product_detail').click(function () {

		app.httpShow( getProductId($(this)), 'dra/inventario',
            function (response){
            console.log(response);
            loadProductData(response);
            }, function (response){
            console.log(response);
            });

	});

	//confirm_del
	$('.product_delete').click(function () {
		var delId = getProductId($(this));
		var url = app.host + window.location.pathname;
		console.log(url);
		$('#product_id').val(delId);

		/*$('.confirm_del').click(function () {

			alert('product: ' + delId);

			app.httpDelete( delId, 'dra/inventario',
            function (response){
            console.log(response);
			$('#inventoryDelete').modal('toggle');
			window.location.href = url;
            }, function (response){
            console.log(response);
            });

		});*/

	});

	function loadProductData (productInfo) {
		$('#reference-detail').text(productInfo.product.reference);
		$('#name-detail').text(productInfo.product.name);
		$('#type-detail').text(productInfo.type);
		$('#warranty-detail').text(productInfo.product.warranty);
		$('#status-detail').text(productInfo.status);
		$('#quantity-detail').text(productInfo.product.quantity);
		$('#trademark-detail').text(productInfo.product.trademark);
		$('#presentation-detail').text(productInfo.presentation);
		$('#description-detail').text(productInfo.product.observation);
	}

	function getProductId(button) {
		var id = $(button).parent().data('product-id');
		return id;
	}

});
//# sourceMappingURL=app.js.map
