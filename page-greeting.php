<?php get_header(); ?>

<main class="greetingMain">

  <?php include('templates/template-low-mv.php'); ?>
  <section class="aboutThought">
    <div class="container">
      <h2 class="c-sectionLowTitle">ロゴマークに込めた想い</h2>
      <figure class="logo"><img src="<?php echo get_template_directory_uri(); ?>/images/common/logo-04.png" alt="札幌医療法人 いそべクリニック"></figure>
      <div class="bg">
        <div class="inner">
          <p class="innerText">
            “頭痛持ち”だからって諦めない！幸せな人生『願望』を成就する。認知症は、もう怖くない！『青春』忘れる老人力を高める。<br>
            人間は互いに支え合う。『己の欲することを相手に施しなさい』。我々は、自分の人生は、自分が舵を握り、願望実現のために選択する人生を送るために、あなたの悩みを受け止め、応え、そして超える！価値ある提案をする組織です。我々は、縁ある人々の幸せを追求するために【選択できる医療】を提供し続ける。
          </p>
        </div>
      </div>
    </div>
  </section>


  <section class="aboutPolicy">
    <div class="container">
      <h2 class="c-sectionLowTitle">メッセージ</h2>
      <div class="content c-contentWidth">
        <p class="text">
          あなたの悩みを受け留め、応え、そして超える！<br>
          当院は“おまかせ・様子をみましょう“（受動的医療）から“セルフケアする・自己治癒力“（主体的医療）を診療で大切にしています。
        </p>
      </div>
    </div>
  </section>


  <section class="aboutPhilosophy">
    <div class="container">
      <h2 class="c-sectionLowTitle">理念</h2>
      <figure class="pic">
        <img src="<?php echo get_template_directory_uri(); ?>/images/greeting/isobe-rinen.jpg" alt="理念">
      </figure>
      <div class="column">
        <?php $array = [
          1 => ['orange','絆徳', '「我々は、相手に良いことをするので、ずっと一緒にいられる関係を大切にする。」「三方良し（四方良し）」「自分良し」「相手良し」「世間良し」の三方を満足させるよう行う。<br>※江戸時代中期、全国的規模でビジネス活動を行い、時には海外へも進出していた近江商人の思想・哲学を伝えたものです。「未来良し」を入れると四方良し。'],
          2 => ['green','挑戦', '「成長する組織には、乗り越えられる困難がやってくる。その先に豊かな未来が待っている。」「我々は、あらゆる困難を乗り越えるリソースを持っている。その挑戦を楽しむ」と四方良し。'],
          3 => ['pink','期待超え', '「我々は（国民）あなたの悩みを受け止め、応え、そして超える、組織になる。」「 Win Win を考える。新しさをプロデュースする（違いは間違いではないため）、シナジー（相乗効果）を発揮する。 」'],
          4 => ['pink','選択', '「 我々は周囲の人および環境のせいにせず、自分にできること（内的影響の輪）を考えて行動する。 」<br>「我々は終わりを考えてから始める。」「我々は、時間は人生と考え、一番重要なことを優先する。」<br>「まず相手を理解することに徹する。その次に理解される（違いは間違いではない）、対等に違いを交渉する。」'],
          5 => ['blue','最幸', '勉強・スポーツ・人を育てる（スキルだけでなくエリート｛指導者｝）を作る。皆の物心両面の幸せのために、理念と経済合理性の両方を高め、高収入と時間および自由を手に入れる。そして死を迎えたときに、最高に幸せだったと感謝できる人生を生き切る。'],
        ];
        foreach ($array as $key => $value) : ?>
          <div class="columnItem">
            <h3 class="<?php echo $value[0]; ?>"><?php echo $value[1]; ?></h3>
            <p><?php echo $value[2]; ?></p>
          </div>
        <?php endforeach; ?>
      </div>
      <div class="wrap">
        <h3 class="c-contentLowTitle">Mission - 使命</h3>
        <div class="content c-contentWidth">
          <p class="text">
            健康増進医療を通じ日本の未来をHAPPYにする<br>
            ～愛、溢れる社会の実現～
          </p>
        </div>
      </div>
      <div class="wrap">
        <h3 class="c-contentLowTitle">Vision - 未来像</h3>
        <div class="content c-contentWidth">
          <p class="text">
            当院で働くメンバーすべての物心両面の幸福を追求すると同時に、2030年までに日本一の頭痛・もの忘れのモデルクリニックを達成します。
          </p>
        </div>
      </div>
      <div class="wrap">
        <h3 class="c-contentLowTitle">Value - 価値</h3>
        <div class="content c-contentWidth">
          <ul class="list">
            <?php $array = [
              1 => ['社会へ貢献する名誉ある役割を担い、責任を果たす'],
              2 => ['自己肯定感を常に高く持ち、相手の良いところを肯定し、お互い感謝をする'],
              3 => ['感謝の心（内的動機付け）で組織の向上のために、笑顔でアウトプット（挑戦）し続ける'],
              4 => ['礼儀正しく、誠実に徹する'],
              5 => ['職員個々は夢を持ち、常に自己の改善に努める'],
            ];
            foreach ($array as $key => $value) : ?>
              <li class="listItem"><?php echo $value[0]; ?></li>
            <?php endforeach; ?>
          </ul>
        </div>
      </div>
      <div class="wrap">
        <h3 class="c-contentLowTitle">Philosophy - 診療業務理念</h3>
        <div class="content c-contentWidth">
          <p class="text desc">当クリニックは、以下の３つを基本理念として最も大切にし、日々の診療を行っております。</p>
          <dl class="defList">
            <?php $array = [
              1 => ['理念1', '頭痛・もの忘れ医療を通して、一人でも多くの仲間へ安心と笑顔、元気、幸福を提供することに全力を尽くしていますか？'],
              2 => ['理念2', 'スタッフは、当クリニックを不断の自己成長の場とし、仲間と助け合い、物心両面の幸福を追求していますか？'],
              3 => ['理念3', '医療を通した人道的な社会貢献という、名誉ある役割を担う事を自覚し、仲間に対して常に感謝と謙虚な心を持って行動していますか？'],
            ];
            foreach ($array as $key => $value) : ?>
              <div class="inner">
                <dt><?php echo $value[0]; ?></dt>
                <dd><?php echo $value[1]; ?></dd>
              </div>
            <?php endforeach; ?>
          </dl>
        </div>
      </div>
    </div>
  </section>
  <section class="greetingDoctor">
    <div class="container">
      <h2 class="c-sectionLowTitle">院長あいさつ</h2>
      <div class="inner">
        <figure class="innerPic"><img src="<?php echo get_template_directory_uri(); ?>/images/greeting/doctor-03.jpg" alt="院長 磯部千明"></figure>
        <div class="bg">
          <p class="innerText">
            <span class="top">当クリニックは、日本で唯一の“頭痛・もの忘れ”をクリニック名とする脳神経内科クリニックです。精神科や神経科または心療内科とは異なります。全身機能を司る脳や神経系は、何らかの原因によって障害されると、頭痛やもの忘れ、めまい、内臓不具合などの症状が出ます。「年のせいだから」「精神的なものだろう」と諦めている人が多いのですが、これは脳・神経系の異常であることが、多々あります。頭痛・首の痛み・めまい・しびれ・ふるえ・動作が遅くなってきた・眠れない‥などは、決して我慢する症状ではありません。早期発見・予防治療ができれば改善することがあり、諦めないことが大切です。「頭痛」、「認知症」・「むずむず脚症候群」・「パーキンソン病」・「脳卒中」・「てんかん」および「疲労」なども増えてきています。当事者のニーズを考え、あなたの悩みを受け止め、応え、そして超える！をモットーにしています。まずは当クリニックまでお気軽にご相談ください。</span>
            <span class="box">
              <img src="<?php echo get_template_directory_uri(); ?>/images/greeting/writing.jpg" alt="メッセージ">
              <span class="bottom">院長 磯部 千明</span>
            </span>
          </p>
        </div>
      </div>

      <div class="link">
        <a href="https://isobeclinic.hatenablog.com/" target="_blank" rel="noopnener">
          <img src="<?php echo get_template_directory_uri(); ?>/images/greeting/banner-01.jpg" alt="からだ相談">
        </a>
      </div>
    </div>
  </section>



  <section class="greetingCareer">
    <div class="container">
      <h2 class="c-contentLowTitle">院長経歴</h2>
      <div class="wrap c-contentWidth">
        <p class="text">
          札幌いそべ頭痛・もの忘れクリニック<br>
          理事長・院長 磯部 千明
        </p>
        <dl class="list commonList">
          <?php
          $link_group = SCF::get('career');
          foreach ($link_group as $fields) :
          ?>
            <div class="inner">
              <dt><?php echo esc_html($fields['year']); ?></dt>
              <dd><?php echo esc_html($fields['description']); ?></dd>
            </div>
          <?php endforeach; ?>
        </dl>
      </div>
    </div>
  </section>


  <section class="greetingLicense">
    <div class="container">
      <h2 class="c-contentLowTitle">所属学会・資格</h2>
      <div class="wrap c-contentWidth">
        <ul class="list">
          <?php
          $array = [
            1 => ['所属学会・資格'],
            2 => ['医学博士 学位論文『痴呆性疾患における髄液中アセチルコリンおよびコリン濃度の検討』'],
            3 => ['日本神経学会 脳神経内科専門医・指導医'],
            4 => ['日本頭痛学会 頭痛 専門医・指導医'],
            5 => ['日本認知症学会 認知症 専門医・指導医'],
            6 => ['日本脳卒中学会 脳卒中 専門医'],
            7 => ['日本内科学会 認定内科医'],
            8 => ['日本糖尿病協会 療養指導医'],
            9 => ['身体障害者指定医'],
            10 => ['指定難病認定医'],
            11 => ['臨床研修指導医'],
            12 => ['ボトックス治療免許'],
            13 => ['t-PA治療免許'],
            14 => ['救急救命BLS、ACLS講習 受講医'],
            15 => ['認知症サポート医'],
            16 => ['かかりつけ医認知症対応力向上研修受講医'],
            17 => ['日本脳神経外科学会 会員'],
            18 => ['日本東洋医学会 会員'],
          ];
          foreach ($array as $key => $value) : ?>
            <li class="listItem"><?php echo esc_html($value[0]); ?></li>
          <?php endforeach; ?>
        </ul>
      </div>
    </div>
  </section>




  <section class="greetingCharge">
    <div class="container">
      <h2 class="c-contentLowTitle">治験担当医(責任医師・分担医師)</h2>
      <div class="wrap c-contentWidth">
        <dl class="list commonList">
          <?php
          $array = [
            '2018年' => ['片頭痛治療薬（抗CGRP受容体作動薬）第II相試験／治験担当医師'],
            '2017年' => ['医学博士 パーキンソン病治療薬（アデノシンA2A受容体拮抗薬）第II相試験／治験担当医師'],
            '2010年' => ['医学博士 パーキンソン病治療薬 エフピー単独治療／治験担当医師'],
            '2007年' => ['医学博士 片頭痛予防薬 トピラマート 第III相試験／治験担当医師'],
            '1999年' => ['医学博士 パーキンソン病治療薬 プラミぺキソール 第III相試験／治験担当医師'],
          ];
          foreach ($array as $key => $value) : ?>
            <div class="inner">
              <dt><?php echo $key ?></dt>
              <dd><?php echo esc_html($value[0]); ?></dd>
            </div>
          <?php endforeach; ?>
        </dl>
      </div>
    </div>
  </section>



  <section class="greetingPerformance">
    <div class="container">
      <h2 class="c-contentLowTitle">実績紹介</h2>
      <ul class="list">
        <?php $array = [
          1 => ['所属学会・資格', '#'],
          2 => ['学会発表共同演者', '#'],
          3 => ['治験担当医', '#'],
          4 => ['演者・司会', '#'],
          5 => ['自著の論文・著書', '#'],
          6 => ['著書紹介', '#'],
          7 => ['累積症例数または患者数', '#'],
          8 => ['英語論文', '#'],
        ];
        foreach ($array as $key => $value) : ?>
          <li class="listItem">
            <a href="<?php echo $value[1]; ?>">
              <span><?php echo $value[0]; ?></span>
              <svg viewBox="0 0 512 512">
                <use xlink:href="<?php echo get_template_directory_uri(); ?>/dist/svg/sprite.svg#angleIcon"></use>
              </svg>
            </a>
          </li>
        <?php endforeach; ?>
      </ul>

      <div class="box">
        <!-- <a href="https://www.isobeclinic.jp/faq" target="_blank" rel="noopenner"><img src="<?php echo get_template_directory_uri(); ?>/images/greeting/banner-02.jpg" alt="doctor'sblog"></a> -->
        <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/greeting/banner-02.jpg" alt="doctor'sblog"></a>
        <a href="https://isobeclinic.hatenablog.com/" target="_blank" rel="noopnener"><img src="<?php echo get_template_directory_uri(); ?>/images/greeting/banner-01.jpg" alt="からだ相談"></a>
        <a href="https://isobestaff2.hatenablog.com/" target="_blank" rel="noopenner"><img src="<?php echo get_template_directory_uri(); ?>/images/greeting/banner-03.jpg" alt="いそべスタッフブログ"></a>
      </div>

      <div class="inner">
        <figure class="pic01"><img src="<?php echo get_template_directory_uri(); ?>/images/greeting/picture-01.jpg" alt=""></figure>
        <figure class="pic02"><img src="<?php echo get_template_directory_uri(); ?>/images/greeting/picture-02.jpg" alt=""></figure>
      </div>

    </div>

  </section>

  <?php include('templates/template-map.php'); ?>

</main>
<?php get_footer(); ?>