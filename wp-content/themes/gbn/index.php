<?php 
    get_header(); 
?>

<div id="container" class="bottom-edge-shadow">
                
    <div class="ribbon">
        <h3 class="ribbon-content"><?php wp_title(''); ?></h3>
    </div>
    
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
   
   
   
        <!--LOOP CONTENT BELOW---------------------------------------->
        
        <div class="loop-container">
    
            <h3 class="title"><?php the_title(); ?></h3>
                
            <ul class="meta-loop">
                <li class="avatar"><?php echo get_avatar( get_the_author_meta( 'ID' ), 24) ?></li>
                <li>by <?php the_author(); ?></li>
                <li class="genericon genericon-month"><span class="date"><?php the_time( 'F j, Y' ); ?></span></li>
            </ul>
            
            <div class="excerpt-loop">
                <p><?php the_content(); ?></p>
            </div>
            
        </div>
        
        <!--LOOP CONTENT ABOVE----------------------------------------> 
        
        
    
    <?php endwhile; else : ?>
        <p><?php _e( 'Sorry, there are no posts to display. I guess we should upload more content. We\'ll get right on that!' ); ?></p>
    <?php endif; wp_reset_postdata(); ?>
                
</div>

<?php
    get_footer(); 
?>
