<?php
/*
Template Name: Recipes Page
*/
$smarty = wp_smarty();
$id = get_the_ID();
get_header();
$smarty->display('recipes/content.tpl');
get_footer();