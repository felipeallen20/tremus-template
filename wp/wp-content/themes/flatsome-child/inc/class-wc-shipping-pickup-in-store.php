<?php
if (!defined('ABSPATH')) {
    exit;
}

function wc_pickup_in_store_shipping_method_init() {

    if (!class_exists('WC_Pickup_In_Store_Shipping_Method')) {

        class WC_Pickup_In_Store_Shipping_Method extends WC_Shipping_Method {

            public function __construct($instance_id = 0) {
                $this->id                 = 'pickup_in_store';
                $this->instance_id        = absint($instance_id);
                $this->method_title       = __('Retiro en Tienda', 'woocommerce');
                $this->method_description = __('Permite a los clientes retirar sus pedidos en una de tus tiendas.', 'woocommerce');
                $this->supports           = array(
                    'shipping-zones',
                    'instance-settings',
                    'instance-settings-modal',
                );
                $this->init();
            }

            private function init() {
                $this->init_form_fields();
                $this->init_settings();

                $this->title              = $this->get_option('title', 'Retiro en Tienda');
                $this->tax_status         = $this->get_option('tax_status');
                $this->cost               = $this->get_option('cost');
                $this->type               = $this->get_option('type', 'order');

                add_action('woocommerce_update_options_shipping_' . $this->id, array($this, 'process_admin_options'));
            }

            public function init_form_fields() {
                $this->instance_form_fields = array(
                    'title' => array(
                        'title'       => __('Título del método', 'woocommerce'),
                        'type'        => 'text',
                        'description' => __('Esto controla el título que el usuario ve durante el checkout.', 'woocommerce'),
                        'default'     => __('Retiro en Tienda', 'woocommerce'),
                        'desc_tip'    => true,
                    ),
                    'cost' => array(
                        'title'       => __('Costo', 'woocommerce'),
                        'type'        => 'text',
                        'placeholder' => '0',
                        'description' => __('Costo opcional para el retiro en tienda.', 'woocommerce'),
                        'default'     => '0',
                        'desc_tip'    => true,
                    ),
                    'tax_status' => array(
                        'title'   => __('Estado del impuesto', 'woocommerce'),
                        'type'    => 'select',
                        'class'   => 'wc-enhanced-select',
                        'default' => 'none',
                        'options' => array(
                            'taxable' => __('Gravable', 'woocommerce'),
                            'none'    => _x('Ninguno', 'Tax status', 'woocommerce'),
                        ),
                    ),
                );
            }

            public function calculate_shipping($package = array()) {
                $this->add_rate(array(
                    'id'      => $this->id . ':' . $this->instance_id,
                    'label'   => $this->title,
                    'cost'    => $this->cost,
                    'package' => $package,
                ));
            }
        }
    }
}
add_action('woocommerce_shipping_init', 'wc_pickup_in_store_shipping_method_init');

function add_pickup_in_store_shipping_method($methods) {
    $methods['pickup_in_store'] = 'WC_Pickup_In_Store_Shipping_Method';
    return $methods;
}
add_filter('woocommerce_shipping_methods', 'add_pickup_in_store_shipping_method');

function pickup_in_store_settings_tab($settings_tabs) {
    $settings_tabs['pickup_in_store_settings'] = __('Puntos de Retiro', 'woocommerce');
    return $settings_tabs;
}
add_filter('woocommerce_settings_tabs_array', 'pickup_in_store_settings_tab', 50);

function pickup_in_store_settings_page() {
    woocommerce_admin_fields(get_pickup_in_store_settings());
}
add_action('woocommerce_settings_tabs_pickup_in_store_settings', 'pickup_in_store_settings_page');

function update_pickup_in_store_settings() {
    woocommerce_update_options(get_pickup_in_store_settings());
}
add_action('woocommerce_update_options_pickup_in_store_settings', 'update_pickup_in_store_settings');

function get_pickup_in_store_settings() {
    $settings = array(
        'section_title' => array(
            'name' => __('Puntos de Retiro', 'woocommerce'),
            'type' => 'title',
            'desc' => __('Añade o edita los puntos de retiro para tus clientes.', 'woocommerce'),
            'id'   => 'wc_settings_pickup_in_store_section_title'
        ),
        'pickup_locations' => array(
            'name' => __('Tiendas', 'woocommerce'),
            'type' => 'pickup_locations_table',
            'id'   => 'wc_settings_pickup_in_store_locations'
        ),
        'section_end' => array(
            'type' => 'sectionend',
            'id'   => 'wc_settings_pickup_in_store_section_end'
        )
    );
    return apply_filters('wc_pickup_in_store_settings', $settings);
}

