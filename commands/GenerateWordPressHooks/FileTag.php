<?php
/**
 * FileTag
 *
 * @package Offsetwp\Hook\Commands\GenerateWordPressHooks
 */

declare(strict_types=1);

namespace Offsetwp\Hook\Commands\GenerateWordPressHooks;

/**
 * FileTag
 *
 * @package Offsetwp\Hook\Commands\GenerateWordPressHooks
 */
class FileTag {
	/**
	 * The tag
	 *
	 * @var array
	 */
	public array $tag = array();

	/**
	 * The name
	 *
	 * @var string 'deprecated'|'global'|'ignore'|'link'|'param'|'private'|'return'|'see'|'since'|'todo'
	 */
	public string $name;

	/**
	 * The content
	 *
	 * @var string
	 */
	public string $content = '';

	/**
	 * Init
	 *
	 * @param array $tag The tag.
	 * @return void
	 */
	public function __construct( array $tag ) {
		$this->tag     = $tag;
		$this->name    = $this->tag['name'];
		$this->content = $this->tag['content'];
	}

	/**
	 * Get the content
	 *
	 * @return string
	 */
	private function get_content(): string {
		if ( 'param' === $this->name && ! empty( $this->content ) && '{' === $this->content[0] ) {
			return $this->get_param_content_from_array_associative();
		}

		if ( 'param' === $this->name ) {
			$types       = join( '|', ! empty( $this->tag['types'] ) ? $this->tag['types'] : array() );
			$variable    = $this->tag['variable'];
			$description = $this->content;
			$row         = join( ' ', array( $types, $variable, $description ) );
			$row         = trim( $row, '.' ) . '.';
			return $row;
		}

		if ( 'link' === $this->name && ! empty( $this->tag['link'] ) ) {
			return '';
		}

		$content = $this->content ?? '';
		$content = str_replace( array( '<code>', '</code>' ), '`', $content );

		return $content;
	}

	/**
	 * Get the content of param from array associative
	 *
	 * @return string
	 */
	private function get_param_content_from_array_associative(): string {
		preg_match( '/\{\s*(.*?)\s*@type/s', $this->content, $matches );
		$description = trim( trim( $matches[1], '.' ) ) ?? '';
		$description = $description ? $description : 'Please read the documentation';
		return 'array ' . $this->tag['variable'] . ' ' . $description . '.';
	}

	/**
	 * Get the description
	 *
	 * @return string
	 */
	private function get_description(): string {
		if ( 'link' === $this->name ) {
			return $this->tag['link'];
		}

		if ( 'see' === $this->name ) {
			return $this->tag['refers'] ?? '';
		}

		$description = ! empty( $this->tag['description'] ) ? $this->tag['description'] : '';
		$description = str_replace( array( '<code>', '</code>' ), '`', $description );

		return $description;
	}

	/**
	 * Render the tag
	 *
	 * @return string
	 */
	public function render(): string {
		$tag         = '@' . $this->name;
		$content     = '';
		$description = '';

		if ( ! empty( $this->get_content() ) ) {
			$content = $this->get_content();
		}

		if ( ! empty( $this->get_description() ) ) {
			$description = $this->get_description();
		}

		if ( 'see' === $this->name ) {
			return join( ' ', array( $tag, $description, $content ) );
		}

		return join( ' ', array( $tag, $content, $description ) );
	}
}
