<?php
/*
Template Name: Consumers Page
*/
$smarty = wp_smarty();
$id = get_the_ID();
get_header();
$smarty->display('consumers/content.tpl');
get_footer();