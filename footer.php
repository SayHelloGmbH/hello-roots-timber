<?php

use Timber\Timber;

$context = Timber::get_context();
$context['post'] = Timber::get_post();

Timber::render('partials/footer.twig', $context);
