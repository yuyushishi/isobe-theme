<?php get_header(); ?>

<main class="postMain">
  <section class="postArchive">
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
    <div class="container">
      <?php if (have_posts()) : ?>
        <dl>
          <?php while (have_posts()) : the_post(); ?>
            <div class="inner">
              <dt>
                <span class="date"><?php echo get_the_date('Y.m.d'); ?></span>
                <?php
                $categories = get_the_category();
                foreach ($categories as $category) : ?>
                  <a href="<?php echo esc_url(get_category_link($category->term_id)); ?>" class="category"><?php echo $category->name ?></a>
                <?php endforeach; ?>
              </dt>
              <dd>
                <a href="<?php the_permalink(); ?>"><?php the_title(); ?>
                </a>
              </dd>
              <i class="fa-solid fa-angle-right"></i>
            </div>
          <?php endwhile; ?>
        </dl>
        <?php the_posts_pagination(
          array(
            'prev_text' => '<i class="fa-solid fa-angle-left"></i>',
            'next_text' => '<i class="fa-solid fa-angle-right"></i>',
          )
        ); ?>
      <?php else : ?>
        <p>投稿がありません。</p>
      <?php endif; ?>

    </div>




  </section>


</main>

<?php get_footer(); ?>