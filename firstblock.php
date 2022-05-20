<?php
/**
 * Plugin Name: First Block
 * Plugin URI: https://thedotstore.com/
 * Description: My first block
 * Author: Sagar Jariwala
 * Author URI: mailto:sagar.jariwala@multidots.com
 */

function sj_firstblock_init(){
     register_block_type_from_metadata( __DIR__ ); //Here we are attaching block.json where we define all setitng of block
}
add_action( "init", "sj_firstblock_init" );
?>