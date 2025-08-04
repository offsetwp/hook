<?php
/**
 * WPActivateTinymceForMediaDescriptionAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters the TinyMCE argument for the media description field on the attachment details screen.
 *
 * @since 6.6.0
 */
abstract class WPActivateTinymceForMediaDescriptionAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'activate_tinymce_for_media_description';

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
	 * @param bool $tinymce Whether to activate TinyMCE in media description field. Default false.
	 */
	abstract public function execute( $tinymce );
}
