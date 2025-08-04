<?php
/**
 * WPGettextWithContextAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters text with its translation based on context information.
 *
 * @since 2.8.0
 */
abstract class WPGettextWithContextAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'gettext_with_context';

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
	 * @param string $translation Translated text.
	 * @param string $text Text to translate.
	 * @param string $context Context information for the translators.
	 * @param string $domain Text domain. Unique identifier for retrieving translated strings.
	 */
	abstract public function execute( $translation, $text, $context, $domain );
}
