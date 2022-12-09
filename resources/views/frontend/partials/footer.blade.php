@php
     $last = App\Models\Informasi\Informasi::latest()->take(2)->get();
@endphp

<!-- Clients Section -->
<section class="clients-section">
    <div class="auto-container">
        <div class="sponsors-outer">
            <!-- Sponsors Carousel -->
            <ul class="sponsors-carousel owl-carousel owl-theme">
                <li class="slide-item"><figure class="image-box"><a href="#"><img src="images/clients/1.png" alt=""></a></figure></li>
                <li class="slide-item"><figure class="image-box"><a href="#"><img src="images/clients/2.png" alt=""></a></figure></li>
                <li class="slide-item"><figure class="image-box"><a href="#"><img src="images/clients/3.png" alt=""></a></figure></li>
                <li class="slide-item"><figure class="image-box"><a href="#"><img src="images/clients/4.png" alt=""></a></figure></li>
                <li class="slide-item"><figure class="image-box"><a href="#"><img src="images/clients/5.png" alt=""></a></figure></li>
                <li class="slide-item"><figure class="image-box"><a href="#"><img src="images/clients/1.png" alt=""></a></figure></li>
                <li class="slide-item"><figure class="image-box"><a href="#"><img src="images/clients/2.png" alt=""></a></figure></li>
                <li class="slide-item"><figure class="image-box"><a href="#"><img src="images/clients/3.png" alt=""></a></figure></li>
            </ul>
        </div>

    </div>
</section>
<footer class="main-footer" style="background-image:url({{asset('images/background-footer.jpg')}})">
    <div class="side-image">
        {{-- <img src="{{asset('assets_front/images/resource/footer-image.png')}}" alt="" /> --}}
    </div>
    <div class="auto-container">
        <!--Widgets Section-->
        <div class="widgets-section">
            <div class="row clearfix">

                <!-- Column -->
                <div class="big-column col-lg-6 col-md-12 col-sm-12">
                    <div class="row clearfix">

                        <!-- Footer Column -->
                        <div class="footer-column col-lg-6 col-md-6 col-sm-12">
                            <div class="footer-widget links-widget">
                                <h4>Get In Touch</h4>
                                <ul class="list-style-two">
                                    <li><span class="icon fa fa-send"></span>National Vicksr 88 broklyn <br> golden street, USA</li>
                                    <li><span class="icon fa fa-envelope"></span>Email : <a href="mailto:name@yourmail.com">name@yourmail.com</a></li>
                                    <li><span class="icon fa fa-phone"></span>Phone : <a href="tel:+22-5-789-0001">+22 (5) 789 0001</a></li>
                                    <li><span class="icon fa fa-globe"></span>Support : <a href="tel:+15-2-654-0002">+15 (2) 654 0002</a></li>
                                </ul>
                            </div>
                        </div>

                        <!-- Footer Column -->
                        <div class="footer-column col-lg-6 col-md-6 col-sm-12">
                            <div class="footer-widget news-widget">
                                <h4>Resent Post</h4>
                                <!-- Footer Column -->
                                <div class="widget-content">
                                    @foreach ($last as $l)
                                    <div class="post">
                                        <div class="thumb"><a href="news-detail.html"><img src="{{asset($l->image)}}" alt=""></a></div>
                                        <h6><a href="news-detail.html">{{$l->title}}</a></h6>
                                        <span class="date">{{date_format($l->created_at, "F d, Y")}}</span>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <!-- Column -->
                <div class="big-column col-lg-6 col-md-12 col-sm-12">
                    <div class="row clearfix">

                        <!-- Footer Column -->
                        <div class="footer-column col-lg-6 col-md-6 col-sm-12">
                            <div class="footer-widget links-widget">
                                <h4>Services</h4>
                                <ul class="list-link">
                                    <li><a href="apartment-design.html">Construction Manage</a></li>
                                    <li><a href="apartment-design.html">Construction Consultants</a></li>
                                    <li><a href="apartment-design.html">Architecture & Building</a></li>
                                    <li><a href="apartment-design.html">Home Renovations</a></li>
                                    <li><a href="apartment-design.html">Tiling & Painiting</a></li>
                                    <li><a href="apartment-design.html">Interior Design</a></li>
                                </ul>
                            </div>
                        </div>

                        {{-- <!-- Footer Column -->
                        <div class="footer-column col-lg-6 col-md-6 col-sm-12">
                            <div class="footer-widget request-widget">
                                <h4>Get Free Estimate</h4>
                                <a class="phone" href="tel:+123-456-78910">123-456-78910</a>
                                <div class="text">Our online scheduling and payment system is safe.</div>
                                <a class="btn-style-six theme-btn" href="contact.html"><span class="txt">Request With Online Form</span></a>
                            </div>
                        </div> --}}

                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- Footer Bottom -->
    <div class="footer-bottom">
        <div class="auto-container">
            <div class="row clearfix">
                <!-- Column -->
                <div class="column col-lg-6 col-md-12 col-sm-12">
                    <div class="copyright">Copyright &copy; 2022 <a href="#">Fakultas Teknik UNSRI</a> All rights reserved.</div>
                </div>
                <!-- Column -->
                <div class="column col-lg-6 col-md-12 col-sm-12">
                    <!-- Social Box -->
                    {{-- <ul class="social-box">
                        <li><a href="https://www.facebook.com/" class="fa fa-facebook-f"></a></li>
                        <li><a href="https://www.twitter.com/" class="fa fa-twitter"></a></li>
                        <li><a href="https://www.linkedin.com/" class="fa fa-linkedin"></a></li>
                        <li><a href="https://www.instagram.com/" class="fa fa-instagram"></a></li>
                        <li><a href="https://www.youtube.com/" class="fa fa-youtube-play"></a></li>
                    </ul> --}}
                </div>
            </div>
        </div>
    </div>

</footer>
