<?php /* Template Name: Stream Page Template */ ?>


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
                                    <h2 class="heading">Stream</h2>
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
                                    <div class="row">
                                        <div class="col-sm-12 stream-details">
                                            <div id='wowza_player'></div>
                                            <div class="pigeonhole-iframe"></div>
                                        </div>
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

<style type="text/css">
    .stream-details>*{
        display: inline-block;
        margin-right: -4px;
        vertical-align: top;
    }
    .stream-details #wowza_player{width: calc(100% - 404px) !important; height: 414px !important}
    .stream-details .pigeonhole-iframe{width: 404px !important;}
    .stream-details .pigeonhole-iframe .iframe-wrap{width: 100% !important;}
    @media (max-width: 1200px){
        .stream-details #wowza_player{width: calc(100% - 304px) !important; height: 414px !important}
        .stream-details .pigeonhole-iframe{width: 304px !important;}
    }
    @media (max-width: 767px){
        .stream-details>*{display: block;}
        .stream-details #wowza_player{width: 100% !important;}
        .stream-details .pigeonhole-iframe,
        .stream-details .pigeonhole-iframe .iframe-wrap{width: 100% !important;}
    }
</style>

<script id='player_embed' src='//player.cloud.wowza.com/hosted/vhyylpcc/wowza.js' type='text/javascript'></script>
<script type="text/javascript">
    (function(p,i,g,e,o,n,s){p[o]=p[o]||function(){(p[o].q=p[o].q||[]).push(arguments)},
        n=i.createElement(g),s=i.getElementsByTagName(g)[0];n.async=1;n.src=e;
        s.parentNode.insertBefore(n,s);})
        (window,document,'script','https://static.pigeonhole.at/widget/pigeon-widget.js','phl');
    phl("create", {
        width: "390px",
        height: "380px",
        passcode: "191120",
        className: "pigeonhole-iframe",
        sessionId: 1327984, 
    });
</script>

<?php get_footer(); ?>