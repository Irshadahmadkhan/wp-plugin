<?php
/**
 * Plugin Name: Irshad's plugin
 * Plugin URI: https://irshadwp.000webhostapp.com/my-first-plugin
 * Description: The very first plugin that I have ever created.
 * Version: 1.0
 * Author: Irshad
 * Author URI: https://irshadwp.000webhostapp.com
 */

function addMenu()
{
  add_menu_page(
        "IRSHAD1",                  //page title
        "Irshad",                       //meu title
        4,                                   //capability
        "example_options",    //menu slug
        "irshadfun" );      //capable func

  add_submenu_page("example_options", "Ahmad 1", "Ahmad", 4, "ahmad-1", "ahmad");
}
add_action("admin_menu", "addMenu");

function irshadfun()
{
echo "<h1> Irshad</h1>";
}

function ahmad()
{
echo <<< 'EOD'

  <h1> Ahmad </h1>

EOD;
}

function wphead(){
echo 'Irshad Ahmad Khan';
}
add_action("wp_head", "wphead");

function hello_notic() {
	$lang = ' lang="en_US"';
	printf(
		'<span id="dolly" dir="ltr"%s>%s </span>',
		$lang,
		__( 'Irshad Ahmad Khan' )
	);
}
add_action( 'admin_notices', 'hello_notic' );

function notic_css() {
	echo "
	<style type='text/css'>
	#dolly {
		float: right;
		padding: 5px 10px;
		margin: 0;
		font-size: 12px;
		line-height: 1.6666;
	}
	.rtl #dolly {
		float: left;
	}
	.block-editor-page #dolly {
		display: none;
	}
	@media screen and (max-width: 782px) {
		#dolly,
		.rtl #dolly {
			float: none;
			padding-left: 0;
			padding-right: 0;
		}
	}
	</style>
	";
}

add_action( 'admin_head', 'notic_css' );







/*
function irshad_register_widgets() {
	register_widget( 'Akismet_Widget' );
}
add_action( 'widgets_init', 'irshad_register_widgets' );
*/