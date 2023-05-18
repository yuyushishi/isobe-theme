<?php get_header(); ?>

<main class="singleMain">
  <section class="commonLowMv">
    <span class="en">NEWS</span>
    <div class="container">
      <h1>
        <span class="jp">お知らせ</span>
      </h1>
      <figure class="mv">
        <span><img src="<?php echo get_template_directory_uri(); ?>/images/top/mv.jpg" alt="医療法人札幌いそべクリニック"></span>
      </figure>
    </div>
    <?php output_breadcrumb(); ?>
  </section>
  <section class="singleBase">

    <div class="container">
      <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>
          <div class="textBox">
            <span class="date"><?php echo get_the_date('Y.m.d'); ?></span>
            <?php
            $categories = get_the_category();
            foreach ($categories as $category) : ?>
              <a href="<?php echo esc_url(get_category_link($category->term_id)); ?>" class="category"><?php echo $category->name ?></a>
            <?php endforeach; ?>
          </div>
          <h2><?php the_title(); ?></h2>
          <div class="content"><?php the_content(); ?></div>
        <?php endwhile; ?>
      <?php else : ?>
      <?php endif; ?>
    </div>

  </section>


</main>

<?php get_footer(); ?>