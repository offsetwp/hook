<?php
/**
 * GenerateWordPressHooksCommand
 *
 * @package Offsetwp\Hook
 */

declare(strict_types=1);

namespace Offsetwp\Hook\Commands;

use Offsetwp\Hook\Commands\GenerateWordPressHooks\FileClass;

/**
 * GenerateCore
 */
class GenerateWordPressHooksCommand {
	/**
	 * Exectute the script
	 *
	 * @return void
	 */
	public static function execute(): void {
		self::clear_structure();

		$hooks = self::get_hooks();

		self::generate( $hooks );
	}

	/**
	 * Clear the structure folders
	 *
	 * @return void
	 */
	public static function clear_structure(): void {
		$path  = dirname( __DIR__ ) . DIRECTORY_SEPARATOR . 'src' . DIRECTORY_SEPARATOR . 'WordPress';
		$paths = array(
			$path . DIRECTORY_SEPARATOR . 'Action',
			$path . DIRECTORY_SEPARATOR . 'Filter',
		);

		foreach ( $paths as $path ) {
			if ( ! is_dir( $path ) ) {
				continue;
			}
			self::delete_folder( $path );
		}

		foreach ( $paths as $path ) {
			if ( is_dir( $path ) ) {
				continue;
			}
			mkdir( $path );
		}
	}

	/**
	 * Delete folder from path
	 *
	 * @param mixed $folder_path The folder path.
	 * @return void
	 */
	public static function delete_folder( $folder_path ): void {
		if ( ! is_dir( $folder_path ) ) {
			return;
		}

		$files    = scandir( $folder_path );
		$excludes = array( '.', '..' );

		foreach ( $files as $file ) {
			if ( in_array( $file, $excludes, true ) ) {
				continue;
			}

			$file_path = $folder_path . DIRECTORY_SEPARATOR . $file;

			if ( is_dir( $file_path ) ) {
				self::delete_folder( $file_path );
			} else {
				unlink( $file_path );
			}
		}

		rmdir( $folder_path );
	}

	/**
	 * Get hooks
	 *
	 * @return array
	 */
	public static function get_hooks(): array {
		$actions_json = file_get_contents( 'vendor/wp-hooks/wordpress-core/hooks/actions.json' );
		$filters_json = file_get_contents( 'vendor/wp-hooks/wordpress-core/hooks/filters.json' );

		$actions = json_decode( $actions_json, true )['hooks'];
		$filters = json_decode( $filters_json, true )['hooks'];

		$actions = array_values(
			array_filter(
				$actions,
				function ( $filter ) {
					if ( 'action' !== $filter['type'] ) {
						return null;
					}
					if ( stripos( $filter['name'], '.php' ) ) {
						return null;
					}
					return $filter;
				}
			)
		);

		$filters = array_values(
			array_filter(
				$filters,
				function ( $filter ) {
					if ( 'filter' !== $filter['type'] ) {
						return null;
					}
					if ( stripos( $filter['name'], '.php' ) ) {
						return null;
					}
					return $filter;
				}
			)
		);

		return array_merge( $actions, $filters );
	}

	/**
	 * Generate hooks
	 *
	 * @param mixed $hooks The actions and filters hooks.
	 * @return void
	 */
	public static function generate( $hooks ): void {
		$files = array();

		foreach ( $hooks as $hook ) {
			$files[] = new FileClass( $hook );
		}

		foreach ( $files as $file ) {
			$path      = dirname( __DIR__ ) . DIRECTORY_SEPARATOR . 'src' . DIRECTORY_SEPARATOR . 'WordPress' . DIRECTORY_SEPARATOR . $file->type->plural_pascal_case();
			$file_name = $file->class_name . '.php';
			file_put_contents( $path . DIRECTORY_SEPARATOR . $file_name, $file->render() );
		}
	}
}
