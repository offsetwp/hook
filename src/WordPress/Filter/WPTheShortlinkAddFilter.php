<?php
/**
 * WPTheShortlinkAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters the short link anchor tag for a post.
 *
 * @since 3.0.0
 */
abstract class WPTheShortlinkAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'the_shortlink';

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
	 * @param string $link Shortlink anchor tag.
	 * @param string $shortlink Shortlink URL.
	 * @param string $text Shortlink's text.
	 * @param string $title Shortlink's title attribute. Unused.
	 */
	abstract public function execute( $link, $shortlink, $text, $title );
}
