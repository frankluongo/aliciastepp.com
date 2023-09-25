<?php
remove_all_filters('posts_orderby');
$query = new WP_Query(array(
  'post_type' => 'gallery',
  'post_status' => 'publish',
  'orderby'   => 'rand',
  'posts_per_page' => 4,
));
if ($query->have_posts()) :
  while ($query->have_posts()) :
    $query->the_post();
    $id = get_the_ID();
    $cat = get_the_category($id)[0]->cat_name;
    $thumb = get_field('preview_items', $id)['thumbnail']['sizes']['large'];
    $full = get_field('preview_items', $id)['full']['sizes']['xxlarge'];
    $customTitle = get_field('preview_items', $id)['custom_title'];
    $title = get_the_title();
    $thumbnailColor = get_field('preview_items', $id)['thumbnail_color'];
?>
    <article class="view-more__item">
      <a class="view-more__link" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
        <section class="view-more__images">
          <img loading="lazy" alt="<?php echo $title; ?>" class="view-more__image" src="<?php echo $full; ?>">
          <img loading="lazy" alt="<?php echo $title; ?>" class="view-more__image view-more__thumb--<?php echo $thumbnailColor; ?>" src="<?php echo $thumb; ?>">
        </section>
        <h4 class="h5 view-more__title font-alt">
          <?php echo $title; ?>
          <span class="view-more__cat"><?php echo $cat; ?></span>
        </h4>
      </a>
    </article>
<?php
  endwhile;
  wp_reset_postdata();
endif;
?>