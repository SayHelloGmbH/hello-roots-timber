<?php

use Timber\Timber;
use Timber\PostQuery as PostQuery;

$context = Timber::get_context();
$context['posts'] = new PostQuery([
	'ignore_sticky_posts' => true,
	'paged' => absint((get_query_var('paged')) ? get_query_var('paged') : 1),
	'post__not_in' => get_option('sticky_posts')
]);

if (!is_paged() && count(get_option('sticky_posts'))) {
	$context['sticky_posts'] = new PostQuery([
		'ignore_sticky_posts' => false,
		'post__in' => get_option('sticky_posts')
	]);
}

Timber::render('index.twig', $context);
