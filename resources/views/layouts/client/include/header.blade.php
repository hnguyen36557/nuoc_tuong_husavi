<div id="header-wrapper">

	<div id="header">
		<!-- WEBSITE LOGO -->
		<a href="index-2.html"><img src="{{ URL::To('public/client/images/unnamed.jpg') }}" alt="Food Recipes" width="200" height="120" class="logo" /></a>

	</div><!-- end of header div -->

	<!-- NAVIGATION BAR STARTS HERE -->
	<div id="nav-wrap">
		<div class="inn-nav clearfix">

			<!-- MAIN NAVIGATION STARTS HERE -->
			<ul class="nav">
				<li class="active"><a href="#">Trang Chủ</a>
					<ul>
						<li><a href="index.html">Trang Chủ 1</a></li>
						<li><a href="index-2.html">Trang Chủ 2</a></li>

					</ul>
				</li>
				<li>
					<a href="#">Sliders</a>
					<ul>
						<li><a href="basic-slider.html">Basic Slider</a></li>
						<li><a href="right-slide.html">Right Info Slider</a></li>
						<li><a href="nivo-slider.html">Nivo Slider</a></li>
					</ul>
				</li>
				<li><a href="index.html">Giới Thiệu</a>
					<ul>
						<li><a href="chi-tiet-san-pham.html">Về Chúng Tôi</a></li>
						<li><a href="chi-tiet-san-pham.html">Lịch Sử</a></li>
						<li><a href="chi-tiet-san-pham.html">Tầm Nhìn - Sứ Mệnh</a></li>
					</ul>
				</li>

				<li><a href="san-pham.html">Sản Phẩm</a>
					<ul>
						<li><a href="chi-tiet-san-pham.html">Chi Tiết Sản Phẩm</a></li>

					</ul>
				</li>

				<li ><a href="tin-khuyen-mai.html">Khuyến Mãi</a>
					<ul>
						<li><a href="single-sb.html">Chi Tiết Khuyến Mãi</a></li>

					</ul>
				</li>

				<li><a href="services.html">Dịch Vụ</a></li>
				<li><a href="blog.html">Tin Tức</a>
					<ul>
						<li><a href="single.html">Chi Tiết Tin Tức</a></li>

					</ul>
				</li>
				<li><a href="contact.html">Liên Hệ</a></li>
				<li>
					<a href="{{route('cart.index')}}">
						<i class="fa fa-shopping-cart fa-2x" aria-hidden="true">
						</i>
						CART ({{Cart::count()}})

					</a>
				</li>
			</ul><!-- end of nav ul -->
			<!-- MAIN NAVIGATION ENDS HERE -->

			<!-- SOCIAL NAVIGATION -->
			<ul class="social-nav">
				<li class="twitter"><a href="#"></a></li>
				<li class="facebook"><a href="#"></a></li>
				<li class="flickr"><a href="#"></a></li>
				<li class="rss"><a href="#"></a></li>
			</ul><!-- end of social-nav ul -->
		</div>
	</div><!-- end of nav-wrap -->
	<!-- NAVIGATION BAR ENDS HERE -->

	<span class="w-pet-border"></span>

</div>