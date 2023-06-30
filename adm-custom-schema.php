<?php
/*
Plugin Name: Custom Field for adding JSON LD Schema Markup
Plugin URI:  https://www.aljunmajo.com/
Description: Add JSON LD Schema in head section
Version:     1.0.0
Author:      Aljun
Author URI:  https://www.aljunmajo.com/
Text Domain: adm-custom-schema
Domain Path: /languages
License:     GPL3

Task Book is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 2 of the License, or
any later version.

Task Book is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with Task Book. If not, see https://www.gnu.org/licenses/gpl.html.
*/

/**
 * Display Custom Schema Markup Created by ACF
 */

 // disable direct file access
 if ( ! defined( 'ABSPATH' ) ) {

 	exit;

 }


 require_once plugin_dir_path( __FILE__ ) . 'admin/callbacks.php';
