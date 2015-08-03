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
                        <li class="avatar"><?php echo get_avatar( get_the_author_meta( 'ID' )) ?></li>
                        <li>by <?php the_author(); ?></li>
                        <li class="genericon genericon-month"><?php the_time( 'F j, Y' ); ?></li>
                    </ul>
                    
                    <div class="excerpt-loop">
                        <p>
                            <?php the_content(); ?>
                            <?php comments_template(); ?>
                        </p>
                    </div>
                
            </div>
            
            <!--LOOP CONTENT ABOVE----------------------------------------> 
    
    
    <?php endwhile; endif; ?>
    

                
                
</div>





<?php
    get_footer(); 
?>
