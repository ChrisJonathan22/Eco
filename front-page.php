

<?php 

$context = Timber::context();
$context['title'] = 'Hello from twig!';

Timber::render( './templates/front-page.twig', $context );

?>