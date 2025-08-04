<?php
/**
 * WPBlockEditorNoJavascriptMessageAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters the message displayed in the block editor interface when JavaScript is not enabled in the browser.
 *
 * @since 5.0.3
 * @since 6.4.0 Added `$installed` parameter.
 */
abstract class WPBlockEditorNoJavascriptMessageAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'block_editor_no_javascript_message';

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
	 * @param string $message The message being displayed.
	 * @param \WP_Post $post The post being edited.
	 * @param bool $installed Whether the classic editor is installed.
	 */
	abstract public function execute( $message, $post, $installed );
}
