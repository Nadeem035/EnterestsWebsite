        <section class="call-to-action">

            <div class="container">
                <div class="action-content text-center wow pixFadeUp">
                    <h2 class="title">Ready to Make Magic Happen?</h2>

                    <p>
                       Join us for a chat and see how we can transform your business. Let's create something amazing together!
                    </p>

                    <a href="<?=BASEURL.'contact-us'?>" class="pix-btn btn-light">Let's Chat</a>
                </div>
                <!-- /.action-content -->
                <!-- /.row -->
            </div>
            <!-- /.container -->

            <div class="scroll-circle wow fadeInUp">
                <img src="https://res.cloudinary.com/df039hpk2/image/upload/v1743707281/circle10_sct9ds.webp" alt="circle6" data-parallax='{"y" : 50}'>
            </div>
        </section>
        <!-- /.newsletter -->

        <!--=========================-->
        <!--=        Footer         =-->
        <!--=========================-->
        <footer id="footer" class="footer-two">
            <div class="container">
                <div class="footer-inner wow pixFadeUp">
                    <div class="row">
                        <div class="col-lg-3 col-md-6">
                            <div class="widget footer-widget">
                                <h3 class="widget-title">Enterests</h3>

                                <ul class="footer-menu">
                                    <li><a href="<?=BASEURL,'about-us'?>">About Us</a></li>
                                    <li><a href="<?=BASEURL?>#homePageAddonsSectionId">Addons</a></li>
                                    <li><a href="<?=BASEURL?>#homePagePricingSectionId">Pricing</a></li>
                                    <li><a href="<?=BASEURL.'contact-us'?>">Contact</a></li>
                                </ul>
                            </div>
                            <!-- /.widget footer-widget -->
                        </div>
                        <!-- /.col-lg-3 col-md-6 -->

                        <div class="col-lg-3 col-md-6">
                            <div class="widget footer-widget">
                                <h3 class="widget-title">Useful Links</h3>

                                <ul class="footer-menu">
                                    <li><a href="<?=BASEURL.'blog'?>">Blog</a></li>
                                    <li><a href="<?=BASEURL.'faqs'?>">FAQ's</a></li>
                                    <li><a href="<?=BASEURL.'terms'?>">Terms.</a></li>
                                    <li><a href="<?=BASEURL.'policy'?>">Privacy & Policy.</a></li>
                                </ul>
                            </div>
                            <!-- /.widget footer-widget -->
                        </div>
                        <!-- /.col-lg-3 col-md-6 -->

                        <div class="col-lg-3 col-md-6">
                            <div class="widget footer-widget">
                                <h3 class="widget-title">Industries</h3>

                                <ul class="footer-menu">
                                    <?php foreach ($footer_blog as $keyFB => $fblog): ?>
                                        <li><a href="<?=BASEURL.'post/'.$fblog['slug']?>"><?=$fblog['short_title']?></a></li>
                                    <?php endforeach ?>
                                </ul>
                            </div>
                            <!-- /.widget footer-widget -->
                        </div>
                        <!-- /.col-lg-3 col-md-6 -->

                        <div class="col-lg-3 col-md-6">
                            <div class="widget footer-widget">
                                <h3 class="widget-title">Contact</h3>

                                <p>
                                    <a href="tel:+923331022025" style="color:#7052fb;"><i class="fas fa-phone-alt"></i>&nbsp;&nbsp;+92 333 102 202 5</a><br>
                                    <a href="https://api.whatsapp.com/send?phone=923331022025&text=Hello" style="color:#7052fb;" target="_blank"><i class="fab fa-whatsapp"></i>&nbsp;&nbsp;+92 333 102 202 5</a><br>
                                    <a href="mailto:info@enterests.com" style="color:#7052fb;"><i class="far fa-envelope"></i>&nbsp;&nbsp;info@enterests.com</a>
                                </p>

                                <ul class="footer-social-link">
                                    <li><a href="<?=FB_LINK?>" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="javascript://" aria-label="Twitter"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="javascript://" aria-label="Google Plus"><i class="fab fa-google-plus-g"></i></a></li>
                                    <li><a href="<?=LINKEDIN_LINK?>" aria-label="Linkedin"><i class="fab fa-linkedin-in"></i></a></li>
                                </ul>
                            </div>
                            <!-- /.widget footer-widget -->
                        </div>
                        <!-- /.col-lg-3 col-md-6 -->
                    </div>
                    <!-- /.row -->

                </div><!-- /.footer-inner -->

                <div class="site-info">
                    <div class="copyright">
                        <p>© 2024 All Rights Reserved, a project of <a href="http://www.hildes.info/" target="_blank">HilDes</a></p>
                    </div>

                    <ul class="site-info-menu">
                        <li><a href="<?=BASEURL.'policy'?>">Privacy & Policy.</a></li>
                        <li><a href="<?=BASEURL.'faqs'?>">FAQ's</a></li>
                        <li><a href="<?=BASEURL.'terms'?>">Terms.</a></li>
                    </ul>
                </div><!-- /.site-info -->
            </div><!-- /.container -->
            
            <div class="footer-big-logo">
                <img src="https://res.cloudinary.com/df039hpk2/image/upload/v1743704452/logo-footer_ulbu6s.webp" alt="Enterests logo">
            </div><!-- /footer-big-logo -->
        </footer><!-- /#footer -->


    </div><!-- /#site -->



