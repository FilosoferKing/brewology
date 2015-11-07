<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
    <title>Brewology</title>
    <meta name="description" content="The SOURCE for all things craft beer" />
    <meta name="author" content="Shawn Otomo" />
    <link rel="shortcut icon" href="img/favicon.png" type="image/x-icon" />

    <!-- Mobile Specific Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />

    <!-- Style CSS -->
    <link rel="stylesheet" href="css/font-awesome-4.4.0/css/font-awesome.min.css" />
	<link rel="stylesheet" href="css/global.css" />
    <link rel="stylesheet" href="css/theme_css/owl-carousel.css" />
    <link rel="stylesheet" href="css/theme_css/bootstrap.css" />
    <link rel="stylesheet" href="css/theme_css/lightbox.css" />
    <link rel="stylesheet" href="css/theme_css/animate.css" />
    <link rel="stylesheet" href="css/theme_css/bxslider.css" />
    <link rel="stylesheet" href="css/theme_css/nouislider.css" />
    <link rel="stylesheet" href="css/theme_css/icomoon.css" />
    <link rel="stylesheet" href="css/theme_css/screen.css" />

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
	<script src="https://fb.me/react-0.14.2.js"></script>
	<script src="https://fb.me/react-dom-0.14.2.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/babel-core/5.8.23/browser.min.js"></script>
</head>
<body data-smooth-scroll="on" id="front-page">
	<!-- Site Preloader -->
	<div class="site-preloader">
		<div class="preloader-content">
			<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="100px" height="100px" viewBox="0 0 100 100" enable-background="new 0 0 100 100" xml:space="preserve">
				<g>
					<polygon fill-rule="evenodd" clip-rule="evenodd" fill="#EB2625" points="52.346,69.705 24.321,69.531 67.362,98.879
						91.266,98.879 	"/>
					<rect x="9.856" y="44.682" fill-rule="evenodd" clip-rule="evenodd" fill="#F0494B" width="14.465" height="54.362"/>
					<path fill-rule="evenodd" clip-rule="evenodd" fill="#A31B1F" d="M47.868,1.947c21.055,0,38.123,17.068,38.123,38.123
						c0,21.055-17.068,38.123-38.123,38.123c-21.055,0-38.123-17.068-38.123-38.123C9.745,19.015,26.813,1.947,47.868,1.947
						L47.868,1.947z M47.868,16.58c-12.973,0-23.49,10.517-23.49,23.49c0,12.973,10.517,23.49,23.49,23.49
						c12.973,0,23.49-10.517,23.49-23.49C71.357,27.097,60.841,16.58,47.868,16.58z"/>
					<path fill-rule="evenodd" clip-rule="evenodd" fill="#F0494B" d="M47.535,1.166c21.055,0,38.123,17.068,38.123,38.123
						c0,21.055-17.068,38.123-38.123,38.123c-21.055,0-38.123-17.068-38.123-38.123C9.412,18.234,26.48,1.166,47.535,1.166L47.535,1.166
						z M47.535,15.799c-12.973,0-23.49,10.517-23.49,23.49c0,12.973,10.517,23.49,23.49,23.49c12.973,0,23.49-10.517,23.49-23.49
						C71.025,26.316,60.508,15.799,47.535,15.799z"/>
				</g>
			</svg>
		</div>
	</div>

	<!-- Page Wrapper -->
	<div id="page">
		<!-- Header -->
		<header>
			<!-- Navigation -->
			<nav>
				<ul>
					<li class="home current-menu-item"><a href="my-profile.php">Home</a></li>
					<li class="listing menu-item-has-children">
						<a href="#">Favorite Breweries</a>
						<ul class="sub-menu">
							<li><a href="properties-grid.php">Grid</a></li>
							<li><a href="properties-list.php">List</a></li>
						</ul>
					</li>
					<!--<li class="property"><a href="single-full-width.php">Single Brewery</a></li>-->
					<!--<li class="agents"><a href="agents.php">Agents</a></li>-->
					<!--<li class="blog"><a href="blog.php">Blog</a></li>-->
					<!--<li class="error"><a href="404.php">404 Page</a></li>-->
				</ul>
			</nav>

			<!-- Social Block & Login -->
			<div class="right-block">
				<!--<ul class="social-block">-->
				<!--<li><a href="#"><i class="fa fa-facebook"></i></a></li>-->
				<!--<li><a href="#"><i class="fa fa-twitter"></i></a></li>-->
				<!--<li><a href="#"><i class="fa fa-instagram"></i></a></li>-->
				<!--<li><a href="#"><i class="fa fa-pinterest"></i></a></li>-->
				<!--</ul>-->

				<p><a class="login" href="#">Login</a> / <a href="#" class="register">Register</a></p>
			</div>

			<!-- Menu Toggle -->
			<span class="menu-toggle cmn-toggle-switch cmn-toggle-switch__htx">
				<span>toggle menu</span>
			</span>

			<!-- Identity image -->
			<div>
				<a href="index.php" class="brand">
					<!--				<img src="img/logo.png" alt="logo" />-->
					<h1>Brewology</h1>
					<p>The SOURCE for all things craft...</p>
				</a>
			</div>

		</header>

		<!-- Main Content -->
		<div class="content-wrapper">
			<!-- Login Form -->
			<div class="login-form-popup">
				<div class="login-form" id="login-popup">
					<div class="brand-wrapper">
						<img src="img/brand.png" alt="login brand" />
					</div>

					<form id="login-form">
						<input class="js-input" type="text" placeholder="Login" />
						<input class="js-input" type="password" placeholder="Password" />

						<input type="submit" value="Login" class="submit-button" />

						<div class="options">
							<label>
								<input type="checkbox" />
								<span>Remember me</span>
							</label>
							<a class="remember-password" href="#">Forgotten the password</a>
						</div>
					</form>

					<form id="register-form">
						<input class="js-input" type="text" placeholder="First Name" />
						<input class="js-input" type="text" placeholder="Last Name" />
						<input class="js-input" type="text" placeholder="Login" />
						<input class="js-input" type="password" placeholder="Password" />
						<input class="js-input" type="password" placeholder="Confirm password" />

						<input type="submit" value="Register" class="submit-button" />
					</form>

					<div class="sign-in-options">
						<span>Sign in</span>
						<a class="facebook" href="my-profile.html">Facebook</a>
						<a class="google" href="my-profile.html">Google</a>
					</div>

					<p class="register-link"><i>Don't have an account?</i> <a href="#" class="register-btn">Register here</a></p>
				</div>
			</div>

			<!-- Properties Map Section -->
			<section class="properties-map">
				<div class="row row-fit">
					<div class="col-md-9 col-lg-7">
						<div class="map-filter-box">
							<div class="box-caption">
								<h4>Search</h4>
								<p>Looking for a certain brewery? Type in search and hit enter!</p>
							</div>

