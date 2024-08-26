<?php
/*
Template Name: Team Member
*/
?>

<?php get_header(); ?>

<div id="content" class="clearfix">

    <div id="page-banner" class="clearfix">

        <div class="row">

            <div class="large-9 medium-8 small-12 columns">

                <h5><?php the_field('role'); ?></h5>

                <h1><?php the_field('page_title'); ?></h1>

            </div>

        </div>

    </div>

    <div id="bio-intro" class="clearfix">

        <div class="section-block">

            <div class="row">

                <div class="large-10 medium-10 small-12 columns">

                    <h2><?php the_field('bio_intro'); ?></h2>

                </div>

            </div>

        </div>

    </div>

    <div id="bio-banner" class="clearfix">

        <div class="row expanded collapse">

            <div class="large-12 medium-12 small-12 columns">

                <?php $image = get_field('image'); $size = 'portfolio-intro-banner'; if( $image ) { echo wp_get_attachment_image( $image, $size ); } ?>

            </div>

        </div>

    </div>

    <div id="main-content" class="clearfix">

        <div class="section-block">

            <div class="row">

                <div class="large-12 medium-12 small-12 columns">

                    <p>
                        <?php the_field('main_bio'); ?>
                    </p>

                </div>

            </div>

        </div>

    </div>

    <div id="join-us" class="clearfix">

        <div class="row">

            <div class="large-9 medium-8 small-12 columns">
                <h1>You belong With us</h1>
            </div>

            <div class="large-12 medium-12 small-12 columns">
                <div class="clear1"></div>
            </div>

            <div class="large-4 medium-4 small-12 columns">

                <p>Come on. You know you want to work here. See what roles are open across our offices. Maybe you’ll find the one.</p>

                <div class="clear1"></div>

                <h5><a href="<?php bloginfo('url'); ?>/careers">View jobs</a></h5>

            </div>

        </div>

    </div>

</div> <!-- end #content -->

<?php get_footer(); ?>
