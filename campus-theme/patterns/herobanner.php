<?php
register_block_pattern(
  'campus-theme/hero-banner',
  [
    'title'       => __('Hero Banner', 'campus-theme'),
    'description' => __('A full-width hero banner for the homepage.', 'campus-theme'),
    'content'     => '
<!-- wp:cover {"dimRatio":50,"overlayColor":"primary","minHeight":300,"align":"full"} -->
<div class="wp-block-cover alignfull" style="min-height:300px">
  <span class="wp-block-cover__background has-primary-background-color has-background-dim-50 has-background-dim"></span>
  <div class="wp-block-cover__inner-container">
    <!-- wp:heading {"textAlign":"center","level":1} -->
    <h1 class="has-text-align-center">Welcome to Our College</h1>
    <!-- /wp:heading -->
    <!-- wp:paragraph {"align":"center"} -->
    <p class="has-text-align-center">Empowering education for a brighter future.</p>
    <!-- /wp:paragraph -->
  </div>
</div>
<!-- /wp:cover -->
'
  ]
);
