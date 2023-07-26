<footer class="footer z-9" data-footer>
  <section class="footer-item footer-item--email">
    <span class="footer__label">Email:</span> <a class="footer-link" href="mailto:<?php echo get_field('email_address', 'option'); ?>"><?php echo get_field('email_address', 'option'); ?></a>
  </section>
  <section class="footer-item footer-item--insta">
    <span class="footer__label">Instagram:</span> <a class="footer-link" href="https://www.instagram.com/<?php the_field('instagram_handle', 'option'); ?>/" target="_blank" rel="noopener noreferrer">@<?php echo get_field('instagram_handle', 'option'); ?></a>
  </section>
</footer>