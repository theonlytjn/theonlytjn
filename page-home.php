<?php get_header(); ?>

<div id="content" class="clearfix">

    <div id="home-banner" class="clearfix">

        <?php add_revslider('portfolio-showreel','homepage'); ?>

    </div>

    <!--div id="page-banner-home" class="clearfix">

        <div class="page-banner-home" data-aos="fade-zoom-in" data-aos-easing="ease-in-back" data-aos-delay="100" data-aos-offset="0">

            <div class="row">

                <div class="large-8 medium-8 small-12 columns">

                    <h1 data-aos="fade-up" data-aos-delay="750" data-aos-duration="1000">code, design, <br> sleep, repeat</h1>

                </div>

            </div>

        </div>

    </div-->

    <div id="home-intro" class="clearfix">

        <div class="section-block">

            <div class="row">

                <div class="large-9 medium-9 small-12 columns">

                    <h1 data-aos="fade-up" data-aos-delay="150" data-aos-duration="1000">We’re a full-service creative web design, web development, and digital marketing agency based in London</h1>
                    <div class="clear1"></div>

                </div>

            </div>

            <div class="row">

                <div class="large-6 medium-6 small-12 columns">

                    <p data-aos="fade-up" data-aos-delay="250" data-aos-duration="1000">We combine the beauty of a unique design that reflects your brand’s identity with usability &amp; accessibility so that your website can both attract your audience and convert them into customers.</p>

                </div>

            </div>

        </div>

    </div>

    <div id="main-info" class="clearfix">

        <div class="section-block">

            <div class="row">

                <div id="box-one" class="large-3 medium-3 small-6 columns" data-aos="fade-up" data-aos-delay="150" data-aos-duration="1000">

                    <a href="<?php bloginfo('url'); ?>/projects">

                        <div class="main-boxes">

                            <div class="main-cards">

                                <div class="large-12 medium-12">

                                    <img src="<?php bloginfo('url'); ?>/wp-content/uploads/2021/10/index-projects.png">

                                    <div class="card-info">

                                        <div class="text-link">

                                            <h5 class="text-center">some of our work</h5>

                                        </div>

                                    </div>

                                </div>

                            </div>

                        </div>

                    </a>


                </div>

                <div id="box-two" class="large-3 medium-3 small-6 columns" data-aos="fade-up" data-aos-delay="150" data-aos-duration="1000">

                    <a href="<?php bloginfo('url'); ?>/about">

                        <div class="main-boxes">

                            <div class="main-cards">

                                <div class="large-12 medium-12">

                                    <img src="<?php bloginfo('url'); ?>/wp-content/uploads/2021/10/index-about.png">

                                    <div class="card-info">

                                        <div class="text-link">

                                            <h5 class="text-center">all about us</h5>

                                        </div>

                                    </div>

                                </div>

                            </div>

                        </div>

                    </a>

                </div>

                <div id="box-three" class="large-3 medium-3 small-6 columns" data-aos="fade-up" data-aos-delay="150" data-aos-duration="1000">

                    <a href="<?php bloginfo('url'); ?>/start-a-project">

                        <div class="main-boxes">

                            <div class="main-cards">

                                <div class="large-12 medium-12">

                                    <img src="<?php bloginfo('url'); ?>/wp-content/uploads/2021/10/index-get-started.png">

                                    <div class="card-info">

                                        <div class="text-link">

                                            <h5 class="text-center">get started with us</h5>

                                        </div>

                                    </div>

                                </div>

                            </div>

                        </div>

                    </a>

                </div>

                <div id="box-four" class="large-3 medium-3 small-6 columns" data-aos="fade-up" data-aos-delay="150" data-aos-duration="1000">

                    <a href="<?php bloginfo('url'); ?>/contact">

                        <div class="main-boxes">

                            <div class="main-cards">

                                <div class="large-12 medium-12">

                                    <img src="<?php bloginfo('url'); ?>/wp-content/uploads/2021/08/process-img.jpg">

                                    <div class="card-info">

                                        <div class="text-link">

                                            <h5 class="text-center">get in touch</h5>

                                        </div>

                                    </div>

                                </div>

                            </div>

                        </div>

                    </a>


                </div>

            </div>

        </div>

    </div>

    <div id="what-we-do" class="clearfix">

        <div class="section-block">

            <div class="row">

                <div class="large-6 medium-6 small-12 columns">

                    <h2 data-aos="fade-up" data-aos-delay="150" data-aos-duration="1000">what we do</h2>

                    <p data-aos="fade-up" data-aos-delay="250" data-aos-duration="1000">Our standard brings together the design you dream of with the results you aspire to achieve - we work alongside our clients to turn their vision into a reality and do so with websites that are responsive, original, creative, and offer a great digital experience to every customer.</p>

                    <div class="clear1"></div>

                </div>

            </div>

            <div class="row">

                <div class="large-12 medium-12 small-12 columns">

                    <ul data-aos="fade-up" data-aos-delay="250" data-aos-duration="1000" class="list">
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

                        <?php if( have_rows('our_services') ): ?>

                        <?php $counter = 1;  //this sets up the counter starting at 0 ?>

                        <div class="carousel carousel-gallery" data-flickity='{"pageDots": true, "freeScroll": false, "prevNextButtons": false, "wrapAround": true, "hash": true }'>

                            <?php while( have_rows('our_services') ): the_row(); ?>

                            <div class="carousel-cell" id="carousel-cell<?php echo $counter; ?>" data-equalizer-watch data-aos="fade-up" data-aos-delay="150" data-aos-duration="1000">
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

    <div id="featured-projects" class="clearfix">

        <div class="section-block">

            <div class="row">

                <div class="large-5 medium-5 small-12 columns">

                    <h2 data-aos="fade-up" data-aos-delay="150" data-aos-duration="1000">featured projects</h2>
                    <div class="clear3"></div>

                </div>

            </div>

            <div class="row">

                <div class="large-12 medium-12 small-12 columns">

                    <?php query_posts('showposts=4&cat=3'); while (have_posts()) : the_post(); ?>
                    <?php get_template_part( 'parts/loop', 'archive-grid' ); ?>
                    <?php endwhile; ?>
                    <?php wp_reset_query(); ?>

                </div>

            </div>

        </div>

    </div>

    <div id="home-blog" class="clearfix">

        <div class="section-block">

            <div class="row">

                <div class="large-5 medium-5 small-12 columns">

                    <h2 data-aos="fade-up" data-aos-delay="150" data-aos-duration="1000">our words</h2>
                    <div class="clear3"></div>

                </div>

            </div>

            <div class="row">

                <div class="large-12 medium-12 small-12 columns">

                    <?php query_posts('showposts=4&cat=1'); while (have_posts()) : the_post(); ?>
                    <?php get_template_part( 'parts/loop', 'archive-grid-blog' ); ?>
                    <?php endwhile; ?>
                    <?php wp_reset_query(); ?>

                </div>

            </div>

        </div>

    </div>

