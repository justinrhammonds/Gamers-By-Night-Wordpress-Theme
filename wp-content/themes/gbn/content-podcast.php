<?php 
    
    $num_posts = ( is_front_page() ) ? 3 : -1;
    
    //----------Above code is tertiary form of this if/else statement
    //          $num_posts = -1;
    //          if( is_front_page() ) $num_posts = 3;
    
    $args = array(
        'post_type' => 'podcast',
        'posts_per_page' => $num_posts
    );
    $query = new WP_Query( $args );
    
?>





<!--LOOP CONTENT BELOW---------------------------------------->

<?php if(  $query->have_posts() ) : while( $query->have_posts() ) : $query->the_post(); ?>



        <div class="loop-container">
        
            <h3 class="title"><?php the_title(); ?></h3>
        
            
            <div style="width:95%; margin: 0 auto; font-size: 0.75em; padding: 40px 0 5px 0;"> <!--additional styling of the podcast player-->
                <p><?php the_content(); ?></p>
            </div>
            <div class="excerpt-loop">
                <p><?php the_field( 'synopsis' ); ?></p>
            </div>
        </div>
            

<?php endwhile; endif;  wp_reset_postdata(); ?>              

<!--LOOP CONTENT ABOVE-------------------------------------->

