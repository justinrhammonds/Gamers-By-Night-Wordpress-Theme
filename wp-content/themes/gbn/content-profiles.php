<?php 
    
    $args = array(
        'post_type' => 'profile',
        'posts_per_page' => -1,
        'orderby' => 'title'
    );
    $query = new WP_Query( $args );
    
?>


<!--LOOP CONTENT BELOW---------------------------------------->

<?php if(  $query->have_posts() ) : while( $query->have_posts() ) : $query->the_post(); ?>

        <div class="row">
           
           <div class="col">
               
               <!--IF HAS PROFILE PICTURE---------------------------------->
               
                <?php if( get_field('profile_picture') ): ?>
                	<img class="profile-pic" src="<?php the_field('profile_picture'); ?>" />
                <?php endif; ?>
                
                
                
                <ul class="social-profile">
                    
                    
                   <!--PROFILE NAME------------------------------>
                    
                    <li><h3 class="about-name"><?php the_title(); ?></h3></li>
                    
                    
                    <!--PSN NAME------------------------------>
                    
                    
                    <?php if( $psn_name = get_field( 'psn_name') ): ?>
                        <li><?php echo "PSN: " . $psn_name; ?></li>
                    <?php endif; ?>
                    
                    
                    
                    <!--IF HAS FACEBOOK ICON-------------------------->
        
                    <?php if( $facebook = get_field( 'facebook') ): ?>
                        <a class="profile-icon" href="<?php echo $facebook; ?>">
                            <li class = "genericon genericon-facebook hvr-fade"></li>
                        </a>
                    <?php endif; ?>
                    
                    
                    
                    <!--IF HAS TWITTER ICON-------------------------->
                            
                    <?php if( $twitter = get_field( 'twitter') ): ?>
                    
                        <a class="profile-icon" href="<?php echo $twitter; ?>">
                            <li class = "genericon genericon-twitter hvr-fade"></li>
                        </a>
                    <?php endif; ?>  
                    
                    
                    
                    <!--IF HAS YOUTUBE ICON-------------------------->
                    
                    <?php if( $youtube = get_field( 'youtube') ): ?>
                    
                        <a class="profile-icon" href="<?php echo $youtube; ?>">
                            <li class = "genericon genericon-youtube hvr-fade"></li>
                        </a>
                    <?php endif; ?> 
                    
                    
                    
                    <!--IF HAS TWITCH ICON-------------------------->
                    
                            
                    <?php if( $twitch = get_field( 'twitch') ): ?>
                    
                        <a class="profile-icon" href="<?php echo $twitch; ?>">
                            <li class = "genericon genericon-twitch hvr-fade"></li>
                        </a>
                    <?php endif; ?> 
            
                    
                </ul>
                
                <!--BIO INFO GOES HERE-------------------------->
        
                <p><?php the_content(); ?></p>
                
            </div>
        
        </div>
            

<?php endwhile; endif; wp_reset_postdata(); ?>              

<!--LOOP CONTENT ABOVE-------------------------------------->

