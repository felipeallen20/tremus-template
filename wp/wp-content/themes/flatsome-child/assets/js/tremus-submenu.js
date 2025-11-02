jQuery(document).ready(function() {
    const $ = jQuery;

    const button = $('#submenu-btn');
    const menu = $('#submenu-container');

    // Crear overlay dinámicamente si no existe
    if (!$('.submenu-overlay').length) {
        $('body').append('<div class="submenu-overlay"></div>');
    }
    const overlay = $('.submenu-overlay');

    // Abrir / cerrar menú
    $(document).on('click', '#submenu-btn', function(e) {
        console.log("funciono");
        e.stopPropagation();

        const menu = $('#submenu-container');
        const overlay = $('.submenu-overlay');

        const isOpen = menu.hasClass('open');
        if (!isOpen) {
            menu.addClass('open');
            overlay.addClass('active');
            $(this).attr('aria-expanded', 'true');
        } else {
            menu.removeClass('open');
            overlay.removeClass('active');
            $(this).attr('aria-expanded', 'false');
        }
    });

    // Cerrar al hacer clic fuera del menú o en el fondo
    $(document).on('click', function(e) {
        if (!$(e.target).closest('#submenu-container, #submenu-btn').length) {
            menu.removeClass('open');
            overlay.removeClass('active');
            button.attr('aria-expanded', 'false');
        }
    });

    // Evitar que los clics dentro del menú cierren el overlay
    menu.on('click', function(e) {
        e.stopPropagation();
    });

    const submenuContainer = document.getElementById("submenu-container");
    const toggleButtons = document.querySelectorAll(".submenu-toggle");

    // Abrir/cerrar submenús
    toggleButtons.forEach(btn => {
        btn.addEventListener("click", (e) => {
        e.preventDefault();
        const parent = btn.closest(".submenu-item");
        const submenu = parent.querySelector(".submenu-children");
        btn.classList.toggle("rotate");
        submenu.classList.toggle("open");
        });
    });

    // Cerrar al hacer clic fuera
    overlay.on('click', function(){
        submenuContainer.classList.remove("open");
        overlay.classList.remove("active");
    });
});
