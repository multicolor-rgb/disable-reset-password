<?php

# get correct id for plugin
$thisfile=basename(__FILE__, ".php");
 
# register plugin
register_plugin(
	$thisfile, //Plugin id
	'Disable Reset Password', 	//Plugin name
	'1.0', 		//Plugin version
	'Mateusz Skrzypczak',  //Plugin author
	'http://www.multicolor.stargard.pl', //author website
	'This plugin hidden "Forgot your password?" on login ', //Plugin description
	'plugins', //page type - on which admin tab to display
	'lockOn'  //main function (administration)
);
 
# activate filter 
 add_action('index-login','lockpwdstyle'); 

# add a link in the admin tab 'theme'
 
# functions
function lockpwdstyle() {
	echo'<style>#index .cta{display:none;}

	</style>';
}
 

;
?>