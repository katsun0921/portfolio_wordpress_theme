<?php


function replace($i) {
  if(is_front_page()) {
    $url = (empty($_SERVER['HTTPS']) ? 'http://' : 'https://').$_SERVER['HTTP_HOST'];
return str_replace($url, $url."/blog", get_pagenum_link($i));
} else {
  return get_pagenum_link($i);
  }
}

/**
* ページネーション出力関数
* $paged : 現在のページ
* $pages : 全ページ数
* $range : 左右に何ページ表示するか
* $show_only : 1ページしかない時に表示するかどうか
*/
function pagination( $pages, $paged, $range = 2, $show_only = false ) {

  $pages = ( int ) $pages;    //float型で渡ってくるので明示的に int型 へ
  $paged = $paged ?: 1;       //get_query_var('paged')をそのまま投げても大丈夫なように

  //表示テキスト
  $text_first   = "最初へ";
  $text_before  = "Previous";
  $text_next    = "Next";
  $text_last    = "最後へ";

  if ( $show_only && $pages === 1 ) {
    // １ページのみで表示設定が true の時
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
      echo '<li><a class="c-pagination__link" href="', replace(1) ,'">', $text_first ,'</a></li>';
      }
    if ( $paged > 1 ) {
      // 「前へ」 の表示
      echo '<a class="c-pagination__link" href="', replace( $paged - 1 ) ,'">', $text_before ,'</a>';
    }
    for ( $i = 1; $i <= $pages; $i++ ) {

      if ( $i <= $paged + $range && $i >= $paged - $range ) {
        // $paged +- $range 以内であればページ番号を出力
        if ( $paged === $i ) {
            echo '<li><span class="c-pagination__link is-active">', $i ,'</span></li>';
        } else {
            echo '<li><a class="c-pagination__link" href="', replace( $i ) ,'">', $i ,'</a></li>';
        }
      }

    }
    if ( $paged < $pages ) {
        // 「次へ」 の表示
        echo '<li><a class="c-pagination__link" href="', replace( $paged + 1 ) ,'">', $text_next ,'</a></li>';
    }
    if ( $paged + $range < $pages ) {
        // 「最後へ」 の表示
        echo '<li><a class="c-pagination__link" href="', replace($pages) ,'">', $text_last ,'</a></li>';
    }
    echo '</ul></div>';
  }
}
