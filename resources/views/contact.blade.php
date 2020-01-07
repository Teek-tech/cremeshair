<!DOCTYPE html>
<html lang="en">
<head>
<title>Contact</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Vogue template project">
<meta name="viewport" content="width=device-width, initial-scale=1">
@include('layouts.header')
<link rel="stylesheet" type="text/css" href="{{asset('styles/contact.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('styles/contact_responsive.css')}}">

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
							<div class="section_title"><h1>Here is where you can<span> find us</span></h1></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Contact -->

	<div class="contact">

		<!-- Google Map -->
		<div class="map">
			<div id="google_map" class="google_map">
				<div class="map_container">
					<div id="map"></div>
				</div>
			</div>
		</div>

		<div class="contact_overlay">
			<div class="contact_overlay_content d-flex flex-column align-items-center justify-content-center">
				<!-- Logo -->
				<div class="logo">
					<a href="#">
						<div>Cr<span>ém</span>es</div>
						<div>hair</div>
					</a>
				</div>
				<div class="contact_list">
					<ul>
						<li class="text-center">
							<div>
								<span>
									<img src="images/placeholder.svg" alt="https://www.flaticon.com/authors/freepik">
								</span>
								@if ($getContact && $getContact->address != "")
									{{$getContact->address}}
								@else
									<p>Oops!Address no available</p>
								@endif
							</div>
						</li>
						<li class="text-center">
							<div>
								<span>
									<img src="images/phone-call.svg" alt="https://www.flaticon.com/authors/freepik">
								</span>
								@if ($getContact && $getContact->phone != "")
									{{$getContact->phone}}
								@else
									<p>Oops! Phone number not available</p>
								@endif
							</div>
						</li>
						<li class="text-center">
							<div>
								<span>
									<img src="images/message.svg" alt="https://www.flaticon.com/authors/freepik">
								</span>
								@if ($getContact && $getContact->email !="")
									{{$getContact->email}}
								@else
									<p>Oops! Email not available</p>
								@endif
							</div>
						</li>
					</ul>
				</div>
			</div>
		</div>

	</div>

	<!-- Footer -->

	@include('layouts.footer')
	<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyCIwF204lFZg1y4kPSIhKaHEXMLYxxuMhA"></script>
	<script src="{{asset('js/contact.js')}}"></script>
</body>
</html>