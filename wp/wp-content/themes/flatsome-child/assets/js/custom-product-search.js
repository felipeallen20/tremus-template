jQuery(document).ready(function($) {
    const input = $('#custom-product-search');
    const results = $('#custom-search-results');
    const searchContainer = $('.custom-search-container');
    let timer = null;

    // Al escribir en el input
    input.on('keyup', function() {
        const term = $(this).val().trim();
        clearTimeout(timer);
        results.empty();

        // Si se borra el texto, ocultar resultados
        if (term.length < 2) {
            results.hide();
            return;
        }

        // Mostrar el contenedor con el mensaje de carga
        results.show().append('<li class="loading">Cargando...</li>');

        // Pequeño delay para no saturar el servidor
        timer = setTimeout(() => {
            fetch(`${tremusSearch.ajax_url}?action=tremus_search_products&term=${encodeURIComponent(term)}`)
                .then(response => response.json())
                .then(data => {
                    results.empty();

                    if (!data.length) {
                        results.append('<li>No se encontraron productos.</li>');
                        return;
                    }

                    data.forEach(item => {
                        results.append(`<li><a href="${item.link}">${item.title}</a></li>`);
                    });
                })
                .catch(err => {
                    console.error('Error:', err);
                    results.empty().append('<li>Error al cargar resultados.</li>');
                });
        }, 300);
    });

    // Cerrar los resultados al hacer clic fuera
    $(document).on('click', function(e) {
        if (!searchContainer.is(e.target) && searchContainer.has(e.target).length === 0) {
            results.hide();
        }
    });

    // Evitar que se oculte si se hace clic dentro
    searchContainer.on('click', function(e) {
        e.stopPropagation();
    });
});
