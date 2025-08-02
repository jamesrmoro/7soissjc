<?php
add_action('wp_enqueue_scripts', 'sprintcodes_enqueue_scripts_input');
function sprintcodes_enqueue_scripts_input(){
	$postfix = ( defined( 'SCRIPT_DEBUG' ) && true === SCRIPT_DEBUG ) ? '' : '.min';
	$js = array(
		'js_global' => [
			'jquery-3.6.0.min',
			'jquery-migrate-3.0.0.min',
			'modernizr-2.6.2.min',
			'imagesloaded.pkgd.min',
			'jquery.isotope.v3.0.2',
			'pace',
			'popper.min',
			'bootstrap.min',
			'scrollIt.min',
			'jquery.waypoints.min',
			'owl.carousel.min',
			'jquery.stellar.min',
			'jquery.magnific-popup',
			'YouTubePopUp',
			'select2',
			'datepicker',
			'smooth-scroll.min',
			'custom',
			'jquery.mask',
			'script',
		],
	);


	foreach ($js['js_global'] as $item) {
		wp_enqueue_script( $item, get_template_directory_uri() . "/js/" . "$item.js", array(), sprintcodes_VERSION, true );
	}

	if ( !is_page_template( 'template-seo.php' ) && !is_page_template( 'template-default.php' ) ) {

		wp_enqueue_style( 'animate-wp', get_template_directory_uri() . "/css/modules/animate.min.css", sprintcodes_VERSION );
		wp_enqueue_style( 'bootstrap-wp', get_template_directory_uri() . "/css/modules/bootstrap.min.css", sprintcodes_VERSION );
		wp_enqueue_style( 'whatsapp-wp', get_template_directory_uri() . "/css/modules/whatsapp.css", sprintcodes_VERSION );
		wp_enqueue_style( 'modules', get_template_directory_uri() . "/css/modules.css", sprintcodes_VERSION );
		wp_enqueue_style( 'style', get_template_directory_uri() . "/css/style.css", sprintcodes_VERSION );
		wp_enqueue_style( 'menu-wp', get_template_directory_uri() . "/css/modules/menu.css", sprintcodes_VERSION );
		wp_enqueue_style( 'owl-carousel-wp', get_template_directory_uri() . "/css/modules/owl.carousel.min.css", sprintcodes_VERSION );
		wp_enqueue_style( 'owl-theme-default-wp', get_template_directory_uri() . "/css/modules/owl.theme.default.min.css", sprintcodes_VERSION );
		wp_enqueue_style( 'youtubepopup-wp', get_template_directory_uri() . "/css/modules/YouTubePopUp.css", sprintcodes_VERSION );
		wp_enqueue_style( 'fonts-wp', get_template_directory_uri() . "/css/modules/fonts.css", sprintcodes_VERSION );

	}

	if ( is_page_template( 'template-seo.php' ) ) {
		wp_enqueue_script( 'jquery-9imob', get_template_directory_uri() . "/js/jquery-3.6.3.min.js", array(), sprintcodes_VERSION );
		wp_enqueue_style( 'style-page', get_template_directory_uri() . "/css/style-page.css", sprintcodes_VERSION );
		wp_enqueue_script( 'swiper', get_template_directory_uri() . "/js/swiper-bundle.min.js", array(), sprintcodes_VERSION );
	}

	if ( is_page_template( 'template-default.php' ) ) {
		wp_enqueue_script( 'jquery-9imob', get_template_directory_uri() . "/js/jquery-3.6.3.min.js", array(), sprintcodes_VERSION );
		wp_enqueue_style( 'style-default', get_template_directory_uri() . "/css/style-default.css", sprintcodes_VERSION );
		wp_enqueue_script( 'swiper', get_template_directory_uri() . "/js/swiper-bundle.min.js", array(), sprintcodes_VERSION );
	}
}
add_action('wp_footer', 'sprintcodes_activate_scripts');
function sprintcodes_activate_scripts(){ ?>

	<?php if ( is_page_template( 'template-seo.php' ) ) { ?>
		<script>
			$(document).ready(function() {
				$("body").on("click", "input:radio[name='yes_no']", function(){
					if($("#yes").is(":checked")) {
						$(".field-fgts-js").fadeIn();
						document.getElementById("ga_eam").focus();
					} else {
						$(".field-fgts-js").hide();
					}
				});

				var swiper = new Swiper(".mySwiper", {
					slidesPerView: 1,
					spaceBetween: 30,
					loop: true,
					pagination: {
						el: ".swiper-pagination",
						type: "progressbar",
					},
					navigation: {
						nextEl: ".swiper-button-next",
						prevEl: ".swiper-button-prev",
					},
					breakpoints: {
						520: {
							slidesPerView: 2,
							spaceBetween: 30,
						},
						800: {
							slidesPerView: 2,
							spaceBetween: 30,
						},
						1024: {
							slidesPerView: 5,
							spaceBetween: 30,
						},
					}
				});
			});
		</script>
	<?php } ?>
	<?php if ( !is_page_template( 'template-seo.php' ) ) { ?>
		<script>

			var button = document.getElementsByClassName('but'),
			tabContent = document.getElementsByClassName('tab-content');

			if(button.length > 0){
				button[0].classList.add('active');

				if (window.innerWidth < 1024) {
					tabContent[0].style.display = 'inline-block';
				}
				else {
					tabContent[0].style.display = 'initial';
				}

				function building(e, building) {

					var i;
					for (i = 0; i < button.length; i++) {
						tabContent[i].style.display = 'none';
						button[i].classList.remove('active');
					}

					if (window.innerWidth < 1024) {
						document.getElementById(building).style.display = 'inline-block';
					}
					else {
						document.getElementById(building).style.display = 'initial';
					}

					e.currentTarget.classList.add('active');
				}

			}
		</script>
	<?php } ?>
<?php }