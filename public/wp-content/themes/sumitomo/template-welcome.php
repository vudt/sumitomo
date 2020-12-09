<?php /* Template Name: Welcome Page Template */ ?>
<?php 
$current_user = wp_get_current_user(); 
if ($current_user->ID == 0) {
    $link_redirect = home_url() . '/login'; 
    wp_redirect($link_redirect);
    die();
}
?>
<?php get_header(); ?>
<style type="text/css">
    @media only screen and (max-width: 767px) {
        .lgx-page-wrapper {
            padding: 4rem 0 8rem;
        }
    }
</style>
<section>
        <div class="lgx-banner lgx-banner-inner-custom">
            <div class="lgx-page-inner">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="lgx-heading-area">
                                <div class="lgx-heading">
                                    <h2 class="heading">Thank you</h2>
                                </div>
                            </div>
                        </div>
                    </div><!--//.ROW-->
                </div><!-- //.CONTAINER -->
            </div><!-- //.INNER -->
        </div>
</section>


<main>
	<div class="lgx-page-wrapper">
		<section>
			<div class="container">

				<?php if (have_posts()): while (have_posts()) : the_post(); ?>
                    <div class="wrap-thankyou">
                        <h3>REGISTRATION CONFIRMATION – WEBINAR “MEET THE EXPERT – SCHIZOPHRENIA CASES”</h3>
                        <p>Dear <?php echo $current_user->data->display_name ?>,</p>
                        <p>You have been registered to attend the webinar " Meet the Expert – Schizophrenia Cases ". It will take place on Thursday, 19 November 2020 from 19:00 - 21:00 (SGT/GMT +8).</p>
                        <p>Please make sure to mark your calendar by clicking on the reminder below. </p>
                        <p><a class="btn-calendar" target="_blank"  href="https://smtwebinar.today/wp-content/uploads/2020/10/Meet-the-Expert-–-Schizophrenia-Cases.ics">Add to calendar</a></p>
                        <p>A personalised log in link will be sent to you via email a few days before the event. To ensure that you receive our emails, please add <a href="mailto:mailto:info@smtwebinar.today">info@smtwebinar.today</a> into your safe senders list. Kindly note that the password created during your registration process will be needed to log into the webinar session.</p>          
                        <p>Please get in touch with us at <a href="mailto:mailto:info@smtwebinar.today">info@smtwebinar.today</a> should you have any queries.</p>          
                        <p>See you soon!</p>         
                        <br>
                        <br>
                        <p><strong>Best regards,</strong></p>
                        <p><strong>Sumitomo Pharmaceuticals Webinar Team</strong></p>
                    </div>
				<?php endwhile; ?>

				<?php endif; ?>

			</div>
		</section>
	</div>
</main>	

<?php get_footer(); ?>