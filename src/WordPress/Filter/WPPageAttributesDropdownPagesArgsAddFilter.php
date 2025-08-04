<?php
/**
 * WPPageAttributesDropdownPagesArgsAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters the arguments used to generate a Pages drop-down element.
 *
 * @since 3.3.0
 *
 * @see wp_dropdown_pages()
 */
abstract class WPPageAttributesDropdownPagesArgsAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'page_attributes_dropdown_pages_args';

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
	public int $hook_accepted_args = 2;


	/**
	 * The hook execution method
	 *
	 * @param array $dropdown_args Array of arguments used to generate the pages drop-down.
	 * @param \WP_Post $post The current post.
	 */
	abstract public function execute( $dropdown_args, $post );
}
