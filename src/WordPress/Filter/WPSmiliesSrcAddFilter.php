<?php
/**
 * WPSmiliesSrcAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters the Smiley image URL before it's used in the image element.
 *
 * @since 2.9.0
 */
abstract class WPSmiliesSrcAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'smilies_src';

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
	 * @param string $smiley_url URL for the smiley image.
	 * @param string $img Filename for the smiley image.
	 * @param string $site_url Site URL, as returned by site_url().
	 */
	abstract public function execute( $smiley_url, $img, $site_url );
}
