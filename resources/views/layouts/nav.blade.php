<header class="header trans_400">
    <div class="header_content d-flex flex-row align-items-center justify-content-center trans_400">

        <!-- Logo -->
        <div class="logo">
            <a href="#">
                <div>Cr<span>ém</span>es</div>
                <div>hair</div>
            </a>
            <div class="hamburger"><div></div><div></div><div></div></div>
        </div>

        <!-- Main Navigation -->
        <nav class="main_nav">
            <ul class="d-flex flex-row align-items-start justify-content-start">
            <li><a href="{{asset('/')}}">Home<div><div></div><div></div><div></div></div></a></li>
                <li><a href="{{asset('about')}}">About Us<div><div></div><div></div><div></div></div></a></li>
                <!-- <li><a href="services.html">Services<div><div></div><div></div><div></div></div></a></li> -->
                <li><a href="{{asset('products')}}">Products<div><div></div><div></div><div></div></div></a></li>
                <!-- <li><a href="distributor_form.html">Become a distributor<div><div></div><div></div><div></div></div></a></li> -->
                <li><a href="{{asset('contact')}}">Contact<div><div></div><div></div><div></div></div></a></li>
            </ul>
        </nav>

        <!-- Appointment -->
        <div class="app trans_400">
            <div class="app_button_container d-flex flex-row align-items-center justify-content-start">
                <div class="app_button trans_400 d-flex flex-row align-items-center justify-content-start">
                    <div class="app_button_icon"><img src="images/woman.svg" alt="https://www.flaticon.com/authors/freepik"></div>
                    <div>Contact Us</div>
                </div>
                <div class="app_button_close">close</div>
            </div>
        </div>
        <div class="app_content d-flex flex-column align-items-start justify-content-center">
            @include('layouts.message')
            <div class="app_form_container text-right">
                <form action="{{route('contactUs.save')}}" method="POST" id="app_form" class="app_form">
                    @csrf
                    <input type="text" class="app_input" name="name" placeholder="Full Name" required="required">
                    <input type="email" class="app_input" name="email" placeholder="Email Address" required="required">
                    <input type="text" class="app_input" name="subject" placeholder="subject" required="required">
                    <textarea class="app_input" name="message" placeholder="Please write your message here" required="required"></textarea>
                    
                    <button type="submit" class="app_form_button">submit</button>
                </form>
            </div>
        </div>	
    </div>
</header>
