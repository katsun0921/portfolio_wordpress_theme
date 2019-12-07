<?php

/**
* ページネーション出力関数
* $paged : 現在のページ
* $pages : 全ページ数
* $range : 左右に何ページ表示するか
* $show_only : 1ページしかない時に表示するかどうか
*/
$url = (empty($_SERVER['HTTPS']) ? 'http://' : 'https://') . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
$fullPath = parse_url($url);
$path = explode('/', $fullPath['path'])[1]; // urlから第1階層のパス名を取得

// 指定のディレクトリ以外はTOPへリダイレクト
if($path) {
  if($path !== 'blog' && $path !== 'work' && $path !== 'wp-login.php' && $path !== 'wp-admin') {
    wp_safe_redirect( home_url('/'), 301 );
    exit;
  }
}

function pagination( $pages, $paged, $category ) {
  global $path;
  if($path) {
    $category = $path;
  }
  $range = 2;
  $show_only = false;
  $pages = ( int ) $pages;    //float型で渡ってくるので明示的に int型 へ
  $paged = $paged ?: 1;       //get_query_var('paged')をそのまま投げても大丈夫なように
  $categoryPath = '/'.$category.'/page/';
  //表示テキスト
  $text_first   = "最初へ";
  $text_before  = "Previous";
  $text_next    = "Next";
  $text_last    = "最後へ";
  if ( $show_only && $pages === 1 ) { // １ページのみで表示設定が true の時
    echo '<div class="c-pagination"><span class="c-pagination__link is-active">1</span></div>';
    return;
  }
  if ( $pages === 1 ) { // １ページのみで表示設定もない場合
    return;
  }
  if ( 1 !== $pages ) {
    echo '<div class="c-pagination"><ul class="c-pagination__linkList">';
    if ( $paged > $range + 1 ) {
      // 「最初へ」 の表示
      echo '<li><a class="c-pagination__link" href="', $categoryPath.'1' ,'">', $text_first ,'</a></li>';
      }
    if ( $paged > 1 ) {
      // 「前へ」 の表示
      echo '<li><a class="c-pagination__link" href="', $categoryPath.( $paged - 1 ) ,'">', $text_before ,'</a></li>';
    }
    for ( $i = 1; $i <= $pages; $i++ ) {
      if ( $i <= $paged + $range && $i >= $paged - $range ) {
        // $paged +- $range 以内であればページ番号を出力
        if ( $paged === $i ) {
            echo '<li><span class="c-pagination__link is-active">', $i ,'</span></li>';
        } else {
            echo '<li><a class="c-pagination__link" href="', $categoryPath.$i ,'">', $i ,'</a></li>';
        }
      }
    }
    if ( $paged < $pages ) {
        // 「次へ」 の表示
        echo '<li><a class="c-pagination__link" href="', $categoryPath.($paged + 1) ,'">', $text_next ,'</a></li>';
    }
    if ( $paged + $range < $pages ) {
        // 「最後へ」 の表示
        echo '<li><a class="c-pagination__link" href="', $categoryPath.$pages ,'">', $text_last ,'</a></li>';
    }
    echo '</ul></div>';
  }
}
function tag() { // postのtagを取得
  $tags = get_the_tags();
  if($tags) {
    foreach ( $tags as $tag ) {
    echo $tag->name;
    }
  }
}

// セキュリティ対策
/*
 * WordPressのバージョン情報を非表示
 */
remove_action('wp_head','wp_generator');


function remove_css_js_ver2( $src ) {
  if ( strpos( $src, 'ver=' ) )
      $src = remove_query_arg( 'ver', $src );
  return $src;
}
add_filter( 'style_loader_src', 'remove_css_js_ver2', 9999 );
add_filter( 'script_loader_src', 'remove_css_js_ver2', 9999 );
