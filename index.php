<?php get_header(); ?>

<div class="container">
      <!-- Começar a coluna de conteúdo -->
      <div class="row">
        <div class="col-md-12 conteudo">
          <?php if(have_posts()) : while(have_posts()):the_post(); ?>
        <div class ="page-header">
          <h1><?php the_title(); ?></h1>
        </div>
        <?php the_content(); ?>
          <?php endwhile; else: ?>
            <div class="page-header">
              <h1>Não existem postagens</h1>
              </div>
              <p>Não há conteúdo para a página</p>
          <?php endif;?>
          </div>  


      </div>
          </div>
  </div>          
<?php get_footer(); ?>