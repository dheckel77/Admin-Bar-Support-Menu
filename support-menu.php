<?php

function add_toolbar_items($wp_admin_bar) {
	$wp_admin_bar->add_node( array(
		'id'		=> 'supportlink',
		'title' => 'Contact Support',
		'href' => 'mailto:support@yourdomain.com',
	) );
	$wp_admin_bar->add_node( array(
		'parent' => 'supportlink',
		'id'		=> 'seolink',
		'title' => 'Need SEO Support',
		'href' => 'https://yourdomain.com',
		'meta'   => array( 'target' => '_blank' ),
	) );
	$wp_admin_bar->add_node( array(
		'id' => 'supportmenu',
		'title' => 'WP Support',
		'href' => 'https://yourdomain.com',
		'meta' => array( 'target' => '_blank'),
	) );
}

add_action('admin_bar_menu', 'add_toolbar_items', 999);
