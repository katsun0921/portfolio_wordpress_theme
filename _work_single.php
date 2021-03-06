<?php get_template_part( '_top-open' , false) ?>
<div class="l-content__blocks is-show" id="js-content">
<?php get_template_part( '_nav-open' , false) ?>
<section class="l-container is-show" id="resume">
    <div class="l-content__block">
      <article id="blog-<?php the_ID(); ?>" class="p-blog__post">
        <h1 class="c-heading__middle"><?php the_title() ?>
          <span class="c-heading__sub">
          <time datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y/m/d'); ?></time><span>
            <?php
            $tags = get_the_tags();
            if($tags) {
              foreach ( $tags as $tag ) {
              echo $tag->name;
              }
            }
            ?></span>
          </span>
        </h1>
        <div class="p-blog__postBody">
          <?php the_content(); ?>
        </div>
        <div class="c-wrap--center u-mt--25">
          <a href="/#work" class="c-btn c-btn--block">WORK一覧に戻る</a>
        </div>
      </article>
      <div class="c-wrap--center">
        <dl class="c-wrap--rowCenter">
          <dt><span class="u-va--middle">Share this:</span></dt>
          <dd>
            <ul class="c-wrap--rowCenter">
              <li><a class="c-btn__socialBtnList" href="#"><img src="<?php echo get_template_directory_uri() ?>/images/icon/icon_facebook.png" alt="facebook"></a></li>
              <li><a class="c-btn__socialBtnList" href="#"><img src="<?php echo get_template_directory_uri() ?>/images/icon/icon_twitter.png" alt="twitter"></a></li>
            </ul>
          </dd>
        </dl>
      </div>
    </div>

<?php
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
$work   = array(
  'posts_per_page' => 2,                  // 表示する件数
  'orderby'        => 'modified',         // 更新日でソート
  'order'          => 'DESC',             // DESCで最新から表示、ASCで最古から表示
  'category_name'  => 'work',             // 特定のカテゴリースラッグを指定
  'paged'          => $paged,             // ページ設定
  'post__not_in'   => array(get_the_ID()) // 現在開いているページを除外
);
$query = new WP_Query($work);
// max_num_pagesを取得
$MaxNumPages = $query->max_num_pages;
if ($query->have_posts()) :
  while ($query->have_posts()) {
    $query->the_post();
?>

	<?php the_content(); ?>
<?php
    }
endif;
wp_reset_postdata();
?>

    </section>
  </div>
</div>
