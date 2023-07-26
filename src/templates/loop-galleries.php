<?php
$tests = get_field('tests', 'option');
$query = new WP_Query(
  array(
    'post_type' => 'gallery',
    'cat' => $cat,
    'posts_per_page' => 50
  )
);
if ($query->have_posts()) :
  while ($query->have_posts()) :
    $query->the_post();
    $id = get_the_ID();
    $thumb = get_field('preview_items', $id)['thumbnail']['sizes']['large'];
    $full = get_field('preview_items', $id)['full']['sizes']['xxlarge'];
    $customTitle = get_field('preview_items', $id)['custom_title'];
    $style = get_field('preview_items', $id)['style'];
    $title = get_the_title();
    $thumbnailColor = get_field('preview_items', $id)['thumbnail_color'];
?>
    <article class="preview style-<?php echo $style; ?>" data-scroll-section>
      <a class="preview__link" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
        <?php if ($tests['square_thumbnails']) { ?>
          <div class="preview__wrapper">
            <img alt="<?php echo $title; ?>" class="preview__full" data-lazy-img data-loaded="false" data-src="<?php echo $full; ?>" data-scroll data-scroll-speed="-0.75">
          </div>
          <div class="preview__wrapper">
            <img data-lazy-img data-loaded="false" class="preview__thumb preview__thumb--<?php echo $thumbnailColor; ?>" data-src="<?php echo $thumb; ?>" alt="<?php echo $title; ?>" data-scroll data-scroll-speed="0.5">
          </div>
        <?php } else { ?>
          <img alt="<?php echo $title; ?>" class="preview__full" data-lazy-img data-loaded="false" data-src="<?php echo $full; ?>" data-scroll data-scroll-speed="-0.75">
          <img data-lazy-img data-loaded="false" class="preview__thumb preview__thumb--<?php echo $thumbnailColor; ?>" data-src="<?php echo $thumb; ?>" alt="<?php echo $title; ?>" data-scroll data-scroll-speed="0.5">
        <?php } ?>
        <h2 class="preview__title font-alt has-blend" data-scroll-position="left" data-title>
          <?php if ($customTitle) {
            echo $customTitle;
          } else {
            echo $title;
          } ?>
        </h2>
      </a>
    </article>
<?php
  endwhile;
  wp_reset_postdata();
endif;
?>