<?php $tests = get_field('tests', 'option'); ?>
</main>
<div id="portal" aria-hidden="true">
  <button id="portal-close" title="Close portal">
    <span>&times;</span>
  </button>
  <div id="portal-inner">

  </div>
</div>
<style>
  @font-face {
  font-family: "FreightBig Pro";
  src: url("<?php echo get_template_directory_uri(); ?>/assets/fonts/freight/FreightBigProLight-Regular.eot");
  src: url("<?php echo get_template_directory_uri(); ?>/assets/fonts/freight/FreightBigProLight-Regular.eot?#iefix")
      format("embedded-opentype"),
    url("<?php echo get_template_directory_uri(); ?>/assets/fonts/freight/FreightBigProLight-Regular.woff2") format("woff2"),
    url("<?php echo get_template_directory_uri(); ?>/assets/fonts/freight/FreightBigProLight-Regular.woff") format("woff"),
    url("<?php echo get_template_directory_uri(); ?>/assets/fonts/freight/FreightBigProLight-Regular.ttf") format("truetype"),
    url("<?php echo get_template_directory_uri(); ?>/assets/fonts/freight/FreightBigProLight-Regular.svg#FreightBigProLight-Regular")
      format("svg");
  font-weight: 300;
  font-style: normal;
  font-display: swap;
}

@font-face {
  font-family: "FreightBig Pro";
  src: url("<?php echo get_template_directory_uri(); ?>/assets/fonts/freight/FreightBigProLight-Italic.eot");
  src: url("<?php echo get_template_directory_uri(); ?>/assets/fonts/freight/FreightBigProLight-Italic.eot?#iefix")
      format("embedded-opentype"),
    url("<?php echo get_template_directory_uri(); ?>/assets/fonts/freight/FreightBigProLight-Italic.woff2") format("woff2"),
    url("<?php echo get_template_directory_uri(); ?>/assets/fonts/freight/FreightBigProLight-Italic.woff") format("woff"),
    url("<?php echo get_template_directory_uri(); ?>/assets/fonts/freight/FreightBigProLight-Italic.ttf") format("truetype"),
    url("<?php echo get_template_directory_uri(); ?>/assets/fonts/freight/FreightBigProLight-Italic.svg#FreightBigProLight-Italic")
      format("svg");
  font-weight: 300;
  font-style: italic;
  font-display: swap;
}

@font-face {
  font-family: "Ogg Roman";
  src: url("<?php echo get_template_directory_uri(); ?>/assets/fonts/ogg/Ogg-Roman.woff2") format("woff2"),
    url("<?php echo get_template_directory_uri(); ?>/assets/fonts/ogg/Ogg-Roman.woff") format("woff");
  font-weight: normal;
  font-style: normal;
}
@font-face {
  font-family: "Ogg Roman";
  src: url("<?php echo get_template_directory_uri(); ?>/assets/fonts/ogg/Ogg-Italic.woff2") format("woff2"),
    url("<?php echo get_template_directory_uri(); ?>/assets/fonts/ogg/Ogg-Italic.woff") format("woff");
  font-weight: normal;
  font-style: italic;
}

@font-face {
  font-family: "Founders Grotesk";
  src: url("<?php echo get_template_directory_uri(); ?>/assets/fonts/founders/FoundersGrotesk-Medium.woff2") format("woff2"),
    url("<?php echo get_template_directory_uri(); ?>/assets/fonts/founders/FoundersGrotesk-Medium.woff") format("woff");
  font-weight: 500;
  font-style: normal;
}

@font-face {
  font-family: "Founders Grotesk";
  src: url("<?php echo get_template_directory_uri(); ?>/assets/fonts/founders/FoundersGrotesk-Regular.woff2") format("woff2"),
    url("<?php echo get_template_directory_uri(); ?>/assets/fonts/founders/FoundersGrotesk-Regular.woff") format("woff");
  font-weight: 400;
  font-style: normal;
}

@font-face {
  font-family: "Founders Grotesk";
  src: url("<?php echo get_template_directory_uri(); ?>/assets/fonts/founders/FoundersGrotesk-Light.woff2") format("woff2"),
    url("<?php echo get_template_directory_uri(); ?>/assets/fonts/founders/FoundersGrotesk-Light.woff") format("woff");
  font-weight: 300;
  font-style: normal;
}

.ff-founders {
  font-family: var(--wp--preset--font-family--founders-grotesk);
}
.ff-freight {
  font-family: var(--wp--preset--font-family--freightbig-pro);
}
.ff-ogg {
  font-family: var(--wp--preset--font-family--ogg-roman);
}
</style>
<?php wp_footer(); ?>
<?php if ($tests['is_development']) { ?>
  <script>
    window.isDevelopment = true;
  </script>
<?php } ?>
</body>

</html>