<!--							<div class="select-box">-->
<!--								<input id ="beerSelect" class="filter-box-input js-input no-select" type="text" readonly value="" placeholder="Make a Selection" />-->
<!--								<ul>-->
<!--									<li>All</li>-->
<!--									<li>Breweries</li>-->
<!--									<li>Bars</li>-->
<!---->
<!--								</ul>-->
<!--							</div>-->
							<div class="inputSearchBox">
								<input id="locationSearch" class="customSearchInput" type="text" placeholder="Enter city, state or zip">
							</div>
<!--							<div class="select-box">-->
<!--								<input class="filter-box-input js-input no-select" type="text" readonly value="" placeholder="For sale" />-->
<!--								<ul>-->
<!--									<li>For Sale</li>-->
<!--									<li>Reting</li>-->
<!--								</ul>-->
<!--							</div>-->
							<br>
							<div class="box-caption brewerySearchHeading">
								<p>Searching for breweries in the area? Set the distance and click "Search For Breweries"</p>
							</div>
							<div class="select-box">
								<input id="radius" class="filter-box-input js-input no-select" type="text" readonly value="" placeholder="Distance (in miles)" />
								<ul>
									<li>10</li>
									<li>25</li>
									<li>50</li>
									<li>100</li>
								</ul>
							</div>

<!--							<div class="select-box">-->
<!--								<input class="filter-box-input js-input no-select" type="text" readonly value="" placeholder="All types" />-->
<!--								<ul>-->
<!--									<li>All types</li>-->
<!--									<li>Apartments</li>-->
<!--									<li>Houses</li>-->
<!--								</ul>-->
<!--							</div>-->

<!--							<div class="select-box">-->
<!--								<input class="filter-box-input js-input no-select" type="text" readonly value="" placeholder="All cities" />-->
<!--								<ul>-->
<!--									<li>All cities</li>-->
<!--									<li>Berlin</li>-->
<!--									<li>LA</li>-->
<!--									<li>London</li>-->
<!--									<li>New York</li>-->
<!--								</ul>-->
<!--							</div>-->

<!--							<div class="row row-fit-10">-->
<!--								<div class="col-xs-12">-->
<!--									<input class="filter-box-input js-input nr-only" type="text" placeholder="Min bedrooms" />-->
<!--								</div>-->
<!---->
<!--								<div class="col-xs-12">-->
<!--									<input class="filter-box-input js-input nr-only" type="text" placeholder="Min bathrooms" />-->
<!--								</div>-->
<!--							</div>-->

<!--							<div class="row row-fit-10">-->
<!--								<div class="col-xs-12">-->
<!--									<input class="filter-box-input js-input nr-only" type="text" placeholder="Min area (Sq ft)" />-->
<!--								</div>-->
<!---->
<!--								<div class="col-xs-12">-->
<!--									<input class="filter-box-input js-input nr-only" type="text" placeholder="Max area (Sq ft)" />-->
<!--								</div>-->
<!--							</div>-->

<!--							<div class="price-box">-->
<!--								<p class="caption"><i>Price</i> &#40;$<span class="min"></span> - $<span class="max"></span>&#41;</p>-->
<!---->
<!--								<div class="price-slider" data-min="0" data-max="20000" data-start="2500" data-stop="11000" data-step="500"></div>-->
<!---->
<!--								<div class="price-limits clearfix">-->
<!--									<span class="lower">$0</span>-->
<!--									<span class="upper">$20 000</span>-->
<!--								</div>-->
<!--							</div>-->

							<a href="#" id="sendBrewery" class="button theme-button-1 update-properties" onclick="searchDatabase()">Search For Breweries</a>
						</div>
					</div>

					<div class="col-md-15 col-lg-17">
						<!-- Map Popup -->
<!--						<div id="property-popup" class="property-popup">-->
<!--							<i class="close-popup icon-cross2"></i>-->
<!--							<div class="popup-loader">-->
<!--								<div class="spinner">-->
<!--									<div class="spinner-container container1">-->
<!--										<div class="circle1"></div>-->
<!--										<div class="circle2"></div>-->
<!--										<div class="circle3"></div>-->
<!--										<div class="circle4"></div>-->
<!--									</div>-->
<!--									<div class="spinner-container container2">-->
<!--										<div class="circle1"></div>-->
<!--										<div class="circle2"></div>-->
<!--										<div class="circle3"></div>-->
<!--										<div class="circle4"></div>-->
<!--									</div>-->
<!--									<div class="spinner-container container3">-->
<!--										<div class="circle1"></div>-->
<!--										<div class="circle2"></div>-->
<!--										<div class="circle3"></div>-->
<!--										<div class="circle4"></div>-->
<!--									</div>-->
<!--								</div>-->
<!--							</div>-->
<!--							<div class="popup-cover">-->
<!--								<a href="#">-->
<!--									<img src="img/map-card.jpg" alt="popup cover" />-->
<!--								</a>-->
<!--							</div>-->
<!--							<div class="popup-body">-->
<!--								<h2><a href="#">Penthouse bar</a></h2>-->
<!--								<p>Manhattan 125 off 55</p>-->
<!---->
<!--								<span class="price">$500</span>-->
<!--								<a class="propery-page" href="#">-->
<!--									<i class="fa fa-angle-right"></i>-->
<!--								</a>-->
<!--							</div>-->
<!--						</div>-->

						<!-- Loader -->
