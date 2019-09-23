<header id="header">
	<!-- Start Header Top Section -->
	<div id="hdr-top-wrapper">
		<div class="layer-stretch hdr-top">
			<div class="hdr-top-block hidden-xs">
				<div id="hdr-social">
					<ul class="social-list social-list-sm">
						<li><a class="width-auto font-13">Follow Us : </a></li>
						<li><a href="#" target="_blank" id="hdr-facebook" ><i class="fa fa-facebook" ></i></a><span class="mdl-tooltip mdl-tooltip--bottom" data-mdl-for="hdr-facebook">Facebook</span></li>
						<li><a href="#" target="_blank" id="hdr-twitter" ><i class="fa fa-twitter" ></i></a><span class="mdl-tooltip mdl-tooltip--bottom" data-mdl-for="hdr-twitter">Twitter</span></li>
						<li><a href="#" target="_blank" id="hdr-google" ><i class="fa fa-google" ></i></a><span class="mdl-tooltip mdl-tooltip--bottom" data-mdl-for="hdr-google">Google</span></li>
						<li><a href="#" target="_blank" id="hdr-instagram" ><i class="fa fa-instagram" ></i></a><span class="mdl-tooltip mdl-tooltip--bottom" data-mdl-for="hdr-instagram">Instagram</span></li>
						<li><a href="#" target="_blank" id="hdr-youtube" ><i class="fa fa-youtube" ></i></a><span class="mdl-tooltip mdl-tooltip--bottom" data-mdl-for="hdr-youtube">Youtube</span></li>
						<li><a href="#" target="_blank" id="hdr-linkedin" ><i class="fa fa-linkedin" ></i></a><span class="mdl-tooltip mdl-tooltip--bottom" data-mdl-for="hdr-linkedin">Linkedin</span></li>
						<li><a href="#" target="_blank" id="hdr-flickr" ><i class="fa fa-flickr" ></i></a><span class="mdl-tooltip mdl-tooltip--bottom" data-mdl-for="hdr-flickr">Flickr</span></li>
						<li><a href="#" target="_blank" id="hdr-rss" ><i class="fa fa-rss" ></i></a><span class="mdl-tooltip mdl-tooltip--bottom" data-mdl-for="hdr-rss">Rss</span></li>
					</ul>
				</div>
			</div>
			<div class="hdr-top-line hidden-xs"></div>
			<div class="hdr-top-block hdr-number">
				<div class="font-13">
					<i class="fa fa-mobile font-20 tbl-cell"> </i> <span class="hidden-xs tbl-cell"> Emergency Number : </span> <span class="tbl-cell">1800000000</span>
				</div>
			</div>
			<div class="hdr-top-line"></div>
			<div class="hdr-top-block">
				<div class="theme-dropdown">
					<a id="profile-menu" class="mdl-button mdl-js-button mdl-js-ripple-effect font-13"><i class="fa fa-user-o color-black"></i> My Account</a>
					<ul class="mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect metarial-menu" data-mdl-for="profile-menu">
						<li class="mdl-menu__item"><a href="login.html"><i class="fa fa-sign-in"></i>Login</a></li>
						<li class="mdl-menu__item"><a data-toggle="modal" data-target="#loginpopup"><i class="fa fa-sign-in"></i>Login Popup</a></li>
						<li class="mdl-menu__item"><a href="register.html"><i class="fa fa-user-o"></i>Register</a></li>
						<li class="mdl-menu__item"><a data-toggle="modal" data-target="#registerpopup"><i class="fa fa-user-o"></i>Register Popup</a></li>
						<li class="mdl-menu__item"><a href="forgot.html"><i class="fa fa-key"></i>Forgot Password</a></li>
						<li class="mdl-menu__item"><a href="about.html"><i class="fa fa-info"></i>Help</a></li>
					</ul>
				</div>
			</div>
		</div>
	</div><!-- End Header Top Section -->
	<!-- Start Main Header Section -->
	<div id="hdr-wrapper">
		<div class="layer-stretch hdr">
			<div class="tbl">
				<div class="tbl-row">
					<!-- Start Header Logo Section -->
					<div class="tbl-cell hdr-logo">
						<a href="index.html"><img src="../images/logo.png" alt=""></a>
					</div><!-- End Header Logo Section -->
					<div class="tbl-cell hdr-menu">
						<!-- Start Menu Section -->
                        <?php wp_nav_menu([
                                'menu' => 'transparent_menu',
                                'menu_class' => 'menu',
                                'walker' => new Custom_Transparent_Nav_Walker(),
                        ]) ?>
						<div id="menu-bar"><a><i class="fa fa-bars"></i></a></div>
					</div>
				</div>
			</div>
		</div>
	</div><!-- End Main Header Section -->
</header>
