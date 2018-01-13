<?php
/*
Plugin Name: Remove Storefront Header Search
Author: JointByte - Anthony Iacono
Version: 1.0
Text Domain: remove-storefront-header-search
*/

add_action('init', 'remove_storefront_header_search_init');

function remove_storefront_header_search_init() {
	remove_action('storefront_header', 'storefront_product_search', 40);
}