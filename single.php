<?php
$post = $wp_query->post;

if ( in_category( 'projects' ) ) {
  include( TEMPLATEPATH.'/single-projects.php' );
}
else {
  include( TEMPLATEPATH.'/single-blog.php' );
}
?>
