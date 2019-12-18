<!DOCTYPE html>
<html lang="en">
<head>
<title>Cremeshair - Welcome</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Vogue template project">
<meta name="viewport" content="width=device-width, initial-scale=1">
@include('layouts.header')
<link rel="stylesheet" href="{{asset('styles/articles.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('styles/main_styles.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('styles/responsive.css')}}">
</head>
<body>

<div class="super_container">
	
	<!-- Header -->

	@include('layouts.nav')

	<!-- Menu -->
	
	@include('layouts.mobile_menu')

	<!-- Home -->

	<div class="home">

		<!-- Home Slider -->
		<div class="home_slider_container">
			<div class="owl-carousel owl-theme home_slider">
				
				<!-- Slide -->
				<div class="owl-item home_slide">
					<div class="background_image" style="background-image:url(images/bg_images/landing_page.jpg)"></div>
					<!-- <div class="slide_text" data-animation-in="fadeIn" data-animation-out="animate-out fadeOut">
						<div class="slide_title">Our best offers</div>
						<div class="slide_subtitle">Lorem ipsum dolor sit amet, consectetur</div>
					</div> -->
					<div class="slide_container">
						<div class="container">
							<div class="row">
								
								<div class="col-lg-11">
									<div class="slide_content" data-animation-in="fadeInRight" data-animation-out="animate-out fadeOut">
										
										<div class="home_title"><h1>The <span>hair</span> that you dream</h1></div>
										<div class="home_text">
											<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec malesuada lorem maximus mauris sceleri sque, at rutrum nulla dictum. Ut ac ligula sapien cursus faucibus finibus.</p>
										</div>
										<div class="home_link"><a href="services.html">View our offers</a></div>
									</div>
								</div>
							
							</div>
						</div>
					</div>
				</div>

				<!-- Slide -->
				<div class="owl-item home_slide">
					<div class="background_image" style="background-image:url(images/bg_images/landing_page.jpg)"></div>
					<!-- <div class="slide_text" data-animation-in="fadeIn" data-animation-out="animate-out fadeOut">
						<div class="slide_title">Our best offers</div>
						<div class="slide_subtitle">Lorem ipsum dolor sit amet, consectetur</div>
					</div> -->
					<div class="slide_container">
						<div class="container">
							<div class="row">
								<div class="col-lg-11">
									<div class="slide_content" data-animation-in="fadeInRight" data-animation-out="animate-out fadeOut">
										<div class="home_title"><h1>The <span>hair</span> that you dream</h1></div>
										<div class="home_text">
											<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec malesuada lorem maximus mauris sceleri sque, at rutrum nulla dictum. Ut ac ligula sapien cursus faucibus finibus.</p>
										</div>
										<div class="home_link"><a href="services.html">View our offers</a></div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<!-- Slide -->
				<div class="owl-item home_slide">
					<div class="background_image" style="background-image:url(images/bg_images/landing_page.jpg)"></div>
					<!-- <div class="slide_text" data-animation-in="fadeIn" data-animation-out="animate-out fadeOut">
						<div class="slide_title">Our best offers</div>
						<div class="slide_subtitle">Lorem ipsum dolor sit amet, consectetur</div>
					</div> -->
					<div class="slide_container">
						<div class="container">
							<div class="row">
								<div class="col-lg-11">
									<div class="slide_content" data-animation-in="fadeInRight" data-animation-out="animate-out fadeOut">
										<div class="home_title"><h1>The <span>hair</span> that you dream</h1></div>
										<div class="home_text">
											<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec malesuada lorem maximus mauris sceleri sque, at rutrum nulla dictum. Ut ac ligula sapien cursus faucibus finibus.</p>
										</div>
										<div class="home_link"><a href="services.html">View our offers</a></div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

			</div>
		</div>

		<!-- Scroll Down -->
		<div class="scroll_down scroll_to d-flex flex-column align-items-center justify-content-center" data-scroll-to="#services">
			<div class="scroll_icon"></div>
			<div>Scroll Down</div>
		</div>

		<!-- Slider Progress -->
		<!-- <div class="slide_progress">
			<div class="slide_num">01.</div>
			<div class="slide_bar"><div></div></div>
		</div> -->
	</div>

	<!-- Services -->

	<div class="services" id="services">
		<div class="parallax_background" data-image-src="images/bg_images/services_area.jpg"></div>
		<div class="container">
			<div class="row">
				<div class="col-lg-9">
					<div class="section_title_container">
						<div class="section_title"><h1>Our Services</h1></div>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec malesuada lorem maximus mauris sceleri sque.</p>
					</div>
				</div>
			</div>
			<div class="row services_row">
				<div class="col">
					<div class="section_expander">

						<!-- Services Slider -->
						<div class="services_slider_container">
							<div class="owl-carousel owl-theme services_slider">
								
								<!-- Slide -->
								<div class="owl-item">

									<!-- Service -->
									<div class="service d-flex flex-row align-items-center justify-content-start trans_200">
										<div class="service_icon"><div><img src="images/mirror.svg" class="svg" alt="https://www.flaticon.com/authors/freepik"></div></div>
										<div class="service_content">
											<div class="service_title trans_200">Hair Dressing</div>
											<div class="service_text trans_200">
												<p>In vitae nisi aliquam, scelerisque leo a, volutpat sem. Vivamus rutrum dui ferme ntum eros hendrerit, id lobortis.</p>
											</div>
										</div>
									</div>

									<!-- Service -->
									<div class="service d-flex flex-row align-items-center justify-content-start trans_200">
										<div class="service_icon"><div><img src="images/facial-mask.svg" class="svg" alt="https://www.flaticon.com/authors/freepik"></div></div>
										<div class="service_content">
											<div class="service_title trans_200">Ombre Hair</div>
											<div class="service_text trans_200">
												<p>In vitae nisi aliquam, scelerisque leo a, volutpat sem. Vivamus rutrum dui ferme ntum eros hendrerit, id lobortis.</p>
											</div>
										</div>
									</div>

								</div>

								<!-- Slide -->
								<div class="owl-item">
									
									<!-- Service -->
									<div class="service d-flex flex-row align-items-center justify-content-start trans_200">
										<div class="service_icon"><div><img src="images/makeup.svg" class="svg" alt="https://www.flaticon.com/authors/freepik"></div></div>
										<div class="service_content">
											<div class="service_title trans_200">Hair Coloring</div>
											<div class="service_text trans_200">
												<p>In vitae nisi aliquam, scelerisque leo a, volutpat sem. Vivamus rutrum dui ferme ntum eros hendrerit, id lobortis.</p>
											</div>
										</div>
									</div>

									<!-- Service -->
									<div class="service d-flex flex-row align-items-center justify-content-start trans_200">
										<div class="service_icon service_icon_2"><div><img src="images/cream.svg" class="svg" alt="https://www.flaticon.com/authors/freepik"></div></div>
										<div class="service_content">
											<div class="service_title trans_200">Treatments</div>
											<div class="service_text trans_200">
												<p>In vitae nisi aliquam, scelerisque leo a, volutpat sem. Vivamus rutrum dui ferme ntum eros hendrerit, id lobortis.</p>
											</div>
										</div>
									</div>

								</div>

								<!-- Slide -->
								<div class="owl-item">
									
									<!-- Service -->
									<div class="service d-flex flex-row align-items-center justify-content-start trans_200">
										<div class="service_icon service_icon_flip"><div><img src="images/make-up.svg" class="svg" alt="https://www.flaticon.com/authors/freepik"></div></div>
										<div class="service_content">
											<div class="service_title trans_200">Cutting & Trimming</div>
											<div class="service_text trans_200">
												<p>In vitae nisi aliquam, scelerisque leo a, volutpat sem. Vivamus rutrum dui ferme ntum eros hendrerit, id lobortis.</p>
											</div>
										</div>
									</div>

									<!-- Service -->
									<div class="service d-flex flex-row align-items-center justify-content-start trans_200">
										<div class="service_icon service_icon_3"><div><img src="images/cream-2.svg" class="svg" alt="https://www.flaticon.com/authors/freepik"></div></div>
										<div class="service_content">
											<div class="service_title trans_200">Keratin Streightening</div>
											<div class="service_text trans_200">
												<p>In vitae nisi aliquam, scelerisque leo a, volutpat sem. Vivamus rutrum dui ferme ntum eros hendrerit, id lobortis.</p>
											</div>
										</div>
									</div>

								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	{{-- our products area --}}
	<div class="single">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="section_title_container">
						<div class="section_title"><h1>Our products</h1></div>
						{{-- <div class="section_subtitle">One most popular article</div> --}}
					</div>
				</div>
			</div>
			<div>
				<div class="row">
					<div class="col">
						<div class="articles_expander">
							
							<!-- Single Article Slider -->
							<div class="single_slider_container">
								<div class="owl-carousel owl-theme single_slider">
									
									<!-- Slide -->
									<div class="owl-item">
										<div class="single_article d-flex flex-lg-row flex-column align-items-start justify-content-lg-between justify-content-start">
											<div class="single_article_image">
												<a class="my-fancy" href="images/products/product_1.jpg"><img src="images/products/product_1.jpg" alt=""></a>
											</div>
											<div class="single_article_content">
												<div class="single_article_title"><a href="#">Donec egestas egestas quam non</a></div>
												<div class="single_article_text">
													<p>Nulla tincidunt elementum mauris, id suscipit ipsum posuere eget. Maecenas blandit tempus massa, a bibendum eros facilisis eu. Suspendisse fermentum pretium lectus, nec vehicula tortor. Aenean laoreet diam non lorem porta pharetra. Nam nec tellus nec tellus bibendum tincidunt vitae a leo. Praesent eu urna auctor dolor convallis suscipit.</p>
													<p>Quisque consequat porta lobortis. Proin pulvinar magna id tellus sagittis, nec euismod tellus laoreet. Nam lorem libero, fringilla ut dolor vitae, elementum pharetra ligula. Quisque tempor tristique ante.</p>
												</div>
											</div>
										</div>
									</div>
	
									<!-- Slide -->
									<div class="owl-item">
										<div class="single_article d-flex flex-lg-row flex-column align-items-start justify-content-lg-between justify-content-start">
											<div class="single_article_image"><a class="my-fancy" href="images/products/product_2.jpg"><img src="images/products/product_2.jpg" alt=""></a></div>
											<div class="single_article_content">
												<div class="single_article_title"><a href="#">Donec egestas egestas quam non</a></div>
												<div class="single_article_text">
													<p>Nulla tincidunt elementum mauris, id suscipit ipsum posuere eget. Maecenas blandit tempus massa, a bibendum eros facilisis eu. Suspendisse fermentum pretium lectus, nec vehicula tortor. Aenean laoreet diam non lorem porta pharetra. Nam nec tellus nec tellus bibendum tincidunt vitae a leo. Praesent eu urna auctor dolor convallis suscipit.</p>
													<p>Quisque consequat porta lobortis. Proin pulvinar magna id tellus sagittis, nec euismod tellus laoreet. Nam lorem libero, fringilla ut dolor vitae, elementum pharetra ligula. Quisque tempor tristique ante.</p>
												</div>
											</div>
										</div>
									</div>
	
									<!-- Slide -->
									<div class="owl-item">
										<div class="single_article d-flex flex-lg-row flex-column align-items-start justify-content-lg-between justify-content-start">
											<div class="single_article_image"><a class="my-fancy" href="images/products/product_3.jpg"><img src="images/products/product_3.jpg" alt=""></a></div>
											<div class="single_article_content">
												<div class="single_article_title"><a href="#">Donec egestas egestas quam non</a></div>
												<div class="single_article_text">
													<p>Nulla tincidunt elementum mauris, id suscipit ipsum posuere eget. Maecenas blandit tempus massa, a bibendum eros facilisis eu. Suspendisse fermentum pretium lectus, nec vehicula tortor. Aenean laoreet diam non lorem porta pharetra. Nam nec tellus nec tellus bibendum tincidunt vitae a leo. Praesent eu urna auctor dolor convallis suscipit.</p>
													<p>Quisque consequat porta lobortis. Proin pulvinar magna id tellus sagittis, nec euismod tellus laoreet. Nam lorem libero, fringilla ut dolor vitae, elementum pharetra ligula. Quisque tempor tristique ante.</p>
												</div>
											</div>
										</div>
									</div>
	
									<!-- Slide -->
									<div class="owl-item">
										<div class="single_article d-flex flex-lg-row flex-column align-items-start justify-content-lg-between justify-content-start">
											<div class="single_article_image"><a class="my-fancy" href="images/products/product_4.jpg"><img src="images/products/product_4.jpg" alt=""></a></div>
											<div class="single_article_content">
												<div class="single_article_title"><a href="#">Donec egestas egestas quam non</a></div>
												<div class="single_article_text">
													<p>Nulla tincidunt elementum mauris, id suscipit ipsum posuere eget. Maecenas blandit tempus massa, a bibendum eros facilisis eu. Suspendisse fermentum pretium lectus, nec vehicula tortor. Aenean laoreet diam non lorem porta pharetra. Nam nec tellus nec tellus bibendum tincidunt vitae a leo. Praesent eu urna auctor dolor convallis suscipit.</p>
													<p>Quisque consequat porta lobortis. Proin pulvinar magna id tellus sagittis, nec euismod tellus laoreet. Nam lorem libero, fringilla ut dolor vitae, elementum pharetra ligula. Quisque tempor tristique ante.</p>
												</div>
											</div>
										</div>
									</div>
	
									<!-- Slide -->
									<div class="owl-item">
										<div class="single_article d-flex flex-lg-row flex-column align-items-start justify-content-lg-between justify-content-start">
											<div class="single_article_image"><a class="my-fancy" href="images/products/product_5.jpg"><img src="images/products/product_5.jpg" alt=""></a></div>
											<div class="single_article_content">
												<div class="single_article_title"><a href="#">Donec egestas egestas quam non</a></div>
												<div class="single_article_text">
													<p>Nulla tincidunt elementum mauris, id suscipit ipsum posuere eget. Maecenas blandit tempus massa, a bibendum eros facilisis eu. Suspendisse fermentum pretium lectus, nec vehicula tortor. Aenean laoreet diam non lorem porta pharetra. Nam nec tellus nec tellus bibendum tincidunt vitae a leo. Praesent eu urna auctor dolor convallis suscipit.</p>
													<p>Quisque consequat porta lobortis. Proin pulvinar magna id tellus sagittis, nec euismod tellus laoreet. Nam lorem libero, fringilla ut dolor vitae, elementum pharetra ligula. Quisque tempor tristique ante.</p>
												</div>
											</div>
										</div>
									</div>
	
									<!-- Slide -->
									<div class="owl-item">
										<div class="single_article d-flex flex-lg-row flex-column align-items-start justify-content-lg-between justify-content-start">
											<div class="single_article_image"><a class="my-fancy" href="images/products/product_6.jpg"><img src="images/products/product_6.jpg" alt=""></a></div>
											<div class="single_article_content">
												<div class="single_article_title"><a href="#">Donec egestas egestas quam non</a></div>
												<div class="single_article_text">
													<p>Nulla tincidunt elementum mauris, id suscipit ipsum posuere eget. Maecenas blandit tempus massa, a bibendum eros facilisis eu. Suspendisse fermentum pretium lectus, nec vehicula tortor. Aenean laoreet diam non lorem porta pharetra. Nam nec tellus nec tellus bibendum tincidunt vitae a leo. Praesent eu urna auctor dolor convallis suscipit.</p>
													<p>Quisque consequat porta lobortis. Proin pulvinar magna id tellus sagittis, nec euismod tellus laoreet. Nam lorem libero, fringilla ut dolor vitae, elementum pharetra ligula. Quisque tempor tristique ante.</p>
												</div>
											</div>
										</div>
									</div>
	
									<!-- Slide -->
									<div class="owl-item">
										<div class="single_article d-flex flex-lg-row flex-column align-items-start justify-content-lg-between justify-content-start">
											<div class="single_article_image"><a class="my-fancy" href="images/products/product_7.jpg"><img src="images/products/product_7.jpg" alt=""></a></div>
											<div class="single_article_content">
												<div class="single_article_title"><a href="#">Donec egestas egestas quam non</a></div>
												<div class="single_article_text">
													<p>Nulla tincidunt elementum mauris, id suscipit ipsum posuere eget. Maecenas blandit tempus massa, a bibendum eros facilisis eu. Suspendisse fermentum pretium lectus, nec vehicula tortor. Aenean laoreet diam non lorem porta pharetra. Nam nec tellus nec tellus bibendum tincidunt vitae a leo. Praesent eu urna auctor dolor convallis suscipit.</p>
													<p>Quisque consequat porta lobortis. Proin pulvinar magna id tellus sagittis, nec euismod tellus laoreet. Nam lorem libero, fringilla ut dolor vitae, elementum pharetra ligula. Quisque tempor tristique ante.</p>
												</div>
											</div>
										</div>
									</div>
	
									<!-- Slide -->
									<div class="owl-item">
										<div class="single_article d-flex flex-lg-row flex-column align-items-start justify-content-lg-between justify-content-start">
											<div class="single_article_image"><a class="my-fancy" href="images/products/product_8.jpg"><img src="images/products/product_8.jpg" alt=""></a></div>
											<div class="single_article_content">
												<div class="single_article_title"><a href="#">Donec egestas egestas quam non</a></div>
												<div class="single_article_text">
													<p>Nulla tincidunt elementum mauris, id suscipit ipsum posuere eget. Maecenas blandit tempus massa, a bibendum eros facilisis eu. Suspendisse fermentum pretium lectus, nec vehicula tortor. Aenean laoreet diam non lorem porta pharetra. Nam nec tellus nec tellus bibendum tincidunt vitae a leo. Praesent eu urna auctor dolor convallis suscipit.</p>
													<p>Quisque consequat porta lobortis. Proin pulvinar magna id tellus sagittis, nec euismod tellus laoreet. Nam lorem libero, fringilla ut dolor vitae, elementum pharetra ligula. Quisque tempor tristique ante.</p>
												</div>
											</div>
										</div>
									</div>
	
									<!-- Slide -->
									<div class="owl-item">
										<div class="single_article d-flex flex-lg-row flex-column align-items-start justify-content-lg-between justify-content-start">
											<div class="single_article_image"><a class="my-fancy" href="images/products/product_9.jpg"><img src="images/products/product_9.jpg" alt=""></a></div>
											<div class="single_article_content">
												<div class="single_article_title"><a href="#">Donec egestas egestas quam non</a></div>
												<div class="single_article_text">
													<p>Nulla tincidunt elementum mauris, id suscipit ipsum posuere eget. Maecenas blandit tempus massa, a bibendum eros facilisis eu. Suspendisse fermentum pretium lectus, nec vehicula tortor. Aenean laoreet diam non lorem porta pharetra. Nam nec tellus nec tellus bibendum tincidunt vitae a leo. Praesent eu urna auctor dolor convallis suscipit.</p>
													<p>Quisque consequat porta lobortis. Proin pulvinar magna id tellus sagittis, nec euismod tellus laoreet. Nam lorem libero, fringilla ut dolor vitae, elementum pharetra ligula. Quisque tempor tristique ante.</p>
												</div>
											</div>
										</div>
									</div>
	
									<!-- Slide -->
									<div class="owl-item">
										<div class="single_article d-flex flex-lg-row flex-column align-items-start justify-content-lg-between justify-content-start">
											<div class="single_article_image"><a class="my-fancy" href="images/products/product_10.jpg"><img src="images/products/product_10.jpg" alt=""></a></div>
											<div class="single_article_content">
												<div class="single_article_title"><a href="#">Donec egestas egestas quam non</a></div>
												<div class="single_article_text">
													<p>Nulla tincidunt elementum mauris, id suscipit ipsum posuere eget. Maecenas blandit tempus massa, a bibendum eros facilisis eu. Suspendisse fermentum pretium lectus, nec vehicula tortor. Aenean laoreet diam non lorem porta pharetra. Nam nec tellus nec tellus bibendum tincidunt vitae a leo. Praesent eu urna auctor dolor convallis suscipit.</p>
													<p>Quisque consequat porta lobortis. Proin pulvinar magna id tellus sagittis, nec euismod tellus laoreet. Nam lorem libero, fringilla ut dolor vitae, elementum pharetra ligula. Quisque tempor tristique ante.</p>
												</div>
											</div>
										</div>
									</div>
	
									<!-- Slide -->
									<div class="owl-item">
										<div class="single_article d-flex flex-lg-row flex-column align-items-start justify-content-lg-between justify-content-start">
											<div class="single_article_image"><a class="my-fancy" href="images/products/product_11.jpg"><img src="images/products/product_11.jpg" alt=""></a></div>
											<div class="single_article_content">
												<div class="single_article_title"><a href="#">Donec egestas egestas quam non</a></div>
												<div class="single_article_text">
													<p>Nulla tincidunt elementum mauris, id suscipit ipsum posuere eget. Maecenas blandit tempus massa, a bibendum eros facilisis eu. Suspendisse fermentum pretium lectus, nec vehicula tortor. Aenean laoreet diam non lorem porta pharetra. Nam nec tellus nec tellus bibendum tincidunt vitae a leo. Praesent eu urna auctor dolor convallis suscipit.</p>
													<p>Quisque consequat porta lobortis. Proin pulvinar magna id tellus sagittis, nec euismod tellus laoreet. Nam lorem libero, fringilla ut dolor vitae, elementum pharetra ligula. Quisque tempor tristique ante.</p>
												</div>
											</div>
										</div>
									</div>
	
									<!-- Slide -->
									<div class="owl-item">
										<div class="single_article d-flex flex-lg-row flex-column align-items-start justify-content-lg-between justify-content-start">
											<div class="single_article_image"><a class="my-fancy" href="images/products/product_12.jpg"><img src="images/products/product_12.jpg" alt=""></a></div>
											<div class="single_article_content">
												<div class="single_article_title"><a href="#">Donec egestas egestas quam non</a></div>
												<div class="single_article_text">
													<p>Nulla tincidunt elementum mauris, id suscipit ipsum posuere eget. Maecenas blandit tempus massa, a bibendum eros facilisis eu. Suspendisse fermentum pretium lectus, nec vehicula tortor. Aenean laoreet diam non lorem porta pharetra. Nam nec tellus nec tellus bibendum tincidunt vitae a leo. Praesent eu urna auctor dolor convallis suscipit.</p>
													<p>Quisque consequat porta lobortis. Proin pulvinar magna id tellus sagittis, nec euismod tellus laoreet. Nam lorem libero, fringilla ut dolor vitae, elementum pharetra ligula. Quisque tempor tristique ante.</p>
												</div>
											</div>
										</div>
									</div>
	
									<!-- Slide -->
									<div class="owl-item">
										<div class="single_article d-flex flex-lg-row flex-column align-items-start justify-content-lg-between justify-content-start">
											<div class="single_article_image"><a class="my-fancy" href="images/products/product_13.jpg"><img src="images/products/product_13.jpg" alt=""></a></div>
											<div class="single_article_content">
												<div class="single_article_title"><a href="#">Donec egestas egestas quam non</a></div>
												<div class="single_article_text">
													<p>Nulla tincidunt elementum mauris, id suscipit ipsum posuere eget. Maecenas blandit tempus massa, a bibendum eros facilisis eu. Suspendisse fermentum pretium lectus, nec vehicula tortor. Aenean laoreet diam non lorem porta pharetra. Nam nec tellus nec tellus bibendum tincidunt vitae a leo. Praesent eu urna auctor dolor convallis suscipit.</p>
													<p>Quisque consequat porta lobortis. Proin pulvinar magna id tellus sagittis, nec euismod tellus laoreet. Nam lorem libero, fringilla ut dolor vitae, elementum pharetra ligula. Quisque tempor tristique ante.</p>
												</div>
											</div>
										</div>
									</div>
	
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Testimonials -->

	<div class="testimonials">
		<div class="parallax_background" data-image-src="images/bg_images/testimonial.jpg"></div>
		<div class="container">
			<div class="row">
				<div class="col-lg-9">
					<div class="section_title_container">
						<div class="section_title"><h1>Testimonials</h1></div>
						<p>Donec malesuada lorem maximus mauris sceleri sque, at rutrum nulla dictum dolor sit amet.</p>
					</div>
				</div>
			</div>
			<div class="row testimonials_row">
				<div class="col">
					<div class="section_expander">
						
						<!-- Testimonials Slider -->
						<div class="testimonials_slider_container">
							<div class="owl-carousel owl-theme testimonials_slider">
								
								<!-- Slide -->
								<div class="owl-item">
									<div class="testimonial_container">
										<div class="testimonial d-flex flex-column align-items-center justify-content-center text-center trans_200">
											<div class="testimonial_image"><img src="images/author_1.jpg" alt=""></div>
											<div class="testimonial_title">The perfect hair</div>
											<div class="testimonial_text">
												<p>Etiam nec odio vestibulum est mattis effic iturut magna. Pellentesque sit amet tellus blandit. Etiam nec odio vestibulum est mattis effic iturut magna. Pellentesque sit.</p>
											</div>
											<div class="testimonial_author">Jessica Smith, Client</div>
										</div>
									</div>
								</div>

								<!-- Slide -->
								<div class="owl-item">
									<div class="testimonial_container">
										<div class="testimonial d-flex flex-column align-items-center justify-content-center text-center trans_200">
											<div class="testimonial_image"><img src="images/author_2.jpg" alt=""></div>
											<div class="testimonial_title">I just love my hair</div>
											<div class="testimonial_text">
												<p>Mattis effic iturut magna. Pellentesque sit am et tellus blandit. Etiam nec odio vestibul. Etiam nec odio vestibulum est mat tis effic iturut magna. Pellentesque sit amet tellus.</p>
											</div>
											<div class="testimonial_author">Jessica Smith, Client</div>
										</div>
									</div>
								</div>

								<!-- Slide -->
								<div class="owl-item">
									<div class="testimonial_container">
										<div class="testimonial d-flex flex-column align-items-center justify-content-center text-center trans_200">
											<div class="testimonial_image"><img src="images/author_3.jpg" alt=""></div>
											<div class="testimonial_title">The best hair salon</div>
											<div class="testimonial_text">
												<p>Retiam nec odio vestibulum est mattis effic iturut magna. Pellentesque sit amet tellus blandit. Etiam nec odio vestibulum est mattis effic iturut magna. Pellentesque sit.</p>
											</div>
											<div class="testimonial_author">Jessica Smith, Client</div>
										</div>
									</div>
								</div>

							</div>
						</div>
						<!-- <div class="testimonials_more">
							<div class="testimonials_more_button ml-auto mr-auto trans_200"><a href="#">load more</a></div>
						</div> -->
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Footer -->

	@include('layouts.footer')
	<script src="{{asset('js/jquery.fancybox.min.js')}}"></script>
	<script src="{{asset('js/custom.js')}}"></script>
</body>
</html>