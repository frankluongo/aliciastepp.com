<header class="header header--<?php echo get_post_field('post_name', get_post()); ?>" data-header>
  <div class="header-inner">
    <div class="header__logo-wrapper">
      <a href="<?php echo get_home_url(); ?>" title="Alicia Stepp Photography">
        <?php get_template_part('partials/content', 'logo', array('location' => 'header')); ?>
      </a>
    </div>
    <div class="header__toggle-wrapper">
      <button class="header__toggle" data-toggle>
        <span class="visually-hidden">Toggle Menu</span>
        <?php get_template_part('partials/icon', 'bars', array('location' => 'header')); ?>
      </button>
    </div>
    <div class="header__navs" data-nav aria-hidden="true">
      <nav class="header__nav header__nav--primary">
        <?php wp_nav_menu(array(
          'theme_location' => 'main-nav',
          'container' => false,
          'menu_class' => 'header__nav-list'
        )); ?>
      </nav>
      <nav class="header__nav header__nav--secondary">
        <?php wp_nav_menu(array(
          'theme_location' => 'secondary-nav',
          'container' => false,
          'menu_class' => 'header__nav-list'
        )); ?>
      </nav>
    </div>
  </div>
</header>