<header class="header md:has-blend" data-header>
  <section class="header__logo-wrapper">
    <a href="<?php echo get_home_url(); ?>" title="Alicia Stepp Photography" data-header-logo-link>
      <?php include(locate_template('components/Logo.php')); ?>
    </a>
  </section>
  <section class="header__toggle-wrapper">
    <button class="header__toggle" data-toggle>
      <span class="visually-hidden">Toggle Menu</span>
      <?php include(locate_template('icons/bars.php')); ?>
    </button>
  </section>
  <section class="header__nav-wrapper" data-nav aria-hidden="true">
    <nav class="heading-wrapper header__nav header__nav--primary">
      <?php wp_nav_menu(array(
        'theme_location' => 'main-nav'
      )); ?>
    </nav>
    <nav class="heading-wrapper header__nav header__nav--secondary">
      <?php wp_nav_menu(array(
        'theme_location' => 'secondary-nav'
      )); ?>
    </nav>
  </section>
</header>