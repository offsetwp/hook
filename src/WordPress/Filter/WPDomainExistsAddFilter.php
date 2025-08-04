<?php
/**
 * WPDomainExistsAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters whether a site name is taken.
 *
 * @since 3.5.0
 */
abstract class WPDomainExistsAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'domain_exists';

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
	 * @param int|null $result The site ID if the site name exists, null otherwise.
	 * @param string $domain Domain to be checked.
	 * @param string $path Path to be checked.
	 * @param int $network_id Network ID. Only relevant on multi-network installations.
	 */
	abstract public function execute( $result, $domain, $path, $network_id );
}