function pickup_locations_table_field() {
    $locations = get_option('woocommerce_pickup_locations', array());
    ?>
    <tr valign="top">
        <th scope="row" class="titledesc"><?php _e('Puntos de Retiro', 'woocommerce'); ?></th>
        <td class="forminp">
            <style>
                #pickup_locations_table { width: 100%; border-collapse: collapse; }
                #pickup_locations_table th, #pickup_locations_table td { border: 1px solid #ccc; padding: 8px; text-align: left; }
                #pickup_locations_table .actions { text-align: center; }
                .widefat .button { margin-right: 5px; }
            </style>
            <table id="pickup_locations_table" class="widefat" cellspacing="0">
                <thead>
                    <tr>
                        <th><?php _e('Nombre', 'woocommerce'); ?></th>
                        <th><?php _e('Dirección', 'woocommerce'); ?></th>
                        <th><?php _e('Comuna', 'woocommerce'); ?></th>
                        <th><?php _e('Región', 'woocommerce'); ?></th>
                        <th><?php _e('Horario', 'woocommerce'); ?></th>
                        <th><?php _e('Estado', 'woocommerce'); ?></th>
                        <th class="actions"><?php _e('Acciones', 'woocommerce'); ?></th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    if (!empty($locations)) {
                        foreach ($locations as $key => $location) {
                            ?>
                            <tr>
                                <td><?php echo esc_html($location['name']); ?></td>
                                <td><?php echo esc_html($location['address']); ?></td>
                                <td><?php echo esc_html($location['commune']); ?></td>
                                <td><?php echo esc_html($location['region']); ?></td>
                                <td><?php echo esc_html($location['hours']); ?></td>
                                <td><?php echo $location['status'] === 'active' ? __('Activo', 'woocommerce') : __('Inactivo', 'woocommerce'); ?></td>
                                <td class="actions">
                                    <button type="button" class="button edit-location" data-key="<?php echo esc_attr($key); ?>"><?php _e('Editar', 'woocommerce'); ?></button>
                                    <button type="button" class="button button-danger delete-location" data-key="<?php echo esc_attr($key); ?>"><?php _e('Eliminar', 'woocommerce'); ?></button>
                                </td>
                            </tr>
                            <?php
                        }
                    } else {
                        ?>
                        <tr>
                            <td colspan="7"><?php _e('No hay puntos de retiro definidos.', 'woocommerce'); ?></td>
                        </tr>
                        <?php
                    }
                    ?>
                </tbody>
            </table>
            <button type="button" id="add_location_button" class="button button-primary" style="margin-top: 10px;"><?php _e('Añadir Punto de Retiro', 'woocommerce'); ?></button>

            <div id="add_location_form" style="display:none; margin-top:20px; padding: 20px; border: 1px solid #ccc;">
                <h2><?php _e('Añadir/Editar Punto de Retiro', 'woocommerce'); ?></h2>
                <input type="hidden" id="edit_location_key" value="">
                <p><label><?php _e('Nombre:', 'woocommerce'); ?><br/><input type="text" id="location_name" style="width:100%;"></label></p>
                <p><label><?php _e('Dirección:', 'woocommerce'); ?><br/><input type="text" id="location_address" style="width:100%;"></label></p>
                <p><label><?php _e('Comuna:', 'woocommerce'); ?><br/><input type="text" id="location_commune" style="width:100%;"></label></p>
                <p><label><?php _e('Región:', 'woocommerce'); ?><br/><input type="text" id="location_region" style="width:100%;"></label></p>
                <p><label><?php _e('Horario:', 'woocommerce'); ?><br/><input type="text" id="location_hours" style="width:100%;"></label></p>
                <p><label><?php _e('Estado:', 'woocommerce'); ?><br/>
                    <select id="location_status" style="width:100%;">
                        <option value="active"><?php _e('Activo', 'woocommerce'); ?></option>
                        <option value="inactive"><?php _e('Inactivo', 'woocommerce'); ?></option>
                    </select>
                </label></p>
                <button type="button" id="save_location_button" class="button button-primary"><?php _e('Guardar', 'woocommerce'); ?></button>
                <button type="button" id="cancel_location_button" class="button"><?php _e('Cancelar', 'woocommerce'); ?></button>
            </div>

            <script type="text/javascript">
                jQuery(document).ready(function($) {
                    $('#add_location_button').on('click', function() {
                        $('#edit_location_key').val('');
                        $('#location_name').val('');
                        $('#location_address').val('');
                        $('#location_commune').val('');
                        $('#location_region').val('');
                        $('#location_hours').val('');
                        $('#location_status').val('active');
                        $('#add_location_form').slideDown();
                    });

                    $('#cancel_location_button').on('click', function() {
                        $('#add_location_form').slideUp();
                    });

                    $('.edit-location').on('click', function() {
                        var key = $(this).data('key');
                        var locations = <?php echo json_encode($locations); ?>;
                        var location = locations[key];

                        $('#edit_location_key').val(key);
                        $('#location_name').val(location.name);
                        $('#location_address').val(location.address);
                        $('#location_commune').val(location.commune);
                        $('#location_region').val(location.region);
                        $('#location_hours').val(location.hours);
                        $('#location_status').val(location.status);

                        $('#add_location_form').slideDown();
                    });

                    $('#save_location_button').on('click', function() {
                        var data = {
                            action: 'save_pickup_location',
                            nonce: '<?php echo wp_create_nonce("save_pickup_location_nonce"); ?>',
                            key: $('#edit_location_key').val(),
                            name: $('#location_name').val(),
                            address: $('#location_address').val(),
                            commune: $('#location_commune').val(),
                            region: $('#location_region').val(),
                            hours: $('#location_hours').val(),
                            status: $('#location_status').val()
                        };

                        $.post(ajaxurl, data, function(response) {
                            if(response.success) {
                                window.location.reload();
                            } else {
                                alert(response.data.message);
                            }
                        });
                    });

                     $('.delete-location').on('click', function() {
                        if (confirm('<?php _e('¿Estás seguro de que quieres eliminar este punto de retiro?', 'woocommerce'); ?>')) {
                            var key = $(this).data('key');
                            var data = {
                                action: 'delete_pickup_location',
                                nonce: '<?php echo wp_create_nonce("delete_pickup_location_nonce"); ?>',
                                key: key
                            };

                            $.post(ajaxurl, data, function(response) {
                                if(response.success) {
                                    window.location.reload();
                                } else {
                                    alert(response.data.message);
                                }
                            });
                        }
                    });
                });
            </script>
        </td>
    </tr>
    <?php
}
add_action('woocommerce_admin_field_pickup_locations_table', 'pickup_locations_table_field');

