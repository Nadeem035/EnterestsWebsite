






<!--===========================-->
<!--=         Contact         =-->
<!--===========================-->
<section class="contactus">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <p>We’d love to hear from you! Reach out with any questions or to learn more about our services.</p>
            </div>
            <div class="col-md-4">
                <div class="contact-infos">
                    <div class="contact-info">
                        <h3 class="title">Our Location</h3>
                        <p class="description">
                            P-120 Siddiq Trade Centre<br>
                            Lahore, Pakistan
                        </p>

                        <div class="info phone">
                            <a href="tel:+923331022025" style="color:#7052fb;">
                                <i class="fas fa-phone-alt"></i>
                                <span>+92 333 102 202 5</span>
                            </a>
                        </div>
                        <div class="info phone">
                            <a href="https://api.whatsapp.com/send?phone=923331022025&text=Hello" style="color:#7052fb;" target="_blank">
                                <i class="fab fa-whatsapp"></i>
                                <span>+92 333 102 202 5</span>
                            </a>
                        </div>
                        <div class="info phone">
                            <a href="mailto:info@enterests.com" style="color:#7052fb;" target="_blank">
                                <i class="far fa-envelope"></i>
                                <span>info@enterests.com</span>
                            </a>
                        </div>
                    </div>
                    <!-- /.contact-info -->

                    <div class="contact-info">
                        <ul class="social-link">
                            <li><a href="<?=FB_LINK?>" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="javascript://" aria-label="Twitter"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="javascript://" aria-label="Google Plus"><i class="fab fa-google-plus-g"></i></a></li>
                            <li><a href="<?=LINKEDIN_LINK?>" aria-label="Linkedin"><i class="fab fa-linkedin-in"></i></a></li>
                        </ul>
                    </div>
                    <!-- /.contact-info -->
                </div>
                <!-- /.contact-infos -->
            </div>
            <!-- /.col-md-4 -->
            <div class="col-md-8">
                
                <div class="contact-froms">
                    <form action="<?=BASEURL."post-contact-form"?>" class="contact-form" id="contactForm" data-pixsaas="contact-froms" method="post">
                        <div class="row">
                            <div class="col-md-6">
                                <input type="text" name="name" placeholder="Name" required>
                            </div>

                            <div class="col-md-6">
                                <input type="text" name="company" placeholder="Company" required>
                            </div>

                            <div class="col-md-6">
                                <input type="email" name="email" placeholder="Email" required>
                            </div>

                            <div class="col-md-6">
                                <input type="text" name="phone" placeholder="Phone" required>
                            </div>
                            <div class="col-md-6">
                                <select name="package">
                                    <option value="" data-users="">Select Package</option>
                                    <option value="Starter Suite" data-users="Up to 3 users">Starter Suite</option>
                                    <option value="Advanced Suite"data-users="Up to 6 users">Advanced Suite</option>
                                    <option value="Pro Suite" data-users="Up to 10 users">Pro Suite</option>
                                    <option value="Custom Requirement" data-users="10+ users">Custom Requirement</option>
                                </select>
                            </div>

                            <div class="col-md-6">
                                <input type="text" name="users" placeholder="Number Of Users">
                            </div>

                            <div class="col-md-12">
                                <textarea name="comment" placeholder="Any Additional Information"></textarea>
                            </div>

                            <div class="col-md-12">
                                <button type="submit" class="pix-btn submit-btn color-two">
                                    <span class="btn-text">Send Your Massage</span>
                                    <i class="fas fa-spinner fa-spin"></i>
                                </button>
                            </div>
                        </div>

                        <div class="row">
                            <div class="form-result alert">
                                <div class="content"></div>
                            </div>
                        </div>
                    </form>
                    <!-- /.contact-froms -->
                </div>
                
            </div>
            <!-- /.col-md-8 -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
</section>
<!-- /.contactus -->
