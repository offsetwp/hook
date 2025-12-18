![OffsetWP Hook](https://raw.githubusercontent.com/offsetwp/offsetwp.github.io/refs/heads/main/public/common/cover/cover-hook-light.png#gh-light-mode-only)
![OffsetWP Hook](https://raw.githubusercontent.com/offsetwp/offsetwp.github.io/refs/heads/main/public/common/cover/cover-hook-dark.png#gh-dark-mode-only)

<h1 align="center">
    OffsetWP Hook
</h1>

<p align="center">
    Typed, secure, modern, and object-oriented hook registration for WordPress
</p>

## Installation

```bash
composer require offsetwp/hook
```

## Basic usage

### Add a basic action

```php
use OffsetWP\Hook\Support\Action;

new class extends Action {
	public string $hook_name = 'init';

	protected function handle() {
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
use OffsetWP\Hook\Support\Filter;

new class extends Filter {
	public string $hook_name = 'admin_footer_text';

	protected function handle( $text ) {
		return 'Made with love by OffsetWP | ' . $text;
	}
};
```

### Add a basic shortcode

```php
use OffsetWP\Hook\Support\ShortCode;

new class extends ShortCode {
	public string $hook_name = 'my_shortcode';

	protected function handle( array $atts, string $content, string $shortcode_tag ) {
		return 'My shortcode';
	}
};
```

## Advanced hook

Hooks all work in the same way: they have a name, a callback function, the order of priority in which they are to be executed, and the number of callback parameters. Only shortcodes have only the hook name and a callback function.

For greater flexibility, it is possible to override some properties without affecting others. Here is an filter with all possible properties:

```php
use OffsetWP\Hook\Support\Filter;

new class extends Filter {
	public string $hook_name       = 'admin_footer_text';
	public string $hook_callback   = 'launch'; // default: `handle`
	public int $hook_priority      = 10; // default: 10
	public int $hook_accepted_args = 1; // default: 1

	protected function launch( $text ) {
		return 'Made with love by OffsetWP | ' . $text;
	}
};
```

With more substantial development, it may be necessary for your hooks to use dependencies. All of this is possible, depending on your needs:

```php
use OffsetWP\Hook\Support\Filter;

new class extends Filter {
	public string $hook_name = 'admin_footer_text';

	public function __construct( private $myServiceName = 'CustomService' ) {
		return parent::__construct();
	}

	protected function handle( $text ) {
		return $this->myServiceName . ' | ' . $text;
	}
};
```

## FAQ

### Why are there only functions for `add_action`, `add_filter`, and `add_shortcode`?

The goal of this project is to modernize and simplify development on WordPress. We started with hooks, as they are the most commonly used.

As soon as we identify an elegant way to integrate the following features, they will be added: `do_action` `apply_filters` `remove_action` `remove_filter`