<!--						<div class="map-loader">-->
<!--							<div class="spinner">-->
<!--								<div class="spinner-container container1">-->
<!--									<div class="circle1"></div>-->
<!--									<div class="circle2"></div>-->
<!--									<div class="circle3"></div>-->
<!--									<div class="circle4"></div>-->
<!--								</div>-->
<!--								<div class="spinner-container container2">-->
<!--									<div class="circle1"></div>-->
<!--									<div class="circle2"></div>-->
<!--									<div class="circle3"></div>-->
<!--									<div class="circle4"></div>-->
<!--								</div>-->
<!--								<div class="spinner-container container3">-->
<!--									<div class="circle1"></div>-->
<!--									<div class="circle2"></div>-->
<!--									<div class="circle3"></div>-->
<!--									<div class="circle4"></div>-->
<!--								</div>-->
<!--							</div>-->
<!--						</div>-->

						<!-- Map Canvas -->
						<div class="map" id="map-canvas"></div>
					</div>
				</div>
			</section>

			<!-- Hot Offer Section -->
			<section class="hot-offer">
				<div class="container">
					<div class="row">
<!--						<div class="col-sm-6">-->
<!--							<div class="caption">-->
<!--								<h2><i class="icon icon-home4"></i> <span>Hot Offer</span></h2>-->
<!--							</div>-->
<!--						</div>-->
<!---->
<!--						<div class="col-sm-18">-->
<!--							<div class="hot-offer-slider">-->
<!--								<p>-->
<!--									<a href="single-full-width.html">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis viverra venenatis nisl, et venenatis nulla tincidunt non. Nulla sed dui est. Viverra venenatis nisl, et venenatis nulla tincidunt non.</a>-->
<!--								</p>-->
<!--							</div>-->
<!--						</div>-->
					</div>
				</div>
			</section>

			<!-- Listing Section -->
<!--			<section class="listing-section">-->
<!--				<div class="container">-->
<!--					<div class="section-header">-->
<!--						<h1>Recent Listed</h1>-->
<!--						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam nec viverra erat. Aenean elit tellus mattis quis maximus et malesuada congue velit</p>-->
<!--					</div>-->
<!--				</div>-->
<!---->
<!--				<div class="listing-items">-->
<!--					<div class="row">-->
<!--						<div class="col-xs-12 col-md-8 col-lg-6">-->
<!--							<div class="listing-item">-->
<!--								<div class="item-cover type-1">-->
<!--									<div class="cover">-->
<!--										<p>Nulla posuere, egestas neque quis, suscipit eros. Vestibulum ut eros neque. Nam viverra maximus neque id convallis.</p>-->
<!---->
<!--										<a href="single.html">-->
<!--											<i class="icon"></i>-->
<!--										</a>-->
<!--									</div>-->
<!--									<img src="img/listing-1.jpg" alt="item cover" />-->
<!--								</div>-->
<!---->
<!--								<div class="item-body">-->
<!--									<div class="block services">-->
<!--										<p class="caption">Services</p>-->
<!--										<ul>-->
<!--											<li class="bathrooms">Bathrooms: <span>1</span></li>-->
<!--											<li class="bedrooms">Bedrooms: <span>2</span></li>-->
<!--											<li class="area">Area: <span>100</span></li>-->
<!--										</ul>-->
<!--									</div>-->
<!---->
<!--									<div class="block location-info">-->
<!--										<div class="location">-->
<!--											<h3>-->
<!--												<a href="single-full-width.html">Grand hotel room</a>-->
<!--											</h3>-->
<!--											<p>LA 325</p>-->
<!--										</div>-->
<!---->
<!--										<div class="price">-->
<!--											<p>$450 000 <span>For sale</span></p>-->
<!--										</div>-->
<!--									</div>-->
<!--								</div>-->
<!--							</div>-->
<!--						</div>-->
<!---->
<!--						<div class="col-xs-12 col-md-8 col-lg-6">-->
<!--							<div class="listing-item">-->
<!--								<div class="item-cover type-2">-->
<!--									<div class="cover">-->
<!--										<p>Nulla posuere, egestas neque quis, suscipit eros. Vestibulum ut eros neque. Nam viverra maximus neque id convallis.</p>-->
<!---->
<!--										<a href="single.html">-->
<!--											<i class="icon"></i>-->
<!--										</a>-->
<!--									</div>-->
<!--									<img src="img/listing-2.jpg" alt="item cover" />-->
<!--								</div>-->
<!---->
<!--								<div class="item-body">-->
<!--									<div class="block services">-->
<!--										<p class="caption">Services</p>-->
<!--										<ul>-->
<!--											<li class="bathrooms">Bathrooms: <span>1</span></li>-->
<!--											<li class="bedrooms">Bedrooms: <span>2</span></li>-->
<!--											<li class="area">Area: <span>100</span></li>-->
<!--										</ul>-->
<!--									</div>-->
<!---->
<!--									<div class="block location-info">-->
<!--										<div class="location">-->
<!--											<h3>-->
<!--												<a href="single-full-width.html">Grand hotel room</a>-->
<!--											</h3>-->
<!--											<p>LA 325</p>-->
<!--										</div>-->
<!---->
<!--										<div class="price">-->
<!--											<p>$450 000 <span>For sale</span></p>-->
<!--										</div>-->
<!--									</div>-->
<!--								</div>-->
<!--							</div>-->
<!--						</div>-->
<!---->
<!--						<div class="col-xs-12 col-md-8 col-lg-6">-->
<!--							<div class="listing-item">-->
<!--								<div class="item-cover type-2">-->
<!--									<div class="cover">-->
<!--										<p>Nulla posuere, egestas neque quis, suscipit eros. Vestibulum ut eros neque. Nam viverra maximus neque id convallis.</p>-->
<!---->
<!--										<a href="single.html">-->
<!--											<i class="icon"></i>-->
<!--										</a>-->
<!--									</div>-->
<!--									<img src="img/listing-3.jpg" alt="item cover" />-->
<!--								</div>-->
<!---->
<!--								<div class="item-body">-->
<!--									<div class="block services">-->
<!--										<p class="caption">Services</p>-->
<!--										<ul>-->
<!--											<li class="bathrooms">Bathrooms: <span>1</span></li>-->
<!--											<li class="bedrooms">Bedrooms: <span>2</span></li>-->
<!--											<li class="area">Area: <span>100</span></li>-->
<!--										</ul>-->
<!--									</div>-->
<!---->
<!--									<div class="block location-info">-->
<!--										<div class="location">-->
<!--											<h3>-->
<!--												<a href="single-full-width.html">Grand hotel room</a>-->
<!--											</h3>-->
<!--											<p>LA 325</p>-->
<!--										</div>-->
<!---->
<!--										<div class="price">-->
<!--											<p>$450 000 <span>For sale</span></p>-->
<!--										</div>-->
<!--									</div>-->
<!--								</div>-->
<!--							</div>-->
<!--						</div>-->
<!---->
<!--						<div class="col-xs-12 col-md-8 col-lg-6">-->
<!--							<div class="listing-item">-->
<!--								<div class="item-cover type-2">-->
<!--									<div class="cover">-->
<!--										<p>Nulla posuere, egestas neque quis, suscipit eros. Vestibulum ut eros neque. Nam viverra maximus neque id convallis.</p>-->
<!---->
<!--										<a href="single.html">-->
<!--											<i class="icon"></i>-->
<!--										</a>-->
<!--									</div>-->
<!--									<img src="img/listing-4.jpg" alt="item cover" />-->
<!--								</div>-->
<!---->
<!--								<div class="item-body">-->
<!--									<div class="block services">-->
<!--										<p class="caption">Services</p>-->
<!--										<ul>-->
<!--											<li class="bathrooms">Bathrooms: <span>1</span></li>-->
<!--											<li class="bedrooms">Bedrooms: <span>2</span></li>-->
<!--											<li class="area">Area: <span>100</span></li>-->
<!--										</ul>-->
<!--									</div>-->
<!---->
<!--									<div class="block location-info">-->
<!--										<div class="location">-->
<!--											<h3>-->
<!--												<a href="single-full-width.html">Grand hotel room</a>-->
<!--											</h3>-->
<!--											<p>LA 325</p>-->
<!--										</div>-->
<!---->
<!--										<div class="price">-->
<!--											<p>$450 000 <span>For sale</span></p>-->
<!--										</div>-->
<!--									</div>-->
<!--								</div>-->
<!--							</div>-->
<!--						</div>-->
<!--					</div>-->
<!--				</div>-->
<!--			</section>-->

			<!-- Most viewed Section -->
			<section class="most-viewed-section">
				<div class="container" id="searchedBreweries">
