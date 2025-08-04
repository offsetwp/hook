<?php
/**
 * WPGetTheGeneratorTypeAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters the HTML for the retrieved generator type.
 *
 * @since 2.5.0
 */
abstract class WPGetTheGeneratorTypeAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'get_the_generator_{$type}';

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
	 * @param string $gen The HTML markup output to wp_head().
	 * @param string $type The type of generator. Accepts 'html', 'xhtml', 'atom', 'rss2', 'rdf', 'comment', 'export'.
	 */
	abstract public function execute( $gen, $type );
}
