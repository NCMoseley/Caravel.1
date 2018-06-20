
		<?php

    if (isset($_POST['email']) == true) {
        $displayInput = false;
        if ($_POST["submit"]) {
            $recipient="ncmoseley@gmail.com"; //Enter your mail address
            $subject="Contact from Website"; //Subject
            $senderEmail=$_POST["email"];
            $mailBody="Name: $sender\nEmail Address: $senderEmail\n\nMessage: $message";
            mail($recipient, $subject, $mailBody);
            sleep(1);
            header("Location:http:youfoundnate.com"); // Set here redirect page or destination page
        }
    } else {
        $displayInput = true;
    }
?>



<?php
/**
 * The main template file.
 *
 * @package youfoundNate_Web_Theme
 */

get_header(); ?>


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



				<section class="second-container">
					<div class="services-container">
						<div class="sliding-background"></div>
						<span class="title-paragraph-container">
							<h2 name="#" id="#" class="header-container">Services</h2>
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

							<div class="nl-blurred">
								<div class="container demo-1">
									
									<div class="main clearfix">

								

										<?php
                if ($displayInput == true) {
                    ?>
										<form id="nl-form" class="nl-form" action=" " method="post">
											I want to get my website or app
											<select>
												<option value="1" selected>finished</option>
												<option value="2">looking better</option>
												<option value="3">working</option>
												<option value="4">built</option>

											</select>
											<br />in a
											<select>
												<option value="1" selected>standard</option>
												<option value="2">fancy</option>
												<option value="3">hip</option>
												<option value="4">quick</option>
												<option value="5">old school</option>
											</select>
											way
											<br />by
											<input name='time' type="text" value="" placeholder="any time" data-subline="For example: <em>next-week</em> or <em>next-month</em>" /> in
											<input name='place' type="text" value="" placeholder="any city" data-subline="For example: <em>Los Angeles</em> or <em>Vancouver</em>"
											/>.
											<input name="email" type="email" placeholder="  email" id="myEmail" required="required"  class="userInput">
											<div class="nl-submit-wrap">
												<button class="nl-submit" type="submit">Submit</button>
											</div>
											<div class="nl-overlay"></div>
										</form>

										<?php
                } else {
                    ?>
            <p class="bot bot_second" >An email has been sent to your mailbox, please check!</p>
            <?php
                }
            ?>
									</div>
								</div>

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



	

        
        
   
    



