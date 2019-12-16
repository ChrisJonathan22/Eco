<?php

$context = new Timber






?>



<?php get_header(); ?>
<div class="container center pt-5 pb-5">
    <!-- Output Front-page title -->
   <h1 class="text-center title"><?php the_title(); ?></h1>

    <!-- Output Front-page content if available -->
   <?php if (have_posts()) : while(have_posts()) : the_post(); ?>
   <p> <?php the_content(); ?> </p>
    <?php endwhile; endif; ?>
</div>
<?php get_footer(); ?>