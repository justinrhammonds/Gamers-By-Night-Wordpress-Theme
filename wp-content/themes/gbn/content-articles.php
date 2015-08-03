<?php 
    $args = array(
        'post_type' => 'articles'
    );
    $query = new WP_Query( $args );
?>





<!--LOOP CONTENT BELOW---------------------------------------->

<?php if(  $query->have_posts() ) : while( $query->have_posts() ) : $query->the_post(); ?>

            <!--IF WITH TITLE IMAGE---------------------------------------->
            
            <?php if( $title_image = get_field( 'title_image') ): ?>
            
            
                <div class="loop-container group">

                        
                        <div>
                            <a href="<?php the_permalink(); ?>">
                                <h3 class="title"><?php the_title(); ?></h3>
                                    
                                <ul class="meta-loop">
                                    <li class="avatar"><?php echo get_avatar( get_the_author_meta( 'ID' )) ?></li>
                                    <li>by <?php the_author(); ?></li>
                                    <li class="genericon genericon-month"><span class="date"><?php the_time( 'F j, Y' ); ?></span></li>
                                </ul>
                            </a>
                            <div class="excerpt-loop">
                                <p>                        
                                    <span class="title-image">
                                        <img src="<?php echo $title_image ?>"  alt="Title Image" />
                                    </span>
                                    <?php if ( is_single() ) {
                                            the_excerpt();
                                            the_content();
                                            comments_template();
                                        } else {
                                            the_excerpt();
                                        }
                                    ?>
                                </p>
                            </div>
                            
                        </div> 
                        

                </div>
                
                
            <!--ELSE WITHOUT TITLE IMAGE---------------------------------------->    
            <?php else : ?>
            
            
                <div class="loop-container">
                    <a href="<?php the_permalink(); ?>">
                            
                        <h3 class="title"><?php the_title(); ?></h3>
                            
                        <ul class="meta-loop">
                            <li class="avatar"><?php echo get_avatar( get_the_author_meta( 'ID' )) ?></li>
                            <li>by <?php the_author(); ?></li>
                            <li class="genericon genericon-month"><span class="date"><?php the_time( 'F j, Y' ); ?></span></li>
                        </ul>
                        
                    </a>
                        
                        <div class="excerpt-loop">
                    
                            <p>
                                <?php if ( is_single() ) {
                                        the_excerpt();
                                        the_content();
                                        comments_template();
                                    } else {
                                        the_excerpt();
                                    }
                                ?>
                            </p>
                        </div>

                </div>
                       
                            
            <?php endif; ?>

<?php endwhile; endif; wp_reset_postdata(); ?>
        
<!--LOOP CONTENT ABOVE---------------------------------------->      