jQuery(document).ready(function($) {
    var $cartWidget = $('.tremus-cart-widget');

    if ($cartWidget.length === 0) return;

    $(window).on('scroll', function() {
        if ($(this).scrollTop() > 50) {
            $cartWidget.addClass('hide-shipping');
        } else {
            $cartWidget.removeClass('hide-shipping');
        }
    });

     // Mostrar cantidad de productos
    $('.show-option').on('click', function(e){
        e.preventDefault();
        let count = $(this).data('count');
        let url = new URL(window.location.href);
        url.searchParams.set('per_page', count);
        window.location.href = url.toString();
    });

    // Ordenar productos
    $('#custom-orderby').on('change', function(){
        let orderby = $(this).val();
        let url = new URL(window.location.href);
        url.searchParams.set('orderby', orderby);
        window.location.href = url.toString();
    });

    $('#custom-filters input[type="checkbox"]').on('change', function() {

		// Enviar primero el formulario
		$('#custom-filters').submit();

		// // Luego bloquear la interfaz visualmente
		// setTimeout(function() {
		// 	$('#custom-filters input[type="checkbox"]').prop('disabled', true);
		// 	$('body').css('cursor', 'wait');
		// }, 100);
	});

    // Toggle subcategorías
    $(".filter-item > .filter-option input").on("change", function () {
        const parent = $(this).closest(".filter-item");
        parent.find(".subcategory-list").slideToggle(200);
    });

    const cookieName = "recently_viewed_products";

    function getCookie(name) {
        const value = `; ${document.cookie}`;
        const parts = value.split(`; ${name}=`);
        if (parts.length === 2) return parts.pop().split(';').shift();
    }

    const cookieValue = getCookie(cookieName);

    if (cookieValue) {
        const ids = cookieValue.split(',');
        console.log("🛒 Productos vistos recientemente:", ids);
    } else {
        console.log("No hay productos vistos recientemente aún.");
    }
});
