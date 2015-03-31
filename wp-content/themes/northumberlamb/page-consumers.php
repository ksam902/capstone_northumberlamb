<?php
/*
Template Name: Consumers Page
*/
$smarty = wp_smarty();
$id = get_the_ID();

$content = array(
	'page' => fetch_page('consumers'),
);
$posts = array(
	'clients' => array(),
);
foreach($content['page']['featured_clients'] as $client){
	$post = fetch($client);
	$posts['clients'][] = $post;
}
$content['posts'] = $posts;
$smarty->assign('content', $content);
get_header();
$smarty->display('consumers/content.tpl');
get_footer();