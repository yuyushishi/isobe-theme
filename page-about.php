<?php get_header(); ?>

<main class="aboutMain">
  <?php include('templates/template-low-mv.php'); ?>

  <section class="aboutIntro">
    <div class="container">
      <h2 class="c-sectionLowTitle">院内紹介</h2>
      <div class="swiper-container swiperIntro">
        <div class="swiper-wrapper">
          <?php $array = [
            'クリニック外観' => ['about_info_05.jpg'],
            '受付' => ['about_info_01.jpg'],
            '待合室' => ['about_info_02.jpg'],
            '待合室' => ['about_info_03.jpg'],
            '診察室' => ['about_info_04.jpg'],
            'トイレ' => ['about_info_06.jpg'],
            'エレベーター' => ['about_info_07.jpg'],
          ];
          foreach ($array as $key => $value) : ?>
            <div class="swiper-slide">
              <figure class="pic"><img src="<?php echo get_template_directory_uri(); ?>/images/about/<?php echo $value[0]; ?>" alt="<?php echo $key; ?>"></figure>
              <h3><?php echo $key; ?></h3>
            </div>
          <?php endforeach; ?>
        </div>
        <div class="swiper-button-prev">
          <svg viewBox="0 0 512 512">
            <use xlink:href="<?php echo get_template_directory_uri(); ?>/dist/svg/sprite.svg#caretIcon2"></use>
          </svg>
        </div>
        <div class="swiper-button-next">
          <svg viewBox="0 0 512 512">
            <use xlink:href="<?php echo get_template_directory_uri(); ?>/dist/svg/sprite.svg#caretIcon"></use>
          </svg>
        </div>
      </div>
    </div>
  </section>


  <section class="aboutMachine">
    <div class="container">
      <h2 class="c-sectionLowTitle">院内機器紹介</h2>
      <ul class="list commonCardList">
        <?php $array = [
          'MRI 室<br>（1.5テスラ高磁場MRI）' => ['machine-01.jpg', 'クリニック内に高磁場MRIを完備しております。様々な脳神経疾患、頭痛やめまい、頸椎・腰椎および肩疾患、脳・頸動脈・下肢動脈疾患の早期発見ができるように最新機器を導入しました。'],
          'ホルター心電図' => ['machine-02.jpg', '軽量・小型なディスプレイ付防水タイプのホルター心電図です。軽量・小型で検査負担が少ないです。'],
          'キャップ式脳波' => ['about_device_01.jpg', '脳の神経細胞に、微弱な電気を流します。それを計測し、異常な脳波が出ていないかお調べいたします。'],
          'エコー装置' => ['about_device_02.jpg'],
          '認知機能検査一式' => ['machine-04.jpg', 'ADAS・コース立方体・レーブンマトリクス・CES-D・FABなどを用いて、認知機能を検査いたします。'],
          '迅速血糖検査機器' => ['machine-05.jpg', 'クリニック内で、血糖測定を行うための装置です。'],
          '超音波骨密度測定装置' => ['machine-06.jpg', 'わずか15秒で骨密度を測定できる装置です。超音波により測定時の痛みもございません。'],
          'ABI' => ['machine-07.jpg'],
          'AED' => ['machine-08.jpg'],
        ];
        foreach ($array as $key => $value) : ?>
          <li class="listItem">
            <figure class="listItem__pic"><img src="<?php echo get_template_directory_uri(); ?>/images/about/<?php echo $value[0]; ?>" alt="<?php echo $key; ?>"></figure>
            <h3><?php echo $key; ?></h3>
            <?php if (count($value) >= 2 && in_array($value[1], $value)) : ?>
              <p class="listItem__text"><?php echo $value[1]; ?></p>
            <?php endif; ?>
          </li>
        <?php endforeach; ?>
      </ul>
    </div>
  </section>


  <section class="aboutIntro">
    <div class="container">
      <h2 class="c-sectionLowTitle">部門紹介</h2>
      <ul class="list commonCardList">
        <?php $array = [
          '医療事務' => ['category-01.jpg', '私たちは全ての患者様に、礼儀正しく誠実かつ笑顔で受付・会計・電話対応を心掛けていきます。診断書の作成や他の病院との連携なども行っております。'],
          '看護師' => ['category-02.jpg', '患者様の思いに寄り添いながら、Drクラーク・採血・脳波・心電図を行うとともに高濃度ビタミンCやグルタチオン点滴などの自費診療の介助も行っています。'],
          '放射線技師' => ['category-03-re.jpg', '頭部MRI以外にも患者様の生活を豊かなものにするために、心臓MRIや内臓脂肪MRIなど様々な撮影を女性技師2名で行っています。患者様に安心して検査を行っていただけるように、日々心掛けていますので相談がありましたらお気軽にお声がけ下さい。'],
          '臨床心理士' => ['category-04.jpg', '大切にしていることは、第一に‘患者様に笑顔になって帰って頂くこと’です。患者様が、‘ここへ来て本当に良かった’と心から思って頂ける関わりが出来ることを大切にし、患者様への神経心理学的検査、気持ちの状態の把握、カウンセリング、ご家族様相談等を行っています。'],
          '音楽療法士' => ['category-05.jpg', '音楽にはリラックス・リフレッシュ効果の他、脳の活性化等の効果がありますが、当院では懐かしい曲に合わせて体を動かすことを中心に音楽リハビリを行っています。患者様のより良い生活の為に、心身共に満足されて笑顔で帰られることを大切にしています。'],
          '管理栄養士' => ['category-06.jpg', '必要な栄養素を取り入れることで本来持っている自己治癒力を高め、健康を取り戻されている患者様は、多くいらっしゃいます。<br>元気な日々を送る為に毎日の食事や栄養素の大切さをお伝えしておりますので、いつでもご相談ください。'],
        ];
        foreach ($array as $key => $value) : ?>
          <li class="listItem">
            <figure class="listItem__pic"><img src="<?php echo get_template_directory_uri(); ?>/images/about/<?php echo $value[0]; ?>" alt="<?php echo $key; ?>"></figure>
            <h3><?php echo $key; ?></h3>
            <?php if (in_array($value[1], $value)) : ?>
              <p class="listItem__text"><?php echo $value[1]; ?></p>
            <?php endif; ?>
          </li>
        <?php endforeach; ?>
      </ul>
    </div>
  </section>


  <section class="aboutSummary">
    <div class="container">
      <h2 class="c-sectionLowTitle">クリニック概要</h2>
      <div class="wrap">
        <h3 class="c-contentLowTitle">連携協力施設</h3>
        <ul class="commonBannerList">
          <?php $array = [
            1 => ['cooperation_banner-01.webp', '札幌東徳州会病院', 'http://www.higashi-tokushukai.or.jp'],
            2 => ['cooperation_banner-02.webp', '社会医療法人　禎心会', 'https://www.teishinkai.jp'],
            3 => ['cooperation_banner-03.webp', '札幌心臓血管・透析クリニック', 'https://scvc.jp/dialysis/'],
            4 => ['cooperation_banner-04.webp', '平岸脳神経クリニック', 'https://www.hbn-cl.com'],
            5 => ['cooperation_banner-05.webp', 'さっぽろ脊椎外科クリニック', 'https://sapporo-spine.com'],
            6 => ['cooperation_banner-06.webp', '五稜会病院', 'https://goryokai.com'],
            7 => ['cooperation_banner-07.webp', '奥泉整形外科クリニック', 'https://www.okuizumi-orthopedics.com'],
            8 => ['cooperation_banner-08.webp', '新道東おおた内科・消化器科クリニック', 'https://shindohigashi-oota.com'],
            9 => ['cooperation_banner-09.webp', 'さっぽろ糖尿病・甲状腺クリニック', 'http://sdtc.jp'],
            10 => ['cooperation_banner-10.webp', '栄町消化器・内視鏡内科クリニック', 'https://sakaemachi-gec.com'],
            11 => ['cooperation_banner-11.webp', '札幌ふしこ内科・透析クリニック', 'https://fushiko-cl.jp'],
            12 => ['cooperation_banner-12.webp', 'あすなろくらぶ'],
            13 => ['cooperation_banner-13.jpg', 'くく耳鼻咽喉科クリニック'],
            14 => ['cooperation_banner-14.png', '老年内科メモリークリニック', 'https://roumemosap.jp'],
            15 => ['cooperation_banner-15.png', '福住整形外科クリニック', 'https://fukuzumiseikei.com'],
          ];
          foreach ($array as $key => $value) : ?>
            <li class="commonBannerListItem">
              <figure class="commonBannerListItem__pic">
              <?php if (count($value) >= 3 && in_array($value[2], $value)) : ?>
                  <a href="<?php echo $value[2]; ?>" target="_blank" rel="noopenner">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/about/<?php echo $value[0]; ?>" alt="<?php echo $value[1]; ?>">
                  </a>
                <?php else : ?>
                  <img src="<?php echo get_template_directory_uri(); ?>/images/about/<?php echo $value[0]; ?>" alt="<?php echo $value[1]; ?>">
                <?php endif; ?>
              </figure>
            </li>
          <?php endforeach; ?>
        </ul>
      </div>
      <div class="wrap">
        <h3 class="c-contentLowTitle">学会認定教育施設</h3>
        <ul class="commonBannerList">
          <?php $array = [
            1 => ['education_banner-01.webp', '日本頭痛学会', 'https://www.jhsnet.net'],
            2 => ['education_banner-02.webp', '日本認知症学会', 'https://square.umin.ac.jp/dementia/index.html'],
          ];
          foreach ($array as $key => $value) : ?>
            <li class="commonBannerListItem">
              <figure class="commonBannerListItem__pic">
                <a href="<?php echo $value[2]; ?>" target="_blank" rel="noopenner">
                  <img src="<?php echo get_template_directory_uri(); ?>/images/about/<?php echo $value[0]; ?>" alt="<?php echo $value[1]; ?>">
                </a>
              </figure>
            </li>
          <?php endforeach; ?>
        </ul>
      </div>
      <div class="wrap">
        <h3 class="c-contentLowTitle">学会認定専門医掲載サイト</h3>
        <ul class="commonBannerList">
          <?php $array = [
            1 => ['specialty_banner-01.webp', '日本神経学会', 'https://www.neurology-jp.org'],
            2 => ['specialty_banner-03.webp', '日本神経学会', 'https://www.neurology-jp.org'],
            3 => ['specialty_banner-04.webp', '日本脳卒中学会', 'https://www.jsts.gr.jp'],
            4 => ['specialty_banner-05.webp', '日本糖尿病協会', 'https://www.nittokyo.or.jp'],
          ];
          foreach ($array as $key => $value) : ?>
            <li class="commonBannerListItem">
              <figure class="commonBannerListItem__pic">
                <a href="<?php echo $value[2]; ?>" target="_blank" rel="noopenner">
                  <img src="<?php echo get_template_directory_uri(); ?>/images/about/<?php echo $value[0]; ?>" alt="<?php echo $value[1]; ?>">
                </a>
              </figure>
            </li>
          <?php endforeach; ?>
        </ul>
      </div>
      <div class="wrap">
        <h3 class="c-contentLowTitle">指定医療機関・指定医</h3>
        <ul class="list">
          <?php $array = [
            1 => ['難病指定医療機関、難病指定医'],
            2 => ['特定疾患治療研究事業指定医療機関'],
            3 => ['小児慢性特定疾患治療研究指定医'],
            4 => ['労災保険法指定医療機関'],
            5 => ['生活保護指定医療機関'],
            6 => ['身体障害者福祉法指定医（視覚・聴覚・平衡・音声・言語・そしゃく・肢体不自由・ぼうこう直腸）'],
          ];
          foreach ($array as $key => $value) : ?>
            <li class="listItem listItemText"><?php echo $value[0]; ?></li>
          <?php endforeach; ?>
        </ul>
      </div>
    </div>
  </section>


  <section class="aboutAccess" id="aboutAccess">
    <div class="container">
      <h2 class="c-sectionLowTitle">アクセス情報</h2>
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3369.3957762329464!2d141.3665651906998!3d43.10519331635544!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x5f0b2f2d9a94e153%3A0x533e41bded304930!2z44CSMDA3LTA4MzYg5YyX5rW36YGT5pyt5bmM5biC5p2x5Yy65YyX77yT77yW5p2h5p2x77yR77yV5LiB55uu77yR4oiS77yS77yQ!5e0!3m2!1sja!2sjp!4v1658466816103!5m2!1sja!2sjp" width="480" height="360" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      <div class="wrap">
        <dl class="list commonBg">
          <?php $array = [
            '住所' => ['〒007-0836 札幌市東区北36条東15丁目1-20'],
            '電話番号' => ['011-753-6000'],
            '駐車場' => ['専用駐車場 21台 完備<br>（ クリニック前7台・クリニック裏直結14台 ）'],
          ];
          foreach ($array as $key => $value) : ?>
            <div class="inner">
              <dt class="commonTitle"><?php echo $key; ?></dt>
              <dd><?php echo $value[0]; ?></dd>
            </div>
          <?php endforeach; ?>
        </dl>
        <div class="video commonBg">
          <h3 class="commonTitle">最寄り駅</h3>
          <p>地下鉄東豊線「新道東駅」1番出口より徒歩 1 分</p>
          <figure><img src="<?php echo get_template_directory_uri(); ?>/images/about/touhousen.webp" alt="地下鉄東豊線"></figure>
        </div>
      </div>
      <div class="map">
        <h3 class="commonTitle">広域マップ（高速道路）</h3>
        <figure class="pic"><img src="<?php echo get_template_directory_uri(); ?>/images/about/map.png" alt="map"></figure>
      </div>
    </div>
  </section>

</main>

<?php get_footer(); ?>