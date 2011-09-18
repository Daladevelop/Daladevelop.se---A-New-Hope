<!DOCTYPE html>
<html>
<?php get_header(); ?>

	<nav role="navigation">
		<?php wp_nav_menu(array('container' => false, 'depth' => 1)); ?>
	</nav>

	<section id="frontpage-slider">
		<?php include(dirname(__FILE__)."/_templates/startpage_slider.php"); ?>
	</section>
	<section id="blogexcerpt">
		<?php
		$oneBlogPost = new WP_Query();
		$args = array(
			'posts_per_page' => 1,
			'post_type' => 'post',
			'orderby' => 'date desc'

		);

		while($oneBlogPost->have_posts()): $oneBlogPost->the_post(); ?>
			<h2><?php the_title();?></h2>
			<?php the_excerpt(); ?>
			<a href="" title="">Läs mer</a>
			
		<?php endwhile; ?>
		
	</section>

	<section id="twitter">
		<script src="http://widgets.twimg.com/j/2/widget.js"></script>
			<script>
				new TWTR.Widget({
				  version: 2,
				  type: 'search',
				  search: '#daladevelop',
				  interval: 30000,
				  title: '',
				  subject: '',
				  width: 420,
				  height: 220,
				  theme: {
			    shell: {
			      background: '#7d7d7d',
			      color: '#ffffff'
			    },
			    tweets: {
			      background: '#7d7d7d',
			      color: '#ffffff',
			      links: '#feca0c'
			    }
			  },
			  features: {
			    scrollbar: false,
			    loop: true,
			    live: true,
			    hashtags: true,
			    timestamp: false,
			    avatars: true,
			    toptweets: false,
			    behavior: 'default'
		  	}
		}).render().start();
	</script>
	</section>
	<?php get_footer(); ?>
</body>
</html>