<!--					<div class="section-header">-->
<!--						<h1>Breweries</h1>-->
<!--						<p>Here are the breweries close to where you searched</p>-->
<!--					</div>-->
					<div id="breweryPanels"></div>
<!--					<ul class="most-viewed-carousel most-viewed-items">-->
<!--						<li class="item">-->
<!--							<div class="most-viewed-item">-->
<!--								<div class="item-cover">-->
<!--									<div class="cover">-->
<!--										<div class="text">-->
<!--											<a href="single.html">Info</a>-->
<!--											<p>Nulla posuere, egestas neque quis, suscipit eros. Vestibulum ut eros neque. Nam viverra maximus neque id convallis. In auctor eu quam sit amet</p>-->
<!--										</div>-->
<!--									</div>-->
<!--									<img src="img/most-viewed-1.jpg" alt="item cover" />-->
<!--								</div>-->
<!---->
<!--								<div class="item-body">-->
<!--									<ul class="services">-->
<!--										<li><p class="bathrooms">Bathrooms: <span>1</span></p></li>-->
<!--										<li><p class="bedrooms">Bedrooms: <span>2</span></p></li>-->
<!--										<li><p class="area">Area: <span>100</span></p></li>-->
<!--									</ul>-->
<!---->
<!--									<div class="location">-->
<!--										<h3>-->
<!--											<a href="single.html">Grand hotel room</a>-->
<!--										</h3>-->
<!--										<p>LA 325</p>-->
<!---->
<!--										<span class="price">$450 000</span>-->
<!--									</div>-->
<!--								</div>-->
<!--							</div>-->
<!---->
<!--							<div class="most-viewed-item">-->
<!--								<div class="item-cover">-->
<!--									<div class="cover">-->
<!--										<div class="text">-->
<!--											<a href="single.html">Info</a>-->
<!--											<p>Nulla posuere, egestas neque quis, suscipit eros. Vestibulum ut eros neque. Nam viverra maximus neque id convallis. In auctor eu quam sit amet</p>-->
<!--										</div>-->
<!--									</div>-->
<!--									<img src="img/most-viewed-4.jpg" alt="item cover" />-->
<!--								</div>-->
<!---->
<!--								<div class="item-body">-->
<!--									<ul class="services">-->
<!--										<li><p class="bathrooms">Bathrooms: <span>1</span></p></li>-->
<!--										<li><p class="bedrooms">Bedrooms: <span>2</span></p></li>-->
<!--										<li><p class="area">Area: <span>100</span></p></li>-->
<!--									</ul>-->
<!---->
<!--									<div class="location">-->
<!--										<h3>-->
<!--											<a href="single.html">Grand hotel room</a>-->
<!--										</h3>-->
<!--										<p>LA 325</p>-->
<!---->
<!--										<span class="price">$350 000</span>-->
<!--									</div>-->
<!--								</div>-->
<!--							</div>-->
<!--						</li>-->
<!---->
<!--						<li class="item">-->
<!--							<div class="most-viewed-item">-->
<!--								<div class="item-cover">-->
<!--									<div class="cover">-->
<!--										<div class="text">-->
<!--											<a href="single.html">Info</a>-->
<!--											<p>Nulla posuere, egestas neque quis, suscipit eros. Vestibulum ut eros neque. Nam viverra maximus neque id convallis. In auctor eu quam sit amet</p>-->
<!--										</div>-->
<!--									</div>-->
<!--									<img src="img/most-viewed-2.jpg" alt="item cover" />-->
<!--								</div>-->
<!---->
<!--								<div class="item-body">-->
<!--									<ul class="services">-->
<!--										<li><p class="bathrooms">Bathrooms: <span>1</span></p></li>-->
<!--										<li><p class="bedrooms">Bedrooms: <span>2</span></p></li>-->
<!--										<li><p class="area">Area: <span>100</span></p></li>-->
<!--									</ul>-->
<!---->
<!--									<div class="location">-->
<!--										<h3>-->
<!--											<a href="single.html">Grand hotel room</a>-->
<!--										</h3>-->
<!--										<p>LA 325</p>-->
<!---->
<!--										<span class="price">$250 000</span>-->
<!--									</div>-->
<!--								</div>-->
<!--							</div>-->
<!---->
<!--							<div class="most-viewed-item">-->
<!--								<div class="item-cover">-->
<!--									<div class="cover">-->
<!--										<div class="text">-->
<!--											<a href="single.html">Info</a>-->
<!--											<p>Nulla posuere, egestas neque quis, suscipit eros. Vestibulum ut eros neque. Nam viverra maximus neque id convallis. In auctor eu quam sit amet</p>-->
<!--										</div>-->
<!--									</div>-->
<!--									<img src="img/most-viewed-5.jpg" alt="item cover" />-->
<!--								</div>-->
<!---->
<!--								<div class="item-body">-->
<!--									<ul class="services">-->
<!--										<li><p class="bathrooms">Bathrooms: <span>1</span></p></li>-->
<!--										<li><p class="bedrooms">Bedrooms: <span>2</span></p></li>-->
<!--										<li><p class="area">Area: <span>100</span></p></li>-->
<!--									</ul>-->
<!---->
<!--									<div class="location">-->
<!--										<h3>-->
<!--											<a href="single.html">Grand hotel room</a>-->
<!--										</h3>-->
<!--										<p>LA 325</p>-->
<!---->
<!--										<span class="price">$150 000</span>-->
<!--									</div>-->
<!--								</div>-->
<!--							</div>-->
<!--						</li>-->
<!---->
<!--						<li class="item">-->
<!--							<div class="most-viewed-item">-->
<!--								<div class="item-cover">-->
<!--									<div class="cover">-->
<!--										<div class="text">-->
<!--											<a href="single.html">Info</a>-->
<!--											<p>Nulla posuere, egestas neque quis, suscipit eros. Vestibulum ut eros neque. Nam viverra maximus neque id convallis. In auctor eu quam sit amet</p>-->
<!--										</div>-->
<!--									</div>-->
<!--									<img src="img/most-viewed-3.jpg" alt="item cover" />-->
<!--								</div>-->
<!---->
<!--								<div class="item-body">-->
<!--									<ul class="services">-->
<!--										<li><p class="bathrooms">Bathrooms: <span>1</span></p></li>-->
<!--										<li><p class="bedrooms">Bedrooms: <span>2</span></p></li>-->
<!--										<li><p class="area">Area: <span>100</span></p></li>-->
<!--									</ul>-->
<!---->
<!--									<div class="location">-->
<!--										<h3>-->
<!--											<a href="single.html">Grand hotel room</a>-->
<!--										</h3>-->
<!--										<p>LA 325</p>-->
<!---->
<!--										<span class="price">$50 000</span>-->
<!--									</div>-->
<!--								</div>-->
<!--							</div>-->
<!---->
<!--							<div class="most-viewed-item">-->
<!--								<div class="item-cover">-->
<!--									<div class="cover">-->
<!--										<div class="text">-->
<!--											<a href="single.html">Info</a>-->
<!--											<p>Nulla posuere, egestas neque quis, suscipit eros. Vestibulum ut eros neque. Nam viverra maximus neque id convallis. In auctor eu quam sit amet</p>-->
<!--										</div>-->
<!--									</div>-->
<!--									<img src="img/most-viewed-6.jpg" alt="item cover" />-->
<!--								</div>-->
<!---->
<!--								<div class="item-body">-->
<!--									<ul class="services">-->
<!--										<li><p class="bathrooms">Bathrooms: <span>1</span></p></li>-->
<!--										<li><p class="bedrooms">Bedrooms: <span>2</span></p></li>-->
<!--										<li><p class="area">Area: <span>100</span></p></li>-->
<!--									</ul>-->
<!---->
<!--									<div class="location">-->
<!--										<h3>-->
<!--											<a href="single.html">Grand hotel room</a>-->
<!--										</h3>-->
<!--										<p>LA 325</p>-->
<!---->
<!--										<span class="price">$45 000</span>-->
<!--									</div>-->
<!--								</div>-->
<!--							</div>-->
<!--						</li>-->
<!---->
<!--						<li class="item">-->
<!--								<div class="most-viewed-item">-->
<!--								<div class="item-cover">-->
<!--									<div class="cover">-->
<!--										<div class="text">-->
<!--											<a href="single.html">Info</a>-->
<!--											<p>Nulla posuere, egestas neque quis, suscipit eros. Vestibulum ut eros neque. Nam viverra maximus neque id convallis. In auctor eu quam sit amet</p>-->
<!--										</div>-->
<!--									</div>-->
<!--									<img src="img/most-viewed-1.jpg" alt="item cover" />-->
<!--								</div>-->
<!---->
<!--								<div class="item-body">-->
<!--									<ul class="services">-->
<!--										<li><p class="bathrooms">Bathrooms: <span>1</span></p></li>-->
<!--										<li><p class="bedrooms">Bedrooms: <span>2</span></p></li>-->
<!--										<li><p class="area">Area: <span>100</span></p></li>-->
<!--									</ul>-->
<!---->
<!--									<div class="location">-->
<!--										<h3>-->
<!--											<a href="single.html">Grand hotel room</a>-->
<!--										</h3>-->
<!--										<p>LA 325</p>-->
<!---->
<!--										<span class="price">$5 000</span>-->
<!--									</div>-->
<!--								</div>-->
<!--							</div>-->
<!---->
<!--							<div class="most-viewed-item">-->
<!--								<div class="item-cover">-->
<!--									<div class="cover">-->
<!--										<div class="text">-->
<!--											<a href="single.html">Info</a>-->
<!--											<p>Nulla posuere, egestas neque quis, suscipit eros. Vestibulum ut eros neque. Nam viverra maximus neque id convallis. In auctor eu quam sit amet</p>-->
<!--										</div>-->
<!--									</div>-->
<!--									<img src="img/most-viewed-4.jpg" alt="item cover" />-->
<!--								</div>-->
<!---->
<!--								<div class="item-body">-->
<!--									<ul class="services">-->
<!--										<li><p class="bathrooms">Bathrooms: <span>1</span></p></li>-->
<!--										<li><p class="bedrooms">Bedrooms: <span>2</span></p></li>-->
<!--										<li><p class="area">Area: <span>100</span></p></li>-->
<!--									</ul>-->
<!---->
<!--									<div class="location">-->
<!--										<h3>-->
<!--											<a href="single.html">Grand hotel room</a>-->
<!--										</h3>-->
<!--										<p>LA 325</p>-->
<!---->
<!--										<span class="price">$100 000</span>-->
<!--									</div>-->
<!--								</div>-->
<!--							</div>-->
<!--							<div class="most-viewed-item">-->
<!--								<div class="item-cover">-->
<!--									<div class="cover">-->
<!--										<div class="text">-->
<!--											<a href="single.html">Info</a>-->
<!--											<p>Nulla posuere, egestas neque quis, suscipit eros. Vestibulum ut eros neque. Nam viverra maximus neque id convallis. In auctor eu quam sit amet</p>-->
<!--										</div>-->
<!--									</div>-->
<!--									<img src="img/most-viewed-4.jpg" alt="item cover" />-->
<!--								</div>-->
<!---->
<!--								<div class="item-body">-->
<!--									<ul class="services">-->
<!--										<li><p class="bathrooms">Bathrooms: <span>1</span></p></li>-->
<!--										<li><p class="bedrooms">Bedrooms: <span>2</span></p></li>-->
<!--										<li><p class="area">Area: <span>100</span></p></li>-->
<!--									</ul>-->
<!---->
<!--									<div class="location">-->
<!--										<h3>-->
<!--											<a href="single.html">Grand hotel room</a>-->
<!--										</h3>-->
<!--										<p>LA 325</p>-->
<!---->
<!--										<span class="price">$200 000</span>-->
<!--									</div>-->
<!--								</div>-->
<!--							</div>-->
<!--							<div class="most-viewed-item">-->
<!--								<div class="item-cover">-->
<!--									<div class="cover">-->
<!--										<div class="text">-->
<!--											<a href="single.html">Info</a>-->
<!--											<p>Nulla posuere, egestas neque quis, suscipit eros. Vestibulum ut eros neque. Nam viverra maximus neque id convallis. In auctor eu quam sit amet</p>-->
<!--										</div>-->
<!--									</div>-->
<!--									<img src="img/most-viewed-4.jpg" alt="item cover" />-->
<!--								</div>-->
<!---->
<!--								<div class="item-body">-->
<!--									<ul class="services">-->
<!--										<li><p class="bathrooms">Bathrooms: <span>1</span></p></li>-->
<!--										<li><p class="bedrooms">Bedrooms: <span>2</span></p></li>-->
<!--										<li><p class="area">Area: <span>100</span></p></li>-->
<!--									</ul>-->
<!---->
<!--									<div class="location">-->
<!--										<h3>-->
<!--											<a href="single.html">Grand hotel room</a>-->
<!--										</h3>-->
<!--										<p>LA 325</p>-->
<!---->
<!--										<span class="price">$223 000</span>-->
<!--									</div>-->
<!--								</div>-->
<!--							</div>-->
<!--						</li>-->
<!--					</ul>-->
				</div>
			</section>

			<!-- Agents Section -->
			<section class="agents-section">
				<div class="container">
					<div class="section-header">
						<h1>Our agents</h1>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam nec viverra erat. Aenean elit tellus mattis quis maximus et malesuada congue velit</p>
					</div>

					<div class="row">
						<div class="col-md-10">
							<div class="agents-container">
								<ul class="agents-carousel">
									<li class="item">
										<div class="agent">
											<div class="image">
												<a href="agent.html">
													<img src="img/agent-1.jpg" alt="agent photo" />
												</a>
											</div>

											<h3><a href="agent.html">John Doe</a></h3>
											<p class="position">agent</p>

											<ul class="social-block">
												<li><a href="#"><i class="fa fa-facebook"></i></a></li>
												<li><a href="#"><i class="fa fa-twitter"></i></a></li>
												<li><a href="#"><i class="fa fa-github-alt"></i></a></li>
											</ul>

											<p>Duis vel eros mi. Nunc eu sem dolor. Nulla venenatis, augue at rhoncus tincidunt, nisi dolor fringilla nibh, sed tristique quam leo vel arcu. Sed ultricies, odio vel aliquet ultricies.</p>
										</div>

										<div class="agent">
											<div class="image">
												<a href="agent.html">
													<img src="img/agent-2.jpg" alt="agent photo" />
												</a>
											</div>

											<h3><a href="agent.html">Elias Doe</a></h3>
											<p class="position">agent</p>

											<ul class="social-block">
												<li><a href="#"><i class="fa fa-facebook"></i></a></li>
												<li><a href="#"><i class="fa fa-twitter"></i></a></li>
												<li><a href="#"><i class="fa fa-github-alt"></i></a></li>
											</ul>

											<p>Duis vel eros mi. Nunc eu sem dolor. Nulla venenatis, augue at rhoncus tincidunt, nisi dolor fringilla nibh, sed tristique quam leo vel arcu. Sed ultricies, odio vel aliquet ultricies.</p>
										</div>
									</li>

									<li class="item">
										<div class="agent">
											<div class="image">
												<a href="agent.html">
													<img src="img/agent-1.jpg" alt="agent photo" />
												</a>
											</div>

											<h3><a href="agent.html">John Doe</a></h3>
											<p class="position">agent</p>

											<ul class="social-block">
												<li><a href="#"><i class="fa fa-facebook"></i></a></li>
												<li><a href="#"><i class="fa fa-twitter"></i></a></li>
												<li><a href="#"><i class="fa fa-github-alt"></i></a></li>
											</ul>

											<p>Duis vel eros mi. Nunc eu sem dolor. Nulla venenatis, augue at rhoncus tincidunt, nisi dolor fringilla nibh, sed tristique quam leo vel arcu. Sed ultricies, odio vel aliquet ultricies.</p>
										</div>

										<div class="agent">
											<div class="image">
												<a href="agent.html">
													<img src="img/agent-2.jpg" alt="agent photo" />
												</a>
											</div>

											<h3><a href="agent.html">Elias Doe</a></h3>
											<p class="position">agent</p>

											<ul class="social-block">
												<li><a href="#"><i class="fa fa-facebook"></i></a></li>
												<li><a href="#"><i class="fa fa-twitter"></i></a></li>
												<li><a href="#"><i class="fa fa-github-alt"></i></a></li>
											</ul>

											<p>Duis vel eros mi. Nunc eu sem dolor. Nulla venenatis, augue at rhoncus tincidunt, nisi dolor fringilla nibh, sed tristique quam leo vel arcu. Sed ultricies, odio vel aliquet ultricies.</p>
										</div>
									</li>
								</ul>
							</div>
						</div>

						<div class="col-md-14">
							<div class="agent featured-agent">
								<div class="row">
									<div class="col-sm-10">
										<div class="image">
											<a href="agent.html">
												<img src="img/featured-agent.jpg" alt="featured agent photo" />
											</a>
										</div>
										<h3><a href="agent.html">Ryan Elias</a></h3>
										<p class="position">agent</p>

										<ul class="social-block">
											<li><a href="#"><i class="fa fa-facebook"></i></a></li>
											<li><a href="#"><i class="fa fa-twitter"></i></a></li>
											<li><a href="#"><i class="fa fa-github-alt"></i></a></li>
										</ul>
									</div>

									<div class="col-sm-14">
										<div class="featured-agent-info">
											<p>Duis vel eros mi. Nunc eu sem dolor. Nulla venenatis, augue at rhoncus tincidunt, nisi dolor fringilla nibh, sed tristique quam leo vel arcu. Sed ultricies, odio vel aliquet ultricies, turpis ipsum ultrices massa, vitae pulvinar nibh erat</p>

											<p>Duis vel eros mi. Nunc eu sem dolor. Nulla venenatis, augue at rhoncus tincidunt, nisi dolor fringilla nibh, sed tristique quam leo vel arcu. Sed ultricies, odio vel aliquet ultricies, turpis ipsum ultrices massa, vitae pulvinar nibh erat</p>

											<ul>
												<li>
													<p>Duis vel eros mi. Nunc eu sem dolor. Nulla venenatis, augue at rhoncus tincidunt, nisi dolor fringilla nibh, sed tristique quam leo vel arcu. Sed ultricies, odio vel aliquet ultricies.</p>
												</li>
												<li>
													<p>Duis vel eros mi. Nunc eu sem dolor. Nulla venenatis, augue at rhoncus tincidunt, nisi dolor fringilla nibh, sed tristique quam leo vel arcu. Sed ultricies, odio vel aliquet ultricies.</p>
												</li>
												<li>
													<p>Duis vel eros mi. Nunc eu sem dolor. Nulla venenatis, augue at rhoncus tincidunt, nisi dolor fringilla nibh, sed tristique quam leo vel arcu. Sed ultricies, odio vel aliquet ultricies.</p>
												</li>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>

			<!-- Featured Blogposts -->
			<section class="featured-bloposts-section">
				<div class="bg-wrapper">
					<div class="container">
						<div class="section-header">
							<h1>From Blog</h1>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam nec viverra erat. Aenean elit tellus mattis quis maximus et malesuada congue velit</p>
						</div>

						<div class="row row-fit-10">
							<div class="col-md-12">
								<div class="blog-post sticky">
									<div class="post-body">
										<div class="blog-post-meta">
											<div class="post-cover">
												<a href="blogpost.html">
													<img src="img/featured-post-1.jpg" alt="featured blogpost cover" />
												</a>
											</div>

											<div class="post-author">
												<div class="image">
													<img src="img/blog-author-1.jpg" alt="blog author" />
												</div>

												<p>Robert Doe</p>
											</div>
										</div>
										<h2 class="post-title"><a href="blogpost.html">Blogpost 1</a></h2>

										<p>Duis vel eros mi. Nunc eu sem dolor. Nulla venenatis, augue at rhoncus tincidunt, nisi dolor fringilla nibh, sed tristicu.</p>

										<div class="post-meta">
											<ul class="meta">
												<li class="date">11.3</li>
												<li class="comments">&#40;2&#41;</li>
											</ul>

											<a class="post-link" href="blogpost.html">Read More</a>
										</div>
									</div>
								</div>
							</div>

							<div class="col-md-12">
								<div class="blog-post">
									<div class="post-body">
										<div class="blog-post-meta">
											<div class="post-cover">
												<a href="blogpost.html">
													<img src="img/featured-post-2.jpg" alt="featured blogpost cover" />
												</a>
											</div>

											<div class="post-author">
												<div class="image">
													<img src="img/blog-author-2.jpg" alt="blog author" />
												</div>

												<p>Andrew Doe</p>
											</div>
										</div>

										<h2 class="post-title"><a href="blogpost.html">Blogpost 2</a></h2>

										<p>Duis vel eros mi. Nunc eu sem dolor. Nulla venenatis, augue at rhoncus tincidunt, nisi dolor fringilla nibh, sed tristicu.</p>

										<div class="post-meta">
											<ul class="meta">
												<li class="date">11.3</li>
												<li class="comments">&#40;2&#41;</li>
											</ul>

											<a class="post-link" href="blogpost.html">Read More</a>
										</div>
									</div>
								</div>
							</div>

							<div class="col-md-12">
								<div class="blog-post">
									<div class="post-body">
										<div class="blog-post-meta">
											<div class="post-cover">
												<a href="blogpost.html">
													<img src="img/featured-post-3.jpg" alt="featured blogpost cover" />
												</a>
											</div>

											<div class="post-author">
												<div class="image">
													<img src="img/blog-author-3.jpg" alt="blog author" />
												</div>

												<p>Roberta Doe</p>
											</div>
										</div>

										<h2 class="post-title"><a href="blogpost.html">Blogpost 3</a></h2>

										<p>Duis vel eros mi. Nunc eu sem dolor. Nulla venenatis, augue at rhoncus tincidunt, nisi dolor fringilla nibh, sed tristicu.</p>

										<div class="post-meta">
											<ul class="meta">
												<li class="date">11.3</li>
												<li class="comments">&#40;2&#41;</li>
											</ul>

											<a class="post-link" href="blogpost.html">Read More</a>
										</div>
									</div>
								</div>
							</div>

							<div class="col-md-12">
								<div class="blog-post">
									<div class="post-body">
										<div class="blog-post-meta">
											<div class="post-cover">
												<a href="blogpost.html">
													<img src="img/featured-post-4.jpg" alt="featured blogpost cover" />
												</a>
											</div>

											<div class="post-author">
												<div class="image">
													<img src="img/blog-author-4.jpg" alt="blog author" />
												</div>

												<p>Anastasia Doe</p>
											</div>
										</div>

										<h2 class="post-title"><a href="blogpost.html">Blogpost 4</a></h2>

										<p>Duis vel eros mi. Nunc eu sem dolor. Nulla venenatis, augue at rhoncus tincidunt, nisi dolor fringilla nibh, sed tristicu.</p>

										<div class="post-meta">
											<ul class="meta">
												<li class="date">11.3</li>
												<li class="comments">&#40;2&#41;</li>
											</ul>

											<a class="post-link" href="blogpost.html">Read More</a>
										</div>
									</div>
								</div>
							</div>
						</div>

						<a class="button theme-button-2" href="blog.html">Go to blog</a>
					</div>
				</div>
			</section>
		</div>

		<!-- Footer -->
		<footer>
			<div class="container">
				<div class="footer-widgets">
					<div class="row">
						<div class="col-md-9">
							<div class="footer-widget widget_info">
								<div class="widget-body">
									<img src="img/logo.png" alt="realtor logo" />

									<p>Duis vel eros mi. Nunc eu sem dolor. Nulla venenatis, augue at rhoncus tincidunt, nisi dolor fringilla nibh, sed tristique quam leo vel arcu. Sed ultricies, odio vel aliquet ultricies, turpis ipsum ultrices massa, vitae pulvinar nibh erat</p>

									<ul class="social-block">
										<li><a href="#"><i class="fa fa-facebook"></i></a></li>
										<li><a href="#"><i class="fa fa-twitter"></i></a></li>
										<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
										<li><a href="#"><i class="fa fa-youtube"></i></a></li>
									</ul>
								</div>
							</div>
						</div>

						<div class="col-md-9">
							<div class="footer-widget widget_most_viewed">
								<h4 class="widget-title">Most viewed</h4>

								<div class="widget-body">
									<div class="most-viewed-property">
										<div class="image">
											<a href="single.html">
												<img src="img/most-viewed-prop-1.jpg" alt="most viewed" />
											</a>
										</div>
										<h2><a href="single.html">Grand hotel</a></h2>
										<p class="price">$450</p>
										<ul class="rating">
											<li><i class="fa fa-star"></i></li>
											<li><i class="fa fa-star"></i></li>
											<li><i class="fa fa-star"></i></li>
											<li><i class="fa fa-star-o"></i></li>
											<li><i class="fa fa-star-o"></i></li>
										</ul>
									</div>

									<div class="most-viewed-property">
										<div class="image">
											<a href="single.html">
												<img src="img/most-viewed-prop-2.jpg" alt="most viewed" />
											</a>
										</div>
										<h2><a href="single.html">Golden vip room</a></h2>
										<p class="price">$450</p>
										<ul class="rating">
											<li><i class="fa fa-star"></i></li>
											<li><i class="fa fa-star"></i></li>
											<li><i class="fa fa-star"></i></li>
											<li><i class="fa fa-star-o"></i></li>
											<li><i class="fa fa-star-o"></i></li>
										</ul>
									</div>

									<div class="most-viewed-property">
										<div class="image">
											<a href="single.html">
												<img src="img/most-viewed-prop-1.jpg" alt="most viewed" />
											</a>
										</div>
										<h2><a href="single.html">Grand hotel</a></h2>
										<p class="price">$450</p>
										<ul class="rating">
											<li><i class="fa fa-star"></i></li>
											<li><i class="fa fa-star"></i></li>
											<li><i class="fa fa-star"></i></li>
											<li><i class="fa fa-star-o"></i></li>
											<li><i class="fa fa-star-o"></i></li>
										</ul>
									</div>

									<div class="most-viewed-property">
										<div class="image">
											<a href="single.html">
												<img src="img/most-viewed-prop-2.jpg" alt="most viewed" />
											</a>
										</div>
										<h2><a href="single.html">Golden vip room</a></h2>
										<p class="price">$450</p>
										<ul class="rating">
											<li><i class="fa fa-star"></i></li>
											<li><i class="fa fa-star"></i></li>
											<li><i class="fa fa-star"></i></li>
											<li><i class="fa fa-star"></i></li>
											<li><i class="fa fa-star"></i></li>
										</ul>
									</div>
								</div>
							</div>
						</div>

						<div class="col-md-6">
							<div class="footer-widget widget_contact">
								<h4 class="widget-title">Contact info</h4>

								<div class="widget-body">
									<ul class="contact-info">
										<li class="phone">
											<p>012 125 856 587</p>
										</li>
										<li class="mail">
											<p><a href="#">Info@realtor.com</a></p>
										</li>
										<li class="location">
											<p>Realtor office<br />22 Pink Road<br />Holliday city, La 2211</p>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="copyrigts">
					<p>Copyrights 2015. Designed by <a href="https://www.teslathemes.com" target="blank">TeslaThemes</a></p>
				</div>
			</div>
		</footer>
	</div>

	<!-- Scripts -->
	<script async defer
			src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjjk2k7ZXkCwtYFjCejUugD3EoshwmxHI&libraries=places&callback=initialize">
	</script>

	<script src="js/brewologyMap.js"></script>
	<script type="text/babel"src="js/reactComponents/breweryPanels/breweryPanels.jsx"></script>
<!--	<script src="js/infobox.js"></script>-->
	<script src="js/jquery.js"></script>
	<script src="js/jquery-ui.js"></script>
	<script src="js/bxslider.js"></script>
	<script src="js/marquee.js"></script>
	<script src="js/nouislider.js"></script>
	<script src="js/modernizr.js"></script>
	<script src="js/imagesloaded.js"></script>
	<script src="js/smooth-scroll.js"></script>
	<script src="js/owl-carousel.js"></script>
	<script src="js/isotope.js"></script>
	<script src="js/theia.js"></script>
	<script src="js/lightbox.js"></script>
	<script src="js/options.js"></script>
</body>
</html>
