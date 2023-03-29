<?php get_header(); ?>

    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
      <div class="container">
        <?php if (have_posts()) : while (have_posts()) : the_post();?>
        <?php the_content();?>
        <?php endwhile; endif; ?>

      </div>
    </div>

    

<?php get_footer(); ?>