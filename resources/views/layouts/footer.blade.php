<footer class="footer">
    <div class="parallax_background" data-image-src="images/bg_images/footer.jpg"></div>
    <!-- <div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="images/footer.jpg" data-speed="0.8"></div> -->
    <div class="footer_container">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="section_title_container">
                        <div class="section_title"><h1>Get in touch</h1></div>
                        <p>Your feedbacks are important to us, they help us serve you better.</p>
                    </div>
                </div>
            </div>
            <div class="row footer_row">
                <div class="col-lg-4 footer_col">
                    <div class="contact_info">
                        <div class="footer_title">Contact Info</div>
                        <div class="contact_info_list">
                            <ul>
                                <li class="d-flex flex-row align-items-start justify-content-start">
                                    <div><div class="contact_info_icon"><img src="images/placeholder.svg" alt="https://www.flaticon.com/authors/freepik"></div></div>
                                    @if ($getContact->address != "")
                                        <div class="contact_info_content">{{$getContact->address}}</div>
                                    @else
                                        <div class="contact_info_content">Oops! No address available at this time</div>
                                    @endif
                                </li>
                                <li class="d-flex flex-row align-items-center justify-content-start">
                                    <div><div class="contact_info_icon"><img src="images/phone-call.svg" alt="https://www.flaticon.com/authors/freepik"></div></div>
                                    @if ($getContact->phone !="")
                                        <div class="contact_info_content">{{$getContact->phone}}</div>
                                    @else
                                        <p class="contact_info_content">Oops! no phone number available at this time</p>
                                    @endif
                                </li>
                                <li class="d-flex flex-row align-items-center justify-content-start">
                                    <div><div class="contact_info_icon"><img src="images/message.svg" alt="https://www.flaticon.com/authors/freepik"></div></div>
                                    @if ($getContact->email != "")
                                        <div class="contact_info_content">{{$getContact->email}}</div>
                                    @else
                                        <div>
                                            <p class="contact_info_content"> Oops! no email available at this time</p>
                                        </div>
                                    @endif
                                </li>
                            </ul>
                        </div>
                        <div class="social">
                            <ul class="d-flex flex-row align-items-center justify-content-start">
                                <li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-behance" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="footer_title">Leave a comment</div>
                    <div class="contact_form_container">
                        <form action="#" id="contact_form" class="contact_form">
                            <div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <input type="text" placeholder="Name" class="contact_input" required="required">
                                    </div>
                                    <div class="col-lg-6">
                                        <input type="email" placeholder="E-mail" class="contact_input" required="required">
                                    </div>
                                </div>
                            </div>
                            <div><input type="text" placeholder="Subject" class="contact_input"></div>
                            <div><textarea class="contact_input contact_textarea" placeholder="Message" required="required"></textarea></div>
                            <button class="contact_form_button">send message</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer_bar d-flex flex-row align-items-center justify-content-start">
        <div class="copyright">
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | Teek-Tech</a>
        </div>
    </div>
</footer>
</div>

<script src="{{asset('js/jquery-3.2.1.min.js')}}"></script>
<script src="{{asset('styles/bootstrap-4.1.2/popper.js')}}"></script>
<script src="{{asset('styles/bootstrap-4.1.2/bootstrap.min.js')}}"></script>
<script src="{{asset('plugins/greensock/TweenMax.min.js')}}"></script>
<script src="{{asset('plugins/greensock/TimelineMax.min.js')}}"></script>
<script src="{{asset('plugins/scrollmagic/ScrollMagic.min.js')}}"></script>
<script src="{{asset('plugins/greensock/animation.gsap.min.js')}}"></script>
<script src="{{asset('plugins/greensock/ScrollToPlugin.min.js')}}"></script>
<script src="{{asset('plugins/OwlCarousel2-2.2.1/owl.carousel.js')}}"></script>
<script src="{{asset('plugins/easing/easing.js')}}"></script>
<script src="{{asset('plugins/progressbar/progressbar.min.js')}}"></script>
<script src="{{asset('plugins/parallax-js-master/parallax.min.js')}}"></script>
<script src="{{asset('plugins/scrollTo/jquery.scrollTo.min.js')}}"></script>
