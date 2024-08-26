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

    <div id="how-we-work" class="clearfix">

        <div class="section-block">

            <div class="row">

                <div class="large-7 medium-7 small-12 columns">

                    <h2 data-aos="fade-up" data-aos-delay="150" data-aos-duration="1000">How we work</h2>

                    <p data-aos="fade-up" data-aos-delay="150" data-aos-duration="1000">
                        TJN likes to stay ahead of times and does that by offering creative solutions that are progressive and capable of boosting your company. We work by understanding what your audience wants &amp; needs, as they are at the heart of your brand, and use these key insights to create websites and marketing strategies that bring the results you aspire to achieve.
                    </p>

                </div>

            </div>

        </div>

    </div>

    <div id="process" class="clearfix">

        <div class="section-block">

            <div class="row" data-equalizer>

                <?php if( have_rows('process_points') ): ?>

                <?php $counter = 1;  //this sets up the counter starting at 0 ?>

                <ul class="process">

                    <?php while( have_rows('process_points') ): the_row(); ?>

                    <li class="large-4 medium-6 small-12 columns float-left" data-aos="fade-up" data-aos-delay="150" data-aos-duration="1000">

                        <div class="callout" data-equalizer-watch>

                            <i class="<?php the_sub_field('icon'); ?>"> </i>

                            <h5><span class="no-count"><?php echo $counter; ?> /</span> <?php the_sub_field('name'); ?></h5>

                            <p><?php the_sub_field('description'); ?></p>

                        </div>

                    </li>

                    <?php $counter++; // add one per row ?>

                    <?php endwhile; ?>

                </ul>

                <?php endif; ?>

            </div>

        </div>

    </div>

</div> <!-- end #content -->

<?php get_footer(); ?>
