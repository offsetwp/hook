<?php
/**
 * WPCustomizeSaveResponseAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters response data for a successful customize_save Ajax request.
 *
 * @since 4.2.0
 */
abstract class WPCustomizeSaveResponseAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'customize_save_response';

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
	 * @param array $response Additional information passed back to the 'saved' event on <code>wp.customize</code>.
	 * @param \WP_Customize_Manager $manager WP_Customize_Manager instance.
	 */
	abstract public function execute( $response, $manager );
}
