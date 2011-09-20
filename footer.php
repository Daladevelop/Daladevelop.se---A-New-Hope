<footer id="footer">
	<section id="quote">
		<?php
		$args = array(
			'post-type' => 'citat',
			'numberpost' => 1,
			'orderby' => 'rand'

		);
		$quote = new WP_Query($args);
		while($quote->have_posts()): $quote->the_post(); 
			the_content();
		endwhile;

		?>





	</section>
	<span id="tagline">
		<?php bloginfo('description'); ?>
	</span>
	</footer>

	<script src="http://code.jquery.com/jquery-1.6.2.min.js"></script>
	<script src="http://ajax.aspnetcdn.com/ajax/modernizr/modernizr-1.7-development-only.js"></script>
	
	<?php wp_footer(); ?>
