<?php
/**
 * WPGetEditTermLinkAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters the edit link for a term.
 *
 * @since 3.1.0
 */
abstract class WPGetEditTermLinkAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'get_edit_term_link';

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
	 * @param string $location The edit link.
	 * @param int $term_id Term ID.
	 * @param string $taxonomy Taxonomy name.
	 * @param string $object_type The object type.
	 */
	abstract public function execute( $location, $term_id, $taxonomy, $object_type );
}
