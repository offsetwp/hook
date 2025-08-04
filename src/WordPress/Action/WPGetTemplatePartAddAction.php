<?php
/**
 * WPGetTemplatePartAddAction
 *
 * @package Offsetwp\Hook\WordPress\Action
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Action;

/**
 * Fires before an attempt is made to locate and load a template part.
 *
 * @since 5.2.0
 * @since 5.5.0 The `$args` parameter was added.
 */
abstract class WPGetTemplatePartAddAction extends \Offsetwp\Hook\Support\AddAction {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'get_template_part';

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
	public int $hook_accepted_args = 4;


	/**
	 * The hook execution method
	 *
	 * @param string $slug The slug name for the generic template.
	 * @param string $name The name of the specialized template or an empty string if there is none.
	 * @param string[] $templates Array of template files to search for, in order.
	 * @param array $args Additional arguments passed to the template.
	 */
	abstract public function execute( $slug, $name, $templates, $args );
}
