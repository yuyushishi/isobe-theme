<?php get_header(); ?>
<main class="topMain">

  <section class="topMv">
    <div class="container">
      <div class="content">
        <div class="inner">
          <h1>
            ​頭痛・認知症の専門医の当日診察<br>
            <span class="green">即日MRI検査</span>できるクリニック
          </h1>
          <div class="link">
            <p class="text">＼<span>初診の方もこちらから</span>／</p>
            <a href="https://ssc6.doctorqube.com/isobeclinic/index.html?stamp=150946" target="_blank" rel="noopenner">
              <span class="strong">
                <i class="fa-solid fa-globe"></i>
                Web予約
              </span>
              <span class="small">24時間受付</span>
              <svg viewBox="0 0 512 512">
                <use xlink:href="<?php echo get_template_directory_uri(); ?>/dist/svg/sprite.svg#angleIcon"></use>
              </svg>
            </a>
          </div>
        </div>
      </div>
      <figure class="mv">
        <img src="<?php echo get_template_directory_uri(); ?>/images/top/top_mv.jpg" alt="医療法人札幌いそべクリニック">
      </figure>
    </div>
    <p class="verticalText">日本頭痛学会認定教育関連施設―日本認知症学会教育施設第484号―認知症カフェ 札幌認証No.48</p>
  </section>


  <section id="topFeature" class="topFeature">
    <div class="bg">
      <div class="container">
        <h2 class="c-sectionTopTitle small">
          <span class="en">FEATURE</span>
          <span class="jp">【札幌いそべ頭痛・もの忘れクリニック】が選ばれる理由</span>
        </h2>
        <ul class="list">
          <?php
          $array = [
            '笑顔と思いやりあふれるクリニック' => ['top_feature_01.jpg', '01'],
            '患者様の顔を見て声を聴く診療' => ['top_feature_02.jpg', '02'],
            '安心と納得のできる説明' => ['top_feature_03.jpg', '03'],
          ];
          foreach ($array as $key => $value) : ?>
            <li class="listItem">
              <span class="listItem__num"><?php echo $value[1]; ?></span>
              <figure class="listItem__pic"><img src="<?php echo get_template_directory_uri(); ?>/images/top/<?php echo $value[0]; ?>" alt=""></figure>
              <h3><?php echo $key; ?></h3>

              <?php if (count($value) >= 3 && in_array($value[2], $value)) : ?>
                <a href="<?php echo $value[2]; ?>" target="_blank" rel="noopenner">
                  <svg viewBox="0 0 512 512">
                    <use xlink:href="<?php echo get_template_directory_uri(); ?>/dist/svg/sprite.svg#angleIcon"></use>
                  </svg>
                  <span><?php echo $value[3]; ?></span>
                </a>
              <?php endif; ?>

              <?php if (count($value) >= 5 && in_array($value[4], $value)) : ?>
                <a href="<?php echo $value[4]; ?>">
                  <svg viewBox="0 0 512 512">
                    <use xlink:href="<?php echo get_template_directory_uri(); ?>/dist/svg/sprite.svg#angleIcon"></use>
                  </svg>
                  <span><?php echo $value[5]; ?></span>
                </a>
              <?php endif; ?>
            </li>
          <?php endforeach; ?>
        </ul>
      </div>
    </div>
  </section>


  <section class="topOtherNews">
    <div class="container">
      <h2>
        <span class="jp">お知らせ</span>
        <span class="en">NEWS</span>
      </h2>
      <?php if (have_posts()) : ?>
        <ul class="list">
          <?php query_posts('posts_per_page=4'); ?>
          <?php while (have_posts()) : the_post(); ?>
            <li class="listItem">
              <p class="listItem__date"><?php echo get_the_date('Y.m.d'); ?></p>
              <?php
              $categories = get_the_category();
              foreach ($categories as $category) : ?>
                <p class="listItem__category"><a href="<?php echo esc_url(get_category_link($category->term_id)); ?>" class="listItem__category"><?php echo $category->name ?></a></p>
              <?php endforeach; ?>
              <h3>
                <a href="<?php the_permalink(); ?>">
                  <?php the_title(); ?>
                  <svg viewBox="0 0 512 512">
                    <use xlink:href="<?php echo get_template_directory_uri(); ?>/dist/svg/sprite.svg#angleIcon"></use>
                  </svg>
                </a>
              </h3>
            </li>
          <?php endwhile; ?>
        </ul>
      <?php else : ?>
        <p>投稿がありません。</p>
      <?php endif; ?>
      <div class="c-buttonSkyBlue">
        <a href="<?php echo esc_url(home_url()); ?>/news">
          <span class="jp">お知らせ一覧</span>
          <svg viewBox="0 0 512 512">
            <use xlink:href="<?php echo get_template_directory_uri(); ?>/dist/svg/sprite.svg#angleIcon"></use>
          </svg>
        </a>
      </div>
      <div class="topBanner">
        <a href="https://isobeclinic.hatenablog.com/" target="_blank" rel="noopenner">
          <img src="<?php echo get_template_directory_uri(); ?>/images/top/banner-01.jpg" alt="院長ブログ">
        </a>
        <a href="https://isobestaff2.hatenablog.com/" target="_blank" rel="noopenner">
          <img src="<?php echo get_template_directory_uri(); ?>/images/top/banner-03.jpg" alt="スタッフブログ">
        </a>
      </div>
    </div>
  </section>

  <section id="topNews" class="topNews">
    <div class="container">
      <h2>医師・医療事務（ドクタークラーク）募集</h2>
      <div class="wrap">
        <div class="video">
          <h3>①現在の医師求人</h3>
          <iframe width="560" height="315" src="https://www.youtube.com/embed/cYBb9PnjayA" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
        </div>
        <div class="video">
          <h3>②医療事務求人</h3>
          <iframe width="560" height="315" src="https://www.youtube.com/embed/WOnrBox-B-Q" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
        </div>
      </div>
    </div>
  </section>


  <section id="topMedical" class="topMedical">
    <div class="container commonFlex">
      <figure class="pic"><img src="<?php echo get_template_directory_uri(); ?>/images/top/brain_02.jpg" alt="脳ドック"></figure>
      <div class="content">
        <h2 class="c-sectionTopTitle">
          <span class="en">MEDICAL CHECKUP OF THE BRAIN</span>
          <span class="jp">脳ドック</span>
        </h2>
        <h3 class="subTitle">皆さま、健康な人生を送るために<br>「脳ドック」を受けてみませんか？</h3>
        <p class="text">
          脳卒中は、食事の乱れと運動不足や喫煙による動脈硬化によって起こります。また、認知症の中で多数を占めるアルツハイマー型認知症は、約25年前から脳に異変が起こり始めてきます。<br>
          当クリニックは、自由に選択できる各種オプションをご用意いたしました。
        </p>
        <div class="area">
          <h4>基本セット</h4>
          <dl class="list">
            <div class="inner">
              <dt>シンプル脳ドック</dt>
              <dd>24,000円</dd>
            </div>
          </dl>
        </div>
        <div class="linkButton">
          <a href="https://isobeclinic.jp/mri/">
            <svg viewBox="0 0 512 512">
              <use xlink:href="<?php echo get_template_directory_uri(); ?>/dist/svg/sprite.svg#angleIcon"></use>
            </svg>
            <span>MRI検査とは？</span>
          </a>
        </div>
        <div class="linkButton">
          <a href="https://isobeclinic.jp/%e8%84%b3%e3%83%89%e3%83%83%e3%82%af/">
            <svg viewBox="0 0 512 512">
              <use xlink:href="<?php echo get_template_directory_uri(); ?>/dist/svg/sprite.svg#angleIcon"></use>
            </svg>
            <span>脳ドック</span>
          </a>
        </div>
      </div>
    </div>
  </section>


  <section id="topAbout" class="topAbout">
    <div class="container">
      <h2 class="c-sectionTopTitle">
        <span class="en">CLINIC</span>
        <span class="jp">クリニックについて</span>
      </h2>
      <h3 class="subTitle">受動的な”おまかせ医療”からあなたが主役の“主体的医療”ができるクリニック</h3>
      <p class="text">札幌いそべ頭痛・もの忘れクリニックは、日本で唯一の「頭痛」と「認知症」の両方を診療の軸とするクリニックです。受動的な“おまかせ医療”ではなく、患者さまご自身が自己治癒力を高めセルフケア（予防）する“主体的医療”をお勧めいたします。MRI検査・漢方・栄養素療法・サプリメント・各種点滴療法・音楽リハビリなど、諦めない治療、そして予防の選択肢を用意しています。</p>
      <ul class="list">
        <?php
        $array = [
          '頭痛外来' => ['/images/top/about-01.jpg', '/images/top/pict-01.png', '~”頭痛持ち”だからって諦めない!~<br>“頭の痛さ”だけではない片 頭痛の症状:めまい・耳鳴り・ しびれ・冷え・腹痛および疲労などを改善したい方へ<br>日本人の約4000万人が頭痛に悩んでいることが分かっています。高血圧の4300万人とほぼ同数です。我慢せずに頭痛外来へご受診ください。'],
          '​もの忘れ外来' => ['/images/top/about-02.jpg', '/images/top/pict-02.png', '~認知症はもう怖くない!~<br>認知症の発症を予防し、もし認知症になっても幸せに暮らすコツを身につけたい方<br>認知症には、アルツハイマー型認知症・パーキンソン病・レヴィー小体病など、約70種類があります。認知症は病名ではありません。'],
        ];
        foreach ($array as $key => $value) : ?>
          <li class="listItem">
            <figure class="listItem__pic"><img src="<?php echo get_template_directory_uri(); ?><?php echo $value[0]; ?>" alt="<?php echo $key; ?>"></figure>
            <div class="inner">
              <h3>
                <img src="<?php echo get_template_directory_uri(); ?><?php echo $value[1]; ?>" alt="<?php echo $key; ?>">
                <span class="jp"><?php echo $key; ?></span>
              </h3>
              <p class="inner__text"><span><?php echo $value[2]; ?></span></p>
            </div>
          </li>
        <?php endforeach; ?>
      </ul>
    </div>
  </section>


  <section class="topRehabili">
    <div class="container commonFlex">
      <figure class="pic"><img src="<?php echo get_template_directory_uri(); ?>/images/top/rehabili.jpg" alt="リハビリテーション"></figure>
      <div class="content">
        <h2 class="c-sectionTopTitle">
          <span class="en">REHABILITATION</span>
          <span class="jp">リハビリテーション</span>
        </h2>
        <h3 class="subTitle">あなたの悩みを受け留め、応え、そして超える！</h3>
        <p class="text">
          リハビリテーション科では、患者さまが住み慣れた地域・環境・人間関係で、安心して生活していけるように脳を活性化させるプログラムを実施しています。<br>
          また、生活支障度の高い頭痛やめまいの予防、動作緩慢、姿勢・歩行機能障害の改善を目的としたプログラムも用意しています。ご家族を含む地域にお住まいの方全員が笑顔で過ごしていけるようにサポートしています。<br>
          お困りごとは、何でもご相談ください。
        </p>
        <div class="area">
          <h4>音楽療法カレンダー</h4>
          <figure class="areaPic"><img src="<?php echo get_template_directory_uri(); ?>/images/top/medical_calendar-02.png" alt="音楽療法カレンダー"></figure>
        </div>
      </div>
    </div>
  </section>

  <?php include('templates/template-map.php'); ?>

</main>



<?php get_footer(); ?>