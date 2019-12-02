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
            <div class="app_form_container text-right">
                <form action="#" id="app_form" class="app_form">
                    <input type="text" class="app_input" placeholder="Full Name" required="required">
                    <input type="email" class="app_input" placeholder="Email Address" required="required">
                    <input type="text" class="app_input" placeholder="Phone Number" required="required">
                    <textarea class="app_input" placeholder="Please write your message here" required="required"></textarea>
                    <!-- <input type="text" class="app_input" placeholder="Desired Date" required="required">
                    <select class="app_input app_select">
                        <option disabled="" selected="">Select Service</option>
                        <option>Service 1</option>
                        <option>Service 2</option>
                        <option>Service 3</option>
                        <option>Service 4</option>
                    </select> -->
                    <button class="app_form_button">submit</button>
                </form>
            </div>
        </div>	
    </div>
</header>
