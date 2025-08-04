<?php
/**
 * WPIsProtectedMetaAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters whether a meta key is considered protected.
 *
 * @since 3.2.0
 */
abstract class WPIsProtectedMetaAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'is_protected_meta';

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
	 * @param bool $protected Whether the key is considered protected.
	 * @param string $meta_key Metadata key.
	 * @param string $meta_type Type of object metadata is for. Accepts 'post', 'comment', 'term', 'user', or any other object type with an associated meta table.
	 */
	abstract public function execute( $protected, $meta_key, $meta_type );
}
