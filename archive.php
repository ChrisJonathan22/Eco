<?php get_header(); ?>
<div class="container center pt-5 pb-5">
    <!-- Output Front-page title -->
   <h1 class="text-center title"><?php single_cat_title(); ?></h1>

    <!-- Output Front-page content if available -->
   <?php if (have_posts()) : while(have_posts()) : the_post(); ?>
    <div class="card mb-4">
        <div class="card-body">
            <h3><?php the_title(); ?></h3>
            <p><?php the_excerpt(); ?></p>
            <a href="<?php the_permalink(); ?>" class="btn btn-success">Read more</a>
        </div>
    </div>
        
    <?php endwhile; endif; ?>
</div>
<?php get_footer(); ?>