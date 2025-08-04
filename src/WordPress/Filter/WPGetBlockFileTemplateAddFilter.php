<?php
/**
 * WPGetBlockFileTemplateAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters the block template object after it has been ( potentially ) fetched from the theme file.
 *
 * @since 5.9.0
 */
abstract class WPGetBlockFileTemplateAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'get_block_file_template';

	/**
	 * The callback to be run when the action is called.
	 *
	 * @var string
	 */
	public int $hook_priority = 10;

	/**
	 * Optional. Used to specify the order in which the functions associated with a particular action are executed. Lower numbers correspond with earlier execution, and functions with the same priority are executed in the order in which they were added to the action. Default 10.
	 *
	 * @var string
	 */
	public int $hook_accepted_args = 3;


	/**
	 * The hook execution method
	 *
	 * @param \WP_Block_Template|null $block_template The found block template, or null if there is none.
	 * @param string $id Template unique identifier ( example: 'theme_slug//template_slug' ).
	 * @param string $template_type Template type. Either 'wp_template' or 'wp_template_part'.
	 */
	abstract public function execute( $block_template, $id, $template_type );
}
