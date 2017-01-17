<?php 
/* Template Name: Samir-Portfolio-Template*/
get_header();?>

	
<div class="w3-padding-large" id="main">
  
  	<?php 
                if(have_posts() ) :

                    while( have_posts() ): the_post(); ?>

                    <?php the_content(); ?>

                <?php endwhile;

            endif;
            ?>	

<?php get_footer();?> 