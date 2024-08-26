<?php get_header(); ?>

<div id="content" class="clearfix">

    <div id="page-banner" class="clearfix">

        <div class="row">

            <div class="large-9 medium-8 small-12 columns">

                <h5><?php get_template_part( 'parts/content', 'byline' ); ?></h5>

                <h1><?php the_title(); ?></h1>

            </div>

        </div>

    </div>

    <div id="main-content" class="clearfix">

        <div class="section-block">

            <div class="row">

                <div class="large-8 medium-8 large-centered medium-centered small-12 columns">

                    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

                    <?php get_template_part( 'parts/loop', 'single' ); ?>

                    <?php endwhile; endif; ?>

                </div>

            </div>

        </div>

    </div>

    <div id="share-project" class="clearfix">

        <div class="section-block">

            <div class="row">

                <div class="large-6 medium-6 small-12 columns large-centered medium-centered">

                    <h5 class="text-center">share this blog</h5>
                    <div cl <p class="text-center">
                        <?php echo do_shortcode('[elfsight_social_share_buttons id="1"]'); ?>
                        </p>

                    </div>

                </div>

            </div>

        </div>

    </div>

</div> <!-- end #content -->

<?php get_footer(); ?>
