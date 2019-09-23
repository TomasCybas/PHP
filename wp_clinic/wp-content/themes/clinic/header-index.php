<header id="header-transparent">
	<div class="layer-stretch hdr-center">
		<div class="row align-items-center">
			<div class="col-5 d-none d-sm-none d-md-block d-lg-block d-xl-block">
				<div class="hdr-center-account text-left p-0">
					<a class="font-14 mr-4"><i class="fa fa-sign-in"></i>Login</a>
					<a class="font-14"><i class="fa fa-user-o"></i>Register</a>
				</div>
			</div>
			<div class="col">
				<div class="hdr-center-logo text-center">
					<a href="html/index.html" class="d-inline-block"><img src="<?php echo get_template_directory_uri()?>/images/logo.png" alt=""></a>
				</div>
			</div>
			<div class="col-5 d-none d-sm-none d-md-block d-lg-block d-xl-block">
				<div class="pull-right">
					<ul class="social-list social-list-white">
						<li>
							<a href="#" id="hdr-facebook" class="fa fa-facebook rounded"></a>
							<span class="mdl-tooltip mdl-tooltip--bottom" data-mdl-for="hdr-facebook">Facebook</span>
						</li>
						<li>
							<a href="#" id="hdr-twitter" class="fa fa-twitter rounded"></a>
							<span class="mdl-tooltip mdl-tooltip--bottom" data-mdl-for="hdr-twitter">Twitter</span>
						</li>
						<li>
							<a href="#" id="hdr-google" class="fa fa-google rounded"></a>
							<span class="mdl-tooltip mdl-tooltip--bottom" data-mdl-for="hdr-google">Google</span>
						</li>
						<li>
							<a href="#" id="hdr-instagram" class="fa fa-instagram rounded"></a>
							<span class="mdl-tooltip mdl-tooltip--bottom" data-mdl-for="hdr-instagram">Instagram</span>
						</li>
						<li>
							<a href="#" id="hdr-youtube" class="fa fa-youtube rounded"></a>
							<span class="mdl-tooltip mdl-tooltip--bottom" data-mdl-for="hdr-youtube">Youtube</span>
						</li>
						<li>
							<a href="#" id="hdr-linkedin" class="fa fa-linkedin rounded"></a>
							<span class="mdl-tooltip mdl-tooltip--bottom" data-mdl-for="hdr-linkedin">Linkedin</span>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>

	<div class="header-transparent-menu">
		<div class="hdr layer-stretch">
			<div class="row align-items-center justify-content-end">
				<!-- Start Menu Section -->
                <?php wp_nav_menu([
                        'menu' => 'main_menu',
                        'menu_class' => 'col menu text-left',
                        'walker' => new Custom_Transparent_Nav_Walker(),
                ]) ?>
				<div class="col col-md-auto d-none d-sm-block d-md-block d-lg-block d-xl-block">
					<button class="mdl-button mdl-button--colored mdl-button--raised mdl-js-button mdl-js-ripple-effect hdr-apointment"><i class="fa fa-calendar m-0 color-white"></i> Make An Appointment</button>
				</div>
				<div class="col-2 col-md-auto col-lg-auto">
					<div class="mdl-button mdl-js-button mdl-button--fab hdr-search">
						<i class="fa fa-search fa-2x color-white"></i>
					</div>
				</div>
				<div id="menu-bar" class="col-2 col-md-auto"><a><i class="fa fa-bars color-white"></i></a></div>
			</div>
			<div class="search-banner animated fadeInUp">
				<input type="text" placeholder="Search your Query ...">
			</div>
		</div>
	</div>
</header>