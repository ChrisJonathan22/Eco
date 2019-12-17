

<?php 

$context = Timber::context();
$context['title'] = 'Hello from twig!';

Timber::render( './templates/front_page.twig', $context );

?>