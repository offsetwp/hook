<?php
/**
 * WPAjaxCropImagePreSaveAddAction
 *
 * @package Offsetwp\Hook\WordPress\Action
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Action;

/**
 * Fires before a cropped image is saved.
 *
 * @since 4.3.0
 */
abstract class WPAjaxCropImagePreSaveAddAction extends \Offsetwp\Hook\Support\AddAction {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'wp_ajax_crop_image_pre_save';

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
	 * @param string $context The Customizer control requesting the cropped image.
	 * @param int $attachment_id The attachment ID of the original image.
	 * @param string $cropped Path to the cropped image file.
	 */
	abstract public function execute( $context, $attachment_id, $cropped );
}
