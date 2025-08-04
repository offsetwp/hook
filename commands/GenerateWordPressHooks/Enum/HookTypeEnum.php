<?php
/**
 * HookTypeEnum
 *
 * @package Offsetwp\Hook\Commands\GenerateWordPressHooks\Enum
 */

declare(strict_types=1);

namespace Offsetwp\Hook\Commands\GenerateWordPressHooks\Enum;

use Offsetwp\Hook\Support\AddAction;
use Offsetwp\Hook\Support\AddFilter;

enum HookTypeEnum: string {
	case Action = 'action';
	case Filter = 'filter';

	/**
	 * Singular pascal case
	 *
	 * @return string
	 */
	public function singular_pascal_case(): string {
		return match ( $this ) {
			self::Action => 'AddAction',
			self::Filter => 'AddFilter',
		};
	}

	/**
	 * Plural pascal case
	 *
	 * @return string
	 */
	public function plural_pascal_case(): string {
		return match ( $this ) {
			self::Action => 'Action',
			self::Filter => 'Filter',
		};
	}

	/**
	 * Class name
	 *
	 * @return string
	 */
	public function class_name(): string {
		return match ( $this ) {
			self::Action => AddAction::class,
			self::Filter => AddFilter::class,
		};
	}
}
