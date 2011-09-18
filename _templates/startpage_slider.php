<?php
	echo "<h1>Emil</h1>";
	$startpagePosts = new WP_Query();
	
	$args = array(
		'post_type' => 'any',
		'orderby' => 'meta_value',
		'meta_key' => 'priority',
		'posts_per_page' => 3
	);


	$startpagePosts->query($args);
	if ($startpagePosts->have_posts()) : ?>
		<h3>Direkt från Lekstugan</h3>
	<?php endif;
	while($startpagePosts->have_posts()): $startpagePosts->the_post(); ?>
		<h2><?php the_title(); ?></h2>
			PRIORITY: <?php meta('priority'); ?><br/>			


	<?php endwhile; ?>
	
