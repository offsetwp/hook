<?php
/**
 * AddShortCode
 *
 * @package Offsetwp\Hook
 */

declare(strict_types=1);

namespace Offsetwp\Hook\Support;

/**
 * Adds a new shortcode.
 *
 * Care should be taken through prefixing or other means to ensure that the
 * shortcode tag being added is unique and will not conflict with other,
 * already-added shortcode tags. In the event of a duplicated tag, the tag
 * loaded last will take precedence.
 *
 * @package Offsetwp\Hook
 */
abstract class AddShortCode {
	/**
	 * Shortcode tag to be searched in post content.
	 *
	 * @var string
	 */
	public string $hook_name = '';

	/**
	 * The callback function to run when the shortcode is found. Every shortcode callback is passed three parameters by default, including an array of attributes (`$atts`), the shortcode content or null if not set (`$content`), and finally the shortcode tag itself (`$shortcode_tag`), in that order.
	 *
	 * @var string
	 */
	public string $hook_callback = 'execute';

	/**
	 * Adds a new shortcode
	 *
	 * @return void
	 * @throws \ErrorException If the hook name is empty or if the callback method is invalid.
	 */
	public function __construct() {
		if ( ! $this->hook_name ) {
			throw new \ErrorException( 'The hook has no name' );
		}
		if ( ! $this->hook_callback || ! method_exists( $this, $this->hook_callback ) ) {
			throw new \ErrorException( \esc_html( "Invalid or undefined callback method '{$this->hook_callback}'" ) );
		}
		\add_shortcode( $this->hook_name, array( $this, $this->hook_callback ) );
	}
}
