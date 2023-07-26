<?php $tests = get_field('tests', 'option'); ?>
</main>
<div id="portal" aria-hidden="true">
  <button id="portal-close" title="Close portal">
    <span>&times;</span>
  </button>
  <div id="portal-inner">

  </div>
</div>
<?php wp_footer(); ?>
<?php if ($tests['is_development']) { ?>
  <script>
    window.isDevelopment = true;
  </script>
<?php } ?>
</body>

</html>