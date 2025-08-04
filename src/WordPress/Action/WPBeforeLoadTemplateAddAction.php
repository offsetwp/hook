<?php
/**
 * WPBeforeLoadTemplateAddAction
 *
 * @package Offsetwp\Hook\WordPress\Action
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Action;

/**
 * Fires before a template file is loaded.
 *
 * @since 6.1.0
 */
abstract class WPBeforeLoadTemplateAddAction extends \Offsetwp\Hook\Support\AddAction {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'wp_before_load_template';

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
	 * @param string $_template_file The full path to the template file.
	 * @param bool $load_once Whether to require_once or require.
	 * @param array $args Additional arguments passed to the template.
	 */
	abstract public function execute( $_template_file, $load_once, $args );
}
