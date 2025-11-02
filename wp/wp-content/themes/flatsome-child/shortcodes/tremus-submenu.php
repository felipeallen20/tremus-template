<?php
/**
 * Shortcode: [tremus_submenu menu="nombre-del-menu"]
 */

function tremus_submenu_shortcode($atts) {
    $atts = shortcode_atts([
        'menu' => '',
    ], $atts, 'tremus_submenu');

    if (empty($atts['menu'])) return '<p>No se definió el menú.</p>';

    $menu_items = wp_get_nav_menu_items($atts['menu']);
    if (!$menu_items) return '<p>Menú no encontrado.</p>';

    // Organizar jerarquía
    $menu_tree = [];
    foreach ($menu_items as $item) {
        if ($item->menu_item_parent == 0) {
            $menu_tree[$item->ID] = [
                'item' => $item,
                'children' => [],
            ];
        } else {
            $menu_tree[$item->menu_item_parent]['children'][] = $item;
        }
    }

    ob_start();
    ?>
    <div class="tremus-submenu-wrapper">
        <div class="submenu-overlay" id="submenu-overlay"></div>

        <div id="submenu-container" class="submenu-container">
            <ul class="submenu-list">
                <li class="submenu-item"><a href="#">☰ Menu</a></li>

                <?php foreach ($menu_tree as $node): ?>
                    <li class="submenu-item <?php echo !empty($node['children']) ? 'has-children' : ''; ?>">
                        <div class="submenu-link-wrapper">
                            <a href="<?php echo esc_url($node['item']->url); ?>">
                                <?php echo esc_html($node['item']->title); ?>
                            </a>

                            <?php if (!empty($node['children'])): ?>
                                <button class="submenu-toggle">
                                    <i class="fas fa-chevron-down"></i>
                                </button>
                            <?php endif; ?>
                        </div>

                        <?php if (!empty($node['children'])): ?>
                            <ul class="submenu-children">
                                <?php foreach ($node['children'] as $child): ?>
                                    <li><a href="<?php echo esc_url($child->url); ?>"><?php echo esc_html($child->title); ?></a></li>
                                <?php endforeach; ?>
                            </ul>
                        <?php endif; ?>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
    <?php
    return ob_get_clean();
}
add_shortcode('tremus_submenu', 'tremus_submenu_shortcode');
