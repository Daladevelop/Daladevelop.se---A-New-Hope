<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php bloginfo('title')?></title>
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url')?>" />
	<link href='http://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>
	<?php wp_head(); ?>
</head>
<body>

	<header role="banner">
		<?php
			/*
				If it's the startpage, this is the
				main heading (h1), otherwise just give
				it a span
			*/
			if (is_front_page()) :?>
			<h1><a href="<?php bloginfo('url')?>"><?php bloginfo('title') ?></a></h1>
			<?php else :?>
			<span><a href="<?php bloginfo('url')?>"><?php bloginfo('title') ?></a></span>
			<?php endif; ?>
	</header>