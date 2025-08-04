<?php
/**
 * WPUploadSizeLimitAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters the maximum upload size allowed in php.ini.
 *
 * @since 2.5.0
 */
abstract class WPUploadSizeLimitAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'upload_size_limit';

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
	 * @param int $size Max upload size limit in bytes.
	 * @param int $u_bytes Maximum upload filesize in bytes.
	 * @param int $p_bytes Maximum size of POST data in bytes.
	 */
	abstract public function execute( $size, $u_bytes, $p_bytes );
}
