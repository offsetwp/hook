<?php
/**
 * WPPrivacyPersonalDataExportPageAddFilter
 *
 * @package Offsetwp\Hook\WordPress\Filter
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Filter;

/**
 * Filters a page of personal data exporter data. Used to build the export report.
 *
 * @since 4.9.6
 */
abstract class WPPrivacyPersonalDataExportPageAddFilter extends \Offsetwp\Hook\Support\AddFilter {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'wp_privacy_personal_data_export_page';

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
	public int $hook_accepted_args = 7;


	/**
	 * The hook execution method
	 *
	 * @param array $response The personal data for the given exporter and page number.
	 * @param int $exporter_index The index of the exporter that provided this data.
	 * @param string $email_address The email address associated with this personal data.
	 * @param int $page The page number for this response.
	 * @param int $request_id The privacy request post ID associated with this request.
	 * @param bool $send_as_email Whether the final results of the export should be emailed to the user.
	 * @param string $exporter_key The key ( slug ) of the exporter that provided this data.
	 */
	abstract public function execute(
		$response,
		$exporter_index,
		$email_address,
		$page,
		$request_id,
		$send_as_email,
		$exporter_key,
	);
}
