<?php
/**
 * WPGetCustomLogoImageAttributesAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters the list of custom logo image attributes.
 *
 * @since 5.5.0
 */
abstract class WPGetCustomLogoImageAttributesAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'get_custom_logo_image_attributes';

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
	 * @param array $custom_logo_attr Custom logo image attributes.
	 * @param int $custom_logo_id Custom logo attachment ID.
	 * @param int $blog_id ID of the blog to get the custom logo for.
	 */
	abstract public function execute( $custom_logo_attr, $custom_logo_id, $blog_id );
}
