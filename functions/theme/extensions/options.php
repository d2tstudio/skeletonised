<?php
/* 
-----------------------------------------------
THEME OPTIONS
Options specifically related to this theme

Some other standard options are included in my framework 
and not visible here (Logo and Credits etc. which are 
used in every theme). I guess you won't be changing these.

@author Derry Birkett
----------------------------------------------- 
*/


function clean_theme_options($wp_customize)
	{
		// Remove Header Text Colour Default
		$wp_customize->remove_setting( 'header_textcolor');
		$wp_customize->remove_control( 'header_textcolor');		
		
		//$wp_customize->remove_setting( 'background_color');
		//$wp_customize->remove_control( 'background_color');
		
		//$wp_customize->remove_section( 'background_image');					
	}
add_action( 'customize_register', 'clean_theme_options' );
?>