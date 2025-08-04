<?php
/**
 * WPUniquePostSlugIsBadAttachmentSlugAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters whether the post slug would make a bad attachment slug.
 *
 * @since 3.1.0
 */
abstract class WPUniquePostSlugIsBadAttachmentSlugAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'wp_unique_post_slug_is_bad_attachment_slug';

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
	 * @param bool $bad_slug Whether the slug would be bad as an attachment slug.
	 * @param string $slug The post slug.
	 */
	abstract public function execute( $bad_slug, $slug );
}
