<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.2
 */

?>

<?php
if ( is_active_sidebar( 'sidebar-2' ) ||
	is_active_sidebar( 'sidebar-3' ) ) :
	?>
<footer class="cetm-footer">
	<div class="container">
		<div class="clearfix menufoot">
			<h1 class="logo">
				<a href="/" title="Vlett">
					<img src="<?php echo home_url(); ?>/wp-content/themes/cetm/assets/images/logo_white.PNG" />
				</a>
			</h1>
			<?php
			if ( is_active_sidebar( 'sidebar-2' ) ) {

			dynamic_sidebar( 'sidebar-2' );

			}
			?>

		</div>
		<hr />
		<div class="clearfix address">
                <span class="img-qr hidden-sm hidden-xs">
                    <img src="<?php echo home_url(); ?>/wp-content/themes/cetm/assets/images/qr_logo.PNG" />
                </span>
			<?php
			if ( is_active_sidebar( 'sidebar-3' ) ) {

				dynamic_sidebar( 'sidebar-3' );

			}
			?>


		</div>
	</div>
	<div class="clearfix copyright">
		<p>Copyright © 2017 Miraway. Terms of use Rate this site </p>
	</div>
</footer>
<?php endif; ?>

</body>
</html>
