<?php
/**
 * WPQuickEditShowTaxonomyAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters whether the current taxonomy should be shown in the Quick Edit panel.
 *
 * @since 4.2.0
 */
abstract class WPQuickEditShowTaxonomyAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'quick_edit_show_taxonomy';

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
	 * @param bool $show_in_quick_edit Whether to show the current taxonomy in Quick Edit.
	 * @param string $taxonomy_name Taxonomy name.
	 * @param string $post_type Post type of current Quick Edit post.
	 */
	abstract public function execute( $show_in_quick_edit, $taxonomy_name, $post_type );
}
