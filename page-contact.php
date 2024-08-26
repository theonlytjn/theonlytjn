<?php get_header(); ?>

<div id="content" class="clearfix">

    <div id="page-banner" class="clearfix">

        <div class="row">

            <div class="large-9 medium-8 small-12 columns">

                <h5 data-aos="fade-down" data-aos-delay="150" data-aos-duration="1000"><?php the_title(); ?></h5>

                <h1 data-aos="fade-up" data-aos-delay="150" data-aos-duration="1000"><?php the_field('page_title'); ?></h1>

            </div>

        </div>

    </div>

    <div id="contact-info" class="clearfix">

        <div class="section-block">

            <div class="row">

                <div class="large-6 medium-6 small-12 columns">

                    <div class="large-12 medium-12 small-12 columns">

                        <i data-aos="fade-up" data-aos-delay="150" data-aos-duration="1000" class="fal fa-envelope"></i>

                        <p data-aos="fade-up" data-aos-delay="150" data-aos-duration="1000">
                            <a target="_blank" href="mailto:hello@theonlytjn.com">hello@theonlytjn.com</a>
                        </p>

                    </div>

                    <div class="clear2"></div>

                    <div class="large-4 medium-4 small-6 columns social-icon">

                        <i data-aos="fade-up" data-aos-delay="150" data-aos-duration="1000" class="fab fa-instagram"></i>

                        <p data-aos="fade-up" data-aos-delay="150" data-aos-duration="1000">
                            <a target="_blank" href="https://www.instagram.com/theonlytjn/">
                                @theonlytjn
                            </a>
                        </p>

                    </div>

                    <div class="large-4 medium-4 small-6 columns social-icon">

                        <i data-aos="fade-up" data-aos-delay="150" data-aos-duration="1000" class="fab fa-twitter"></i>

                        <p data-aos="fade-up" data-aos-delay="150" data-aos-duration="1000">
                            <a target="_blank" href="https://www.twitter.com/theonlytjn">
                                @theonlytjn
                            </a>
                        </p>

                    </div>

                    <div class="large-4 medium-4 small-6 columns social-icon">

                        <i data-aos="fade-up" data-aos-delay="150" data-aos-duration="1000" class="fab fa-facebook-f"></i>

                        <p data-aos="fade-up" data-aos-delay="150" data-aos-duration="1000">
                            <a target="_blank" href="https://www.facebook.com/theonlytjnagency">
                                @theonlytjnagency
                            </a>
                        </p>

                    </div>

                    <div class="large-4 medium-4 small-6 columns social-icon">

                        <i data-aos="fade-up" data-aos-delay="150" data-aos-duration="1000" class="fab fa-linkedin-in"></i>

                        <p data-aos="fade-up" data-aos-delay="150" data-aos-duration="1000">
                            <a target="_blank" href="https://www.linkedin.com/in/tonyjnrnwachi">
                                @theonlytjn
                            </a>
                        </p>

                    </div>

                    <div class="large-4 medium-4 small-6 columns social-icon">

                        <i data-aos="fade-up" data-aos-delay="150" data-aos-duration="1000" class="fab fa-behance"></i>

                        <p data-aos="fade-up" data-aos-delay="150" data-aos-duration="1000">
                            <a target="_blank" href="https://www.behance.net/theonlytjn">
                                @theonlytjn
                            </a>
                        </p>

                    </div>

                    <div class="large-4 medium-4 small-6 columns social-icon">

                        <i data-aos="fade-up" data-aos-delay="150" data-aos-duration="1000" class="fab fa-dribbble"></i>

                        <p data-aos="fade-up" data-aos-delay="150" data-aos-duration="1000">
                            <a target="_blank" href="https://dribbble.com/theonlytjn">
                                @theonlytjn
                            </a>
                        </p>

                    </div>

                </div>

                <div class="large-6 medium-6 small-12 columns">

                    <h5 data-aos="fade-up" data-aos-delay="150" data-aos-duration="1000">shoot me a message</h5>

                    <div class="clear2"></div>

                    <div data-aos="fade-up" data-aos-delay="150" data-aos-duration="1000">

                        <?php echo do_shortcode("[ninja_form id='1']"); ?>

                    </div>

                </div>

            </div>

        </div>

    </div>

</div> <!-- end #content -->

<?php get_footer(); ?>
