</div>

<footer>
	<article class="callout margin-bottom-0 padding-vertical-3 secondary" id="footer" role="contentinfo">
		<div class="grid-container">
			<div class="grid-x">
				<div class="large-4 cell">
					<h5>Vivamus Hendrerit Arcu Sed Erat Molestie</h5>
					<p>Curabitur vulputate, ligula lacinia scelerisque tempor, lacus lacus ornare ante, ac egestas est urna sit amet arcu. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Sed molestie augue sit.</p>

				</div>
				<div class="large-3 large-offset-2 cell">
					<ul class="menu vertical">
						<li><a href="#">One</a></li>
						<li><a href="#">Two</a></li>
						<li><a href="#">Three</a></li>
						<li><a href="#">Four</a></li>
					</ul>
				</div>
				<div class="large-3 cell">
					<ul class="menu vertical">
						<li><a href="#">One</a></li>
						<li><a href="#">Two</a></li>
						<li><a href="#">Three</a></li>
						<li><a href="#">Four</a></li>
					</ul>
				</div>
			</div>	
		</div>
	</article>
	<div id="copyright" class="padding-1 text-center" style="background: #000;">
		<p class="margin-bottom-0" style="color:#fff">
			&copy; <?php echo esc_html( date_i18n( __( 'Y', 'blankslate' ) ) ); ?> <?php echo esc_html( get_bloginfo( 'name' ) ); ?>
		</p>
	</div>
</footer>

</div>
<?php wp_footer(); ?>
<script>

	//TOP NAVIGATION
	function NavBar() {
		var x = document.getElementById("myTopnav");
		if (x.className === "topnav") {
			x.className += " responsive";
		} else {
			x.className = "topnav";
		}
	}
	window.onscroll = function() {scrollFunction()};
	function scrollFunction() {
		if (document.body.scrollTop > 80 || document.documentElement.scrollTop > 80) {
			document.getElementById("myTopnav").style.width = "100%";
			document.getElementById("header").style.position = "fixed";
			document.getElementById("header").style.top = "0%";
			document.getElementById("roll_back").style.display = "block";
		} else {
			document.getElementById("myTopnav").style.width = "80%";
			document.getElementById("header").style.position = "fixed";
			document.getElementById("header").style.top = "4rem";
			document.getElementById("roll_back").style.display = "none";
		}
	}
	function SideBar() {
		var x = document.getElementById("sidebar");
		if (x.className != "a") {
			x.className += "a";
		} else {
			x.className = " responsive";
		}
	}
// 	window.onscroll = function() {scrollFunction()};
// 	function scrollFunction() {
// 		if (document.body.scrollTop > 80 || document.documentElement.scrollTop > 80) {
// 			document.getElementById("myTopnav").style.width = "100%";
// 			document.getElementById("header").style.position = "fixed";
// 			document.getElementById("header").style.top = "0%";
// 			document.getElementById("roll_back").style.display = "block";
// 		} else {
// 			document.getElementById("myTopnav").style.width = "80%";
// 			document.getElementById("header").style.position = "fixed";
// 			document.getElementById("header").style.top = "4rem";
// 			document.getElementById("roll_back").style.display = "none";
// 		}
// 	}
	(function($){  
		$(document).foundation();
	})(jQuery);
</script>
</body>
</html>