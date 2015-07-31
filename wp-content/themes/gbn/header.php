<!DOCTYPE html>
<html>
    
    <head>

        <title><?php wp_title(''); ?></title>
        <meta charset="UTF-8">
        <meta name="author" content="Justin Hammonds (http://justinhammonds.me)">
        <meta name="description" content="Playstation video game console reviews, articles, walkthroughs, podcasts, twitch streams, youtube, and commentaries">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico" />

        <?php wp_head(); ?>

    </head>
    
    <body>
        
        <?php include_once("analyticstracking.php") ?>
        
        <header>
            
            <!--NAVIGATION-------------------------------->
            <nav>
                <ul>
                    
                    <!--LOGO SITE LINK-------------------------------->
                    
                    <li id="nav-logo"><a href=<?php bloginfo( 'url' ); ?>><img src="<?php echo get_template_directory_uri(); ?>/img/rectangle-white-moon-logo.svg" alt="Gamers By Night Logo" /></a></li>               
                    
                    <!--WP NAV MENU-------------------------------->
                    
                    <?php 
       
                        $defaults = array(  
                            'container' => false,
                            'theme_location' => 'primary-menu',
                            'before' => '',
                            'after' => '',
                            'link_before' => '<span class="hvr-underline-from-center hvr-fade">',
                            'link_after' => '</span>',
                            
                        );
                        
                        wp_nav_menu ( $defaults );
                        
                    ?>
                
                </ul>
            </nav>
        </header>