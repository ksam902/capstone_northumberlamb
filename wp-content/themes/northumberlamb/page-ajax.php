<?php
/*
Template Name: Ajax Page
*/
$smarty = wp_smarty();
$recipes = new WP_Query(array( 'post_type' => 'recipe', 'posts_per_page' => '-1'));
$posts = array(
    'recipes' => array(),
);
foreach ($recipes->posts as $p) {
    $recipe = fetch($p);
    // $posts['recipes'][] = $recipe['ID'];
    $posts['recipes'][] = $recipe;
}

$smarty->assign('posts', $posts);

$post = false;

if ( isset($_GET['recipe_id']) ) {
	$post = get_post($_GET['recipe_id']);

	$post = array_merge( (array)$post, (array)get_fields($post->ID) );
	$posts['recipe'][] = $post;
	$smarty->assign('recipe', $post);
	$smarty->display('ajax/recipe-modal.tpl');
}