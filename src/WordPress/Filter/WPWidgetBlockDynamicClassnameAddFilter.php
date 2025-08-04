<?php
/**
 * WPWidgetBlockDynamicClassnameAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * The classname used in the block widget's container HTML.
 *
 * @since 5.8.0
 */
abstract class WPWidgetBlockDynamicClassnameAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'widget_block_dynamic_classname';

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
	 * @param string $classname The classname to be used in the block widget's container HTML, e.g. 'widget_block widget_text'.
	 * @param string $block_name The name of the block contained by the block widget, e.g. 'core/paragraph'.
	 */
	abstract public function execute( $classname, $block_name );
}
