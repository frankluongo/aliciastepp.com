<section class="intro section section--flex horizontal-section" data-scroll-section>
  <article class="intro__text">
    <?php if (get_field('display_credits')) { ?>
      <div class="intro__credits">
        <?php echo get_field('credits_info'); ?>
      </div>
    <?php } ?>
    <h1 class="intro__title <?php if (get_field('display_credits')) {
                              echo 'intro__title--with-credits';
                            }; ?>" data-title data-scroll data-scroll-speed="0.2">
      <?php echo get_field('preview_items')['custom_title'] ?>
    </h1>
  </article>
</section>