<?php
/*
Template Name: Media Page
*/

$smarty = wp_smarty();
$id = get_the_ID();

$content = array(
	'page' => fetch_page('media'),
);

//pre(get_the_content());

$smarty->assign('content', $content);

get_header();
$smarty->display('media/content.tpl');
get_footer();