<article id="post-<?php the_ID(); ?>" <?php post_class(''); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">

    <section class="entry-content" itemprop="articleBody">
        <?php the_content(); ?>
    </section> <!-- end article section -->

    <footer class="article-footer">
        <?php wp_link_pages( array( 'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'tjnagencywp' ), 'after'  => '</div>' ) ); ?>
    </footer> <!-- end article footer -->

</article> <!-- end article -->
