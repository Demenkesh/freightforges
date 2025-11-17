@extends('layouts.frontend')
@section('title')
    {{ env('APP_NAME') }} - About us
@endsection
@section('content')
    <!-- ST Breadcumb Area -->
    <div class="st-breadcumb-area pt-150" style="background: url(assets/images/breadcumb/breadcumb.jpg) no-repeat;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcumb__top__content text-center wow fadeInUpBig">
                        <span>Explore Our Services & Solutions</span>
                        <h2>About Us</h2>

                    </div>
                    <div class="breadcumb__links">
                        <ul>
                            <li><a href="{{ url('/') }}">Home</a></li>
                            <li><a href="#"> / </a></li>
                            <li><a href="#">About Us</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ST About Area -->
    <div class="st-about-area style2 pt-100 pb-100">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="st__about__thumb wow fadeInUp">
                        <img src="assets/images/about/about2.png" alt="">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="st__about__wrap">
                        <div class="st__section__title wow fadeInUp">
                            <h5>About The Company</h5>
                            <h1>Global Logistics Solution Provider Since 1999</h1>
                            <p>We are a trusted logistics company delivering fast, secure, and reliable shipping solutions
                                worldwide. With decades of experience, we ensure every shipment is handled with care,
                                precision, and professionalism, providing seamless services that businesses and individuals
                                can rely on.</p>

                        </div>
                        <div class="st__about__content wow fadeInUp">
                            <div class="st__about__list__box mt-35">
                                <div class="row">
                                    <div class="col-md-6">
                                        <ul class="about__list">
                                            <li>Worldwide Services</li>
                                            <li>Local Service</li>
                                        </ul>
                                    </div>
                                    <div class="col-md-6">
                                        <ul class="about__list">
                                            <li>Tracking Moving</li>
                                            <li>Due Time Delivery</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="st__about__right">
                                {{-- <div class="st__about__video__box">
                                    <a class="video-vemo-icon st__about__video venobox vbox-item" data-vbtype="youtube"
                                        data-autoplay="true" href="https://www.youtube.com/watch?v=N7L5wlPxZ1o">
                                        <i class="bi bi-play"></i>
                                    </a>
                                    <span>Watch The Video</span>
                                </div> --}}
                                <div class="st__about__btn">
                                    <a class="st__btn2" href="#"> More Details <i class="bi bi-arrow-right"></i> </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ST Service Area -->
    <div class="st-service-area style2 pt-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="st__section__title style2 mb-50 text-center wow fadeInUp">
                        <h5> Types of Loglstice </h5>
                        <span class="circle"></span>
                        <h1>Popular Logistics Services</h1>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="st__service__box__two wow fadeInUp p-relative">
                        <div class="st__service__thumb__two">
                            <img src="assets/images/service/service4.jpg" alt="">
                        </div>
                        <div class="st__service__content">
                            <div class="st__service__icon__two">
                                <img src="assets/images/service/icon4.png" alt="">
                            </div>
                            <h2><a href="">Shipping Worldwide</a></h2>
                            <p>We offer reliable shipping services to destinations across the globe. No matter where your
                                packages need to go, we ensure fast, safe, and efficient delivery every time.</p>

                            <div class="st__service__btn">
                                <a href="#"> <i class="bi bi-arrow-right"></i> </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="st__service__box__two wow fadeInUp p-relative">
                        <div class="st__service__thumb__two">
                            <img src="assets/images/service/service5.jpg" alt="">
                        </div>
                        <div class="st__service__content">
                            <div class="st__service__icon__two">
                                <img src="assets/images/service/icon5.png" alt="">
                            </div>
                            <h2><a href="">Real-Time Tracking</a></h2>
                            <p>Monitor your shipments every step of the way with our advanced tracking system. Stay informed
                                with accurate updates from pickup to final delivery.</p>

                            <div class="st__service__btn">
                                <a href="#"> <i class="bi bi-arrow-right"></i> </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="st__service__box__two wow fadeInUp p-relative">
                        <div class="st__service__thumb__two">
                            <img src="assets/images/service/service6.jpg" alt="">
                        </div>
                        <div class="st__service__content">
                            <div class="st__service__icon__two">
                                <img src="assets/images/service/icon6.png" alt="">
                            </div>
                            <h2><a href="">Other Freight Solutions</a></h2>
                            <p>We offer a variety of freight solutions tailored to your needs, including air, sea, and land
                                transportation. Our team ensures timely, safe, and cost-effective delivery for every
                                shipment.</p>

                            <div class="st__service__btn">
                                <a href="#"> <i class="bi bi-arrow-right"></i> </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ST Appointment Area -->
    <div class="st-appointment-area style2 pt-100 p-relative"
        style="background: url(assets/images/appointment/bg.jpg);background-repeat: no-repeat;background-position: center center;background-size: cover;">
        <div class="container">
            <div class="row">
                <div class="col-lg-9">
                    <div class="st__section__title mb-50 wow fadeInUp">
                        <h5 class="text-white">Book an Appointment</h5>
                        <h1 class="text-white">24/7 Customer Support Anytime</h1>
                        <p class="text-white">
                            Our dedicated support team is available around the clock to assist with all your shipping needs.
                            From tracking inquiries to scheduling shipments, we ensure prompt, reliable, and friendly
                            service whenever you need it.
                        </p>

                        <a class="st__btn2" href="#"> More Details <i class="bi bi-arrow-right"></i> </a>
                        <a class="st__btn" href="#"> More Details <i class="bi bi-arrow-right"></i> </a>
                    </div>
                </div>
                <div class="col-lg-3"></div>
            </div>
        </div>
        <div class="st__appointment__shape1 wow fadeInUp">
            <img src="assets/images/appointment/shape2.png" alt="">
        </div>
        <div class="st__appointment__video wow fadeInUp">
            <a class="video-vemo-icon st__video venobox vbox-item" data-vbtype="youtube" data-autoplay="true"
                href="">
                <i class="bi bi-play"></i>
            </a>
        </div>
    </div>
    <!-- ST Team Area -->
    {{-- <div class="st-team-area pt-100 pb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="st__section__title style2 mb-50 text-center wow fadeInUp">
                        <h5> Our Most Team </h5>
                        <span class="circle"></span>
                        <h1>Meet The Excecutive Panel</h1>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6 wow fadeInUp">
                    <div class="st__team__box text-center">
                        <div class="st__team__thumb">
                            <img src="assets/images/team/team.png" alt="">
                        </div>
                        <div class="st__team__content">
                            <h2> Somaiya Akter </h2>
                            <span> Chief Engineer </span>
                            <div class="st__team__social">
                                <a href="#"> <i class="bi bi-share-fill"></i> </a>
                                <a href="#"> <i class="bi bi-facebook"></i> </a>
                                <a href="#"> <i class="bi bi-vimeo"></i> </a>
                                <a href="#"> <i class="bi bi-instagram"></i> </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 wow fadeInUp">
                    <div class="st__team__box text-center">
                        <div class="st__team__thumb">
                            <img src="assets/images/team/team2.png" alt="">
                        </div>
                        <div class="st__team__content">
                            <h2> Duhan Homenth </h2>
                            <span> Chief Engineer </span>
                            <div class="st__team__social">
                                <a href="#"> <i class="bi bi-share-fill"></i> </a>
                                <a href="#"> <i class="bi bi-facebook"></i> </a>
                                <a href="#"> <i class="bi bi-vimeo"></i> </a>
                                <a href="#"> <i class="bi bi-instagram"></i> </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 wow fadeInUp">
                    <div class="st__team__box text-center">
                        <div class="st__team__thumb">
                            <img src="assets/images/team/team3.png" alt="">
                        </div>
                        <div class="st__team__content">
                            <h2> Monio Roman </h2>
                            <span> Chief Engineer </span>
                            <div class="st__team__social">
                                <a href="#"> <i class="bi bi-share-fill"></i> </a>
                                <a href="#"> <i class="bi bi-facebook"></i> </a>
                                <a href="#"> <i class="bi bi-vimeo"></i> </a>
                                <a href="#"> <i class="bi bi-instagram"></i> </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 wow fadeInUp">
                    <div class="st__team__box text-center">
                        <div class="st__team__thumb">
                            <img src="assets/images/team/team4.png" alt="">
                        </div>
                        <div class="st__team__content">
                            <h2> Saad Alam </h2>
                            <span> Chief Engineer </span>
                            <div class="st__team__social">
                                <a href="#"> <i class="bi bi-share-fill"></i> </a>
                                <a href="#"> <i class="bi bi-facebook"></i> </a>
                                <a href="#"> <i class="bi bi-vimeo"></i> </a>
                                <a href="#"> <i class="bi bi-instagram"></i> </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- ST Subscribe Area -->
    <div class="st-subscribe-area style2 wow fadeInUp">
        <div class="container">
            <div class="row sub__bg2 align-items-center">
                <div class="col-lg-6">
                    <div class="st__subscribe__content">
                        <h2>Join Our Mailing List</h2>
                        <span>Ut enim ad minim veniam, quis nostruyd</span>
                        <form action="https://formspree.io/f/maygbqwa" method="post">
                            <div class="st__subscribe__form">
                                <input type="email" name="email" placeholder="Type Your Email">
                                <button type="submit"> Subscribe </button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="st__subscribe__thumb">
                        <img src="assets/images/call-do-action/call3.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br /><br /><br /><br /><br />
@endsection
