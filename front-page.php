<?php
get_header();
?>
<main>
  <header class="flex-default flex-direction-column flex-align-center flex-justify-center gap-xs"
    style="background-image: url(<?php echo get_theme_file_uri('/images/header-image.webp') ?>)">
    <h1 class="white-t">Welcome to Travel Guide – Your Gateway to Unforgettable Journeys!</h1>
    <p class="white-t">Discover breathtaking destinations, plan your perfect trip, and create lifelong memories.</p>
    <p class="white-t">Start exploring now and find your dream destination! </p>
    <a href="" class="white-t">explore</a>
  </header>
  <section class="width-max new-destination flex-default flex-justify-between radius-left-side radius-right-side">
    <?php
    $custom_query = new WP_Query(array(
      'post_type' => 'post', // Fetch only posts
      'posts_per_page' => 1, // Number of posts to display
    ));
    while ($custom_query->have_posts()) {
      $custom_query->the_post();
      ?>
      <div class="p-xs m-t-s flex-default flex-direction-column self-align-center">
        <h2>New destination - <?php the_title(); ?></h2>
        <hr />
        <p><?php echo wp_trim_words(get_the_content(), 20); ?><a href="<?php echo get_permalink(); ?>"> continue
            reading</a></p>
      </div>
      <div class="self-justify-end self-align-end">
        <?php the_post_thumbnail(); ?>
      </div>



    <?php } ?>
  </section>
</main>
<?php
get_footer();
?>