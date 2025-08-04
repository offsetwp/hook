<?php
/**
 * WPManageTaxonomiesForAttachmentColumnsAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters the taxonomy columns for attachments in the Media list table.
 *
 * @since 3.5.0
 */
abstract class WPManageTaxonomiesForAttachmentColumnsAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'manage_taxonomies_for_attachment_columns';

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
	 * @param string[] $taxonomies An array of registered taxonomy names to show for attachments.
	 * @param string $post_type The post type. Default 'attachment'.
	 */
	abstract public function execute( $taxonomies, $post_type );
}
