<?php
// Adjust the amount of rows in the grid
$grid_columns = 3; ?>

<?php if( 0 === ( $wp_query->current_post  )  % $grid_columns ): ?>

<ul class="row archive-grids" data-equalizer>
    <!--Begin Row:-->

    <?php endif; ?>

    <!--Item: -->
    <li class="large-4 medium-4 small-12 columns panel post-info" data-equalizer-watch data-aos="fade-up" data-aos-delay="150" data-aos-duration="1000">

        <article id="post-<?php the_ID(); ?>" <?php post_class(''); ?> role="article">

            <section class="featured-image" itemprop="articleBody">

                <?php the_post_thumbnail('portfolio-thumb'); ?>
                <div class="clear1"></div>

            </section> <!-- end article section -->

            <header class="article-header">

                <div class="row">

                    <div class="large-6 medium-6 small-6 columns">
                        <h6 class="text-left"><?php the_time('d.n.Y'); ?></h6>
                    </div>

                    <div class="large-6 medium-6 small-6 columns">
                        <h6 class="text-right"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><span>-</span> read post</a></h6>
                    </div>

                </div>

                <div class="row">

                    <div class="large-12 medium-12 small-12 columns">

                        <h4><?php the_title(); ?></h4>

                    </div>

                </div>

                <div class="row">

                    <div class="large-12 medium-12 small-12 columns">

                        <?php

                            // Load field settings and values.
                            $field = get_field_object('work');
                            $works = $field['value'];

                            // Display labels.
                            if( $works ):
                        ?>

                        <ul class="work-post">
                            <?php foreach( $works as $work ): ?>
                            <li><?php echo $field['choices'][ $work ]; ?></li>
                            <?php endforeach; ?>
                        </ul>

                        <?php endif; ?>

                    </div>

                </div>

            </header> <!-- end article header -->

        </article> <!-- end article -->

        <div class="clear1 show-for-small-only"></div>

    </li>

    <?php if( 0 === ( $wp_query->current_post + 1 )  % $grid_columns ||  ( $wp_query->current_post + 1 ) ===  $wp_query->post_count ): ?>


</ul>
<div class="clear3 hide-for-small-only"></div>

<!--End Row: -->

<?php endif; ?>
