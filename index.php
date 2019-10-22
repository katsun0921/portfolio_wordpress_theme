<?php get_header(); ?>
<div class="l-container__background--overlay"></div>
<div class="l-container">
  <section class="js-topName p-top__name is-rotation">
    <!-- クリック時に.is-reverseを付与-->
    <div class="js-topName p-top__nameContainer is-rotation">
      <h1 class="p-top__headingMain">Katsumasa<br>Sato<span class="p-top__headingMain--sub">WEB DEVELOPER</span></h1>
      <!-- スキルシートへリンクを貼る--><a class="p-top__nameSkillLink" href="#">SKILL SHEET</a>
    </div>
  </section>
</div>
<div class="l-content__blocks is-show" id="js-content">
  <nav class="l-menu__container" id="js-menu"><span class="l-menu__status">Portfolio Katsumasa Sato</span>
    <ul class="l-menuInline">
      <li>
        <button class="js-btnResume l-menuInline__list">Resume</button>
      </li>
      <li>
        <button class="js-btnWork l-menuInline__list">Work</button>
      </li>
      <li>
        <button class="js-btnBlog l-menuInline__list">Blog</button>
      </li>
      <li>
        <button class="l-menuInline__list" id="js-btnCloseContent"><span class="fas fa-times"></span></button>
      </li>
    </ul>
  </nav>
  <section class="js-container l-container is-show" id="blog">
    <div class="l-content__block">
      <h2 class="c-heading__blockMain">Blog</h2>
      <?php
        $blog = array(
          'posts_per_page' => 4, // 表示する件数
          'orderby' => 'date', // 日付でソート
          'order' => 'DESC', // DESCで最新から表示、ASCで最古から表示
          'category_name' => 'blog' // 表示したいカテゴリーのスラッグを指定
        );
        $posts = get_posts( $blog );
        if($posts):
          foreach($posts as $post) : setup_postdata( $post );
      ?>
      <article id="blog-<?php the_ID(); ?>" class="p-blog__post">
        <h3 class="p-blog__postTitle"><?php the_title(); ?></h3>
        <p class="p-blog__postInfo">
          <time datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y/m/d'); ?></time><span>
            <?php
              $tags = get_the_tags();
              if($tags) {
                foreach ( $tags as $tag ) {
                  echo $tag->name;
                }
              }
            ?></span>
        </p>
        <div class="p-blog__postBody">
          <?php the_excerpt(); ?>
        </div>
        <a href="<?php the_permalink(); ?>" class="c-btn c-btn--block u-width--25">READ MORE</a>
      </article>
      <?php
          endforeach;
        endif;
        wp_reset_postdata();
      ?>
      <div class="c-pagination">
        <ul class="c-pagination__linkList">
          <li><a class="c-pagination__link" href="#">Previous</a></li>
          <li><a class="c-pagination__link" href="#">1</a></li>
          <li><a class="c-pagination__link is-active" href="#">2</a></li>
          <li><a class="c-pagination__link" href="#">3</a></li>
          <li><a class="c-pagination__link" href="#">Next</a></li>
        </ul>
      </div>
    </div>
    Blogカテゴリーページネーション
    <ul class="pagination">
<?php
$pagination = 5;    // 1ページに表示するページ送りの最大数

$cat = get_the_category();
$cat = $cat[0];
$catname = get_cat_name($cat->term_id);     // カテゴリー名を取得
$catid = get_cat_ID($catname);              // カテゴリーIDを取得

$post_id = get_the_ID();    // 現在の投稿IDを取得
$post_id_array = array();   // 取得したくない投稿情報ID（複数指定する場合は,で区切る）

// 投稿記事のカテゴリ内で新着から何番目かを確認
$args = array( 'posts_per_page' => -1, 'category' => $catid, 'exclude' => $post_id_array );
$posts = get_posts( $args );
$posts_ids = array();

foreach ( $posts as $post ) {
    $posts_ids[] += $post->ID;
}

$post_current = array_search($post_id, $posts_ids);     // 現在の記事番号（順番）を取得
$post_last = count($posts_ids);                         // 同じカテゴリー内の記事数
$post_last_group = $post_last - $pagination;            // 最後尾のページ送りグループ
$post_last_switch = $post_last - ($pagination - 1);     // 最後の5つに切り替えるする記事番号

