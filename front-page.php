<?php
/**
 * The main template file.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<section class="content-wrapper">
				<section class="hero-container">
					<div class="header-container">
						<h1 class="">Simple, Powerful & Efficient Websites</h1>
						<p>hyper-global invariant anything explore architectonics paradigm eschatology linguistics psychedelic science redefine control mathematics disbelief philosophy monotheism unfolding archetype diversion shamanistic origin amphetamine possible field transformation primate</p>
					</div>
				</section>

				<section class="second-container">
					<div class="scroll"><div class="scroll-blue-line"></div>SCROLL</div>
				<div class="box1">
					<div class="dots">
					<p>●</p><p>●</p><p>●</p>
					</div>
				</div>
				  <div class="box2">
						<h4 class="we-specialize-blurb">We specialize in custom Websites built with <span>WordPress</span>. They are designed to be clean, simple and future proof. We have helped our clients realize their online voice and increased traffic, conversion and ranking.</h4>
						<!-- <picture>
							<source srcset="<?php echo get_template_directory_uri() . '/assets/'?>">
							<img srcset="<?php echo get_template_directory_uri() . '/assets/'?>" >
						</picture> -->
							<div class="find-out-container"><div class="find-out-blurb">Find out how we can help you<div 	class="find-out-line"></div></div></div>
					</div>	
				</section>

				<section class="third-container">
					<div class="services-container">
						<span class="title-paragraph-container"><h2>Services</h2><p>archaic history uniqueness biological bombardment individual phase transition interaction genocide apocalyptic causal information shaman avalanche matrix impulse </p></span>
								<div class="bullet-container">
										<div class="left">
											<div class="bullet-point"><div class="bullet-blue-line"></div>Front and Backend Development</div>
											<div class="bullet-point"><div class="bullet-blue-line"></div>Code Audits</div>
											<div class="bullet-point"><div class="bullet-blue-line"></div>Wordpress Streamlining</div>
											<div class="bullet-point"><div class="bullet-blue-line"></div>Responsive Web design</div>
										</div>									
										<div class="right">
										<div class="bullet-point"><div class="bullet-blue-line"></div>UX Content and strategy</div>
											<div class="bullet-point"><div class="bullet-blue-line"></div>Logos and Visual Identities</div>
											<div class="bullet-point"><div class="bullet-blue-line"></div>Custom Apps</div>
										<div>
								</div>
					</div>
				</section>

				<section class="carousel-container">
					<div class="carousel">

					</div>
					<div class="our-work">
						<h2 class="text-secondary">Our Work</h2>

					</div>

					<!-- Set up your HTML -->
			<div class="owl-carousel owl-theme">
    		<div class="item"><h4>1</h4></div>
    		<div class="item"><h4>2</h4></div>
    		<div class="item"><h4>3</h4></div>
    		<div class="item"><h4>4</h4></div>
    		<div class="item"><h4>5</h4></div>
    		<div class="item"><h4>6</h4></div>
    		<div class="item"><h4>7</h4></div>
    		<div class="item"><h4>8</h4></div>
    		<div class="item"><h4>9</h4></div>
    		<div class="item"><h4>10</h4></div>
    		<div class="item"><h4>11</h4></div>
    		<div class="item"><h4>12</h4></div>
			</div>

				</section>

				<p>human dynamics life Buddha LSD DMT mind-blowing topological final dream mushoom technology terminal Christianity neoarchaism electromagnetic consequences drumming orbit catalytic psilocybin dominant evolution believe attractor featureless relationships imparted trajectory existence medium random geological reductionist</p>


				<!-- Press Releases  -->
				<section class="press-releases-wrapper">
					<h2 class="press-releases-title">Latest Press Releases</h2>
					<div class="sub-title-blue-line"></div>

					<div class="press-releases-container">

								<?php $args = array( 'post_type' => 'post', 'posts_per_page' => 3 ); $query = new WP_Query($args);?>
                             <?php while ($query->have_posts()) : $query->the_post(); ?>
														<div class="press-release">
																	<h3><?php the_title(); ?></h3>
																				<p>
																					<a href="<?php the_permalink();?>">Read More ‣</a>
																				</p>
																				<span><?php the_category(', '); ?> • </span>
																	<span>
																		<?php the_time(' F jS, Y') ?>
																	</span>
														</div>
															<?php endwhile; ?>
															<?php wp_reset_query() ?>
					</div>
				</section>
				<!-- close Press Releases -->

			</section>
		</main>
		<!-- #main -->
	</div>
	<!-- #primary -->

	<?php get_footer(); ?>