<style>
    .mobile-footer-menu {
        position: fixed;
        bottom: 0;
        width: 100%;
        margin: 0 auto;
        left: 0;
        right: 0;
        z-index: 80000;
        background-color: #fff; /* Ensure a solid background */
        box-shadow: 0px -2px 16px 0px rgba(0, 0, 0, 0.1); /* Bottom shadow for better visibility */
        padding-bottom: env(safe-area-inset-bottom); /* For iPhones with notch */
    }

    .mobile-footer-menu .nav-box {
        display: flex;
        padding: 2px 8px;
        box-shadow: 0px 0px 16px 0px #4444;
    }

    .mobile-footer-menu .nav-container {
        display: flex;
        width: 100%;
        list-style: none;
        justify-content: space-around;
        margin: 0;
        padding: 0;
    }

    .mobile-footer-menu .nav__item {
        display: flex;
        position: relative;
        padding: 2px;
    }

    .mobile-footer-menu .nav__item.active .nav__item-icon {
        margin-top: -26px;
        background-color: #5b48e3;
        color: #fff;
        box-shadow: 0px 0px 16px 0px #4444;
    }

    .mobile-footer-menu .nav__item.active .nav__item-text {
        transform: scale(1);
        font-size: 12px;
        font-weight: 600;
        color: #5b48e3;
    }

    .mobile-footer-menu .nav__item .nav__item-text {
        color: #000;
    }

    .mobile-footer-menu .nav__item-link {
        display: flex;
        flex-direction: column;
        align-items: center;
        color: #2f3046;
        text-decoration: none;
    }

    .mobile-footer-menu .nav__item-icon {
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 1.6em;
        background-color: #fff;
        border-radius: 50%;
        height: 40px;
        width: 40px;
        transition: margin-top 250ms ease-in-out, box-shadow 250ms ease-in-out;
    }

    .mobile-footer-menu .nav__item-text {
        position: absolute;
        bottom: 0;
        transform: scale(0);
        transition: transform 250ms ease-in-out;
    }

    .mobile-footer-menu .nav__item-icon i {
        font-size: 16px;
    }

</style>
<nav class="mobile-footer-menu">
    <div class="nav-box">
        <ul class="nav-container">
            <li class="nav__item <?=($activePage == 'home') ? 'active' : '' ?>">
                <a href="<?=BASEURL?>" class="nav__item-link">
                    <div class="nav__item-icon">
                        <i class="fas fa-home"></i>
                    </div>
                    <span class="nav__item-text">Home</span>
                </a>
            </li>
            <li class="nav__item addonsSectionMobile" >
                <a href="<?=BASEURL?>#homePageAddonsSectionId" class="nav__item-link">
                    <div class="nav__item-icon">
                        <i class="fas fa-puzzle-piece"></i>
                    </div>
                    <span class="nav__item-text">Addons</span>
                </a>
            </li>
            <li class="nav__item pricingSectionMobile">
                <a href="<?=BASEURL?>#homePagePricingSectionId" class="nav__item-link">
                    <div class="nav__item-icon">
                        <i class="fas fa-dollar-sign"></i>
                    </div>
                    <span class="nav__item-text">Pricing</span>
                </a>
            </li>
            <li class="nav__item <?=($activePage == 'contact') ? 'active' : '' ?>">
                <a href="<?=BASEURL.'contact-us'?>" class="nav__item-link">
                    <div class="nav__item-icon">
                        <i class="fas fa-address-card"></i>
                    </div>
                    <span class="nav__item-text">Contact</span>
                </a>
            </li>
        </ul>
    </div>
