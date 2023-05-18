<?php get_header(); ?>

<main class="medicalMain">
  <?php include('templates/template-low-mv.php'); ?>
  <section class="medicalFirst">
    <div class="container">
      <h2 class="c-sectionLowTitle">受診される皆様へ</h2>

      <div class="wrap">
        <h3 class="c-contentLowTitle">はじめて受診される方</h3>
        <div class="inner">
          <p class="innerText">
            はじめてご来院の患者様は、専門外来を問わず受診希望日にご予約をお取りできます。<br>
            当日は必要に応じた検査を行いますので、あらかじめご了承ください。​
          </p>
          <h4>窓口受付時間</h4>
          <figure class="innerPic--01"><img src="<?php echo get_template_directory_uri(); ?>/images/medical/calendar-01.png" alt="窓口受付時間"></figure>
        </div>

        <div class="inner">
          <h4>お電話またはWeb予約にてご予約ください。</h4>
          <div class="commonLink">
            <a href="https://ssc6.doctorqube.com/isobeclinic/index.html?stamp=150946" target="_blank" rel="noopenner">
              <img src="<?php echo get_template_directory_uri(); ?>/images/common/nav_icon-03.svg" alt="">
              <span>WEBで予約する</span>
            </a>
          </div>
          <div class="commonLink">
            <a href="#">
              <img src="<?php echo get_template_directory_uri(); ?>/images/common/tel.svg" alt="">
              <span>電話で予約する</span>
            </a>
          </div>
        </div>

        <div class="inner" id="sheet">
          <h4>受診日にお持ちいただくもの</h4>
          <ul class="commonList">
            <?php $array = [
              1 => ['ご本人が受診時には、必ず『健康保険証』または『マイナンバーカード』をお持ちください<br>（代理人によるご受診の場合は、健康保険証のみをお持ちください）'],
              2 => ['現在服用中のお薬のある方は『お薬手帳』などをお持ちください'],
              3 => ['医療証のある方は併せてお持ちください'],
              4 => ['事前に『問診表』をご記入の方は併せてお持ちください'],
            ];
            foreach ($array as $key => $value) : ?>
              <li class="commonListItem">
                <span class="num"><?php echo $key; ?>.</span>
                <span class="jp"><?php echo $value[0]; ?></span>
              </li>
            <?php endforeach; ?>
          </ul>
          <div class="commonLink">
            <a href="https://isobeclinic.jp/wp-content/uploads/2022/08/monshin_zutsu-r4.pdf" target="_blank" rel="noopenner">
              <img src="<?php echo get_template_directory_uri(); ?>/images/common/nav_icon-03.svg" alt="">
              <span>頭痛外来 問診票ダウンロード</span>
            </a>
          </div>
          <div class="commonLink">
            <a href="https://isobeclinic.jp/wp-content/uploads/2022/08/monshin_monowasure.pdf" target="_blank" rel="noopenner">
              <img src="<?php echo get_template_directory_uri(); ?>/images/common/nav_icon-03.svg" alt="">
              <span>もの忘れ外来 問診票ダウンロード</span>
            </a>
          </div>
        </div>

        <div class="inner">
          <h4>ご料金の参考</h4>
          <p class="innerText">検査内容により前後いたします。お問い合わせください。</p>
          <div class="tableWrap">
            <table>
              <tr>
                <th class="border--01"></th>
                <th class="border--01">3割負担</th>
                <th class="border--01">1割負担</th>
              </tr>
              <?php
              $array = [
                '頭痛外来' => ['12,000円程', '5,000円程'],
                'もの忘れ外来' => ['12,000円〜', '5,500円程'],
                '脳神経内科外来' => ['17,000円程', '5,500円程'],
              ];
              foreach ($array as $key => $value) : ?>
                <tr>
                  <th class="border--02"><?php echo $key; ?></th>
                  <td class="bg--01"><?php echo $value[0]; ?></td>
                  <td class="bg--01"><?php echo $value[1]; ?></td>
                </tr>
              <?php endforeach; ?>
            </table>
          </div>
        </div>
      </div>


      <div class="wrap">
        <h3 class="c-contentLowTitle">2回目以降の方</h3>
        <div class="inner">
          <p class="innerText">
            2回目以降は各専門外来へのご予約にご協力ください。<br>
            なお、「体調の急変」や「いつもとは違う突然の頭痛」等の症状がございましたら、クリニックへお電話にてご連絡ください。
          </p>
          <h4>受診日にお持ちいただくもの</h4>
          <ul class="commonList">
            <?php $array = [
              1 => ['ご本人が受診時には、必ず『健康保険証』または『マイナンバーカード』をお持ちください<br>（代理人によるご受診の場合は、健康保険証のみをお持ちください）'],
              2 => ['現在服用中のお薬のある方は『お薬手帳』などをお持ちください'],
              3 => ['医療証のある方は併せてお持ちください'],
              4 => ['診察券'],
            ];
            foreach ($array as $key => $value) : ?>
              <li class="commonListItem">
                <span class="num"><?php echo $key; ?>.</span>
                <span class="jp"><?php echo $value[0]; ?></span>
              </li>
            <?php endforeach; ?>
          </ul>
        </div>
      </div>

      <div id="medicalCalendar" class="wrap">
        <h3 class="c-contentLowTitle">診療カレンダー</h3>
        <div class="inner">
          <div class="strongTitle">完全予約制</div>
          <figure class="innerPic--02"><img src="<?php echo get_template_directory_uri(); ?>/images/common/calendar_03.jpg" alt="カレンダー"></figure>
          <p>
            ※1　循環器内科…毎月第１・３火曜日 13:30〜15;30<br>
            ※2　認知症カフェ…2ヶ月毎　14:00〜15:00<br>
          </p>
          <ul class="bgList">
            <?php $array = [
              1 => ['診察受付', '（開錠8:15）午前8:15～12:00　午後13:00～16:30'],
              2 => ['休診', '水曜午後・土曜午後・日曜・祝日'],
            ];
            foreach ($array as $key => $value) : ?>
              <li class="bgListItem">
                <span class="strong"><?php echo $value[0]; ?></span>
                <span class="jp"><?php echo $value[1]; ?></span>
              </li>
            <?php endforeach; ?>
          </ul>
          <div class="block">
            <h4>お薬診療</h4>
            <p class="text">お薬処方医による同様処方（日数調整）外来です。</p>
            <figure class="pic">
              <img src="<?php echo get_template_directory_uri(); ?>/images/medical/kusuri-02.png" alt="お薬お薬診察カレンダー">
            </figure>
          </div>
        </div>

        <div class="inner">
          <h4>音楽療法（予約制：1枠の定員は5名です）</h4>
          <p class="innerText">音楽療法は下記のスケジュールで行なっております。</p>
          <figure><img src="<?php echo get_template_directory_uri(); ?>/images/medical/medical_calendar-02.png" alt="カレンダー"></figure>
          <ul class="rehaList">
            <li>・お電話にてご予約ください。</li>
          </ul>
          <h4 style="margin-top: 50px;">栄養指導</h4>
          <p class="innerText">栄養指導を行っています</p>
          <figure><img src="<?php echo get_template_directory_uri(); ?>/images/medical/kusuri_calendar.png" alt="カレンダー"></figure>
        </div>
      </div>
    </div>
  </section>

  <section class="medicalGuidance">
    <div class="container">
      <h2 class="c-sectionLowTitle">診療のご案内</h2>

      <div class="wrap">
        <h3 class="c-contentLowTitle">標榜診療科名</h3>
        <div class="inner">
          <p class="innerText">『脳神経内科』・『脳神経外科』・『循環器内科』・『精神科』・『リハビリテーション科』</p>
        </div>
      </div>

      <div class="wrap">
        <h3 class="c-contentLowTitle">保険診療</h3>
        <div class="inner">
          <p class="innerText">頭痛外来・もの忘れ外来・漢方外来・認知症検査・脳卒中・パーキンソン病・むずむず脚・めまい・しびれ・舌痛・口腔内灼熱・更年期症状（のぼせ・動悸・いらいら・冷えなど）・骨粗鬆症・動脈硬化・リハビリ（音楽療法）など</p>
        </div>
      </div>

      <div class="wrap">
        <h3 class="c-contentLowTitle">自費診療</h3>
        <div class="inner">
          <p class="innerText">脳ドック・高濃度ビタミンC点滴療法・マイヤーズカクテル・グルタチオン点滴・シチコリン注射・オーソモレキュラー（分子整合栄養医学）・サプリメント・認知症リスク検査（アポリポタンパクEなど）・介護者相談・心理ケアなど</p>
          <h4>クレジットカード利用できます</h4>
          <ul class="list">
            <?php
            $array = [
              'JCB' => ['card-01.png'],
              'VISA' => ['card-02.png'],
              'AMERICAN EXPRESS' => ['card-03.png'],
              'Diners' => ['card-04.png'],
              'DISCOVER' => ['card-05.png'],
              'mastercard' => ['card-06.png'],
              'SAISON CARD' => ['card-07.png'],
              'NISSENREN' => ['card-08.png'],
            ];
            foreach ($array as $key => $value) : ?>
              <li class="listItem">
                <img src="<?php echo get_template_directory_uri(); ?>/images/medical/<?php echo $value[0]; ?>" alt="<?php echo $key; ?>">
              </li>
            <?php endforeach; ?>
          </ul>
        </div>
      </div>


    </div>
  </section>

</main>

<?php get_footer(); ?>