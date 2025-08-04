<?php
/**
 * WPPrivacyPersonalDataExportFileCreatedAddAction
 *
 * @package Offsetwp\Hook\WordPress\Action
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Action;

/**
 * Fires right after all personal data has been written to the export file.
 *
 * @since 4.9.6
 * @since 5.4.0 Added the `$json_report_pathname` parameter.
 */
abstract class WPPrivacyPersonalDataExportFileCreatedAddAction extends \Offsetwp\Hook\Support\AddAction {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'wp_privacy_personal_data_export_file_created';

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
	public int $hook_accepted_args = 5;


	/**
	 * The hook execution method
	 *
	 * @param string $archive_pathname The full path to the export file on the filesystem.
	 * @param string $archive_url The URL of the archive file.
	 * @param string $html_report_pathname The full path to the HTML personal data report on the filesystem.
	 * @param int $request_id The export request ID.
	 * @param string $json_report_pathname The full path to the JSON personal data report on the filesystem.
	 */
	abstract public function execute(
		$archive_pathname,
		$archive_url,
		$html_report_pathname,
		$request_id,
		$json_report_pathname,
	);
}
