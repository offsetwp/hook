<?php
/**
 * WPThePasswordFormAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters the HTML output for the protected post password form.
 *
 * @since 2.7.0
 * @since 5.8.0 Added the `$post` parameter.
 * @since 6.8.0 Added the `$invalid_password` parameter.
 */
abstract class WPThePasswordFormAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'the_password_form';

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
	 * @param string $output The password form HTML output.
	 * @param \WP_Post $post Post object.
	 * @param string $invalid_password The invalid password message.
	 */
	abstract public function execute( $output, $post, $invalid_password );
}
