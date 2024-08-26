<?php get_header(); ?>

<div id="content-projects" class="clearfix">

    <div id="page-banner-projects" class="clearfix post-overlay post-overlay-main" style="background: url(<?php echo get_the_post_thumbnail_url( $post_id, 'portfolio-main-banner' ); ?>);">

        <div class="row">

            <div class="large-8 medium-8 small-12 columns">

                <div class="post-overlay-main">

                    <h5 data-aos="fade-down" data-aos-delay="150" data-aos-duration="1000">project</h5>

                    <h1 data-aos="fade-up" data-aos-delay="150" data-aos-duration="1000"><?php the_title(); ?></h1>

                </div>

            </div>

        </div>

    </div>

    <div id="project-intro-banner" class="clearfix">

        <div class="row">

            <div class="large-3 medium-3 small-12 columns float-left">
                <p data-aos="fade-up" data-aos-delay="150" data-aos-duration="1000">client: <br class="show=for-small-only"> <b><?php the_field('client_name'); ?></b></p>
            </div>

            <div class="large-3 medium-3 small-12 columns float-left">
                <p data-aos="fade-up" data-aos-delay="250" data-aos-duration="1000">industry: <br class="show=for-small-only"> <b><?php the_field('sector'); ?></b></p>
            </div>

            <?php if( get_field('url') ): ?>
            <div class="large-3 medium-3 small-12 columns float-left">
                <p data-aos="fade-up" data-aos-delay="350" data-aos-duration="1000">link: <br class="show=for-small-only"> <b><a target="_blank" href="<?php the_field('url_link'); ?>"><?php the_field('url'); ?></a></b></p>
            </div>
            <?php endif; ?>

        </div>

    </div>

    <div id="project-description" class="clearfix">

        <div class="row">

            <div class="section-block">

                <div class="large-9 medium-9 small-12 columns large-centered medium-centered">

                    <div class="large-9 medium-9 small-12 columns float-left">

                        <h1 data-aos="fade-up" data-aos-delay="150" data-aos-duration="1000" class="hide-for-small-only"><?php the_field('introduction'); ?></h1>

                        <h2 data-aos="fade-up" data-aos-delay="150" data-aos-duration="1000" class="show-for-small-only"><?php the_field('introduction'); ?></h2>

                    </div>

                </div>

            </div>

        </div>

        <div class="row">

            <div class="section-block">

                <div class="large-9 medium-9 small-12 columns large-centered medium-centered">

                    <div class="large-9 medium-9 small-12 columns float-left">

                        <div class="large-11 medium-11 small-12">

                            <h4 data-aos="fade-up" data-aos-delay="150" data-aos-duration="1000">the story</h4>

                            <p data-aos="fade-up" data-aos-delay="250" data-aos-duration="1000">
                                <?php the_field('the_story'); ?>
                            </p>

                            <div class="clear2 show-for-small-only"></div>

                        </div>

                    </div>

                    <div class="large-2 medium-3 small-12 columns float-right">

                        <h4 data-aos="fade-up" data-aos-delay="150" data-aos-duration="1000">the work</h4>

                        <?php

                            // Load field settings and values.
                            $field = get_field_object('work');
                            $works = $field['value'];

                            // Display labels.
                            if( $works ):
                        ?>

                        <ul class="work" data-aos="fade-up" data-aos-delay="250" data-aos-duration="1000">
                            <?php foreach( $works as $work ): ?>
                            <li><?php echo $field['choices'][ $work ]; ?></li>
                            <?php endforeach; ?>
                        </ul>

                        <?php endif; ?>

                    </div>

                </div>

            </div>

        </div>

    </div>

    <div id="project-banner" class="clearfix">

        <div class="section-block">

            <div class="row expanded collapse">

                <div class="large-12 medium-12 small-12 columns">

                    <div class="hide-for-small-only">
                        <?php $image = get_field('banner_image'); $size = 'portfolio-intro-banner'; if( $image ) { echo wp_get_attachment_image( $image, $size ); } ?>
                    </div>

                    <div class="show-for-small-only">
                        <?php $image = get_field('banner_image'); $size = 'portfolio-gallery-image'; if( $image ) { echo wp_get_attachment_image( $image, $size ); } ?>
                    </div>

                </div>

            </div>

        </div>

    </div>

    <div id="project-challenge" class="clearfix">

        <div class="row">

            <div class="section-block">

                <div class="large-9 medium-9 small-12 columns large-centered medium-centered">

                    <h4 data-aos="fade-up" data-aos-delay="150" data-aos-duration="1000">the challenge</h4>

                    <p data-aos="fade-up" data-aos-delay="250" data-aos-duration="1000">
                        <?php the_field('the_challenge'); ?>
                    </p>

                </div>

            </div>

        </div>

    </div>

    <?php if( get_field('project_gallery') ): ?>
    <div id="project-gallery" class="clearfix" style="background-color:<?php the_field('project_gallery_background'); ?>">

        <div class="row">

            <div class="section-block">

                <div class="large-11 medium-10 large-centered medium-centered small-12 columns">
                    <?php if( have_rows('project_gallery') ): ?>

                    <div class="carousel carousel-gallery" data-flickity='{"pageDots": false, "freeScroll": false, "prevNextButtons": true, "wrapAround": true }'>
                        <?php while( have_rows('project_gallery') ): the_row(); ?>

                        <div class="carousel-cell">


                            <?php $image = get_sub_field('image'); $size = 'portfolio-gallery-image'; if( $image ) { echo wp_get_attachment_image( $image, $size ); } ?>

                        </div>
                        <?php endwhile; ?>

                    </div>
                    <?php endif; ?>

                </div>

            </div>

        </div>

    </div>
    <?php endif; ?>

    <?php if( get_field('project_web_gallery') ): ?>
    <div id="project-web-gallery" class="clearfix" style="background-color:<?php the_field('project_web_gallery_background'); ?>">

        <div class="section-block">

            <div class="row expanded collapse">

                <div class="large-12 medium-12 small-12 columns">
                    <?php if( have_rows('project_web_gallery') ): ?>

                    <div class="carousel carousel-web-gallery" data-flickity='{"pageDots": false, "freeScroll": false, "prevNextButtons": true, "wrapAround": true }'>
                        <?php while( have_rows('project_web_gallery') ): the_row(); ?>

                        <div class="carousel-cell">

                            <a class="mobx" href="<?php echo esc_url( $image['url'] ); ?>">

                            <?php $image = get_sub_field('image'); $size = 'portfolio-web-image'; if( $image ) { echo wp_get_attachment_image( $image, $size ); } ?>

                            </a>

                        </div>
                        <?php endwhile; ?>

                    </div>
                    <?php endif; ?>

                </div>

            </div>

        </div>

    </div>
    <?php endif; ?>

    <div id="project-solution" class="clearfix">

        <div class="row">

            <div class="section-block">

                <div class="large-9 medium-9 small-12 columns large-centered medium-centered">

                    <h4 data-aos="fade-up" data-aos-delay="150" data-aos-duration="1000">our solution</h4>

                    <p data-aos="fade-up" data-aos-delay="250" data-aos-duration="1000">
                        <?php the_field('our_solution'); ?>
                    </p>

                </div>

            </div>

        </div>

    </div>

    <?php if( get_field('project_mobile_gallery') ): ?>
    <div id="project-mobile-gallery" class="clearfix" style="background-color:<?php the_field('project_mobile_gallery_background'); ?>">

        <div class="section-block">

            <div class="row">

                <div class="large-10 medium-6 large-centered medium-centered small-12 columns">

                    <?php if( have_rows('project_mobile_gallery') ): ?>

                    <div class="hide-for-small-only">

                        <div class="carousel carousel-mobile-gallery" data-flickity='{"pageDots": false, "freeScroll": false, "prevNextButtons": true, "wrapAround": true, "groupCells": 3 }'>
                            <?php while( have_rows('project_mobile_gallery') ): the_row(); ?>

                            <div class="carousel-cell">

                                <div class="mobile-device">

                                    <?php $image = get_sub_field('image'); $size = 'portfolio-mobile'; if( $image ) { echo wp_get_attachment_image( $image, $size ); } ?>

                                </div>

                            </div>
                            <?php endwhile; ?>

                        </div>

                    </div>

                    <div class="show-for-small-only">

                        <div class="carousel carousel-mobile-gallery" data-flickity='{"pageDots": false, "freeScroll": false, "prevNextButtons": true, "wrapAround": true }'>
                            <?php while( have_rows('project_mobile_gallery') ): the_row(); ?>

                            <div class="carousel-cell">

                                <div class="mobile-device">

                                    <?php $image = get_sub_field('image'); $size = 'portfolio-mobile'; if( $image ) { echo wp_get_attachment_image( $image, $size ); } ?>

                                </div>

                            </div>
                            <?php endwhile; ?>

                        </div>

                    </div>

                    <?php endif; ?>

                </div>

            </div>

        </div>

    </div>
    <?php endif; ?>

    <?php if( get_field('testimonial') ): ?>
    <div id="project-testimonial" class="clearfix">

        <div class="row">

            <div class="section-block">

                <div class="large-8 medium-8 small-12 large-centered medium-centered columns">

                    <img data-aos="fade-up" data-aos-delay="150" data-aos-duration="1000" class="quotes" src="<?php bloginfo('url'); ?>/wp-content/uploads/2021/08/quote-marks.svg">

                    <p data-aos="fade-up" data-aos-delay="250" data-aos-duration="1000" class="text-center"><?php the_field('testimonial'); ?></p>

                    <div class="clear2"></div>

                    <h5 data-aos="fade-up" data-aos-delay="350" data-aos-duration="1000" class="text-center"><?php the_field('testimonial_name'); ?>, <?php the_field('testimonial_role'); ?></h5>

                </div>

            </div>

        </div>

    </div>
    <?php endif; ?>

    <div id="share-project" class="clearfix">

        <div class="section-block">

            <div class="row">

                <div class="large-6 medium-6 small-12 columns large-centered medium-centered">

                    <h5 class="text-center" data-aos="fade-up" data-aos-delay="150" data-aos-duration="1000">share this project</h5>

                    <div class="text-center" data-aos="fade-up" data-aos-delay="250" data-aos-duration="1000">
                        <?php echo do_shortcode('[elfsight_social_share_buttons id="1"]'); ?>
                    </div>

                </div>

            </div>

        </div>

    </div> <!-- end #content -->

</div>

<div id="related" class="clearfix">

    <div class="section-block">

        <?php joints_related_posts(); ?>

    </div>

</div>

<?php get_footer(); ?>
