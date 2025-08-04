<?php
/**
 * WPOmitLoadingAttrThresholdAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters the threshold for how many of the first content media elements to not lazy-load.
 *
 * @since 5.9.0
 * @since 6.3.0 The default threshold was changed from 1 to 3.
 */
abstract class WPOmitLoadingAttrThresholdAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'wp_omit_loading_attr_threshold';

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
	public int $hook_accepted_args = 1;


	/**
	 * The hook execution method
	 *
	 * @param int $omit_threshold The number of media elements where the <code>loading</code> attribute will not be added. Default 3.
	 */
	abstract public function execute( $omit_threshold );
}
