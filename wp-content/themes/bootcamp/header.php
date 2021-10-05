<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>" />
		<meta name="viewport" content="width=device-width" />
		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>
		<?php wp_body_open(); ?>
		<div id="wrapper" class="hfeed">
			<header id="header" role="banner">

				<!-- Start Top Bar -->
				<div id="myTopnav" class="top-bar">
					<div id="branding">
						<div id="site-title" itemprop="publisher" itemscope itemtype="https://schema.org/Organization">
							<?php
							if ( is_front_page() || is_home() || is_front_page() && is_home() ) { echo '<span>'; }
							echo '<a href="' . esc_url( home_url( '/' ) ) . '" title="' . esc_attr( get_bloginfo( 'name' ) ) . '" rel="home" itemprop="url"><span itemprop="name">' . esc_html( get_bloginfo( 'name' ) ) . '</span></a>';
							if ( is_front_page() || is_home() || is_front_page() && is_home() ) { echo '</span>'; }
							?>
						</div>
					</div>
					<!-- 					<div class="top-bar-left">
<ul class="menu" style="background: transparent">
<li class="menu-text">Yeti Agency</li>
</ul>
</div> -->
					<div class="top-bar-right">
						<ul class="menu" style="background: transparent">
							<li><a href="#">One</a></li>
							<li><a href="#">Two</a></li>
							<li><a href="#">Three</a></li>
							<li><a href="#">Four</a></li>
						</ul>
					</div>
				</div>
				<!-- End Top Bar -->
			</header>
			<div>