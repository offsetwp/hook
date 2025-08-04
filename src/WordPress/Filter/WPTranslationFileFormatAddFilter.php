<?php
/**
 * WPTranslationFileFormatAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters the preferred file format for translation files.
 *
 * @since 6.5.0
 */
abstract class WPTranslationFileFormatAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'translation_file_format';

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
	 * @param string $preferred_format Preferred file format. Possible values: 'php', 'mo'. Default: 'php'.
	 * @param string $domain The text domain.
	 */
	abstract public function execute( $preferred_format, $domain );
}
