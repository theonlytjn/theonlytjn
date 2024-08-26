<?php get_header(); ?>

<div id="content" class="clearfix">

    <div id="page-banner" class="clearfix">

        <div class="row">

            <div class="large-8 medium-8 small-12 columns">

                <h5 data-aos="fade-down" data-aos-delay="150" data-aos-duration="1000"><?php single_cat_title();?></h5>

                <h1 data-aos="fade-up" data-aos-delay="150" data-aos-duration="1000"><?php the_archive_description();?></h1>

            </div>

        </div>

    </div>

    <div id="main-content" class="clearfix">

        <div class="section-block">

            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

            <!-- To see additional archive styles, visit the /parts directory -->
            <?php get_template_part( 'parts/loop', 'archive-grid-blog' ); ?>

            <?php endwhile; ?>

            <?php joints_page_navi(); ?>

            <?php else : ?>

            <?php get_template_part( 'parts/content', 'missing' ); ?>

            <?php endif; ?>

        </div>

    </div>

</div> <!-- end #content -->

<?php get_footer(); ?>
