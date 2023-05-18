<?php get_header(); ?>

<main class="recruitMain">
  <?php include('templates/template-low-mv.php'); ?>

  <section class="recruitAbout">
    <div class="container">
      <?php the_content(); ?>
    </div>
  </section>

  <section class="recruitForm">
    <div class="container">
      <h2>採用フォーム</h2>
      <?php echo do_shortcode('[mwform_formkey key="803"]'); ?>
    </div>
  </section>

</main>

<?php get_footer(); ?>