<?php
/**
 * The main template file.
 *
 * @package youfoundNate_Web_Theme
 */
?>

<?php get_header(); ?>


	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			


			<div class="fullpage" id="fullpage">
				<section class="section panel1">
					<div class="header-wrapper">
						<div class="header">
							<h3>
								<span>say</span>
								<span>hello</span>
								<span>to</span>
							</h3>
							<h1>Simple, Powerful &
								<br> Efficient Websites.</h1>
						</div>
						<div class="panel1-content">
							<p>I build modern websites and apps for modern businesses and individuals. I will get you where you want to be.
							</p>
						</div>
					</div>
				</section>


				<!-- <div class="work-carousel">

						<?php get_template_part('template-parts/carousel'); ?>

					</div>-->



				<section  class="second-container">

					<div class="header-container services-container">

					<div class="sm-links fade-out">
					<a href="https://www.instagram.com/moseleync/"><i class="link fab fa-instagram fa-3x"></i></a>
					<a href="https://www.linkedin.com/in/ncmoseley/"><i class="link fab fa-linkedin fa-3x"></i></a>
					<a href="https://www.facebook.com/ncmoseley1"><i class="link fab fa-facebook-square fa-3x"></i></a>
					<a href="https://github.com/NCMoseley"><i class="link fab fa-github fa-3x"></i></a>
					</div>
					
					

						<div class="sliding-background"></div>
						<span  class="title-paragraph-container">
							<h2  name="#" id="#" >Services</h2>
						</span>
						<div class="bullet-container">
							<div class="left">
								<div class="bullet-point compress-text">
									<div class="bullet-blue-line "></div>Front and Backend Development</div>
								<div class="bullet-point">
									<div class="bullet-blue-line"></div>Code Audits</div>
								<div class="bullet-point">
									<div class="bullet-blue-line"></div>Wordpress Streamlining</div>
								<div class="bullet-point">
									<div class="bullet-blue-line"></div>Responsive Web design</div>
							</div>
							<div class="right">
								<div class="bullet-point">
									<div class="bullet-blue-line"></div>UX Content and strategy</div>
								<div class="bullet-point">
									<div class="bullet-blue-line"></div>Logos and Visual Identities</div>
								<div class="bullet-point">
									<div class="bullet-blue-line"></div>Custom Apps</div>
								<div>
								</div>
							</div>
							</div>
							<div class="icons">
					<i class="tech fas fa-mobile fa-5x"></i>
					<i class="tech fab fa-sass fa-5x"></i>
					<i class="tech fas fa-code fa-5x"></i>
					<i class="tech fab fa-node-js fa-5x"></i>
					<i class="tech fab fa-react fa-5x"></i>
					<i class="tech fab fa-php fa-5x"></i>
					<i class="tech fab fa-css3-alt fa-5x"></i>
					<i class="tech fab fa-apple fa-5x"></i>
					<i class="tech fab fa-wordpress fa-5x"></i>

					<i class="tech-sm fas fa-mobile fa-2x"></i>
					<i class="tech-sm fab fa-sass fa-2x"></i>
					<i class="tech-sm fas fa-code fa-2x"></i>
					<i class="tech-sm fab fa-node-js fa-2x"></i>
					<i class="tech-sm fab fa-react fa-2x"></i>
					<i class="tech-sm fab fa-php fa-2x"></i>
					<i class="tech-sm fab fa-css3-alt fa-2x"></i>
					<i class="tech-sm fab fa-apple fa-2x"></i>
					<i class="tech-sm fab fa-wordpress fa-2x"></i>
							</div>
						
				</section>

				<div class="footer-background">
					<section class="footer-wrapper">

						<section class="dont-hesitate-container">
							<h2 class="dont-hesitate">Don't Hesitate to get in touch!</h2>
							
							<?php echo do_shortcode("[sitepoint_contact_form]"); ?>

								<a id="click-for-pong">Seriously though I know you will love working with me</a>
						</section>



						<section class="none" id="<?php echo wp_is_mobile() ? ' ' : 'pong'; ?>">
							<embed src="https://ncmoseley.github.io/Pong/">
						</section>

					</section>
					</div>

		</main>
		<!-- #main -->
		</div>
		<!-- #primary -->
		
		<?php get_footer(); ?>


	

        
        
   
    



