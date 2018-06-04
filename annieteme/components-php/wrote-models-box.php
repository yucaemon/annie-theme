<div class='wrote-models-lists'>
<?php
$user = wp_get_current_user();
if ( $user ) :
?>
<div class="wrote-models-lists__header">CREATED BY </div>
<div class="wrote-models-lists__img"><img src="<?php echo esc_url( get_avatar_url( $user->ID ) ); ?>" /></div>
<?php echo my_get_the_post_profile(); ?>
<?php endif; ?>
</div>
