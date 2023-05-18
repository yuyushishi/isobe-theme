<?php get_header(); ?>

<main class="subjectsMain">
  <?php include('templates/template-low-mv.php'); ?>

  <section class="subjectsLink">
    <div class="container">
      <?php
      $array = [
        '頭痛外来' => ['#subjectsHeadache'],
        'もの忘れ外来' => ['#subjectsForget'],
      ];
      foreach ($array as $key => $value) : ?>
        <div class="linkButton">
          <a href="<?php echo esc_url(home_url()); ?>/subjects/<?php echo $value[0]; ?>">
            <span><?php echo $key; ?></span>
            <svg viewBox="0 0 512 384">
              <use xlink:href="<?php echo get_template_directory_uri(); ?>/dist/svg/sprite.svg#angleIcon2"></use>
            </svg>
          </a>
        </div>
      <?php endforeach; ?>
    </div>
  </section>

  <section class="subjectsHeadache" id="subjectsHeadache">
    <div class="container">
      <h2 class="c-sectionLowTitle">頭痛外来</h2>
      <div class="video">
        <iframe src="https://www.youtube.com/embed/udrEPzgIhc8" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      </div>
      <div class="wrap">
        <h3 class="c-contentLowTitle">頭痛について</h3>
        <div class="content">
          <p class="contentText">
            日本人の約4,000万人が慢性頭痛に悩んでおり、高血圧の4,300万人と同じ人数です。<br>
            “頭の痛さ”は外見だけでは伝わりづらく『光・音・臭いが辛い』『立ちくらみがする』『生あくびや涙が多い』『めまい・耳鳴りがする』など、“頭の痛さ”以外の不快感を覚えます。<br>
            さらに現代ではスマホや座り仕事など 【 脳を不快にさせる ＝ 頭痛を起こしやすくする環境 】がたくさんあります。<br>
            「たかが頭痛…」で終わらせないように原因を追究して、しなくてよい我慢を解消するのが「 頭痛外来 」です。
          </p>
        </div>
      </div>

      <div class="wrap">
        <h3 class="c-contentLowTitle">頭痛の種類と原因</h3>
        <p class="text">
          頭痛は 『一次性頭痛』と『二次性頭痛』の大きく二つに分けられます。<br>
          もともと頭痛持ちであっても、いつもとは違う頭痛を感じた時は、クモ膜下出血（二次性頭痛）という危険な病気であることがあり、その症状だけでは見分けることができないこともあります。いつもと違う、突然発症する、気を失うなどが出現したときは、頭部MRI検査が必要となりますので、受診することをお勧めします。
        </p>
        <ul class="list">
          <?php
          $array = [
            '一次性頭痛' => [
              '主に脈打つようにズキンズキンと痛む「片頭痛」<br>
            頭全体が締め付けられるように痛む「緊張型頭痛」<br>
            目の奥がえぐられるように痛む「群発頭痛」<br>
            があります。<br>
            医療機関を受診する頭痛の大多数は「片頭痛」です。'
            ],
            '二次性頭痛' => [
              'くも膜下出血、椎骨動脈解離、脳出血、脳腫瘍、慢性硬膜下血腫、髄膜炎などが原因で起こる頭痛で治療をしなければ命にかかわる可能性のある頭痛です。また、緑内障や側頭動脈炎など命にまでは別条ありませんが、失明などの重篤な障害につながる頭痛もあります。'
            ],
          ];
          foreach ($array as $key => $value) : ?>
            <li class="listItem">
              <h3><?php echo $key; ?></h3>
              <p class="listItem__text"><?php echo $value[0]; ?></p>
            </li>
          <?php endforeach; ?>
        </ul>
        
        <div class="commonFlex">
          <figure class="commonFlex__pic"><img src="<?php echo get_template_directory_uri(); ?>/images/subjects/illust-01.png" alt=""></figure>
          <p class="commonFlex__text">頭痛にはここにある頭痛の他にも様々な種類があり、それぞれ背景や原因が異なります。国際頭痛分類第III版には、384種類記載されています。</p>
        </div>
      </div>

      <div class="wrap">
        <h3 class="c-contentLowTitle">主な一次性頭痛の種類</h3>
        <div class="tableWrap">
          <table>
            <tr>
              <th></th>
              <th>片頭痛</th>
              <th>緊張型頭痛</th>
              <th>群発頭痛</th>
            </tr>
            <?php
            $array = [
              'どんな痛み？' => ['テキストが入ります', 'テキストが入ります', 'テキストが入ります'],
              'どこが痛む？' => ['テキストが入ります', 'テキストが入ります', 'テキストが入ります'],
              '動くと痛い？' => ['テキストが入ります', 'テキストが入ります', 'テキストが入ります'],
              '頭痛以外にどんな症状がある？' => ['テキストが入ります', 'テキストが入ります', 'テキストが入ります'],
              '頭痛の前ぶれは？' => ['テキストが入ります', 'テキストが入ります', 'テキストが入ります'],
              '頭痛のきっかけは？' => ['テキストが入ります', 'テキストが入ります', 'テキストが入ります'],
              '頭痛の持続時間は？' => ['テキストが入ります', 'テキストが入ります', 'テキストが入ります'],
              'どのくらいの頻度で起こる？' => ['テキストが入ります', 'テキストが入ります', 'テキストが入ります'],
            ];
            foreach ($array as $key => $value) : ?>
              <tr>
                <td><?php echo $key; ?></td>
                <td><?php echo $value[0]; ?></td>
                <td><?php echo $value[1]; ?></td>
                <td><?php echo $value[2]; ?></td>
              </tr>
            <?php endforeach; ?>
          </table>
        </div>
      </div>

      <div class="wrap">
        <h3 class="c-contentLowTitle">その他の頭痛の種類</h3>
        <div class="commonContent">
          <?php
          $array = [
            '片頭痛+緊張型頭痛（両方をあわせもつ）' => ['片頭痛と緊張型頭痛が混在し、程度が軽度なときは緊張型頭痛と同等、程度が高度なときは片頭痛が起こり、一元的な発作が起こることが提唱されています。'],
            '薬物乱用頭痛（薬剤の使用過多による頭痛）' => ['頭が痛いからと頭痛薬を飲み過ぎると余計に頭痛がひどくなる場合があります。「薬剤の使用過多による頭痛」は、頭痛薬の乱用による脳の痛み中枢が敏感になり、普通では感じない程度の刺激を痛みとして感じてしまう状態です。また、頭痛への不安から予防的に鎮痛薬を常用すると、さらに痛みに敏感になるという悪循環を起こします。月に10回以上、3ヶ月続けて頭痛薬を飲んでいらっしゃる方は、タバコがやめられなくなる（ニコチン依存）と同様のメカニズムが働いております。ぜひとも受診してください。'],
            '後頭神経痛' => ['後頭部に痛みがある時に『目の奥の痛み』『目の疲れ』『まぶしさ』を同時に自覚することがありますが、これは大後頭神経三叉神経症候群の場合があります。後頭部から側頭部・頭頂部にかけて、皮膚の表面がピリッとした次の瞬間には痛みが止まる特徴があり、髪の毛を触るだけでビリビリ痛みを感じることもあります。「頸椎椎間板ヘルニア」などが原因となり、首の運動に加え、咳（せき）、くしゃみなどで痛みが起こることもあります。'],
          ];
          foreach ($array as $key => $value) : ?>
            <h3><?php echo $key; ?></h3>
            <p><?php echo $value[0]; ?></p>
          <?php endforeach; ?>
        </div>
        <div class="commonFlex">
          <p class="commonFlex__text">頭痛にはここにある頭痛の他にも様々な種類があり、それぞれ背景や原因が異なります。国際頭痛分類第III版には、384種類記載されています。</p>
          <figure class="commonFlex__pic"><img src="<?php echo get_template_directory_uri(); ?>/images/subjects/illust-02.png" alt=""></figure>
        </div>
      </div>

      <div class="wrap">
        <h3 class="c-contentLowTitle">当クリニックの頭痛治療</h3>
        <div class="content">
          <figure class="contentPic"><img src="<?php echo get_template_directory_uri(); ?>/images/subjects/illust-03.png" alt=""></figure>

          <div class="box">
            <p class="contentText">
              “頭痛”は、個人や社会生活に重大な支障となるばかりでなく、人生に大きな支障になっていることもあり、決してひとりで我慢して悩むことはないです。当院は自己治癒力改善のため、妥協のない医療を行います。
            </p>
            <p class="contentText">
              治療としては、予防薬と頓挫薬（発作時に飲むお薬）の二本柱で治療するのが一般的です。片頭痛が長期化すると脳が過敏状態になり、めまいや耳鳴りおよび頭重などの症状も伴ってくるといわれていますので、脳の過敏性を鎮めるお薬や血管を拡げるお薬を内服することで頭痛発作が起こりにくくなるように予防し、発作の頻度や強さを軽減するのが目的です。日頃から予防薬を内服しながら、頭痛発作に対してはピークに達する前に特効薬のトリプタン製剤という頓挫薬で対応することで、速やかに発作を鎮静化します。
            </p>
            <p class="contentText">
              最近発売された、片頭痛発作抑制薬（抗CGRP製剤）の適正使用医療機関として、これまでの、我慢を減らす治療から片頭痛を起こさせない（もし、片頭痛がなかったらどういう生活をしたいか？）治療も行います。
            </p>

            <p class="contentText">
              当クリニックのユニークな治療は、身体の栄養素を分析し、さらに自己治癒力を引き出し、生活習慣の改善・食事指導・多種サプリメント（ビタミンB、鉄・マグネシウム・BCAAなどサプリメント）を患者様に合わせてご提案し、頭痛の苦しみからの解放のため、一緒に考えていきます。
            </p>
            <p class="contentText">
              また、脳腸相関（腸漏れ症候群や腸カンジダ症など）もケアいたします。
            </p>
            <p class="contentText">
              当クリニックでは、頭痛専門医と頭痛ナースおよびドクタークラークと共に、頭痛ダイアリーを用いてご自身の片頭痛のパターンを把握して頂いています。日々の生活に支障を来たさないような生活習慣（片頭痛誘因回避テクニックなど）のアドバイスや服薬指導を行っております。
            </p>
          </div>
        </div>
      </div>

      <div class="wrap">
        <h3 class="c-contentLowTitle">頭痛時の自分でできる対処法</h3>
        <div class="block">
          <?php
          $array = [
            '食べ物やお酒に気を付けて' => [
              '規則正しい食事を心がけ、欠食や血糖低下を避けましょう。<br>
              グルタミン酸の入った料理やアルコール摂取を避け、発酵食品を摂るようにしましょう。<br>
              コーヒーを飲み過ぎない、痛み止めの薬を飲み過ぎないように。<br>
              群発頭痛の方は特に、痛みがある時はお酒を飲まないようにしましょう。',
              'illust-04.png'
            ],
            '体に適切な刺激を与えましょう' => [
              '緊張型様片頭痛の方は、首や肩の筋肉を温めたり、動かしたりしましょう。<br>
              ストレッチ、ヨガ、体操、ツボ（合谷）を押すのも効果的です。<br>
              片頭痛の方は足湯をお勧めいたします。',
              'illust-05.png'
            ],
            '心と体をリラックスさせましょう' => [
              '寝すぎや寝不足にならないように、規則正しい睡眠を心がけましょう。<br>
              寝る前のスマホを止め、口の開いた睡眠をしないように。<br>
              日ごろからの運動、気分転換は大切です。<br>
              ストレスをため過ぎない、人混みを避ける、緑の景色でリラックスするなど生活の工夫を取り入れましょう。',
              'illust-06.png'
            ],
          ];
          foreach ($array as $key => $value) : ?>
            <div class="flex">
              <figure><img src="<?php echo get_template_directory_uri(); ?>/images/subjects/<?php echo $value[1]; ?>" alt=""></figure>
              <div class="inner">
                <h3><?php echo $key; ?></h3>
                <p><?php echo $value[0]; ?></p>
              </div>
            </div>
          <?php endforeach; ?>
        </div>

        <div class="commonLink">
          <a href="https://isobeclinic.jp/wp-content/uploads/2022/08/monshin_zutsu-r4.pdf" target="_blank" rel="noopenner">
            <img src="<?php echo get_template_directory_uri(); ?>/images/subjects/icon-01.png" alt="">
            <span>頭痛外来 問診票ダウンロード</span>
          </a>
        </div>
        <div class="commonLink">
          <a href="#">初めて「頭痛外来」を受診する方へ</a>
        </div>
      </div>
    </div>
  </section>


  <section id="subjectsForget" class="subjectsForget">
    <div class="container">
      <h2 class="c-sectionLowTitle">もの忘れ外来</h2>
      <div class="video">
        <iframe src="https://www.youtube.com/embed/wywjd7N2uvo" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      </div>

      <div class="wrap">
        <h3 class="c-contentLowTitle">認知症とは</h3>
        <div class="commonFlex">
          <figure class="commonFlex__pic"><img src="<?php echo get_template_directory_uri(); ?>/images/subjects/illust-07.png" alt=""></figure>
          <p class="commonFlex__text">
            認知症とは、脳の神経ネットワークが障害され、今までできていたことが少しずつ難しくなり日常生活が困難になる病気のことで、単なるもの忘れとは異なります。一度獲得されて知的機能が、①後天的で、②脳の器質的障害によって、③全般的に低下し、④社会生活や日常生活に支障をきたす、ようになった状態と定義され、気分などの精神疾患や意識障害は除外される。また、先天的障害である「精神遅滞」とも区別される。
          </p>
        </div>
      </div>

      <div class="wrap">
        <h3 class="c-contentLowTitle">認知症の種類</h3>
        <div class="commonContent">
          <?php
          $array = [
            '根治的治療が困難な認知症' => ['神経疾患が変性脱落する疾患', 'アルツハイマー型認知症、レヴィー小体型認知症、前頭側頭型認知症は、神経変性疾患と呼ばれ、脳の神経細胞数が徐々に脱落する病気です。'],
            '予防や治療が可能な認知症' => ['対策をとると改善したり、食い止めることができる疾患', '脳梗塞、脳出血、くも膜下出血などが原因で起こる認知症は、血管性認知症と呼ばれ、高血圧、糖尿病、喫煙などをしっかり治療することで予防や進行の抑制が可能です。頭部外傷によって、頭蓋骨と脳の間に血液がたまる慢性硬膜下血腫や脳室が拡大して起こる正常圧水頭症は、脳神経外科手術によって治療が可能です。また、甲状腺の働きの低下によって起こる「甲状腺機能低下症」は甲状腺ホルモンの補充で、ビタミン欠乏症に起因する認知症はビタミンの補充で、てんかん性認知症は抗てんかん薬で改善します。'],
            '超高齢者に多い進行しない良性の認知症' => ['80歳以降に初発する非アルツハイマー型の良性もの忘れ', '高齢者タウ沈着症という記憶障害や軽度の易怒性があり、アルツハイマー型認知症と紛らわしいほとんど進行しない良性の認知症もある。アルツハイマー型認知症と誤診され抗認知症薬服用で悪化していることがあります。'],
          ];
          foreach ($array as $key => $value) : ?>
            <h3><?php echo $key; ?></h3>
            <h4><?php echo $value[0]; ?></h4>
            <p><?php echo $value[1]; ?></p>
          <?php endforeach; ?>
        </div>
        <img src="<?php echo get_template_directory_uri(); ?>/images/subjects/illust-08.png" alt="" class="obj">
      </div>

      <div class="wrap unit">
        <h3 class="c-contentLowTitle">認知症の症状</h3>
        <div class="unitContent">
          <p class="text">
            中核症状と行動・心理症状（BPSD:behavioral and psychological symptoms of dementia）に分けられる。<br>
            例として、アルツハイマー型認知症では、緩徐に認知機能（中核症状）が低下し、日常生活動作（ADL:activity daily living）に障害が出現すると、急激にBPSDが悪化することが多い。このBPSDの増悪の時に、認知症が発症した考え初診する方が多いです。しかし、実際にはそのもっと前に発症していると考えられます。一方、レヴィー小体型認知症の早期に現れるうつ状態は、BPSDではなく、中核症状でもあります。
          </p>
          <div class="unitContentBg">
            <h4>最近、こんなことで困っていませんか？</h4>
            <ul class="unitContentBg__list">
              <?php
              $array = [
                1 => ['新しいことを覚えられない'],
                2 => ['お買い物で必要なものを必要なだけ買えなくなった'],
                3 => ['怒りっぽくなってきた'],
                4 => ['計算をしたり、時計が読めなくなってきた'],
                5 => ['今日が何年、何月、何日、何曜日かわからない'],
                6 => ['気分が落ち込んだり、やる気がなくなってきた'],
                7 => ['​睡眠中に大声で叫んだり、暴れたりする'],
                8 => ['物事の段取りをつけられない'],
                9 => ['人や小動物など、実際にはいないものが本人には見える'],
                10 => ['​物をしまったことを忘れ、盗られたと思う'],
              ];
              foreach ($array as $key => $value) : ?>
                <li class="unitContentBg__listItem">
                  <img src="<?php echo get_template_directory_uri(); ?>/images/subjects/icon-02.png" alt="">
                  <span><?php echo $value[0]; ?></span>
                </li>
              <?php endforeach; ?>
            </ul>
          </div>
        </div>
      </div>

      <div class="wrap">
        <h3 class="c-contentLowTitle">当クリニックの認知症治療について</h3>
        <div class="content">
          <p class="contentText">
            初診時に、治療しうる認知症として、慢性硬膜下血腫・正常圧水頭症、甲状腺機能低下症・ビタミン欠乏症・てんかん性認知症・うつ病性仮性認知症…などを適時診断と治療いたします。一方、根治できない神経変性性認知症であるアルツハイマー型認知症の場合には、ご本人とご家族の当事者の生活視点で、心理ケアを開始します。抗認知症薬を出して終わりにいたしません。また、栄養障害（低タンパクや鉄欠乏およびビタミン欠乏）に対して栄養素療法、薬原性認知症（胃酸抑制薬や睡眠薬およびコレステロール低下薬）の治療適応をアドバイスします。それから、認知症は、本人と生活を共にする介護者が疲弊しては治療になりません。そこで、コウノメソッドに準じて周辺症状である元気のない方対して漢方薬およびサプリメント（フェルガードなど）を興奮している方には家庭天秤法による介護者保護主義で適量の抗精神病薬（易怒性抑制薬）もご提案いたします。中核症状である記憶障害は実行機能障害に対して、少量の抗認知症薬（コリンエステラーゼ阻害薬・NMDA受容体拮抗薬）を投薬いたします。意識の悪い（せん妄）ことで幻覚や日中に寝て過ごすような場合にはシチコリン注射を、また動作特に歩行が悪い場合にはグルタチオン点滴をお勧めいたします。また、大脳白質に虚血が目立つ場合には、脳血管内皮保護および脳血管拡張作用により、脳血流増加作用の期待できるプレタールを少量併用いたします。また、アパシー（不活発）には、ドパミン賦活作用のあるニセルゴリンを投薬いたします。院内では非薬物療法として、音楽療法や、ご本人と介護者の心理ケアも行います。
          </p>
        </div>
      </div>

      <div class="wrap">
        <h3 class="c-contentLowTitle">認知症検査に関する注意事項</h3>
        <div class="commonFlex">
          <figure class="commonFlex__pic"><img src="<?php echo get_template_directory_uri(); ?>/images/subjects/illust-09.png" alt=""></figure>
          <p class="commonFlex__text">
            認知症の疑いのある方は、認知症だったらどうしよう？と不安に感じ認識できます。しかし、すでに認知症早期の方は病識が低下していることが多く、ご自身は正常だ（正常のはずだ）と認識しています。そこで、ご本人に対して根ほり葉ほり質問し、病人扱いすることは、非常に苦痛です。何故正常な自分が、わざわざ病院まで連れて来られ、医療費を払ってまで検査を受ける必要はないと心から判断してしまいます。すると、次回以降の診療および治療拒否やご家族との関係が悪くなってしまいます。この認識のずれ（病識の低下）が、認知症のもの忘れと加齢によるもの忘れの差です。したがって、当クリニックに受診の際には、病気の診断に来るのではなく、将来の脳卒中やもの忘れの健診のため行く、または、私が○○で受診する付き添いで、一緒に来てほしい、私もメタボの予防しているのと同じく、おじいさんおばあさんも不自由な老後とならないために、脳のバッテリーの治療をしよう！と伝えることが大切です。また、初診では、ご本人の嫌がることはしない方法で診療を行います。その結果、来てよかったと感じてもらい、治療がしやすくいたします。ご本人が嫌がる内容を聞かなければならない場合には、ご本人とご家族とは、別室で診療を行います。
          </p>
        </div>
      </div>

      <div class="wrap group">
        <h3 class="c-contentLowTitle">認知症の患者様のご家族のためのカウンセリング</h3>
        <div class="groupContent">
          <figure class="groupContentPic"><img src="<?php echo get_template_directory_uri(); ?>/images/subjects/illust-10.png" alt=""></figure>
          <p class="groupContentText">
            認知症の治療で最も重要なことは、ご本人とご家族（主に介護者）を生活共同体である当事者と一体とすることです。このように病気を中心にせず、当事者を主体した視点で、病気は治らないから駄目だということをやめ、経験として持っている特技や個性（残存機能）を生活に活かし、ご家族とともに豊かに人生を送ることが大切です。この前提として、当事者の心理ケアがあります。早期診断したものの、根治術がないと聞くと、絶望したり、認知症になると何もわからないと過剰なレッテル（偏見）とつけてしまうことがあるのです。ご家族の多くは、認知症を否定しがちです。ここで混乱を生じます。しかし、諦めとともに受容的見地で前進していけます。認知症は不幸だと決めつけずに、忘れる力（老人力）がついて新鮮な気持ちで人生を歩めて良い（第二の青春が訪れる）、視点を変えれば、住み慣れた地域において馴染みの人間関係で幸せな人生も不可能ではありません。
          </p>
        </div>
        <div class="commonLink">
          <a href="https://isobeclinic.jp/wp-content/uploads/2022/08/monshin_monowasure.pdf" target="_blank" rel="noopenner">
            <img src="<?php echo get_template_directory_uri(); ?>/images/subjects/icon-01.png" alt="">
            <span>もの忘れ外来 問診票ダウンロード</span>
          </a>
        </div>
        <div class="commonLink">
          <a href="#">初めて「もの忘れ外来」を受診する方へ</a>
        </div>
      </div>
  </section>

  <?php include('templates/template-map.php'); ?>
</main>

<?php get_footer(); ?>