<?php
/**
 * WPNgettextWithContextAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters the singular or plural form of a string with gettext context.
 *
 * @since 2.8.0
 */
abstract class WPNgettextWithContextAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'ngettext_with_context';

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
	public int $hook_accepted_args = 6;


	/**
	 * The hook execution method
	 *
	 * @param string $translation Translated text.
	 * @param string $single The text to be used if the number is singular.
	 * @param string $plural The text to be used if the number is plural.
	 * @param int $number The number to compare against to use either the singular or plural form.
	 * @param string $context Context information for the translators.
	 * @param string $domain Text domain. Unique identifier for retrieving translated strings.
	 */
	abstract public function execute( $translation, $single, $plural, $number, $context, $domain );
}
