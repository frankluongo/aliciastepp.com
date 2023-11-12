<?php get_header(); ?>
<?php
$rows = get_field('slideshow');
if ($rows) { ?>
  <section class="slideshow">
    <?php
    foreach ($rows as $key => $value) {
      $images = $value['images'];
    ?>
      <article class="slide" style="z-index: <?php echo $key + 1; ?>">
        <div class="slide__column">
          <?php if ($images['left_image']['l_image']) { ?>
            <img data-slide style="opacity: 0;" class="slide__image slide__image--<?php echo $images['left_image']['size']; ?>" src="<?php echo $images['left_image']['l_image']['sizes']['xlarge']; ?>" alt="Alicia Stepp Photography" />
          <?php } ?>
        </div>
        <div class="slide__column">
          <?php if ($images['right_image']['r_image']) { ?>
            <img data-slide style="opacity: 0;" class="slide__image slide__image--<?php echo $images['right_image']['size']; ?>" src="<?php echo $images['right_image']['r_image']['sizes']['xlarge']; ?>" alt="Alicia Stepp Photography" />
          <?php } ?>
        </div>
      </article>
    <?php } ?>
  </section>
<?php } ?>
<div class="homepage-logo" data-homepage-logo>
  <?php include(locate_template('components/Logo.php')); ?>
</div>
<?php get_footer(); ?>