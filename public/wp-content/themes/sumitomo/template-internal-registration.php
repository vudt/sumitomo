<?php /* Template Name: Internal Registration Page Template */ ?>

<?php 
$current_user = wp_get_current_user();
if ($current_user->ID > 0) {
    $url = home_url() . '/thank-you';
    wp_redirect($url);
    die();
}
?>

<?php get_header(); ?>
<style>
    .umss {
        text-align: center;
    }
    .umss p {
        margin-bottom: 10px;
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
                                    <h2 class="heading">Registration</h2>
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

                    <div class="registration-custom">

    					<div class="lgx-contactform">

    						<div class="row">
                                <div class="col-sm-12 col-md-12">
                                    <div class="lgx-heading">
                                        <h2 class="heading">Meet the Expert – Schizophrenia Cases</h2>
                                        <h3 class="subheading">Thursday, 19th November 2020, 19:00 - 21:00 (SGT / GMT+8)</h3>
                                    </div>
                                </div>
                            </div>

    						<?php the_content(); ?>

    					</div>
                    </div>

				<?php endwhile; ?>

				<?php endif; ?>

			</div>
		</section>
	</div>
</main>	

<?php get_footer(); ?>