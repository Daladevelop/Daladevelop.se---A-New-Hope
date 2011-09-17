<?php
	echo "<h1>Emil</h1>";
	$startpagePosts = new WP_Query();
	
	$args = array(
		'post_type' => 'any',
		'meta_key' => 'show_on_startpage',
		'meta_value' => 1,
		'order_by' => 'meta_value',
		'meta_key' => 'priority',
		'posts_per_page' => 3
	);

	$startpagePosts->query($args);
	while($startpagePosts->have_posts()): $startpagePosts->the_post(); ?>
		<h2><?php the_title(); ?></h2>
			





	<?php endwhile; ?>
