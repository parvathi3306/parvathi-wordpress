<?php
register_block_pattern(
  'campus-theme/homepage-layout',
  [
    'title'       => __('Homepage Layout', 'campus-theme'),
    'description' => __('A full homepage layout for a college website.', 'campus-theme'),
    'content'     => '
<!-- wp:pattern {"slug":"campus-theme/hero-banner"} /-->
<!-- wp:columns -->
<div class="wp-block-columns">
  <div class="wp-block-column">
    <!-- wp:heading -->
    <h2>Departments</h2>
    <!-- /wp:heading -->
    <!-- wp:list -->
    <ul><li>Science</li><li>Engineering</li><li>Commerce</li><li>Arts</li></ul>
    <!-- /wp:list -->
  </div>
  <div class="wp-block-column">
    <!-- wp:heading -->
    <h2>Quick Links</h2>
    <!-- /wp:heading -->
    <!-- wp:list -->
    <ul><li><a href="#">Admissions</a></li><li><a href="#">Exam Schedule</a></li><li><a href="#">Student Portal</a></li></ul>
    <!-- /wp:list -->
  </div>
</div>
<!-- /wp:columns -->
<!-- wp:group {"align":"full","backgroundColor":"light"} -->
<div class="wp-block-group alignfull has-light-background-color has-background">
  <!-- wp:heading {"textAlign":"center"} -->
  <h2 class="has-text-align-center">Why Choose Us?</h2>
  <!-- /wp:heading -->
  <!-- wp:paragraph {"align":"center"} -->
  <p class="has-text-align-center">We offer quality education, experienced faculty, and industry exposure.</p>
  <!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
'
  ]
);
