jQuery(document).ready(function($) {
    var searchTimeout;

    $('.tremus-search-field').on('keyup', function() {
        var searchTerm = $(this).val().trim();
        var container = $(this).closest('.tremus-search-container');
        var resultsContainer = container.find('.tremus-search-results');

        clearTimeout(searchTimeout);

        if (searchTerm.length < 1) {
            resultsContainer.hide().empty();
            return;
        }

        // Mostrar contenedor y mensaje de "Buscando..."
        resultsContainer.html('<div class="tremus-loading">🔍 Buscando productos...</div>').show();

        searchTimeout = setTimeout(function() {
            $.ajax({
                url: tremus_ajax.ajax_url,
                type: 'POST',
                data: {
                    action: 'tremus_search',
                    search_term: searchTerm,
                },
                success: function(response) {
                    if (response.success) {
                        var resultsHtml = '<div class="tremus-results-wrapper">';

                        // Productos
                        if (response.data.products.length > 0) {
                            resultsHtml += '<h5>Productos</h5>';
                            resultsHtml += '<ul class="tremus-product-results">';
                            $.each(response.data.products, function(index, product) {
                                resultsHtml += '<li>';
                                resultsHtml += '<a href="' + product.url + '">';
                                resultsHtml += '<img src="' + product.image + '" alt="' + product.title + '">';
                                resultsHtml += '<span class="tremus-product-title">' + product.title + '</span>';
                                resultsHtml += '<span class="tremus-product-price">' + product.price + '</span>';
                                resultsHtml += '</a>';
                                resultsHtml += '</li>';
                            });
                            resultsHtml += '</ul>';
                        }

                        // Categorías
                        if (response.data.categories.length > 0) {
                            resultsHtml += '<h5>Categorías</h5>';
                            resultsHtml += '<ul class="tremus-category-results">';
                            $.each(response.data.categories, function(index, category) {
                                resultsHtml += '<li><a href="' + category.url + '">' + category.name + '</a></li>';
                            });
                            resultsHtml += '</ul>';
                        }

                        // Ver todos
                        if (response.data.products.length > 0) {
                            resultsHtml += '<a href="' + tremus_ajax.shop_page_url + '?s=' + encodeURIComponent(searchTerm) + '&post_type=product" class="tremus-view-all">Ver todos los resultados</a>';
                        }

                        resultsHtml += '</div>';

                        if (response.data.products.length > 0 || response.data.categories.length > 0) {
                            resultsContainer.html(resultsHtml).show();
                        } else {
                            resultsContainer.html('<div class="tremus-no-results">No se encontraron productos.</div>').show();
                        }
                    } else {
                        resultsContainer.html('<div class="tremus-no-results">Error en la búsqueda.</div>').show();
                    }
                },
                error: function() {
                    resultsContainer.html('<div class="tremus-no-results">Error en la búsqueda.</div>').show();
                }
            });
        }, 400); // delay para evitar llamadas constantes
    });

    // Ocultar resultados al hacer clic fuera
    $(document).on('click', function(e) {
        if (!$(e.target).closest('.tremus-search-container').length) {
            $('.tremus-search-results').hide();
        }
    });
});
