<?php 
get_header(); 
?>





<div id="container" class="bottom-edge-shadow">
                
    <div class="ribbon">
        <h3 class="ribbon-content"><?php wp_title(''); ?></h3>
    </div>
    
                
        <!--LOOP CONTENT BELOW---------------------------------------->

        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        
        
            <!--IF HAS TITLE IMAGE---------------------------------------->

            <?php if( $title_image = get_field( 'title_image') ): ?>
            
                <div class="loop-container group">
                    
                    <div>
                        <img class="title-image" src="<?php echo $title_image ?>"  alt="Title Image" />
                    </div>
                                    
                    <div>
                                                    
                        <ul class="meta-loop">
                            <li class="avatar"><?php echo get_avatar( get_the_author_meta( 'ID' ), 24) ?></li>
                            <li>by <?php the_author(); ?></li>
                            <li class="genericon genericon-month"><span class="date"><?php the_time( 'F j, Y' ); ?></span></li>
                        </ul>
                        
                        <div class="excerpt-loop">
                            <p>
                                <?php the_content(); ?>
                                <?php previous_post_link('&laquo; &laquo; %link |'); ?>
                                <a href="<?php print $_SERVER['HTTP_REFERER'];?>">Go back</a>
                                <?php next_post_link('| %link &raquo; &raquo;'); ?>
                                <?php comments_template(); ?>
                            </p>
                        </div>
                        
                    </div>
                    
                </div>
                
            <!--ELSE NO TITLE IMAGE---------------------------------------->
                
            <?php else : ?>
            
                <div class="loop-container">
                    
                    <ul class="meta-loop">
                        <li class="avatar"><?php echo get_avatar( get_the_author_meta( 'ID' ), 24) ?></li>
                        <li>by <?php the_author(); ?></li>
                        <li class="genericon genericon-month"><span class="date"><?php the_time( 'F j, Y' ); ?></span></li>
                    </ul>
                    
                    <div class="excerpt-loop">
                        <p>
                            <?php the_content(); ?>
                            <?php previous_post_link('&laquo; &laquo; %link |'); ?>
                            <a href="<?php print $_SERVER['HTTP_REFERER'];?>">Go back</a>
                            <?php next_post_link('| %link &raquo; &raquo;'); 
                            ?>
                            <?php comments_template(); ?>
                        </p>
                    </div>
                    
                </div>
                            
            <?php endif; ?>

        <?php endwhile; endif; wp_reset_postdata(); ?>
        
<!--LOOP CONTENT ABOVE---------------------------------------->
                
                
</div>





<?php
get_footer(); 
?>
