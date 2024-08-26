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

    <div id="origin" class="clearfix">

        <div class="section-block">

            <div class="row">

                <div class="large-10 medium-10 small-12 columns large-centered medium-centered">

                    <h2 data-aos="fade-up" data-aos-delay="150" data-aos-duration="1000">Who we are?</h2>

                    <p data-aos="fade-up" data-aos-delay="150" data-aos-duration="1000">
                        We have combined our 12+ of experience in development and design to launch TJN in 2019. Our success over the years is down to the talent and expertise of our creative thinkers &amp; makers. who work alongside each client to bring their vision to life. Whether you wish for expert help to build your brand from scratch or desire to revamp your company with a fresh new look, we can make it happen. Everything we do entails a high level of attention to detail, strategic planning, and creativity.
                    </p>

                </div>

            </div>

            <div class="row">
                <div class="clear2"></div>
            </div>

            <div class="row">

                <div class="large-10 medium-10 small-12 columns large-centered medium-centered">

                    <h2 data-aos="fade-up" data-aos-delay="150" data-aos-duration="1000">Who are our clients?</h2>

                    <p data-aos="fade-up" data-aos-delay="150" data-aos-duration="1000">
                        We love a challenge and have been lucky enough to work with a variety of clients from all kinds of industries. Every project is different and we adapt our services to your needs and wishes to deliver a website that’s uniquely designed, matches your brand’s identity, and is capable of both attracting visitors and converting them into regular customers.

                    </p>

                </div>

            </div>

        </div>

    </div>

    <div id="clients" class="clearfix">

        <div class="row">

            <?php if( have_rows('client_logos') ): ?>

            <div class="small-up-2 medium-up-5 large-up-5">

                <?php while( have_rows('client_logos') ): the_row(); ?>

                <div class="column client-logo" data-aos="fade-up" data-aos-delay="150" data-aos-duration="1000">

                    <a target="_blank" href="<?php the_sub_field('client_link'); ?>">
                        <img src="<?php the_sub_field('image'); ?>">
                    </a>

                </div>

                <?php endwhile; ?>

            </div>

            <?php endif; ?>

        </div>

    </div>

    <div id="philosophy" class="clearfix">

        <div class="section-block">

            <div class="row">

                <div class="large-10 medium-10 small-12 columns large-centered medium-centered">

                    <h2 data-aos="fade-up" data-aos-delay="150" data-aos-duration="1000">What is our philosophy?</h2>

                    <p data-aos="fade-up" data-aos-delay="150" data-aos-duration="1000">
                        We like to stay ahead of times and does that by offering creative solutions that are progressive and capable of boosting your company. We work by understanding what your audience wants &amp; needs, as they are at the heart of your brand, and use these key insights to create websites and marketing strategies that bring the results you aspire to achieve.
                    </p>

                </div>

            </div>

            <div class="row">
                <div class="large-12 medium-12 small-12 columns">
                    <div class="clear4"></div>
                </div>
            </div>

            <div class="row align-middle">

                <div class="large-4 medium-4 small-12 columns">

                    <div class="large-12 medium-12 small-12 columns">
                        <h2 class="text-center" data-aos="fade-left" data-aos-delay="150" data-aos-duration="1000">12+</h2>
                        <p class="text-center" data-aos="fade-left" data-aos-delay="150" data-aos-duration="1000">experience &amp; <br>expertise</p>
                    </div>

                    <div class="clear2"></div>

                    <div class="large-12 medium-12 small-12 columns">
                        <h2 class="text-center" data-aos="fade-left" data-aos-delay="150" data-aos-duration="1000">120+</h2>
                        <p class="text-center" data-aos="fade-left" data-aos-delay="150" data-aos-duration="1000">websites + brands <br>launched</p>
                        <div class="clear2 show-for-small-only"></div>
                    </div>

                </div>

                <div class="large-4 medium-4 small-12 columns hide-for-small-only">
                    <div class="large-12 medium-12 small-12 columns">
                        <img data-aos="fade-up" data-aos-delay="150" data-aos-duration="1000" class="logo" src="<?php bloginfo('url'); ?>/wp-content/uploads/2021/08/tjn-logo.svg">
                    </div>

                </div>

                <div class="large-4 medium-4 small-12 columns">

                    <div class="large-12 medium-12 small-12 columns">
                        <h2 class="text-center" data-aos="fade-right" data-aos-delay="150" data-aos-duration="1000">100%</h2>
                        <p class="text-center" data-aos="fade-right" data-aos-delay="150" data-aos-duration="1000">in-house &amp; <br>independent</p>
                    </div>

                    <div class="clear2">
                        <div class="clear2"></div>
                    </div>

                    <div class="large-12 medium-12 small-12 columns">
                        <h2 class="text-center" data-aos="fade-right" data-aos-delay="150" data-aos-duration="1000">100%</h2>
                        <p class="text-center" data-aos="fade-right" data-aos-delay="150" data-aos-duration="1000">working globally, <br>proudly from London</p>
                    </div>

                </div>

            </div>

        </div>

    </div>

    <div id="what-we-do" class="clearfix">

        <div class="section-block">

            <div class="row">

                <div class="large-10 medium-10 small-12 columns large-centered medium-centered">

                    <h2 data-aos="fade-up" data-aos-delay="150" data-aos-duration="1000">We provide a full range of services</h2>

                    <div class="clear1"></div>

                </div>

            </div>

            <div class="row">

                <div class="large-10 medium-10 small-12 columns large-centered medium-centered">

                    <ul class="list" data-aos="fade-up" data-aos-delay="150" data-aos-duration="1000">
                        <li><a href="#carousel-cell1">creative web design.</a></li>
                        <li><a href="#carousel-cell2">web development.</a></li>
                        <li><a href="#carousel-cell3">branding.</a></li>
                        <li><a href="#carousel-cell4">digital marketing.</a></li>
                        <li><a href="#carousel-cell5">e-commerce.</a></li>
                        <li><a href="#carousel-cell6">wordpress.</a></li>
                    </ul>

                </div>

            </div>

            <div class="row">

                <div class="section-block">

                    <div class="large-11 medium-10 large-centered medium-centered small-12 columns" data-equalizer>

                        <?php if( have_rows('our_services', 16) ): ?>

                        <?php $counter = 1;  //this sets up the counter starting at 0 ?>

                        <div class="carousel carousel-gallery" data-flickity='{"pageDots": true, "freeScroll": false, "prevNextButtons": false, "wrapAround": true, "hash": true }'>
                            <?php while( have_rows('our_services', 16) ): the_row(); ?>

                            <div data-aos="fade-up" data-aos-delay="150" data-aos-duration="1000" class="carousel-cell" id="carousel-cell<?php echo $counter; ?>" data-equalizer-watch>

                                <div class="large-12 medium-12 small-12 columns">

                                    <i class="<?php the_sub_field('icon'); ?>"></i>

                                    <div class="clear2"></div>

                                    <h4><?php the_sub_field('title'); ?></h4>

                                    <div class="clear1"></div>

                                    <p><?php the_sub_field('description'); ?></p>

                                </div>

                            </div>

                            <?php $counter++; // add one per row ?>

                            <?php endwhile; ?>

                        </div>

                        <?php endif; ?>

                    </div>

                </div>

            </div>


        </div>

    </div>

</div> <!-- end #content -->

<?php get_footer(); ?>
