<?php
/* Template Name: Create PDF Page */
get_header();
$images = get_field('pdf_images');
$covers = get_field('front_back_cover_images');
?>
<section class="content vertical-page vertical-page--full">
  <section class="contact-image-wrapper" id="images-wrapper" data-pdf-front="<?php echo $covers['front_cover']['sizes']['xxlarge']; ?>" data-pdf-back="<?php echo $covers['back_cover']['sizes']['xxlarge']; ?>">
    <?php
    if ($images) {
      foreach ($images as &$image) {
        $photo = $image['image'];
    ?>
        <button class="contact-image__button" aria-label="<?php echo $photo['title'] ?>" data-selected="false" data-image data-src="<?php echo $photo['sizes']['xxlarge']; ?>">
          <img class="contact-image__image" data-lazy-img data-loaded="false" data-src="<?php echo $photo['sizes']['medium']; ?>" alt="<?php echo $photo['title']; ?>" />
        </button>
    <?php
      }
    }
    ?>
  </section>
</section>
<section class="printing-loader" data-printing>
  <div class="printing-loader__text">
    Preparing Photos...
  </div>
</section>

<?php get_footer(); ?>