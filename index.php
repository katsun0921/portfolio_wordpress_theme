<?php get_header(); ?>
<div class="l-container__background--overlay"></div>
<div class="l-container">
  <section class="js-topName p-top__name">
    <!-- クリック時に.is-reverseを付与-->
    <div class="js-topName p-top__nameContainer">
      <h1 class="p-top__headingMain">Katsumasa<br>Sato<span class="p-top__headingMain--sub">WEB DEVELOPER</span></h1>
      <!-- スキルシートへリンクを貼る--><a class="p-top__nameSkillLink" href="#">SKILL SHEET</a>
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
          <div>映画鑑賞、フィットネス、試飲会</div>
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
        <li class="p-resume__skillLabel">JavaScripts : 8年<span class="p-resume__skillLabelSub">Business &amp; Student</span>
          <div class="p-resume__skill">
            <!-- あとでJS機能にする-->
            <div class="p-resume__skillBar" style="width: 85%"><span class="p-resume__skillBarYear">8年</span></div>
          </div>
        </li>
        <li class="p-resume__skillLabel">SASS : 5年<span class="p-resume__skillLabelSub">Business</span>
          <div class="p-resume__skill">
            <!-- あとでJS機能にする-->
            <div class="p-resume__skillBar" style="width: 85%"><span class="p-resume__skillBarYear">8年</span></div>
          </div>
        </li>
        <li class="p-resume__skillLabel">jQuery : 8年<span class="p-resume__skillLabelSub">Business &amp; Student</span>
          <div class="p-resume__skill">
            <!-- あとでJS機能にする-->
            <div class="p-resume__skillBar" style="width: 85%"><span class="p-resume__skillBarYear">8年</span></div>
          </div>
        </li>
        <li class="p-resume__skillLabel">Photoshop : 8年<span class="p-resume__skillLabelSub">Business &amp; Student</span>
          <div class="p-resume__skill">
            <!-- あとでJS機能にする-->
            <div class="p-resume__skillBar" style="width: 85%"><span class="p-resume__skillBarYear">8年</span></div>
          </div>
        </li>
        <li class="p-resume__skillLabel">Illustrator : 4年<span class="p-resume__skillLabelSub">Student</span>
          <div class="p-resume__skill">
            <!-- あとでJS機能にする-->
            <div class="p-resume__skillBar" style="width: 85%"><span class="p-resume__skillBarYear">4年</span></div>
          </div>
        </li>
        <li class="p-resume__skillLabel">Adobe XD : 3年<span class="p-resume__skillLabelSub">Private</span>
          <div class="p-resume__skill">
            <!-- あとでJS機能にする-->
            <div class="p-resume__skillBar" style="width: 85%"><span class="p-resume__skillBarYear">3年</span></div>
          </div>
        </li>
        <li class="p-resume__skillLabel">After Effects : 4年<span class="p-resume__skillLabelSub">Student</span>
          <div class="p-resume__skill">
            <!-- あとでJS機能にする-->
            <div class="p-resume__skillBar" style="width: 85%"><span class="p-resume__skillBarYear">4年</span></div>
          </div>
        </li>
        <li class="p-resume__skillLabel">3ds Max : 4年<span class="p-resume__skillLabelSub">Private</span>
          <div class="p-resume__skill">
            <!-- あとでJS機能にする-->
            <div class="p-resume__skillBar" style="width: 85%"><span class="p-resume__skillBarYear">4年</span></div>
          </div>
        </li>
        <li class="p-resume__skillLabel">git<span class="p-resume__skillLabelSub">コード管理</span></li>
        <li class="p-resume__skillLabel">Backlog<span class="p-resume__skillLabelSub">プロジェクト管理</span></li>
        <li class="p-resume__skillLabel">Microsoft Office365(Microsoft Excel、Teams、SharePoint、Flow、OneNote)</li>
      </ul>
    </div>
    <div class="l-content__block">
      <h3 class="c-heading__blockMain">Experience</h3>
      <div class="p-resume__timeline experience">
        <div class="p-resume__timelineBlock">
          <div class="p-resume__timelineExp">
            <div class="p-resume__timelineHgroup">
              <h4 class="p-resume__timelineHeading">フロントエンジニア 株式会社ミツエーリンクス</h4><span class="p-resume__timelineHeadingDate">2013年10月 - 2019年3月</span>
            </div>
            <dl class="p-resume__timelineContent">
              <dt class="p-resume__timelineContentHeading">フロントエンジニア</dt>
              <dd>
                <ul class="c-list">
                  <li class="c-list--disc">デザインからリニューアルサイトを作成</li>
                  <li class="c-list--disc">デザイナーが作成したPSDファイルをもとにページレイアウトを作成<br>（PSDファイルから画像の切り出しを含めて、テンプレートページ作成）</li>
                  <li class="c-list--disc">コンポーネント一覧からWebページの作成</li>
                </ul>
              </dd>
            </dl>
            <dl class="p-resume__timelineContent">
              <dt class="p-resume__timelineContentHeading">品質管理部門</dt>
              <dd>
                <ul class="c-list">
                  <li class="c-list--disc">5名ほどでさまざまなプロジェクトの Web ページをチェック</li>
                  <li class="c-list--disc">テキストやリンクなどが現行どおりかのチェック</li>
                  <li class="c-list--disc">指定のブラウザでの表示の崩れがないか</li>
                  <li class="c-list--disc">JavaScriptが意図どおりに問題なく動作しているか</li>
                  <li class="c-list--disc">Web Content Accessibility Guidelines(WCAG)に準拠しているか</li>
                </ul>
              </dd>
            </dl>
          </div>
        </div>
      </div>
    </div>
    <div class="l-content__block">
      <h3 class="c-heading__blockMain">STUDENT</h3>
      <div class="p-resume__timeline education">
        <div class="p-resume__timelineBlock">
          <div class="p-resume__timelineExp">
            <div class="p-resume__timelineHgroup">
              <h4 class="p-resume__timelineHeading">ヒューマンアカデミー</h4><span class="p-resume__timelineHeadingDate">Apl 2011 - Mar 2013</span>
            </div>
            <dl class="p-resume__timelineContent">
              <dt class="p-resume__timelineContentHeading">Webデザイナー</dt>
              <dd>
                <ul class="c-list">
                  <li class="c-list--disc">html、css、JavaScriptsの基礎を学ぶ</li>
                  <li class="c-list--disc">Photoshop、IllustratorでUI作成、バナー作成</li>
                  <li class="c-list--disc">Wordpressを使用してのブログ作成</li>
                </ul>
              </dd>
            </dl>
          </div>
          <div class="p-resume__timelineExp">
            <div class="p-resume__timelineHgroup">
              <h4 class="p-resume__timelineHeading">東京工芸大学芸術学部メディアアート表現学科</h4><span class="p-resume__timelineHeadingDate">Apl 2004 - Mar 2008</span>
            </div>
            <dl class="p-resume__timelineContent">
              <dt class="p-resume__timelineContentHeading">3DCG選考</dt>
              <dd>
                <ul class="c-list">
                  <li class="c-list--disc">3DCGソフトを使用してのアニメーションを作成</li>
                  <li class="c-list--disc">学生時代のポートフォリオ<br>MP4のムービー<br>※mp4ファイルなのでブラウザによっては見れない恐れがあります。</li>
                </ul>
              </dd>
            </dl>
            <video class="c-video--100per" src="<?php echo get_template_directory_uri() ?>/video/portfolio_mp4.mp4" controls preload="auto" poster="<?php echo get_template_directory_uri() ?>/images/video_poster_image.png"></video>
          </div>
        </div>
      </div>
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
        if ($query->have_posts()) :
          while ($query->have_posts()) {
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
          }
      endif;
        wp_reset_postdata();
      ?>
      <?php
      /* ページャーの表示 */
      if (function_exists('pagination')) :
        pagination($MaxNumPages, get_query_var('paged'));
      endif;
      ?>
    </div>
  </section>
</div>
<?php get_footer(); ?>
