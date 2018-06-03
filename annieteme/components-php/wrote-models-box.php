<div class='instagram-models-lists'>
<div class='instagram-models-lists__container'>
<div class='instagram-models-lists__header'>
CREATED BY
</div>
<div class='instagram-models-lists__models'></div>
<?php
$user = wp_get_current_user();
if ( $user ) :
?>
<img src="<?php echo esc_url( get_avatar_url( $user->ID ) ); ?>" />

<?php echo my_get_the_post_profile(); ?>



<?php endif; ?>
</div>
</div>
