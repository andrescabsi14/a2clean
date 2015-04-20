<?php
$title          = $link_face = $link_twitter = $link_google = $link_instagram = $link_pinterest = $link_youtube = '';
$title          = $instance['title'];
$link_face      = $instance['link_face'];
$link_twitter   = $instance['link_twitter'];
$link_google    = $instance['link_google'];
$link_instagram = $instance['link_instagram'];
$link_pinterest = $instance['link_pinterest'];
$link_youtube   = $instance['link_youtube'];
$link_linkedin  = $instance['link_linkedin'];
$icon_style     = $instance['icon_style'];
$icon_size      = $instance['icon_size'];
if ( $title ) {
	echo ent2ncr( $before_title . esc_attr( $title ) . $after_title );
}
?>
<div class="thim-social">
	<ul class="<?php echo esc_attr( $icon_style ) . ' ' . esc_attr( $icon_size ); ?>">
		<?php
		if ( $link_face != '' ) {
			echo '<li><a class="facebook" href="' . esc_url( $link_face ) . '" target="_blank"></a></li>';
		}
		if ( $link_twitter != '' ) {
			echo '<li><a class="twitter" href="' . esc_url( $link_twitter ) . '" target="_blank"></a></li>';
		}
		if ( $link_google != '' ) {
			echo '<li><a class="google_plus" href="' . esc_url( $link_google ) . '"  target="_blank"></a></li>';
		}
		if ( $link_instagram != '' ) {
			echo '<li><a class="instagram" href="' . esc_url( $link_instagram ) . '"  target="_blank"></a></li>';
		}

		if ( $link_pinterest != '' ) {
			echo '<li><a class="pinterest" href="' . esc_url( $link_pinterest ) . '"  target="_blank"></a></li>';
		}

		if ( $link_youtube != '' ) {
			echo '<li><a class="youtube" href="' . esc_url( $link_youtube ) . '"  target="_blank"></a></li>';
		}
		if ( $link_linkedin != '' ) {
			echo '<li><a class="linkedin" href="' . esc_url( $link_linkedin ) . '"  target="_blank"></a></li>';
		}
		?>
	</ul>
</div>