function save_pickup_location() {
    check_ajax_referer('save_pickup_location_nonce', 'nonce');

    $locations = get_option('woocommerce_pickup_locations', array());
    $key = isset($_POST['key']) && $_POST['key'] !== '' ? intval($_POST['key']) : null;

    $location_data = array(
        'name'    => sanitize_text_field($_POST['name']),
        'address' => sanitize_text_field($_POST['address']),
        'commune' => sanitize_text_field($_POST['commune']),
        'region'  => sanitize_text_field($_POST['region']),
        'hours'   => sanitize_text_field($_POST['hours']),
        'status'  => sanitize_text_field($_POST['status']),
    );

    if ($key !== null && isset($locations[$key])) {
        $locations[$key] = $location_data;
    } else {
        $locations[] = $location_data;
    }

    update_option('woocommerce_pickup_locations', $locations);
    wp_send_json_success();
}
add_action('wp_ajax_save_pickup_location', 'save_pickup_location');

function delete_pickup_location() {
    check_ajax_referer('delete_pickup_location_nonce', 'nonce');

    $locations = get_option('woocommerce_pickup_locations', array());
    $key = intval($_POST['key']);

    if (isset($locations[$key])) {
        unset($locations[$key]);
        update_option('woocommerce_pickup_locations', array_values($locations));
        wp_send_json_success();
    } else {
        wp_send_json_error(array('message' => 'Error: La ubicación no existe.'));
    }
}
add_action('wp_ajax_delete_pickup_location', 'delete_pickup_location');
