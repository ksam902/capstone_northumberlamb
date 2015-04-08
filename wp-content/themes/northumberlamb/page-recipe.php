<?php
/*
Template Name: Recipes Page
*/
$smarty = wp_smarty();
$id = get_the_ID();
$recipes = new WP_Query(array( 'post_type' => 'recipe', 'posts_per_page' => '-1'));
$posts = array(
	'recipes' => array(),
);
foreach ($recipes->posts as $p) {
	$post = fetch($p);
	$posts['recipes'][] = $post;
}

$content = array(
	'page' => fetch_page('recipes'),
);
pre($content);
$smarty->assign('content', $content);
$smarty->assign('posts', $posts);
get_header();
$smarty->display('recipes/lamb-cut-chart.tpl');
$smarty->display('recipes/content.tpl');
$smarty->display('recipes/recipe-popup.tpl');
$smarty->display('recipes/braising-modal.tpl');
$smarty->display('recipes/broiling-modal.tpl');
$smarty->display('recipes/roasting-modal.tpl');
get_footer();