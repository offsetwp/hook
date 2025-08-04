![OffsetWP Hook](/doc/static/cover-light.png#gh-light-mode-only)
![OffsetWP Hook](/doc/static/cover-dark.png#gh-dark-mode-only)

<h1 align="center">
    OffsetWP Hook
</h1>

<p align="center">
    A library to manage WordPress actions, filters and shortcodes hooks
</p>

## Installation

```bash
composer require offsetwp/hook
```

## Basic usage

### Add a basic action

```php
use Offsetwp\Hook\Support\AddAction;

new class extends AddAction {
	public string $hook_name = 'init';

	public function execute() {
		register_post_type(
			'project',
			array(
				'labels' => array(
					'name'          => __( 'Projects', 'offsetwp' ),
					'singular_name' => __( 'Project', 'offsetwp' ),
				),
				'public'      => true,
				'has_archive' => true,
			)
		);
	}
};
```

### Add a basic filter

```php
use Offsetwp\Hook\Support\AddFilter;

new class extends AddFilter {
	public string $hook_name = 'admin_footer_text';

	public function execute( $text ) {
		return 'Made with love by OffsetWP | ' . $text;
	}
};
```

### Add a basic shortcode

```php
use Offsetwp\Hook\Support\AddShortCode;

new class extends AddShortCode {
	public string $hook_name = 'my_shortcode';

	public function execute( array $atts, string $content, string $shortcode_tag ) {
		return 'My shortcode';
	}
};
```

## Advanced hook

Hooks all work in the same way: they have a name, a callback function, the order of priority in which they are to be executed, and the number of callback parameters. Only shortcodes have only the hook name and a callback function.

For greater flexibility, it is possible to override some properties without affecting others. Here is an filter with all possible properties:

```php
use Offsetwp\Hook\Support\AddFilter;

new class extends AddFilter {
	public string $hook_name       = 'admin_footer_text';
	public string $hook_callback   = 'launch'; // default: `execute`
	public int $hook_priority      = 10; // default: 10
	public int $hook_accepted_args = 1; // default: 1

	public function launch( $text ) {
		return 'Made with love by OffsetWP | ' . $text;
	}
};
```

## Use the WordPress core hooks

WordPress makes extensive use of hooks for its internal functioning. OffsetWP Hook provides ready-to-use wrappers for the most common native hooks.

They are available in:
- `Offsetwp\Hook\WordPress\Action`
- `Offsetwp\Hook\WordPress\Filter`

The wrappers already include the exact callback signatures, enabling optimal autocompletion in your IDE.

### Basic usage

```php
use Offsetwp\Hook\WordPress\Filter\WPAdminFooterTextAddFilter;

new class extends WPAdminFooterTextAddFilter {
	public function execute( $text ) {
		return 'Made with love by OffsetWP | ' . $text;
	}
};
```

### Hook with a dynamique name

```php
use Offsetwp\Hook\WordPress\Filter\WPGetMetaTypeMetadataAddFilter;

new class extends WPGetMetaTypeMetadataAddFilter {
	public string $hook_name = 'get_post_metadata'; // 'get_{$meta_type}_metadata'

	public function execute( $value, $object_id, $meta_key, $single, $meta_type ) {
		return $value;
	}
};
```

## FAQ

### Why are there only functions for `add_action`, `add_filter`, and `add_shortcode`?

The goal of this project is to modernize and simplify development on WordPress. We started with hooks, as they are the most commonly used.

As soon as we identify an elegant way to integrate the following features, they will be added: `do_action` `apply_filters` `remove_action` `remove_filter`
