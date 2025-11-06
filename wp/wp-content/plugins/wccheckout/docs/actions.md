# Hooks

- [Actions](#actions)
- [Filters](#filters)

## Actions

### `cfw_angelleye_paypal_ec_is_express_checkout`

*Hook for when PayPal for WooCommerce is in express checkout mode*


**Changelog**

Version | Description
------- | -----------
`6.0.0` | 

Source: ./includes/Compatibility/Gateways/PayPalForWooCommerce.php, line 106

### `cfw_amazon_payment_gateway_found`

*Fires after amazon gateway is found*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$this->wc_gateway` |  | 

**Changelog**

Version | Description
------- | -----------
`2.0.0` | 

Source: ./includes/Compatibility/Gateways/AmazonPayV1.php, line 84

### `cfw_updated_setting`

*Fires when setting updates*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`array($setting, $value, $old_value)` |  | 

**Changelog**

Version | Description
------- | -----------
`10.1.7` | 

Source: ./includes/Managers/SettingsManagerAbstract.php, line 49

### `cfw_updated_setting_{$setting}`

*Fires when setting updates*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`array($value, $old_value)` |  | 

**Changelog**

Version | Description
------- | -----------
`10.1.7` | 

Source: ./includes/Managers/SettingsManagerAbstract.php, line 60

### `cfw_enqueue_scripts`

*Fires after script setup*


**Changelog**

Version | Description
------- | -----------
`5.0.0` | 

Source: ./includes/Managers/AssetManager.php, line 174

### `cfw_load_template_assets`

*Fires to trigger Templates to load their assets*


**Changelog**

Version | Description
------- | -----------
`3.0.0` | 

Source: ./includes/Managers/AssetManager.php, line 181

### `cfw_before_get_data`

*Fires before gathering data*


**Changelog**

Version | Description
------- | -----------
`9.0.38` | 

Source: ./includes/Managers/AssetManager.php, line 863

### `cfw_acr_handle_meta`

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$fields['cfw_meta_fields']` |  | 

Source: ./includes/Features/AbandonedCartRecovery.php, line 920

### `cfw_checkout_order_review_tab`

*Outputs order review step content*


**Changelog**

Version | Description
------- | -----------
`4.0.0` | 

Source: ./includes/Features/OrderReviewStep.php, line 79

### `cfw_order_bump_added_to_cart`

*Action hook to run after an order bump is added to the cart*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$bump_id` | `int` | The ID of the order bump

**Changelog**

Version | Description
------- | -----------
`8.0.0` | 

Source: ./includes/Features/OrderBumps.php, line 316

### `cfw_after_delivery_method`

*Fires after the delivery method radio buttons are rendered.*


**Changelog**

Version | Description
------- | -----------
`7.3.0` | 

Source: ./includes/Features/LocalPickup.php, line 122

### `cfw_delivery_method_changed`

*Fires when delivery method changes*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$parsed_data['cfw_delivery_method']` |  | 

**Changelog**

Version | Description
------- | -----------
`7.3.2` | 

Source: ./includes/Features/LocalPickup.php, line 323

### `cfw_before_admin_page_header`

*Fires before the admin page header.*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$this` |  | 

**Changelog**

Version | Description
------- | -----------
`7.0.0` | 

Source: ./includes/Admin/Pages/PageAbstract.php, line 88

### `cfw_after_admin_page_header`

*Fires after the admin page header.*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$this` |  | 

**Changelog**

Version | Description
------- | -----------
`7.0.0` | 

Source: ./includes/Admin/Pages/PageAbstract.php, line 141

### `cfw_before_admin_page_header`

*Fires before the admin page header*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$this` | `\Objectiv\Plugins\Checkout\Admin\Pages\Premium\AbandonedCartRecovery` | The AbandonedCartRecovery instance.

**Changelog**

Version | Description
------- | -----------
`7.0.0` | 

Source: ./includes/Admin/Pages/Premium/AbandonedCartRecovery.php, line 220

### `cfw_after_admin_page_header`

*Fires after the admin page header*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$this` | `\Objectiv\Plugins\Checkout\Admin\Pages\Premium\AbandonedCartRecovery` | The AbandonedCartRecovery instance.

**Changelog**

Version | Description
------- | -----------
`7.0.0` | 

Source: ./includes/Admin/Pages/Premium/AbandonedCartRecovery.php, line 260

### `cfw_before_admin_page_header`

*Fires before the admin page header*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$this` | `\Objectiv\Plugins\Checkout\Admin\Pages\Premium\OrderBumps` | The OrderBumps instance.

**Changelog**

Version | Description
------- | -----------
`7.0.0` | 

Source: ./includes/Admin/Pages/Premium/OrderBumps.php, line 188

### `cfw_after_admin_page_header`

*Fires after the admin page header*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$this` | `\Objectiv\Plugins\Checkout\Admin\Pages\Premium\AbandonedCartRecovery` | The AbandonedCartRecovery instance.

**Changelog**

Version | Description
------- | -----------
`7.0.0` | 

Source: ./includes/Admin/Pages/Premium/OrderBumps.php, line 228

### `cfw_before_admin_page_header`

*Fires before the admin page header*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$this` | `\Objectiv\Plugins\Checkout\Admin\Pages\Premium\LocalPickupAdmin` | The LocalPickupAdmin instance.

**Changelog**

Version | Description
------- | -----------
`7.0.0` | 

Source: ./includes/Admin/Pages/Premium/LocalPickupAdmin.php, line 147

### `cfw_after_admin_page_header`

*Fires after the admin page header*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$this` | `\Objectiv\Plugins\Checkout\Admin\Pages\Premium\LocalPickupAdmin` | The AbandonedCartRecovery instance.

**Changelog**

Version | Description
------- | -----------
`7.0.0` | 

Source: ./includes/Admin/Pages/Premium/LocalPickupAdmin.php, line 187

### `cfw_checkout_update_order_review`

*Fires when updating CheckoutWC order review*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`isset($_POST['post_data']) ? wp_unslash($_POST['post_data']) : ''` |  | 

**Changelog**

Version | Description
------- | -----------
`2.0.0` | 

Source: ./includes/Action/UpdateCheckoutAction.php, line 81

### `cfw_update_checkout_after_customer_save`

*Fires after customer address data has been updated. This is where we do cart updates*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`isset($_POST['post_data']) ? wp_unslash($_POST['post_data']) : ''` |  | 

**Changelog**

Version | Description
------- | -----------
`7.0.0` | 

Source: ./includes/Action/UpdateCheckoutAction.php, line 160

### `cfw_after_update_checkout_calculated`

*Fires after shipping and totals calculated during update_checkout refresh*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`isset($_POST['post_data']) ? wp_unslash($_POST['post_data']) : ''` |  | 
`$was_free_shipping_available_pre_cart_update` |  | 

**Changelog**

Version | Description
------- | -----------
`9.0.0` | 

Source: ./includes/Action/UpdateCheckoutAction.php, line 207

### `cfw_before_process_checkout`

*Fires before checkout is processed in complete order action*


**Changelog**

Version | Description
------- | -----------
`3.0.0` | 

Source: ./includes/Action/CompleteOrderAction.php, line 54

### `cfw_before_update_side_cart_action`

*Fires before updating the side cart.*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$cart_data` | `array` | The cart data.

**Changelog**

Version | Description
------- | -----------
`6.0.6` | 

Source: ./includes/Action/UpdateSideCart.php, line 34

### `cfw_before_order_bump_add_to_cart`

*Fires before order bump is added to the cart*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$this` |  | 

**Changelog**

Version | Description
------- | -----------
`9.0.0` | 

Source: ./includes/Model/Bumps/BumpAbstract.php, line 392

### `cfw_order_bump_add_to_cart_product_type_{$product_type}`

*Fires before order bump is added to the cart*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$product_id` | `int` | The product ID
`$quantity` | `int` | The quantity
`$variation_id` | `int` | The variation ID
`$variation_data` | `array` | The variation data
`$metadata` | `array` | The metadata
`$offer_product` | `\WC_Product` | The product

**Changelog**

Version | Description
------- | -----------
`9.0.0` | 

Source: ./includes/Model/Bumps/BumpAbstract.php, line 403

### `cfw_template_load_before_{$template_name}_{$template_piece_name}`

*Fires before template is output*


**Changelog**

Version | Description
------- | -----------
`3.0.0` | 

Source: ./includes/Model/Template.php, line 197

### `cfw_template_load_after_{$template_name}_{$template_piece_name}`

*Fires after template has been echoed out*


**Changelog**

Version | Description
------- | -----------
`3.0.0` | 

Source: ./includes/Model/Template.php, line 210

### `cfw_after_modal_variable_product_form`

*Action after modal order bump variable product form.*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$variable_product` | `\WC_Product` | 

**Changelog**

Version | Description
------- | -----------
`8.2.18` | 

Source: ./includes/API/GetVariationFormAPI.php, line 147

### `cfw_before_plugin_data_upgrades`

*Fires before plugin data upgrades.*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$this->db_version` |  | 

**Changelog**

Version | Description
------- | -----------
`9.0.0` | 

Source: ./includes/DatabaseUpdatesManager.php, line 136

### `cfw_after_plugin_data_upgrades`

*Fires after plugin data upgrades.*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$this->db_version` |  | 

**Changelog**

Version | Description
------- | -----------
`5.0.0` | 

Source: ./includes/DatabaseUpdatesManager.php, line 167

### `cfw_acr_activate`

*Action: cfw_acr_activate*

Fires when the plugin is activated.


**Changelog**

Version | Description
------- | -----------
`8.0.0` | 

Source: ./includes/DatabaseUpdatesManager.php, line 515

### `cfw_updated_to_1017`

*Action hook fired after the 10.1.7 database update routine runs.*

Used to trigger actions like initial telemetry sync.


**Changelog**

Version | Description
------- | -----------
`10.1.7` | 

Source: ./includes/DatabaseUpdatesManager.php, line 1105

### `cfw_updated_to_1018`

*Action hook fired after the 10.1.8 database update routine runs.*

Used to trigger actions like initial telemetry sync.


**Changelog**

Version | Description
------- | -----------
`10.1.8` | 

Source: ./includes/DatabaseUpdatesManager.php, line 1115

### `cfw_updated_to_1020`

*Action hook fired after the 10.2.0 database update routine runs.*

Used to trigger actions when Turnstile feature is added.


**Changelog**

Version | Description
------- | -----------
`10.2.0` | 

Source: ./includes/DatabaseUpdatesManager.php, line 1128

### `cfw_checkout_loaded_pre_head`

*Fires before document start*


**Changelog**

Version | Description
------- | -----------
`3.0.0` | 

Source: ./includes/Loaders/Redirect.php, line 181

### `cfw_before_header`

*Fires before header is output*


**Changelog**

Version | Description
------- | -----------
`3.0.0` | 

Source: ./includes/Loaders/Redirect.php, line 206

### `cfw_custom_header`

*Fires when custom header is hooked*


**Changelog**

Version | Description
------- | -----------
`3.0.0` | 

Source: ./includes/Loaders/Redirect.php, line 214

### `cfw_after_header`

*Fires after header is output*


**Changelog**

Version | Description
------- | -----------
`3.0.0` | 

Source: ./includes/Loaders/Redirect.php, line 224

### `cfw_wp_head`

*Fires after wp_head()*


**Changelog**

Version | Description
------- | -----------
`3.0.0` | 

Source: ./includes/Loaders/Redirect.php, line 238

### `cfw_custom_footer`

*Fires when custom footer is hooked*


**Changelog**

Version | Description
------- | -----------
`3.0.0` | 

Source: ./includes/Loaders/Redirect.php, line 286

### `cfw_wp_footer`

*Fires after wp_footer() is called*


**Changelog**

Version | Description
------- | -----------
`3.0.0` | 

Source: ./includes/Loaders/Redirect.php, line 301

### `cfw_template_after_init_order_pay`

*Fires when order pay page is initted*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$global_template_parameters` | `array` | The global template parameters

**Changelog**

Version | Description
------- | -----------
`8.1.6` | 

Source: ./includes/Loaders/LoaderAbstract.php, line 250

### `cfw_checkout_loaded_pre_head`

*Fires after the thank you page is initiated*


**Changelog**

Version | Description
------- | -----------
`3.0.0` | 

Source: ./includes/Loaders/LoaderAbstract.php, line 306

### `cfw_template_before_load`

*Fires before template pieces are loaded*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$template_file` | `string` | The template file

**Changelog**

Version | Description
------- | -----------
`3.0.0` | 

Source: ./includes/Loaders/LoaderAbstract.php, line 329

### `cfw_template_after_load`

*Fires after template pieces are loaded*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$template_file` | `string` | The template file

**Changelog**

Version | Description
------- | -----------
`3.0.0` | 

Source: ./includes/Loaders/LoaderAbstract.php, line 341

### `cfw_output_fieldset`

*Filter the account checkout fields.*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$account_checkout_fields` |  | 
`'account'` |  | 

**Changelog**

Version | Description
------- | -----------
`7.2.1` | 

Source: ./sources/php/functions.php, line 81

### `cfw_output_fieldset`

*This action is documented earlier in this file*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`cfw_get_shipping_checkout_fields()` |  | 
`'shipping'` |  | 

Source: ./sources/php/functions.php, line 110

### `cfw_output_fieldset`

*This action is documented earlier in this file*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$billing_checkout_fields` |  | 
`'billing'` |  | 

Source: ./sources/php/functions.php, line 140

### `cfw_output_fieldset`

*This action is documented earlier in this file*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$billing_fields_in_common` |  | 
`'billing'` |  | 

Source: ./sources/php/functions.php, line 149

### `cfw_output_fieldset`

*This action is documented earlier in this file*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$unique_fields` |  | 
`'billing_unique'` |  | 

Source: ./sources/php/functions.php, line 206

### `cfw_get_payment_methods_html`

*Fires before payment methods html is fetched*


**Changelog**

Version | Description
------- | -----------
`2.0.0` | 

Source: ./sources/php/functions.php, line 405

### `cfw_payment_methods_ul_start`

*Fires at start of payment methods UL*


**Changelog**

Version | Description
------- | -----------
`2.0.0` | 

Source: ./sources/php/functions.php, line 444

### `cfw_payment_gateway_list_{$gateway->id}_alternate`

*Fires after payment method LI to allow alternate / additional output*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`array($count)` |  | 

**Changelog**

Version | Description
------- | -----------
`2.0.0` | 

Source: ./sources/php/functions.php, line 568

### `cfw_payment_methods_ul_end`

*Fires after bottom of payment methods UL*


**Changelog**

Version | Description
------- | -----------
`2.0.0` | 

Source: ./sources/php/functions.php, line 582

### `cfw_order_item_after_data`

*Fires after cart item data output*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$item->get_raw_item()` |  | 
`$item->get_item_key()` |  | 
`$item` | `array` | ->get_raw_item() Raw item data

**Changelog**

Version | Description
------- | -----------
`7.1.3` | 

Source: ./sources/php/functions.php, line 651

### `cfw_before_cart_item_subtotal`

*This filter documented in elsewhere in this file*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$item` |  | 

Source: ./sources/php/functions.php, line 670

### `cfw_before_cart_summary_totals`

*Fires at start of cart summary totals table*


**Changelog**

Version | Description
------- | -----------
`2.0.0` | 

Source: ./sources/php/functions.php, line 843

### `cfw_after_cart_summary_totals`

*Fires at end of cart summary totals table before </table> tag*


**Changelog**

Version | Description
------- | -----------
`2.0.0` | 

Source: ./sources/php/functions.php, line 866

### `cfw_before_payment_method_heading`

*Fires above the payment method heading*


**Changelog**

Version | Description
------- | -----------
`5.1.1` | 

Source: ./sources/php/functions.php, line 941

### `cfw_checkout_before_payment_methods`

*Fires after payment methods heading and before transaction are encrypted statement*


**Changelog**

Version | Description
------- | -----------
`2.0.0` | 

Source: ./sources/php/functions.php, line 965

### `cfw_checkout_after_payment_methods`

*Fires at end of payment methods container before </div> tag*


**Changelog**

Version | Description
------- | -----------
`2.0.0` | 

Source: ./sources/php/functions.php, line 1012

### `cfw_checkout_before_billing_address`

*Fires before billing address radio group is output*


**Changelog**

Version | Description
------- | -----------
`2.0.0` | 

Source: ./sources/php/functions.php, line 1026

### `cfw_after_same_as_shipping_address_label`

*Fires after same as shipping address label*


**Changelog**

Version | Description
------- | -----------
`2.0.0` | 

Source: ./sources/php/functions.php, line 1084

### `cfw_start_billing_address_container`

*Fires before billing address inside billing address container*


**Changelog**

Version | Description
------- | -----------
`2.0.0` | 

Source: ./sources/php/functions.php, line 1109

### `cfw_end_billing_address_container`

*Fires after billing address inside billing address container*


**Changelog**

Version | Description
------- | -----------
`2.0.0` | 

Source: ./sources/php/functions.php, line 1118

### `cfw_start_billing_address_container`

*Fires before billing address inside billing address container*


**Changelog**

Version | Description
------- | -----------
`2.0.0` | 

Source: ./sources/php/functions.php, line 1134

### `cfw_end_billing_address_container`

*Fires after billing address inside billing address container*


**Changelog**

Version | Description
------- | -----------
`2.0.0` | 

Source: ./sources/php/functions.php, line 1143

### `cfw_checkout_after_billing_address`

*Fires after billing address*


**Changelog**

Version | Description
------- | -----------
`2.0.0` | 

Source: ./sources/php/functions.php, line 1154

### `cfw_before_breadcrumb_navigation`

*Fires before breadcrumb navigation is output*


**Changelog**

Version | Description
------- | -----------
`2.0.0` | 

Source: ./sources/php/functions.php, line 1539

### `cfw_after_breadcrumb_navigation`

*Fires after breadcrumb navigation is output*


**Changelog**

Version | Description
------- | -----------
`2.0.0` | 

Source: ./sources/php/functions.php, line 1559

### `cfw_cart_updated`

*Fires after the cart is updated*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$cart_updated` | `bool` | Whether the cart was updated
`$context` | `string` | The context of the cart update

**Changelog**

Version | Description
------- | -----------
`6.1.7` | 

Source: ./sources/php/functions.php, line 2102

### `cfw_after_modal_order_bump_variable_product_form`

*Action after modal order bump variable product form.*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$variable_product` | `\WC_Product` | 
`$bump` | `\Objectiv\Plugins\Checkout\Interfaces\BumpInterface` | 

**Changelog**

Version | Description
------- | -----------
`8.2.18` | 

Source: ./sources/php/functions.php, line 4048

### `cfw_after_modal_order_bump_regular_product_form`

*Action after modal order bump regular product form.*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$product` | `\WC_Product` | 
`$bump` | `\Objectiv\Plugins\Checkout\Interfaces\BumpInterface` | 

**Changelog**

Version | Description
------- | -----------
`8.2.18` | 

Source: ./sources/php/functions.php, line 4123

### `cfw_do_plugin_activation`

*Fires after plugin activation.*


**Changelog**

Version | Description
------- | -----------
`1.0.0` | 

Source: ./sources/php/init.php, line 770

### `cfw_do_plugin_deactivation`

*Fires after plugin deactivation.*


**Changelog**

Version | Description
------- | -----------
`1.0.0` | 

Source: ./sources/php/init.php, line 782

### `cfw_permissioned_init`

*Permissioned Init*

This hook runs on init if CheckoutWC is enabled and the license is valid or free, or the current user is an admin


**Changelog**

Version | Description
------- | -----------
`8.2.11` | 

Source: ./sources/php/init.php, line 894

### `cfw_init_ab_tests`

*Load AB tests here*


**Changelog**

Version | Description
------- | -----------
`8.2.8` | 

Source: ./sources/php/premium-init.php, line 57

### `cfw_after_cart_summary`

*Fires after cart summary before closing </div> tag*


**Changelog**

Version | Description
------- | -----------
`3.0.0` | 

Source: ./sources/php/template-functions.php, line 133

### `cfw_before_print_notices`

*Fires before printing notices*


**Changelog**

Version | Description
------- | -----------
`9.0.0` | 

Source: ./sources/php/template-functions.php, line 257

### `cfw_payment_request_buttons`

*Hook for adding payment request buttons*


**Changelog**

Version | Description
------- | -----------
`3.0.0` | 

Source: ./sources/php/template-functions.php, line 282

### `cfw_before_customer_info_account_details`

*Fires before account details on customer info tab*


**Changelog**

Version | Description
------- | -----------
`7.0.0` | 

Source: ./sources/php/template-functions.php, line 336

### `cfw_after_customer_info_account_details`

*Fires before account details on customer info tab*


**Changelog**

Version | Description
------- | -----------
`7.0.0` | 

Source: ./sources/php/template-functions.php, line 349

### `cfw_before_enhanced_login_prompt`

*Fires before enhanced login prompt*


**Changelog**

Version | Description
------- | -----------
`3.0.0` | 

Source: ./sources/php/template-functions.php, line 375

### `cfw_after_enhanced_login_prompt`

*Fires after enhanced login prompt*


**Changelog**

Version | Description
------- | -----------
`2.0.0` | 

Source: ./sources/php/template-functions.php, line 408

### `cfw_checkout_after_email`

*Fires after email field output*


**Changelog**

Version | Description
------- | -----------
`3.0.0` | 

Source: ./sources/php/template-functions.php, line 448

### `cfw_checkout_before_customer_info_address`

*Fires before customer info address module*


**Changelog**

Version | Description
------- | -----------
`2.0.0` | 

Source: ./sources/php/template-functions.php, line 620

### `cfw_checkout_before_shipping_address`

*Fires before shipping address*


**Changelog**

Version | Description
------- | -----------
`2.0.0` | 

Source: ./sources/php/template-functions.php, line 631

### `cfw_checkout_before_billing_address`

*Fires before billing address*


**Changelog**

Version | Description
------- | -----------
`2.0.0` | 

Source: ./sources/php/template-functions.php, line 638

### `cfw_after_customer_info_address_heading`

*Fires after customer info address heading*


**Changelog**

Version | Description
------- | -----------
`2.0.0` | 

Source: ./sources/php/template-functions.php, line 682

### `cfw_after_customer_info_shipping_address_heading`

*Fires after customer info address shipping heading*


**Changelog**

Version | Description
------- | -----------
`4.0.4` | 

Source: ./sources/php/template-functions.php, line 690

### `cfw_after_customer_info_billing_address_heading`

*Fires after customer info address billing heading*


**Changelog**

Version | Description
------- | -----------
`4.0.4` | 

Source: ./sources/php/template-functions.php, line 697

### `cfw_start_billing_address_container`

*Fires before billing address inside billing address container*


**Changelog**

Version | Description
------- | -----------
`4.0.4` | 

Source: ./sources/php/template-functions.php, line 709

### `cfw_end_billing_address_container`

*Fires before billing address inside billing address container*


**Changelog**

Version | Description
------- | -----------
`4.0.4` | 

Source: ./sources/php/template-functions.php, line 718

### `cfw_start_shipping_address_container`

*Fires before shipping address inside shipping address container*


**Changelog**

Version | Description
------- | -----------
`4.0.4` | 

Source: ./sources/php/template-functions.php, line 727

### `cfw_end_shipping_address_container`

*Fires after shipping address inside shipping address container*


**Changelog**

Version | Description
------- | -----------
`4.0.4` | 

Source: ./sources/php/template-functions.php, line 736

### `cfw_checkout_after_shipping_address`

*Fires after shipping address*


**Changelog**

Version | Description
------- | -----------
`2.0.0` | 

Source: ./sources/php/template-functions.php, line 748

### `cfw_checkout_after_billing_address`

*Fires after billing address*


**Changelog**

Version | Description
------- | -----------
`2.0.0` | 

Source: ./sources/php/template-functions.php, line 755

### `cfw_checkout_after_customer_info_address`

*Fires at the bottom of customer info address module after closing </div>*


**Changelog**

Version | Description
------- | -----------
`2.0.0` | 

Source: ./sources/php/template-functions.php, line 766

### `cfw_checkout_before_customer_info_tab_nav`

*Fires before customer info tab navigation container*


**Changelog**

Version | Description
------- | -----------
`2.0.0` | 

Source: ./sources/php/template-functions.php, line 825

### `cfw_checkout_after_customer_info_tab_nav`

*Fires after customer info tab navigation container*


**Changelog**

Version | Description
------- | -----------
`2.0.0` | 

Source: ./sources/php/template-functions.php, line 843

### `cfw_checkout_before_payment_method_tab_nav`

*Fires before payment method tab navigation container*


**Changelog**

Version | Description
------- | -----------
`2.0.0` | 

Source: ./sources/php/template-functions.php, line 859

### `cfw_checkout_after_payment_method_tab_nav`

*Fires after payment method tab navigation container*


**Changelog**

Version | Description
------- | -----------
`2.0.0` | 

Source: ./sources/php/template-functions.php, line 884

### `cfw_after_shipping_packages`

*Fires after shipping packages component*


**Changelog**

Version | Description
------- | -----------
`9.0.8` | 

Source: ./sources/php/template-functions.php, line 947

### `cfw_checkout_before_shipping_method_tab_nav`

*Fires before shipping method tab navigation container*


**Changelog**

Version | Description
------- | -----------
`2.0.0` | 

Source: ./sources/php/template-functions.php, line 961

### `cfw_checkout_after_shipping_method_tab_nav`

*Fires after shipping method tab navigation container*


**Changelog**

Version | Description
------- | -----------
`2.0.0` | 

Source: ./sources/php/template-functions.php, line 978

### `cfw_before_payment_methods_block`

*Fires before payment methods block*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$checkout_object` |  | 
`$show_title` |  | 

**Changelog**

Version | Description
------- | -----------
`7.2.7` | 

Source: ./sources/php/template-functions.php, line 995

### `cfw_after_payment_methods_block`

*Fires after the payment methods block*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$checkout_object` |  | 
`$show_title` |  | 

**Changelog**

Version | Description
------- | -----------
`7.2.7` | 

Source: ./sources/php/template-functions.php, line 1004

### `cfw_after_payment_information_address_heading`

*Fires after the billing address heading on the payment tab*


**Changelog**

Version | Description
------- | -----------
`5.3.2` | 

Source: ./sources/php/template-functions.php, line 1045

### `cfw_checkout_after_payment_tab_billing_address`

*Fires after payment method tab billing address*


**Changelog**

Version | Description
------- | -----------
`2.0.0` | 

Source: ./sources/php/template-functions.php, line 1069

### `cfw_output_fieldset`

*Documented in functions.php*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`WC()->checkout()->get_checkout_fields('order')` |  | 

Source: ./sources/php/template-functions.php, line 1091

### `cfw_checkout_before_payment_method_terms_checkbox`

*Fires before payment method terms and conditions output*


**Changelog**

Version | Description
------- | -----------
`2.0.0` | 

Source: ./sources/php/template-functions.php, line 1109

### `cfw_checkout_before_payment_method_tab_nav`

*Fires before payment method tab navigation container*


**Changelog**

Version | Description
------- | -----------
`2.0.0` | 

Source: ./sources/php/template-functions.php, line 1127

### `cfw_payment_nav_place_order_button`

*Fires after payment method tab navigation container*


**Changelog**

Version | Description
------- | -----------
`3.8.0` | 

Source: ./sources/php/template-functions.php, line 1151

### `cfw_checkout_after_payment_method_tab_nav`

*Fires after payment method tab navigation container*


**Changelog**

Version | Description
------- | -----------
`2.0.0` | 

Source: ./sources/php/template-functions.php, line 1162

### `cfw_payment_nav_place_order_button`

*Fires in the order review tab place order button container.*


**Changelog**

Version | Description
------- | -----------
`4.0.0` | 

Source: ./sources/php/template-functions.php, line 1191

### `cfw_checkout_after_payment_method_tab_nav`

*Fires after payment method tab navigation container*


**Changelog**

Version | Description
------- | -----------
`2.0.0` | 

Source: ./sources/php/template-functions.php, line 1202

### `cfw_cart_html_before_cart_container`

*Before cart html table output*


**Changelog**

Version | Description
------- | -----------
`9.0.39` | 

Source: ./sources/php/template-functions.php, line 1240

### `cfw_before_coupon_module`

*Fires before coupon module*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$mobile` |  | 

**Changelog**

Version | Description
------- | -----------
`2.0.0` | 

Source: ./sources/php/template-functions.php, line 1256

### `cfw_after_coupon_module`

*Fires after coupon module*


**Changelog**

Version | Description
------- | -----------
`2.0.0` | 

Source: ./sources/php/template-functions.php, line 1267

### `cfw_after_thank_you_order_updates_text`

*Fires after the order updates text is output*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$order` |  | 

**Changelog**

Version | Description
------- | -----------
`7.2.7` | 

Source: ./sources/php/template-functions.php, line 1571

### `cfw_before_thank_you_customer_information`

*Fires before thank you customer information output (after Information heading)*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$order` | `\WC_Order` | The order object

**Changelog**

Version | Description
------- | -----------
`2.0.0` | 

Source: ./sources/php/template-functions.php, line 1649

### `cfw_before_order_pay_submit`

*Fires before order pay submit*


**Changelog**

Version | Description
------- | -----------
`10.2.0` | 

Source: ./sources/php/template-functions.php, line 1855

### `cfw_checkout_customer_info_tab`

*Outputs customer info tab content*


**Changelog**

Version | Description
------- | -----------
`2.0.0` | 

Source: ./sources/php/template-functions.php, line 1966

### `cfw_checkout_shipping_method_tab`

*Outputs customer info tab content*


**Changelog**

Version | Description
------- | -----------
`2.0.0` | 

Source: ./sources/php/template-functions.php, line 1986

### `cfw_checkout_payment_method_tab`

*Outputs customer info tab content*


**Changelog**

Version | Description
------- | -----------
`2.0.0` | 

Source: ./sources/php/template-functions.php, line 2006

### `cfw_thank_you_before_main_container`

*Fires before <main> container on thank you page*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$order` | `\WC_Order` | The order object

**Changelog**

Version | Description
------- | -----------
`3.0.0` | 

Source: ./templates/futurist/thank-you.php, line 6

### `cfw_thank_you_main_container_start`

*Fires at top of <main> container on thank you page*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$order` | `\WC_Order` | The order object

**Changelog**

Version | Description
------- | -----------
`3.0.0` | 

Source: ./templates/futurist/thank-you.php, line 16

### `cfw_thank_you_before_order_review`

*Fires at top of #order_review on thank you page*


**Changelog**

Version | Description
------- | -----------
`3.0.0` | 

Source: ./templates/futurist/thank-you.php, line 31

### `cfw_thank_you_content`

*Fires before <main> container on thank you page*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$order` | `\WC_Order` | The order object
`$order_statuses` | `array` | The order statuses we are progressing through
`$show_downloads` | `bool` | Whether to show downloads section
`$downloads` | `array` | The downloads

**Changelog**

Version | Description
------- | -----------
`3.0.0` | 

Source: ./templates/futurist/thank-you.php, line 38

### `cfw_thank_you_after_order_review`

*Fires at the end of <main> container on thank you page*


**Changelog**

Version | Description
------- | -----------
`3.0.0` | 

Source: ./templates/futurist/thank-you.php, line 62

### `cfw_thank_you_cart_summary`

*Fires in cart summary sidebar container on thank you page*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$order` | `\WC_Order` | The order object

**Changelog**

Version | Description
------- | -----------
`3.0.0` | 

Source: ./templates/futurist/thank-you.php, line 74

### `cfw_thank_you_main_container_end`

*Fires at the bottom of <main> container on thank you page*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$order` | `\WC_Order` | The order object

**Changelog**

Version | Description
------- | -----------
`3.0.0` | 

Source: ./templates/futurist/thank-you.php, line 88

### `cfw_thank_you_after_main_container`

*Fires after <main> container on thank you page*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$order` | `\WC_Order` | The order object

**Changelog**

Version | Description
------- | -----------
`3.0.0` | 

Source: ./templates/futurist/thank-you.php, line 99

### `cfw_checkout_before_main_container`

*Fires before <main> container*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`WC()->checkout()` |  | 

**Changelog**

Version | Description
------- | -----------
`3.0.0` | 

Source: ./templates/futurist/content.php, line 6

### `cfw_checkout_main_container_start`

*Fires at the beginning of the <main> container*


**Changelog**

Version | Description
------- | -----------
`3.0.0` | 

Source: ./templates/futurist/content.php, line 16

### `cfw_checkout_before_order_review_container`

*Fires before the #order_review container inside the checkout form*


**Changelog**

Version | Description
------- | -----------
`3.0.0` | 

Source: ./templates/futurist/content.php, line 37

### `cfw_checkout_before_order_review`

*Fires at the top of the #order_review container*


**Changelog**

Version | Description
------- | -----------
`3.0.0` | 

Source: ./templates/futurist/content.php, line 47

### `cfw_checkout_tabs`

*Fires in the #order_review container*


**Changelog**

Version | Description
------- | -----------
`3.0.0` | 

Source: ./templates/futurist/content.php, line 56

### `cfw_checkout_after_order_review`

*Fires at the bottom of the #order_review container*


**Changelog**

Version | Description
------- | -----------
`3.0.0` | 

Source: ./templates/futurist/content.php, line 65

### `cfw_checkout_after_order_review_container`

*Fires after the #order_review container inside the checkout form*


**Changelog**

Version | Description
------- | -----------
`3.0.0` | 

Source: ./templates/futurist/content.php, line 75

### `cfw_checkout_cart_summary`

*Fires inside the cart summary sidebar container*


**Changelog**

Version | Description
------- | -----------
`3.0.0` | 

Source: ./templates/futurist/content.php, line 86

### `cfw_checkout_after_cart_summary_container`

*Fires after inside the cart summary sidebar container*


**Changelog**

Version | Description
------- | -----------
`3.0.0` | 

Source: ./templates/futurist/content.php, line 96

### `cfw_checkout_form`

*Fires to allow standard CheckoutWC form to be replaced.*

Only fires when cfw_replace_form is true


**Changelog**

Version | Description
------- | -----------
`3.0.0` | 

Source: ./templates/futurist/content.php, line 106

### `cfw_checkout_main_container_end`

*Fires at the bottom of <main> container*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`WC()->checkout()` |  | 

**Changelog**

Version | Description
------- | -----------
`3.0.0` | 

Source: ./templates/futurist/content.php, line 118

### `cfw_checkout_after_main_container`

*Fires after the <main> container*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`WC()->checkout()` |  | 

**Changelog**

Version | Description
------- | -----------
`3.0.0` | 

Source: ./templates/futurist/content.php, line 128

### `cfw_before_footer`

*Fires at the top of footer*


**Changelog**

Version | Description
------- | -----------
`3.0.0` | 

Source: ./templates/futurist/footer.php, line 15

### `cfw_footer_content`

*Hook to output footer content*


**Changelog**

Version | Description
------- | -----------
`8.0.0` | 

Source: ./templates/futurist/footer.php, line 22

### `cfw_after_footer`

*Fires at the bottom of footer*


**Changelog**

Version | Description
------- | -----------
`3.0.0` | 

Source: ./templates/futurist/footer.php, line 29

### `cfw_order_pay_before_main_container`

*Fires before <main> container on order pay page*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$order` | `\WC_Order` | The order object

**Changelog**

Version | Description
------- | -----------
`3.0.0` | 

Source: ./templates/futurist/order-pay.php, line 6

### `cfw_order_pay_main_container_start`

*Fires at top of <main> container on order pay page*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$order` | `\WC_Order` | The order object

**Changelog**

Version | Description
------- | -----------
`3.0.0` | 

Source: ./templates/futurist/order-pay.php, line 16

### `cfw_order_pay_before_order_review`

*Fires at top of #order_review on order pay page*


**Changelog**

Version | Description
------- | -----------
`3.0.0` | 

Source: ./templates/futurist/order-pay.php, line 31

### `cfw_order_pay_content`

*Fires in #order_review container on order pay page*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$order` | `\WC_Order` | The order object
`$call_receipt_hook` | `bool` | Whether to call receipt hook
`$available_gateways` | `array` | The available gateways
`$order_button_text` | `string` | The text to use for the place order button

**Changelog**

Version | Description
------- | -----------
`3.0.0` | 

Source: ./templates/futurist/order-pay.php, line 38

### `cfw_order_pay_after_order_review`

*Fires at bottom of #order_review on order pay page*


**Changelog**

Version | Description
------- | -----------
`3.0.0` | 

Source: ./templates/futurist/order-pay.php, line 50

### `cfw_order_pay_cart_summary`

*Fires in cart summary sidebar container*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$order` | `\WC_Order` | The order object

**Changelog**

Version | Description
------- | -----------
`3.0.0` | 

Source: ./templates/futurist/order-pay.php, line 62

### `cfw_order_pay_main_container_end`

*Fires at bottom of <main> container on order pay page*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$order` | `\WC_Order` | The order object

**Changelog**

Version | Description
------- | -----------
`3.0.0` | 

Source: ./templates/futurist/order-pay.php, line 76

### `cfw_order_pay_after_main_container`

*Fires after <main> container on order pay page*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$order` | `\WC_Order` | The order object

**Changelog**

Version | Description
------- | -----------
`3.0.0` | 

Source: ./templates/futurist/order-pay.php, line 87

### `cfw_before_footer`

*Fires at the top of footer*


**Changelog**

Version | Description
------- | -----------
`3.0.0` | 

Source: ./templates/copify/functions.php, line 42

### `cfw_footer_content`

*Hook to output footer content*


**Changelog**

Version | Description
------- | -----------
`8.0.0` | 

Source: ./templates/copify/functions.php, line 49

### `cfw_after_footer`

*Fires at the bottom of footer*


**Changelog**

Version | Description
------- | -----------
`3.0.0` | 

Source: ./templates/copify/functions.php, line 56

### `cfw_thank_you_before_main_container`

*Fires before <main> container on thank you page*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$order` | `\WC_Order` | The order object

**Changelog**

Version | Description
------- | -----------
`3.0.0` | 

Source: ./templates/copify/thank-you.php, line 6

### `cfw_thank_you_main_container_start`

*Fires at top of <main> container on thank you page*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$order` | `\WC_Order` | The order object

**Changelog**

Version | Description
------- | -----------
`3.0.0` | 

Source: ./templates/copify/thank-you.php, line 16

### `cfw_thank_you_before_order_review`

*Fires at top of #order_review on thank you page*


**Changelog**

Version | Description
------- | -----------
`3.0.0` | 

Source: ./templates/copify/thank-you.php, line 31

### `cfw_thank_you_content`

*Fires before <main> container on thank you page*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$order` | `\WC_Order` | The order object
`$order_statuses` | `array` | The order statuses we are progressing through
`$show_downloads` | `bool` | Whether to show downloads section
`$downloads` | `array` | The downloads

**Changelog**

Version | Description
------- | -----------
`3.0.0` | 

Source: ./templates/copify/thank-you.php, line 38

### `cfw_thank_you_after_order_review`

*Fires at the end of <main> container on thank you page*


**Changelog**

Version | Description
------- | -----------
`3.0.0` | 

Source: ./templates/copify/thank-you.php, line 62

### `cfw_thank_you_cart_summary`

*Fires in cart summary sidebar container on thank you page*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$order` | `\WC_Order` | The order object

**Changelog**

Version | Description
------- | -----------
`3.0.0` | 

Source: ./templates/copify/thank-you.php, line 74

### `cfw_thank_you_main_container_end`

*Fires at the bottom of <main> container on thank you page*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$order` | `\WC_Order` | The order object

**Changelog**

Version | Description
------- | -----------
`3.0.0` | 

Source: ./templates/copify/thank-you.php, line 88

### `cfw_thank_you_after_main_container`

*Fires after <main> container on thank you page*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$order` | `\WC_Order` | The order object

**Changelog**

Version | Description
------- | -----------
`3.0.0` | 

Source: ./templates/copify/thank-you.php, line 99

### `cfw_checkout_before_main_container`

*Fires before <main> container*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`WC()->checkout()` |  | 

**Changelog**

Version | Description
------- | -----------
`3.0.0` | 

Source: ./templates/copify/content.php, line 6

### `cfw_checkout_main_container_start`

*Fires at the beginning of the <main> container*


**Changelog**

Version | Description
------- | -----------
`3.0.0` | 

Source: ./templates/copify/content.php, line 18

### `cfw_checkout_before_order_review_container`

*Fires before the #order_review container inside the checkout form*


**Changelog**

Version | Description
------- | -----------
`3.0.0` | 

Source: ./templates/copify/content.php, line 41

### `cfw_checkout_before_order_review`

*Fires at the top of the #order_review container*


**Changelog**

Version | Description
------- | -----------
`3.0.0` | 

Source: ./templates/copify/content.php, line 51

### `cfw_checkout_tabs`

*Fires in the #order_review container*


**Changelog**

Version | Description
------- | -----------
`3.0.0` | 

Source: ./templates/copify/content.php, line 60

### `cfw_checkout_after_order_review`

*Fires at the bottom of the #order_review container*


**Changelog**

Version | Description
------- | -----------
`3.0.0` | 

Source: ./templates/copify/content.php, line 69

### `cfw_checkout_after_order_review_container`

*Fires after the #order_review container inside the checkout form*


**Changelog**

Version | Description
------- | -----------
`3.0.0` | 

Source: ./templates/copify/content.php, line 79

### `cfw_checkout_cart_summary`

*Fires inside the cart summary sidebar container*


**Changelog**

Version | Description
------- | -----------
`3.0.0` | 

Source: ./templates/copify/content.php, line 90

### `cfw_checkout_after_cart_summary_container`

*Fires after inside the cart summary sidebar container*


**Changelog**

Version | Description
------- | -----------
`3.0.0` | 

Source: ./templates/copify/content.php, line 100

### `cfw_checkout_form`

*Fires to allow standard CheckoutWC form to be replaced.*

Only fires when cfw_replace_form is true


**Changelog**

Version | Description
------- | -----------
`3.0.0` | 

Source: ./templates/copify/content.php, line 110

### `cfw_checkout_main_container_end`

*Fires at the bottom of <main> container*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`WC()->checkout()` |  | 

**Changelog**

Version | Description
------- | -----------
`3.0.0` | 

Source: ./templates/copify/content.php, line 124

### `cfw_checkout_after_main_container`

*Fires after the <main> container*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`WC()->checkout()` |  | 

**Changelog**

Version | Description
------- | -----------
`3.0.0` | 

Source: ./templates/copify/content.php, line 136

### `cfw_order_pay_before_main_container`

*Fires before <main> container on order pay page*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$order` | `\WC_Order` | The order object

**Changelog**

Version | Description
------- | -----------
`3.0.0` | 

Source: ./templates/copify/order-pay.php, line 6

### `cfw_order_pay_main_container_start`

*Fires at top of <main> container on order pay page*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$order` | `\WC_Order` | The order object

**Changelog**

Version | Description
------- | -----------
`3.0.0` | 

Source: ./templates/copify/order-pay.php, line 16

### `cfw_order_pay_before_order_review`

*Fires at top of #order_review on order pay page*


**Changelog**

Version | Description
------- | -----------
`3.0.0` | 

Source: ./templates/copify/order-pay.php, line 31

### `cfw_order_pay_content`

*Fires in #order_review container on order pay page*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$order` | `\WC_Order` | The order object
`$call_receipt_hook` | `bool` | Whether to call receipt hook
`$available_gateways` | `array` | The available gateways
`$order_button_text` | `string` | The text to use for the place order button

**Changelog**

Version | Description
------- | -----------
`3.0.0` | 

Source: ./templates/copify/order-pay.php, line 38

### `cfw_order_pay_after_order_review`

*Fires at bottom of #order_review on order pay page*


**Changelog**

Version | Description
------- | -----------
`3.0.0` | 

Source: ./templates/copify/order-pay.php, line 50

### `cfw_order_pay_cart_summary`

*Fires in cart summary sidebar container*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$order` | `\WC_Order` | The order object

**Changelog**

Version | Description
------- | -----------
`3.0.0` | 

Source: ./templates/copify/order-pay.php, line 62

### `cfw_order_pay_main_container_end`

*Fires at bottom of <main> container on order pay page*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$order` | `\WC_Order` | The order object

**Changelog**

Version | Description
------- | -----------
`3.0.0` | 

Source: ./templates/copify/order-pay.php, line 76

### `cfw_order_pay_after_main_container`

*Fires after <main> container on order pay page*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$order` | `\WC_Order` | The order object

**Changelog**

Version | Description
------- | -----------
`3.0.0` | 

Source: ./templates/copify/order-pay.php, line 87

### `cfw_thank_you_before_main_container`

*Fires before <main> container on thank you page*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$order` | `\WC_Order` | The order object

**Changelog**

Version | Description
------- | -----------
`3.0.0` | 

Source: ./templates/default/thank-you.php, line 6

### `cfw_thank_you_main_container_start`

*Fires at top of <main> container on thank you page*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$order` | `\WC_Order` | The order object

**Changelog**

Version | Description
------- | -----------
`3.0.0` | 

Source: ./templates/default/thank-you.php, line 16

### `cfw_thank_you_before_order_review`

*Fires at top of #order_review on thank you page*


**Changelog**

Version | Description
------- | -----------
`3.0.0` | 

Source: ./templates/default/thank-you.php, line 31

### `cfw_thank_you_content`

*Fires before <main> container on thank you page*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$order` | `\WC_Order` | The order object
`$order_statuses` | `array` | The order statuses we are progressing through
`$show_downloads` | `bool` | Whether to show downloads section
`$downloads` | `array` | The downloads

**Changelog**

Version | Description
------- | -----------
`3.0.0` | 

Source: ./templates/default/thank-you.php, line 38

### `cfw_thank_you_after_order_review`

*Fires at the end of <main> container on thank you page*


**Changelog**

Version | Description
------- | -----------
`3.0.0` | 

Source: ./templates/default/thank-you.php, line 63

### `cfw_thank_you_cart_summary`

*Fires in cart summary sidebar container on thank you page*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$order` | `\WC_Order` | The order object

**Changelog**

Version | Description
------- | -----------
`3.0.0` | 

Source: ./templates/default/thank-you.php, line 75

### `cfw_thank_you_main_container_end`

*Fires at the bottom of <main> container on thank you page*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$order` | `\WC_Order` | The order object

**Changelog**

Version | Description
------- | -----------
`3.0.0` | 

Source: ./templates/default/thank-you.php, line 89

### `cfw_thank_you_after_main_container`

*Fires after <main> container on thank you page*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$order` | `\WC_Order` | The order object

**Changelog**

Version | Description
------- | -----------
`3.0.0` | 

Source: ./templates/default/thank-you.php, line 100

### `cfw_checkout_before_main_container`

*Fires before <main> container*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`WC()->checkout()` |  | 

**Changelog**

Version | Description
------- | -----------
`3.0.0` | 

Source: ./templates/default/content.php, line 6

### `cfw_checkout_main_container_start`

*Fires at the beginning of the <main> container*


**Changelog**

Version | Description
------- | -----------
`3.0.0` | 

Source: ./templates/default/content.php, line 16

### `cfw_checkout_before_order_review_container`

*Fires before the #order_review container inside the checkout form*


**Changelog**

Version | Description
------- | -----------
`3.0.0` | 

Source: ./templates/default/content.php, line 37

### `cfw_checkout_before_order_review`

*Fires at the top of the #order_review container*


**Changelog**

Version | Description
------- | -----------
`3.0.0` | 

Source: ./templates/default/content.php, line 47

### `cfw_checkout_tabs`

*Fires in the #order_review container*


**Changelog**

Version | Description
------- | -----------
`3.0.0` | 

Source: ./templates/default/content.php, line 56

### `cfw_checkout_after_order_review`

*Fires at the bottom of the #order_review container*


**Changelog**

Version | Description
------- | -----------
`3.0.0` | 

Source: ./templates/default/content.php, line 65

### `cfw_checkout_after_order_review_container`

*Fires after the #order_review container inside the checkout form*


**Changelog**

Version | Description
------- | -----------
`3.0.0` | 

Source: ./templates/default/content.php, line 75

### `cfw_checkout_cart_summary`

*Fires inside the cart summary sidebar container*


**Changelog**

Version | Description
------- | -----------
`3.0.0` | 

Source: ./templates/default/content.php, line 86

### `cfw_checkout_after_cart_summary_container`

*Fires after inside the cart summary sidebar container*


**Changelog**

Version | Description
------- | -----------
`3.0.0` | 

Source: ./templates/default/content.php, line 96

### `cfw_checkout_form`

*Fires to allow standard CheckoutWC form to be replaced.*

Only fires when cfw_replace_form is true


**Changelog**

Version | Description
------- | -----------
`3.0.0` | 

Source: ./templates/default/content.php, line 106

### `cfw_checkout_main_container_end`

*Fires at the bottom of <main> container*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`WC()->checkout()` |  | 

**Changelog**

Version | Description
------- | -----------
`3.0.0` | 

Source: ./templates/default/content.php, line 118

### `cfw_checkout_after_main_container`

*Fires after the <main> container*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`WC()->checkout()` |  | 

**Changelog**

Version | Description
------- | -----------
`3.0.0` | 

Source: ./templates/default/content.php, line 128

### `cfw_before_footer`

*Fires at the top of footer*


**Changelog**

Version | Description
------- | -----------
`3.0.0` | 

Source: ./templates/default/footer.php, line 15

### `cfw_footer_content`

*Hook to output footer content*


**Changelog**

Version | Description
------- | -----------
`8.0.0` | 

Source: ./templates/default/footer.php, line 22

### `cfw_after_footer`

*Fires at the bottom of footer*


**Changelog**

Version | Description
------- | -----------
`3.0.0` | 

Source: ./templates/default/footer.php, line 29

### `cfw_order_pay_before_main_container`

*Fires before <main> container on order pay page*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$order` | `\WC_Order` | The order object

**Changelog**

Version | Description
------- | -----------
`3.0.0` | 

Source: ./templates/default/order-pay.php, line 6

### `cfw_order_pay_main_container_start`

*Fires at top of <main> container on order pay page*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$order` | `\WC_Order` | The order object

**Changelog**

Version | Description
------- | -----------
`3.0.0` | 

Source: ./templates/default/order-pay.php, line 16

### `cfw_order_pay_before_order_review`

*Fires at top of #order_review on order pay page*


**Changelog**

Version | Description
------- | -----------
`3.0.0` | 

Source: ./templates/default/order-pay.php, line 31

### `cfw_order_pay_content`

*Fires in #order_review container on order pay page*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$order` | `\WC_Order` | The order object
`$call_receipt_hook` | `bool` | Whether to call receipt hook
`$available_gateways` | `array` | The available gateways
`$order_button_text` | `string` | The text to use for the place order button

**Changelog**

Version | Description
------- | -----------
`3.0.0` | 

Source: ./templates/default/order-pay.php, line 38

### `cfw_order_pay_after_order_review`

*Fires at bottom of #order_review on order pay page*


**Changelog**

Version | Description
------- | -----------
`3.0.0` | 

Source: ./templates/default/order-pay.php, line 50

### `cfw_order_pay_cart_summary`

*Fires in cart summary sidebar container*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$order` | `\WC_Order` | The order object

**Changelog**

Version | Description
------- | -----------
`3.0.0` | 

Source: ./templates/default/order-pay.php, line 62

### `cfw_order_pay_main_container_end`

*Fires at bottom of <main> container on order pay page*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$order` | `\WC_Order` | The order object

**Changelog**

Version | Description
------- | -----------
`3.0.0` | 

Source: ./templates/default/order-pay.php, line 76

### `cfw_order_pay_after_main_container`

*Fires after <main> container on order pay page*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$order` | `\WC_Order` | The order object

**Changelog**

Version | Description
------- | -----------
`3.0.0` | 

Source: ./templates/default/order-pay.php, line 87

### `cfw_thank_you_before_main_container`

*Fires before <main> container on thank you page*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$order` | `\WC_Order` | The order object

**Changelog**

Version | Description
------- | -----------
`3.0.0` | 

Source: ./templates/glass/thank-you.php, line 6

### `cfw_thank_you_main_container_start`

*Fires at top of <main> container on thank you page*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$order` | `\WC_Order` | The order object

**Changelog**

Version | Description
------- | -----------
`3.0.0` | 

Source: ./templates/glass/thank-you.php, line 16

### `cfw_thank_you_before_order_review`

*Fires at top of #order_review on thank you page*


**Changelog**

Version | Description
------- | -----------
`3.0.0` | 

Source: ./templates/glass/thank-you.php, line 31

### `cfw_thank_you_content`

*Fires before <main> container on thank you page*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$order` | `\WC_Order` | The order object
`$order_statuses` | `array` | The order statuses we are progressing through
`$show_downloads` | `bool` | Whether to show downloads section
`$downloads` | `array` | The downloads

**Changelog**

Version | Description
------- | -----------
`3.0.0` | 

Source: ./templates/glass/thank-you.php, line 38

### `cfw_thank_you_after_order_review`

*Fires at the end of <main> container on thank you page*


**Changelog**

Version | Description
------- | -----------
`3.0.0` | 

Source: ./templates/glass/thank-you.php, line 62

### `cfw_thank_you_cart_summary`

*Fires in cart summary sidebar container on thank you page*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$order` | `\WC_Order` | The order object

**Changelog**

Version | Description
------- | -----------
`3.0.0` | 

Source: ./templates/glass/thank-you.php, line 74

### `cfw_thank_you_main_container_end`

*Fires at the bottom of <main> container on thank you page*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$order` | `\WC_Order` | The order object

**Changelog**

Version | Description
------- | -----------
`3.0.0` | 

Source: ./templates/glass/thank-you.php, line 88

### `cfw_thank_you_after_main_container`

*Fires after <main> container on thank you page*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$order` | `\WC_Order` | The order object

**Changelog**

Version | Description
------- | -----------
`3.0.0` | 

Source: ./templates/glass/thank-you.php, line 99

### `cfw_checkout_before_main_container`

*Fires before <main> container*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`WC()->checkout()` |  | 

**Changelog**

Version | Description
------- | -----------
`3.0.0` | 

Source: ./templates/glass/content.php, line 6

### `cfw_checkout_main_container_start`

*Fires at the beginning of the <main> container*


**Changelog**

Version | Description
------- | -----------
`3.0.0` | 

Source: ./templates/glass/content.php, line 18

### `cfw_checkout_before_order_review_container`

*Fires before the #order_review container inside the checkout form*


**Changelog**

Version | Description
------- | -----------
`3.0.0` | 

Source: ./templates/glass/content.php, line 40

### `cfw_checkout_before_order_review`

*Fires at the top of the #order_review container*


**Changelog**

Version | Description
------- | -----------
`3.0.0` | 

Source: ./templates/glass/content.php, line 50

### `cfw_checkout_tabs`

*Fires in the #order_review container*


**Changelog**

Version | Description
------- | -----------
`3.0.0` | 

Source: ./templates/glass/content.php, line 59

### `cfw_checkout_after_order_review`

*Fires at the bottom of the #order_review container*


**Changelog**

Version | Description
------- | -----------
`3.0.0` | 

Source: ./templates/glass/content.php, line 68

### `cfw_checkout_after_order_review_container`

*Fires after the #order_review container inside the checkout form*


**Changelog**

Version | Description
------- | -----------
`3.0.0` | 

Source: ./templates/glass/content.php, line 78

### `cfw_checkout_cart_summary`

*Fires inside the cart summary sidebar container*


**Changelog**

Version | Description
------- | -----------
`3.0.0` | 

Source: ./templates/glass/content.php, line 89

### `cfw_checkout_after_cart_summary_container`

*Fires after inside the cart summary sidebar container*


**Changelog**

Version | Description
------- | -----------
`3.0.0` | 

Source: ./templates/glass/content.php, line 99

### `cfw_checkout_form`

*Fires to allow standard CheckoutWC form to be replaced.*

Only fires when cfw_replace_form is true


**Changelog**

Version | Description
------- | -----------
`3.0.0` | 

Source: ./templates/glass/content.php, line 109

### `cfw_checkout_main_container_end`

*Fires at the bottom of <main> container*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`WC()->checkout()` |  | 

**Changelog**

Version | Description
------- | -----------
`3.0.0` | 

Source: ./templates/glass/content.php, line 123

### `cfw_checkout_after_main_container`

*Fires after the <main> container*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`WC()->checkout()` |  | 

**Changelog**

Version | Description
------- | -----------
`3.0.0` | 

Source: ./templates/glass/content.php, line 135

### `cfw_before_footer`

*Fires at the top of footer*


**Changelog**

Version | Description
------- | -----------
`3.0.0` | 

Source: ./templates/glass/footer.php, line 15

### `cfw_footer_content`

*Hook to output footer content*


**Changelog**

Version | Description
------- | -----------
`8.0.0` | 

Source: ./templates/glass/footer.php, line 22

### `cfw_after_footer`

*Fires at the bottom of footer*


**Changelog**

Version | Description
------- | -----------
`3.0.0` | 

Source: ./templates/glass/footer.php, line 29

### `cfw_order_pay_before_main_container`

*Fires before <main> container on order pay page*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$order` | `\WC_Order` | The order object

**Changelog**

Version | Description
------- | -----------
`3.0.0` | 

Source: ./templates/glass/order-pay.php, line 6

### `cfw_order_pay_main_container_start`

*Fires at top of <main> container on order pay page*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$order` | `\WC_Order` | The order object

**Changelog**

Version | Description
------- | -----------
`3.0.0` | 

Source: ./templates/glass/order-pay.php, line 16

### `cfw_order_pay_before_order_review`

*Fires at top of #order_review on order pay page*


**Changelog**

Version | Description
------- | -----------
`3.0.0` | 

Source: ./templates/glass/order-pay.php, line 31

### `cfw_order_pay_content`

*Fires in #order_review container on order pay page*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$order` | `\WC_Order` | The order object
`$call_receipt_hook` | `bool` | Whether to call receipt hook
`$available_gateways` | `array` | The available gateways
`$order_button_text` | `string` | The text to use for the place order button

**Changelog**

Version | Description
------- | -----------
`3.0.0` | 

Source: ./templates/glass/order-pay.php, line 38

### `cfw_order_pay_after_order_review`

*Fires at bottom of #order_review on order pay page*


**Changelog**

Version | Description
------- | -----------
`3.0.0` | 

Source: ./templates/glass/order-pay.php, line 50

### `cfw_order_pay_cart_summary`

*Fires in cart summary sidebar container*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$order` | `\WC_Order` | The order object

**Changelog**

Version | Description
------- | -----------
`3.0.0` | 

Source: ./templates/glass/order-pay.php, line 62

### `cfw_order_pay_main_container_end`

*Fires at bottom of <main> container on order pay page*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$order` | `\WC_Order` | The order object

**Changelog**

Version | Description
------- | -----------
`3.0.0` | 

Source: ./templates/glass/order-pay.php, line 76

### `cfw_order_pay_after_main_container`

*Fires after <main> container on order pay page*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$order` | `\WC_Order` | The order object

**Changelog**

Version | Description
------- | -----------
`3.0.0` | 

Source: ./templates/glass/order-pay.php, line 87

### `cfw_before_footer`

*Fires at the top of footer*


**Changelog**

Version | Description
------- | -----------
`3.0.0` | 

Source: ./templates/groove/functions.php, line 46

### `cfw_footer_content`

*Hook to output footer content*


**Changelog**

Version | Description
------- | -----------
`8.0.0` | 

Source: ./templates/groove/functions.php, line 53

### `cfw_after_footer`

*Fires at the bottom of footer*


**Changelog**

Version | Description
------- | -----------
`3.0.0` | 

Source: ./templates/groove/functions.php, line 60

### `cfw_thank_you_before_main_container`

*Fires before <main> container on thank you page*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$order` | `\WC_Order` | The order object

**Changelog**

Version | Description
------- | -----------
`3.0.0` | 

Source: ./templates/groove/thank-you.php, line 6

### `cfw_thank_you_main_container_start`

*Fires at top of <main> container on thank you page*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$order` | `\WC_Order` | The order object

**Changelog**

Version | Description
------- | -----------
`3.0.0` | 

Source: ./templates/groove/thank-you.php, line 16

### `cfw_thank_you_before_order_review`

*Fires at top of #order_review on thank you page*


**Changelog**

Version | Description
------- | -----------
`3.0.0` | 

Source: ./templates/groove/thank-you.php, line 31

### `cfw_thank_you_content`

*Fires before <main> container on thank you page*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$order` | `\WC_Order` | The order object
`$order_statuses` | `array` | The order statuses we are progressing through
`$show_downloads` | `bool` | Whether to show downloads section
`$downloads` | `array` | The downloads

**Changelog**

Version | Description
------- | -----------
`3.0.0` | 

Source: ./templates/groove/thank-you.php, line 38

### `cfw_thank_you_after_order_review`

*Fires at the end of <main> container on thank you page*


**Changelog**

Version | Description
------- | -----------
`3.0.0` | 

Source: ./templates/groove/thank-you.php, line 62

### `cfw_thank_you_cart_summary`

*Fires in cart summary sidebar container on thank you page*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$order` | `\WC_Order` | The order object

**Changelog**

Version | Description
------- | -----------
`3.0.0` | 

Source: ./templates/groove/thank-you.php, line 83

### `cfw_thank_you_main_container_end`

*Fires at the bottom of <main> container on thank you page*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$order` | `\WC_Order` | The order object

**Changelog**

Version | Description
------- | -----------
`3.0.0` | 

Source: ./templates/groove/thank-you.php, line 97

### `cfw_thank_you_after_main_container`

*Fires after <main> container on thank you page*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$order` | `\WC_Order` | The order object

**Changelog**

Version | Description
------- | -----------
`3.0.0` | 

Source: ./templates/groove/thank-you.php, line 108

### `cfw_checkout_before_main_container`

*Fires before <main> container*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`WC()->checkout()` |  | 

**Changelog**

Version | Description
------- | -----------
`3.0.0` | 

Source: ./templates/groove/content.php, line 6

### `cfw_checkout_main_container_start`

*Fires at the beginning of the <main> container*


**Changelog**

Version | Description
------- | -----------
`3.0.0` | 

Source: ./templates/groove/content.php, line 18

### `cfw_checkout_before_order_review_container`

*Fires before the #order_review container inside the checkout form*


**Changelog**

Version | Description
------- | -----------
`3.0.0` | 

Source: ./templates/groove/content.php, line 41

### `cfw_checkout_before_order_review`

*Fires at the top of the #order_review container*


**Changelog**

Version | Description
------- | -----------
`3.0.0` | 

Source: ./templates/groove/content.php, line 51

### `cfw_checkout_tabs`

*Fires in the #order_review container*


**Changelog**

Version | Description
------- | -----------
`3.0.0` | 

Source: ./templates/groove/content.php, line 60

### `cfw_checkout_after_order_review`

*Fires at the bottom of the #order_review container*


**Changelog**

Version | Description
------- | -----------
`3.0.0` | 

Source: ./templates/groove/content.php, line 69

### `cfw_checkout_after_order_review_container`

*Fires after the #order_review container inside the checkout form*


**Changelog**

Version | Description
------- | -----------
`3.0.0` | 

Source: ./templates/groove/content.php, line 79

### `cfw_checkout_cart_summary`

*Fires inside the cart summary sidebar container*


**Changelog**

Version | Description
------- | -----------
`3.0.0` | 

Source: ./templates/groove/content.php, line 99

### `cfw_checkout_after_cart_summary_container`

*Fires after inside the cart summary sidebar container*


**Changelog**

Version | Description
------- | -----------
`3.0.0` | 

Source: ./templates/groove/content.php, line 109

### `cfw_checkout_form`

*Fires to allow standard CheckoutWC form to be replaced.*

Only fires when cfw_replace_form is true


**Changelog**

Version | Description
------- | -----------
`3.0.0` | 

Source: ./templates/groove/content.php, line 119

### `cfw_checkout_main_container_end`

*Fires at the bottom of <main> container*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`WC()->checkout()` |  | 

**Changelog**

Version | Description
------- | -----------
`3.0.0` | 

Source: ./templates/groove/content.php, line 131

### `cfw_checkout_after_main_container`

*Fires after the <main> container*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`WC()->checkout()` |  | 

**Changelog**

Version | Description
------- | -----------
`3.0.0` | 

Source: ./templates/groove/content.php, line 141

### `cfw_order_pay_before_main_container`

*Fires before <main> container on order pay page*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$order` | `\WC_Order` | The order object

**Changelog**

Version | Description
------- | -----------
`3.0.0` | 

Source: ./templates/groove/order-pay.php, line 6

### `cfw_order_pay_main_container_start`

*Fires at top of <main> container on order pay page*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$order` | `\WC_Order` | The order object

**Changelog**

Version | Description
------- | -----------
`3.0.0` | 

Source: ./templates/groove/order-pay.php, line 16

### `cfw_order_pay_before_order_review`

*Fires at top of #order_review on order pay page*


**Changelog**

Version | Description
------- | -----------
`3.0.0` | 

Source: ./templates/groove/order-pay.php, line 31

### `cfw_order_pay_content`

*Fires in #order_review container on order pay page*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$order` | `\WC_Order` | The order object
`$call_receipt_hook` | `bool` | Whether to call receipt hook
`$available_gateways` | `array` | The available gateways
`$order_button_text` | `string` | The text to use for the place order button

**Changelog**

Version | Description
------- | -----------
`3.0.0` | 

Source: ./templates/groove/order-pay.php, line 38

### `cfw_order_pay_after_order_review`

*Fires at bottom of #order_review on order pay page*


**Changelog**

Version | Description
------- | -----------
`3.0.0` | 

Source: ./templates/groove/order-pay.php, line 50

### `cfw_order_pay_cart_summary`

*Fires in cart summary sidebar container*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$order` | `\WC_Order` | The order object

**Changelog**

Version | Description
------- | -----------
`3.0.0` | 

Source: ./templates/groove/order-pay.php, line 71

### `cfw_order_pay_main_container_end`

*Fires at bottom of <main> container on order pay page*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$order` | `\WC_Order` | The order object

**Changelog**

Version | Description
------- | -----------
`3.0.0` | 

Source: ./templates/groove/order-pay.php, line 85

### `cfw_order_pay_after_main_container`

*Fires after <main> container on order pay page*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$order` | `\WC_Order` | The order object

**Changelog**

Version | Description
------- | -----------
`3.0.0` | 

Source: ./templates/groove/order-pay.php, line 96

## Filters

### `cfw_compatibility_free_gifts_for_woocommerce_prevent_redirect`

*Whether to prevent redirecting during add to cart when Free Gifts for WooComemrce is active*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`false` |  | 

**Changelog**

Version | Description
------- | -----------
`10.1.0` | 

Source: ./includes/Compatibility/Plugins/FreeGiftsforWooCommerce.php, line 19

### `cfw_disable_woocommerce_gift_cards_compatibility`

*Filter whether to disable CheckoutWC WooCommerce Gift Cards compatibility class*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`false` |  | 

**Changelog**

Version | Description
------- | -----------
`5.3.5` | 

Source: ./includes/Compatibility/Plugins/WooCommerceGiftCards.php, line 13

### `cfw_compatibility_woocommerce_gift_cards_field_label`

*Filter CheckoutWC WooCommerce Gift Cards field label*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`esc_attr__('Enter your code&hellip;', 'woocommerce-gift-cards')` |  | 

**Changelog**

Version | Description
------- | -----------
`6.0.7` | 

Source: ./includes/Compatibility/Plugins/WooCommerceGiftCards.php, line 58

### `cfw_compatibility_woocommerce_gift_cards_field_placeholder`

*Filter CheckoutWC WooCommerce Gift Cards field placeholder*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`esc_attr__('Enter your code&hellip;', 'woocommerce-gift-cards')` |  | 

**Changelog**

Version | Description
------- | -----------
`6.0.7` | 

Source: ./includes/Compatibility/Plugins/WooCommerceGiftCards.php, line 66

### `cfw_compatibility_woocommerce_gift_cards_heading_text`

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`esc_html__('Have a gift card?', 'woocommerce-gift-cards')` |  | 

Source: ./includes/Compatibility/Plugins/WooCommerceGiftCards.php, line 94

### `cfw_hide_optional_fiscal_code`

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`true` |  | 

Source: ./includes/Compatibility/Plugins/Fattureincloud.php, line 43

### `cfw_klaviyo_output_hook`

*Where to output Klaviyo checkboxes*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`'cfw_checkout_before_payment_method_tab_nav'` |  | 

**Changelog**

Version | Description
------- | -----------
`5.1.2` | 

Source: ./includes/Compatibility/Plugins/Klaviyo.php, line 19

### `cfw_active_campaign_checkbox_hook`

*Filters hook to render Active Campaign checkbox output*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`'cfw_checkout_before_payment_method_tab_nav'` |  | 

**Changelog**

Version | Description
------- | -----------
`2.0.0` | 

Source: ./includes/Compatibility/Plugins/ActiveCampaign.php, line 16

### `cfw_suppress_add_to_cart_notices`

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`true` |  | 

Source: ./includes/Compatibility/Plugins/WooCommerceCore.php, line 165

### `cfw_suppress_add_to_cart_notices`

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`true` |  | 

Source: ./includes/Compatibility/Plugins/WooCommerceCore.php, line 199

### `cfw_highlighted_countries`

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`SettingsManager::instance()->get_setting('highlighted_countries')` |  | 

Source: ./includes/Compatibility/Plugins/WooCommerceCore.php, line 227

### `cfw_template_tab_container_el`

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`'order_review'` |  | 

Source: ./includes/Compatibility/Plugins/MixPanel.php, line 36

### `cfw_template_payment_method_el`

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`'cfw-payment-method'` |  | 

Source: ./includes/Compatibility/Plugins/MixPanel.php, line 37

### `cfw_compatibility_all_products_for_subscriptions_run_on_side_cart`

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`false` |  | 

Source: ./includes/Compatibility/Plugins/AllProductsForSubscriptions.php, line 23

### `cfw_order_bump_get_price_context`

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`'cart'` |  | 
`$cart_item` |  | 
`$bump` |  | 

Source: ./includes/Compatibility/Plugins/WPCProductBundles.php, line 75

### `cfw_compatibility_nexcessmu_prevent_disable_fragments`

*Prevent disabling fragments when Nexcess MU is active*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`false` |  | 

**Changelog**

Version | Description
------- | -----------
`10.1.0` | 

Source: ./includes/Compatibility/Plugins/NexcessMU.php, line 17

### `cfw_compatibility_woocommerce_germanized_render_hook`

*Filter the rendering hook for WooCommerce Germanized compatibility*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`'cfw_checkout_before_payment_method_tab_nav'` |  | 

**Changelog**

Version | Description
------- | -----------
`10.1.0` | 

Source: ./includes/Compatibility/Plugins/WooCommerceGermanized.php, line 47

### `cfw_compatibility_woocommerce_germanized_render_priority`

*Filter the priority of the render hook for WooCommerce Germanized compatibility*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`10` |  | 

**Changelog**

Version | Description
------- | -----------
`10.1.0` | 

Source: ./includes/Compatibility/Plugins/WooCommerceGermanized.php, line 56

### `cfw_payment_gateway_{$kp->id}_content`

*Filters whether to show custom klarna payment box HTML*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$kp->has_fields() || $kp->get_description()` |  | 

**Changelog**

Version | Description
------- | -----------
`2.0.0` | 

Source: ./includes/Compatibility/Gateways/KlarnaPayment.php, line 85

### `cfw_payment_gateway_field_html_{$kp->id}`

*Filters klarna payment gateway output*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$field_html` |  | 

**Changelog**

Version | Description
------- | -----------
`2.0.0` | 

Source: ./includes/Compatibility/Gateways/KlarnaPayment.php, line 113

### `cfw_wcpay_payment_requests_ignore_shipping_phone`

*Filters whether to override Stripe payment request button heights*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`true` |  | 

**Changelog**

Version | Description
------- | -----------
`5.3.3` | 

Source: ./includes/Compatibility/Gateways/WooCommercePayments.php, line 17

### `cfw_payment_gateway_{$kp->id}_content`

*Filters whether to show custom klarna payment box HTML*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$kp->has_fields() || $kp->get_description()` |  | 

**Changelog**

Version | Description
------- | -----------
`2.0.0` | 

Source: ./includes/Compatibility/Gateways/KlarnaPayment3.php, line 111

### `cfw_payment_gateway_field_html_{$kp->id}`

*Filters klarna payment gateway output*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$field_html` |  | 

**Changelog**

Version | Description
------- | -----------
`2.0.0` | 

Source: ./includes/Compatibility/Gateways/KlarnaPayment3.php, line 139

### `cfw_billing_address_heading`

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`__('Billing address', 'checkout-wc')` |  | 

Source: ./includes/Compatibility/Gateways/PayPalForWooCommerce.php, line 192

### `cfw_amazon_suppress_shipping_field_validation`

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`true` |  | 

Source: ./includes/Compatibility/Gateways/AmazonPayV1.php, line 266

### `cfw_amazon_suppress_shipping_field_validation`

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`true` |  | 

Source: ./includes/Compatibility/Gateways/AmazonPayLegacy.php, line 249

### `cfw_show_klarna_checkout_express_button`

*Whether to show the Klarna Checkout button*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`true` |  | 

**Changelog**

Version | Description
------- | -----------
`7.1.7` | 

Source: ./includes/Compatibility/Gateways/KlarnaCheckout.php, line 86

### `cfw_stripe_payment_requests_ignore_shipping_phone`

*Filters whether to override Stripe payment request button heights*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`true` |  | 

**Changelog**

Version | Description
------- | -----------
`4.3.3` | 

Source: ./includes/Compatibility/Gateways/Stripe.php, line 20

### `cfw_square_payment_requests_ignore_shipping_phone`

*Filters whether to override Stripe payment request button heights*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`true` |  | 

**Changelog**

Version | Description
------- | -----------
`4.3.3` | 

Source: ./includes/Compatibility/Gateways/Square.php, line 16

### `cfw_address_field_priorities`

*Filter address field priorities*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$this->priorities` |  | 

**Changelog**

Version | Description
------- | -----------
`2.0.0` | 

Source: ./includes/AddressFieldsAugmenter.php, line 56

### `cfw_enable_fullname_field`

*Filter whether to enable full name field*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`'yes' === SettingsManager::instance()->get_setting('use_fullname_field') && is_cfw_page()` |  | 

**Changelog**

Version | Description
------- | -----------
`7.1.0` | 

Source: ./includes/AddressFieldsAugmenter.php, line 107

### `cfw_enable_separate_address_1_fields`

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`'yes' === SettingsManager::instance()->get_setting('enable_discreet_address_1_fields')` |  | 

Source: ./includes/AddressFieldsAugmenter.php, line 123

### `cfw_enable_discrete_address_1_fields`

*Get custom default address fields*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`array($enable_separate_address_1_fields)` |  | 
`'10.0.0'` |  | 
`'cfw_enable_separate_address_1_fields'` |  | 

Source: ./includes/AddressFieldsAugmenter.php, line 100

### `cfw_non_floating_label_field_types`

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`array('checkbox', 'radio')` |  | 

Source: ./includes/FormFieldAugmenter.php, line 121

### `cfw_form_field_append_optional_to_placeholder`

*Whether to append optional to field placeholder*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`array(isset($args['suppress_optional_suffix']), $key)` |  | 
`'CheckoutWC 10.1.13'` |  | 
`'cfw_form_field_suppress_optional_in_placeholder'` |  | 

**Changelog**

Version | Description
------- | -----------
`6.2.3` | 

Source: ./includes/FormFieldAugmenter.php, line 139

### `cfw_form_field_suppress_optional_in_placeholder`

*Whether to suppress 'optional' from field placeholder*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$suppress_placeholder` |  | 
`$key` | `mixed` | The key.

**Changelog**

Version | Description
------- | -----------
`10.1.13` | 

Source: ./includes/FormFieldAugmenter.php, line 150

### `cfw_select_field_options`

*Filters the select field options for edge cases*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$args['options']` |  | 
`$args` | `array` | The field arguments
`$key` | `string` | The field key

**Changelog**

Version | Description
------- | -----------
`7.4.0` | 

Source: ./includes/FormFieldAugmenter.php, line 176

### `cfw_checkbox_like_field_types`

*The field type that are like checkboxes*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$this->checkbox_like_field_types` |  | 

**Changelog**

Version | Description
------- | -----------
`7.0.10` | 

Source: ./includes/FormFieldAugmenter.php, line 289

### `cfw_replace_form`

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`false` |  | 

Source: ./includes/Managers/AssetManager.php, line 124

### `cfw_thank_you_page_map_address`

*Filter thank you page map address*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$order->get_address('shipping')` |  | 
`$order` | `\WC_Order` | The order

**Changelog**

Version | Description
------- | -----------
`5.3.9` | 

Source: ./includes/Managers/AssetManager.php, line 194

### `cfw_locale_prefix`

*Filter locale prefix*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$locale` | `string` | Locale prefix

**Changelog**

Version | Description
------- | -----------
`9.1.5` | 

Source: ./includes/Managers/AssetManager.php, line 312

### `cfw_parsley_locale`

*Filter Parsley validation service locale*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$locale` | `string` | Parsley validation service locale

**Changelog**

Version | Description
------- | -----------
`3.0.0` | 

Source: ./includes/Managers/AssetManager.php, line 350

### `cfw_disable_cart_quantity_prompt`

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`false` |  | 

Source: ./includes/Managers/AssetManager.php, line 385

### `cfw_link_cart_items`

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`SettingsManager::instance()->get_setting('cart_item_link') === 'enabled'` |  | 

Source: ./includes/Managers/AssetManager.php, line 393

### `cfw_show_cart_item_discount`

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`SettingsManager::instance()->get_setting('show_side_cart_item_discount') === 'yes'` |  | 

Source: ./includes/Managers/AssetManager.php, line 403

### `cfw_show_free_shipping_progress_bar_without_calculated_packages`

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`false` |  | 

Source: ./includes/Managers/AssetManager.php, line 406

### `cfw_promo_code_apply_button_label`

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`esc_attr__('Apply', 'checkout-wc')` |  | 

Source: ./includes/Managers/AssetManager.php, line 416

### `cfw_promo_code_toggle_link_text`

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`__('Have a promo code? Click here.', 'checkout-wc')` |  | 

Source: ./includes/Managers/AssetManager.php, line 425

### `cfw_promo_code_label`

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`__('Promo Code', 'checkout-wc')` |  | 

Source: ./includes/Managers/AssetManager.php, line 434

### `cfw_promo_code_placeholder`

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`__('Enter Promo Code', 'checkout-wc')` |  | 

Source: ./includes/Managers/AssetManager.php, line 443

### `cfw_enable_separate_address_1_fields`

*This filter is documented in includes/AddressFieldsAugmenter.php*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`'yes' === SettingsManager::instance()->get_setting('enable_discreet_address_1_fields')` |  | 

Source: ./includes/Managers/AssetManager.php, line 469

### `cfw_enable_discrete_address_1_fields`

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`array($enable_separate_address_1_fields)` |  | 
`'10.0.0'` |  | 
`'cfw_enable_separate_address_1_fields'` |  | 

Source: ./includes/Managers/AssetManager.php, line 448

### `cfw_event_object`

*Filter cfw_event_object array*

Localized data available via DataService

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`array(
    'data' => array_merge_recursive(self::get_data(), array('login_form' => cfw_get_login_form_html(), 'lost_password_form' => cfw_get_lost_password_form_html())),
    /**
     * Filter TypeScript compatibility classes and params
     *
     * @param array $compatibility TypeScript compatibility classes and params
     *
     * @since 3.0.0
     */
    'compatibility' => apply_filters(array()),
    'settings' => array(
        'base_country' => WC()->countries->get_base_country(),
        'locale_prefix' => $this->get_locale_prefix(),
        'parsley_locale' => $this->get_parsley_locale(),
        'login_allowed_at_checkout' => cfw_is_login_at_checkout_allowed(),
        /**
         * Filter whether to validate required registration
         *
         * @param bool $validate_required_registration Validate required registration
         *
         * @since 3.0.0
         */
        'validate_required_registration' => apply_filters(true),
        'default_address_fields' => array_keys(WC()->countries->get_default_address_fields()),
        /**
         * Filter whether to enable zip autocomplete
         *
         * @param bool $enable_zip_autocomplete Enable zip autocomplete
         *
         * @since 2.0.0
         */
        'enable_zip_autocomplete' => apply_filters(true) && defined('CFW_PREMIUM_PLAN_IDS'),
        /**
         * Filter whether to disable email domain validation
         *
         * @param bool $disable_email_domain_validation Disable email domain validation
         *
         * @since 8.2.26
         */
        'disable_email_domain_validation' => (bool) apply_filters(false),
        /**
         * Filter whether to enable field peristence with Garlic.js
         *
         * @param bool $cfw_enable_field_persistence Enable field persistence
         *
         * @since 7.1.10
         */
        'enable_field_persistence' => (bool) apply_filters(true),
        /**
         * Filter whether to check create account by default
         *
         * @param bool $check_create_account_by_default Check create account by default
         *
         * @since 3.0.0
         */
        'check_create_account_by_default' => (bool) apply_filters(true),
        /**
         * Filter whether to check whether an existing account matches provided email address
         *
         * @param bool $enable_account_exists_check Enable account exists check when billing email field changed
         *
         * @since 5.3.7
         */
        'enable_account_exists_check' => apply_filters(!is_user_logged_in()),
        'needs_shipping_address' => WC()->cart && WC()->cart->needs_shipping_address(),
        'show_shipping_tab' => cfw_show_shipping_tab(),
        'enable_map_embed' => PlanManager::can_access_feature('enable_map_embed'),
        'disable_auto_open_login_modal' => SettingsManager::instance()->get_setting('disable_auto_open_login_modal') === 'yes',
        'disable_domain_autocomplete' => SettingsManager::instance()->get_setting('disable_domain_autocomplete') === 'yes',
        'enable_coupon_code_link' => SettingsManager::instance()->get_setting('enable_coupon_code_link') === 'yes',
        /**
         * Filter whether to load tabs
         *
         * @param bool $load_tabs Load tabs
         *
         * @since 3.0.0
         */
        'load_tabs' => apply_filters(cfw_is_checkout()),
        'is_checkout_pay_page' => is_checkout_pay_page(),
        'is_order_received_page' => is_order_received_page(),
        /**
         * Filter list of billing country restrictions for Google Maps address autocomplete
         *
         * @param array $address_autocomplete_billing_countries List of country restrictions for Google Maps address autocomplete
         *
         * @since 3.0.0
         */
        'address_autocomplete_billing_countries' => apply_filters(array()),
        'is_registration_required' => WC()->checkout()->is_registration_required(),
        /**
         * Filter whether to automatically generate password for new accounts
         *
         * @param bool $registration_generate_password Automatically generate password for new accounts
         *
         * @since 3.0.0
         */
        'registration_generate_password' => SettingsManager::instance()->get_setting('registration_style') !== 'woocommerce',
        'thank_you_shipping_address' => false,
        'enable_separate_address_1_fields' => $enable_separate_address_1_fields,
        /**
         * Filters whether to enable fullname field
         *
         * @param boolean $enable_fullname_field Whether to enable fullname field
         *
         * @since 7.0.17
         */
        'use_fullname_field' => apply_filters('yes' === SettingsManager::instance()->get_setting('use_fullname_field')),
        'trust_badges_display' => SettingsManager::instance()->get_setting('trust_badge_position'),
        'enable_one_page_checkout' => SettingsManager::instance()->get_setting('enable_one_page_checkout') === 'yes',
        /**
         * Filter intl-tel-input preferred countries
         *
         * @param array $phone_field_preferred_countries List of preferred countries
         *
         * @since 8.2.22
         */
        'phone_field_highlighted_countries' => (array) apply_filters(SettingsManager::instance()->get_setting('enable_highlighted_countries') === 'yes' ? SettingsManager::instance()->get_setting('highlighted_countries') : array()),
        'store_policies' => $store_policies,
        'ship_to_billing_address_only' => wc_ship_to_billing_address_only(),
        'max_after_checkout_bumps' => $max_after_checkout_bumps < 0 ? 999 : $max_after_checkout_bumps,
        'enable_acr' => PlanManager::can_access_feature('enable_acr'),
        /**
         * Bypass cookie for automatically showing login modal
         *
         * @param bool $bypass_login_modal_shown_cookie Bypass cookie for automatically showing login modal (default: false, do not bypass)
         *
         * @since 9.0.16
         */
        'bypass_login_modal_shown_cookie' => apply_filters(false),
        'is_login_at_checkout_allowed' => cfw_is_login_at_checkout_allowed(),
        'google_maps_api_key' => SettingsManager::instance()->get_setting('google_places_api_key'),
        /**
         * Filter list of field persistence service excludes
         *
         * @param array $field_persistence_excludes List of field persistence service excludes
         *
         * @since 3.0.0
         */
        'field_persistence_excludes' => apply_filters(array(
            'input[type="button"]',
            'input[type="file"]',
            'input[type="hidden"]',
            'input[type="submit"]',
            'input[type="reset"]',
            '#cfw-promo-code',
            '.cfw-create-account-checkbox',
            'input[name="payment_method"]',
            'input[name="paypal_pro-card-number"]',
            'input[name="paypal_pro-card-cvc"]',
            'input[name="wc-authorize-net-aim-account-number"]',
            'input[name="wc-authorize-net-aim-csc"]',
            'input[name="paypal_pro_payflow-card-number"]',
            'input[name="paypal_pro_payflow-card-cvc"]',
            'input[name="paytrace-card-number"]',
            'input[name="paytrace-card-cvc"]',
            'input[id="stripe-card-number"]',
            'input[id="stripe-card-cvc"]',
            'input[name="creditCard"]',
            'input[name="cvv"]',
            'input.wc-credit-card-form-card-number',
            'input[name="wc-authorize-net-cim-credit-card-account-number"]',
            'input[name="wc-authorize-net-cim-credit-card-csc"]',
            'input.wc-credit-card-form-card-cvc',
            'input.js-sv-wc-payment-gateway-credit-card-form-account-number',
            'input.js-sv-wc-payment-gateway-credit-card-form-csc',
            '.wc-braintree-payment-type',
            // payment plugins braintree
            'input.shipping_method',
            '#order_comments',
            'input[name^="tocheckoutcw"]',
            '#_sumo_pp_enable_order_payment_plan',
            '.gift-certificate-show-form input',
            '.cfw_order_bump_check',
            '#shipping_fetchify_search',
            '#billing_fetchify_search',
            '#terms',
            '#ship-to-different-address-checkbox',
            '[data-persist="false"]',
        )),
    ),
    'messages' => array(
        /**
         * Filter the invalid phone number error message
         *
         * @param string $invalid_phone_number_message Invalid phone number error message
         *
         * @since 5.3.5
         */
        'invalid_phone_message' => apply_filters(__('Please enter a valid phone number.', 'checkout-wc')),
        /**
         * Filter the invalid fullname error message
         *
         * @param string $invalid_fullname_message Invalid fullname error message
         *
         * @since 6.2.4
         */
        'invalid_full_name_message' => apply_filters(__('Please enter your first and last name.', 'checkout-wc')),
        'shipping_address_label' => __('Shipping address', 'checkout-wc'),
        'quantity_prompt_message' => __('Please enter a new quantity:', 'checkout-wc'),
        'cvv_tooltip_message' => __('3-digit security code usually found on the back of your card. American Express cards have a 4-digit code located on the front.', 'checkout-wc'),
        'delete_confirm_message' => __('Are you sure you want to remove this item from your cart?', 'checkout-wc'),
        'account_already_registered_notice' => cfw_apply_filters('woocommerce_registration_error_email_exists', __('An account is already registered with your email address. <a href="#" class="showlogin">Please log in.</a>', 'woocommerce'), ''),
        /* translators: %s: Field name */
        'generic_field_validation_error_message' => __('%s is a required field.', 'woocommerce'),
        'update_checkout_error' => __('There was a problem checking out. Please try again. If the problem persists, please get in touch with us so we can assist.', 'woocommerce'),
        'invalid_postcode' => __('Please enter a valid postcode / ZIP.', 'checkout-wc'),
        'pickup_label' => __('Pickup', 'checkout-wc'),
        'pickup_btn_label' => __('Continue to pickup', 'checkout-wc'),
        'update_cart_item_variation_button' => __('Update', 'woocommerce'),
        'ok_button_label' => __('Add to cart', 'woocommerce'),
        'cancel_button_label' => __('Cancel', 'woocommerce'),
        /**
         * Filter the fetchify search placeholder
         *
         * @param string $fetchify_default_placeholder Fetchify search placeholder
         *
         * @since 8.2.3
         */
        'fetchify_default_placeholder' => apply_filters(__('Start with post/zip code or street', 'checkout-wc')),
        /**
         * Filter the shipping methods heading
         *
         * @param string $shipping_methods_heading Shipping methods heading
         *
         * @since 9.0.0
         */
        'shipping_methods_heading' => apply_filters(esc_html__('Shipping method', 'checkout-wc')),
        'edit_cart_variation_label' => __('Edit', 'woocommerce'),
    ),
    'checkout_params' => array(
        'ajax_url' => WC()->ajax_url(),
        'wc_ajax_url' => \WC_AJAX::get_endpoint('%%endpoint%%'),
        'update_order_review_nonce' => wp_create_nonce('update-order-review'),
        'apply_coupon_nonce' => wp_create_nonce('apply-coupon'),
        'remove_coupon_nonce' => wp_create_nonce('remove-coupon'),
        'option_guest_checkout' => get_option('woocommerce_enable_guest_checkout'),
        'checkout_url' => \WC_AJAX::get_endpoint('checkout'),
        'is_checkout' => is_checkout() && empty($wp->query_vars['order-pay']) && !isset($wp->query_vars['order-received']) ? 1 : 0,
        'debug_mode' => defined('WP_DEBUG') && WP_DEBUG,
        'cfw_debug_mode' => isset($_GET['cfw-debug']),
        // phpcs:ignore WordPress.Security.NonceVerification.Recommended
        'i18n_checkout_error' => esc_attr__('Error processing checkout. Please try again.', 'woocommerce'),
        'dist_path' => CFW_PATH_ASSETS,
        'is_rtl' => is_rtl(),
        'cart_hash_key' => cfw_apply_filters('woocommerce_cart_hash_key', 'wc_cart_hash_' . md5(get_current_blog_id() . '_' . get_site_url(get_current_blog_id(), '/') . get_template())),
    ),
    'runtime_params' => array('runtime_email_matched_user' => false),
)` |  | 

**Changelog**

Version | Description
------- | -----------
`1.0.0` | 

Source: ./includes/Managers/AssetManager.php, line 473

### `cfw_typescript_compatibility_classes_and_params`

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`array()` |  | 

Source: ./includes/Managers/AssetManager.php, line 499

### `cfw_validate_required_registration`

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`true` |  | 

Source: ./includes/Managers/AssetManager.php, line 512

### `cfw_enable_zip_autocomplete`

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`true` |  | 

Source: ./includes/Managers/AssetManager.php, line 521

### `cfw_disable_email_domain_validation`

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`false` |  | 

Source: ./includes/Managers/AssetManager.php, line 529

### `cfw_enable_field_persistence`

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`true` |  | 

Source: ./includes/Managers/AssetManager.php, line 537

### `cfw_check_create_account_by_default`

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`true` |  | 

Source: ./includes/Managers/AssetManager.php, line 545

### `cfw_enable_account_exists_check`

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`!is_user_logged_in()` |  | 

Source: ./includes/Managers/AssetManager.php, line 553

### `cfw_load_tabs`

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`cfw_is_checkout()` |  | 

Source: ./includes/Managers/AssetManager.php, line 567

### `cfw_address_autocomplete_billing_countries`

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`array()` |  | 

Source: ./includes/Managers/AssetManager.php, line 577

### `cfw_enable_fullname_field`

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`'yes' === SettingsManager::instance()->get_setting('use_fullname_field')` |  | 

Source: ./includes/Managers/AssetManager.php, line 596

### `cfw_phone_field_highlighted_countries`

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`SettingsManager::instance()->get_setting('enable_highlighted_countries') === 'yes' ? SettingsManager::instance()->get_setting('highlighted_countries') : array()` |  | 

Source: ./includes/Managers/AssetManager.php, line 606

### `cfw_bypass_login_modal_shown_cookie`

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`false` |  | 

Source: ./includes/Managers/AssetManager.php, line 618

### `cfw_field_data_persistence_excludes`

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`array(
    'input[type="button"]',
    'input[type="file"]',
    'input[type="hidden"]',
    'input[type="submit"]',
    'input[type="reset"]',
    '#cfw-promo-code',
    '.cfw-create-account-checkbox',
    'input[name="payment_method"]',
    'input[name="paypal_pro-card-number"]',
    'input[name="paypal_pro-card-cvc"]',
    'input[name="wc-authorize-net-aim-account-number"]',
    'input[name="wc-authorize-net-aim-csc"]',
    'input[name="paypal_pro_payflow-card-number"]',
    'input[name="paypal_pro_payflow-card-cvc"]',
    'input[name="paytrace-card-number"]',
    'input[name="paytrace-card-cvc"]',
    'input[id="stripe-card-number"]',
    'input[id="stripe-card-cvc"]',
    'input[name="creditCard"]',
    'input[name="cvv"]',
    'input.wc-credit-card-form-card-number',
    'input[name="wc-authorize-net-cim-credit-card-account-number"]',
    'input[name="wc-authorize-net-cim-credit-card-csc"]',
    'input.wc-credit-card-form-card-cvc',
    'input.js-sv-wc-payment-gateway-credit-card-form-account-number',
    'input.js-sv-wc-payment-gateway-credit-card-form-csc',
    '.wc-braintree-payment-type',
    // payment plugins braintree
    'input.shipping_method',
    '#order_comments',
    'input[name^="tocheckoutcw"]',
    '#_sumo_pp_enable_order_payment_plan',
    '.gift-certificate-show-form input',
    '.cfw_order_bump_check',
    '#shipping_fetchify_search',
    '#billing_fetchify_search',
    '#terms',
    '#ship-to-different-address-checkbox',
    '[data-persist="false"]',
)` |  | 

Source: ./includes/Managers/AssetManager.php, line 628

### `cfw_invalid_phone_validation_error_message`

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`__('Please enter a valid phone number.', 'checkout-wc')` |  | 

Source: ./includes/Managers/AssetManager.php, line 680

### `cfw_invalid_full_name_validation_error_message`

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`__('Please enter your first and last name.', 'checkout-wc')` |  | 

Source: ./includes/Managers/AssetManager.php, line 689

### `cfw_fetchify_search_placeholder`

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`__('Start with post/zip code or street', 'checkout-wc')` |  | 

Source: ./includes/Managers/AssetManager.php, line 711

### `cfw_shipping_method_heading`

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`esc_html__('Shipping method', 'checkout-wc')` |  | 

Source: ./includes/Managers/AssetManager.php, line 719

### `cfw_side_cart_event_object`

*Filter cfw_event_object array*

Localized data available via DataService

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`array('data' => self::get_default_data(), 'settings' => array(
    /**
     * Filter whether to auto open the side cart on add to cart
     *
     * @param bool $disable_side_cart_auto_open Disable side cart auto open
     *
     * @since 7.1.5
     */
    'disable_side_cart_auto_open' => (bool) apply_filters(SettingsManager::instance()->get_setting('shake_floating_cart_button') === 'yes'),
    'enable_floating_cart_button' => SettingsManager::instance()->get_setting('enable_floating_cart_button') === 'yes',
    'enable_side_cart_suggested_products' => SettingsManager::instance()->get_setting('enable_side_cart_suggested_products') === 'yes',
    /**
     * Filter whether to automatically generate password for new accounts
     *
     * @param string $additional_side_cart_trigger_selectors CSS selector for additional side cart open buttons / links
     *
     * @since 5.4.0
     */
    'additional_side_cart_trigger_selectors' => apply_filters(false),
    'cart_icon_contents' => SideCart::get_cart_icon_file_contents(),
    'coupons_enabled_side_cart' => wc_coupons_enabled() && SettingsManager::instance()->get_setting('enable_promo_codes_on_side_cart') === 'yes',
    /**
     * Filters whether to enable continue shopping button in side cart
     *
     * @param bool $enable_continue_shopping_btn Whether to enable continue shopping button in side cart
     *
     * @since 7.7.0
     */
    'enable_continue_shopping_btn' => apply_filters(SettingsManager::instance()->get_setting('enable_side_cart_continue_shopping_button') === 'yes'),
    'enable_side_cart_payment_buttons' => SettingsManager::instance()->get_setting('enable_side_cart_payment_buttons') === 'yes',
    /**
     * Filters whether to show shipping and tax totals in side cart
     *
     * @param bool $show_total Whether to show shipping and tax totals in side cart
     *
     * @since 7.7.0
     */
    'side_cart_show_total' => apply_filters(SettingsManager::instance()->get_setting('enable_side_cart_totals') === 'yes'),
    'wc_get_pay_buttons' => cfw_get_function_output('wc_get_pay_buttons'),
    'enable_free_shipping_progress_bar' => SettingsManager::instance()->get_setting('enable_free_shipping_progress_bar') === 'yes',
    'suggested_products_heading' => $suggested_products_heading,
    'enable_ajax_add_to_cart' => SettingsManager::instance()->get_setting('enable_ajax_add_to_cart') === 'yes',
    'checkout_page_url' => wc_get_checkout_url(),
    'enable_free_shipping_progress_bar_at_checkout' => SettingsManager::instance()->get_setting('enable_free_shipping_progress_bar_at_checkout') === 'yes',
    'enable_promo_codes_on_side_cart' => SettingsManager::instance()->get_setting('enable_promo_codes_on_side_cart') === 'yes',
    'hide_floating_cart_button_empty_cart' => SettingsManager::instance()->get_setting('hide_floating_cart_button_empty_cart') === 'yes',
    'enable_side_cart_coupon_code_link' => SettingsManager::instance()->get_setting('enable_side_cart_coupon_code_link') === 'yes',
    'enable_order_bumps' => SettingsManager::instance()->get_setting('enable_order_bumps') === 'yes',
    'enable_order_bumps_on_side_cart' => SettingsManager::instance()->get_setting('enable_order_bumps_on_side_cart') === 'yes',
), 'messages' => array('quantity_prompt_message' => __('Please enter a new quantity:', 'checkout-wc'), 'delete_confirm_message' => __('Are you sure you want to remove this item from your cart?', 'checkout-wc'), 'view_cart' => __('View cart', 'woocommerce'), 'update_cart_item_variation_button' => __('Update', 'woocommerce'), 'ok_button_label' => __('Add to cart', 'woocommerce'), 'cancel_button_label' => __('Cancel', 'woocommerce'), 'remove_item_label' => __('Remove this item', 'woocommerce'), 'proceed_to_checkout_label' => __('Proceed to checkout', 'woocommerce'), 'continue_shopping_label' => __('Continue shopping', 'woocommerce'), 'edit_cart_variation_label' => __('Edit', 'woocommerce')), 'checkout_params' => array(
    'ajax_url' => WC()->ajax_url(),
    'wc_ajax_url' => \WC_AJAX::get_endpoint('%%endpoint%%'),
    'remove_coupon_nonce' => wp_create_nonce('remove-coupon'),
    'checkout_url' => \WC_AJAX::get_endpoint('checkout'),
    'is_checkout' => is_checkout() && empty($wp->query_vars['order-pay']) && !isset($wp->query_vars['order-received']) ? 1 : 0,
    'debug_mode' => defined('WP_DEBUG') && WP_DEBUG,
    'cfw_debug_mode' => isset($_GET['cfw-debug']),
    // phpcs:ignore WordPress.Security.NonceVerification.Recommended
    'dist_path' => CFW_PATH_ASSETS,
    'is_rtl' => is_rtl(),
), 'runtime_params' => array())` |  | 

**Changelog**

Version | Description
------- | -----------
`1.0.0` | 

Source: ./includes/Managers/AssetManager.php, line 764

### `cfw_disable_side_cart_auto_open`

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`SettingsManager::instance()->get_setting('shake_floating_cart_button') === 'yes'` |  | 

Source: ./includes/Managers/AssetManager.php, line 785

### `cfw_additional_side_cart_trigger_selectors`

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`false` |  | 

Source: ./includes/Managers/AssetManager.php, line 796

### `cfw_side_cart_enable_continue_shopping_button`

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`SettingsManager::instance()->get_setting('enable_side_cart_continue_shopping_button') === 'yes'` |  | 

Source: ./includes/Managers/AssetManager.php, line 806

### `cfw_side_cart_show_total`

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`SettingsManager::instance()->get_setting('enable_side_cart_totals') === 'yes'` |  | 

Source: ./includes/Managers/AssetManager.php, line 816

### `cfw_get_data_clear_notices`

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`!is_checkout()` |  | 

Source: ./includes/Managers/AssetManager.php, line 888

### `cfw_checkout_data`

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$data` |  | 

Source: ./includes/Managers/AssetManager.php, line 914

### `cfw_updates_manager_home_url`

*Filters the home URL.*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$url` | `string` | The complete home URL including scheme and path.
`$path` | `string` | Path relative to the home URL. Blank string if no path is specified.
`$orig_scheme` | `string\|null` | Scheme to give the home URL context. Accepts 'http', 'https',<br>'relative', 'rest', or null.
`$blog_id` | `int\|null` | Site ID, or null for the current site.

**Changelog**

Version | Description
------- | -----------
`3.0.0` | 

Source: ./includes/Managers/UpdatesManager.php, line 254

### `cfw_google_font_configurations`

*Filter the Google Font configurations before generating the URL.*

This is the primary filter for customizing font loading. You can add,
remove, or modify font configurations.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$font_configs` | `array` | An associative array of font configurations,<br>keyed by the font family name (e.g., 'Open Sans').<br><br>Example:<br>$font_configs[ $font_name ] = array(<br>   'family'  => $font_name,<br>   'weights' => array( '400', '700' ),<br>   'italic'  => true,<br>);

**Changelog**

Version | Description
------- | -----------
`10.1.16` | 

Source: ./includes/Managers/StyleManager.php, line 51

### `cfw_google_font_display`

*Filter the font-display property for the Google Fonts URL.*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`'swap'` |  | 

**Changelog**

Version | Description
------- | -----------
`10.1.16` | 

Source: ./includes/Managers/StyleManager.php, line 82

### `cfw_custom_css_properties`

*Filter the CSS custom property overrides*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`array('--cfw-body-background-color' => $body_background_color, '--cfw-body-text-color' => $body_text_color, '--cfw-body-font-family' => $body_font, '--cfw-heading-font-family' => $heading_font, '--cfw-header-background-color' => $active_template->supports('header-background') ? $header_background_color : $body_background_color, '--cfw-header-bottom-margin' => strtolower($header_background_color) !== strtolower($body_background_color) ? '2em' : false, '--cfw-footer-background-color' => $active_template->supports('footer-background') ? $footer_background_color : $body_background_color, '--cfw-footer-top-margin' => '#ffffff' !== strtolower($footer_background_color) ? '2em' : false, '--cfw-cart-summary-background-color' => $active_template->supports('summary-background') ? $summary_bg_color : false, '--cfw-cart-summary-mobile-background-color' => $summary_mobile_bg_color, '--cfw-cart-summary-text-color' => $active_template->supports('summary-background') ? $summary_text_color : false, '--cfw-cart-summary-link-color' => $summary_link_color, '--cfw-header-text-color' => $header_text_color, '--cfw-footer-text-color' => $footer_text_color, '--cfw-body-link-color' => $body_link_color, '--cfw-buttons-primary-background-color' => $primary_button_bg_color, '--cfw-buttons-primary-text-color' => $primary_button_text_color, '--cfw-buttons-primary-hover-background-color' => $primary_button_hover_bg_color, '--cfw-buttons-primary-hover-text-color' => $primary_button_hover_text_color, '--cfw-buttons-secondary-background-color' => $secondary_button_bg_color, '--cfw-buttons-secondary-text-color' => $secondary_button_text_color, '--cfw-buttons-secondary-hover-background-color' => $secondary_button_hover_bg_color, '--cfw-buttons-secondary-hover-text-color' => $secondary_button_hover_text_color, '--cfw-cart-summary-item-quantity-background-color' => $cart_item_background_color, '--cfw-cart-summary-item-quantity-text-color' => $cart_item_text_color, '--cfw-breadcrumb-completed-text-color' => $breadcrumb_completed_text_color, '--cfw-breadcrumb-current-text-color' => $breadcrumb_current_text_color, '--cfw-breadcrumb-next-text-color' => $breadcrumb_next_text_color, '--cfw-breadcrumb-completed-accent-color' => $breadcrumb_completed_accent_color, '--cfw-breadcrumb-current-accent-color' => $breadcrumb_current_accent_color, '--cfw-breadcrumb-next-accent-color' => $breadcrumb_next_accent_color, '--cfw-logo-url' => "url({$logo_url})")` |  | 

**Changelog**

Version | Description
------- | -----------
`5.0.0` | 

Source: ./includes/Managers/StyleManager.php, line 160

### `cfw_enable_smartystreets_integration`

*Whether to enable Smarty integration*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`true` |  | 

**Changelog**

Version | Description
------- | -----------
`5.2.1` | 

Source: ./includes/Features/SmartyStreets.php, line 23

### `cfw_unsubscribe_successful_message`

*Filter the message shown when a user unsubscribes from cart reminder emails.*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`__('You have been unsubscribed from our cart reminder emails.', 'checkout-wc')` |  | 

**Changelog**

Version | Description
------- | -----------
`9.0.0` | 

Source: ./includes/Features/AbandonedCartRecovery.php, line 88

### `cfw_acr_exclude_cart`

*Filter whether to exclude tracking the cart*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`false` |  | 
`$email` |  | 
`$cart_contents` |  | 
`$subtotal` |  | 
`$first_name` |  | 
`$last_name` |  | 
`$fields` |  | 
`$meta` |  | 

**Changelog**

Version | Description
------- | -----------
`9.0.37` | 

Source: ./includes/Features/AbandonedCartRecovery.php, line 192

### `cfw_acr_track_cart_without_emails`

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`SettingsManager::instance()->get_setting('acr_simulate_only') === 'yes'` |  | 

Source: ./includes/Features/AbandonedCartRecovery.php, line 216

### `cfw_acr_cart_meta`

*Filter the meta fields to be tracked for abandoned carts.*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`array()` |  | 

**Changelog**

Version | Description
------- | -----------
`8.2.7` | 

Source: ./includes/Features/AbandonedCartRecovery.php, line 348

### `cfw_acr_send_to_email`

*Filter the email send to address*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$cart->email` |  | 
`$cart` |  | 
`$email_id` |  | 

**Changelog**

Version | Description
------- | -----------
`9.0.37` | 

Source: ./includes/Features/AbandonedCartRecovery.php, line 461

### `cfw_acr_email_headers`

*Filter the email headers*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$headers` |  | 

**Changelog**

Version | Description
------- | -----------
`9.0.9` | 

Source: ./includes/Features/AbandonedCartRecovery.php, line 481

### `cfw_cart_table_styles`

*Filter the cart table styles*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$styles` | `array` | 

**Changelog**

Version | Description
------- | -----------
`10.1.0` | Style attribute is deprecated.
`8.0.0` | 

Source: ./includes/Features/AbandonedCartRecovery.php, line 705

### `cfw_fetchify_address_autocomplete_countries`

*Filter list of shipping country restrictions for Google Maps address autocomplete*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`false` |  | 

**Changelog**

Version | Description
------- | -----------
`3.0.0` | 

Source: ./includes/Features/FetchifyAddressAutocomplete.php, line 38

### `cfw_fetchify_address_autocomplete_enable_geolocation`

*Filter whether to enable geolocation*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`true` |  | 

**Changelog**

Version | Description
------- | -----------
`5.3.2` | 

Source: ./includes/Features/FetchifyAddressAutocomplete.php, line 49

### `cfw_fetchify_address_autocomplete_default_country`

*Filter Fetchify address autocomplete default country*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`'gbr'` |  | 

**Changelog**

Version | Description
------- | -----------
`5.3.2` | 

Source: ./includes/Features/FetchifyAddressAutocomplete.php, line 58

### `cfw_breadcrumb_review_step_label`

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`esc_html__('Review', 'checkout-wc')` |  | 

Source: ./includes/Features/OrderReviewStep.php, line 74

### `cfw_google_maps_compatibility_mode`

*Whether to enable Google Maps compatibility mode*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`false` |  | 

**Changelog**

Version | Description
------- | -----------
`4.3.7` | 

Source: ./includes/Features/GoogleAddressAutocomplete.php, line 24

### `cfw_google_maps_language_code`

*Filter Google Maps language code*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$language` |  | 

**Changelog**

Version | Description
------- | -----------
`4.3.7` | 

Source: ./includes/Features/GoogleAddressAutocomplete.php, line 38

### `cfw_address_autocomplete_shipping_countries`

*Filter list of shipping country restrictions for Google Maps address autocomplete*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`array()` |  | 

**Changelog**

Version | Description
------- | -----------
`3.0.0` | 

Source: ./includes/Features/GoogleAddressAutocomplete.php, line 68

### `cfw_google_address_autocomplete_type`

*Filter Google address autocomplete type*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`'geocode|establishment'` |  | 

**Changelog**

Version | Description
------- | -----------
`7.3.0` | 

Source: ./includes/Features/GoogleAddressAutocomplete.php, line 77

### `cfw_skip_bump_cart_item_pricing`

*Filter to determine if cart item pricing should be skipped*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`false` |  | 
`$cart_item` | `array` | The cart item data

**Changelog**

Version | Description
------- | -----------
`10.2.0` | 

Source: ./includes/Features/OrderBumps.php, line 466

### `cfw_order_bump_get_price_context`

*Filter the context for the bump price*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`'cart'` |  | 
`$cart_item` | `array` | The cart item
`$bump` | `\Objectiv\Plugins\Checkout\Interfaces\BumpInterface` | The bump

**Changelog**

Version | Description
------- | -----------
`8.1.6` | 

Source: ./includes/Features/OrderBumps.php, line 479

### `cfw_skip_bump_cart_item_discount_html`

*Filter to determine if cart item discount HTML should be skipped*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`false` |  | 
`$cart_item` | `array` | The cart item data

**Changelog**

Version | Description
------- | -----------
`10.2.0` | 

Source: ./includes/Features/OrderBumps.php, line 528

### `cfw_order_bump_get_price_context`

*Filter the context for the bump price*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`'cart'` |  | 
`$cart_item` | `array` | The cart item
`$bump` | `\Objectiv\Plugins\Checkout\Interfaces\BumpInterface` | The bump

**Changelog**

Version | Description
------- | -----------
`8.1.6` | 

Source: ./includes/Features/OrderBumps.php, line 676

### `cfw_display_bump`

*Filter whether to display the bump*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$display_bump` | `bool` | Whether to display the bump
`$bump` |  | 
`'complete_order'` |  | 

**Changelog**

Version | Description
------- | -----------
`8.0.0` | 

Source: ./includes/Features/OrderBumps.php, line 718

### `cfw_allow_order_bump_coupons`

*Filter whether to allow order bump coupons*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`false` |  | 
`$values['_cfw_order_bump_id']` |  | 

**Changelog**

Version | Description
------- | -----------
`8.2.14` | 

Source: ./includes/Features/OrderBumps.php, line 777

### `cfw_allow_international_phone_field_country_dropdown`

*Filter to allow the country dropdown to be disabled*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`true` |  | 

**Changelog**

Version | Description
------- | -----------
`5.3.5` | 

Source: ./includes/Features/InternationalPhoneField.php, line 44

### `cfw_international_phone_field_placeholder_mode`

*Filter international phone field placeholder mode*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`'aggressive'` |  | 

**Changelog**

Version | Description
------- | -----------
`8.2.19` | 

Source: ./includes/Features/InternationalPhoneField.php, line 52

### `cfw_hide_optional_fields_behind_links`

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`true` |  | 
`'address_2'` |  | 

Source: ./includes/Features/HideOptionalAddressFields.php, line 40

### `cfw_optional_address_2_link_text`

*Filters the link text for adding the optional address line 2 field.*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`sprintf('%s (%s)', __('Add Address Line 2', 'checkout-wc'), __('optional', 'woocommerce'))` |  | 

**Changelog**

Version | Description
------- | -----------
`9.0.17` | 

Source: ./includes/Features/HideOptionalAddressFields.php, line 42

### `cfw_hide_optional_fields_behind_links`

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`true` |  | 
`'company'` |  | 

Source: ./includes/Features/HideOptionalAddressFields.php, line 61

### `cfw_optional_company_link_text`

*Filters the link text for adding the optional address line 2 field.*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`sprintf('%s (%s)', __('Add Company', 'checkout-wc'), __('optional', 'woocommerce'))` |  | 

**Changelog**

Version | Description
------- | -----------
`9.0.17` | 

Source: ./includes/Features/HideOptionalAddressFields.php, line 64

### `cfw_local_pickup_option_label`

*Filters the local pickup option label*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$pickup_option_label` | `string` | The pickup option label

**Changelog**

Version | Description
------- | -----------
`7.3.1` | 

Source: ./includes/Features/LocalPickup.php, line 143

### `cfw_local_pickup_shipping_option_label`

*Filters the local pickup shipping option label*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$ship_option_label` | `string` | The shipping option label

**Changelog**

Version | Description
------- | -----------
`7.3.1` | 

Source: ./includes/Features/LocalPickup.php, line 158

### `cfw_local_pickup_disable_shipping_option`

*Filters whether the shipping option should be disabled*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$this->settings_getter->get_setting('enable_pickup_ship_option') !== 'yes'` |  | 

**Changelog**

Version | Description
------- | -----------
`8.1.6` | 

Source: ./includes/Features/LocalPickup.php, line 167

### `cfw_local_pickup_disable_pickup_option`

*Filters whether the pickup option should be disabled*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`false` |  | 

**Changelog**

Version | Description
------- | -----------
`8.1.6` | 

Source: ./includes/Features/LocalPickup.php, line 176

### `cfw_estimated_pickup_time`

*Filters the pickup location estimated time*

NOTE: Use cfw_pickup_times to extend the list of available pickup times

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`self::get_pickup_times()[$pickup_time] ?? ''` |  | 
`$pickup_location->ID` |  | 

**Changelog**

Version | Description
------- | -----------
`7.5.0` | 

Source: ./includes/Features/LocalPickup.php, line 262

### `cfw_copy_pickup_details_to_order_notes`

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`false` |  | 

Source: ./includes/Features/LocalPickup.php, line 592

### `cfw_local_pickup_use_google_address_link`

*Whether to link the local pickup address to Google Maps for directions*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`true` |  | 

**Changelog**

Version | Description
------- | -----------
`7.3.2` | 

Source: ./includes/Features/LocalPickup.php, line 633

### `cfw_local_pickup_thank_you_address`

*Filter the local pickup address shown to customers on the thank you page*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$address` | `string` | The local pickup address shown to customers
`$raw_address` |  | 
`$order` |  | 

**Changelog**

Version | Description
------- | -----------
`7.3.2` | 

Source: ./includes/Features/LocalPickup.php, line 646

### `cfw_order_updates_heading`

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`__('Pickup instructions', 'checkout-wc')` |  | 
`$order` |  | 

Source: ./includes/Features/LocalPickup.php, line 665

### `cfw_pickup_instructions_text`

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`get_post_meta($location, 'cfw_pl_instructions', true)` |  | 
`$order` |  | 

Source: ./includes/Features/LocalPickup.php, line 676

### `cfw_local_pickup_use_default_billing_address_as_default_shipping_address`

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`false` |  | 

Source: ./includes/Features/LocalPickup.php, line 750

### `cfw_pickup_times`

*Filters the pickup times*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`array('1h' => __('Usually ready in 1 hour.', 'checkout-wc'), '2h' => __('Usually ready in 2 hours.', 'checkout-wc'), '4h' => __('Usually ready in 4 hours.', 'checkout-wc'), '24h' => __('Usually ready in 24 hours.', 'checkout-wc'), '24d' => __('Usually ready in 2-4 days.', 'checkout-wc'), '5d' => __('Usually ready in 5+ days.', 'checkout-wc'))` |  | 

**Changelog**

Version | Description
------- | -----------
`7.3.0` | 

Source: ./includes/Features/LocalPickup.php, line 820

### `cfw_disable_automatic_local_pickup_method`

*Filters whether to disable automatic local pickup method addition*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`false` |  | 

**Changelog**

Version | Description
------- | -----------
`9.1.1` | 

Source: ./includes/Features/LocalPickup.php, line 927

### `cfw_show_pickup_location_in_email`

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`true` |  | 
`$order` |  | 
`$email` |  | 

Source: ./includes/Features/LocalPickup.php, line 1026

### `cfw_pickup_instructions_text`

*Documented in pickup_instructions*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$instructions` |  | 
`$order` |  | 

Source: ./includes/Features/LocalPickup.php, line 1091

### `cfw_local_pickup_use_google_address_link`

*Documented in pickup_instructions*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`true` |  | 

Source: ./includes/Features/LocalPickup.php, line 1108

### `cfw_order_email_pickup_address`

*Filter the local pickup address shown in order emails*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$formatted_address` |  | 
`$address` | `string` | The formatted pickup address
`$order` | `\WC_Order` | The order object

**Changelog**

Version | Description
------- | -----------
`10.2.8` | 

Source: ./includes/Features/LocalPickup.php, line 1117

### `cfw_trust_badges_output_action`

*Filter the action to output the trust badges*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$action` | `string` | The action to output the trust badges
`$position` | `string` | The position of the trust badges

**Changelog**

Version | Description
------- | -----------
`9.0.0` | 

Source: ./includes/Features/TrustBadges.php, line 50

### `cfw_cart_edit_redirect_suppress_notice`

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`false` |  | 

Source: ./includes/Features/CartEditingAtCheckout.php, line 44

### `cfw_disable_side_cart`

*Disable side cart if filter is set*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`false` |  | 

**Changelog**

Version | Description
------- | -----------
`7.2.0` | 

Source: ./includes/Features/SideCart.php, line 26

### `cfw_side_cart_free_shipping_threshold`

*Filters the free shipping threshold amount*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`cfw_apply_filters('woocommerce_product_get_price', $threshold, $dummy_product)` |  | 

**Changelog**

Version | Description
------- | -----------
`8.1.12` | 

Source: ./includes/Features/SideCart.php, line 279

### `cfw_side_cart_shipping_bar_data_exclude_discounts`

*Filters whether to exclude discounts from the subtotal when calculating the free shipping bar*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`false` |  | 

**Changelog**

Version | Description
------- | -----------
`7.10.2` | 

Source: ./includes/Features/SideCart.php, line 293

### `cfw_shipping_bar_data`

*Filters the free shipping data when a free shipping coupon is applied*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$data` | `array` | 

**Changelog**

Version | Description
------- | -----------
`7.0.5` | 

Source: ./includes/Features/SideCart.php, line 328

### `cfw_shipping_bar_data`

*Filters the free shipping data when a threshold is set*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$data` | `array` | 

**Changelog**

Version | Description
------- | -----------
`7.0.5` | 

Source: ./includes/Features/SideCart.php, line 346

### `cfw_shipping_bar_data`

*Filters the free shipping data when no packages are available*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$data` | `array` | 

**Changelog**

Version | Description
------- | -----------
`7.0.5` | 

Source: ./includes/Features/SideCart.php, line 361

### `cfw_shipping_bar_data`

*Filters the free shipping data when no free shipping methods are available*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$data` | `array` | 

**Changelog**

Version | Description
------- | -----------
`7.0.5` | 

Source: ./includes/Features/SideCart.php, line 419

### `cfw_shipping_bar_data`

*Filters the free shipping data*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$data` | `array` | 

**Changelog**

Version | Description
------- | -----------
`7.0.5` | 

Source: ./includes/Features/SideCart.php, line 435

### `checkoutwc_cart_shortcode_additional_classes`

*Filters additional classes for the cart icon shortcode*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`array()` |  | 

**Changelog**

Version | Description
------- | -----------
`8.2.18` | 

Source: ./includes/Features/SideCart.php, line 490

### `cfw_side_cart_icon_file_path`

*The path to the side cart icon file*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$path` | `string` | The path to the side cart icon file

**Changelog**

Version | Description
------- | -----------
`8.2.7` | 

Source: ./includes/Features/SideCart.php, line 523

### `cfw_side_cart_icon`

*The contents of the side cart icon file*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$contents` |  | 

**Changelog**

Version | Description
------- | -----------
`8.2.7` | 

Source: ./includes/Features/SideCart.php, line 540

### `cfw_run_woocommerce_cart_actions`

*Filter to enable or disable the WooCommerce cart actions*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`false` |  | 

**Changelog**

Version | Description
------- | -----------
`8.0.0` | 

Source: ./includes/Features/SideCart.php, line 582

### `cfw_side_cart_free_shipping_progress_bar_free_shipping_message`

*Filter the message displayed when the cart qualifies for free shipping.*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$free_shipping_message` | `string` | 

**Changelog**

Version | Description
------- | -----------
`7.3.0` | 

Source: ./includes/Features/SideCart.php, line 622

### `cfw_side_cart_free_shipping_progress_bar_amount_remaining_message_format`

*Filter the message format for the amount remaining for free shipping*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$amount_remaining_message` | `string` | 

**Changelog**

Version | Description
------- | -----------
`7.3.0` | 

Source: ./includes/Features/SideCart.php, line 636

### `cfw_disable_side_cart_item_quantity_control`

*Filters whether to disable cart item quantity control on the Side Cart*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$disable` | `bool` | Whether to disable cart item quantity control on the Side Cart
`$cart_item` | `array` | The cart item
`$cart_item_key` | `string` | The cart item key

**Changelog**

Version | Description
------- | -----------
`9.0.0` | 

Source: ./includes/Features/SideCart.php, line 707

### `cfw_selected_tab`

*Filters the selected_tab*

Represents the currently selected tab in a user interface.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`empty($_GET[$this->selected_tab_query_arg]) ? $this->default_tab : sanitize_text_field(wp_unslash($_GET[$this->selected_tab_query_arg]))` |  | 

**Changelog**

Version | Description
------- | -----------
`9.0.0` | 

Source: ./includes/Admin/TabNavigation.php, line 121

### `cfw_detected_gateways`

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`array()` |  | 

Source: ./includes/Admin/Pages/ExpressCheckout.php, line 48

### `cfw_do_admin_bar`

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`current_user_can('manage_options') && (SettingsManager::instance()->get_setting('hide_admin_bar_button') !== 'yes' || is_cfw_page())` |  | 

Source: ./includes/Admin/Pages/PageAbstract.php, line 298

### `cfw_admin_page_data`

*Filter the admin page data*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`array()` |  | 

**Changelog**

Version | Description
------- | -----------
`9.0.0` | 

Source: ./includes/Admin/Pages/PageAbstract.php, line 381

### `cfw_admin_integrations_checkbox_fields`

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`array()` |  | 

Source: ./includes/Admin/Pages/Integrations.php, line 69

### `cfw_restricted_post_types_count_args`

*Filters the arguments used to count emails*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$args` | `array` | The arguments.

**Changelog**

Version | Description
------- | -----------
`9.0.0` | 

Source: ./includes/Admin/Pages/Premium/AbandonedCartRecovery.php, line 795

### `cfw_restricted_post_types_count_args`

*Filters the arguments for the bumps count query*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$args` | `array` | The arguments for the bumps count query

**Changelog**

Version | Description
------- | -----------
`8.0.0` | 

Source: ./includes/Admin/Pages/Premium/OrderBumps.php, line 526

### `cfw_active_theme_color_settings`

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`array()` |  | 

Source: ./includes/Admin/Pages/Appearance.php, line 289

### `cfw_theme_color_settings`

*Filters the theme color settings.*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$color_settings` | `array` | The theme color settings.

**Changelog**

Version | Description
------- | -----------
`5.1.0` | 

Source: ./includes/Admin/Pages/Appearance.php, line 292

### `cfw_enable_editable_admin_shipping_phone_field`

*Filter whether to enable editable shipping phone field in admin*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`true` |  | 

**Changelog**

Version | Description
------- | -----------
`3.0.0` | 

Source: ./includes/Admin/ShippingPhoneController.php, line 23

### `cfw_validate_update_order_review_nonce`

*Filters whether to validate nonce for update order review*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`true` |  | 

**Changelog**

Version | Description
------- | -----------
`10.0.2` | 

Source: ./includes/Action/UpdateCheckoutAction.php, line 41

### `cfw_session_expired_target_element`

*Filters which element to update with session expired notice*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`'form.woocommerce-checkout'` |  | 

**Changelog**

Version | Description
------- | -----------
`5.2.0` | 

Source: ./includes/Action/UpdateCheckoutAction.php, line 56

### `cfw_update_checkout_redirect`

*Filters whether to redirect the checkout page during refresh*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`false` |  | 

**Changelog**

Version | Description
------- | -----------
`2.0.0` | 

Source: ./includes/Action/UpdateCheckoutAction.php, line 177

### `cfw_update_payment_methods`

*Filters payment methods during update_checkout refresh*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`cfw_get_payment_methods()` |  | 

**Changelog**

Version | Description
------- | -----------
`4.0.2` | 

Source: ./includes/Action/UpdateCheckoutAction.php, line 216

### `cfw_email_exists`

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`email_exists($email)` |  | 
`$email` |  | 

Source: ./includes/Action/AccountExistsAction.php, line 30

### `cfw_failed_login_error_message`

*Filters failed login error message*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$user->get_error_message() ? $user->get_error_message() : $alt_message` |  | 

**Changelog**

Version | Description
------- | -----------
`3.0.0` | 

Source: ./includes/Action/LogInAction.php, line 44

### `cfw_failed_login_error_message`

*Filters failed login error message*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$validation_error->get_error_message()` |  | 

**Changelog**

Version | Description
------- | -----------
`3.0.0` | 

Source: ./includes/Action/LogInAction.php, line 55

### `cfw_add_to_cart_redirect`

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$redirect` |  | 
`$product_id` |  | 

Source: ./includes/Action/AddToCartAction.php, line 49

### `cfw_remove_coupon_response`

*Filters remove coupon action response object*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`array('result' => $result, 'html' => $output, 'coupon' => $coupon)` |  | 

**Changelog**

Version | Description
------- | -----------
`3.14.0` | 

Source: ./includes/Action/RemoveCouponAction.php, line 36

### `cfw_email_domain_valid`

*Filters whether to validate email domain*

If you don't append dot to the domain, every domain will validate because
it will fetch your local MX handler

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`checkdnsrr($email_domain . '.', 'MX')` |  | 
`$email_domain` | `string` | The email domain
`$email_address` | `string` | The email address

**Changelog**

Version | Description
------- | -----------
`7.2.3` | 

Source: ./includes/Action/ValidateEmailDomainAction.php, line 28

### `cfw_smarty_address_validation_address`

*Filter the address before it's sent to SmartyStreets*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$address` | `array` | The address to be sent to SmartyStreets

**Changelog**

Version | Description
------- | -----------
`7.10.3` | 

Source: ./includes/Action/SmartyStreetsAddressValidationAction.php, line 142

### `cfw_smarty_use_zip4`

*Filter whether to use the zip4 code*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`false` |  | 

**Changelog**

Version | Description
------- | -----------
`8.2.26` | 

Source: ./includes/Action/SmartyStreetsAddressValidationAction.php, line 257

### `cfw_cart_thumb_width`

*Filter cart thumbnail width*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`60` |  | 

**Changelog**

Version | Description
------- | -----------
`3.0.0` | 

Source: ./includes/CartImageSizeAdder.php, line 10

### `cfw_cart_thumb_height`

*Filter cart thumbnail height*

0 indicates auto height

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`0` |  | 

**Changelog**

Version | Description
------- | -----------
`3.0.0` | 

Source: ./includes/CartImageSizeAdder.php, line 19

### `cfw_crop_cart_thumbs`

*Filter whether to crop cart thumbnails*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`false` |  | 

**Changelog**

Version | Description
------- | -----------
`3.0.0` | 

Source: ./includes/CartImageSizeAdder.php, line 30

### `cfw_hide_bump_if_offer_product_in_cart`

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`true` |  | 

Source: ./includes/Model/Bumps/BumpAbstract.php, line 135

### `cfw_is_cart_bump_valid`

*Filters whether the bump is valid*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$result` |  | 
`$this` |  | 

**Changelog**

Version | Description
------- | -----------
`6.3.0` | 

Source: ./includes/Model/Bumps/BumpAbstract.php, line 271

### `cfw_order_bump_upsell_quantity_to_replace`

*The max number of items that upsell can replace (-1 is unlimited)*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`-1` |  | 
`$this` |  | 

**Changelog**

Version | Description
------- | -----------
`7.6.1` | 

Source: ./includes/Model/Bumps/BumpAbstract.php, line 371

### `cfw_display_bump`

*Filter whether to display the bump*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$display_bump` | `bool` | Whether to display the bump
`$this` |  | 
`$location` |  | 

**Changelog**

Version | Description
------- | -----------
`8.0.0` | 

Source: ./includes/Model/Bumps/BumpAbstract.php, line 610

### `cfw_order_bump_get_price`

*Filter the order bump price.*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`(float) $price - (float) $discount_value` |  | 
`$context` | `string` | The context of the price.
`$this` |  | 

**Changelog**

Version | Description
------- | -----------
`5.0.0` | 

Source: ./includes/Model/Bumps/BumpAbstract.php, line 751

### `cfw_order_bump_captured_revenue`

*Filter the captured revenue*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$new_revenue` | `float` | The new captured revenue
`$this` |  | 

**Changelog**

Version | Description
------- | -----------
`9.0.0` | 

Source: ./includes/Model/Bumps/BumpAbstract.php, line 805

### `cfw_cart_item_row_class`

*Filter the item row class*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$woocommerce_filtered_cart_item_row_class` | `string` | The filtered row class
`$item` |  | 

**Changelog**

Version | Description
------- | -----------
`8.0.0` | 

Source: ./includes/Model/CartItem.php, line 61

### `cfw_disable_cart_editing`

*Filters whether to disable cart editing*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`!PlanManager::can_access_feature('enable_cart_editing') || true === $quantity_args['readonly']` |  | 
`$this->raw_item` |  | 
`$key` |  | 

**Changelog**

Version | Description
------- | -----------
`7.1.7` | 

Source: ./includes/Model/CartItem.php, line 74

### `cfw_disable_side_cart_item_quantity_control`

*Filters whether to disable cart editing in the side cart*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`true === $quantity_args['readonly']` |  | 
`$this->raw_item` |  | 
`$key` |  | 

**Changelog**

Version | Description
------- | -----------
`9.0.0` | 

Source: ./includes/Model/CartItem.php, line 85

### `cfw_disable_cart_variation_editing`

*Filters whether to disable cart variation editing*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`!PlanManager::can_access_feature('enable_side_cart') || SettingsManager::instance()->get_setting('allow_side_cart_item_variation_changes') !== 'yes' || empty($item['variation_id'])` |  | 
`$item` |  | 
`$key` |  | 

**Changelog**

Version | Description
------- | -----------
`8.0.0` | 

Source: ./includes/Model/CartItem.php, line 96

### `cfw_disable_cart_variation_editing_checkout`

*Filters whether to disable cart variation editing*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`!PlanManager::can_access_feature('enable_cart_editing') || SettingsManager::instance()->get_setting('allow_checkout_cart_item_variation_changes') !== 'yes' || empty($item['variation_id'])` |  | 
`$item` |  | 
`$key` |  | 

**Changelog**

Version | Description
------- | -----------
`10.1.6` | 

Source: ./includes/Model/CartItem.php, line 115

### `cfw_cart_item_data_expanded`

*Filter whether to display cart item data in the expanded format.*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`SettingsManager::instance()->get_setting('cart_item_data_display') === 'woocommerce'` |  | 

**Changelog**

Version | Description
------- | -----------
`5.0.0` | 

Source: ./includes/Model/CartItem.php, line 195

### `cfw_allow_html_in_formatted_item_data_value`

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`false` |  | 

Source: ./includes/Model/CartItem.php, line 229

### `cfw_order_item_thumbnail`

*Filter the order item thumbnail*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$item_product ? $item_product->get_image('cfw_cart_thumb') : ''` |  | 
`$item` | `\WC_Order_Item` | The order item

**Changelog**

Version | Description
------- | -----------
`7.2.1` | 

Source: ./includes/Model/OrderItem.php, line 31

### `cfw_order_item_row_class`

*Filter the order item row class*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`''` |  | 
`$item` | `\WC_Order_Item` | The order item

**Changelog**

Version | Description
------- | -----------
`7.2.1` | 

Source: ./includes/Model/OrderItem.php, line 43

### `cfw_cart_item_data_expanded`

*Filter the order item data*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`SettingsManager::instance()->get_setting('cart_item_data_display') === 'woocommerce'` |  | 

**Changelog**

Version | Description
------- | -----------
`7.2.1` | 

Source: ./includes/Model/OrderItem.php, line 117

### `cfw_acr_carts`

*Filter the carts for the abandoned cart recovery report table.*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$carts` | `array` | The carts.
`'table'` |  | 

**Changelog**

Version | Description
------- | -----------
`8.2.28` | 

Source: ./includes/API/AbandonedCartsAPI.php, line 59

### `cfw_acr_carts`

*Filter the carts for the abandoned cart recovery report stats dashboard.*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$carts` | `array` | The carts.
`'dashboard-stats'` |  | 

**Changelog**

Version | Description
------- | -----------
`8.2.28` | 

Source: ./includes/API/AbandonedCartRecoveryReportAPI.php, line 65

### `cfw_load_checkout_template`

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`cfw_is_checkout()` |  | 

Source: ./includes/Loaders/Content.php, line 26

### `cfw_load_order_pay_template`

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`is_checkout_pay_page()` |  | 

Source: ./includes/Loaders/Content.php, line 62

### `cfw_load_order_received_template`

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`is_order_received_page()` |  | 

Source: ./includes/Loaders/Content.php, line 105

### `cfw_load_checkout_template`

*Filters whether to load checkout template*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`cfw_is_checkout()` |  | 

**Changelog**

Version | Description
------- | -----------
`3.0.0` | 

Source: ./includes/Loaders/Redirect.php, line 22

### `cfw_body_classes`

*Filter CheckoutWC specific body classes*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$css_classes` | `array` | The body css classes

**Changelog**

Version | Description
------- | -----------
`3.0.0` | 

Source: ./includes/Loaders/Redirect.php, line 47

### `cfw_load_order_pay_template`

*Filters whether to load order pay template*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`is_checkout_pay_page()` |  | 

**Changelog**

Version | Description
------- | -----------
`3.0.0` | 

Source: ./includes/Loaders/Redirect.php, line 74

### `cfw_body_classes`

*Filter CheckoutWC specific body classes*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$css_classes` | `array` | The body css classes

**Changelog**

Version | Description
------- | -----------
`3.0.0` | 

Source: ./includes/Loaders/Redirect.php, line 98

### `cfw_load_order_received_template`

*Filters whether to load order received template*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`is_order_received_page()` |  | 

**Changelog**

Version | Description
------- | -----------
`3.0.0` | 

Source: ./includes/Loaders/Redirect.php, line 128

### `cfw_body_classes`

*Filter CheckoutWC specific body classes*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$css_classes` | `array` | The body css classes

**Changelog**

Version | Description
------- | -----------
`3.0.0` | 

Source: ./includes/Loaders/Redirect.php, line 152

### `cfw_blocked_style_handles`

*Filters blocked stylesheet handles*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`array()` |  | 

**Changelog**

Version | Description
------- | -----------
`3.0.0` | 

Source: ./includes/Loaders/Redirect.php, line 250

### `cfw_blocked_script_handles`

*Filters blocked script handles*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`array()` |  | 

**Changelog**

Version | Description
------- | -----------
`3.0.0` | 

Source: ./includes/Loaders/Redirect.php, line 269

### `cfw_template_global_params`

*Filters global template parameters available to templates*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`array()` |  | 

**Changelog**

Version | Description
------- | -----------
`3.0.0` | 

Source: ./includes/Loaders/LoaderAbstract.php, line 81

### `cfw_template_global_params`

*Filters global template parameters available to templates*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`array('call_receipt_hook' => false, 'order_button_text' => cfw_apply_filters('woocommerce_pay_order_button_text', __('Pay for order', 'woocommerce')), 'available_gateways' => array())` |  | 

**Changelog**

Version | Description
------- | -----------
`3.0.0` | 

Source: ./includes/Loaders/LoaderAbstract.php, line 100

### `cfw_template_global_params`

*Filters global template parameters available to templates*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`array()` |  | 

**Changelog**

Version | Description
------- | -----------
`3.0.0` | 

Source: ./includes/Loaders/LoaderAbstract.php, line 271

### `cfw_trust_badge_thumb_width`

*Filter cart thumbnail width*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`110` |  | 

**Changelog**

Version | Description
------- | -----------
`3.0.0` | 

Source: ./includes/TrustBadgeImageSizeAdder.php, line 10

### `cfw_trust_badge_thumb_height`

*Filter cart thumbnail height*

0 indicates auto height

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`0` |  | 

**Changelog**

Version | Description
------- | -----------
`3.0.0` | 

Source: ./includes/TrustBadgeImageSizeAdder.php, line 19

### `cfw_crop_trust_badge_thumbs`

*Filter whether to crop cart thumbnails*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`false` |  | 

**Changelog**

Version | Description
------- | -----------
`3.0.0` | 

Source: ./includes/TrustBadgeImageSizeAdder.php, line 30

### `cfw_disable_tracking_checkin`

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`false` |  | 
`$home_url` |  | 

Source: ./includes/Stats/StatCollection.php, line 236

### `cfw_legacy_suppress_php_errors_output`

*Filters whether to suppress PHP errors output.*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`!defined('WP_DEBUG') || !WP_DEBUG` |  | 

**Changelog**

Version | Description
------- | -----------
`5.0.0` | 

Source: ./includes/PhpErrorOutputSuppressor.php, line 20

### `cfw_pre_output_fieldset_field_args`

*Filters fieldset field args*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$field` | `array` | Field args
`$key` | `string` | Field key

**Changelog**

Version | Description
------- | -----------
`7.0.0` | 

Source: ./sources/php/functions.php, line 35

### `cfw_get_account_checkout_fields`

*Filters account address checkout fields*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$checkout->get_checkout_fields('account')` |  | 

**Changelog**

Version | Description
------- | -----------
`2.0.0` | 

Source: ./sources/php/functions.php, line 68

### `cfw_get_shipping_checkout_fields`

*Filters shipping address checkout fields*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`(array) WC()->checkout()->get_checkout_fields('shipping')` |  | 

**Changelog**

Version | Description
------- | -----------
`2.0.0` | 

Source: ./sources/php/functions.php, line 99

### `cfw_get_billing_checkout_fields`

*Filters billing address checkout fields*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`(array) WC()->checkout()->get_checkout_fields('billing')` |  | 

**Changelog**

Version | Description
------- | -----------
`2.0.0` | 

Source: ./sources/php/functions.php, line 120

### `cfw_force_display_billing_address`

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`false` |  | 

Source: ./sources/php/functions.php, line 139

### `cfw_unique_billing_fields`

*Filters the unique billing fields.*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$unique_fields` | `array` | The unique billing fields.

**Changelog**

Version | Description
------- | -----------
`7.2.1` | 

Source: ./sources/php/functions.php, line 188

### `cfw_ship_to_label`

*Filters ship to label in review pane*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$ship_to_label` | `string` | Ship to label

**Changelog**

Version | Description
------- | -----------
`3.0.0` | 

Source: ./sources/php/functions.php, line 218

### `cfw_get_shipping_details_address`

*Filters review pane shipping address*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`cfw_get_posted_address_fields(wc_ship_to_billing_address_only() ? 'billing' : 'shipping')` |  | 
`$checkout` |  | 

**Changelog**

Version | Description
------- | -----------
`2.0.0` | 

Source: ./sources/php/functions.php, line 235

### `cfw_get_review_pane_shipping_address`

*Filters review pane formatted shipping address*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$formatted_address` | `string` | Formatted shipping address

**Changelog**

Version | Description
------- | -----------
`7.3.0` | 

Source: ./sources/php/functions.php, line 250

### `cfw_get_review_pane_billing_address`

*Filters review pane billing address*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`cfw_get_posted_address_fields()` |  | 
`$checkout` |  | 

**Changelog**

Version | Description
------- | -----------
`2.0.0` | 

Source: ./sources/php/functions.php, line 270

### `cfw_available_shipping_methods`

*Filter the available shipping methods displayed on checkout page*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$package['rates']` |  | 
`$package` | `array` | The shipping package
`$i` | `int` | The package index

**Changelog**

Version | Description
------- | -----------
`8.0.0` | 

Source: ./sources/php/functions.php, line 331

### `cfw_ensure_selected_payment_method`

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`true` |  | 

Source: ./sources/php/functions.php, line 421

### `cfw_show_gateway_{$gateway->id}`

*Filters whether to show gateway in list of gateways*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`true` |  | 

**Changelog**

Version | Description
------- | -----------
`2.0.0` | 

Source: ./sources/php/functions.php, line 460

### `cfw_gateway_order_button_text`

*Filters gateway order button text*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$gateway->order_button_text` |  | 
`$gateway` |  | 

**Changelog**

Version | Description
------- | -----------
`2.0.0` | 

Source: ./sources/php/functions.php, line 468

### `cfw_get_gateway_icons`

*Filters gateway order button text*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$gateway->get_icon()` |  | 
`$gateway` |  | 

**Changelog**

Version | Description
------- | -----------
`2.0.0` | 

Source: ./sources/php/functions.php, line 477

### `cfw_payment_method_li_class`

*Filters the class attribute of the payment method list item.*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`"wc_payment_method cfw-radio-reveal-li {$is_active_class} payment_method_{$gateway->id}"` |  | 
`$gateway` | `\WC_Payment_Gateway` | The payment gateway object.

**Changelog**

Version | Description
------- | -----------
`10.1.0` | Added $gateway argument.
`2.0.0` | 

Source: ./sources/php/functions.php, line 489

### `cfw_payment_gateway_{$gateway->id}_content`

*Filters whether to show gateway content*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$gateway->has_fields() || $gateway->get_description()` |  | 

**Changelog**

Version | Description
------- | -----------
`2.0.0` | 

Source: ./sources/php/functions.php, line 525

### `cfw_payment_gateway_field_html_{$gateway->id}`

*Filters gateway payment field output HTML*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$field_html` |  | 

**Changelog**

Version | Description
------- | -----------
`2.0.0` | 

Source: ./sources/php/functions.php, line 553

### `cfw_link_cart_items`

*Filters whether to link cart items to products*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`SettingsManager::instance()->get_setting('cart_item_link') === 'enabled'` |  | 

**Changelog**

Version | Description
------- | -----------
`1.0.0` | 

Source: ./sources/php/functions.php, line 632

### `cfw_order_cart_html`

*Filters order cart HTML output*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`array($return)` |  | 
`'CheckoutWC 5.4.0'` |  | 
`'cfw_items_summary_table_html'` |  | 

**Changelog**

Version | Description
------- | -----------
`1.0.0` | 

Source: ./sources/php/functions.php, line 681

### `cfw_items_summary_table_html`

*This filter is documented elsewhere in this file*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$return` |  | 
`'order'` |  | 

Source: ./sources/php/functions.php, line 690

### `cfw_available_shipping_methods`

*Documented in cfw_get_cart_shipping_data()*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$package['rates']` |  | 
`$package` |  | 
`$i` |  | 

Source: ./sources/php/functions.php, line 704

### `cfw_shipping_total_address_required_text`

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`esc_html__('Shipping costs are calculated during checkout.', 'woocommerce')` |  | 

Source: ./sources/php/functions.php, line 733

### `cfw_shipping_total_not_available_text`

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`__('No shipping methods available', 'checkout-wc')` |  | 

Source: ./sources/php/functions.php, line 744

### `cfw_no_shipping_method_selected_message`

*Filters shipping total text when no shipping methods are available*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`''` |  | 

**Changelog**

Version | Description
------- | -----------
`2.0.0` | 

Source: ./sources/php/functions.php, line 748

### `cfw_shipping_free_text`

*Filters the text displayed when free shipping is available.*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`__('Free!', 'woocommerce')` |  | 

**Changelog**

Version | Description
------- | -----------
`5.0.0` | 

Source: ./sources/php/functions.php, line 764

### `cfw_template_cart_el`

*Filters order totals element ID*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`'cfw-totals-list'` |  | 

**Changelog**

Version | Description
------- | -----------
`2.0.0` | 

Source: ./sources/php/functions.php, line 831

### `cfw_order_totals_html`

*Filters order totals HTML*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`ob_get_clean()` |  | 

**Changelog**

Version | Description
------- | -----------
`2.0.0` | 

Source: ./sources/php/functions.php, line 877

### `cfw_place_order_button_container_classes`

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`array('place-order')` |  | 

Source: ./sources/php/functions.php, line 910

### `cfw_payment_method_heading`

*Filters payment methods heading*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`esc_html__('Payment', 'checkout-wc')` |  | 

**Changelog**

Version | Description
------- | -----------
`2.0.0` | 

Source: ./sources/php/functions.php, line 952

### `cfw_transactions_encrypted_statement`

*Filters payment methods transactions are encrypted statement*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`esc_html__('All transactions are secure and encrypted.', 'checkout-wc')` |  | 

**Changelog**

Version | Description
------- | -----------
`2.0.0` | 

Source: ./sources/php/functions.php, line 977

### `cfw_no_payment_required_text`

*Filters no payment required text*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`esc_html__('Your order is free. No payment is required.', 'checkout-wc')` |  | 

**Changelog**

Version | Description
------- | -----------
`2.0.0` | 

Source: ./sources/php/functions.php, line 998

### `cfw_default_billing_address_radio_selection`

*Filters default billing address radio selection*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`'same_as_shipping'` |  | 

**Changelog**

Version | Description
------- | -----------
`8.2.28` | 

Source: ./sources/php/functions.php, line 1033

### `cfw_billing_address_same_as_shipping_label`

*Filters the label for the same as shipping address radio*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`__('Same as shipping address', 'checkout-wc')` |  | 

**Changelog**

Version | Description
------- | -----------
`9.0.0` | 

Source: ./sources/php/functions.php, line 1042

### `cfw_billing_address_different_address_label`

*Filters the label for the different billing address radio*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`__('Use a different billing address', 'checkout-wc')` |  | 

**Changelog**

Version | Description
------- | -----------
`9.0.0` | 

Source: ./sources/php/functions.php, line 1051

### `cfw_force_display_billing_address`

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`SettingsManager::instance()->get_setting('force_different_billing_address') === 'yes'` |  | 

Source: ./sources/php/functions.php, line 1067

### `cfw_thank_you_shipment_tracking_header`

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`"<h4>{$tracking_item['formatted_tracking_provider']} {$label_suffix}</h4>"` |  | 
`$tracking_item['formatted_tracking_provider']` |  | 

Source: ./sources/php/functions.php, line 1223

### `cfw_thank_you_shipment_tracking_link`

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`"<p><a class=\"tracking-number\" target=\"_blank\" href=\"{$tracking_item['formatted_tracking_link']}\">{$tracking_item['tracking_number']}</a></p>"` |  | 
`$tracking_item['formatted_tracking_link']` |  | 
`$tracking_item['tracking_number']` |  | 

Source: ./sources/php/functions.php, line 1234

### `cfw_thank_you_tracking_numbers`

*Filter to handle custom shipment tracking links output on thank you page*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`''` |  | 
`$order` | `\WC_Order` | The order object

**Changelog**

Version | Description
------- | -----------
`3.0.0` | 

Source: ./sources/php/functions.php, line 1243

### `cfw_maybe_output_tracking_numbers`

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$output` |  | 
`$order` |  | 

Source: ./sources/php/functions.php, line 1265

### `cfw_show_return_to_cart_link`

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`true` |  | 

Source: ./sources/php/functions.php, line 1278

### `cfw_return_to_cart_link_url`

*Filter return to cart link URL*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`wc_get_cart_url()` |  | 

**Changelog**

Version | Description
------- | -----------
`2.0.0` | 

Source: ./sources/php/functions.php, line 1282

### `cfw_return_to_cart_link_text`

*Filter return to cart link text*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`esc_html__('Return to cart', 'checkout-wc')` |  | 

**Changelog**

Version | Description
------- | -----------
`2.0.0` | 

Source: ./sources/php/functions.php, line 1291

### `cfw_return_to_cart_link`

*Filter return to cart link*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`sprintf('<a href="%s" class="cfw-prev-tab">« %s</a>', esc_attr($return_to_cart_link_url), $return_to_cart_link_text)` |  | 

**Changelog**

Version | Description
------- | -----------
`2.0.0` | 

Source: ./sources/php/functions.php, line 1300

### `cfw_continue_to_shipping_method_label`

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`esc_html__('Continue to shipping', 'checkout-wc')` |  | 

Source: ./sources/php/functions.php, line 1335

### `cfw_continue_to_shipping_button`

*Filter continue to shipping method button*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`sprintf('<a href="javascript:" data-tab="#cfw-shipping-method" class="%s"><span class="cfw-button-text">%s</span></a>', esc_attr(join(' ', $new_classes)), $continue_to_shipping_method_label)` |  | 

**Changelog**

Version | Description
------- | -----------
`3.0.0` | 

Source: ./sources/php/functions.php, line 1337

### `cfw_continue_to_payment_method_label`

*Filter continue to payment method button label*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$args['label']` |  | 

**Changelog**

Version | Description
------- | -----------
`3.0.0` | 

Source: ./sources/php/functions.php, line 1366

### `cfw_continue_to_payment_button`

*Filter continue to payment method button*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`sprintf('<a href="javascript:" data-tab="#cfw-payment-method" class="%s"><span class="cfw-button-text">%s</span></a>', esc_attr(join(' ', $args['classes'])), $continue_to_payment_method_label)` |  | 

**Changelog**

Version | Description
------- | -----------
`3.0.0` | 

Source: ./sources/php/functions.php, line 1375

### `cfw_continue_to_order_review_label`

*Filter continue to order review button label*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`esc_html__('Review order', 'checkout-wc')` |  | 

**Changelog**

Version | Description
------- | -----------
`3.0.0` | 

Source: ./sources/php/functions.php, line 1386

### `cfw_continue_to_order_review_button`

*Filter continue to order review button*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`sprintf('<a href="javascript:" data-tab="#cfw-order-review" class="cfw-primary-btn cfw-next-tab cfw-continue-to-order-review-btn">%s</a>', $continue_to_order_review_label)` |  | 

**Changelog**

Version | Description
------- | -----------
`3.0.0` | 

Source: ./sources/php/functions.php, line 1395

### `cfw_return_to_customer_info_label`

*Filter return to customer information tab label*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`esc_html__('Return to information', 'checkout-wc')` |  | 

**Changelog**

Version | Description
------- | -----------
`3.0.0` | 

Source: ./sources/php/functions.php, line 1406

### `cfw_return_to_customer_information_link`

*Filter return to customer information tab link*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`sprintf('<a href="javascript:" data-tab="#cfw-customer-info" class="cfw-prev-tab cfw-return-to-information-btn">« %s</a>', $return_to_customer_info_label)` |  | 

**Changelog**

Version | Description
------- | -----------
`3.0.0` | 

Source: ./sources/php/functions.php, line 1415

### `cfw_return_to_shipping_method_label`

*Filter return to shipping method tab label*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`esc_html__('Return to shipping', 'checkout-wc')` |  | 

**Changelog**

Version | Description
------- | -----------
`3.0.0` | 

Source: ./sources/php/functions.php, line 1426

### `cfw_return_to_shipping_method_link`

*Filter return to shipping method tab link*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`sprintf('<a href="javascript:" data-tab="#cfw-shipping-method" class="cfw-prev-tab cfw-return-to-shipping-btn">« %s</a>', $return_to_shipping_method_label)` |  | 

**Changelog**

Version | Description
------- | -----------
`3.0.0` | 

Source: ./sources/php/functions.php, line 1435

### `cfw_return_to_payment_method_label`

*Filter return to payment method tab label*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`esc_html__('Return to payment', 'checkout-wc')` |  | 

**Changelog**

Version | Description
------- | -----------
`3.0.0` | 

Source: ./sources/php/functions.php, line 1446

### `cfw_return_to_payment_method_link`

*Filter return to payment method tab link*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`sprintf('<a href="javascript:" data-tab="#cfw-payment-method" class="cfw-prev-tab cfw-return-to-payment-btn">« %s</a>', $return_to_payment_method_label)` |  | 

**Changelog**

Version | Description
------- | -----------
`3.0.0` | 

Source: ./sources/php/functions.php, line 1455

### `cfw_show_customer_information_tab`

*Filters whether to show customer information tab*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`true` |  | 

**Changelog**

Version | Description
------- | -----------
`3.0.0` | 

Source: ./sources/php/functions.php, line 1469

### `cfw_breadcrumb_cart_url`

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`wc_get_cart_url()` |  | 

Source: ./sources/php/functions.php, line 1491

### `cfw_breadcrumb_cart_label`

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`esc_html__('Cart', 'woocommerce')` |  | 

Source: ./sources/php/functions.php, line 1500

### `cfw_breadcrumbs`

*Filters breadcrumbs*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$default_breadcrumbs` |  | 

**Changelog**

Version | Description
------- | -----------
`3.0.0` | 

Source: ./sources/php/functions.php, line 1523

### `cfw_{$context}_main_container_classes`

*Filters main container classes*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`join(' ', $classes)` |  | 

**Changelog**

Version | Description
------- | -----------
`3.0.0` | 

Source: ./sources/php/functions.php, line 1605

### `cfw_is_checkout`

*Filter cfw_is_checkout()*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`function_exists('is_checkout') && is_checkout() && !is_order_received_page() && !is_checkout_pay_page()` |  | 

**Changelog**

Version | Description
------- | -----------
`3.0.0` | 

Source: ./sources/php/functions.php, line 1632

### `cfw_is_checkout_pay_page`

*Filter is_checkout_pay_page()*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`function_exists('is_checkout_pay_page') && is_checkout_pay_page() && cfw_get_active_template()->supports('order-pay') && PlanManager::can_access_feature('enable_order_pay')` |  | 

**Changelog**

Version | Description
------- | -----------
`3.0.0` | 

Source: ./sources/php/functions.php, line 1651

### `cfw_is_order_received_page`

*Filter is_order_received_page()*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`function_exists('is_order_received_page') && is_order_received_page() && cfw_get_active_template()->supports('order-received') && PlanManager::can_access_feature('enable_thank_you_page', 'plus')` |  | 

**Changelog**

Version | Description
------- | -----------
`3.0.0` | 

Source: ./sources/php/functions.php, line 1671

### `cfw_template_redirect_priority`

*Filters CheckoutWC template redirect priority*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`11` |  | 

**Changelog**

Version | Description
------- | -----------
`2.0.0` | 

Source: ./sources/php/functions.php, line 1809

### `cfw_get_logo_attachment_id`

*Filters header logo attachment ID*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`SettingsManager::instance()->get_setting('logo_attachment_id', array(cfw_get_active_template()->get_slug()))` |  | 

**Changelog**

Version | Description
------- | -----------
`8.2.23` | 

Source: ./sources/php/functions.php, line 1853

### `cfw_header_home_url`

*Filters header logo / title link URL*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`get_home_url()` |  | 

**Changelog**

Version | Description
------- | -----------
`3.0.0` | 

Source: ./sources/php/functions.php, line 1866

### `cfw_header_blog_name`

*Filters header logo / title link URL*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`get_bloginfo('name')` |  | 

**Changelog**

Version | Description
------- | -----------
`5.3.0` | 

Source: ./sources/php/functions.php, line 1875

### `cfw_express_pay_separator_text`

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`__('Or', 'checkout-wc')` |  | 

Source: ./sources/php/functions.php, line 1981

### `cfw_cart_item_quantity_min_value`

*Filters cart item minimum quantity*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$args['min_value']` |  | 
`$cart_item` | `array` | The cart item
`$cart_item_key` | `string` | The cart item key

**Changelog**

Version | Description
------- | -----------
`2.0.0` | 

Source: ./sources/php/functions.php, line 2156

### `cfw_cart_item_quantity_step`

*Filters cart item quantity step*

Determines how much to increment or decrement by

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$args['step']` |  | 
`$cart_item` | `array` | The cart item
`$cart_item_key` | `string` | The cart item key

**Changelog**

Version | Description
------- | -----------
`2.0.0` | 

Source: ./sources/php/functions.php, line 2167

### `cfw_disable_side_cart_item_quantity_control`

*Filters whether to disable side cart item quantity control*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`false` |  | 
`$cart_item` | `array` | The cart item
`$cart_item_key` | `string` | The cart item key

**Changelog**

Version | Description
------- | -----------
`8.0.0` | 

Source: ./sources/php/functions.php, line 2191

### `cfw_cart_item_quantity_max_value`

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$product->get_max_purchase_quantity()` |  | 
`$cart_item` |  | 
`$cart_item_key` |  | 

Source: ./sources/php/functions.php, line 2255

### `cfw_cart_quantity_input_has_override`

*Filters whether the cart quantity input has been overridden*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$woocommerce_core_cart_quantity !== $product_quantity` |  | 
`$cart_item_key` |  | 

**Changelog**

Version | Description
------- | -----------
`8.2.18` | 

Source: ./sources/php/functions.php, line 2273

### `cfw_get_woocommerce_notices`

*Filters WooCommerce notices before display*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`WC()->session->get('wc_notices', array())` |  | 

**Changelog**

Version | Description
------- | -----------
`8.2.23` | 

Source: ./sources/php/functions.php, line 2284

### `cfw_get_suggested_products`

*Filter suggested products*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$cross_sells` | `\WC_Product[]` | The suggested products

**Changelog**

Version | Description
------- | -----------
`9.0.0` | 

Source: ./sources/php/functions.php, line 2494

### `cfw_get_suggested_products`

*Filter suggested products*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$cross_sells` | `array` | 
`$limit` | `int` | 
`$random_fallback` | `bool` | 

**Changelog**

Version | Description
------- | -----------
`8.0.0` | 

Source: ./sources/php/functions.php, line 2507

### `cfw_cart_table_styles`

*Filter the cart table styles*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$styles` | `array` | 

**Changelog**

Version | Description
------- | -----------
`10.1.0` | Style attribute is deprecated.
`8.0.0` | 

Source: ./sources/php/functions.php, line 2871

### `cfw_acr_email_custom_css`

*Filter the cart table custom styles*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`''` |  | 

**Changelog**

Version | Description
------- | -----------
`10.0.2` | 

Source: ./sources/php/functions.php, line 2887

### `cfw_cart_item_discount`

*Filters the discount HTML for a cart item*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$discount_html` | `string` | The discount HTML
`$item->get_raw_item()` |  | 
`$item->get_product()` |  | 

**Changelog**

Version | Description
------- | -----------
`4.0.0` | 

Source: ./sources/php/functions.php, line 3098

### `cfw_totals_itemize_shipping_costs`

*Whether to itemize shipping costs*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`false` |  | 

**Changelog**

Version | Description
------- | -----------
`10.1.7` | 

Source: ./sources/php/functions.php, line 3238

### `cfw_cart_totals_shipping_label`

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`esc_html__('Shipping', 'woocommerce')` |  | 

Source: ./sources/php/functions.php, line 3282

### `cfw_get_cart_totals_data`

*Filters the cart totals data*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$data` | `array` | The cart totals data

**Changelog**

Version | Description
------- | -----------
`10.1.0` | 

Source: ./sources/php/functions.php, line 3322

### `cfw_get_cart_actions_data`

*Filters the cart actions data*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`array(
    /**
     * After cart html table output
     *
     * @since 4.3.4
     */
    'cfw_after_cart_html' => cfw_get_action_output('cfw_after_cart_html'),
    'woocommerce_review_order_before_shipping' => cfw_get_action_output('woocommerce_review_order_before_shipping'),
    /**
     * After shipping methods
     *
     * @since 4.3.4
     */
    'cfw_after_shipping_methods' => cfw_get_action_output('cfw_after_shipping_methods'),
    'woocommerce_review_order_after_shipping' => cfw_get_action_output('woocommerce_review_order_after_shipping'),
    /**
     * Whether to enable woocommerce_after_cart_totals hook for side cart
     *
     * @since 9.0.37
     * @param bool $enable_side_cart_woocommerce_after_cart_totals_hook Whether to enable woocommerce_after_cart_totals hook for side cart
     */
    'woocommerce_after_cart_totals' => apply_filters(false) ? cfw_get_action_output('woocommerce_after_cart_totals') : '',
    'woocommerce_no_shipping_available_html' => cfw_apply_filters('woocommerce_no_shipping_available_html', '<div class="cfw-alert cfw-alert-error"><div class="message">' . wpautop(esc_html__('There are no shipping options available. Please ensure that your address has been entered correctly, or contact us if you need any help.', 'woocommerce')) . '</div></div>'),
)` |  | 

**Changelog**

Version | Description
------- | -----------
`9.0.0` | 

Source: ./sources/php/functions.php, line 3333

### `cfw_enable_side_cart_woocommerce_after_cart_totals_hook`

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`false` |  | 

Source: ./sources/php/functions.php, line 3363

### `cfw_get_cart_static_actions_data`

*Filters the cart actions data*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`array(
    /**
     * Fires at start of cart table
     *
     * @since 2.0.0
     */
    'cfw_cart_html_table_start' => cfw_get_action_output('cfw_cart_html_table_start'),
    /**
     * Fires at start of cart table
     *
     * @since 9.0.19
     */
    'cfw_checkout_cart_html_table_start' => cfw_get_action_output('cfw_checkout_cart_html_table_start'),
    /**
     * Fires at end of coupon module before closing </div> tag
     *
     * @since 2.0.0
     */
    'cfw_coupon_module_end' => cfw_get_action_output('cfw_coupon_module_end'),
    /**
     * Fires before shipping methods heading
     *
     * @since 2.0.0
     */
    'cfw_checkout_before_shipping_methods' => cfw_get_action_output('cfw_checkout_before_shipping_methods'),
    /**
     * Fires before shipping method heading
     *
     * @since 10.1.0
     */
    'cfw_before_shipping_method_heading' => cfw_get_action_output('cfw_before_shipping_method_heading'),
    /**
     * Fires after shipping method heading
     *
     * @since 2.0.0
     */
    'cfw_after_shipping_method_heading' => cfw_get_action_output('cfw_after_shipping_method_heading'),
    /**
     * Fires after shipping methods html
     *
     * @since 2.0.0
     */
    'cfw_checkout_after_shipping_methods' => cfw_get_action_output('cfw_checkout_after_shipping_methods'),
)` |  | 

**Changelog**

Version | Description
------- | -----------
`9.0.0` | 

Source: ./sources/php/functions.php, line 3370

### `cfw_review_pane_contact_value`

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`WC()->checkout()->get_value('billing_email')` |  | 

Source: ./sources/php/functions.php, line 3449

### `cfw_review_pane_show_shipping_method`

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`WC()->cart->needs_shipping()` |  | 

Source: ./sources/php/functions.php, line 3465

### `cfw_payment_method_address_review_shipping_method`

*Filters chosen shipping methods label*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$chosen_shipping_methods_labels` | `string` | The chosen shipping methods

**Changelog**

Version | Description
------- | -----------
`2.0.0` | 

Source: ./sources/php/functions.php, line 3638

### `cfw_login_form_account_exists_text`

*Filters the text for users who already have an account*

Default: It looks like you already have an account. Please enter your login details below.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`esc_html__('It looks like you already have an account. Please enter your login details below.', 'checkout-wc')` |  | 

**Changelog**

Version | Description
------- | -----------
`9.0.34` | 

Source: ./sources/php/functions.php, line 3763

### `cfw_login_form_account_does_not_exist_text`

*Filters the text before the login form for users who have shopped with us before*

Default: If you have shopped with us before, please enter your login details below.

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`esc_html__('If you have shopped with us before, please enter your login details below.', 'checkout-wc')` |  | 

**Changelog**

Version | Description
------- | -----------
`9.0.34` | 

Source: ./sources/php/functions.php, line 3776

### `cfw_login_modal_last_password_link`

*Filters the link to the Lost Password page.*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`sprintf('<a id="cfw_lost_password_trigger" href="#cfw_lost_password_form_wrap" class="cfw-small">%s</a>', esc_html__('Lost your password?', 'woocommerce'))` |  | 

**Changelog**

Version | Description
------- | -----------
`9.0.34` | 

Source: ./sources/php/functions.php, line 3834

### `cfw_login_form_continue_as_guest_button_text`

*Filters the text for the continue as guest button*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`esc_html__('Or continue as guest', 'checkout-wc')` |  | 

**Changelog**

Version | Description
------- | -----------
`9.0.34` | 

Source: ./sources/php/functions.php, line 3852

### `cfw_admin_pages`

*Filters the admin pages.*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$admin_pages` | `array` | The admin pages.

**Changelog**

Version | Description
------- | -----------
`10.1.0` | 

Source: ./sources/php/init.php, line 310

### `cfw_admin_preview_message`

*Filter the admin preview message.*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$admin_message` | `string` | The admin preview message.

**Changelog**

Version | Description
------- | -----------
`10.1.0` | 

Source: ./sources/php/init.php, line 833

### `cfw_ab_test_url_parameter`

*Filters the URL parameter for loading AB tests by URL*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`'cfw_ab_test'` |  | 

**Changelog**

Version | Description
------- | -----------
`8.2.8` | 

Source: ./sources/php/ab-testing-api.php, line 44

### `cfw_replace_form`

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`false` |  | 

Source: ./sources/php/template-hooks.php, line 42

### `cfw_replace_form`

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`false` |  | 

Source: ./sources/php/template-hooks.php, line 52

### `cfw_show_order_summary_link_text`

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`esc_html__('Show order summary', 'checkout-wc')` |  | 

Source: ./sources/php/template-functions.php, line 96

### `cfw_show_order_summary_hide_link_text`

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`esc_html__('Hide order summary', 'checkout-wc')` |  | 

Source: ./sources/php/template-functions.php, line 113

### `cfw_wc_print_notices`

*Filters WooCommerce notices before display*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`WC()->session->get('wc_notices', array())` |  | 

**Changelog**

Version | Description
------- | -----------
`8.2.19` | 

Source: ./sources/php/template-functions.php, line 187

### `cfw_customer_information_heading`

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`__('Information', 'checkout-wc')` |  | 

Source: ./sources/php/template-functions.php, line 307

### `cfw_order_review_tab_heading`

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`__('Order review', 'checkout-wc')` |  | 

Source: ./sources/php/template-functions.php, line 326

### `cfw_already_have_account_text`

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`__('Already have an account with us?', 'checkout-wc')` |  | 

Source: ./sources/php/template-functions.php, line 391

### `cfw_login_faster_text`

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`esc_html__('Log in.', 'checkout-wc')` |  | 

Source: ./sources/php/template-functions.php, line 403

### `cfw_hide_email_field_for_logged_in_users`

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`true` |  | 

Source: ./sources/php/template-functions.php, line 434

### `cfw_create_account_site_name`

*Filters create account checkbox site name*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`get_bloginfo('name')` |  | 

**Changelog**

Version | Description
------- | -----------
`2.0.0` | 

Source: ./sources/php/template-functions.php, line 509

### `cfw_create_account_checkbox_label`

*Filters create account checkbox label*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`/* translators: %s: site name */
esc_html__('Create %s shopping account.', 'checkout-wc')` |  | 

**Changelog**

Version | Description
------- | -----------
`2.0.0` | 

Source: ./sources/php/template-functions.php, line 518

### `cfw_account_creation_statement`

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`__('If you do not have an account, we will create one for you.', 'checkout-wc')` |  | 

Source: ./sources/php/template-functions.php, line 542

### `cfw_welcome_back_name`

*Filters welcome back statement customer name*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$welcome_back_name` | `string` | Welcome back statement customer name

**Changelog**

Version | Description
------- | -----------
`2.0.0` | 

Source: ./sources/php/template-functions.php, line 565

### `cfw_welcome_back_email`

*Filters welcome back statement customer email*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`wp_get_current_user()->user_email` |  | 

**Changelog**

Version | Description
------- | -----------
`2.0.0` | 

Source: ./sources/php/template-functions.php, line 573

### `cfw_welcome_back_text`

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$welcome_back_text` |  | 
`$welcome_back_name` |  | 
`$welcome_back_email` |  | 

Source: ./sources/php/template-functions.php, line 594

### `cfw_show_logout_link`

*Filters whether to show logout link*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`false` |  | 

**Changelog**

Version | Description
------- | -----------
`2.0.0` | 

Source: ./sources/php/template-functions.php, line 596

### `cfw_billing_shipping_address_heading`

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`esc_html__('Billing and Shipping address', 'checkout-wc')` |  | 

Source: ./sources/php/template-functions.php, line 656

### `cfw_billing_address_heading`

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`esc_html__('Billing address', 'checkout-wc')` |  | 

Source: ./sources/php/template-functions.php, line 666

### `cfw_shipping_address_heading`

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`esc_html__('Shipping address', 'checkout-wc')` |  | 

Source: ./sources/php/template-functions.php, line 676

### `cfw_show_shipping_tab`

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`WC()->cart && WC()->cart->needs_shipping() && SettingsManager::instance()->get_setting('skip_shipping_step') !== 'yes'` |  | 

Source: ./sources/php/template-functions.php, line 784

### `cfw_show_shipping_total`

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`WC()->cart->needs_shipping() && wc_shipping_enabled() && WC()->cart->get_cart_contents()` |  | 

Source: ./sources/php/template-functions.php, line 797

### `cfw_billing_address_heading`

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`esc_html__('Billing address', 'checkout-wc')` |  | 

Source: ./sources/php/template-functions.php, line 1040

### `cfw_billing_address_description`

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`esc_html__('Select the address that matches your card or payment method.', 'checkout-wc')` |  | 

Source: ./sources/php/template-functions.php, line 1061

### `cfw_show_review_order_before_cart_contents_hook`

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`false` |  | 

Source: ./sources/php/template-functions.php, line 1238

### `cfw_form_attributes`

*Filters the form attributes*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$attributes` | `array` | The form attributes
`$id` | `string` | The form ID

**Changelog**

Version | Description
------- | -----------
`6.1.7` | 

Source: ./sources/php/template-functions.php, line 1343

### `cfw_thank_you_heading_icon`

*Filters thank you page heading icon*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`'<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 50 50" fill="none" stroke-width="2" class="cfw-checkmark"><path class="checkmark__circle" d="M25 49c13.255 0 24-10.745 24-24S38.255 1 25 1 1 11.745 1 25s10.745 24 24 24z"></path><path class="checkmark__check" d="M15 24.51l7.307 7.308L35.125 19"></path></svg>'` |  | 
`$order` |  | 

**Changelog**

Version | Description
------- | -----------
`5.4.0` | 

Source: ./sources/php/template-functions.php, line 1383

### `cfw_thank_you_title`

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$title` |  | 

Source: ./sources/php/template-functions.php, line 1406

### `cfw_thank_you_subtitle`

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`$subtitle` |  | 

Source: ./sources/php/template-functions.php, line 1425

### `cfw_thank_you_status_icon_{$order_status}`

*Filters thank you status icon class*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`'fa fa-chevron-circle-right'` |  | 

**Changelog**

Version | Description
------- | -----------
`3.0.0` | 

Source: ./sources/php/template-functions.php, line 1486

### `cfw_order_updates_heading`

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`__('Order updates', 'checkout-wc')` |  | 
`$order` |  | 

Source: ./sources/php/template-functions.php, line 1558

### `cfw_order_updates_text`

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`__('You’ll get shipping and delivery updates by email.', 'checkout-wc')` |  | 
`$order` |  | 

Source: ./sources/php/template-functions.php, line 1569

### `cfw_billing_shipping_address_heading`

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`__('Billing and Shipping address', 'checkout-wc')` |  | 

Source: ./sources/php/template-functions.php, line 1678

### `cfw_shipping_address_heading`

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`esc_html__('Shipping address', 'checkout-wc')` |  | 

Source: ./sources/php/template-functions.php, line 1688

### `cfw_billing_address_heading`

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`esc_html__('Billing address', 'checkout-wc')` |  | 

Source: ./sources/php/template-functions.php, line 1704

### `cfw_thank_you_continue_shopping_text`

*Filters thank you page continue shopping button text*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`esc_html__('Continue shopping', 'woocommerce')` |  | 

**Changelog**

Version | Description
------- | -----------
`3.0.0` | 

Source: ./sources/php/template-functions.php, line 1737

### `cfw_get_checkout_tabs`

*Filters the checkout tabs*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`array('cfw-customer-info' => array(
    /**
     * Filters the breadcrumb customer info label.
     *
     * @since 7.0.0
     * @param string $label The breadcrumb customer info label.
     */
    'label' => apply_filters(esc_html__('Information', 'checkout-wc')),
    'classes' => array(),
    'priority' => 20,
    'enabled' => cfw_show_customer_information_tab(),
    'display_callback' => function () {
        /**
         * Outputs customer info tab content
         *
         * @since 2.0.0
         */
        do_action();
    },
), 'cfw-shipping-method' => array(
    /**
     * Filters the breadcrumb shipping label.
     *
     * @since 7.0.0
     * @param string $label The breadcrumb shipping label.
     */
    'label' => apply_filters(esc_html__('Shipping', 'checkout-wc')),
    'classes' => array(),
    'priority' => 30,
    'enabled' => true,
    'display_callback' => function () {
        /**
         * Outputs customer info tab content
         *
         * @since 2.0.0
         */
        do_action();
    },
), 'cfw-payment-method' => array(
    /**
     * Filters the breadcrumb payment label.
     *
     * @since 7.0.0
     * @param string $label The breadcrumb payment label.
     */
    'label' => apply_filters(WC()->cart->needs_payment() ? esc_html__('Payment', 'checkout-wc') : esc_html__('Review', 'checkout-wc')),
    'classes' => array('woocommerce-checkout-payment'),
    'priority' => 40,
    'enabled' => true,
    'display_callback' => function () {
        /**
         * Outputs customer info tab content
         *
         * @since 2.0.0
         */
        do_action();
    },
))` |  | 

**Changelog**

Version | Description
------- | -----------
`7.0.0` | 

Source: ./sources/php/template-functions.php, line 1943

### `cfw_breadcrumb_customer_info_label`

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`esc_html__('Information', 'checkout-wc')` |  | 

Source: ./sources/php/template-functions.php, line 1960

### `cfw_breadcrumb_shipping_label`

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`esc_html__('Shipping', 'checkout-wc')` |  | 

Source: ./sources/php/template-functions.php, line 1981

### `cfw_breadcrumb_payment_label`

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`WC()->cart->needs_payment() ? esc_html__('Payment', 'checkout-wc') : esc_html__('Review', 'checkout-wc')` |  | 

Source: ./sources/php/template-functions.php, line 2001

### `cfw_empty_side_cart_heading`

*Fires before the empty cart message is output.*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`__('Your Cart is Empty', 'checkout-wc')` |  | 

**Changelog**

Version | Description
------- | -----------
`6.2.0` | 

Source: ./sources/php/template-functions.php, line 2067

### `cfw_replace_form`

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`false` |  | 

Source: ./templates/futurist/content.php, line 32

### `cfw_replace_form`

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`false` |  | 

Source: ./templates/copify/content.php, line 36

### `cfw_replace_form`

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`false` |  | 

Source: ./templates/default/content.php, line 32

### `cfw_replace_form`

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`false` |  | 

Source: ./templates/glass/content.php, line 35

### `cfw_groove_cart_summary_classes`

*Filters the classes for the cart summary*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`array('col-lg-5')` |  | 

**Changelog**

Version | Description
------- | -----------
`8.0.0` | 

Source: ./templates/groove/thank-you.php, line 73

### `cfw_replace_form`

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`false` |  | 

Source: ./templates/groove/content.php, line 36

### `cfw_groove_cart_summary_classes`

*Filters the classes for the cart summary*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`array('col-lg-5')` |  | 

**Changelog**

Version | Description
------- | -----------
`8.0.0` | 

Source: ./templates/groove/content.php, line 89

### `cfw_groove_cart_summary_classes`

*Filters the classes for the cart summary*

**Arguments**

Argument | Type | Description
-------- | ---- | -----------
`array('col-lg-5')` |  | 

**Changelog**

Version | Description
------- | -----------
`8.0.0` | 

Source: ./templates/groove/order-pay.php, line 61


<p align="center"><a href="https://github.com/pronamic/wp-documentor"><img src="https://cdn.jsdelivr.net/gh/pronamic/wp-documentor@main/logos/pronamic-wp-documentor.svgo-min.svg" alt="Pronamic WordPress Documentor" width="32" height="32"></a><br><em>Generated by <a href="https://github.com/pronamic/wp-documentor">Pronamic WordPress Documentor</a> <code>1.2.0</code></em><p>

