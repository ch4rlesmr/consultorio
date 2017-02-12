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

		$('.confirm_del').click(function () {

			app.httpDelete( delId, 'dra/inventario',
            function (response){
            console.log(response);
			$('#inventoryDelete').modal('toggle');
			window.location.href = url;
            }, function (response){
            console.log(response);
            });

		});

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