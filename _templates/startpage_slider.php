<?php
	echo "<h1>Emil</h1>";
	$startpagePosts = new WP_Query();
	
	$args = array(
		'post_type' => 'post,page,projekt',
		'meta_key' => 'show_on_startpage',
		'meta_value' => 1,
		'meta_key' => 'priority',
		'posts_per_page' => 3,
		'order_by' => 'meta_value_num'
	);

	$startpagePosts->query($args);
	while($startpagePosts->have_posts()): $startpagePosts->the_post(); ?>
		<h2><?php the_title(); ?></h2>
			





	<?php endwhile; ?>
