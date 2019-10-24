<?php get_header(); ?>
<?php get_template_part( '_top-open' , false) ?>
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
<?php
  if($path) {
    if ( $path === 'blog' ) {  // パスの第1階層が「blog」の時に、_blog_list.php を読み込む
      get_template_part( '_blog_list' , false );
    }
  }
?>
</div>
<?php get_footer(); ?>
