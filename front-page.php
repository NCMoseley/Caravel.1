<?php
/**
 * The main template file.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>


	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<div class="seans-code">
				<section class="content-wrapper">
					<section class="hero-container">
						<div class="header-container">
							<h1>Simple, Powerful &
								<br>Efficient Websites.</h1>
							<p>We build modern websites for the next generation of businesses and individuals.
								<br> No fluff, no over design, no bloat. Fast, elegant, and precisely what you need. We will get you where you need to
								be.
								<strong> Set sail!
									<strong>
							</p>
						</div>
					</section>
			</div>
			<section class="second-container">
				<div class="scroll">
					<div class="scroll-blue-line"></div>SCROLL</div>
				<div class="box1">
					<div class="dots">
						<p>●</p>
						<p>●</p>
						<p>●</p>
					</div>
				</div>
				<div class="box2">
					<h4 class="we-specialize-blurb">We specialize in custom Websites built with
						<span>WordPress</span>. They are designed to be clean, simple and future proof. We have helped our clients realize their
						online voice and increased traffic, conversion and ranking.</h4>
					<!-- <picture>
							<source srcset="<?php echo get_template_directory_uri() . '/assets/'?>">
							<img srcset="<?php echo get_template_directory_uri() . '/assets/'?>" >
						</picture> -->
					<div class="find-out-container">
						<div class="find-out-blurb">Find out how we can help you
							<div class="find-out-line"></div>
						</div>
					</div>
				</div>
			</section>

			<section class="third-container">
				<div class="services-container">
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
			</section>

			<section class="fourth-container">
				<div class="photo-container">
					<img alt="demo-photo" src="<?php echo get_template_directory_uri() . '/assets/caravel-content-1.png'?>" />
				</div>
			</section>

			<section class="team-wrapper">
				<h1>The Team</h1>
				<p>human dynamics life Buddha LSD DMT mind-blowing topological final dream mushoom technology terminal Christianity neoarchaism</p>
				<div class="team-container">
					<div class="team-single">

						<img alt="Sean-photo" src="<?php echo get_template_directory_uri() . '/assets/Sean.jpg'?>" />
						<h3 class="position">Client Manager and Lead Developer</h3>
						<p>human dynamics life Buddha LSD DMT mind-blowing topological final dream mushoom technology terminal Christianity neoarchaism electromagnetic consequences drumming orbit catalytic psilocybin</p>
					</div>
					<div class="team-single">
						<img alt="Nate-photo" src="<?php echo get_template_directory_uri() . '/assets/Nate.jpg'?>" />
						<h3 class="position">Business Manager and Developer</h3>
						<p>human dynamics life Buddha LSD DMT mind-blowing topological final dream mushoom technology terminal Christianity neoarchaism electromagnetic consequences drumming orbit catalytic psilocybin</p>
					</div>
					<div class="team-single">

						<img alt="Colin-photo" src="<?php echo get_template_directory_uri() . '/assets/Colin.jpg'?>" />
						<h3 class="position">Software Developer</h3>
						<p>human dynamics life Buddha LSD DMT mind-blowing topological final dream mushoom technology terminal Christianity neoarchaism electromagnetic consequences drumming orbit catalytic psilocybin</p>
					</div>
					<div class="team-single">

						<img alt="Scott-photo" src="<?php echo get_template_directory_uri() . '/assets/Scott.jpg'?>" />
						<h3 class="position">Software Developer</h3>
						<p>human dynamics life Buddha LSD DMT mind-blowing topological final dream mushoom technology terminal Christianity neoarchaism electromagnetic consequences drumming orbit catalytic psilocybin</p>
					</div>
					<div class="team-single">

						<img alt="Matt-photo" src="<?php echo get_template_directory_uri() . '/assets/Matt.jpg'?>" />
						<h3 class="position">Lead Designer</h3>
						<p>human dynamics life Buddha LSD DMT mind-blowing topological final dream mushoom technology terminal Christianity neoarchaism electromagnetic consequences drumming orbit catalytic psilocybin</p>
					</div>
				</div>
			</section>

			<p>human dynamics life Buddha LSD DMT mind-blowing topological final dream mushoom technology terminal Christianity neoarchaism
				electromagnetic consequences drumming orbit catalytic psilocybin dominant evolution believe attractor featureless relationships
				imparted trajectory existence medium random geological reductionist</p>


			<!-- Press Releases  -->
			<section class="press-releases-wrapper">
				<h2 class="press-releases-title">Latest Press Releases</h2>
				<div class="sub-title-blue-line"></div>

				<div class="press-releases-container">

					<?php $args = array( 'post_type' => 'post', 'posts_per_page' => 3 ); $query = new WP_Query($args);?>
					<?php while ($query->have_posts()) : $query->the_post(); ?>
					<div class="press-release">
						<h3>
							<?php the_title(); ?>
						</h3>
						<p>
							<a href="<?php the_permalink();?>">Read More ‣</a>
						</p>
						<span>
							<?php the_category(', '); ?> • </span>
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