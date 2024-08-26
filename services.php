<?php
/*
Template Name: Services Page
*/
?>

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

    <div id="main-content" class="clearfix">

        <div class="section-block">

            <div class="row">

                <div class="large-12 medium-12 small-12 columns">

                    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

                    <?php get_template_part( 'parts/loop', 'page' ); ?>

                    <?php endwhile; endif; ?>

                </div>

            </div>

        </div>

    </div>

</div> <!-- end #content -->

<?php get_footer(); ?>
