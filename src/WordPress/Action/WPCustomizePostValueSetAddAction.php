<?php
/**
 * WPCustomizePostValueSetAddAction
 *
 * @package Offsetwp\Hook\WordPress\Action
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Action;

/**
 * Announces when any setting's unsanitized post value has been set.
 *
 * @since 4.4.0
 */
abstract class WPCustomizePostValueSetAddAction extends \Offsetwp\Hook\Support\AddAction {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'customize_post_value_set';

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
	 * @param string $setting_id Setting ID.
	 * @param mixed $value Unsanitized setting post value.
	 * @param \WP_Customize_Manager $manager WP_Customize_Manager instance.
	 */
	abstract public function execute( $setting_id, $value, $manager );
}
