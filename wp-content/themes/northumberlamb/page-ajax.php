<?php
/*
Template Name: Ajax Page
*/
$smarty = wp_smarty();

$post = false;

if ( isset($_GET['recipe_id']) ) {
	$post = get_post($_GET['recipe_id']);


	$post = array_merge( (array)$post, (array)get_fields($post->ID) );
	$posts['recipe'][] = $post;
	$smarty->assign('recipe', $post);
	$smarty->display('ajax/recipe-modal.tpl');
}