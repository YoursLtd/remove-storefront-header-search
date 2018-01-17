<?php
/*
Plugin Name: Remove Storefront Header Search
Plugin URI: https://github.com/YoursLtd/remove-storefront-header-search
Author: JointByte - Anthony Iacono
Author URI: http://yoursltd.com
Version: 1.0
Text Domain: remove-storefront-header-search
*/

add_action('init', 'remove_storefront_header_search_init');

function remove_storefront_header_search_init() {
	remove_action('storefront_header', 'storefront_product_search', 40);
}