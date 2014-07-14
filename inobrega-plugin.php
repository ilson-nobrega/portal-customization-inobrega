<?php
/*
 * Plugin Name: Portal Customization - Inóbrega
 * Plugin URI: http://www.inobrega.com.br
 * Description: A plugin designed for those who have a need to use in your portal-Custom Post Types, taxonomies, Bootstrap and Font-Awesome libraries.
 * Version: 1.0
 * Author: Ilson Nóbrega
 * Author URI: http://www.inobrega.com.br
 * License: GPLv2
 * 
 *      Copyright 2014 Inóbrega - Tecnologia e Marketing Digital <contato@inobrega.com.br>
 *
 *      This program is free software; you can redistribute it and/or modify
 *      it under the terms of the GNU General Public License as published by
 *      the Free Software Foundation; either version 3 of the License, or
 *      (at your option) any later version.
 *
 *      This program is distributed in the hope that it will be useful,
 *      but WITHOUT ANY WARRANTY; without even the implied warranty of
 *      MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *      GNU General Public License for more details.
 *
 *      You should have received a copy of the GNU General Public License
 *      along with this program; if not, write to the Free Software
 *      Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston,
 *      MA 02110-1301, USA.
 */

    /*
     * Import all plugins libraries
     */
        //Custom Post-Types Configurations
        importFile('lib', 'post-type.php');

    /*
     * Initial settings of the plugin
     */
        //Defines the version of plugin
        define('version', '1.0');
        
        //Defines the version of WordPress
        define('wp_version', getbloginfo('version'));
        

    /*
     * Functions that will be used
     */
        //Function responsible for importing files from the root of the plugin
        function importFile($path, $file){
            
            if(empty($path) || empty($file)){
                
                return false;
            }else{
                
                return include (plugin_wp_dir_path(__FILE__).'/'.$path.'/'.$file');
            }
        }

