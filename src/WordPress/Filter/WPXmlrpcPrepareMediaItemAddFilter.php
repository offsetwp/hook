<?php
/**
 * WPXmlrpcPrepareMediaItemAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters XML-RPC-prepared data for the given media item.
 *
 * @since 3.4.0
 */
abstract class WPXmlrpcPrepareMediaItemAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'xmlrpc_prepare_media_item';

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
	 * @param array $_media_item An array of media item data.
	 * @param \WP_Post $media_item Media item object.
	 * @param string $thumbnail_size Image size.
	 */
	abstract public function execute( $_media_item, $media_item, $thumbnail_size );
}
