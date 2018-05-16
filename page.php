<?php get_header(); 

$has_thumbnail = has_post_thumbnail();
$container= ""; 
$image = "";
if ($has_thumbnail == 1) {
	$container = "container text-center with-thumb";
	$image = get_the_post_thumbnail_url();
}
?>	
	<?php if ($has_thumbnail == 1): ?>
		<div class="hero d-flex align-items-center justify-content-center" style="background-image: url(<?php echo $image ?>)">
			<div class="contenido-hero">				
				<div class="text-hero">
					<h2><?php the_title(); ?></h2>
				</div>
			</div>
		</div>
	<?php endif ?>
		<div class="main <?php echo $container?>">
			<?php
				while ( have_posts() ) : the_post();
					the_content();
				endwhile;
			?>
		</div>
<?php get_footer(); ?>