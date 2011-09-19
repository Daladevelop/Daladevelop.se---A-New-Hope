<?php
	$startpagePosts = new WP_Query();
	
	$args = array(
		'post_type' => array('projekt','page','post'),  
		'orderby' => 'meta_value_num',
		'meta_key' => 'priority',
		'posts_per_page' => 3
	);


	$startpagePosts->query($args);
	if ($startpagePosts->have_posts()) : ?>
<?php endif;
	$slide = 1; 
	while($startpagePosts->have_posts()): $startpagePosts->the_post(); ?>
		<article class="slide_<?php echo $slide++; ?>">
		<?php if(get_post_type() == 'projekt'): ?>
			<h3>Direkt från Lekstugan</h3>
		<?php elseif(get_post_type() == 'page'): ?>
			<h3>Med kärlek ♥</h3>
		<?php elseif(get_post_type() == 'post'): ?>
			<h3>Från bloggen</h3>
		<?php endif; ?>
			<h2><?php the_title(); ?></h2>
			<?php the_content(); ?>

			<a href="<?php the_permalink();?>" alt="<?php the_title(); ?>" >Kika</a>
		</article>



	<?php endwhile; ?>
	
