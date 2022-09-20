<?php $options = get_option("mostup_options"); ?>
<footer class="footer">
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <h5 class="block-title">Адрес</h5>
            <ul class="list">
              <li>
                <i class="fas fa-at"></i
                ><a href="mailto:kirill.tovpinets@icloud.com">kirill.tovpinets@icloud.com</a>
              </li>
            </ul>
          </div>
          <div class="col-md-4">
            <h5 class="block-title">Контакты</h5>
            <ul class="list">
              <li><i class="fas fa-phone"></i> <a href="tel:<?php echo $options['mostup_phone']; ?>"><?php echo $options['mostup_phone']; ?></a></li>
              <li><i class="fas fa-envelope"></i> <a href="mailto:<?php echo $options['mostup_email']; ?>"><?php echo $options['mostup_email']; ?></a></li>
            </ul>
            <ul class="list social-icons">
              <li class="social-icon">
                <a href="<?php echo $options['mostup_vk']; ?>"><i class="fab fa-vk fa-2x"></i></a>
              </li>
              <li class="social-icon">
                <a href="<?php echo $options['mostup_facebook']; ?>"
                  ><i class="fab fa-facebook-f fa-2x"></i
                ></a>
              </li>
              <li class="social-icon">
                <a href="<?php echo $options['mostup_instagram']; ?>"
                  ><i class="fab fa-instagram fa-2x"></i
                ></a>
              </li>
            </ul>
          </div>
          <div class="col-md-4">
            <h5 class="block-title">Информация</h5>
            <ul class="list">
              <li><a href="<?php echo get_permalink(104); ?>">Карта сайта</a></li>
            </ul>
          </div>
        </div>
      </div>
      <div class="copyright">
        <p>&copy;2020 Copyright - Христианский театр "Мост UP"</p>
      </div>
    </footer>

    <script
      src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
      integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
      integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
      integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
      crossorigin="anonymous"
    ></script>
    <script
      defer
      src="https://use.fontawesome.com/releases/v5.1.1/js/all.js"
      integrity="sha384-BtvRZcyfv4r0x/phJt9Y9HhnN5ur1Z+kZbKVgzVBAlQZX4jvAuImlIz+bG7TS00a"
      crossorigin="anonymous"
    ></script>
    <script
      type="text/javascript"
      src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"
    ></script>
    <?php wp_footer(); ?>
  </body>
</html>
