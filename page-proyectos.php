<?php get_header(); 

$has_thumbnail = has_post_thumbnail();
$container = "container text-center with-thumb";
$image = get_the_post_thumbnail_url();

?>	
		<div class="hero d-flex align-items-center justify-content-center" style="background-image: url(<?php echo $image ?>)">
			<div class="contenido-hero">				
				<div class="text-hero">
					<h2><?php the_title(); ?></h2>
				</div>
			</div>
		</div>
		<div class="main <?php echo $container?>">
			<?php
				while ( have_posts() ) : the_post();
					the_content();
				endwhile;
			?>
		</div>
		<div class="container">
			<div class="filter">
				<h3 class="text-center">Filtro</h3>
				<ul>
				    <li><a href="#">Todos</a></li>
				    <li><a href="#">Desarrollo</a></li>
				    <li><a href="#">Diseño</a></li>
				    <li><a href="#">Marketing</a></li>
				</ul>
			</div>
			<div class="row">
				<?php 
					$args = array(
						'post_type' => 'proyectos',
						'posts_per_page' => -1,
						'orderby' => 'title',
						'order' => 'ASC',
						'category_name' => 'desarrollo,diseno,marketing'
					);
					$projects = new WP_Query($args);
					while ($projects->have_posts()) : $projects->the_post();
				?>
				
				<div class="item">
					<a href="<?php the_permalink() ?>">
						<?php the_post_thumbnail('portfolio-thumb'); ?>
						<div class="text-center text-uppercase title-item">
							<?php the_title(); ?>
						</div>
					</a>
				</div>
				
				<?php endwhile; wp_reset_postdata(); ?>
			</div>
		</div>
<?php get_footer(); ?>