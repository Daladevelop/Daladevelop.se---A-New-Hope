<?php
	echo "<h1>Emil</h1>";
	$startpagePosts = new WP_Query();
	
	$args = array(
		'post_type' => 'any',
		'meta_key' => 'show_on_startpage',
		'meta_value' => 1,
		'meta_key' => 'priority',
//		'orderby' => 'meta_value',
//		'posts_per_page' => 3
	);

	$hargs = "post_type=any&meta_key=show_on_startpage&meta_value=1&orderby=meta_value&meta_key=priority&meta_value=100&posts_per_page=3";

	$startpagePosts->query($hargs);
	if ($startpagePosts->have_posts()) : ?>
		<h3>Direkt från Lekstugan</h3>
	<?php endif;
	while($startpagePosts->have_posts()): $startpagePosts->the_post(); ?>
		<h2><?php the_title(); ?></h2>
			


	<?php endwhile; ?>
	
