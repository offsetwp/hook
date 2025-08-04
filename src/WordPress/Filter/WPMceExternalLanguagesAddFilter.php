<?php
/**
 * WPMceExternalLanguagesAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters the translations loaded for external TinyMCE 3.x plugins.
 *
 * @since 2.5.0
 * @since 5.3.0 The `$editor_id` parameter was added.
 */
abstract class WPMceExternalLanguagesAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'mce_external_languages';

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
	 * @param array $translations Translations for external TinyMCE plugins.
	 * @param string $editor_id Unique editor identifier, e.g. 'content'.
	 */
	abstract public function execute( $translations, $editor_id );
}
