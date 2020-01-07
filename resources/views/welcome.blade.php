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
					<div class="slide_container">
						<div class="container">
							<div class="row">
								<div class="col-lg-11">
									<div class="slide_content" data-animation-in="fadeInRight" data-animation-out="animate-out fadeOut">
										
										<div class="home_title"><h1>The <span>hair</span> that you dream</h1></div>
										<div class="home_text">
											@if($getMainHomeContent != "")
												<p>{{$getMainHomeContent->description}}</p>
											@else
												<p>Oops! no post found!</p>
											@endif
										</div>
										<div class="home_link"><a href="{{asset('products')}}">View our products</a></div>
									</div>
								</div>
							
							</div>
						</div>
					</div>
				</div>

				<!-- Slide -->
				<div class="owl-item home_slide">
					<div class="background_image" style="background-image:url(images/bg_images/landing_page.jpg)"></div>
					<div class="slide_container">
						<div class="container">
							<div class="row">
								<div class="col-lg-11">
									<div class="slide_content" data-animation-in="fadeInRight" data-animation-out="animate-out fadeOut">
										<div class="home_title"><h1>The <span>hair</span> that you dream</h1></div>
										<div class="home_text">
											@if($getMainHomeContent != "")
												<p>{{$getMainHomeContent->description}}</p>
											@else
												<p>Oops! no post found!</p>
											@endif
										</div>
										<div class="home_link"><a href="{{asset('products')}}">View our products</a></div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<!-- Slide -->
				<div class="owl-item home_slide">
					<div class="background_image" style="background-image:url(images/bg_images/landing_page.jpg)"></div>
					<div class="slide_container">
						<div class="container">
							<div class="row">
								<div class="col-lg-11">
									<div class="slide_content" data-animation-in="fadeInRight" data-animation-out="animate-out fadeOut">
										<div class="home_title"><h1>The <span>hair</span> that you dream</h1></div>
										<div class="home_text">
											@if($getMainHomeContent != "")
												<p>{{$getMainHomeContent->description}}</p>
											@else
												<p>Oops! no post found!</p>
											@endif
										</div>
										<div class="home_link"><a href="{{asset('products')}}">View our products</a></div>
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
	</div>

	<!-- Services -->

	<div class="services" id="services">
		<div class="parallax_background" data-image-src="images/bg_images/services_area.jpg"></div>
		<div class="container">
			<div class="row">
				<div class="col-lg-9">
					<div class="section_title_container">
						<div class="section_title"><h1>Our Services</h1></div>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Esse, laudantium.</p>
					</div>
				</div>
			</div>
			<div class="row services_row">
				<div class="col">
					<div class="section_expander">

						<!-- Services Slider -->
						<div class="services_slider_container">
							<div class="owl-carousel owl-theme services_slider">
								@if(!$getServicesContent->isEmpty())
									@foreach ($getServicesContent as $service)
									<!-- Slide -->
									<div class="owl-item">
										<!-- Service -->
										<div class="service d-flex flex-row align-items-center justify-content-start trans_200">
											<div class="service_icon"><div><img src="images/woman.svg" class="svg" alt="https://www.flaticon.com/authors/freepik"></div></div>
											<div class="service_content">
												<div class="service_title trans_200">{{$service->title}}</div>
												<div class="service_text trans_200">
												<p>{{$service->description}}</p>
												</div>
											</div>
										</div>
									</div>
									@endforeach
								@else
									<p class="owl-item" style="color:black;">Oops! No Post Found!!</p>
								@endif
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
									@if (!$getProducts->isEmpty())
										@foreach ($getProducts as $product)
										<!-- Slide -->
										<div class="owl-item">
											<div class="single_article d-flex flex-lg-row flex-column align-items-start justify-content-lg-between justify-content-start">
												<div class="single_article_image">
													<a class="my-fancy" href="{{asset((isset($product) && $product->image != '')? 'images/home_page/'.$product->image : 'images/home_page/noimage.jpg')}}">
														<img src="{{asset((isset($product) && $product->image != '')? 'images/home_page/'.$product->image : 'images/home_page/no_image.jpg')}}" alt=""></a>
												</div>
												<div class="single_article_content">
												<div class="single_article_title"><a href="#">{{$product->title}}</a></div>
													<div class="single_article_text">
													<p>{{$product->description}}</p>
													</div>
												</div>
											</div>
										</div>
										@endforeach
									@else
										<p class="owl-carousel owl-theme single_slider" style="color:black;">Oops! No post found!</p>
									@endif
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
								@if (!$getTestimonials->isEmpty())
									@foreach ($getTestimonials as $testimonial)
									<!-- Slide -->
									<div class="owl-item">
										<div class="testimonial_container">
											<div class="testimonial d-flex flex-column align-items-center justify-content-center text-center trans_200">
												<div class="testimonial_image"><img src="{{asset((isset($testimonial) && $testimonial->image != '')? 'images/home_page/'.$testimonial->image : 'images/home_page/no_image.jpg')}}" alt=""></div>
											<div class="testimonial_title">{{$testimonial->title}}</div>
												<div class="testimonial_text">
												<p>{{$testimonial->description}}</p>
												</div>
												<div class="testimonial_author">{{$testimonial->client_name}}, Client</div>
											</div>
										</div>
									</div>
									@endforeach
								@else
									<p>Oops! No post found!</p>
								@endif
							</div>
						</div>
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