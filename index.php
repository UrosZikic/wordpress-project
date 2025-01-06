<section class="width-max new-destination">
  <?php
  while (have_posts()) {
    the_post();
    ?>
    <h2>New destination - <?php the_title(); ?></h2>
    <hr />
    <p>Learn more about the emerald isles</p>
    <div>
      <?php the_post_thumbnail(); ?>
    </div>
  <?php } ?>
</section>