<?php
	echo "<h1>Emil</h1>";
	$startpagePosts = new WP_Query();
	
	$args = array(
		'post_type' => 'any',
		'orderby' => 'meta_value_num',
		'meta_key' => 'priority',
		'posts_per_page' => 3
	);


	$startpagePosts->query($args);
	if ($startpagePosts->have_posts()) : ?>
		<h3>Direkt från Lekstugan</h3>
<?php endif;
	$slide = 1; 
	while($startpagePosts->have_posts()): $startpagePosts->the_post(); ?>
		<article class="slide_<?php echo $slide++; ?>">
			<h2><?php the_title(); ?></h2>
			<?php the_excerpt(); ?>

			<a href="<?php the_permalink();?>" alt="<?php the_title(); ?>" >Kika</a>
		</article>



	<?php endwhile; ?>
	
