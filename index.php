<?php get_header() ?>
	
<div class="container">
	<section class="row posts">
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<article class="col-sm-6 post">
					<div class="contenedor">
						<div class="thumb">
							<a href="<?php the_permalink();?>">
								<?php if ( has_post_thumbnail() ) { the_post_thumbnail( 'homepage-thumb' ); } ?>
							</a>
						</div>
						<div class="info">
							<h2 class="titulo"><a href="<?php the_permalink();?>"><?php the_title(); ?></a></h2>
							<p class="fecha"><?php echo get_the_date(); ?></p>

							<div class="extracto"><?php the_excerpt(); ?></div>
							<!-- <p class="extracto"><?php the_excerpt(); ?></p> -->
							<div class="categorias">
								<?php the_category();?>
							</div>
						</div>
					</div>
				</article>

				<?php endwhile; else: ?>
					<article class="col-sm-6 post">
						<div class="contenedor">
							<div class="info">
								<h2 class="titulo">El Post que buscas no existe</h2>
								<div class="extracto"><p>Revisa que la URL que hayas ingresado sea correcta</p></div>
							</div>
						</div>
					</article>
				<?php endif; ?>
			</section>
			<div class="row">
				<div class="col-md-12 paginacion">
					<div class="pagination"><?php wp_pagenavi(); ?></div>
				</div>
			</div>
</div>

<?php get_footer() ?>