<?php get_header(); ?>

<div id="content" class="clearfix">

    <div id="page-banner" class="clearfix">

        <div class="row">

            <div class="large-9 medium-8 small-12 columns">

                <h5><?php the_title(); ?></h5>

                <h1><?php the_field('page_title'); ?></h1>

            </div>

        </div>

    </div>

    <div id="careers-intro" class="clearfix">

        <div class="row">

            <div class="large-9 medium-9 small-12 columns">

                <div class="section-block">

                    <h4>Working at Huge means joining a group of people obsessed with making things—making things that inspire new ways of thinking, bring about real change, &amp; make people’s lives just a little bit easier. It’s not bullshit. It’s a code. Our way of life. It’s been in our DNA since 1999</h4>

                </div>

            </div>

        </div>

    </div>

    <div id="job-positions" class="clearfix">

        <div class="section-block">

            <?php if( have_rows('single_jobs') ): ?>

            <ul class="jobs row">
                <?php while( have_rows('single_jobs') ): the_row(); ?>

                <li class="large-6 medium-6 small-12 columns float-left">

                    <div class="callout">
                        <div class="large-9 medium-9 small-9 columns">
                            <h3 class="text-left"><?php the_sub_field('job_role'); ?></h3>
                        </div>

                        <div class="large-3 medium-3 small-3 columns">
                            <h3 class="text-right"><a href="<?php the_sub_field('job_link'); ?>"><i class="fal fa-chevron-circle-right"></i></a></h3>
                        </div>
                    </div>

                </li>

                <?php endwhile; ?>

            </ul>

            <?php endif; ?>

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
