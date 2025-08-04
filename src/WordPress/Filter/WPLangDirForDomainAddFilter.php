<?php
/**
 * WPLangDirForDomainAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters the determined languages directory path for a specific domain and locale.
 *
 * @since 6.6.0
 */
abstract class WPLangDirForDomainAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'lang_dir_for_domain';

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
	 * @param string|false $path Languages directory path for the given domain and locale.
	 * @param string $domain Text domain.
	 * @param string $locale Locale.
	 */
	abstract public function execute( $path, $domain, $locale );
}
