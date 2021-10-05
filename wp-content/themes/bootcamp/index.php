<?php get_header(); ?>
<main id="container" role="main">
	<?php //if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<?php //get_template_part( 'entry' ); ?>
	<?php //comments_template(); ?>
	<?php //endwhile; endif; ?>
	<?php //get_template_part( 'nav', 'below' ); ?>
	<div class="grid-x">
		<div class="cell">
			<div class="orbit" role="region" aria-label="Favorite Space Pictures" data-orbit>
				<div class="orbit-wrapper">
					<div class="orbit-controls">
						<button class="orbit-previous"><span class="show-for-sr">Previous Slide</span>&#9664;&#xFE0E;</button>
						<button class="orbit-next"><span class="show-for-sr">Next Slide</span>&#9654;&#xFE0E;</button>
					</div>
					<ul class="orbit-container" data-options="animation:slide; pause_on_hover:true; animation_speed:500; navigation_arrows:false; bullets:false;">
						<li class="is-active orbit-slide">
							<figure class="orbit-figure">
								<img class="orbit-image" src="http://localhost/blogknorish/wp-content/uploads/pricing-sec-bg.png" alt="Space">
								<figcaption class="orbit-caption">Space, the final frontier.</figcaption>
							</figure>
						</li>
						<li class="orbit-slide">
							<figure class="orbit-figure">
								<img class="orbit-image" src="http://localhost/blogknorish/wp-content/uploads/pricing-sec-bg.png" alt="Space">
								<figcaption class="orbit-caption">Lets Rocket!</figcaption>
							</figure>
						</li>
						<li class="orbit-slide">
							<figure class="orbit-figure">
								<img class="orbit-image" src="http://localhost/blogknorish/wp-content/uploads/pricing-sec-bg.png" alt="Space">
								<figcaption class="orbit-caption">Encapsulating</figcaption>
							</figure>
						</li>
						<li class="orbit-slide">
							<figure class="orbit-figure">
								<img class="orbit-image" src="http://localhost/blogknorish/wp-content/uploads/pricing-sec-bg.png" alt="Space">
								<figcaption class="orbit-caption">Outta This World</figcaption>
							</figure>
						</li>
					</ul>
				</div>
				<nav class="orbit-bullets">
					<button class="is-active" data-slide="0">
						<span class="show-for-sr">First slide details.</span>
						<span class="show-for-sr" data-slide-active-label>Current Slide</span>
					</button>
					<button data-slide="1"><span class="show-for-sr">Second slide details.</span></button>
					<button data-slide="2"><span class="show-for-sr">Third slide details.</span></button>
					<button data-slide="3"><span class="show-for-sr">Fourth slide details.</span></button>
				</nav>
			</div>
		</div>
	</div>

	<div class="row">
		<div class="columns">

		</div>

	</div>

	<div class="row" id="content">
		<div class="columns medium-8">
			<div class="blog-post">
				<h3>Awesome blog post title <small>3/6/2015</small></h3>
				<img class="thumbnail" src="http://localhost/blogknorish/wp-content/uploads/Power-of-Free-Webinars-Featured.webp">
				<p>Praesent id metus massa, ut blandit odio. Proin quis tortor orci. Etiam at risus et justo dignissim congue. Donec congue lacinia dui, a porttitor lectus condimentum laoreet. Nunc eu ullamcorper orci. Quisque eget odio ac lectus vestibulum faucibus eget in metus. In pellentesque faucibus vestibulum. Nulla at nulla justo, eget luctus.</p>
				<div class="callout">
					<ul class="menu simple">
						<li><a href="#">Author: Mike Mikers</a></li>
						<li><a href="#">Comments: 3</a></li>
					</ul>
				</div>
			</div>

			<div class="blog-post">
				<h3>Awesome blog post title <small>3/6/2015</small></h3>
				<img class="thumbnail" src="http://localhost/blogknorish/wp-content/uploads/Power-of-Free-Webinars-Featured.webp">
				<p>Praesent id metus massa, ut blandit odio. Proin quis tortor orci. Etiam at risus et justo dignissim congue. Donec congue lacinia dui, a porttitor lectus condimentum laoreet. Nunc eu ullamcorper orci. Quisque eget odio ac lectus vestibulum faucibus eget in metus. In pellentesque faucibus vestibulum. Nulla at nulla justo, eget luctus.</p>
				<div class="callout">
					<ul class="menu simple">
						<li><a href="#">Author: Mike Mikers</a></li>
						<li><a href="#">Comments: 3</a></li>
					</ul>
				</div>
			</div>

			<div class="blog-post">
				<h3>Awesome blog post title <small>3/6/2015</small></h3>
				<img class="thumbnail" src="http://localhost/blogknorish/wp-content/uploads/Power-of-Free-Webinars-Featured.webp">
				<p>Praesent id metus massa, ut blandit odio. Proin quis tortor orci. Etiam at risus et justo dignissim congue. Donec congue lacinia dui, a porttitor lectus condimentum laoreet. Nunc eu ullamcorper orci. Quisque eget odio ac lectus vestibulum faucibus eget in metus. In pellentesque faucibus vestibulum. Nulla at nulla justo, eget luctus.</p>
				<div class="callout">
					<ul class="menu simple">
						<li><a href="#">Author: Mike Mikers</a></li>
						<li><a href="#">Comments: 3</a></li>
					</ul>
				</div>
			</div>

			<div class="blog-post">
				<h3>Awesome blog post title <small>3/6/2015</small></h3>
				<img class="thumbnail" src="http://localhost/blogknorish/wp-content/uploads/Power-of-Free-Webinars-Featured.webp">
				<p>Praesent id metus massa, ut blandit odio. Proin quis tortor orci. Etiam at risus et justo dignissim congue. Donec congue lacinia dui, a porttitor lectus condimentum laoreet. Nunc eu ullamcorper orci. Quisque eget odio ac lectus vestibulum faucibus eget in metus. In pellentesque faucibus vestibulum. Nulla at nulla justo, eget luctus.</p>
				<div class="callout">
					<ul class="menu simple">
						<li><a href="#">Author: Mike Mikers</a></li>
						<li><a href="#">Comments: 3</a></li>
					</ul>
				</div>
			</div>
		</div>
		<div class="columns medium-3">
			<?php get_sidebar(); ?>
		</div>
	</div>

	<div class="row column">
		<ul class="pagination" role="navigation" aria-label="Pagination">
			<li class="disabled">Previous</li>
			<li class="current"><span class="show-for-sr">You're on page</span> 1</li>
			<li><a href="#" aria-label="Page 2">2</a></li>
			<li><a href="#" aria-label="Page 3">3</a></li>
			<li><a href="#" aria-label="Page 4">4</a></li>
			<li class="ellipsis"></li>
			<li><a href="#" aria-label="Page 12">12</a></li>
			<li><a href="#" aria-label="Page 13">13</a></li>
			<li><a href="#" aria-label="Next page">Next</a></li>
		</ul>
	</div>
</main>
<?php get_footer(); ?>