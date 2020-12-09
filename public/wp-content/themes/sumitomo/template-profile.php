<?php /* Template Name: Profile Page Template */ ?>
<?php 
$current_user = wp_get_current_user();
if ($current_user->ID == 0) {
    die('dd');
    $link_redirect = home_url() . '/login'; 
    wp_safe_redirect($link_redirect);
    die();
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
                                    <h2 class="heading">Profile</h2>
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

                        <a href="<?php echo home_url() ?>/logout">Logout</a>

                    </div>

                    
				<?php endwhile; ?>

				<?php endif; ?>

			</div>
		</section>
	</div>
</main>	

<?php get_footer(); ?>