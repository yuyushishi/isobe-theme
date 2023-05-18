<?php


// CSS
function mytheme_enqueue()
{

  //テーマのCSS
  wp_enqueue_style('mytheme-style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'mytheme_enqueue');


//グーテンベルクCSS
add_action('after_setup_theme', 'nxw_setup_theme');
function nxw_setup_theme()
{
  add_theme_support('wp-block-styles');
}


//ウィジェット
function my_theme_widgets_init()
{
  register_sidebar(array(
    'name' => 'Main Sidebar',
    'id' => 'main-sidebar',
  ));
}
add_action('widgets_init', 'my_theme_widgets_init');


//siteurl
add_shortcode('surl', 'shortcode_surl');
function shortcode_surl()
{
  return site_url();
}

// ショートコード設定
function siteurl_shortcode()
{
  return site_url();
}
add_shortcode('siteurl', 'siteurl_shortcode');

function themeurl_shortcode()
{
  return get_bloginfo('template_url');
}
add_shortcode('themeurl', 'themeurl_shortcode');


// アイキャッチ画像を有効にする。
add_theme_support('post-thumbnails');





/* the_archive_title 余計な文字を削除 */
add_filter('get_the_archive_title', function ($title) {
  if (is_category()) {
    $title = single_cat_title('', false);
  } elseif (is_tag()) {
    $title = single_tag_title('', false);
  } elseif (is_tax()) {
    $title = single_term_title('', false);
  } elseif (is_post_type_archive()) {
    $title = post_type_archive_title('', false);
  } elseif (is_date()) {
    $title = get_the_time('Y年n月');
  } elseif (is_search()) {
    $title = '検索結果：' . esc_html(get_search_query(false));
  } elseif (is_404()) {
    $title = '「404」ページが見つかりません';
  } else {
  }
  return $title;
});

// wp_nav_menuのliにclass追加
function add_additional_class_on_li($classes, $item, $args)
{
  if (isset($args->add_li_class)) {
    $classes['class'] = $args->add_li_class;
  }
  return $classes;
}
add_filter('nav_menu_css_class', 'add_additional_class_on_li', 1, 3);



// パンくず
function output_breadcrumb()
{
  $home = '<li><a href="' . get_bloginfo('url') . '">トップ</a></li>';
  echo '<ul class="breadcrumb">';

  // トップページの場合
  if (is_front_page()) {

    // カテゴリーページの場合
  } else if (is_category()) {
    $cat = get_queried_object();
    $cat_id = $cat->parent;
    $cat_list = array();
    while ($cat_id != 0) {
      $cat = get_category($cat_id);
      $cat_link = get_category_link($cat_id);
      array_unshift($cat_list, '<li><a href="' . $cat_link . '">' . $cat->name . '</a></li>');
      $cat_id = $cat->parent;
    }
    echo $home;
    foreach ($cat_list as $value) {
      echo $value;
    }
    the_archive_title('<li>', '</li>');

    // アーカイブページの場合
  } else if (is_archive()) {
    echo $home;
    the_archive_title('<li>', '</li>');

    // 投稿ページの場合
  } else if (is_single()) {
    $cat = get_the_category();
    if (isset($cat[0]->cat_ID)) $cat_id = $cat[0]->cat_ID;
    $cat_list = array();
    while ($cat_id != 0) {
      $cat = get_category($cat_id);
      $cat_link = get_category_link($cat_id);
      array_unshift($cat_list, '<li><a href="' . $cat_link . '">' . $cat->name . '</a></li>');
      $cat_id = $cat->parent;
    }
    echo $home;
    foreach ($cat_list as $value) {
      echo $value;
    }
    the_title('<li>', '</li>');

    // 固定ページの場合
  } else if (is_page()) {
    echo $home;
    the_title('<li>', '</li>');

    // 検索結果の場合
  } else if (is_search()) {
    echo $home;
    echo '<li>「' . get_search_query() . '」の検索結果</li>';

    // 404ページの場合
  } else if (is_404()) {
    echo $home;
    echo '<li>ページが見つかりません</li>';
  }
  echo '</ul>';
}




add_filter('mwform_choices_mw-wp-form-803', 'mwform_add_signature_options', 10, 2);
function mwform_add_signature_options($children, $atts)
{
  // 年設定
  if ($atts['name'] === 'birthday_year') {
    for ($i = 1920; $i <= date('Y'); $i++) {
      $children[$i] = $i;
    }
  }

  // 月設定
  if ($atts['name'] === 'birthday_month') {
    for ($i = 1; $i <= 12; $i++) {
      $children[$i] = $i;
    }
  }

  // 日設定
  if ($atts['name'] === 'birthday_day') {
    for ($i = 1; $i <= 31; $i++) {
      $children[$i] = $i;
    }
  }

  return $children;
}




//メニュー表示設定
/*
function remove_menus() {
  remove_menu_page( 'index.php' ); // ダッシュボード
  remove_menu_page( 'edit.php' ); // 投稿
  remove_menu_page( 'upload.php' ); // メディア
  remove_menu_page( 'edit.php?post_type=page' ); // 固定
  remove_menu_page( 'edit-comments.php' ); // コメント
  remove_menu_page( 'themes.php' ); // 外観
  remove_menu_page( 'plugins.php' ); // プラグイン
  remove_menu_page( 'users.php' ); // ユーザー
  remove_menu_page( 'tools.php' ); // ツール
  remove_menu_page( 'options-general.php' ); // 設定
}
add_action( 'admin_menu', 'remove_menus' );
*/

//投稿名設定
/*
function change_post_menu_label() {
	global $menu;
	global $submenu;
	$menu[5][0] = 'News';
	$submenu['edit.php'][5][0] = 'News一覧';
	$submenu['edit.php'][10][0] = '新しいNews';
	$submenu['edit.php'][16][0] = 'タグ';
}
function change_post_object_label() {
	global $wp_post_types;
	$labels = &$wp_post_types['post']->labels;
	$labels->name = 'News';
	$labels->singular_name = 'News';
	$labels->add_new = _x('追加', 'News');
	$labels->add_new_item = 'Newsの新規追加';
	$labels->edit_item = 'Newsの編集';
	$labels->new_item = '新規News';
	$labels->view_item = 'Newsを表示';
	$labels->search_items = 'Newsを検索';
	$labels->not_found = '記事が見つかりませんでした';
	$labels->not_found_in_trash = 'ゴミ箱に記事は見つかりませんでした';
}
add_action( 'init', 'change_post_object_label' );
add_action( 'admin_menu', 'change_post_menu_label' );
*/

//管理ツールバー メニュー表示設定
/*
function mytheme_remove_item( $wp_admin_bar ) {
	$wp_admin_bar->remove_node('wp-logo'); //wordpressロゴ
	$wp_admin_bar->remove_node('site-name'); //サイト名
	$wp_admin_bar->remove_node('updates'); //アップデート通知
	$wp_admin_bar->remove_node('comments'); //コメント
	$wp_admin_bar->remove_node('new-content'); //新規追加
	$wp_admin_bar->remove_node('new-media'); // メディア
	$wp_admin_bar->remove_node('new-link'); // リンク
	$wp_admin_bar->remove_node('new-page'); // 個別ページ
	$wp_admin_bar->remove_node('new-user'); // ユーザー
	$wp_admin_bar->remove_node('view'); //投稿を表示
	$wp_admin_bar->remove_node('archive'); //投稿一覧を表示
	$wp_admin_bar->remove_node('my-account'); //右のプロフィール欄全体
	$wp_admin_bar->remove_node('edit-profile'); // プロフィール編集
	$wp_admin_bar->remove_node('user-info'); // ユーザー
	$wp_admin_bar->remove_node('logout'); //ログアウト
}
add_action( 'admin_bar_menu', 'mytheme_remove_item', 1000 );
*/

//管理ツールバー 表示設定
/*
add_filter('show_admin_bar', '__return_false');
*/