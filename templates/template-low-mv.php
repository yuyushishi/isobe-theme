<section class="commonLowMv">
  <span class="en"><?php the_field('サブタイトル'); ?></span>
  <div class="container">
    <h1>
      <span class="jp"><?php the_title(); ?></span>
    </h1>
    <figure class="mv">
      <?php if (is_page('about')) : ?>
        <span><img src="<?php echo get_template_directory_uri(); ?>/images/about/about_mv.jpg" alt="医療法人札幌いそべクリニック"></span>
      <?php else : ?>
        <span><img src="<?php echo get_template_directory_uri(); ?>/images/top/mv.jpg" alt="医療法人札幌いそべクリニック"></span>
      <?php endif; ?>
    </figure>
  </div>
  <?php output_breadcrumb(); ?>
</section>