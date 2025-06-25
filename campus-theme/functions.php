<?php
add_action('after_setup_theme', function () {
  add_theme_support('wp-block-styles');
  add_theme_support('editor-styles');
  add_theme_support('block-patterns');
  add_editor_style('style.css');
});

// Automatically load all patterns
foreach (glob(get_template_directory() . "/patterns/*.php") as $file) {
  require $file;
}
