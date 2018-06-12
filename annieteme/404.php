<?php /** *  Template Name:  404ページ */ ?>
<?php include('head.php'); ?>
<body>
<section class='pages error-page'>
<div class='outer'>
<?php include('components-php/header02.php'); ?>
<div class='outer__inner column-12'>
<div class='pages__container'>
<div class='notfind__img'>
<img src="<?php echo get_template_directory_uri(); ?>/images/notfind.svg">
</div>
<p class='notfind__text'>
お探しのページが見つかりませんでした。
</p>
<div class='notfind__btn'>
トップページへ戻る
</div>
<div class='search__box'>
<?php get_search_form(); ?>
</div>
</div>
<?php include('components-php/news-articles.php'); ?>
<?php include('components-php/more-search-article.php'); ?>
<div class='column-6 margin-center'>
<?php include('components-php/sns-box.php'); ?>
</div>
<div class='column-8 margin-center'>
<?php include('components-php/shopping-box.php'); ?>
</div>
<?php include('chatbox.php'); ?>
</div>
</div>
</section>
<?php include('components-php/footer.php'); ?>
</body>
