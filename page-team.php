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

    <div id="the-team" class="clearfix">

        <div class="section-block">

            <div class="row">


                <?php
                  if (have_rows('team_profiles')) {
                    $count = 0;
                    ?><ul class="the-team"><?php
                      while(have_rows('team_profiles')) {
                        the_row();
                        if ($count > 0 && (($count % 4) == 0)) {
                          // skip the first one
                          // add list end/start whenever
                          // count is divisible by 2
                          ?></ul>
                <ul class="the-team">
                    <?php
                        } // end if even
                        ?><li class="large-3 medium-3 small-12 columns float-left">

                        <a href="<?php the_sub_field('profile_link'); ?>">

                            <div class="main-boxes">

                                <div class="main-cards">

                                    <div class="large-12 medium-12">

                                        <?php $image = get_sub_field('image'); $size = 'full'; if( $image ) { echo wp_get_attachment_image( $image, $size ); } ?>

                                        <div class="card-info">

                                            <div class="text-link">

                                                <h4 class="text-center"><?php the_sub_field('name'); ?></h4>
                                                <h6 class="text-center"><?php the_sub_field('role'); ?></h6>

                                            </div>

                                        </div>

                                    </div>

                                </div>

                            </div>

                        </a>

                    </li>
                    <?php
                                $count++;
                      } // end while have rows
                      ?>
                </ul><?php
                  } // end if have rows
                ?>

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
