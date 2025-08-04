<?php
/**
 * WPGetBlockTemplatesAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters the array of queried block templates array after they've been fetched.
 *
 * @since 5.9.0
 */
abstract class WPGetBlockTemplatesAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'get_block_templates';

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
	 * @param \WP_Block_Template[] $query_result Array of found block templates.
	 * @param array $query Arguments to retrieve templates. All arguments are optional.
	 * @param string $template_type wp_template or wp_template_part.
	 */
	abstract public function execute( $query_result, $query, $template_type );
}
