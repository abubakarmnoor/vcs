<?php

/**
 * enterprisio: Block Patterns
 *
 * @since enterprisio 1.0.0
 */

/**
 * Registers pattern categories for enterprisio
 *
 * @since enterprisio 1.0.0
 *
 * @return void
 */
function enterprisio_register_pattern_category()
{
	$block_pattern_categories = array(
		'enterprisio' => array('label' => __('Enterprisio Patterns', 'enterprisio')),
	);

	$block_pattern_categories = apply_filters('enterprisio_block_pattern_categories', $block_pattern_categories);

	foreach ($block_pattern_categories as $name => $properties) {
		if (!WP_Block_Pattern_Categories_Registry::get_instance()->is_registered($name)) {
			register_block_pattern_category($name, $properties);
		}
	}
}
add_action('init', 'enterprisio_register_pattern_category', 9);
