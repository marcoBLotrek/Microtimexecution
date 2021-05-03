<?php
/**
 * Microtime Execution
 *
 * @package     MicrotimeExecution
 * @author      Marco Bellomo
 * @copyright   2020 Marco Bellomo
 * @license     GPL-2.0-or-later
 *
 * @wordpress-plugin
 * Plugin Name: MicrotimeExecution
 * Plugin URI:  https://github.com/marcoBLotrek/Microtimexecution
 * Description: This plugin prints the execution time of admin area
 * Version:     0.0.1
 * Author:      Marco Bellomo
 * Author URI:  https://github.com/marcoBLotrek
 * Text Domain: hello-world
 * License:     GPL v2 or later
 * License URI: http://www.gnu.org/licenses/gpl-2.0.txt
 */



function change_admin_footer(){

     $time = microtime(true) - $_SERVER["REQUEST_TIME_FLOAT"];

echo ' <div style="Position:fixed;top: 90%;
    left: 100%;
    margin-left: -260px;
    background-color: white;border:1px solid black;"> Execution Time: '.$time.' seconds</div>';
    }
add_filter('admin_footer_text', 'change_admin_footer');
?>