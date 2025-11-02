jQuery(document).ready(function($) {
    // Votación con estrellas
    $('.wprs-star').on('click', function() {
        if ($('.wprs-review-form').length) {
            var rating = $(this).data('value');
            $('#wprs-submit-review').data('rating', rating);
            $('.wprs-star').removeClass('filled');
            for (var i = 1; i <= rating; i++) {
                $('.wprs-star[data-value="' + i + '"]').addClass('filled');
            }
        }
    });

    // Enviar nueva reseña
    $('#wprs-submit-review').on('click', function() {
        var button = $(this);
        var productId = button.closest('.wprs-wrapper').data('product-id');
        var rating = button.data('rating');
        var reviewTitle = $('#wprs-review-title').val();
        var reviewText = $('#wprs-review-text').val();

        if (!rating) {
            alert('Por favor, selecciona una puntuación.');
            return;
        }

        $.ajax({
            url: wprs_ajax.ajax_url,
            type: 'POST',
            data: {
                action: 'wprs_submit_rating',
                nonce: wprs_ajax.nonce,
                product_id: productId,
                rating: rating,
                review_title: reviewTitle,
                review_text: reviewText,
            },
            success: function(response) {
                if (response.success) {
                    location.reload();
                } else {
                    alert('Error: ' + response.data);
                }
            }
        });
    });

    // Mostrar/ocultar formulario de edición
    $(document).on('click', '.wprs-edit-review-btn', function() {
        var reviewItem = $(this).closest('.wprs-review-item');
        var reviewId = reviewItem.data('review-id');

        // Si ya existe un formulario de edición, lo eliminamos
        if ($('#wprs-edit-form-' + reviewId).length) {
            $('#wprs-edit-form-' + reviewId).remove();
            return;
        }

        var currentTitle = reviewItem.find('.wprs-review-title strong').text();
        var currentText = reviewItem.find('.wprs-review-content').text().trim();
        var currentRating = reviewItem.find('.wprs-review-rating .filled').length;

        var editForm = `
            <div class="wprs-review-form" id="wprs-edit-form-${reviewId}" style="margin-top: 10px;">
                <div class="wprs-stars-edit" data-review-id="${reviewId}">
                    ${[1,2,3,4,5].map(i => `<span class="wprs-star-edit ${i <= currentRating ? 'filled' : ''}" data-value="${i}">&#9733;</span>`).join('')}
                </div>
                <input type="text" class="wprs-edit-title" value="${currentTitle}" placeholder="Título de tu reseña">
                <textarea class="wprs-edit-text" placeholder="Escribe tu reseña aquí...">${currentText}</textarea>
                <button class="wprs-update-review-btn" data-review-id="${reviewId}" data-rating="${currentRating}">Actualizar Reseña</button>
            </div>
        `;
        reviewItem.append(editForm);
    });

    // Votación con estrellas en el formulario de edición
    $(document).on('click', '.wprs-star-edit', function() {
        var rating = $(this).data('value');
        var reviewId = $(this).parent().data('review-id');

        // Actualizar el atributo data-rating en el botón
        $('#wprs-edit-form-' + reviewId + ' .wprs-update-review-btn').data('rating', rating);

        // Actualizar visualmente las estrellas
        var stars = $('#wprs-edit-form-' + reviewId + ' .wprs-star-edit');
        stars.removeClass('filled');
        for (var i = 1; i <= rating; i++) {
            $('#wprs-edit-form-' + reviewId + ' .wprs-star-edit[data-value="' + i + '"]').addClass('filled');
        }
    });

    // Enviar actualización de reseña
    $(document).on('click', '.wprs-update-review-btn', function() {
        var button = $(this);
        var reviewId = button.data('review-id');
        var rating = button.data('rating');
        var form = button.parent();
        var newTitle = form.find('.wprs-edit-title').val();
        var newText = form.find('.wprs-edit-text').val();

        $.ajax({
            url: wprs_ajax.ajax_url,
            type: 'POST',
            data: {
                action: 'wprs_update_review',
                nonce: wprs_ajax.nonce,
                review_id: reviewId,
                rating: rating,
                review_title: newTitle,
                review_text: newText,
            },
            success: function(response) {
                if (response.success) {
                    location.reload();
                } else {
                    alert('Error: ' + response.data);
                }
            }
        });
    });
});
