<div class='wrote-models-lists'>
<?php
$user = wp_get_current_user();
if ( $user ) :
?>
<div class="wrote-models-lists__header">CREATED BY </div>
<div class="wrote-models-lists__img"><?php echo get_avatar( get_the_author_id(), 100 ); ?></div>
<div class="author-profile content-bottom-widgets">
  <div class="author-profile-description">
    <div class="author-profile-sns">
      <a href="<?php echo get_the_author_meta( 'twitter' ); ?>">instagramフォローする</a>
    </div>
  </div>
</div>

<?php endif; ?>
</div>
