<?php
/**
 * WPGetAvatarAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters the HTML for a user's avatar.
 *
 * @since 2.5.0
 * @since 4.2.0 Added the `$args` parameter.
 */
abstract class WPGetAvatarAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'get_avatar';

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
	public int $hook_accepted_args = 6;


	/**
	 * The hook execution method
	 *
	 * @param string $avatar HTML for the user's avatar.
	 * @param mixed $id_or_email The avatar to retrieve. Accepts a user ID, Gravatar MD5 hash, user email, WP_User object, WP_Post object, or WP_Comment object.
	 * @param int $size Height and width of the avatar in pixels.
	 * @param string $default_value URL for the default image or a default type. Accepts: - '404' ( return a 404 instead of a default image ) - 'retro' ( a 8-bit arcade-style pixelated face ) - 'robohash' ( a robot ) - 'monsterid' ( a monster ) - 'wavatar' ( a cartoon face ) - 'identicon' ( the "quilt", a geometric pattern ) - 'mystery', 'mm', or 'mysteryman' ( The Oyster Man ) - 'blank' ( transparent GIF ) - 'gravatar_default' ( the Gravatar logo ).
	 * @param string $alt Alternative text to use in the avatar image tag.
	 * @param array $args Arguments passed to get_avatar_data(), after processing.
	 */
	abstract public function execute( $avatar, $id_or_email, $size, $default_value, $alt, $args );
}
