
var app = {

	host:"http://localhost:8000/",

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

	$('.datepicker').datepicker(); //agregar date picker jQuery UI para campos de fecha en formularios

	$(".image-picker").imagepicker({
		show_label: true,
		// hide_select: false
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

		verifyChild();
	});

	function verifyMedicineChild() {

		var rowsLength = $('#medicine .medicines-container').length;
		console.log('Numero de alimentos: ' + rowsLength);

		if (rowsLength > 1) {
			$('.rm-field-medicine').fadeIn('slow');
		} else
			$('.rm-field-medicine').fadeOut('slow');

	}

});