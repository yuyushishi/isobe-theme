<section class="commonAccess">
  <div class="bg">
    <div class="container">
      <div class="column">
        <div class="footerLeft">
          <nav class="footer_navi-01">
            <h3>CLINIC</h3>
            <?php
            wp_nav_menu(array(
              'menu' => 'footer_navi-01',
              'menu_class' => 'list',
              'container' => false,
              'add_li_class'  => 'main mainMenu listItem',
              'add_a_class'  => 'listItem__link',
            )); ?>
          </nav>
          <nav class="footer_navi-02">
            <h3>メニュー</h3>
            <?php
            wp_nav_menu(array(
              'menu' => 'footer_navi-02',
              'menu_class' => 'list',
              'container' => false,
              'add_li_class'  => 'main mainMenu listItem',
              'add_a_class'  => 'listItem__link',
            )); ?>
          </nav>
        </div>


        <div class="footerRight">
          <div class="box">
            <div class="logo">
              <a href="<?php echo esc_url(home_url()); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/common/logo-04.png" alt="医療法人札幌いそべクリニック"></a>
            </div>
            <ul class="sns">
              <?php $array = [
                1 => ['instaIcon', 'https://www.instagram.com/isobe_staff/', 'icon-insta'],
                2 => ['facebookIcon', 'https://www.facebook.com/people/%E3%81%84%E3%81%9D%E3%81%B9-%E3%81%A1%E3%81%82%E3%81%8D/100058598261086/', 'icon-facebook'],
                3 => ['youtubeIcon', 'https://www.youtube.com/channel/UC_a8d57j_M3a1NCTaOkl68g', 'icon-youtube'],
                4 => ['lineIcon', 'https://line.me/R/ti/p/%40979kmyvc', 'icon-line'],
              ];
              foreach ($array as $key => $value) : ?>
                <li class="snsItem">
                  <a href="<?php echo $value[1]; ?>" target="_blank" rel="noopenner">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/common/<?php echo $value[2]; ?>.png" alt="<?php echo $key; ?>">
                  </a>
                </li>
              <?php endforeach; ?>
            </ul>
          </div>

          <dl class="list">
            <?php
            $array = [
              '診療科目' => ['脳神経内科・脳神経外科・循環器内科・精神科・リハビリテーション科'],
              '​電話番号' => ['011-753-6000'],
              'FAX番号' => ['011-753-7070'],
              '住所' => ['札幌市東区北36条東15丁目1-20'],
              '​公共機関' => ['地下鉄『東豊線』1番出口を左へ 徒歩1分', '/about#aboutAccess', 'アクセスページへ'],
              '診察受付' => ['（開錠8:15）午前8:15～12:00 午後13:00～16:30'],
              '休診' => ['水曜午後・土曜午後・日曜・祝日'],
            ];
            foreach ($array as $key => $value) : ?>
              <div class="inner">
                <dt><?php echo $key; ?></dt>
                <dd>
                  <?php echo $value[0]; ?>
                  <?php if (count($value) >= 3 && in_array($value[2], $value)) : ?>
                    <a href="<?php echo $value[1]; ?>">
                      <svg viewBox="0 0 512 512">
                        <use xlink:href="<?php echo get_template_directory_uri(); ?>/dist/svg/sprite.svg#caretIcon"></use>
                      </svg>
                      <span><?php echo $value[2]; ?></span>
                    </a>
                  <?php endif; ?>
                </dd>
              </div>
            <?php endforeach; ?>
          </dl>
        </div>
      </div>

      <div class="banners">
        <figure class="pic">
          <a href="https://isobeclinic.jp/blog/59/">
            <img src="<?php echo get_template_directory_uri(); ?>/images/top/period-01.png" alt="新北海道スタイル">
          </a>
        </figure>
        <figure class="pic">
          <img src="<?php echo get_template_directory_uri(); ?>/images/common/footer_img-02.png" alt="新北海道スタイル">
        </figure>
        <figure class="pic">
          <a href="https://isobeclinic.hatenablog.com/" target="_blank" rel="noopenner">
            <img src="<?php echo get_template_directory_uri(); ?>/images/common/footer_img-03.png" alt="新北海道スタイル">
          </a>
        </figure>
        <figure class="pic">
          <a href="https://isobestaff2.hatenablog.com/" target="_blank" rel="noopenner">
            <img src="<?php echo get_template_directory_uri(); ?>/images/common/footer_img-04.png" alt="新北海道スタイル">
          </a>
        </figure>
      </div>

    </div>
  </div>
</section>

<!-- footer -->
<footer id="footer" class="footer">
  <div class="container">
    <h3>完全予約制</h3>
    <figure class="calendar"><img src="<?php echo get_template_directory_uri(); ?>/images/common/calendar_03.jpg" alt="カレンダー"></figure>
    <p>
      ※1　循環器内科…毎月第１・３火曜日<br>
      ※2　認知症カフェ…2ヶ月毎　14:00〜15:00<br>
      ※3…お薬診察は土曜日をお勧めします　土曜日 9:15〜12:00　矢野医師（内科医）による同様処方（日数調整）外来です。
    </p>
  </div>
  <p class="copy">&copy;2022 ISOBE CLINIC</p>
</footer>
<!-- wrapper -->
</div>

<!-- jQuery -->
<script src="<?php echo get_template_directory_uri(); ?>/dist/js/lib/swiper-bundle.min.js?<?php echo date('YmdHi', filemtime(get_template_directory() . '/dist/js/lib/swiper-bundle.min.js')); ?>"></script>
<script src="<?php echo get_template_directory_uri(); ?>/src/js/swiper.js?<?php echo date('YmdHi', filemtime(get_template_directory() . '/src/js/swiper.js')); ?>"></script>
<!-- swiper -->
<script src="<?php echo get_template_directory_uri(); ?>/dist/js/lib/jquery-3.6.0.min.js?<?php echo date('YmdHi', filemtime(get_template_directory() . '/dist/js/lib/jquery-3.6.0.min.js')); ?>"></script>
<script src="<?php echo get_template_directory_uri(); ?>/src/js/function.js?<?php echo date('YmdHi', filemtime(get_template_directory() . '/src/js/function.js')); ?>"></script>
<?php wp_footer(); ?>
</body>

</html>