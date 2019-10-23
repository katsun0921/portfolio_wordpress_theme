<section class="js-container l-container" id="work">
  <div class="l-content__block">
    <h2 class="c-heading__blockMain">Work</h2>
    <dl class="p-work__filters">
      <dt class="p-work__filters--title">Filters</dt>
      <dd>
        <ul class="p-work__filterLists">
          <li class="p-work__filterList">All</li>
          <li class="p-work__filterList">Web Design</li>
          <li class="p-work__filterList">JavaScripts</li>
        </ul>
      </dd>
    </dl>
    <section class="p-work__container">
    <?php
      $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
      $work = array(
        'posts_per_page' => 6, 	// 表示する件数
        'orderby'        => 'modified', // 更新日でソート
        'order'          => 'DESC', 	// DESCで最新から表示、ASCで最古から表示
        'category_name'  => 'work', 	// 特定のカテゴリースラッグを指定
        'paged'          => $paged, 	// ページ設定
      );
      $query = new WP_Query($work);
      // max_num_pagesを取得
      $MaxNumPages = $query->max_num_pages;
      $categoryName = $query->category_name;
      if ($query->have_posts()) :
        while ($query->have_posts()) :
          $query->the_post();
    ?>
      <article id="blog-<?php the_ID(); ?>" class="p-work__content"><a href="<?php the_permalink(); ?>">
        <h3 class="p-work__contentHeading"><?php the_title(); ?></h3>
        <p><?php the_excerpt(); ?></p>
        <p class="p-work__contentFilter"><?php echo tag() ?></p>
        </a>
      </article>
      <?php
      endwhile;
    endif;
      wp_reset_postdata();
    ?>
    </section>
  </div>
</section>
