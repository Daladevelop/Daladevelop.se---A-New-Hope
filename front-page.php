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
		$args = array(
			'posts_per_page' => 1,
			'post_type' => 'post',
			'orderby' => 'date'

		);

		$oneBlogPost = new WP_Query($args);
		while($oneBlogPost->have_posts()): $oneBlogPost->the_post(); ?>
			<article>
				<h3><?php the_title();?></h3>
					<span class="thedate"><?php echo get_the_date('Y-m-j'); ?></span>
				<?php the_content(); ?>
				<a href="" title="">Läs mer</a>
			</article>
		<?php endwhile; ?>
		
	</section>

	<section id="twitter">
		
		<h3>#Daladevelop</h3>
		<img src="<?php echo get_bloginfo('stylesheet_directory'); ?>/pix/a-horse-with-no-name.png" alt="Gnäggs" id="a-horse-with-no-name" />
		<section id="twitterbox">
		<script src="http://widgets.twimg.com/j/2/widget.js"></script>
			<script>
				new TWTR.Widget({
				  version: 2,
				  type: 'search',
				  search: '#daladevelop',
				  interval: 300,
				  title: '',
				  subject: '',
				  width: '100%',
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
	</section>
	<?php get_footer(); ?>
</body>
</html>
