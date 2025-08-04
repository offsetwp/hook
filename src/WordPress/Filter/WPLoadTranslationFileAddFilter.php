<?php
/**
 * WPLoadTranslationFileAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters the file path for loading translations for the given text domain.
 *
 * @since 6.5.0
 * @since 6.6.0 Added the `$locale` parameter.
 */
abstract class WPLoadTranslationFileAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'load_translation_file';

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
	 * @param string $file Path to the translation file to load.
	 * @param string $domain The text domain.
	 * @param string $locale The locale.
	 */
	abstract public function execute( $file, $domain, $locale );
}
