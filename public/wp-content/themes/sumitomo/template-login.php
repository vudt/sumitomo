<?php /* Template Name: Login Page Template */ ?>

<?php 
$current_user = wp_get_current_user();
if ($current_user->ID > 0) {
    if (in_array('subscriber', $current_user->roles)) {
        $url = home_url() . '/thank-you';
        wp_redirect($url);
        die();
    }
}
?>

<?php get_header(); ?>
	
<section>
        <div class="lgx-banner lgx-banner-inner-custom">
            <div class="lgx-page-inner">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="lgx-heading-area">
                                <div class="lgx-heading">
                                    <h2 class="heading">Login</h2>
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

                    <div class="wrap-profile">

                        <?php the_content(); ?>

                    </div>

                    
				<?php endwhile; ?>

				<?php endif; ?>

			</div>
		</section>
	</div>
</main>	

<?php get_footer(); ?>