<?php
/**
 * Footer Template
 */
?>

	<?php get_template_part( 'content', 'footer' ); ?>


	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.10.1/jquery-ui.min.js"></script>

	<?php // custom for this theme ?>
	<script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/js/parallax.min.js"></script>
	<script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/js/jquery.magnific-popup.min.js"></script>
	<script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/js/custom.js"></script>

	<script>
		function openNav() {
		  document.getElementById("myNav").style.width = "100%";
		}
		function closeNav() {
		  document.getElementById("myNav").style.width = "0%";
		}
	</script>

	<?php if(!wp_is_mobile()) : ?>
		<script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/js/lax.min.js"></script>

		<!-- laxxx initialise -->
		<script type="text/javascript">
			window.onload = function() {
				lax.setup() // init

				const updateLax = () => {
					lax.update(window.scrollY)
					window.requestAnimationFrame(updateLax)
				}

				window.requestAnimationFrame(updateLax)
			}
		</script>
	<?php endif; ?>

	<script type="text/javascript">

		/* Toggles on and off the 'active' class on the menu and the toggler button.fe*/
		const toggler = document.querySelector('.menu__toggler');
		const menu    = document.querySelector('.menu');

		toggler.addEventListener('click', () => {
			toggler.classList.toggle('active');
			menu.classList.toggle('active');
		})

		function closeNav() {
			toggler.classList.toggle('active');
			menu.classList.toggle('active');
		}
	</script>

	<!-- Magnific Popup -->
	<script type="text/javascript">
		$(document).ready(function() {
			$('.open-popup-link').magnificPopup({type:'inline',midClick: true});
		});
	</script>

	<?php wp_footer(); ?>

</body>
</html>
