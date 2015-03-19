<?php
/**
 * Plugin Name: WooCommerce Order Search by Transaction ID
 * Version: 1.0.0
 * Plugin URI: http://nicolamustone.it/
 * Description: Allows to search orders by Transaction ID in WooCommerce
 * Author: Nicola Mustone
 * Author URI: http://nicolamustone.it/
 * Requires at least: 3.8
 * Tested up to: 4.1.1
 *
 * Text Domain: wc-ost
 * Domain Path: /i18n/
 *
 * @author Nicola Mustone
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

// Include Woo functions
require_once 'woo-includes/woo-functions.php';

// Check if WooCommerce is active
if ( ! is_woocommerce_active() ) {
    add_action( 'admin_notices', 'wc_customer_messages_wc_inactive' );
    function wc_customer_messages_wc_inactive() {
        echo '<div class="error"><p>' . sprintf( __( 'WooCommerce Order Search by Transaction ID requires WooCommerce in order to work properly. <a href="%s" target="_blank">Please install WooCommerce</a>.', 'wc-ost' ), 'http://wordpress.org/plugins/woocommerce/' ) . '</p></div>';
    }

    return;
}

class WC_OST {
    /**
     * __construct
     */
    public function __construct() {
        // Set up localization
        $this->load_plugin_textdomain();

        add_filter( 'woocommerce_shop_order_search_fields', array( $this, 'filter_fields' ) );
    }

    /**
     * Load Localisation files.
     *
     * Note: the first-loaded translation file overrides any following ones if the same translation is present.
     *
     * Locales are found in:
     *        WP_LANG_DIR/woocommerce-order-search-transaction/wc-ost-LOCALE.mo
     *        woocommerce-order-search-transaction/i18n/wc-ost-LOCALE.mo (which if not found falls back to:)
     *        WP_LANG_DIR/plugins/wc-ost-LOCALE.mo
     */
    public function load_plugin_textdomain() {
        $locale = apply_filters( 'plugin_locale', get_locale(), 'wc-ost' );

        load_textdomain( 'wc-ost', WP_LANG_DIR . '/woocommerce-order-search-transaction/wc-ost-' . $locale . '.mo' );
        load_textdomain( 'wc-ost', WP_LANG_DIR . '/plugins/wc-order-search-transaction-' . $locale . '.mo' );

        load_plugin_textdomain( 'wc-ost', false, plugin_basename( dirname( __FILE__ ) ) . "/i18n" );
    }

    /**
     * Add the meta _transaction_id in the search fields.
     *
     * @param array $fields
     * @return array
     */
    public function filter_fields( $fields ) {
        if ( ! in_array( '_transaction_id', $fields ) ) {
            array_push( $fields, '_transaction_id' );
        }

        return $fields;
    }
}

new WC_OST();
