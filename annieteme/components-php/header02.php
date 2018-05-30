<header class='outer__header header02'>
<div class='flexbox--spacebetween'>
<div class='sns-icons'>
<div class='flexbox'>
<img src="<?php echo get_template_directory_uri(); ?>/images/facebook-icon.svg">
<img src="<?php echo get_template_directory_uri(); ?>/images/twitter-icon.svg">
<img src="<?php echo get_template_directory_uri(); ?>/images/instagram-icon.svg">
</div>
</div>
<div class='info'>
<ul class='nav-menu flexbox'>
<li>
ANNIEについて
</li>
<li>
ポートランドオレゴン州
</li>
</ul>
<div class='search__box'>
<?php get_search_form(); ?>
</div>
</div>
</div>
<div class='breadcrumb'>
<div class="breadcrumbs">
  <?php if(function_exists('bcn_display'))
  {
  bcn_display();
  }?>
</div>
</div>
</header>
