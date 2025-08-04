<?php
/**
 * WPPreLoadScriptTranslationsAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Pre-filters script translations for the given file, script handle and text domain.
 *
 * @since 5.0.2
 */
abstract class WPPreLoadScriptTranslationsAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'pre_load_script_translations';

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
	public int $hook_accepted_args = 4;


	/**
	 * The hook execution method
	 *
	 * @param string|false|null $translations JSON-encoded translation data. Default null.
	 * @param string|false $file Path to the translation file to load. False if there isn't one.
	 * @param string $handle Name of the script to register a translation domain to.
	 * @param string $domain The text domain.
	 */
	abstract public function execute( $translations, $file, $handle, $domain );
}
