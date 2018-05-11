<?php
	get_header();
?>
	<section class="container contenedor">
		<h1 class="intro__title uppercase"><?php echo the_title();?></h1>
		<div class="main">
			<?php
				while ( have_posts() ) : the_post();
					the_content();
				endwhile;
			?>
		</div>
	</section>
<?php get_footer(); ?>