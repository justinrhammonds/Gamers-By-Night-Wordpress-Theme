<?php
/***************************

    Template Name: Podcast
    
***************************/
?>





<?php 
    get_header(); 
?>





    <h3 id="subscribe-link">Subscribe to GBN | <a class="hvr-fade" href="<?php bloginfo( 'url' ); ?>/feed/podcast">iTunes</a> | <a class="hvr-fade" href="<?php bloginfo( 'url' ); ?>/feed">RSS</a>
    </h3>
    
    <div id="container" class="bottom-edge-shadow">
        
        <div class="ribbon">
            <h3 class="ribbon-content">GBN Podcast</h3>
        </div>
        
        
        
                
                    
        <?php get_template_part('content', 'podcast'); ?>  
                    
         
         
         
                    
    </div>





<?php
    get_footer(); 
?>




