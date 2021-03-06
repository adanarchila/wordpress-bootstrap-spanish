<?php
/*
Template Name: Left Sidebar Page
*/
?>

<?php get_header(); ?>
			
			<div id="content" class="clearfix row-fluid">
            
            	<?php get_sidebar(); // barra lateral 1 ?>
			
				<div id="main" class="span8 clearfix" role="main">

					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					
					<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article">
						
						<header>
							
							<div class="page-header"><h1><?php the_title(); ?></h1></div>
						
						</header> <!-- fin de la cabecera del artículor -->
					
						<section class="post_content">
							<?php the_content(); ?>
					
						</section> <!-- fin de la sección del artículo -->
						
						<footer>
			
							<p class="clearfix"><?php the_tags('<span class="tags">' . __("Etiquetas","bonestheme") . ': ', ', ', '</span>'); ?></p>
							
						</footer> <!-- fin del pie del artículo -->
					
					</article> <!-- fin del artículo -->
					
					<?php comments_template(); ?>
					
					<?php endwhile; ?>	
					
					<?php else : ?>
					
					<article id="post-not-found">
					    <header>
					    	<h1><?php _e("No se ha encontrado", "bonestheme"); ?></h1>
					    </header>
					    <section class="post_content">
					    	<p><?php _e("Lo sentimos, pero el recurso solicitado no se ha encontrado en este sitio.", "bonestheme"); ?></p>
					    </section>
					    <footer>
					    </footer>
					</article>
					
					<?php endif; ?>
			
				</div> <!-- fin de #main -->
    
			</div> <!-- fin de #content -->

<?php get_footer(); ?>