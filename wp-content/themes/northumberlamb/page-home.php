<?php
/*
Template Name: Home Page
*/

$smarty = wp_smarty();
$id = get_the_ID();
get_header();
$smarty->display('home/content.tpl');
get_footer();