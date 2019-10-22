<?php get_header(); ?>
<?php get_template_part( '_top-open' , false) ?>
<div class="l-content__blocks is-show" id="js-content">
  <nav class="l-menu__container" id="js-menu"><span class="l-menu__status">Portfolio Katsumasa Sato!</span>
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
        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
        $blog = array(
          'posts_per_page' => 4, 	// 表示する件数
          'orderby'        => 'modified', // 更新日でソート
          'order'          => 'DESC', 	// DESCで最新から表示、ASCで最古から表示
          'category_name'  => 'blog', 	// 特定のカテゴリースラッグを指定
          'paged'          => $paged, 	// ページ設定
        );
        $query = new WP_Query($blog);
        // max_num_pagesを取得
        $MaxNumPages = $query->max_num_pages;
        $categoryName = $query->category_name;
        if ($query->have_posts()) :
          while ($query->have_posts()) :
            $query->the_post();
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
          endwhile;
        endif;
        wp_reset_postdata();
      ?>
    </div>

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
