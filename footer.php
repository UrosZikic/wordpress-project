<footer class="flex-default flex-justify-around flex-align-center">
  <div>
    <img src="<?php echo get_theme_file_uri('/images/nav_image.png'); ?>" alt="website logo">
    <p>Copyright &#169; <?php echo date('Y'); ?></p>
    <p>All rights reserved</p>
    <div>
      <ion-icon name="logo-twitter"></ion-icon>
      <ion-icon name="logo-twitch"></ion-icon>
      <ion-icon name="logo-facebook"></ion-icon>
    </div>
  </div>
  <div class="flex-default flex-justify-around gap-l footer-right">
    <div>
      <strong>Company</strong>
      <ul>
        <li>
          <a href="">About us</a>
        </li>
        <li>
          <a href="">Blog</a>
        </li>
        <li>
          <a href="">Contact us</a>
        </li>
        <li>
          <a href="">Pricing</a>
        </li>
        <li>
          <a href="">Testimonials</a>
        </li>
      </ul>
    </div>
    <div>
      <strong>Support</strong>
      <ul>
        <li>
          <a href="">Help center</a>
        </li>
        <li>
          <a href="">Terms of service</a>
        </li>
        <li>
          <a href="">Legal</a>
        </li>
        <li>
          <a href="">Privacy policy</a>
        </li>
        <li>
          <a href="">Status</a>
        </li>
      </ul>
    </div>
    <div class="flex-default flex-direction-column gap-s">
      <strong>Stay up to date</strong>
      <input type="email" placeholder="Your email address">
    </div>
  </div>
</footer>
<?php wp_footer(); ?>
</body>

</html>