<?php 
    get_header(); 
?>


<!--HOMEPAGE BANNER-------------------------->
                    
<div id="home-page-banner">
    <div class="left-typed-box">
        <p>By Day...</p>
        <span class="left-typed"></span>
    </div>
    <img id="logo" src="<?php echo get_template_directory_uri(); ?>/img/square-white-moon-logo.svg" alt="Gamers By Night Logo" />
    <div class="right-typed-box">
        <p>By Night...</p>
        <span class="right-typed"></span>
    </div>
</div>



<h3 id="subscribe-link">Subscribe to GBN | <a class="hvr-fade" href="<?php bloginfo( 'url' ); ?>/feed/podcast">iTunes</a> | <a class="hvr-fade" href="<?php bloginfo( 'url' ); ?>/feed">RSS</a>
</h3>


<!--LATEST PODCAST CONTAINER-------------------------->
                    
        

<div id="container" class="bottom-edge-shadow">
    <div class="ribbon">
        <h3 class="ribbon-content">Latest GBN Episodes</h3>
    </div>
    
    <?php get_template_part('content', 'podcast'); ?>                
                
</div>


<!--YOUTUBE CONTAINER-------------------------->



<div id="youtube-container" class="bottom-edge-shadow">
    <div class="ribbon">
        <h3 class="ribbon-content">YouTube Videos</h3>
    </div>
    <iframe  id="youtube" src="https://www.youtube.com/embed/videoseries?list=PL1W9y-MaqOCuiiCilIfNMqdueAVXkKIvU" frameborder="0" allowfullscreen>
    </iframe>
    
</div>



<?php
    get_footer(); 
?>