</nav>













    <!-- Dependency Scripts -->
    <script src="<?=DEPENDENCIES?>jquery/jquery.min.js"></script>
    <script src="<?=DEPENDENCIES?>bootstrap/js/bootstrap.min.js"></script>
    <script src="<?=DEPENDENCIES?>swiper/js/swiper.min.js"></script>
    <script src="<?=DEPENDENCIES?>jquery.appear/jquery.appear.js"></script>
    <script src="<?=DEPENDENCIES?>wow/js/wow.min.js"></script>
    <script src="<?=DEPENDENCIES?>countUp.js/countUp.min.js"></script>
    <script src="<?=DEPENDENCIES?>isotope-layout/isotope.pkgd.min.js"></script>
    <script src="<?=DEPENDENCIES?>imagesloaded/imagesloaded.pkgd.min.js"></script>
    <script src="<?=DEPENDENCIES?>jquery.parallax-scroll/js/jquery.parallax-scroll.js"></script>
    <script src="<?=DEPENDENCIES?>magnific-popup/js/jquery.magnific-popup.min.js"></script>
    
    <script>
        const list = document.querySelectorAll(".nav__item");
        list.forEach((item) => {
          item.addEventListener("click", () => {
            list.forEach((item) => item.classList.remove("active"));
            item.classList.add("active");
          });
        });

        var hash = window.location.hash.substring(1); // removes the '#'
        if (hash == 'homePagePricingSectionId' || hash == 'homePageAddonsSectionId') {
            var navItems = document.querySelectorAll('.nav__item');
            navItems.forEach(function(item) {
                item.classList.remove('active');
            });
            if (hash == 'homePagePricingSectionId') {
                $('.pricingSectionMobile').addClass('active');
            }else{
                $('.addonsSectionMobile').addClass('active');
            }
        }
    </script>

    <script>
        $(window).on('scroll', function() {
            var pricingSection = $('#homePagePricingSectionId');
            var endFixedtabs = $('#endFixedtabs');
            var stickyTabsWrapper = $('.sticky-tabs-wrapper');

            // Get the top position of the pricing section and the bottom section
            var sectionTop = pricingSection.offset().top;
            var sectionBottom = endFixedtabs.offset().top + endFixedtabs.outerHeight();

            // Get the current scroll position
            var scrollPosition = $(window).scrollTop();

            // Check if the scroll position is within the pricing section
            if (scrollPosition >= sectionTop && scrollPosition < sectionBottom) {
                // Apply 'fixed' and remove 'hide' to show with slide animation
                stickyTabsWrapper.removeClass('hide');
            } else {
                // Add 'hide' to start sliding out and remove 'fixed' after animation
                stickyTabsWrapper.addClass('hide');
            }
        });

        $(document).ready(function() {
            $('.tab-link').on('click', function(e) {
                e.preventDefault(); // Prevent default anchor behavior
                $('html, body').animate({
                    scrollTop: $('#homePagePricingSectionId').offset().top + 100
                }, 800); // Adjust the animation duration as needed
            });
        });

    </script>
    <?php if ($package): ?>
        <script>
            $(document).ready(function() {
                var element = $('#contactusPageFormSection');
                if (element.length) { // Only run if the element exists
                    $('html, body').animate({
                        scrollTop: element.offset().top
                    }, 1000);
                } else {
                    console.error('Element not found');
                }
                $('input[name="name"]').focus();
            });
        </script>   
    <?php endif ?>

    <!-- Site Scripts -->
    <script src="<?=JS?>header.js"></script>
    <script src="<?=JS?>app.js"></script>
    <style>
    .float{
        position:fixed;
        width:42px;
        height:42px;
        bottom:70px;
        right:20px;
        background-color:#25d366;
        color:#FFF;
        border-radius:50px;
        text-align:center;
        font-size:20px;
        z-index:100;
        text-align: center;
    }
    @media(max-width:767px){
        .float{
            bottom: 140px;
        }
    }
    .float:hover{
        color: #fff;
        -webkit-transform: scale(1.07);
        -ms-transform: scale(1.07);
        transform: scale(1.07);
        background: #7052fb;
        -webkit-box-shadow: 0px 10px 20px 8px rgba(0, 0, 0, 0.15);
        box-shadow: 0px 10px 20px 8px rgba(0, 0, 0, 0.15);
    }

    .my-float{
        margin-top:11px;
    }
    </style>
    <a href="https://api.whatsapp.com/send?phone=923331022025&text=Hello" class="float" target="_blank" aria-label="WhatsApp Link">
        <i class="fab fa-whatsapp my-float"></i>
    </a>
</body>
</html>