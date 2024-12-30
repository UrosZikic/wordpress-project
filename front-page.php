<?php
get_header();
?>
<main>
  <header class="flex-default flex-justify-around flex-align-center front-header">
    <div class="flex-default flex-direction-column gap-s">
      <div>
        <h1>Lessons and insights</h1>
        <h1>From 8 years</h1>
        <p>Where to grow your business as a photographer: site or social media</p>
      </div>

      <a href="<?php echo site_url('/register'); ?>">Register</a>
    </div>
    <img src="<?php echo get_theme_file_uri('/images/main.png') ?>" alt="">
  </header>
</main>
<?php
get_footer();
?>