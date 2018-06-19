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
    if (isset($_POST['email']) == true) {
        $displayInput = false;

        
        $to = $_POST['email'];
        $subject = "Submit was a Success!";

        $message = '
        <html>
        <head>
        <title>ETS</title>
        </head>';
        $message .=
        
    '<body style="margin: 0; padding: 0; bgcolor: #eeeeee ">
        <table border="0" cellpadding="0" cellspacing="0" width="100%">
         <tr>
            <td style="padding: 20px 0 30px 0;">
              <table align="center" border="0" cellpadding="0" cellspacing="0" width="600" style="border: 1px solid #cccccc;">
                  <tr>
                    <td align="center" bgcolor="#b5d3e7" style="padding: 40px 0 30px 0;">
                      <img src="" alt="Creating Email Magic" width="450" height="80" style="display: block;" />
                    </td>
                  </tr>
                  <tr>
                    <td bgcolor="#f8f8f8" style="padding: 40px 30px 40px 30px;">
                      <table border="0" cellpadding="0" cellspacing="0" width="100%">
                       <tr>
                        <td>
                            <table border="0" cellpadding="0" cellspacing="0" width="100%">
                              <tr>
                                <td style="color: #ecb42b; font-family: Helvetica, Arial, Verdana, "Trebuchet MS"; font-size: 24px;">
                                  <b>You have successfully registered!</b>
                                </td>
                              </tr>
                              <tr>
                               <td style="padding: 20px 0 30px 0; color: #ecb42b; font-family: Helvetica, Arial, Verdana, "Trebuchet MS"; font-size: 16px; line-height: 20px;">
                                We are just putting the finishing touches on the magazine. We appreciate your support, and will send the magazine as soon as it is complete.
                               </td>
                              </tr>
                            </table>
                          </td>
                       </tr>
                      </table>
                    </td>               
                  </tr>
                  <tr>
                    <td bgcolor="#b5d3e7" style="padding: 30px 30px 30px 30px;">
                      <table border="0" cellpadding="0" cellspacing="0" width="100%">
                        <tr>
                          <td style="color: #001d48; font-family: Helvetica, Arial, Verdana, "Trebuchet MS"; font-size: 16px; line-height: 20px;">
                          &copy;  2018. All Rights Reserved.
                          </td>
                        </tr>
                      </table>
                    </td>
                  </tr>
                </table>        
          </td>
         </tr>
        </table>
       </body>
      
       ';

        // Always set content-type when sending HTML email
        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

        // More headers
        $headers .= 'From: <ncmoseley@gmail.com>' . "\r\n";
        mail($to, $subject, $message, $headers);
        $toMe = "ncmoseley@gmail.com";
        $subjectMine = "Someone Submitted Contact form";
        $txt = $_POST['email'] . " just submitted";
        $headersMine = "From: webmaster@example.com";
        mail($toMe, $subjectMine, $txt, $headersMine);
    } else {
        $displayInput = true;
    }
?>

										<?php
                if ($displayInput == true) {
                    ?>
										<form id="nl-form" class="nl-form" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
											I want to get my website or app
											<select>
												<option value="1" selected>....</option>
												<option value="2">looking better</option>
												<option value="3">working</option>
												<option value="4">built</option>
												<option value="2">finished</option>
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
											<input type="text" value="" placeholder="any time" data-subline="For example: <em>next-week</em> or <em>next-month</em>" /> in
											<input type="text" value="" placeholder="any city" data-subline="For example: <em>Los Angeles</em> or <em>Vancouver</em>"
											/>
											<input type="email" placeholder="  E-MAIL" id="myEmail" required="required" name="email" class="userInput"><input type="image" name="submit" src="img/send.png" alt="Submit" class="mail"/>
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




	<!-- <?php get_template_part('template-parts/content-form'); ?> -->

	



    
        <!-- <div class="left">
            <?php
                if ($displayInput == true) {
                    ?>

            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
            <div class="mimo">
            <input type="email" placeholder="  E-MAIL" id="myEmail" required="required" name="email" class="userInput"><input type="image" name="submit" src="img/send.png" alt="Submit" class="mail"/>
            </div>
            </form>

            <?php
                } else {
                    ?>
            <p class="bot bot_second" >An email has been sent to your mailbox, please check!</p>
            <?php
                }
            ?>
        </div> -->
        
        
   
    



