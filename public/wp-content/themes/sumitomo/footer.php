	<!--FOOTER-->
<footer>
    <div id="lgx-footer" class="lgx-footer lgx-footer-black"> <!--lgx-footer-black-->
        <div class="lgx-inner-footer">
            <div class="container">
                <div class="lgx-footer-area">
                    <div class="lgx-footer-single">
                        <h3 class="footer-title">Organised by:</h3>
                        <img src="<?php echo get_template_directory_uri() ?>/assets/img/footer-logo.png" alt="" style="width: 300px;" /><br>
                        <span style="font-size: 11px; margin-top: 5px; color: #fff">M-SA-NPE-2020-01</span>
                    </div>
                    <div class="lgx-footer-single">
                        <h3 class="footer-title">Managed by:</h3>
                        <img src="<?php echo get_template_directory_uri() ?>/assets/img/MP-Singapore-Logo.png" alt="" style="width: 150px;"/>
                    </div>
                </div>
            </div>
            <!-- //.CONTAINER -->
        </div>
        <!-- //.footer Middle -->
    </div>
</footer>
<!--FOOTER END-->


</div>

	<?php wp_footer(); ?>

<!--//.LGX SITE CONTAINER-->
<!-- *** ADD YOUR SITE SCRIPT HERE *** -->
<!-- JQUERY  -->
<script src="<?php echo get_template_directory_uri() ?>/assets/js/vendor/jquery-1.12.4.min.js"></script>

<!-- BOOTSTRAP JS  -->
<script src="<?php echo get_template_directory_uri() ?>/assets/libs/bootstrap/js/bootstrap.min.js"></script>

<!-- Smooth Scroll  -->
<script src="<?php echo get_template_directory_uri() ?>/assets/libs/jquery.smooth-scroll.js"></script>

<!-- SKILLS SCRIPT  -->
<script src="<?php echo get_template_directory_uri() ?>/assets/libs/jquery.validate.js"></script>

<!-- if load google maps then load this api, change api key as it may expire for limit cross as this is provided with any theme -->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDQvRGGtL6OrpP5xVMxq_0NgiMiRhm3ycI"></script>

<!-- CUSTOM GOOGLE MAP -->
<script type="text/javascript" src="<?php echo get_template_directory_uri() ?>/assets/libs/gmap/jquery.googlemap.js"></script>

<!-- adding magnific popup js library -->
<script type="text/javascript" src="<?php echo get_template_directory_uri() ?>/assets/libs/maginificpopup/jquery.magnific-popup.min.js"></script>

<!-- Owl Carousel  -->
<script src="<?php echo get_template_directory_uri() ?>/assets/libs/owlcarousel/owl.carousel.min.js"></script>

<!-- COUNTDOWN   -->
<script src="<?php echo get_template_directory_uri() ?>/assets/libs/countdown.js"></script>
<script src="<?php echo get_template_directory_uri() ?>/assets/libs/timer/TimeCircles.js"></script>

<!-- Counter JS -->
<script src="<?php echo get_template_directory_uri() ?>/assets/libs/waypoints.min.js"></script>
<script src="<?php echo get_template_directory_uri() ?>/assets/libs/counterup/jquery.counterup.min.js"></script>

<!-- SMOTH SCROLL -->
<script src="<?php echo get_template_directory_uri() ?>/assets/libs/jquery.smooth-scroll.min.js"></script>
<script src="<?php echo get_template_directory_uri() ?>/assets/libs/jquery.easing.min.js"></script>

<!-- type js -->
<script src="<?php echo get_template_directory_uri() ?>/assets/libs/typed/typed.min.js"></script>

<!-- header parallax js -->
<script src="<?php echo get_template_directory_uri() ?>/assets/libs/header-parallax.js"></script>

<!-- instafeed js -->

<script src="<?php echo get_template_directory_uri() ?>/assets/libs/instafeed.min.js"></script>

<!-- CUSTOM SCRIPT  -->
<script src="<?php echo get_template_directory_uri() ?>/assets/js/custom.script.js"></script>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-ERWR7VTW8Z"></script>
<script>
window.dataLayer = window.dataLayer || [];
function gtag(){dataLayer.push(arguments);}
gtag('js', new Date());

gtag('config', 'G-ERWR7VTW8Z');
</script>
	


</body>
</html>