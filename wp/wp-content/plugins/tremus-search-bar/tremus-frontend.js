jQuery(document).ready(function($) {
    var searchTimeout;
    $('.tremus-search-field').on('keyup', function() {
        var searchTerm = $(this).val();
        var resultsContainer = $(this).closest('.tremus-search-container').find('.tremus-search-results');

        clearTimeout(searchTimeout);

        if (searchTerm.length < 3) {
            resultsContainer.hide();
            return;
        }

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

                        // Display products
                        if (response.data.products.length > 0) {
                            resultsHtml += '<h5>Products</h5>';
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

                        // Display categories
                        if (response.data.categories.length > 0) {
                            resultsHtml += '<h5>Categories</h5>';
                            resultsHtml += '<ul class="tremus-category-results">';
                            $.each(response.data.categories, function(index, category) {
                                resultsHtml += '<li>';
                                resultsHtml += '<a href="' + category.url + '">' + category.name + '</a>';
                                resultsHtml += '</li>';
                            });
                            resultsHtml += '</ul>';
                        }

                        // "View all results" link
                        if (response.data.products.length > 0) {
                            resultsHtml += '<a href="' + tremus_ajax.shop_page_url + '?s=' + searchTerm + '&post_type=product" class="tremus-view-all">View all results</a>';
                        }

                        resultsHtml += '</div>';

                        if (response.data.products.length > 0 || response.data.categories.length > 0) {
                            resultsContainer.html(resultsHtml).show();
                        } else {
                            resultsContainer.hide();
                        }
                    } else {
                        resultsContainer.hide();
                    }
                }
            });
        }, 500); // 500ms delay
    });

    // Hide results when clicking outside
    $(document).on('click', function(e) {
        if (!$(e.target).closest('.tremus-search-container').length) {
            $('.tremus-search-results').hide();
        }
    });
});
