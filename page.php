<?php get_header(); ?>

	<?php the_title(); ?>

	<?php if (have_posts()): while (have_posts()) : the_post(); ?> 

	<?php the_content(); ?>


		<h1>HOLA SOY UNA PAGINA</h1>
		<h1>HOLA SOY UNA PAGINA</h1><h1>HOLA SOY UNA PAGINA</h1><h1>HOLA SOY UNA PAGINA</h1><h1>HOLA SOY UNA PAGINA</h1><h1>HOLA SOY UNA PAGINA</h1><h1>HOLA SOY UNA PAGINA</h1><h1>HOLA SOY UNA PAGINA</h1><h1>HOLA SOY UNA PAGINA</h1><h1>HOLA SOY UNA PAGINA</h1><h1>HOLA SOY UNA PAGINA</h1><h1>HOLA SOY UNA PAGINA</h1><h1>HOLA SOY UNA PAGINA</h1>
		<?php the_title(); ?>


	  <?php endwhile; ?>

	  <?php else: ?>

	   <!-- article -->
	   <article>

	    <h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>

	   </article>
	   <!-- /article -->

  	<?php endif; ?>

<?php get_footer(); ?>
