<?php /** *  Template Name: 一覧ページ */ ?>
<?php include('head.php'); ?>
<body>
<div class='outer'>
<?php include('components-php/header.php'); ?>
<ul class='breadcrumb'>
<li>
タグ：一覧ページ
</li>
</ul>
<div class='archive-banner'>
<h1 class='archive-banner__header'>
<?php echo get_the_archive_title(); ?> に関する記事一覧
</h1>
</div>
<div class='outer__inner flexbox--h-center flexbox--spacearound'>
<?php include('components-php/side-menu-list.php'); ?>
<div class='column-6 middle-contain'>
<ul class="article-list">
<?php if(have_posts()): while(have_posts()):the_post(); ?>
  <a href="<?php the_permalink(); ?>">
    <li class='flexbox'>
      <?php if( has_post_thumbnail() ): ?>
      <?php the_post_thumbnail( 'post-thumbnails', array('class' => 'article-list__img') ); ?>
      <div class="article-list__text">
      <h3 class="list-title"><?php echo mb_substr($post->post_title, 0, 20).'…'; ?></h3>
       <p class='list-read'><?php echo mb_substr(strip_tags($post-> post_content),0,100) ; ?></p>
      </div>
    </li>
  </a>
  <?php else: ?>
　<?php endif; ?>
  </ul>

<?php endwhile; endif; ?>
<?php include('components-php/more-search-article.php'); ?>
<?php include('components-php/sns-box.php'); ?>
<?php include('components-php/shopping-box.php'); ?>
</div>
<div class='column-4 side-contain'>
<?php include('components-php/featured-box.php'); ?>
<?php include('components-php/news-list.php'); ?>
<?php include('components-php/keywords.php'); ?>
<?php include('components-php/models-lists.php'); ?>
</div>
</div>
</div>
</body>
<?php include('components-php/footer.php'); ?>
