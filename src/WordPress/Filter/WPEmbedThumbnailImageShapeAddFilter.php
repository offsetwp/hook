<?php
/**
 * WPEmbedThumbnailImageShapeAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters the thumbnail shape for use in the embed template.
 *
 * @since 4.4.0
 * @since 4.5.0 Added `$thumbnail_id` parameter.
 */
abstract class WPEmbedThumbnailImageShapeAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'embed_thumbnail_image_shape';

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
	 * @param string $shape Thumbnail image shape. Either 'rectangular' or 'square'.
	 * @param int $thumbnail_id Attachment ID.
	 */
	abstract public function execute( $shape, $thumbnail_id );
}
