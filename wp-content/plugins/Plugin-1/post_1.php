<?php

/*
Plugin Name: OutTax
Plugin URI: http://страница_с_описанием_плагина_и_его_обновлений
Description: выводит данные
Version: 1.0
Author: Solodkiy
Author URI: http:solodkiy.dm@gmail.com
*/

/*  Copyright 2017  Solodkiy  (email: solodkiy.dm@gmail.com)

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation; either version 2 of the License, or
    (at your option) any later version.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/


//Активация плагина
function install(){
    global $wpdb;
    $wpdb->query("CREATE TABLE `".$wpdb->prefix."popularposts` (
        `ID` INT(10) UNSIGNED NULL AUTO_INCREMENT,
        `count` INT DEFAULT '0',
        `post_id` INT,
        PRIMARY KEY (`ID`))");
}
register_activation_hook( __FILE__, 'install');

//Деактивация плагина
function deactivate(){
    global $wpdb;
    $wpdb->query("DROP TABLE IF EXISTS {$wpdb->prefix}popularposts");
}
register_deactivation_hook( __FILE__, 'deactivate');
function my_tax( $content ) {
    if (is_home()){
    $tax = the_taxonomies();
    $content = $tax . $content;
    return $content;
}
}
add_filter( 'wp_link_pages', 'my_tax');


function my_meta( $content ) {
    if (is_home()){
    $met = the_meta();
   $content = $met . $content;
    return $content;
}
}
add_filter( 'wp_link_pages', 'my_meta');