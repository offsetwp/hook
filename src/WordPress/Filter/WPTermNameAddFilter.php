<?php
/**
 * WPTermNameAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters display of the term name in the terms list table.
 *
 * @since 2.5.0
 *
 * @see WP_Terms_List_Table::column_name()
 */
abstract class WPTermNameAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'term_name';

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
	 * @param string $pad_tag_name The term name, padded if not top-level.
	 * @param \WP_Term $tag Term object.
	 */
	abstract public function execute( $pad_tag_name, $tag );
}
