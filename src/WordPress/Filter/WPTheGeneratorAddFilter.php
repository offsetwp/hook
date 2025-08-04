<?php
/**
 * WPTheGeneratorAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters the output of the XHTML generator tag, for display.
 *
 * @since 2.5.0
 */
abstract class WPTheGeneratorAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'the_generator';

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
	 * @param string $generator_type The generator output.
	 * @param string $type The type of generator to output. Accepts 'html', 'xhtml', 'atom', 'rss2', 'rdf', 'comment', 'export'.
	 */
	abstract public function execute( $generator_type, $type );
}
