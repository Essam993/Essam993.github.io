<?php include("layout/header.php"); ?>

<style>
    .preloader{
        display: none
    }
</style>
<div id="ajax-page" class="ajax-page-content">
    <div class="ajax-page-wrapper">
        <div class="ajax-page-nav">
            <div class="nav-item ajax-page-prev-next">
                <a class="ajax-page-load" href="portfolio-5.html"><i class="pe-7s-icon pe-7s-angle-left"></i></a>
                <a class="ajax-page-load" href="portfolio-2.html"><i class="pe-7s-icon pe-7s-angle-right"></i></a>
            </div>
            <div class="nav-item ajax-page-close-button">
                <a id="ajax-page-close-button" href="#"><i class="pe-7s-icon pe-7s-close"></i></a>
            </div>
        </div>

        <div class="ajax-page-title">
            <h1>Bevatel</h1>
        </div>

        <div class="row">
            <div class="col-sm-7 col-md-7 portfolio-block">
                <div class="owl-carousel portfolio-page-carousel">
                    <div class="item">
                        <img src="images/portfolio/full/bevatel.png" alt="">
                    </div>
                    <div class="item">
                        <img src="images/portfolio/full/bevatel-packages.png" alt="">
                    </div>
                    <div class="item">
                        <img src="images/portfolio/full/bevatel-sidebar.png" alt="">
                    </div>
                </div>

                <script type="text/javascript">
                    function customAjaxScroll() {
                        var windowWidth = $(window).width();
                        if (windowWidth > 991) {
                            // Custom Ajax Page Scroll
                            $("#ajax-page").mCustomScrollbar({
                                scrollInertia: 8,
                                documentTouchScroll: false
                            });
                        } else {
                            $("#ajax-page").mCustomScrollbar('destroy');
                        }
                    }

                    jQuery(document).ready(function($){

                        // Ajax Loaded Page Scroll
                        customAjaxScroll();


                        $('.portfolio-page-carousel').owlCarousel({
                            smartSpeed:1200,
                            items: 1,
                            loop: true,
                            dots: true,
                            nav: true,
                            navText: false,
                            margin: 10
                        });

                    });

                    jQuery(window).on('resize', function() {
                        customAjaxScroll();
                    });
                </script>
            </div>

            <div class="col-sm-5 col-md-5 portfolio-block">
                <!-- Project Description -->
                <div class="block-title">
                    <h3>Description</h3>
                </div>
                <ul class="project-general-info">
                    <li><p><i class="fa fa-user"></i>Bevatel</p></li>
                    <li><p><i class="fa fa-globe"></i> <a href="#" target="_blank">www.bevatel.com</a></p></li>
                    <li><p><i class="fa fa-calendar"></i> Aug, 2021</p></li>
                </ul>

                <p class="text-justify">Bevatel is a call center solution company and this website shows their products , contact data, services , syncing with CRM and login to cloud, so i handled everything like designing the website and keep in mind our branding strategy, server side handling, and SEO standards and we ranked the website over Google Egypt & KSA with speed 2.3s over 4G which is great</p>
                <!-- /Project Description -->

                <!-- Technology -->
                <div class="tags-block">
                    <div class="block-title">
                        <h3>Technology</h3>
                    </div>
                    <ul class="tags">
                        <li><a>Bootstap</a></li>
                        <li><a>CSS3</a></li>
                        <li><a>PHP</a></li>
                        <li><a>Jquery</a></li>
                        <li><a>Web Form</a></li>
                        <li><a>FreshChat</a></li>
                        <li><a>Lottiefiles</a></li>
                    </ul>
                </div>
                <!-- /Technology -->

                <!-- Share Buttons -->
                <div class="btn-group share-buttons">
                    <div class="block-title">
                        <h3>Share</h3>
                    </div>
                    <a href="#" target="_blank" class="btn"><i class="fa fa-facebook"></i> </a>
                    <a href="#" target="_blank" class="btn"><i class="fa fa-twitter"></i> </a>
                    <a href="#" target="_blank" class="btn"><i class="fa fa-dribbble"></i> </a>
                </div>
                <!-- /Share Buttons -->
            </div>
        </div>
    </div>
</div>

<?php include("layout/footer.php"); ?>
