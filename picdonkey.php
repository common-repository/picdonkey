<?php

/*
Plugin Name: picdonkey
Plugin URI: http://www.endemedia.de/downloads/wordpress-plugin-picdonkey
Description: Allows you to display website thumbnails in pages and posts with a simple bbcode syntax
Version: 1.0
Author: Sascha Ende
Author URI: http://www.endemedia.de/downloads/wordpress-plugin-picdonkey
Min WP Version: 1.0
Max WP Version: 2.7
Tags: homepage,website,thumbnail,thumbnails,thumb,screenshot,snapshot,link,links,images,image
Requires at least: 1.0
Tested up to: 2.7
Stable tag: trunk
Contributors: endemedia
Donate link: http://www.endemedia.de/downloads/wordpress-plugin-picdonkey
*/

add_filter('the_content','parsePicDonkey');
 
function parsePicDonkey($content) {
 	return preg_replace_callback("/\[thumb\](.*?)\[\/thumb\]/sim","parsePicDonkeyCallBack",$content);
}

function parsePicDonkeyCallBack($content){
	return '<script language="javascript" src="http://www.bildesel.de/thumb.php?url='.urlencode($content[1]).'"></script>';
}


?>