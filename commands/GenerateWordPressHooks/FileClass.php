<?php
/**
 * FileClass
 *
 * @package Offsetwp\Hook\Commands\GenerateWordPressHooks
 */

declare(strict_types=1);

namespace Offsetwp\Hook\Commands\GenerateWordPressHooks;

use Nette\PhpGenerator\PhpNamespace;
use Offsetwp\Hook\Commands\GenerateWordPressHooks\FileTag;
use Offsetwp\Hook\Commands\GenerateWordPressHooks\Enum\HookTypeEnum;
use Offsetwp\Hook\Commands\GenerateWordPressHooks\Printer\WPPrinter;

/**
 * FileClass
 *
 * @package Offsetwp\Hook\Commands\GenerateWordPressHooks
 */
class FileClass {
	/**
	 * The hook data
	 *
	 * @var array
	 */
	public array $hook = array();

	/**
	 * The original name
	 *
	 * @var string
	 */
	public string $original_name = '';

	/**
	 * The class name
	 *
	 * @var string
	 */
	public string $class_name = '';

	/**
	 * The type
	 *
	 * @var HookTypeEnum
	 */
	public HookTypeEnum $type;

	/**
	 * The documentation
	 *
	 * @var array
	 */
	public array $doc = array();

	/**
	 * The description
	 *
	 * @var string
	 */
	public string $description = '';

	/**
	 * The tags
	 *
	 * @var FileTag[]
	 */
	public array $tags = array();

	/**
	 * The parameters
	 *
	 * @var FileTag[]
	 */
	public array $params = array();

	/**
	 * The parameters length
	 *
	 * @var int
	 */
	public int $args_length = 0;

	/**
	 * The class prefix
	 *
	 * @var string
	 */
	public string $prefix = 'WP';

	/**
	 * The namespace
	 *
	 * @var PhpNamespace
	 */
	public PhpNamespace $namespace;

	/**
	 * Init the hook file
	 *
	 * @param array $hook The hook data.
	 * @return void
	 */
	public function __construct( array $hook ) {
		$this->hook          = $hook;
		$this->original_name = (string) $hook['name'];
		$this->type          = HookTypeEnum::from( (string) $hook['type'] );
		$this->class_name    = $this->prefix . $this->snake_case_to_camel_case( trim( preg_replace( '/^wp/', '', (string) $hook['name'] ), '_' ) ) . $this->type->singular_pascal_case();
		$this->doc           = $hook['doc'];
		$this->description   = (string) $hook['doc']['description'];

		$tags = ! empty( $hook['doc'] ) && ! empty( $hook['doc']['tags'] ) ? $hook['doc']['tags'] : array();
		$tags = array_map(
			function ( $tag ) {
				return new FileTag( $tag );
			},
			$tags
		);

		$this->tags = array_filter(
			$tags,
			function ( $tag ) {
				return empty( $tag->name ) || 'param' === $tag->name ? false : true;
			}
		);
		$this->tags = array_values( $this->tags );

		$this->params = array_filter(
			$tags,
			function ( $tag ) {
				return empty( $tag->name ) || 'param' !== $tag->name ? false : true;
			}
		);
		$this->params = array_values( $this->params );

		$this->args_length = (int) $hook['args'];

		$this->namespace = $this->parse();
	}

	/**
	 * Utils fonction to convert string in camel case
	 *
	 * @param string $str The string.
	 * @return string
	 */
	private function snake_case_to_camel_case( string $str ): string {
		$str = str_replace( '{', '_', $str );
		$str = str_replace( '}', '_', $str );
		$str = str_replace( '$', '', $str );
		$str = str_replace( '->', '_', $str );
		$str = str_replace( '-', '_', $str );
		$str = ucwords( $str, '_' );
		$str = str_replace( '_', '', $str );
		$str = ucfirst( $str );
		return $str;
	}

	/**
	 * Parse the hook data to generate the file
	 *
	 * @return PhpNamespace
	 */
	private function parse(): PhpNamespace {
		$namespace = new PhpNamespace( 'Offsetwp\\Hook\\WordPress\\' . $this->type->plural_pascal_case() );

		$class = $namespace->addClass( $this->class_name );

		$class
			->setAbstract()
			->setExtends( $this->type->class_name() )
			->addComment( $this->description );

		if ( count( $this->tags ) ) {
			$class->addComment( '' );
		}

		foreach ( $this->tags as $key => $tag ) {
			if ( $key > 0 && $this->tags[ $key - 1 ]->name !== $tag->name ) {
				$class->addComment( '' );
			}

			$class->addComment( $tag->render() );
		}

		$class
			->addProperty( 'hook_name', $this->original_name )
			->setType( 'string' )
			->setPublic()
			->addComment( 'The name of the action to add the callback to.' )
			->addComment( '' )
			->addComment( '@var string' );

		$class
			->addProperty( 'hook_priority', 10 )
			->setType( 'int' )
			->setPublic()
			->addComment( 'The callback to be run when the action is called.' )
			->addComment( '' )
			->addComment( '@var string' );

		$class
			->addProperty( 'hook_accepted_args', $this->args_length )
			->setType( 'int' )
			->setPublic()
			->addComment( 'Optional. Used to specify the order in which the functions associated with a particular action are executed. Lower numbers correspond with earlier execution, and functions with the same priority are executed in the order in which they were added to the action. Default 10.' )
			->addComment( '' )
			->addComment( '@var string' );

		$execute_method = $class->addMethod( 'execute' );
		$execute_method
			->setAbstract()
			->setPublic()
			->setComment( 'The hook execution method' );

		if ( ! empty( $this->params ) ) {
			$execute_method->addComment( '' );
		}

		foreach ( $this->params as $param ) {

			$execute_method->addComment( $param->render() );

			$execute_method
				->addParameter( str_replace( '$', '', $param->tag['variable'] ) );
		}

		return $namespace;
	}

	/**
	 * Render the hook file
	 *
	 * @return string
	 */
	public function render(): string {
		$printer = new WPPrinter();

		$code  = "<?php\n";
		$code .= "/**\n";
		$code .= " * {$this->class_name}\n";
		$code .= " *\n";
		// phpcs:ignore
		$code .= " * @package Offsetwp\Hook\WordPress\\" . $this->type->plural_pascal_case() . "\n";
		$code .= " */\n\n";
		$code .= "declare(strict_types=1);\n\n";
		$code .= $printer->printNamespace( $this->namespace );
		$code  = str_replace( "\n{", ' {', $code );
		$code  = str_replace( '(', '( ', $code );
		$code  = str_replace( ')', ' )', $code );
		$code  = str_replace( '(  )', '()', $code );
		$code  = str_replace( "( \n", "(\n", $code );
		$code  = str_replace( '	 )', '	)', $code );
		return $code;
	}
}
