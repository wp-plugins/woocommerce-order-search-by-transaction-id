=== WooCommerce Order Search by Transaction ID ===
Contributors: pinchofcode, nicolamustone
Tags: ecommerce, e-commerce, commerce, wordpress ecommerce, store, sales, sell, shop, shopping, cart, checkout, transaction, paypal, stripe
Donate link: https://www.paypal.com/cgi-bin/webscr?cmd=_xclick&business=paypal@pinchofcode.com&item_name=Donation+for+Pinch+Of+Code
Requires at least: 4.0
Tested up to: 4.1.1
Stable tag: 1.0.0
License: GPLv2
License URI: http://www.gnu.org/licenses/gpl-2.0.html

WooCommerce Order Search by Transaction ID allows administrators and shop managers to search orders by Transaction ID in WooCommerce.

== Description ==

WooCommerce Order Search by Transaction ID allows administrators and shop managers to search orders by Transaction ID in WooCommerce.

Get your transaction ID, then go to WooCommerce > Orders and type it in the search field on the top right. Hit Enter or click Search and let the magic happen.

== Installation ==

= Manual installation =

The manual installation method involves downloading this plugin and uploading it to your webserver via your favourite FTP application. The WordPress codex contains [instructions on how to do this here](http://codex.wordpress.org/Managing_Plugins#Manual_Plugin_Installation).

1. Upload `woocommerce-order-search-transaction` to the `/wp-content/plugins/` directory
2. Activate the plugin through the 'Plugins' menu in WordPress

== Frequently Asked Questions ==

= What payment gateways does it support?  =

It has been tested with Stripe and PayPal Standard (the one included in WooCommerce core). It supports all the payment gateways which uses the meta `_transaction_id` to store the transaction ID.
If you do not know if your gateway does this, ask to its developer.

= Can I contribute? =

Yes you can! Join in on our [GitHub repository](https://github.com/PinchOfCode/woocommerce-order-search-transaction) :)

== Changelog ==

= 1.0.0 - 16/03/2015 =

* First release