// 最大値が1〜4まで前後のリンク数が異なる
switch ($pagination) {
    case 1:
        $post_prev = $post_current;
        $post_next = $post_current + 1;
        break;

    case 2:
        $post_prev = $post_current;
        $post_next = $post_current + 2;
        break;

    case 3:
        $post_prev = $post_current - 1;
        $post_next = $post_current + 2;
        break;

    case 4:
        $post_prev = $post_current - 1;
        $post_next = $post_current + 3;
        break;

    default:
        $post_prev = $post_current - 2;
        $post_next = $post_current + 3;
        break;
}

wp_reset_postdata();

// 「次へ（新しい記事へ）」リンクの設定
if ($post_last >= $pagination && $post_current > ($pagination - 2)) {
    if ($pagination != $post_last) {
        echo '<li><a href="'.get_permalink($posts_ids[0]).'">&laquo;&nbsp;最新</li>';
        next_post_link('<li>%link</li>','&laquo;&nbsp;次へ',true);
    }
}

// 記事数が最大数以上ある場合
// 例）最大数が5個で、記事が5個以上ある場合
if($post_last >= $pagination) {
    if ($post_current < ($pagination - 1)) {
        $is_first = true;

        for ($i=0; $i < $pagination; $i++) {
            if ($i == $post_current) {
                // 現在のページ
                echo '<li class="active"><a href="#">'.($i+1).'</a></li>';
            } else {
                // その他のページ
                echo '<li><a href="'.get_permalink($posts_ids[$i]).'">'.($i+1).'</a></li>';
            }
        }
    } else if ($post_current >= $post_last_switch) {
        $is_last = true;

        for ($i=$post_last_group; $i < $post_last; $i++) {
            if ($i == $post_current) {
                // 現在のページ
                echo '<li class="active"><a href="#">'.($i+1).'</a></li>';
            } else {
                // その他のページ
                echo '<li><a href="'.get_permalink($posts_ids[$i]).'">'.($i+1).'</a></li>';
            }
        }
    } else {
        for ($i=$post_prev; $i < $post_next; $i++) {
            if ($i == $post_current) {
                // 現在のページ
                echo '<li class="active"><a href="#">'.($i+1).'</a></li>';
            } else {
                // その他のページ
                echo '<li><a href="'.get_permalink($posts_ids[$i]).'">'.($i+1).'</a></li>';
            }
        }
    }
} // ここまで / 記事数が最大数以上ある場合

// 記事数が最大数未満の場合
else {
    for ($i=0; $i < $post_last; $i++) {
        if ($i == $post_current) {
                // 現在のページ
            echo '<li class="active"><a href="#">'.($i+1).'</a></li>';
        } else {
                // その他のページ
            echo '<li><a href="'.get_permalink($posts_ids[$i]).'">'.($i+1).'</a></li>';
        }
    }
} // ここまで / 記事数が最大数未満の場合

// 「前へ（古い記事へ）」リンクの設定
if ($post_last >= $pagination && $is_last == false && $post_next <= $post_last && $pagination != $post_last) {
    if ($pagination == 2 && $post_current != ($post_last - 2)) {
        previous_post_link('<li>%link</li>','前へ&nbsp;&raquo;',true);
        echo '<li><a href="'.get_permalink(end($posts_ids)).'">最古&nbsp;&raquo;</li>';
    } else if($pagination != 2) {
        previous_post_link('<li>%link</li>','前へ&nbsp;&raquo;',true);
        echo '<li><a href="'.get_permalink(end($posts_ids)).'">最古&nbsp;&raquo;</li>';
    }
}
?>

<?php
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
$arg   = array(
	'posts_per_page' => 2, 	// 表示する件数
	'orderby'        => 'modified', // 更新日でソート
	'order'          => 'DESC', 	// DESCで最新から表示、ASCで最古から表示
	'category_name'  => 'blog', 	// 特定のカテゴリースラッグを指定
	'paged'          => $paged, 	// ページ設定
);
$query = new WP_Query($arg);
// max_num_pagesを取得
$MaxNumPages = $query->max_num_pages;
if ($query->have_posts()) :
    while ($query->have_posts()) {
        $query->the_post();
?>
        // ここに投稿記事を表示する処理をかく
	<?php the_content(); ?>
<?php
    }
endif;
wp_reset_postdata();
?>

<?php
/* 以下、ページャーの表示 */
if (function_exists('pagination')) :
    pagination($MaxNumPages, get_query_var('paged'));
endif;
?>
</ul>
  </section>
</div>
<?php get_footer(); ?>
