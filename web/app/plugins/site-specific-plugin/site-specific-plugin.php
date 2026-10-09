<?php
/*
Plugin Name: Site Specific Plugin
Description: This is a Site Specific Plugin for {website name}. Thus its Code changes go for the site regardless of the Site Active Theme.
*/

//Helpers
require_once('helpers/helper-functions.php');

//Registration 
require_once('registration/register-fields.php');
require_once('registration/register-post-types.php');
require_once('registration/register-taxonomies.php');
require_once('registration/register-shortcodes.php');
?>