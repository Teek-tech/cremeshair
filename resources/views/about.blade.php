<!DOCTYPE html>
<html lang="en">
<head>
<title>About us</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Vogue template project">
<meta name="viewport" content="width=device-width, initial-scale=1">
@include('layouts.header')
<link rel="stylesheet" type="text/css" href="{{asset('styles/about.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('styles/about_responsive.css')}}">
</head>
<body>

<div class="super_container">
	
	<!-- Header -->

	@include('layouts.nav')

	<!-- Menu -->
	
	@include('layouts.mobile_menu')

	<!-- Home -->

	<div class="home">
		<div class="parallax_background" data-image-src="images/about.jpg"></div>
		<div class="home_container">
			<div class="container">
				<div class="row">
					<div class="col-xl-8">
						<div class="section_title_container">
							<div class="section_title"><h1>The <span>Masters</span> of hair</h1></div>
						</div>
					</div>
				</div>
				<div class="row about_row" style="display:none;">
					<div class="col-lg-6">
						<div class="about_text">
							<p>We specialize on premium quality 100% virgin Vietnamese hair, Our hair products are high quality and prestigious ones that are xollected directly from young vietnamese women without dyed process or soaking in chemicals. The striking features about hair is that it is soft, silky and shinny and our hair products can be used for different purposes.</p>
						</div>
					</div>
					<div class="col-lg-6">
						<div class="about_text">
							<p>Vietnamese women hair is considered one of the world's most beautiful hair, our company partners with the Vietnamese company to collect hairs from different provinces of the country and then process into finsihed products according to customers' requiremnt and the standard that is for the internation market.</p>
						</div>
					</div>
				</div>
				<!-- <div class="row about_link_row">
					<div class="col">
						<div class="home_link"><a href="#">Read More</a></div>
					</div>
				</div> -->
			</div>
		</div>
	</div>

	<!-- Milestones -->

	<div class="milestones_section">
		<div class="parallax_background" data-image-src="images/milestones.jpg"></div>
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="section_title_container section_title_container1">
						<div class="section_title"><h2>Who are we?</h2></div>
						<p>We specialize on premium quality 100% virgin Vietnamese hair, Our hair products are high quality and prestigious ones that are collected directly from young Vietnamese women without dyed process or soaking in chemicals. The striking features about our hair is that it is soft, silky, shiny and it can be used for different purposes.</p>
					</div>
				</div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="section_title_container">
                        <div class="section_title"><h2>Our vision</h2></div>
                        <p>Our vision is to bring to the market valuable product with confidence that our products will meet international standards, grow to become an international trademark and give value an satisfaction to our customers.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="section_title_container">
                        <div class="section_title"><h2>About our hair</h2></div>
                        <p>Vietnamese women hair is considered one of the world's most beautiful and quality hair,our company partners with the vietnamese company to collect hairs from different provinces of the coountry and then process into finsihed products according to customers' requirement and the standard that is for the international market.</p>
                    </div>
                </div>
			</div>
			{{-- sales rep area --}}
			<div class="row">
				<div class="col">
					<div class="section_title_container">
						<div class="section_title"><h2>Our Sales representatives</h2></div>
						<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa sapiente quisquam eaque veritatis! Nulla, optio.</p>
					</div>
				</div>
			</div>
			<div class="row sales-rep-area">
				<div class="col-md-10">
					<div class="row">
						<div class="col-md-4 sales-rep">
							<div class="card">
								<img src="images/sales rep/sales_rep1.jpg" class="card-img-top" alt="...">
								<div class="card-body">
									<h5 class="card-title">Card title</h5>
									<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
									<a href="#" class="card-link btn btn-primary">Send mail</a>
									<a href="#" class="card-link btn btn-primary">Contact</a>
								</div>
							</div>
						</div>
						<div class="col-md-4 sales-rep">
							<div class="card">
								<img src="images/sales rep/sales_rep2.jpg" class="card-img-top" alt="...">
								<div class="card-body">
									<h5 class="card-title">Card title</h5>
									<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
									<a href="#" class="card-link btn btn-primary">Send mail</a>
									<a href="#" class="card-link btn btn-primary">Contact</a>
								</div>
							</div>
						</div>
						<div class="col-md-4 sales-rep">
							<div class="card">
								<img src="images/sales rep/sales_rep3.jpg" class="card-img-top" alt="...">
								<div class="card-body">
									<h5 class="card-title">Card title</h5>
									<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
									<a href="#" class="card-link btn btn-primary">Send mail</a>
									<a href="#" class="card-link btn btn-primary">Contact</a>
								</div>
							</div>
						</div>
						<div class="col-md-4 sales-rep">
							<div class="card">
								<img src="images/sales rep/sales_rep4.jpg" class="card-img-top" alt="...">
								<div class="card-body">
									<h5 class="card-title">Card title</h5>
									<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
									<a href="#" class="card-link btn btn-primary">Send mail</a>
									<a href="#" class="card-link btn btn-primary">Contact</a>
								</div>
							</div>
						</div>
						<div class="col-md-4 sales-rep">
							<div class="card">
								<img src="images/sales rep/sales_rep5.jpg" class="card-img-top" alt="...">
								<div class="card-body">
									<h5 class="card-title">Card title</h5>
									<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
									<a href="#" class="card-link btn btn-primary">Send mail</a>
									<a href="#" class="card-link btn btn-primary">Contact</a>
								</div>
							</div>
						</div>
						<div class="col-md-4 sales-rep">
							<div class="card">
								<img src="images/sales rep/sales_rep6.jpg" class="card-img-top" alt="...">
								<div class="card-body">
									<h5 class="card-title">Card title</h5>
									<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
									<a href="#" class="card-link btn btn-primary">Send mail</a>
									<a href="#" class="card-link btn btn-primary">Contact</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			
            
			<div class="row milestones_row" style="display: none;">
				<div class="col">
					
					<!-- Milestones Slider -->
					<div class="milestones_slider_container">
						<div class="owl-carousel owl-theme milestones_slider">
							
							<!-- Slide -->
							<div class="owl-item">
								<div class="milestone">
									<div class="milestone_content">
										<div class="milestone_counter" data-end-value="5" data-sign-before="+" data-sign-after="k">0k</div>
										<div class="milestone_title">Satisfied Clients</div>
										<div class="milestone_text">
											<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut rutrum quis sem sed pharetra. Morbi tempus lobortis.</p>
										</div>
									</div>
								</div>
							</div>

							<!-- Slide -->
							<div class="owl-item">
								<div class="milestone">
									<div class="milestone_content">
										<div class="milestone_counter" data-end-value="3">0k</div>
										<div class="milestone_title">Salon Locations</div>
										<div class="milestone_text">
											<p>Ipsum dolor sit amet, consectetur adipiscing elit. Ut rutrum quis sem sed pharetra. Morbi tempus lobortis.</p>
										</div>
									</div>
								</div>
							</div>

							<!-- Slide -->
							<div class="owl-item">
								<div class="milestone">
									<div class="milestone_content">
										<div class="milestone_counter" data-end-value="25">0k</div>
										<div class="milestone_title">Awards Won</div>
										<div class="milestone_text">
											<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut rutrum quis sem sed pharetra. Morbi tempus lobortis.</p>
										</div>
									</div>
								</div>
							</div>

							<!-- Slide -->
							<div class="owl-item">
								<div class="milestone">
									<div class="milestone_content">
										<div class="milestone_counter" data-end-value="17">0k</div>
										<div class="milestone_title">Awarded Stylists</div>
										<div class="milestone_text">
											<p>Ipsum dolor sit amet, consectetur adipiscing elit. Ut rutrum quis sem sed pharetra. Morbi tempus lobortis.</p>
										</div>
									</div>
								</div>
							</div>

							<!-- Slide -->
							<div class="owl-item">
								<div class="milestone">
									<div class="milestone_content">
										<div class="milestone_counter" data-end-value="5" data-sign-before="+" data-sign-after="k">0k</div>
										<div class="milestone_title">Satisfied Clients</div>
										<div class="milestone_text">
											<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut rutrum quis sem sed pharetra. Morbi tempus lobortis.</p>
										</div>
									</div>
								</div>
							</div>

							<!-- Slide -->
							<div class="owl-item">
								<div class="milestone">
									<div class="milestone_content">
										<div class="milestone_counter" data-end-value="3">0k</div>
										<div class="milestone_title">Salon Locations</div>
										<div class="milestone_text">
											<p>Ipsum dolor sit amet, consectetur adipiscing elit. Ut rutrum quis sem sed pharetra. Morbi tempus lobortis.</p>
										</div>
									</div>
								</div>
							</div>

							<!-- Slide -->
							<div class="owl-item">
								<div class="milestone">
									<div class="milestone_content">
										<div class="milestone_counter" data-end-value="25">0k</div>
										<div class="milestone_title">Awards Won</div>
										<div class="milestone_text">
											<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut rutrum quis sem sed pharetra. Morbi tempus lobortis.</p>
										</div>
									</div>
								</div>
							</div>

							<!-- Slide -->
							<div class="owl-item">
								<div class="milestone">
									<div class="milestone_content">
										<div class="milestone_counter" data-end-value="17">0k</div>
										<div class="milestone_title">Awarded Stylists</div>
										<div class="milestone_text">
											<p>Ipsum dolor sit amet, consectetur adipiscing elit. Ut rutrum quis sem sed pharetra. Morbi tempus lobortis.</p>
										</div>
									</div>
								</div>
							</div>

							<!-- Slide -->
							<div class="owl-item">
								<div class="milestone">
									<div class="milestone_content">
										<div class="milestone_counter" data-end-value="25">0k</div>
										<div class="milestone_title">Awards Won</div>
										<div class="milestone_text">
											<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut rutrum quis sem sed pharetra. Morbi tempus lobortis.</p>
										</div>
									</div>
								</div>
							</div>

							<!-- Slide -->
							<div class="owl-item">
								<div class="milestone">
									<div class="milestone_content">
										<div class="milestone_counter" data-end-value="17">0k</div>
										<div class="milestone_title">Awarded Stylists</div>
										<div class="milestone_text">
											<p>Ipsum dolor sit amet, consectetur adipiscing elit. Ut rutrum quis sem sed pharetra. Morbi tempus lobortis.</p>
										</div>
									</div>
								</div>
							</div>

						</div>
						
						<!-- Slider Progress Bar -->
						<div class="slide_progress">
							<div class="slide_num">01.</div>
							<div class="slide_bar"><div style="width: 0%; transition: width 0s ease 0s;"></div></div>
						</div>

					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Footer -->
@include('layouts.footer')
