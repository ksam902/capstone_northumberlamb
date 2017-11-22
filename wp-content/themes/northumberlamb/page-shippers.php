<?php
/*
Template Name: Shippers Page
*/

$smarty = wp_smarty();
$id = get_the_ID();

$content = array(
	'page' => fetch_page('Shippers'),
);

$smarty->assign('content', $content);

get_header();
$smarty->display('shippers/content.tpl');
$smarty->display('shippers/member-application-modal.tpl');
$smarty->display('shippers/shipper-application-modal.tpl');
get_footer();
