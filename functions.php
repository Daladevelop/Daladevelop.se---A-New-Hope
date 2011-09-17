<?php

	if ( function_exists('register_sidebar') ) register_sidebar(array('name' => 'Startsidans RSS-box', 'before_widget' => '<aside>','after_widget' => '</aside>','before_title' => '<h3>','after_title' => '</h3>',));
	
	add_theme_support( 'post-thumbnails' );
	add_image_size('startpage',460,296,TRUE);

?>
