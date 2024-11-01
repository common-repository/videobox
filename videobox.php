<?php
/*
Plugin Name: Videobox v1.0 Plugin
Plugin URI: http://www.snakedesign.net/
Feed URI: http://www.snakedesign.net/feed/
Description: Used to overlay videos from Youtube, Metacafe, Google Video, iFilm and custom flash on the current page. <a href="http://videobox-lb.sourceforge.net/" title="Videobox">This plugin is base on the Videobox v1.1
Version: 1.0
Author: Massi B
Author URI: http://www.massi-b.be
*/
// styles
function videobox_script() {
	$videobox_path = get_option('siteurl')."/wp-content/plugins/videobox/";
	$videoboxscript.= "<link rel=\"stylesheet\" href=\"".$videobox_path."css/videobox.css\" type=\"text/css\" media=\"screen\" />\n";
	$videoboxscript.= "<script type=\"text/javascript\" src=\"".$videobox_path."js/mootools.js\"></script>\n";
	$videoboxscript.= "<script type=\"text/javascript\" src=\"".$videobox_path."js/swfobject.js\"></script>\n";
	$videoboxscript.= "<script type=\"text/javascript\" src=\"".$videobox_path."js/videobox.js\"></script>\n";
	print($videoboxscript);
}

add_action('wp_head', 'videobox_script');
?>