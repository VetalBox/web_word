<!DOCTYPE html>

<html class="no-js" <?php language_attributes(); ?>>

	<head>

		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1.0" >

		<?php wp_head(); ?>

	</head>

	<body>

		<header> 
        <div class="header-flex-container">

            <div class="header-flex-block-logo">
                
                <a><img class="line_vert1" src="<?php bloginfo('template_url');?>/assets/images/Line 13.png" alt="Line 13"/></a>
                
                    <p>company</p>

                <a><img class="line_vert2" src="<?php bloginfo('template_url');?>/assets/images/Line 14.png" alt="Line 14"/></a>
                
                <a class="tech"><?php the_field('lozung');?></a>
           
            </div>

           

            <div class="line_rectangle">

                <div class="main_menu">			
                    <?php 	
                            wp_nav_menu([
                                'theme_location'=>'top',
                                'container'=>'',
                                'menu_class'=>'header-flex-container-menu',
                                'menu_id'=>''
                            ]);
                        ?>
                </div>

                <div class="contact_us">
                    <button><a href="/templates/contact.php" >Contact us</a></button>
                </div>

                <div class="line_rectangle_all">
                    <ul>
                        <li><a><img class="line_rectangle_one" src="<?php bloginfo('template_url');?>/assets/images/Rectangle 6.png" alt="Rectangle 6"/></a></li>
                        <li><a><img class="line_rectangle_two" src="<?php bloginfo('template_url');?>/assets/images/Rectangle 7.png" alt="Rectangle 7"/></a></li>
                    </ul>
                </div>
                
                <div>
                    <a><img class="line_15" src="<?php bloginfo('template_url');?>/assets/images/Line 15.png" alt="Line 15"/></a>
                </div>   
            </div>

            
            


        </div>
			
		</header>


