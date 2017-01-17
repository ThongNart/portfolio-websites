<?php get_header(); ?>

<div class="row">
    
    <div class="col-xs-12 col-sm-8">
    
            <h1>Hello Thong.This is your index.</h1>
            <p>Posts will be displayed in this part below the line</p>

        <hr>

            <?php 
                if(have_posts() ) :

                    while( have_posts() ): the_post(); ?>

                    <?php get_template_part ('content', get_post_format()); ?>

                <?php endwhile;

            endif;
            ?>

    </div>
    
    <div class="col-xs-12 col-sm-4">

            <?php get_sidebar();?>
    
    </div>

</div> <!-- close row   -->    

<?php get_footer();?> 