<?php
/**
 * WPAnonymizeCommentAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters whether to anonymize the comment.
 *
 * @since 4.9.6
 */
abstract class WPAnonymizeCommentAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'wp_anonymize_comment';

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
	 * @param bool|string $anon_message Whether to apply the comment anonymization ( bool ) or a custom message ( string ). Default true.
	 * @param \WP_Comment $comment WP_Comment object.
	 * @param array $anonymized_comment Anonymized comment data.
	 */
	abstract public function execute( $anon_message, $comment, $anonymized_comment );
}
