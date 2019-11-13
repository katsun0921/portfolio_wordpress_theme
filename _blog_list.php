<article class="js-container l-container" id="blog">
  <div class="l-content__block">
    <?php $tag = ($path) ? 'h1' : 'h2'; ?>
    <<?php echo $tag ?> class="c-heading__blockMain">Blog</<?php echo $tag ?>>
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
      $categoryName = $blog['category_name'];
      if ($query->have_posts()) :
        while ($query->have_posts()) :
          $query->the_post();
    ?>
    <article id="blog-<?php the_ID(); ?>" class="p-blog__post">
      <h3 class="p-blog__postTitle"><?php the_title(); ?></h3>
      <p class="p-blog__postInfo">
        <time datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y/m/d'); ?></time><span><?php echo tag() ?></span>
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
    <?php
    /* ページャーの表示 */
    if (function_exists('pagination')) :
      pagination($MaxNumPages, get_query_var('paged'), $categoryName);
    endif;
    ?>

  </div>
</article>
