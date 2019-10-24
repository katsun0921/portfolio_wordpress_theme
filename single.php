<?php get_header(); ?>
<?php
if(have_posts()) {
  while (have_posts()) {
    the_post();
    if ( in_category(array('work')) ) {  // スラッグが「work」の時に、work.php を読み込む
      get_template_part( '_work_single' , false );
    } elseif ( in_category( array('blog') )  )  { // スラッグが「blog」の時に、blog.php を読み込無
      get_template_part( '_blog_single' , false );
    } else { // スラッグが「work」「blog」以外の時に、single.php を読み込みます。
      get_template_part( 'single' , false);
    }
  }
}
?>
<?php get_footer(); ?>
