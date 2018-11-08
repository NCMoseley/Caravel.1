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
							<br> Efficient Web.</h1>
					</div>
					<div class="panel1-content">
						<p>I build modern websites and apps for modern businesses and individuals. I will get you where you want to be.
						</p>
					</div>
				</div>
			</section>

			<iframe class="none" src="https://drive.google.com/file/d/1GBsHDo1hasNgiU2QgaFKdg-clvSwxDJd/preview" ></iframe>

			<section class="second-container">
				<div class="header-container services-container">
					<div class="sm-links fade-out">
						<a href="https://www.instagram.com/moseleync/" target="_blank">
							<i class="link fab fa-instagram fa-3x"></i>
						</a>
						<a href="https://www.linkedin.com/in/ncmoseley/" target="_blank">
							<i class="link fab fa-linkedin fa-3x"></i>
						</a>
						<!-- <a href="https://www.facebook.com/ncmoseley1" target="_blank">
								<i class="link fab fa-facebook-square fa-3x"></i>
							</a> -->
						<a href="https://github.com/NCMoseley " target="_blank">
							<i class="link fab fa-github fa-3x"></i>
						</a>
						<a id="click-for-resume">
							<i class="link fas fa-paper-plane fa-3x" title="Resume"></i>
						</a>
					</div>
					<span class="title-paragraph-container">
						<h2 name="#" id="#">Experience</h2>
					</span>

					<div class="bullet-container">
						<div class="left">
							<div class="bullet-point compress-text">
								<div class="bullet-blue-line "></div>Front-end Development
							</div>
							<div class="bullet-point">
								<div class="bullet-blue-line"></div>React, React-Native and Node.js Development
							</div>
						</div>

						<div class="right">
							<div class="bullet-point">
								<div class="bullet-blue-line"></div>Serverless, Apollo and AWS
							</div>
							<div class="bullet-point">
								<div class="bullet-blue-line"></div>Wordpress
							</div>
							<!-- <div class="bullet-point">
									<div class="bullet-blue-line"></div>UX Content and strategy</div>
								<div class="bullet-point">
									<div class="bullet-blue-line"></div>Code Audits</div> -->
							<div>
							</div>
						</div>
					</div>

					<div class="icons">
						<i class="tech fab fa-sass fa-5x"></i>
						<i class="tech fas fa-code fa-5x"></i>
						<i class="tech fab fa-node-js fa-5x"></i>
						<i class="tech fab fa-react fa-5x"></i>
						<i class="tech fas fa-mobile fa-5x"></i>
						<i class="tech fab fa-php fa-5x"></i>
						<i class="tech fab fa-css3-alt fa-5x"></i>
						<i class="tech fab fa-apple fa-5x"></i>
						<i class="tech fab fa-wordpress fa-5x"></i>
						<i class="tech fas fa-database fa-5x"></i>

						<i class="tech-sm fab fa-sass fa-2x"></i>
						<i class="tech-sm fas fa-code fa-2x"></i>
						<i class="tech-sm fab fa-node-js fa-2x"></i>
						<i class="tech-sm fab fa-react fa-2x"></i>
						<i class="tech-sm fas fa-mobile fa-2x"></i>
						<i class="tech-sm fab fa-php fa-2x"></i>
						<i class="tech-sm fab fa-css3-alt fa-2x"></i>
						<i class="tech-sm fab fa-apple fa-2x"></i>
						<i class="tech-sm fab fa-wordpress fa-2x"></i>
						<i class="tech-sm fas fa-database fa-2x"></i>
					</div>
				</div>
			</section>

			<section class="our-work-section">
				<div class="work-wrapper">

					<div class="laptop">
						<img src="<?php echo get_template_directory_uri() . '/assets/laptop.png
					'?>" alt="Laptop">
					</div>

					<?php get_template_part('template-parts/carousel'); ?>

				</div>

				<div class="our-work-right">

					<h2>Portfolio</h2>

					<div class="our-work-content">

						<?php get_template_part('template-parts/carousel-nav'); ?>

					</div>
				</div>
			</section>


		</div>
		<!-- #fullpage -->
	</main>
	<!-- #main -->
</div>
<!-- #primary -->

<?php get_footer(); ?>