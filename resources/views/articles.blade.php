<!DOCTYPE html>
<html lang="en">
<head>
<title>Articles</title>
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
		<div class="parallax_background" data-image-src="images/articles.jpg"></div>
		<div class="home_container">
			<div class="container">
				<div class="row">
					<div class="col-xl-8">
						<div class="section_title_container">
							<div class="section_title"><h1>Follow our<span> professional advice</span></h1></div>
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
						<div class="section_title"><h1>Most Popular</h1></div>
						<div class="section_subtitle">One most popular article</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col">
					<div class="articles_expander">
						
						<!-- Single Article Slider -->
						<div class="single_slider_container">
							<div class="owl-carousel owl-theme single_slider">
								
								<!-- Slide -->
								<div class="owl-item">
									<div class="single_article d-flex flex-lg-row flex-column align-items-start justify-content-lg-between justify-content-start">
										<div class="single_article_image"><img src="images/gallery_2.jpg" alt=""></div>
										<div class="single_article_content">
											<div class="sigle_article_date"><a href="#">06 sep 2018</a></div>
											<div class="single_article_title"><a href="#">Donec egestas egestas quam non</a></div>
											<div class="single_article_text">
												<p>Nulla tincidunt elementum mauris, id suscipit ipsum posuere eget. Maecenas blandit tempus massa, a bibendum eros facilisis eu. Suspendisse fermentum pretium lectus, nec vehicula tortor. Aenean laoreet diam non lorem porta pharetra. Nam nec tellus nec tellus bibendum tincidunt vitae a leo. Praesent eu urna auctor dolor convallis suscipit.</p>
												<p>Quisque consequat porta lobortis. Proin pulvinar magna id tellus sagittis, nec euismod tellus laoreet. Nam lorem libero, fringilla ut dolor vitae, elementum pharetra ligula. Quisque tempor tristique ante.</p>
											</div>
											<div class="single_article_link"><a href="#">continue reading</a></div>
											<div class="single_article_author d-flex flex-row align-items-center justify-content-start">
												<div><div class="article_author_image"><a href="#"><img src="images/article_author_1.jpg" alt=""></a></div></div>
												<div class="single_article_author_name"><a href="#">by Jane Doe</a></div>
											</div>
										</div>
									</div>
								</div>

								<!-- Slide -->
								<div class="owl-item">
									<div class="single_article d-flex flex-lg-row flex-column align-items-start justify-content-lg-between justify-content-start">
										<div class="single_article_image"><img src="images/gallery_3.jpg" alt=""></div>
										<div class="single_article_content">
											<div class="sigle_article_date"><a href="#">06 sep 2018</a></div>
											<div class="single_article_title"><a href="#">Donec egestas egestas quam non</a></div>
											<div class="single_article_text">
												<p>Nulla tincidunt elementum mauris, id suscipit ipsum posuere eget. Maecenas blandit tempus massa, a bibendum eros facilisis eu. Suspendisse fermentum pretium lectus, nec vehicula tortor. Aenean laoreet diam non lorem porta pharetra. Nam nec tellus nec tellus bibendum tincidunt vitae a leo. Praesent eu urna auctor dolor convallis suscipit.</p>
												<p>Quisque consequat porta lobortis. Proin pulvinar magna id tellus sagittis, nec euismod tellus laoreet. Nam lorem libero, fringilla ut dolor vitae, elementum pharetra ligula. Quisque tempor tristique ante.</p>
											</div>
											<div class="single_article_link"><a href="#">continue reading</a></div>
											<div class="single_article_author d-flex flex-row align-items-center justify-content-start">
												<div><div class="article_author_image"><a href="#"><img src="images/article_author_1.jpg" alt=""></a></div></div>
												<div class="single_article_author_name"><a href="#">by Jane Doe</a></div>
											</div>
										</div>
									</div>
								</div>

								<!-- Slide -->
								<div class="owl-item">
									<div class="single_article d-flex flex-lg-row flex-column align-items-start justify-content-lg-between justify-content-start">
										<div class="single_article_image"><img src="images/gallery_4.jpg" alt=""></div>
										<div class="single_article_content">
											<div class="sigle_article_date"><a href="#">06 sep 2018</a></div>
											<div class="single_article_title"><a href="#">Donec egestas egestas quam non</a></div>
											<div class="single_article_text">
												<p>Nulla tincidunt elementum mauris, id suscipit ipsum posuere eget. Maecenas blandit tempus massa, a bibendum eros facilisis eu. Suspendisse fermentum pretium lectus, nec vehicula tortor. Aenean laoreet diam non lorem porta pharetra. Nam nec tellus nec tellus bibendum tincidunt vitae a leo. Praesent eu urna auctor dolor convallis suscipit.</p>
												<p>Quisque consequat porta lobortis. Proin pulvinar magna id tellus sagittis, nec euismod tellus laoreet. Nam lorem libero, fringilla ut dolor vitae, elementum pharetra ligula. Quisque tempor tristique ante.</p>
											</div>
											<div class="single_article_link"><a href="#">continue reading</a></div>
											<div class="single_article_author d-flex flex-row align-items-center justify-content-start">
												<div><div class="article_author_image"><a href="#"><img src="images/article_author_1.jpg" alt=""></a></div></div>
												<div class="single_article_author_name"><a href="#">by Jane Doe</a></div>
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

	<!-- Articles -->

	<div class="articles">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="section_title_container">
						<div class="section_title"><h1>Our Sales Representatives</h1></div>
						<div class="section_subtitle">our sales representatives are available to ensure that our customers get quality service.</div>
					</div>
				</div>
			</div>
			<div class="row articles_container_row">
				<div class="col">
					<div class="section_expander">
						<div class="articles_container d-flex flex-row align-items-start justify-content-between flex-wrap">
							
							<!-- Article -->
							<div class="article">
								<div class="article_image"><img src="images/sales rep/sales_rep1.jpg" alt=""></div>
								<div class="article_container">
									<!-- <div class="article_title_container d-flex flex-row align-items-start justify-content-start">
										<div><div class="article_author_image"><a href="#"><img src="images/article_author_1.jpg" alt=""></a></div></div>
										<div class="article_content">
											<div class="article_date"><a href="#">06 sep 2018</a></div>
											<div class="article_title"><a href="#">Lorem ipsum dolor sit amet, consectetur</a></div>
											<div class="article_author"><a href="#">by Jane Doe</a></div>
										</div>
									</div>
									<div class="article_text">
										<p>Nulla tincidunt elementum mauris, id suscipit ipsum posuere eget. Maecenas blandit tempus massa, a bibendum eros facilisis eu. Suspendisse fermentum pretium lectus, nec vehicula tortor.</p>
									</div>
									<div class="article_link"><a href="#">continue reading</a></div> -->
								</div>
							</div>

							<!-- Article -->
							<div class="article">
								<div class="article_image"><img src="images/sales rep/sales_rep2.jpg" alt=""></div>
								<div id="sales_rep_container" class="article_container">
									<div class="article_title_container">
										<!-- <div><div class="article_author_image"><a href="#"><img src="images/article_author_1.jpg" alt=""></a></div></div> -->
										<div class="article_content sales_rep">
											<!-- <div class="article_date"><a href="#">06 sep 2018</a></div> -->
											<div class="article_title sales_rep_name">Henrietta</div>
											<div class="article_title sales_rep_email">henrietta@gmail.com</div>
											<div class="article_title sales_rep_phone">01234567890</div>
											<!-- <div class="article_author"><a href="#">by Jane Doe</a></div> -->
										</div>
									</div>
									<!-- <div class="article_text">
										<p>Nulla tincidunt elementum mauris, id suscipit ipsum posuere eget. Maecenas blandit tempus massa, a bibendum eros facilisis eu. Suspendisse fermentum pretium lectus, nec vehicula tortor.</p>
									</div>
									<div class="article_link"><a href="#">continue reading</a></div> -->
								</div>
							</div>

							<!-- Article -->
							<div class="article">
								<div class="article_image"><img src="images/sales rep/sales_rep3.jpg" alt=""></div>
								<div class="article_container">
									<!-- <div class="article_title_container d-flex flex-row align-items-start justify-content-start">
										<div><div class="article_author_image"><a href="#"><img src="images/article_author_1.jpg" alt=""></a></div></div>
										<div class="article_content">
											<div class="article_date"><a href="#">06 sep 2018</a></div>
											<div class="article_title"><a href="#">Estibulum ante ipsum primis</a></div>
											<div class="article_author"><a href="#">by Jane Doe</a></div>
										</div>
									</div>
									<div class="article_text">
										<p>Nulla tincidunt elementum mauris, id suscipit ipsum posuere eget. Maecenas blandit tempus massa, a bibendum eros facilisis eu. Suspendisse fermentum pretium lectus, nec vehicula tortor.</p>
									</div>
									<div class="article_link"><a href="#">continue reading</a></div> -->
								</div>
							</div>

							<!-- Article -->
							<div class="article">
								<div class="article_image"><img src="images/sales rep/sales_rep4.jpg" alt=""></div>
								<div class="article_container">
									<!-- <div class="article_title_container d-flex flex-row align-items-start justify-content-start">
										<div><div class="article_author_image"><a href="#"><img src="images/article_author_1.jpg" alt=""></a></div></div>
										<div class="article_content">
											<div class="article_date"><a href="#">06 sep 2018</a></div>
											<div class="article_title"><a href="#">Curabitur velit diam, blandit quis </a></div>
											<div class="article_author"><a href="#">by Jane Doe</a></div>
										</div>
									</div>
									<div class="article_text">
										<p>Nulla tincidunt elementum mauris, id suscipit ipsum posuere eget. Maecenas blandit tempus massa, a bibendum eros facilisis eu. Suspendisse fermentum pretium lectus, nec vehicula tortor.</p>
									</div>
									<div class="article_link"><a href="#">continue reading</a></div> -->
								</div>
							</div>

							<!-- Article -->
							<div class="article">
								<div class="article_image"><img src="images/sales rep/sales_rep5.jpg" alt=""></div>
								<div class="article_container">
									<!-- <div class="article_title_container d-flex flex-row align-items-start justify-content-start">
										<div><div class="article_author_image"><a href="#"><img src="images/article_author_1.jpg" alt=""></a></div></div>
										<div class="article_content">
											<div class="article_date"><a href="#">06 sep 2018</a></div>
											<div class="article_title"><a href="#">Suspendisse vel ligula sed selit</a></div>
											<div class="article_author"><a href="#">by Jane Doe</a></div>
										</div>
									</div>
									<div class="article_text">
										<p>Nulla tincidunt elementum mauris, id suscipit ipsum posuere eget. Maecenas blandit tempus massa, a bibendum eros facilisis eu. Suspendisse fermentum pretium lectus, nec vehicula tortor.</p>
									</div>
									<div class="article_link"><a href="#">continue reading</a></div> -->
								</div>
							</div>

							<!-- Article -->
							<div class="article">
								<div class="article_image"><img src="images/sales rep/sales_rep6.jpg" alt=""></div>
								<div class="article_container">
									<!-- <div class="article_title_container d-flex flex-row align-items-start justify-content-start">
										<div><div class="article_author_image"><a href="#"><img src="images/article_author_1.jpg" alt=""></a></div></div>
										<div class="article_content">
											<div class="article_date"><a href="#">06 sep 2018</a></div>
											<div class="article_title"><a href="#">Donec egestas egestas quam non</a></div>
											<div class="article_author"><a href="#">by Jane Doe</a></div>
										</div>
									</div>
									<div class="article_text">
										<p>Nulla tincidunt elementum mauris, id suscipit ipsum posuere eget. Maecenas blandit tempus massa, a bibendum eros facilisis eu. Suspendisse fermentum pretium lectus, nec vehicula tortor.</p>
									</div>
									<div class="article_link"><a href="#">continue reading</a></div> -->
								</div>
							</div>

						</div>
					</div>
				</div>
			</div>
			<!-- <div class="row">
				<div class="col">
					<div class="load_more_button ml-auto mr-auto"><a href="#">load more</a></div>
				</div>
			</div> -->
		</div>
	</div>

	<!-- Footer -->

	@include('layouts.footer')