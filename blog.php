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
  <section class="l-container is-show" id="resume">
      <div class="l-content__block">
        <article id="blog-<?php the_ID(); ?>" class="p-blog__post">
          <h2 class="p-blog__postTitle"><?php the_title() ?></h2>
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
            <?php the_content(); ?>
          </div>
        </article>
        <div class="c-btn__social">
          <dl class="c-btn__socialBtn">
            <dt><span class="u-va--middle">Share this:</span></dt>
            <dd>
              <ul class="c-btn__socialBtnLists">
                <li><a class="c-btn__socialBtnList" href="#"><img src="<?php echo get_template_directory_uri() ?>/images/icon/icon_facebook.png" alt="facebook"></a></li>
                <li><a class="c-btn__socialBtnList" href="#"><img src="<?php echo get_template_directory_uri() ?>/images/icon/icon_twitter.png" alt="twitter"></a></li>
              </ul>
            </dd>
          </dl>
        </div>
      </div>
    </section>
  </div>
</div>
