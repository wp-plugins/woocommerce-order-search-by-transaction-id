# WooCommerce Order Search by Transaction ID

[![Built with Grunt](https://cdn.gruntjs.com/builtwith.png)](http://gruntjs.com/)

WooCommerce Order Search by Transaction ID allows administrators and shop managers to search orders by Transaction ID in WooCommerce.

Get your transaction ID, then go to WooCommerce > Orders and type it in the search field on the top right. Hit Enter or click Search and let the magic happen.

## Installation

### Manual installation

The manual installation method involves downloading this plugin and uploading it to your webserver via your favourite FTP application. The WordPress codex contains [instructions on how to do this here](http://codex.wordpress.org/Managing_Plugins#Manual_Plugin_Installation).

1. Upload `woocommerce-order-search-transaction` to the `/wp-content/plugins/` directory
2. Activate the plugin through the 'Plugins' menu in WordPress

## Frequently Asked Questions

### What payment gateways does it support? ###

It has been tested with Stripe and PayPal Standard (the one included in WooCommerce core). It supports all the payment gateways which uses the meta `_transaction_id` to store the transaction ID.
If you do not know if your gateway does this, ask to its developer.

### Can I contribute?

Yes you can! Join in on our [GitHub repository](https://github.com/PinchOfCode/woocommerce-order-search-transaction) :)

## License

Copyright (C) 2015 Pinch Of Code. All rights reserved.

This program is free software; you can redistribute it and/or
modify it under the terms of the GNU General Public License
as published by the Free Software Foundation; either version 2
of the License, or (at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA  02110-1301, USA.
