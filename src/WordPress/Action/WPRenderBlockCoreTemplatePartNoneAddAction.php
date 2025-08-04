<?php
/**
 * WPRenderBlockCoreTemplatePartNoneAddAction
 *
 * @package Offsetwp\Hook\WordPress\Action
 */

declare( strict_types=1 );

namespace Offsetwp\Hook\WordPress\Action;

/**
 * Fires when a requested block template part does not exist in the database nor in the theme.
 *
 * @since 5.9.0
 */
abstract class WPRenderBlockCoreTemplatePartNoneAddAction extends \Offsetwp\Hook\Support\AddAction {
	/**
	 * The name of the action to add the callback to.
	 *
	 * @var string
	 */
	public string $hook_name = 'render_block_core_template_part_none';

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
	 * @param string $template_part_id The requested template part namespaced to the theme.
	 * @param array $attributes The block attributes.
	 * @param string $template_part_file_path Absolute path to the not found template path.
	 */
	abstract public function execute( $template_part_id, $attributes, $template_part_file_path );
}
