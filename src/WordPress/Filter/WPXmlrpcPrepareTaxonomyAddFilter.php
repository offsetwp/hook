<?php
/**
 * WPXmlrpcPrepareTaxonomyAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters XML-RPC-prepared data for the given taxonomy.
 *
 * @since 3.4.0
 */
abstract class WPXmlrpcPrepareTaxonomyAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'xmlrpc_prepare_taxonomy';

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
	 * @param array $_taxonomy An array of taxonomy data.
	 * @param \WP_Taxonomy $taxonomy Taxonomy object.
	 * @param array $fields The subset of taxonomy fields to return.
	 */
	abstract public function execute( $_taxonomy, $taxonomy, $fields );
}
