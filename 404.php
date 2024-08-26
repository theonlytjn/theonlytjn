<?php get_header(); ?>

<div id="content">

    <div id="page-banner" class="clearfix">

        <div class="row">

            <div class="large-9 medium-8 small-12 columns">

                <h5><?php _e( 'Oops! That page can’t be found.', 'tjnagencywp' ); ?></h5>

                <h1>404 error <br>
                    nothing here</h1>

            </div>

        </div>

    </div>

    <div id="main-content" class="clearfix">

        <div class="section-block">

            <div class="row expanded collapse">

                <div class="large-12 medium-12 small-12 columns">

                    <img src="<?php bloginfo('url'); ?>/wp-content/uploads/2021/09/broken-link.svg">

                    <div class="clear2"></div>

                </div>

            </div>

            <div class="row">

                <div class="large-12 medium-12 small-12 columns">

                    <p class="text-center">
                        You didn't break the internet, but we can't find what you are looking for.
                    </p>

                </div>

            </div>

        </div>

    </div>

</div> <!-- end #content -->

<?php get_footer(); ?>
