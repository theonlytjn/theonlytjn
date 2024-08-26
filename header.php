<!doctype html>

<html class="no-js" <?php language_attributes(); ?>>

<head>

    <meta charset="utf-8">

    <!-- Force IE to use the latest rendering engine available -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Mobile Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta class="foundation-mq">

    <!-- Google Tag Manager -->
    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-5SXNDD7');

    </script>
    <!-- End Google Tag Manager -->

    <!-- If Site Icon isn't set in customizer -->
    <?php if ( ! function_exists( 'has_site_icon' ) || ! has_site_icon() ) { ?>
    <!-- Icons & Favicons -->
    <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.png">
    <link href="<?php echo get_template_directory_uri(); ?>/assets/images/apple-icon-touch.png" rel="apple-touch-icon" />
    <!--[if IE]>
                <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
            <![endif]-->
    <meta name="msapplication-TileColor" content="#f01d4f">
    <meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/assets/images/win8-tile-icon.png">
    <meta name="theme-color" content="#121212">
    <?php } ?>

    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

    <?php wp_head(); ?>

</head>


<body <?php body_class(); ?>>

    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5SXNDD7" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

    <div id="header" class="clearfix" role="banner">

        <div class="row expanded">

            <div class="large-12 medium-12 small-12 columns large-centered medium-centered">

                <div class="show-for-small-only" data-aos="fade-zoom-in" data-aos-easing="ease-in-back" data-aos-delay="500" data-aos-offset="0" data-aos-duration="750" data-aos-mirror="false" data-aos-once="true">
                    <a href="<?php bloginfo('url'); ?>/"><img class="logo-small" src="<?php bloginfo('url'); ?>/wp-content/uploads/2021/08/tjn-logo.svg"></a>
                </div>

                <div class="hide-for-small-only" data-aos="fade-zoom-in" data-aos-easing="ease-in-back" data-aos-delay="500" data-aos-offset="0" data-aos-duration="750" data-aos-mirror="true" data-aos-once="true">
                    <?php ubermenu( 'main' , array( 'theme_location' => 'main-nav' ) ); ?>
                </div>

                <div class="show-for-small-only" data-aos="fade-zoom-in" data-aos-easing="ease-in-back" data-aos-delay="500" data-aos-offset="0" data-aos-duration="750" data-aos-mirror="true" data-aos-once="true">
                    <?php ubermenu( 'main' , array( 'menu' => 4 ) ); ?>
                </div>

            </div>

        </div>

    </div>
