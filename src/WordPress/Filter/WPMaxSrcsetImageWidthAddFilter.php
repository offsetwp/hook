<?php
/**
 * WPMaxSrcsetImageWidthAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters the maximum image width to be included in a 'srcset' attribute.
 *
 * @since 4.4.0
 */
abstract class WPMaxSrcsetImageWidthAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'max_srcset_image_width';

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
	 * @param int $max_width The maximum image width to be included in the 'srcset'. Default '2048'.
	 * @param array $size_array An array of requested width and height values.
	 */
	abstract public function execute( $max_width, $size_array );
}
