(function($){
    function refreshStars($wrapper){
        var avg = parseFloat($wrapper.find('.wprs-stars').data('average')) || 0;
        $wrapper.find('.wprs-star').each(function(){
            var v = parseInt($(this).data('value'));
            if (v <= Math.round(avg)) $(this).addClass('filled');
            else $(this).removeClass('filled');
        });
    }

    // Hover acumulativo (ilumina todas las anteriores)
    $(document).on('mouseenter', '.wprs-star', function(){
        var $w = $(this).closest('.wprs-wrapper');
        var v = parseInt($(this).data('value'));
        $w.find('.wprs-star').each(function(){
            if (parseInt($(this).data('value')) <= v) $(this).addClass('hovered');
            else $(this).removeClass('hovered');
        });
    });

    // Quitar hover al salir del área de estrellas
    $(document).on('mouseleave', '.wprs-stars', function(){
        $(this).find('.wprs-star').removeClass('hovered');
    });

    // Click para enviar rating
    $(document).on('click', '.wprs-star', function(){
        var $w = $(this).closest('.wprs-wrapper');
        if ($w.find('.wprs-already').length) return; // ya votó

        var val = parseInt($(this).data('value'));
        var product_id = parseInt($w.data('product-id'));

        var data = {
            action: 'wprs_submit_rating',
            nonce: wprs_ajax.nonce,
            product_id: product_id,
            rating: val
        };

        // Mostrar visual de selección inmediata
        $w.find('.wprs-star').each(function(){
            if (parseInt($(this).data('value')) <= val) $(this).addClass('filled');
            else $(this).removeClass('filled');
        });

        // Enviar a servidor
        $.post(wprs_ajax.ajax_url, data, function(res){
            if (res.success) {
                $w.find('.wprs-already').remove();
                $w.append('<div class="wprs-already">Gracias por votar</div>');
                setTimeout(function(){ location.reload(); }, 700);
            } else {
                alert(res.data || 'Error al votar');
            }
        });
    });

    // Refrescar visual al cargar
    $(document).ready(function(){
        $('.wprs-wrapper').each(function(){ refreshStars($(this)); });
    });
})(jQuery);
