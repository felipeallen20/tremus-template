jQuery(function($) {
    // Wait for the document to be ready
    $(document).ready(function() {

        // --- Quantity Buttons Handler ---
        // Handles increase and decrease button clicks
        $('body').on('click', '.tremus-qty-btn', function(e) {
            e.preventDefault();

            const $button = $(this);
            const targetInputId = $button.data('target');
            const $input = $('#' + targetInputId);

            if ($input.length === 0) {
                console.error('Quantity input not found for target:', targetInputId);
                return;
            }

            let currentValue = parseInt($input.val(), 10);
            const max = parseInt($input.attr('max'), 10) || 9999; // Fallback if max is not set
            const min = parseInt($input.attr('min'), 10) || 1;   // Fallback if min is not set
            const step = parseInt($input.attr('step'), 10) || 1;

            if ($button.hasClass('increase')) {
                if (currentValue < max) {
                    currentValue += step;
                }
            } else if ($button.hasClass('decrease')) {
                if (currentValue > min) {
                    currentValue -= step;
                }
            }

            $input.val(currentValue).trigger('change'); // Set new value and trigger change event
        });

        // --- Quantity Input Change Handler ---
        // Updates the "Add to Cart" button's data-quantity attribute when the input changes
        $('body').on('change', '.tremus-qty-input', function() {
            const $input = $(this);
            const newQuantity = $input.val();
            const $addToCartButton = $input.closest('.tremus-product').find('.add-to-cart-btn');

            if ($addToCartButton.length > 0) {
                $addToCartButton.attr('data-quantity', newQuantity);
                // For AJAX add to cart, we might also need to update the href if it contains quantity
                const href = $addToCartButton.attr('href');
                if (href) {
                   const newHref = href.replace(/(&|\?)quantity=\d+/, '$1quantity=' + newQuantity);
                   $addToCartButton.attr('href', newHref);
                }
            }
        });

    });
});
