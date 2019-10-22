<?php get_header(); ?>
<?php
if(have_posts()) {
  while (have_posts()) {
    the_post();
    if ( in_category(array('work')) ) {  // スラッグ（work）またはカテゴリーID（10）を指定します。
      get_template_part( 'work' , false ); // スラッグが「work」の時に、work.php を読み込みます。
    } elseif ( in_category( array('blog') )  )  { // スラッグ（blog）またはカテゴリーID（9）を指定します。
      get_template_part( 'blog' , false ); // スラッグが「blog」の時に、blog.php を読み込みます。
    } else { // スラッグが「work」「info」以外の時に、single.php を読み込みます。
      get_template_part( 'single' , false);
    }
  }
}
?>
<?php get_footer(); ?>
