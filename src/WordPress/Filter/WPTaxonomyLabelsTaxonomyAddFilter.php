<?php
/**
 * WPTaxonomyLabelsTaxonomyAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters the labels of a specific taxonomy.
 *
 * @since 4.4.0
 *
 * @see get_taxonomy_labels() for the full list of taxonomy labels.
 */
abstract class WPTaxonomyLabelsTaxonomyAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'taxonomy_labels_{$taxonomy}';

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
	public int $hook_accepted_args = 1;


	/**
	 * The hook execution method
	 *
	 * @param object $labels Object with labels for the taxonomy as member variables.
	 */
	abstract public function execute( $labels );
}
