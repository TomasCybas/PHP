<?php
add_action("wp_enqueue_scripts", function (){
	wp_enqueue_style("bootstrap", get_template_directory_uri()."/css/bootstrap.min.css");
	wp_enqueue_style("fontawesome", get_template_directory_uri()."/css/font-awesome.min.css");
	wp_enqueue_style("hover-dropdown-menu", get_template_directory_uri()."/css/hover-dropdown-menu.css");
	wp_enqueue_style("icons", get_template_directory_uri()."/css/icons.css");
	wp_enqueue_style("revolutions-slider", get_template_directory_uri()."/css/revolution-slider.css");
	wp_enqueue_style("rs-plugin", get_template_directory_uri()."/rs-plugin/css/settings.css");
	wp_enqueue_style("animate", get_template_directory_uri()."/css/animate.min.css");
	wp_enqueue_style("owl-carousel", get_template_directory_uri()."/css/owl/owl.carousel.css");
	wp_enqueue_style("owl-theme", get_template_directory_uri()."/css/owl/owl.theme.css");
	wp_enqueue_style("owl-transitions", get_template_directory_uri()."/css/owl/owl.transitions.css");
	wp_enqueue_style("PrettyPhoto", get_template_directory_uri()."/css/prettyPhoto.css");
	wp_enqueue_style("css-style", get_template_directory_uri()."/css/style.css");
	wp_enqueue_style("responsive", get_template_directory_uri()."/css/responsive.css");
	wp_enqueue_style("color1", get_template_directory_uri()."/css/colors/color1.css");


});

add_action("wp_footer", function(){
	wp_enqueue_script("jquery", get_template_directory_uri()."/js/jquery.min.js");
	wp_enqueue_script("js-bootstrap", get_template_directory_uri()."/js/bootstrap.min.js");
	wp_enqueue_script("js-hover-dropdown", get_template_directory_uri()."/js/hover-dropdown-menu.js");
	wp_enqueue_script("jquery-hover-dropdown-menu", get_template_directory_uri()."/js/jquery.hover-dropdown-menu-addon.js");
	wp_enqueue_script("jquery-easing", get_template_directory_uri()."/js/jquery.easing.1.3.js");
	wp_enqueue_script("jquery-sticky", get_template_directory_uri()."/js/jquery.sticky.js");
	wp_enqueue_script("js-bootstrap-validator", get_template_directory_uri()."/js/bootstrapValidator.min.js");
	wp_enqueue_script("js-rs-plugin-tools", get_template_directory_uri()."/rs-plugin/js/jquery.themepunch.tools.min.js");
	wp_enqueue_script("js-rs-plugin-revolution", get_template_directory_uri()."/rs-plugin/js/jquery.themepunch.revolution.min.js");
	wp_enqueue_script("js-revolution-custom", get_template_directory_uri()."/js/revolution-custom.js");
	wp_enqueue_script("jquery-mixitup", get_template_directory_uri()."/js/jquery.mixitup.min.js");
	wp_enqueue_script("jquery-appear", get_template_directory_uri()."js/jquery.appear.js");
	wp_enqueue_script("js-effect", get_template_directory_uri()."/js/effect.js");
	wp_enqueue_script("js-owl-carousel", get_template_directory_uri()."/js/owl.carousel.min.js");
	wp_enqueue_script("js-prettyphoto", get_template_directory_uri()."/js/jquery.prettyPhoto.js");
	wp_enqueue_script("js-prettyphoto", get_template_directory_uri()."/js/jquery.prettyPhoto.js");
	wp_enqueue_script("js-parallax", get_template_directory_uri()."/js/jquery.parallax-1.1.3.js");
	wp_enqueue_script("js-countTo", get_template_directory_uri()."/js/jquery.countTo.js");
	wp_enqueue_script("js-custom", get_template_directory_uri()."/js/custom.js");
});

function regmenu(){
	register_nav_menus([
		"top_menu" => "Top Menu",
		"bottom1_menu" => "Bottom Menu 1",
		"bottom2_menu" => "Bottom Menu 2"
	]);
}
add_action("init", "regmenu");

add_theme_support("post-thumbnails");
set_post_thumbnail_size(500, 319);
