<?php
/**
 * Initialize the update checker.
 *
 * @package WordPress
 * @subpackage Ash
 * @since Ash 1.0
 */


require 'theme-update-checker.php';
$example_update_checker = new ThemeUpdateChecker(
	'Ash',                                            //Theme folder name, AKA "slug". 
	'http://dummyrobot.com/repository/themes/ash/updt.json' //URL of the metadata file.
);