<?php

function tremus_banner_promo_shortcode() {
    // Obtener la página Inicio
    $pagina_inicio = get_page_by_path('inicio');
    if (!$pagina_inicio) return '';

    // Obtener los campos personalizados
    $banner_inicio = get_post_meta($pagina_inicio->ID, 'banner_inicio', true);
    $banner_fin = get_post_meta($pagina_inicio->ID, 'banner_fin', true);
    $banner_imagen = get_post_meta($pagina_inicio->ID, 'banner_imagen', true);

    // Validar fechas
    $hoy = date('Y-m-d');
    if (!$banner_inicio || !$banner_fin || $hoy < $banner_inicio || $hoy > $banner_fin) {
        return '';
    }

    // Validar imagen
    if (!$banner_imagen) return '';

    ob_start();
    ?>
    <div id="promoBanner" class="promo-banner-overlay">
        <div class="promo-banner-modal">
            <button id="closeBanner" class="promo-banner-close">&times;</button>
            <img src="<?php echo esc_url($banner_imagen); ?>" alt="Banner Promocional">
        </div>
    </div>

    <script>
      document.addEventListener('DOMContentLoaded', function() {
        const banner = document.getElementById('promoBanner');
        const closeBtn = document.getElementById('closeBanner');
    
        closeBtn.addEventListener('click', () => {
          banner.style.display = 'none';
          //sessionStorage.setItem('promoClosed', 'true');
        });
      });
    </script>
    <?php
    return ob_get_clean();
}
add_shortcode('banner_promo', 'tremus_banner_promo_shortcode');

