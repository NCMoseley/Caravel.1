<?php
/**
 * The main template file.
 *
 * @package Caravel_Web_Theme
 */

get_header(); ?>


	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<!-- FULLPAGE BEGINS HERE  -->


			<!-- <div class="<?php echo wp_is_mobile() ? 'mobilepage' : 'fullpage'; ?>" id="<?php echo wp_is_mobile() ? 'mobilepage' : 'fullpage'; ?>"> -->
			<div class="fullpage" id="fullpage">
				<section class="section panel1">
					<div class="header-wrapper">
						<div class="header">
							<h3>
								<span>say</span>
								<span>hello</span>
								<span>to</span>
							</h3>
							<h1>Nate!</h1>
						</div>
						<div class="panel1-content">
							<p>I build modern websites and apps for modern businesses and individuals. I will get you where you want to be. 
							</p>
						</div>
					</div>
				</section>

				<section class="hero-container">
					<div name="#" id="#" class="header-container">
						<h2>Simple, Powerful &<br>
							Efficient Websites.</h2>
						</p>
					</div>
				</section>

				<!-- <section class="our-work-section">
					<div class="our-work-header">
						<h2>Our Work</h2>
					</div>
					<!-- <div class="our-work-content">
						<p>We are a boutique agency that specializes in custom Websites built with WordPress. They are designed to be clean, simple
							and future proof. We have helped our clients realize their online voice and increased traffic, conversion and ranking.
							Find out how we can help you. You can view some of our recent projects below.
						</p>
					</div> 
				</section> -->

				<!-- <section class="work-wrapper">
					<div class="work-carousel">

						<?php get_template_part('template-parts/carousel'); ?>

					</div>
				</section> -->


				<section class="second-container">
					<div class="services-container">
						<div class="sliding-background"></div>
						<span class="title-paragraph-container">
							<h2>Services</h2>
							<p>archaic history uniqueness biological bombardment individual phase transition interaction genocide apocalyptic causal
								information shaman avalanche matrix impulse </p>
						</span>
						<div class="bullet-container">
							<div class="left">
								<div class="bullet-point">
									<div class="bullet-blue-line"></div>Front and Backend Development</div>
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
				</section>

				<div class="footer-background">
					<section class="footer-wrapper">
			
				<section class="dont-hesitate-container">
					<h2 class="dont-hesitate">Don't Hesitate to get in touch!</h2>
					<p>Seriously though you know you will love working with me.</p>
				</section>

				</section>
				</div>

		</main>
		<!-- #main -->
		</div>
		<!-- #primary -->
		<?php get_footer(); ?>