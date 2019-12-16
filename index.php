<?php 

    $args = array(
        'post_type' => 'post',
        'tax_query' => array(
            'relation' => 'AND',
            array(
                'taxonomy' => 'movie_genre',
                'field' => 'slug',
                'terms' => array('action', 'comedy')
            ),
            array(
                'taxonomy' => 'actor',
                'field' => 'id',
                'terms' => array(103, 115, 206),
                'operator' => 'NOT IN'
            )
        )
    );

    $context = Timber::context();
    $context['posts'] = Timber::get_posts($args);

    Timber::render('index.twig', $context);

    print_r( $context );

?>