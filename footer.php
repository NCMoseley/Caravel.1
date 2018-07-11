<?php
/**
 * The template for displaying the footer.
 *
 * @package youfoundNate_Web_Theme
 */

?>

					<div class="footer-background">
					<section class="footer-wrapper">
						<div class="dont-hesitate-container">
							<h2 class="dont-hesitate">Don't Hesitate to get in touch!</h2>
							<?php echo do_shortcode("[email-form-plugin]"); ?>
							<a id="click-for-pong">Lets enjoy creating together</a>
						</div>
						<div class="none" id="<?php echo wp_is_mobile() ? ' ' : 'pong'; ?>">
							<embed src="https://ncmoseley.github.io/Pong/">
						</div>
					</section>
				</div>
		
		<?php wp_footer(); ?>

	</body>
</html>