</div> <!-- end #content -->

<script>
    function randomImage() {
        var images = [
            'https://www.theonlytjn.com/wp-content/uploads/2021/12/home-main-banner-1.jpg',
            'https://www.theonlytjn.com/wp-content/uploads/2021/12/home-main-banner-2.jpg',
            'https://www.theonlytjn.com/wp-content/uploads/2021/12/home-main-banner-3.jpg',
            'https://www.theonlytjn.com/wp-content/uploads/2021/12/home-main-banner-4.jpg',
            'https://www.theonlytjn.com/wp-content/uploads/2021/12/home-main-banner-5.jpg',
            'https://www.theonlytjn.com/wp-content/uploads/2021/12/home-main-banner-6.jpg',
            'https://www.theonlytjn.com/wp-content/uploads/2021/12/home-main-banner-7.jpg',
            'https://www.theonlytjn.com/wp-content/uploads/2021/12/home-main-banner-8.jpg'
        ];
        var size = images.length;
        var x = Math.floor(size * Math.random());
        console.log(x);
        var element = document.getElementsByClassName('page-banner-home');
        console.log(element);
        element[0].style["background-image"] = "url(" + images[x] + ")";
    }

    document.addEventListener("DOMContentLoaded", randomImage);

</script>

<?php get_footer(); ?>
