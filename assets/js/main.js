/*
*
* jQuery Plugins and Settings
*
* You can modify the theme defaults by altering 
* the jquery plugin settings below
*
* I hope you know what you are doing.  
* If you are not sure, don't touch.
* 
* @package Wordpress
* @subpackage xFrame
*
* Created by @derrybirkett November 2012
*/

jQuery(document).ready(function($) { 

/*
*
* Superfish Menu
*
*/
    $('.sf-menu').superfish({ 
        delay:       100,                            // one second delay on mouseout 
        animation:   {opacity:'show',height:'show'},  // fade-in and slide-down animation 
        speed:       'fast',                          // faster animation speed 
        autoArrows:  false,                           // disable generation of arrow mark-up 
        dropShadows: true                            // disable drop shadows 
    }); 

/*
*
* Tiny Nav Integration
*
*/

  $('#menu-top').tinyNav({
        active: 'selected',
        header: 'Navigation', // String: Specify text for "header" and show header instead of the active item        
  });     


  $('#menu-primary').tinyNav({
        active: 'selected',
        header: 'Navigation', // String: Specify text for "header" and show header instead of the active item 
  });     
	
}); 