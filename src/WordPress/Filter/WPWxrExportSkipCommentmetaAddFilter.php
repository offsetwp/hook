<?php
/**
 * WPWxrExportSkipCommentmetaAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters whether to selectively skip comment meta used for WXR exports.
 *
 * @since 4.0.0
 */
abstract class WPWxrExportSkipCommentmetaAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'wxr_export_skip_commentmeta';

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
	 * @param bool $skip Whether to skip the current comment meta. Default false.
	 * @param string $meta_key Current meta key.
	 * @param object $meta Current meta object.
	 */
	abstract public function execute( $skip, $meta_key, $meta );
}
