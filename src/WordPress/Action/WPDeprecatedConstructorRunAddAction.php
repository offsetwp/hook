<?php
/**
 * WPDeprecatedConstructorRunAddAction
 *
 * @package Offsetwp\Hook\WordPress\Action
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Action;

/**
 * Fires when a deprecated constructor is called.
 *
 * @since 4.3.0
 * @since 4.5.0 Added the `$parent_class` parameter.
 */
abstract class WPDeprecatedConstructorRunAddAction extends \Offsetwp\Hook\Support\AddAction {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'deprecated_constructor_run';

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
	 * @param string $class_name The class containing the deprecated constructor.
	 * @param string $version The version of WordPress that deprecated the function.
	 * @param string $parent_class The parent class calling the deprecated constructor.
	 */
	abstract public function execute( $class_name, $version, $parent_class );
}
