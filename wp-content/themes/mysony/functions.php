<?php

if (!function_exists('mysony_enqueue_assets')) {
  function mysony_enqueue_assets() {
    $template_uri = get_template_directory_uri();
    $css_arr = array(
      'boostrap' => 'https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css',
      'common' => $template_uri . '/css/common.css'
    );
    foreach ($css_arr as $key => $value) {
      wp_enqueue_style($key, $value);
    }
  }

  add_action('wp_enqueue_scripts', 'mysony_enqueue_assets');
}
