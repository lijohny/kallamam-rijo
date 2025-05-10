<?php
/**
 * Template part for displaying the header content
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package St-Mary's
 */

?>
<style>
	.menu-lister ul {
		display: flex;
		justify-content: space-around;
		list-style-type: none;
		gap: 1rem;
	}

	/* Base styles for navbar */


	@media (min-width: 1024px) {
		#masthead {
			position: fixed;
			top: 0;
			left: 0;
			width: 100%;
			background-color: white; /* Make it transparent initially */
			transition: all 0.3s ease-in-out;
			z-index: 1000;
		}
		
	}

	/* Shadow and background blur effect when scrolled */
	.nav-shadow {
		box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
		background-color: #00000082 !important;
		backdrop-filter: blur(10px); /* Apply blur */
	}

	/* Logo visibility */
	.white-logo {
		display: none; /* Initially hidden */
	}

	.nav-shadow .white-logo {
		display: block; /* Show white logo when scrolled */
	}

	.nav-shadow .default-logo {
		display: none; /* Hide default logo when scrolled */
	}
	#menu-header-menu li a{
		color: black !important;
		font-weight: 700;
	}
	.nav-shadow #menu-header-menu li a{
		color: white !important;
	}
</style>

<header id="masthead" class="transition-all duration-300 relative z-[30000]">
	<div class="flex justify-between items-center w-full text-white">
		<div class="container mx-auto justify-between lg:justify-start px-5 lg:px-24 py-2 flex items-center gap-14">
			<div>
				<!-- Default Logo (Visible at top, hidden when scrolled) -->
				<a href="<?php echo esc_url(home_url('/')); ?>" class="default-logo">
					<img class="w-[150px] lg:w-[300px]" src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/stmarrys-logo.png'); ?>" alt="<?php bloginfo('name'); ?>">
				</a>

				<!-- White Logo (Hidden at top, shown when scrolled) -->
				<a href="<?php echo esc_url(home_url('/')); ?>" class="white-logo">
					<img class="w-[150px] lg:w-[200px]" src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/stmarrys-logowhite.png'); ?>" alt="<?php bloginfo('name'); ?>">
				</a>
			</div>

			<div class="relative">
  
			<!-- Hamburger Icon -->
			<button id="openMenuBtn" class="lg:hidden  relative">
				<img class="w-[50px]" src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/hammenu.png'); ?>" alt="Open Menu">
			</button>

			<!-- Mobile Menu (initially hidden) -->
			<div id="mobileMenu"
				class="fixed z-[20002] top-0 right-0 w-64 h-full bg-white shadow-lg p-6 transform translate-x-full transition-transform duration-300 ease-in-out lg:hidden flex flex-col gap-6">

				<!-- Close Icon -->
				<button id="closeMenuBtn" class="self-end">
				<img class="w-[30px]" src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/close.png'); ?>" alt="Close Menu">
				</button>

				<!-- Mobile Menu Items -->
				<?php
				wp_nav_menu([
					'menu' => 'header-menu',
					'container' => false,
					'menu_class' => 'flex flex-col gap-4 text-lg font-medium',
				]);
				?>
			</div>

			<!-- Desktop Menu -->
			<div class="hidden lg:flex gap-6 items-center">
				<?php
				wp_nav_menu([
					'menu' => 'header-menu',
					'container' => false,
					'menu_class' => 'flex gap-6 text-base font-medium',
				]);
				?>
			</div>

			</div>



		</div>
	</div>
</header>

<script>
	document.addEventListener("DOMContentLoaded", function () {
		let navbar = document.getElementById("masthead");

		window.addEventListener("scroll", function () {
			let currentScroll = window.scrollY;

			if (currentScroll > 50) {
				navbar.classList.add("nav-shadow"); // Add blur effect
			} else {
				navbar.classList.remove("nav-shadow"); // Remove blur effect
			}
		});
	});



	document.addEventListener('DOMContentLoaded', function () {
		const openBtn = document.getElementById('openMenuBtn');
		const closeBtn = document.getElementById('closeMenuBtn');
		const mobileMenu = document.getElementById('mobileMenu');

		openBtn.addEventListener('click', function () {
		mobileMenu.classList.remove('translate-x-full');
		mobileMenu.classList.add('translate-x-0');
		});

		closeBtn.addEventListener('click', function () {
		mobileMenu.classList.remove('translate-x-0');
		mobileMenu.classList.add('translate-x-full');
		});
	});
</script>
