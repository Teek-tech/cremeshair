<!DOCTYPE html>
<html lang="en">
<head>
<title>Products</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Vogue template project">
<meta name="viewport" content="width=device-width, initial-scale=1">
@include('layouts.header')
<link rel="stylesheet" type="text/css" href="{{asset('styles/articles.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('styles/articles_responsive.css')}}">

</head>
<body>

<div class="super_container">
	
	<!-- Header -->

	@include('layouts.nav')

	<!-- Menu -->
	
	@include('layouts.mobile_menu')
	<!-- Home -->

	<div class="home">
		<div class="parallax_background" data-image-src="images/bg_images/products_landing.jpg"></div>
		<div class="home_container">
			<div class="container">
				<div class="row">
					<div class="col-xl-8">
						<div class="section_title_container">
							<div class="section_title"><h1>100%<span> Quality hair</span></h1></div>
						</div>
					</div>
				</div>
				<div class="row articles_row" style="display: none;">
					<div class="col">
						<div class="section_expander">

							<!-- Articles Slider -->
							<div class="articles_slider_container">
								<div class="owl-carousel owl-theme article_slider">
									
									<!-- Slide -->
									<div class="owl-item">
										<div class="article">
											<div class="article_image"><img src="images/articles_1.jpg" alt=""></div>
											<div class="article_container">
												<div class="article_title_container d-flex flex-row align-items-start justify-content-start">
													<div><div class="article_author_image"><a href="#"><img src="images/article_author_1.jpg" alt=""></a></div></div>
													<div class="article_content">
														<div class="article_date"><a href="#">06 sep 2018</a></div>
														<div class="article_title"><a href="#">Donec egestas egestas quam non</a></div>
														<div class="article_author"><a href="#">by Jane Doe</a></div>
													</div>
												</div>
											</div>
										</div>
									</div>

									<!-- Slide -->
									<div class="owl-item">
										<div class="article">
											<div class="article_image"><img src="images/articles_2.jpg" alt=""></div>
											<div class="article_container">
												<div class="article_title_container d-flex flex-row align-items-start justify-content-start">
													<div><div class="article_author_image"><a href="#"><img src="images/article_author_1.jpg" alt=""></a></div></div>
													<div class="article_content">
														<div class="article_date"><a href="#">06 sep 2018</a></div>
														<div class="article_title"><a href="#">Lorem ipsum dolor sit amet, consectetur.</a></div>
														<div class="article_author"><a href="#">by Jane Doe</a></div>
													</div>
												</div>
											</div>
										</div>
									</div>

									<!-- Slide -->
									<div class="owl-item">
										<div class="article">
											<div class="article_image"><img src="images/articles_3.jpg" alt=""></div>
											<div class="article_container">
												<div class="article_title_container d-flex flex-row align-items-start justify-content-start">
													<div><div class="article_author_image"><a href="#"><img src="images/article_author_1.jpg" alt=""></a></div></div>
													<div class="article_content">
														<div class="article_date"><a href="#">06 sep 2018</a></div>
														<div class="article_title"><a href="#">Aliquam id feugiat quam, a eleifend ligula. </a></div>
														<div class="article_author"><a href="#">by Jane Doe</a></div>
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
	</div>

	<!-- Single Article Slider -->

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
			<div class="row" style="display: none;">
				<div class="col">
					<div class="articles_expander">
						
						<!-- Single Article Slider -->
						<div class="single_slider_container">
							<div class="owl-carousel owl-theme single_slider">
								
								<!-- Slide -->
								<div class="owl-item">
									<div class="single_article d-flex flex-lg-row flex-column align-items-start justify-content-lg-between justify-content-start">
										<div class="single_article_image">
											<a class="my-fancy" href="images/products/product_2.jpg"><img src="images/products/product_1.jpg" alt=""></a>
										</div>
										<div class="single_article_content">
											{{-- <div class="sigle_article_date"><a href="#">06 sep 2018</a></div> --}}
											<div class="single_article_title"><a href="#">Donec egestas egestas quam non</a></div>
											<div class="single_article_text">
												<p>Nulla tincidunt elementum mauris, id suscipit ipsum posuere eget. Maecenas blandit tempus massa, a bibendum eros facilisis eu. Suspendisse fermentum pretium lectus, nec vehicula tortor. Aenean laoreet diam non lorem porta pharetra. Nam nec tellus nec tellus bibendum tincidunt vitae a leo. Praesent eu urna auctor dolor convallis suscipit.</p>
												<p>Quisque consequat porta lobortis. Proin pulvinar magna id tellus sagittis, nec euismod tellus laoreet. Nam lorem libero, fringilla ut dolor vitae, elementum pharetra ligula. Quisque tempor tristique ante.</p>
											</div>
											{{-- <div class="single_article_link"><a href="#">continue reading</a></div> --}}
											{{-- <div class="single_article_author d-flex flex-row align-items-center justify-content-start">
												<div><div class="article_author_image"><a href="#"><img src="images/article_author_1.jpg" alt=""></a></div></div>
												<div class="single_article_author_name"><a href="#">by Jane Doe</a></div>
											</div> --}}
										</div>
									</div>
								</div>

								<!-- Slide -->
								<div class="owl-item">
									<div class="single_article d-flex flex-lg-row flex-column align-items-start justify-content-lg-between justify-content-start">
										<div class="single_article_image"><a class="my-fancy" href="images/products/product_2.jpg"><img src="images/products/product_2.jpg" alt=""></a></div>
										<div class="single_article_content">
											{{-- <div class="sigle_article_date"><a href="#">06 sep 2018</a></div> --}}
											<div class="single_article_title"><a href="#">Donec egestas egestas quam non</a></div>
											<div class="single_article_text">
												<p>Nulla tincidunt elementum mauris, id suscipit ipsum posuere eget. Maecenas blandit tempus massa, a bibendum eros facilisis eu. Suspendisse fermentum pretium lectus, nec vehicula tortor. Aenean laoreet diam non lorem porta pharetra. Nam nec tellus nec tellus bibendum tincidunt vitae a leo. Praesent eu urna auctor dolor convallis suscipit.</p>
												<p>Quisque consequat porta lobortis. Proin pulvinar magna id tellus sagittis, nec euismod tellus laoreet. Nam lorem libero, fringilla ut dolor vitae, elementum pharetra ligula. Quisque tempor tristique ante.</p>
											</div>
											{{-- <div class="single_article_link"><a href="#">continue reading</a></div> --}}
											{{-- <div class="single_article_author d-flex flex-row align-items-center justify-content-start">
												<div><div class="article_author_image"><a href="#"><img src="images/article_author_1.jpg" alt=""></a></div></div>
												<div class="single_article_author_name"><a href="#">by Jane Doe</a></div>
											</div> --}}
										</div>
									</div>
								</div>

								<!-- Slide -->
								<div class="owl-item">
									<div class="single_article d-flex flex-lg-row flex-column align-items-start justify-content-lg-between justify-content-start">
										<div class="single_article_image"><a class="my-fancy" href="images/products/product_3.jpg"><img src="images/products/product_3.jpg" alt=""></a></div>
										<div class="single_article_content">
											{{-- <div class="sigle_article_date"><a href="#">06 sep 2018</a></div> --}}
											<div class="single_article_title"><a href="#">Donec egestas egestas quam non</a></div>
											<div class="single_article_text">
												<p>Nulla tincidunt elementum mauris, id suscipit ipsum posuere eget. Maecenas blandit tempus massa, a bibendum eros facilisis eu. Suspendisse fermentum pretium lectus, nec vehicula tortor. Aenean laoreet diam non lorem porta pharetra. Nam nec tellus nec tellus bibendum tincidunt vitae a leo. Praesent eu urna auctor dolor convallis suscipit.</p>
												<p>Quisque consequat porta lobortis. Proin pulvinar magna id tellus sagittis, nec euismod tellus laoreet. Nam lorem libero, fringilla ut dolor vitae, elementum pharetra ligula. Quisque tempor tristique ante.</p>
											</div>
											{{-- <div class="single_article_link"><a href="#">continue reading</a></div> --}}
											{{-- <div class="single_article_author d-flex flex-row align-items-center justify-content-start">
												<div><div class="article_author_image"><a href="#"><img src="images/article_author_1.jpg" alt=""></a></div></div>
												<div class="single_article_author_name"><a href="#">by Jane Doe</a></div>
											</div> --}}
										</div>
									</div>
								</div>

								<!-- Slide -->
								<div class="owl-item">
									<div class="single_article d-flex flex-lg-row flex-column align-items-start justify-content-lg-between justify-content-start">
										<div class="single_article_image"><a class="my-fancy" href="images/products/product_4.jpg"><img src="images/products/product_4.jpg" alt=""></a></div>
										<div class="single_article_content">
											{{-- <div class="sigle_article_date"><a href="#">06 sep 2018</a></div> --}}
											<div class="single_article_title"><a href="#">Donec egestas egestas quam non</a></div>
											<div class="single_article_text">
												<p>Nulla tincidunt elementum mauris, id suscipit ipsum posuere eget. Maecenas blandit tempus massa, a bibendum eros facilisis eu. Suspendisse fermentum pretium lectus, nec vehicula tortor. Aenean laoreet diam non lorem porta pharetra. Nam nec tellus nec tellus bibendum tincidunt vitae a leo. Praesent eu urna auctor dolor convallis suscipit.</p>
												<p>Quisque consequat porta lobortis. Proin pulvinar magna id tellus sagittis, nec euismod tellus laoreet. Nam lorem libero, fringilla ut dolor vitae, elementum pharetra ligula. Quisque tempor tristique ante.</p>
											</div>
											{{-- <div class="single_article_link"><a href="#">continue reading</a></div> --}}
											{{-- <div class="single_article_author d-flex flex-row align-items-center justify-content-start">
												<div><div class="article_author_image"><a href="#"><img src="images/article_author_1.jpg" alt=""></a></div></div>
												<div class="single_article_author_name"><a href="#">by Jane Doe</a></div>
											</div> --}}
										</div>
									</div>
								</div>

								<!-- Slide -->
								<div class="owl-item">
									<div class="single_article d-flex flex-lg-row flex-column align-items-start justify-content-lg-between justify-content-start">
										<div class="single_article_image"><a class="my-fancy" href="images/products/product_5.jpg"><img src="images/products/product_5.jpg" alt=""></a></div>
										<div class="single_article_content">
											{{-- <div class="sigle_article_date"><a href="#">06 sep 2018</a></div> --}}
											<div class="single_article_title"><a href="#">Donec egestas egestas quam non</a></div>
											<div class="single_article_text">
												<p>Nulla tincidunt elementum mauris, id suscipit ipsum posuere eget. Maecenas blandit tempus massa, a bibendum eros facilisis eu. Suspendisse fermentum pretium lectus, nec vehicula tortor. Aenean laoreet diam non lorem porta pharetra. Nam nec tellus nec tellus bibendum tincidunt vitae a leo. Praesent eu urna auctor dolor convallis suscipit.</p>
												<p>Quisque consequat porta lobortis. Proin pulvinar magna id tellus sagittis, nec euismod tellus laoreet. Nam lorem libero, fringilla ut dolor vitae, elementum pharetra ligula. Quisque tempor tristique ante.</p>
											</div>
											{{-- <div class="single_article_link"><a href="#">continue reading</a></div> --}}
											{{-- <div class="single_article_author d-flex flex-row align-items-center justify-content-start">
												<div><div class="article_author_image"><a href="#"><img src="images/article_author_1.jpg" alt=""></a></div></div>
												<div class="single_article_author_name"><a href="#">by Jane Doe</a></div>
											</div> --}}
										</div>
									</div>
								</div>

								<!-- Slide -->
								<div class="owl-item">
									<div class="single_article d-flex flex-lg-row flex-column align-items-start justify-content-lg-between justify-content-start">
										<div class="single_article_image"><a class="my-fancy" href="images/products/product_6.jpg"><img src="images/products/product_6.jpg" alt=""></a></div>
										<div class="single_article_content">
											{{-- <div class="sigle_article_date"><a href="#">06 sep 2018</a></div> --}}
											<div class="single_article_title"><a href="#">Donec egestas egestas quam non</a></div>
											<div class="single_article_text">
												<p>Nulla tincidunt elementum mauris, id suscipit ipsum posuere eget. Maecenas blandit tempus massa, a bibendum eros facilisis eu. Suspendisse fermentum pretium lectus, nec vehicula tortor. Aenean laoreet diam non lorem porta pharetra. Nam nec tellus nec tellus bibendum tincidunt vitae a leo. Praesent eu urna auctor dolor convallis suscipit.</p>
												<p>Quisque consequat porta lobortis. Proin pulvinar magna id tellus sagittis, nec euismod tellus laoreet. Nam lorem libero, fringilla ut dolor vitae, elementum pharetra ligula. Quisque tempor tristique ante.</p>
											</div>
											{{-- <div class="single_article_link"><a href="#">continue reading</a></div> --}}
											{{-- <div class="single_article_author d-flex flex-row align-items-center justify-content-start">
												<div><div class="article_author_image"><a href="#"><img src="images/article_author_1.jpg" alt=""></a></div></div>
												<div class="single_article_author_name"><a href="#">by Jane Doe</a></div>
											</div> --}}
										</div>
									</div>
								</div>

								<!-- Slide -->
								<div class="owl-item">
									<div class="single_article d-flex flex-lg-row flex-column align-items-start justify-content-lg-between justify-content-start">
										<div class="single_article_image"><a class="my-fancy" href="images/products/product_7.jpg"><img src="images/products/product_7.jpg" alt=""></a></div>
										<div class="single_article_content">
											{{-- <div class="sigle_article_date"><a href="#">06 sep 2018</a></div> --}}
											<div class="single_article_title"><a href="#">Donec egestas egestas quam non</a></div>
											<div class="single_article_text">
												<p>Nulla tincidunt elementum mauris, id suscipit ipsum posuere eget. Maecenas blandit tempus massa, a bibendum eros facilisis eu. Suspendisse fermentum pretium lectus, nec vehicula tortor. Aenean laoreet diam non lorem porta pharetra. Nam nec tellus nec tellus bibendum tincidunt vitae a leo. Praesent eu urna auctor dolor convallis suscipit.</p>
												<p>Quisque consequat porta lobortis. Proin pulvinar magna id tellus sagittis, nec euismod tellus laoreet. Nam lorem libero, fringilla ut dolor vitae, elementum pharetra ligula. Quisque tempor tristique ante.</p>
											</div>
											{{-- <div class="single_article_link"><a href="#">continue reading</a></div> --}}
											{{-- <div class="single_article_author d-flex flex-row align-items-center justify-content-start">
												<div><div class="article_author_image"><a href="#"><img src="images/article_author_1.jpg" alt=""></a></div></div>
												<div class="single_article_author_name"><a href="#">by Jane Doe</a></div>
											</div> --}}
										</div>
									</div>
								</div>

								<!-- Slide -->
								<div class="owl-item">
									<div class="single_article d-flex flex-lg-row flex-column align-items-start justify-content-lg-between justify-content-start">
										<div class="single_article_image"><a class="my-fancy" href="images/products/product_8.jpg"><img src="images/products/product_8.jpg" alt=""></a></div>
										<div class="single_article_content">
											{{-- <div class="sigle_article_date"><a href="#">06 sep 2018</a></div> --}}
											<div class="single_article_title"><a href="#">Donec egestas egestas quam non</a></div>
											<div class="single_article_text">
												<p>Nulla tincidunt elementum mauris, id suscipit ipsum posuere eget. Maecenas blandit tempus massa, a bibendum eros facilisis eu. Suspendisse fermentum pretium lectus, nec vehicula tortor. Aenean laoreet diam non lorem porta pharetra. Nam nec tellus nec tellus bibendum tincidunt vitae a leo. Praesent eu urna auctor dolor convallis suscipit.</p>
												<p>Quisque consequat porta lobortis. Proin pulvinar magna id tellus sagittis, nec euismod tellus laoreet. Nam lorem libero, fringilla ut dolor vitae, elementum pharetra ligula. Quisque tempor tristique ante.</p>
											</div>
											{{-- <div class="single_article_link"><a href="#">continue reading</a></div> --}}
											{{-- <div class="single_article_author d-flex flex-row align-items-center justify-content-start">
												<div><div class="article_author_image"><a href="#"><img src="images/article_author_1.jpg" alt=""></a></div></div>
												<div class="single_article_author_name"><a href="#">by Jane Doe</a></div>
											</div> --}}
										</div>
									</div>
								</div>

								<!-- Slide -->
								<div class="owl-item">
									<div class="single_article d-flex flex-lg-row flex-column align-items-start justify-content-lg-between justify-content-start">
										<div class="single_article_image"><a class="my-fancy" href="images/products/product_9.jpg"><img src="images/products/product_9.jpg" alt=""></a></div>
										<div class="single_article_content">
											{{-- <div class="sigle_article_date"><a href="#">06 sep 2018</a></div> --}}
											<div class="single_article_title"><a href="#">Donec egestas egestas quam non</a></div>
											<div class="single_article_text">
												<p>Nulla tincidunt elementum mauris, id suscipit ipsum posuere eget. Maecenas blandit tempus massa, a bibendum eros facilisis eu. Suspendisse fermentum pretium lectus, nec vehicula tortor. Aenean laoreet diam non lorem porta pharetra. Nam nec tellus nec tellus bibendum tincidunt vitae a leo. Praesent eu urna auctor dolor convallis suscipit.</p>
												<p>Quisque consequat porta lobortis. Proin pulvinar magna id tellus sagittis, nec euismod tellus laoreet. Nam lorem libero, fringilla ut dolor vitae, elementum pharetra ligula. Quisque tempor tristique ante.</p>
											</div>
											{{-- <div class="single_article_link"><a href="#">continue reading</a></div> --}}
											{{-- <div class="single_article_author d-flex flex-row align-items-center justify-content-start">
												<div><div class="article_author_image"><a href="#"><img src="images/article_author_1.jpg" alt=""></a></div></div>
												<div class="single_article_author_name"><a href="#">by Jane Doe</a></div>
											</div> --}}
										</div>
									</div>
								</div>

								<!-- Slide -->
								<div class="owl-item">
									<div class="single_article d-flex flex-lg-row flex-column align-items-start justify-content-lg-between justify-content-start">
										<div class="single_article_image"><a class="my-fancy" href="images/products/product_10.jpg"><img src="images/products/product_10.jpg" alt=""></a></div>
										<div class="single_article_content">
											{{-- <div class="sigle_article_date"><a href="#">06 sep 2018</a></div> --}}
											<div class="single_article_title"><a href="#">Donec egestas egestas quam non</a></div>
											<div class="single_article_text">
												<p>Nulla tincidunt elementum mauris, id suscipit ipsum posuere eget. Maecenas blandit tempus massa, a bibendum eros facilisis eu. Suspendisse fermentum pretium lectus, nec vehicula tortor. Aenean laoreet diam non lorem porta pharetra. Nam nec tellus nec tellus bibendum tincidunt vitae a leo. Praesent eu urna auctor dolor convallis suscipit.</p>
												<p>Quisque consequat porta lobortis. Proin pulvinar magna id tellus sagittis, nec euismod tellus laoreet. Nam lorem libero, fringilla ut dolor vitae, elementum pharetra ligula. Quisque tempor tristique ante.</p>
											</div>
											{{-- <div class="single_article_link"><a href="#">continue reading</a></div> --}}
											{{-- <div class="single_article_author d-flex flex-row align-items-center justify-content-start">
												<div><div class="article_author_image"><a href="#"><img src="images/article_author_1.jpg" alt=""></a></div></div>
												<div class="single_article_author_name"><a href="#">by Jane Doe</a></div>
											</div> --}}
										</div>
									</div>
								</div>

								<!-- Slide -->
								<div class="owl-item">
									<div class="single_article d-flex flex-lg-row flex-column align-items-start justify-content-lg-between justify-content-start">
										<div class="single_article_image"><a class="my-fancy" href="images/products/product_11.jpg"><img src="images/products/product_11.jpg" alt=""></a></div>
										<div class="single_article_content">
											{{-- <div class="sigle_article_date"><a href="#">06 sep 2018</a></div> --}}
											<div class="single_article_title"><a href="#">Donec egestas egestas quam non</a></div>
											<div class="single_article_text">
												<p>Nulla tincidunt elementum mauris, id suscipit ipsum posuere eget. Maecenas blandit tempus massa, a bibendum eros facilisis eu. Suspendisse fermentum pretium lectus, nec vehicula tortor. Aenean laoreet diam non lorem porta pharetra. Nam nec tellus nec tellus bibendum tincidunt vitae a leo. Praesent eu urna auctor dolor convallis suscipit.</p>
												<p>Quisque consequat porta lobortis. Proin pulvinar magna id tellus sagittis, nec euismod tellus laoreet. Nam lorem libero, fringilla ut dolor vitae, elementum pharetra ligula. Quisque tempor tristique ante.</p>
											</div>
											{{-- <div class="single_article_link"><a href="#">continue reading</a></div> --}}
											{{-- <div class="single_article_author d-flex flex-row align-items-center justify-content-start">
												<div><div class="article_author_image"><a href="#"><img src="images/article_author_1.jpg" alt=""></a></div></div>
												<div class="single_article_author_name"><a href="#">by Jane Doe</a></div>
											</div> --}}
										</div>
									</div>
								</div>

								<!-- Slide -->
								<div class="owl-item">
									<div class="single_article d-flex flex-lg-row flex-column align-items-start justify-content-lg-between justify-content-start">
										<div class="single_article_image"><a class="my-fancy" href="images/products/product_12.jpg"><img src="images/products/product_12.jpg" alt=""></a></div>
										<div class="single_article_content">
											{{-- <div class="sigle_article_date"><a href="#">06 sep 2018</a></div> --}}
											<div class="single_article_title"><a href="#">Donec egestas egestas quam non</a></div>
											<div class="single_article_text">
												<p>Nulla tincidunt elementum mauris, id suscipit ipsum posuere eget. Maecenas blandit tempus massa, a bibendum eros facilisis eu. Suspendisse fermentum pretium lectus, nec vehicula tortor. Aenean laoreet diam non lorem porta pharetra. Nam nec tellus nec tellus bibendum tincidunt vitae a leo. Praesent eu urna auctor dolor convallis suscipit.</p>
												<p>Quisque consequat porta lobortis. Proin pulvinar magna id tellus sagittis, nec euismod tellus laoreet. Nam lorem libero, fringilla ut dolor vitae, elementum pharetra ligula. Quisque tempor tristique ante.</p>
											</div>
											{{-- <div class="single_article_link"><a href="#">continue reading</a></div> --}}
											{{-- <div class="single_article_author d-flex flex-row align-items-center justify-content-start">
												<div><div class="article_author_image"><a href="#"><img src="images/article_author_1.jpg" alt=""></a></div></div>
												<div class="single_article_author_name"><a href="#">by Jane Doe</a></div>
											</div> --}}
										</div>
									</div>
								</div>

								<!-- Slide -->
								<div class="owl-item">
									<div class="single_article d-flex flex-lg-row flex-column align-items-start justify-content-lg-between justify-content-start">
										<div class="single_article_image"><a class="my-fancy" href="images/products/product_13.jpg"><img src="images/products/product_13.jpg" alt=""></a></div>
										<div class="single_article_content">
											{{-- <div class="sigle_article_date"><a href="#">06 sep 2018</a></div> --}}
											<div class="single_article_title"><a href="#">Donec egestas egestas quam non</a></div>
											<div class="single_article_text">
												<p>Nulla tincidunt elementum mauris, id suscipit ipsum posuere eget. Maecenas blandit tempus massa, a bibendum eros facilisis eu. Suspendisse fermentum pretium lectus, nec vehicula tortor. Aenean laoreet diam non lorem porta pharetra. Nam nec tellus nec tellus bibendum tincidunt vitae a leo. Praesent eu urna auctor dolor convallis suscipit.</p>
												<p>Quisque consequat porta lobortis. Proin pulvinar magna id tellus sagittis, nec euismod tellus laoreet. Nam lorem libero, fringilla ut dolor vitae, elementum pharetra ligula. Quisque tempor tristique ante.</p>
											</div>
											{{-- <div class="single_article_link"><a href="#">continue reading</a></div> --}}
											{{-- <div class="single_article_author d-flex flex-row align-items-center justify-content-start">
												<div><div class="article_author_image"><a href="#"><img src="images/article_author_1.jpg" alt=""></a></div></div>
												<div class="single_article_author_name"><a href="#">by Jane Doe</a></div>
											</div> --}}
										</div>
									</div>
								</div>

							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				@if (!$getProducts->isEmpty())
					@foreach ($getProducts as $product)
						<div class="col-md-4">
							<div class="card product-gallery">
								<a data-fancybox="group" class="my-fancy" href="{{asset((isset($product) && $product->image != '')? 'images/products/'.$product->image : 'images/products/noimage.jpg')}}"><img class="card-img-top" src="{{asset((isset($product) && $product->image != '')? 'images/products/'.$product->image : 'images/products/noimage.jpg')}}" alt=""></a>
								<div class="card-body">
								<h5 class="card-title">{{$product->name}}</h5>
									<ul class="card-text">
									<li><span style="font-weight:bold;">Color:</span> {{$product->color}}</li>
									<li><span style="font-weight:bold;">Size:</span> {{$product->size}}</li>
									<li><span style="font-weight:bold;">length:</span> {{$product->length}}</li>
									<li><span style="font-weight:bold;">weight:</span> {{$product->weight}}</li>
									</ul>
								</div>
							</div>
						</div>
					@endforeach
				@else
					<p>Oops! There are no products available at this time, Please check later.</p>
				@endif
			</div>
		</div>
	</div>

	<!-- Articles -->


	<!-- Footer -->

	@include('layouts.footer')
	<script src="{{asset('js/jquery.fancybox.min.js')}}"></script>
	<script src="{{asset('js/articles.js')}}"></script>
</body>
</html>