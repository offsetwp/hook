<?php
/**
 * WPGetArchivesLinkAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters the archive link content.
 *
 * @since 2.6.0
 * @since 4.5.0 Added the `$url`, `$text`, `$format`, `$before`, and `$after` parameters.
 * @since 5.2.0 Added the `$selected` parameter.
 */
abstract class WPGetArchivesLinkAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'get_archives_link';

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
	public int $hook_accepted_args = 7;


	/**
	 * The hook execution method
	 *
	 * @param string $link_html The archive HTML link content.
	 * @param string $url URL to archive.
	 * @param string $text Archive text description.
	 * @param string $format Link format. Can be 'link', 'option', 'html', or custom.
	 * @param string $before Content to prepend to the description.
	 * @param string $after Content to append to the description.
	 * @param bool $selected True if the current page is the selected archive.
	 */
	abstract public function execute( $link_html, $url, $text, $format, $before, $after, $selected );
}
