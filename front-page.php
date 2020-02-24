<?php get_header(); ?>
<div class="l-container__background--overlay"></div>
<div class="l-container">
  <section class="js-topName p-top__name">
    <!-- クリック時に.is-reverseを付与-->
    <div class="js-topName p-top__nameContainer">
      <h1 class="p-top__headingMain">Katsumasa<br>Sato<span class="p-top__headingMain--sub">現在ページリニューアル中です。</span></h1>
      <a class="p-top__nameSkillLink" href="https://docs.google.com/spreadsheets/d/1pWnjGrUb1viZDfJ0AbazUe1gE14RgJuNk8UmCin2Xk4/edit?usp=sharing" target="_blank" rel="noopener">SKILL SHEET</a>
    </div>
  </section>
  <nav class="l-menu__blocks" id="js-topMenu">
    <button class="js-btnResume js-topBtn p-top__resumeBlock l-menu__block">
      <div class="p-top__resumeContainer">
        <div class="l-menuResume l-menu__subHeading l-menu--resume">Resume</div>
      </div>
    </button>
    <button class="js-btnWork js-topBtn p-top__workBlock l-menu__block">
      <div class="p-top__workContainer">
        <div class="l-menuWork l-menu__subHeading l-menu--work">Work</div>
      </div>
    </button>
    <button class="js-btnBlog js-topBtn p-top__blogBlock l-menu__block">
      <div class="p-top__blogContainer">
        <div class="l-menuBlog l-menu__subHeading l-menu--blog">Blog</div>
      </div>
    </button>
  </nav>
</div>
<div class="l-content__blocks" id="js-content">
  <?php get_template_part( '_nav' , false) ?>
  <?php get_template_part( '_resume' , false) ?>
  <?php get_template_part( '_work' , false) ?>
  <?php get_template_part( '_blog_list' , false) ?>
</div>
<?php get_footer(); ?>
