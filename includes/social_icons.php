<ul class="et-social-icons">
<span id="connect-with-me">Connect on</span>

<?php if ( 'on' === et_get_option( 'divi_show_facebook_icon', 'on' ) ) : ?>
	<li class="et-social-icon et-social-facebook">
		<a href="<?php echo esc_url( et_get_option( 'divi_facebook_url', '#' ) ); ?>" class="icon" target="_blank">
			<span><?php esc_html_e( 'Facebook', 'Divi' ); ?></span>
		</a>
	</li>
<?php endif; ?>
<?php if ( 'on' === et_get_option( 'divi_show_twitter_icon', 'on' ) ) : ?>
	<li class="et-social-icon et-social-twitter">
		<a href="<?php echo esc_url( et_get_option( 'divi_twitter_url', '#' ) ); ?>" class="icon" target="_blank">
			<span><?php esc_html_e( 'Twitter', 'Divi' ); ?></span>
		</a>
	</li>
<?php endif; ?>
	<li class="et-social-icon et-social-linkedin">
		<a href="http://ca.linkedin.com/in/jasonryant" class="icon" target="_blank">
			<span><?php esc_html_e( 'LinkedIn', 'Divi' ); ?></span>
		</a>
	</li>
<?php if ( 'on' === et_get_option( 'divi_show_google_icon', 'on' ) ) : ?>
	<li class="et-social-icon et-social-google-plus">
		<a href="<?php echo esc_url( et_get_option( 'divi_google_url', '#' ) ); ?>" class="icon">
			<span><?php esc_html_e( 'Google', 'Divi' ); ?></span>
		</a>
	</li>
<?php endif; ?>
<?php if ( 'on' === et_get_option( 'divi_show_rss_icon', 'on' ) ) : ?>
<?php
	$et_rss_url = '' !== et_get_option( 'divi_rss_url' )
		? et_get_option( 'divi_rss_url' )
		: get_bloginfo( 'comments_rss2_url' );
?>
	<li class="et-social-icon et-social-rss">
		<a href="<?php echo esc_url( $et_rss_url ); ?>" class="icon">
			<span><?php esc_html_e( 'RSS', 'Divi' ); ?></span>
		</a>
	</li>
<?php endif; ?>

</ul>