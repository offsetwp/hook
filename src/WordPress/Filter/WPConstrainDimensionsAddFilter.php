<?php
/**
 * WPConstrainDimensionsAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters dimensions to constrain down-sampled images to.
 *
 * @since 4.1.0
 */
abstract class WPConstrainDimensionsAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'wp_constrain_dimensions';

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
	public int $hook_accepted_args = 5;


	/**
	 * The hook execution method
	 *
	 * @param array $dimensions An array of width and height values.
	 * @param int $current_width The current width of the image.
	 * @param int $current_height The current height of the image.
	 * @param int $max_width The maximum width permitted.
	 * @param int $max_height The maximum height permitted.
	 */
	abstract public function execute( $dimensions, $current_width, $current_height, $max_width, $max_height );
}
