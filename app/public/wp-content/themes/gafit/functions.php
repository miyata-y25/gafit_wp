<?php
/**
 * functions and definitions.
 * 
 * 概要
 * 
 * @package WordPress
 */



/* ---------- アイキャッチ有効化 ---------- */
add_theme_support('post-thumbnails');



/* ---------- カスタム投稿タイプを追加 ---------- */
add_action( 'init', 'create_post_type' );

function create_post_type() {

  register_post_type(
    'topmain',
    array(
      'label' => 'TOPメイン画像',
      'public' => true,
      'has_archive' => false,
      'show_in_rest' => true,
      'menu_position' => 5,
      'supports' => array(
        'title',
      ),
    )
  );

  register_post_type(
    'topcam',
    array(
      'label' => 'TOPキャンペーン',
      'public' => true,
      'has_archive' => false,
      'show_in_rest' => true,
      'menu_position' => 5,
      'supports' => array(
        'title',
        'editor',
      ),
    )
  );

  register_post_type(
    'schedule',
    array(
      'label' => 'レッスンスケジュール',
      'hierarchical' => false, //falseの場合、階層構造なし
      'public' => true, //通常はtrue
      'menu_position' => 5,
    )
  );

  register_post_type(
    'column',
    array(
      'label' => 'コラム',
      'public' => true,
      'has_archive' => true,
      'show_in_rest' => true,
      'menu_position' => 5,
      'supports' => array(
        'title',
        'editor',
        'thumbnail',
        'revisions',
        'excerpt',
      ),
    )
  );

  register_post_type(
    'faq',
    array(
      'label' => 'FAQ',
      'public' => true,
      'has_archive' => false,
      'show_in_rest' => true,
      'menu_position' => 5,
      'supports' => array(
        'title',
      ),
    )
  );

  register_post_type(
    'staff',
    array(
      'label' => 'スタッフ紹介',
      'public' => true,
      'has_archive' => false,
      'show_in_rest' => true,
      'menu_position' => 5,
      'supports' => array(
        'title',
      ),
    )
  );

  register_post_type(
    'instructor',
    array(
      'label' => 'インストラクター紹介',
      'public' => true,
      'has_archive' => false,
      'show_in_rest' => true,
      'menu_position' => 5,
      'supports' => array(
        'title',
      ),
    )
  );

}


/**
* カスタム投稿タイプの表示件数を変更
*/
function change_posts_per_page($query) {
  // 管理画面での表示件数は変更する必要がなれればreturn;まで入れる
  if (is_admin() || !$query->is_main_query())
      return;
  //カスタム投稿タイプcolumnのアーカイブページかタクソノミーcolumn_catの一覧ページならば
  if ($query->is_post_type_archive('column') || $query->is_tax('column_cat')) {
      $query->set('posts_per_page', 9); // posts_per_pageを20に設定
  }
}
add_action('pre_get_posts', 'change_posts_per_page');


?>