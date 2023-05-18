<?php get_header(); ?>

<main class="privacyMain">
  <?php include('templates/template-low-mv.php'); ?>

  <section class="privacyBase">
    <div class="container">
      <h2 class="c-sectionLowTitle">プライバシーポリシー</h2>
      <p class="desc">
        当院は患者様の個人情報保護に全力で取り組んでいます。<br>
        当院は、個人情報を下記の目的に利用し、その取り扱いには細心の注意を払っています。個人情報の取り扱いについてお気づきの点は、窓口までお気軽にお申し出ください。
      </p>

      <div class="wrap">
        <h3 class="c-contentLowTitle">当院における個人情報の利用目的</h3>
        <div class="inner">
          <h4>窓口受付時間</h4>
          <ul class="innerList">
            <?php $array = [
              1 => ['当院での医療サービスの提供'],
              2 => ['他の病院、診療所、助産所、薬局、訪問看護ステーション、介護サービス事業者等との連携'],
              3 => ['他の医療機関等からの照会への回答'],
              4 => ['患者様の診療のため、外部の医師等の意見・助言を求める場合'],
              5 => ['検体検査業務の委託その他の業務委託'],
              6 => ['御家族への病状説明その他、患者様への医療提供に関する利用'],
            ];
            foreach ($array as $key => $value) : ?>
              <li class="innerListItem"><?php echo $value[0]; ?></li>
            <?php endforeach; ?>
          </ul>
        </div>

        <div class="inner">
          <h4>診療費請求のための事務</h4>
          <ul class="innerList">
            <?php $array = [
              1 => ['当院での医療・介護・労災保険、公費負担医療に関する事務およびその委託'],
              2 => ['審査支払機関へのレセプトの提出'],
              3 => ['公費負担医療に関する行政機関等へのレセプトの提出、照会への回答'],
              4 => ['その他、医療・介護・労災保険、および公費負担医療に関する診療費請求のための利用'],
            ];
            foreach ($array as $key => $value) : ?>
              <li class="innerListItem"><?php echo $value[0]; ?></li>
            <?php endforeach; ?>
          </ul>
        </div>

        <div class="inner">
          <h4>当院の管理運営業務</h4>
          <ul class="innerList">
            <?php $array = [
              1 => ['会計・経理'],
              2 => ['医療事故等の報告'],
              3 => ['当該患者様の医療サービスの向上'],
              4 => ['入退院等の病棟管理'],
              5 => ['その他、当院の管理運営業務に関する利用'],
            ];
            foreach ($array as $key => $value) : ?>
              <li class="innerListItem"><?php echo $value[0]; ?></li>
            <?php endforeach; ?>
          </ul>
        </div>

        <div class="inner">
          <h4>その他業務</h4>
          <ul class="innerList">
            <?php $array = [
              1 => ['企業等から委託を受けて行う健康診断等における、企業等へのその結果の通知'],
              2 => ['医師賠償責任保険などに係る、医療に関する専門の団体、保険会社等への相談又は届出等'],
              3 => ['医療・介護サービスや業務の維持・改善のための基礎資料'],
              4 => ['当院内において行われる医療実習への協力'],
              5 => ['医療の質の向上を目的とした当院内での症例研究'],
              6 => ['外部監査期間への情報提供'],
            ];
            foreach ($array as $key => $value) : ?>
              <li class="innerListItem"><?php echo $value[0]; ?></li>
            <?php endforeach; ?>
          </ul>
        </div>

        <div class="inner">
          <h4>付記</h4>
          <ul class="innerList">
            <?php $array = [
              1 => ['上記のうち、他の医療機関等への情報提供について同意しがたい事項がある場合には、その旨をお申し出ください。'],
              2 => ['お申し出がないものについては、同意していただけたものとして取り扱わせていただきます。'],
              3 => ['これらのお申し出は後からいつでも撤回、変更等をすることが可能です。'],
            ];
            foreach ($array as $key => $value) : ?>
              <li class="innerListItem"><?php echo $value[0]; ?></li>
            <?php endforeach; ?>
          </ul>
        </div>
      </div>

    </div>
  </section>


  <section class="privacyAccess">
    <div class="container">
      <h2 class="c-sectionLowTitle">アクセス解析ツールについて</h2> 
      <div class="textBox">
        <p>当サイトでは、Googleによるアクセス解析ツール「Googleアナリティクス」を利用しています。</p>
        <p>このGoogleアナリティクスはアクセス情報の収集のためにCookieを使用しています。このアクセス情報は匿名で収集されており、個人を特定するものではありません。</p>
        <p>GoogleアナリティクスのCookieは、26ヶ月間保持されます。この機能はCookieを無効にすることで収集を拒否することが出来ますので、お使いのブラウザの設定をご確認ください。</p>
        <p>Googleアナリティクスの利用規約に関して確認したい場合は、こちらをクリックしてください。また、「ユーザーが Google パートナーのサイトやアプリを使用する際の Google によるデータ使用」に関して確認したい場合は、ここをクリックしてください。</p>
        <p>令和3年4月1日　改訂</p>
      </div>
    </div>
  </section>

</main>

<?php get_footer(); ?>