<?php
/**
 * WPShouldLoadSeparateCoreBlockAssetsAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters whether block styles should be loaded separately.
 *
 * @since 5.8.0
 */
abstract class WPShouldLoadSeparateCoreBlockAssetsAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'should_load_separate_core_block_assets';

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
	 * @param bool $load_separate_assets Whether separate assets will be loaded. Default false ( all block assets are loaded, even when not used ).
	 */
	abstract public function execute( $load_separate_assets );
}
