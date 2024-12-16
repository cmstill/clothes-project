<?php
 // Debugging: Check if this is the correct template for the single CPT post
 echo '<!-- Debugging: This is single-jackets-and-coats.php -->';
 ?>
 
 <?php get_header(); ?>
 
 <main id="primary" class="site-main">
 
		 <?php
		 while ( have_posts() ) :
				 the_post();
 
				 // Include the content template for this CPT
				 get_template_part( 'template-parts/content', 'sneakers' );
 
				 the_post_navigation();
 
				 if ( comments_open() || get_comments_number() ) :
						 comments_template();
				 endif;
 
		 endwhile; // End of the loop.
		 ?>
 
 </main><!-- #main -->
 
 <?php get_sidebar(); ?>
 <?php get_footer(); ?>