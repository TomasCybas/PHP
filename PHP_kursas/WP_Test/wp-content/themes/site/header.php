<!-- Page Loader -->
<div id="pageloader">
	<div class="loader-item fa fa-spin text-color"></div>
</div>
<!-- Top Bar -->
<div id="top-bar" class="top-bar-section bg-color2 white hidden-sm hidden-md">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<!-- Top Contact -->
				<div class="top-contact">
					<a href="#">
						<i class="fa icon-location-outline text-color"></i> 20001, Ribbon Building, Walsh street, Australia.</a>
					<a href="#">
						<i class="fa icon-alarm3 text-color"></i> Monday-Friday: 9am to 5pm  /  Saturday / Sunday: Closed</a>
					<a href="#">
						<i class="fa icon-phone-outline text-color"></i> +0 (123) 456-78-90</a>
				</div>
				<!-- Top Social Icon -->
				<div class="top-social-icon page-scroll">
					<a href="#get-quote" class="btn btn-default hblack inverse animation animated-item-2">Get a Quote</a>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Top Bar -->
<!-- Sticky Navbar -->
<header id="sticker" class="sticky-navigation">
	<!-- Sticky Menu -->
	<div class="sticky-menu relative">
		<!-- navbar -->
		<div id="navigation" class="navbar navbar-default navbar-bg-light" role="navigation">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="navbar-header">
							<!-- Button For Responsive toggle -->
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
							<!-- Logo -->
							<a class="navbar-brand" id="logo" href="index.html"><img class="site_logo" alt="Site Logo" src="img/logo.png"></a>
						</div>
						<!-- Navbar Collapse -->
						<?php
						wp_nav_menu([
							"menu" => "top_menu",
							"container" => "div",
							"container_class" => "navbar-collapse collapse",
							"container_id" => "topnav",
							"menu_class" => "nav navbar-nav"
						])?>
					</div><!-- /.col-md-12 -->
				</div><!-- /.row -->
			</div><!-- /.container -->
		</div><!-- navbar -->
	</div><!-- Sticky Menu -->
</header><!-- Sticky Navbar -->
<!-- Sticky Navbar -->
