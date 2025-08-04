<?php
/**
 * WPPrinter
 *
 * @package Offsetwp\Hook\Commands\GenerateWordPressHooks\Printer
 */

// phpcs:ignoreFile

declare(strict_types=1);

namespace Offsetwp\Hook\Commands\GenerateWordPressHooks\Printer;

use Nette\PhpGenerator\Printer;

/**
 * Custom printer
 *
 * @package Offsetwp\Hook\Commands\GenerateWordPressHooks\Printer
 */
class WPPrinter extends Printer {
	/**
	 * Line length after which line wrapping occurs
	 *
	 * @var int
	 */
	public int $wrapLength = 120;

	/**
	 * Indentation character, can be replaced with a sequence of spaces
	 *
	 * @var string
	 */
	public string $indentation = '	';

	/**
	 * Number of blank lines between properties
	 *
	 * @var int
	 */
	public int $linesBetweenProperties = 0;

	/**
	 * Number of blank lines between methods
	 *
	 * @var int
	 */
	public int $linesBetweenMethods = 2;

	/**
	 * Number of blank lines between 'use statement' groups for classes, functions, and constants
	 *
	 * @var int
	 */
	public int $linesBetweenUseTypes = 0;

	/**
	 * Position of the opening curly brace for functions and methods
	 *
	 * @var bool
	 */
	public bool $bracesOnNextLine = false;

	/**
	 * Place a single parameter on one line, even if it has an attribute or is promoted
	 *
	 * @var bool
	 */
	public bool $singleParameterOnOneLine = false;

	/**
	 * Omits namespaces that do not contain any class or function
	 *
	 * @var bool
	 */
	public bool $omitEmptyNamespaces = true;

	/**
	 * Separator between the right parenthesis and the return type of functions and methods
	 *
	 * @var string
	 */
	public string $returnTypeColon = ': ';
}
