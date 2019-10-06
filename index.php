<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php bloginfo('name') ?> Katsumasa Sato</title>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/css/styles.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Noto+Serif+JP|Taviraj&amp;display=swap"><script src="https://kit.fontawesome.com/48f542ac57.js"></script>
<script src="<?php echo get_template_directory_uri() ?>/js/ie.js"></script>
<script src="<?php echo get_template_directory_uri() ?>/js/app.js" defer></script>
  </head>
  <body>
    <nav class="l-menu__container is-none" id="js-menu"><span class="l-menu__status">Portfolio Katsumasa Sato</span>
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
    <p class="l-content__ieError" id="ieError"></p>
    <main class="l-container__background l-container__background--img">
      <div class="l-container__background--overlay"></div>
      <div class="l-container">
        <section class="js-topName p-top__name">
          <!-- クリック時に.is-reverseを付与-->
          <div class="js-topName p-top__nameContainer">
            <h1 class="p-top__headingMain">Katsumasa<br>Sato<span class="p-top__headingMain--sub">WEB DEVELOPER</span></h1>
            <!-- スキルシートへリンクを貼る--><a class="p-top__nameSkillLink" href="#">SKILL SHEET</a>
            <!-- Direct messageはフリーランスになってから-->
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
        <section class="js-container l-container" id="resume">
          <div class="l-content__block">
            <h2 class="c-heading__blockMain">Profile</h2>
            <p>
              5年以上、フロントエンドエンジニアとして業務を行っていました。<br> またフロントエンドエンジニアだけではなく、品質管理部門に配属し、
              開発者だけではなく、ページ検証のテスターとして、
              お客様への制作物のチェックという責任ある立場にもいたことがありました。
            </p>
            <ul class="p-resume__infoList">
                          <li class="p-resume__infoListList"><span class="p-resume__infoListTerm">氏名</span>
                            <div>佐藤 功理</div>
                          </li>
                          <li class="p-resume__infoListList"><span class="p-resume__infoListTerm">生年月日</span>
                            <div>1985年9月21日</div>
                          </li>
                          <li class="p-resume__infoListList"><span class="p-resume__infoListTerm">Skype名</span>
                            <div> live:katsumasa-sato</div>
                          </li>
                          <li class="p-resume__infoListList"><span class="p-resume__infoListTerm">Twitter</span>
                            <div><a href="https://twitter.com/katsun0921">@katsun0921</a></div>
                          </li>
                          <li class="p-resume__infoListList"><span class="p-resume__infoListTerm">趣味</span>
                            <div> 映画鑑賞、フィットネス、試飲会</div>
                          </li>
            </ul>
          </div>
          <div class="l-content__block">
            <h3 class="c-heading__blockMain">Skills</h3>
            <ul class="c-list c-list--disc">
              <li class="p-resume__skillLabel">HTML &amp; CSS : 8年<span class="p-resume__skillLabelSub">Business &amp; Student</span>
                <div class="p-resume__skill">
                  <!-- あとでJS機能にする-->
                  <div class="p-resume__skillBar" style="width: 85%"><span class="p-resume__skillBarYear">8年</span></div>
                </div>
              </li>
              <li class="p-resume__skillLabel">git<span class="p-resume__skillLabelSub">コード管理</span></li>
            </ul>
          </div>
          <div class="l-content__block">
            <h3 class="c-heading__blockMain">Experience</h3>
            <div class="p-resume__timeline experience">
              <div class="p-resume__timelineBlock">
                <div class="p-resume__timelineExp">
                  <div class="p-resume__timelineHgroup">
                    <h4 class="p-resume__timelineHeading">UX Designer</h4><span class="p-resume__timelineHeadingDate">Mar 2019</span>
                  </div>
                  <dl class="p-resume__timelineContent">
                    <dt class="p-resume__timelineContentHeading">会社名・学校名</dt>
                    <dd>
                      <ul class="c-list">
                        <li class="c-list--disc">作業の内容</li>
                        <li class="c-list--disc">作業の内容</li>
                        <li class="c-list--disc">作業の内容</li>
                        <li class="c-list--disc">作業の内容</li>
                        <li class="c-list--disc">作業の内容</li>
                      </ul>
                    </dd>
                  </dl>
                </div>
              </div>
            </div>
          </div>
          <div class="l-content__block">
            <h3 class="c-heading__blockMain">Education</h3>
            <div class="p-resume__timeline education">
              <div class="p-resume__timelineBlock">
                <div class="p-resume__timelineExp">
                  <div class="p-resume__timelineHgroup">
                    <h4 class="p-resume__timelineHeading">UX Designer</h4><span class="p-resume__timelineHeadingDate">Mar 2019</span>
                  </div>
                  <p>Ut enim ad minim veniam, quis nostrud exerc. Irure dolor in reprehend incididunt labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
                </div>
              </div>
            </div>
          </div>
          <div class="l-content__block">
            <video class="c-video--100per" src="/video/portfolio_mp4.mp4" controls preload="auto" poster="/images/video_poster_image.png"></video>
          </div>
        </section>
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
              <article class="p-work__content">
                <h3 class="p-work__contentHeading">title1</h3>
                <p>text text text text text text text text text</p>
                <p class="p-work__contentFilter">filter</p>
              </article>
              <article class="p-work__content">
                <h3 class="p-work__contentHeading">title2</h3>
                <p>text text text text text text text text text text text text text text text text text text</p>
                <p class="p-work__contentFilter">filter</p>
              </article>
              <article class="p-work__content">
                <h3 class="p-work__contentHeading">title3</h3>
                <p>text text text text text text text text text</p>
                <p class="p-work__contentFilter">filter</p>
              </article>
              <article class="p-work__content">
                <h3 class="p-work__contentHeading">title4</h3>
                <p>text text text text text text text text text</p>
                <p class="p-work__contentFilter">filter</p>
              </article>
              <article class="p-work__content">
                <h3 class="p-work__contentHeading">title5</h3>
                <p>text text text text text text text text text text text text text text text text text text</p>
                <p class="p-work__contentFilter">filter</p>
              </article>
            </section>
          </div>
        </section>
        <section class="js-container l-container" id="blog">
          <div class="l-content__block">
            <h2 class="c-heading__blockMain">Blog</h2>
            <article class="p-blog__post">
              <h3 class="p-blog__postTitle">BLOG TITLE</h3>
              <p class="p-blog__postInfo">
                <time datetime="yyyy/mm/dd">yyyy/mm/dd</time><span>/category</span>
              </p>
              <p class="p-blog__postBody">
                blog テキストblog テキストblog テキストblog テキストblog テキストblog テキストblog テキストblog テキストblog テキストblog テキストblog テキストblog テキストblog テキストblog テキスト
                blog テキストblog テキストblog テキストblog テキストblog テキストblog テキストblog テキスト
                blog テキスト
              </p><a class="c-btn c-btn--block u-width--25">READ MORE</a>
            </article>
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
        </section>
      </div>
    </main>
  </body>
</html>
