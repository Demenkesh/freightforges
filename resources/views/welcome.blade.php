@extends('layouts.frontend')
@section('title')
    Welcome admin
@endsection
@section('content')
    <!-- ST Slider Area -->
    <div class="st__slider__carousel owl-carousel">
        <div class="st-slider-area d-flex align-items-center">
            <div class="slider__bg"
                style="background-image: url(assets/images/slider/slider-1.jpg);background-position: center center;background-size: cover;background-repeat: no-repeat;">
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="slider-content">
                            <h5>We Specialise in the transportation</h5>
                            <h1>Experience The Best <br> Logistic & Transport</h1>
                            <p>We provide fast, reliable, and secure delivery services across local and international
                                destinations.
                                With advanced tracking technology and a dedicated support team, we ensure your packages
                                arrive safely and on time.
                                Trust us to handle your shipments with care, efficiency, and professionalism..</p>
                            <a class="st__btn mt-40" href="{{ url('track') }}"> More Details <i
                                    class="bi bi-arrow-right"></i> </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="st-slider-area d-flex align-items-center">
            <div class="slider__bg"
                style="background-image: url(assets/images/slider/slider-2.jpg);background-position: center center;background-size: cover;background-repeat: no-repeat;">
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="slider-content">
                            <h5>We Specialise in the transportation</h5>
                            <h1>Experience The Best <br> Logistic & Transport</h1>
                            <p>We offer fast, secure, and reliable shipping services tailored to meet your needs.
                                From local deliveries to international shipments, our team ensures every package is handled
                                with care, precision, and on-time delivery.
                                Track your items easily and enjoy a stress-free shipping experience with us..</p>
                            <a class="st__btn mt-40" href="{{ url('track') }}"> More Details <i
                                    class="bi bi-arrow-right"></i> </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ST Feature Area -->
    <div class="st-feature-area pb-60">
        <div class="container">
            <div class="row">
                <div class="st__feature__carousel owl-carousel">
                    <div class="st__feature__box wow fadeInUp">
                        <div class="st__feature__icon">
                            <img src="assets/images/feature/icon1.png" alt="">
                        </div>
                        <div class="st__feature__content">
                            <h2>Transparent Pricing</h2>
                            <p>Get clear, honest, and upfront pricing for all your shipments. No hidden fees, no surprises —
                                just simple and affordable rates you can trust.</p>

                            <span class="line"></span>
                        </div>
                    </div>
                    <div class="st__feature__box wow fadeInUp">
                        <div class="st__feature__icon">
                            <img src="assets/images/feature/icon2.png" alt="">
                        </div>
                        <div class="st__feature__content">
                            <h2>Packaging & Distribution</h2>
                            <p>We ensure your items are carefully packaged and efficiently distributed to their
                                destinations. Our team handles every shipment with precision to guarantee safe and timely
                                delivery.</p>

                            <span class="line"></span>
                        </div>
                    </div>
                    <div class="st__feature__box wow fadeInUp">
                        <div class="st__feature__icon">
                            <img src="assets/images/feature/icon3.png" alt="">
                        </div>
                        <div class="st__feature__content">
                            <h2>Real-Time Tracking</h2>
                            <p>Track your shipments instantly with our real-time tracking system. Stay updated on every step
                                of the delivery process, from pickup to final destination.</p>

                            <span class="line"></span>
                        </div>
                    </div>
                    <div class="st__feature__box wow fadeInUp">
                        <div class="st__feature__icon">
                            <img src="assets/images/feature/icon4.png" alt="">
                        </div>
                        <div class="st__feature__content">
                            <h2>Warehouse Storage</h2>
                            <p>We offer secure and well-organized warehouse facilities to keep your goods safe. Our storage
                                solutions ensure proper handling, protection, and easy retrieval whenever you need them.</p>

                            <span class="line"></span>
                        </div>
                    </div>
                    <div class="st__feature__box wow fadeInUp">
                        <div class="st__feature__icon">
                            <img src="assets/images/feature/icon2.png" alt="">
                        </div>
                        <div class="st__feature__content">
                            <h2>Packaging & Distribution</h2>
                            <p>We ensure your items are carefully packaged and efficiently distributed to their
                                destinations. Our team handles every shipment with precision to guarantee safe and timely
                                delivery.</p>

                            <span class="line"></span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="st__feature__bottom text-center wow fadeInUp mt-55">
                        <span class="text-white">Our list of services does not end here. Find out how we can help you
                            and your business. <a href="#"> More Services </a> </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ST About Area -->
    <div class="st-about-area pt-100 pb-100">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="st__about__thumb wow fadeInUp">
                        <img src="assets/images/about/about.jpg" alt="">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="st__about__wrap">
                        <div class="st__section__title wow fadeInUp">
                            <h5> About The Company </h5>
                            <h1>Logistics Solutions That Deliver Excellence</h1>
                            <p>We are a trusted logistics and shipping company committed to providing fast, secure, and
                                reliable delivery services. With a focus on innovation and customer satisfaction, we ensure
                                every shipment is handled with precision and care. Our goal is to simplify the shipping
                                process and deliver excellence at every stage — from pickup to final delivery.</p>

                        </div>
                        <div class="st__about__content wow fadeInUp">
                            <div class="st__about__iconbox mt-35 d-flex">
                                <div class="st__about__icon">
                                    <img src="assets/images/about/icon1.png" alt="">
                                </div>
                                <div class="st__about__iconcontent">
                                    <h3>Real-Time Tracking</h3>
                                    <p>Track your shipment at every stage with our advanced real-time tracking system. Stay
                                        updated with accurate location details and delivery progress from pickup to
                                        destination.</p>

                                </div>
                            </div>
                            <div class="st__about__btn mt-50">
                                <a class="st__btn2" href="{{ url('track') }}"> More Details <i
                                        class="bi bi-arrow-right"></i> </a>
                            </div>
                            <div class="st__about__infometa">
                                <div class="st__iconmeta__inner d-flex">
                                    <div class="st__about__info__icon">
                                        <a href="tel:{{ env('number') }}"> <i class="bi bi-telephone"></i> </a>
                                    </div>
                                    <div class="st__about__infocontent">
                                        <span>Emergency</span>
                                        {{ env('number') }}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ST Service Area -->
    <div class="st-service-area pt-100 pb-80">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="st__section__title mb-50 text-center wow fadeInUp">
                        <h5> Types of Loglstice </h5>
                        <span class="circle"></span>
                        <h1>Popular Logistics Services</h1>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="st__service__box wow fadeInUp p-relative">
                        <div class="st__service__thumb">
                            <img src="assets/images/service/service1.jpg" alt="">
                            <div class="st__service__icon">
                                <img src="assets/images/service/icon1.png" alt="">
                            </div>
                        </div>
                        <div class="st__service__content">
                            <span> Tracking </span>
                            <h2> <a href="{{ url('track') }}"> Transport by Road </a> </h2>
                            <div class="st__service__btn">
                                <a href="{{ url('track') }}"> <i class="bi bi-arrow-right"></i> </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="st__service__box wow fadeInUp p-relative">
                        <div class="st__service__thumb">
                            <img src="assets/images/service/service2.jpg" alt="">
                            <div class="st__service__icon">
                                <img src="assets/images/service/icon2.png" alt="">
                            </div>
                        </div>
                        <div class="st__service__content">
                            <span> Tracking </span>
                            <h2> <a href="{{ url('track') }}"> Safety Garunteed </a> </h2>
                            <div class="st__service__btn">
                                <a href="{{ url('track') }}"> <i class="bi bi-arrow-right"></i> </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="st__service__box wow fadeInUp p-relative">
                        <div class="st__service__thumb">
                            <img src="assets/images/service/service3.jpg" alt="">
                            <div class="st__service__icon">
                                <img src="assets/images/service/icon3.png" alt="">
                            </div>
                        </div>
                        <div class="st__service__content">
                            <span> Tracking </span>
                            <h2> <a href="{{ url('track') }}"> Managing logistics for </a> </h2>
                            <div class="st__service__btn">
                                <a href="{{ url('track') }}"> <i class="bi bi-arrow-right"></i> </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ST Testimonial Area -->
    <div class="st-testimonial-area pt-100 pb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="st__section__title mb-50 text-center wow fadeInUp">
                        <h5> What Our Clients </h5>
                        <span class="circle"></span>
                        <h1>Stories From Our Users</h1>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="st__testimonial__box wow fadeInUp p-relative">
                        <div class="st__testi__inner d-flex align-items-center">
                            <div class="st__testi__thumb">
                                <img src="assets/images/testimonial/t1.png" alt="">
                            </div>
                            <div class="st__testi__content">
                                <h2>Michael Johnson</h2>
                                <span>Reliable & Fast Delivery</span>
                            </div>
                        </div>

                        <div class="st__testi__desc">
                            <p>
                                “This company has been outstanding! My packages always arrive on time, and the real-time
                                tracking keeps me updated every step of the way. Highly recommended for anyone looking for
                                trustworthy shipping services.”
                            </p>
                        </div>

                        <div class="st__testi_quote">
                            <i class="bi bi-quote"></i>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="st__testimonial__box wow fadeInUp p-relative">
                        <div class="st__testi__inner d-flex align-items-center">
                            <div class="st__testi__thumb">
                                <img src="assets/images/testimonial/t2.png" alt="">
                            </div>
                            <div class="st__testi__content">
                                <h2>Madriya Merin</h2>
                                <span>Exceptional Service</span>
                            </div>
                        </div>

                        <div class="st__testi__desc">
                            <p>
                                “Their customer service is outstanding! My shipment was delivered safely and earlier than
                                expected. I’m impressed by their professionalism and attention to detail.”
                            </p>
                        </div>

                        <div class="st__testi_quote">
                            <i class="bi bi-quote"></i>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="st__testimonial__box wow fadeInUp p-relative">
                        <div class="st__testi__inner d-flex align-items-center">
                            <div class="st__testi__thumb">
                                <img src="assets/images/testimonial/t3.png" alt="">
                            </div>
                            <div class="st__testi__content">
                                <h2>Darrell Steward</h2>
                                <span>Trusted & Efficient</span>
                            </div>
                        </div>

                        <div class="st__testi__desc">
                            <p>
                                “I’ve been using their services for months, and every shipment has been handled with care
                                and delivered on time. Their tracking system makes it easy to stay informed throughout the
                                process.”
                            </p>
                        </div>

                        <div class="st__testi_quote">
                            <i class="bi bi-quote"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ST Appointment Area -->
    <div class="st-appointment-area pt-100 p-relative">
        <div class="container">
            <div class="row">
                <div class="col-lg-9">
                    <div class="st__contact__inner">
                        <div class="st__contact__position">
                            <div class="st__section__title mb-50 wow fadeInUp">
                                <h5 class="text-white"> Booking Appointment </h5>
                                <h1 class="text-white">Book Transport & Logistics</h1>
                            </div>
                            <form action="https://formspree.io/f/maygbqwa" method="post">
                                <div class="row">
                                    <div class="col-lg-6 wow fadeInUp">
                                        <div class="st__form__box p-relative">
                                            <input type="text" name="name" placeholder="Full Name*">
                                            <i class="bi bi-person-fill"></i>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 wow fadeInUp">
                                        <div class="st__form__box p-relative">
                                            <input type="email" name="email" placeholder="Email Here*">
                                            <i class="bi bi-envelope-open"></i>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 wow fadeInUp">
                                        <div class="st__form__box p-relative">
                                            <input type="text" name="text" placeholder="Weight. Kg*">
                                            <i class="bi bi-bag"></i>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 wow fadeInUp">
                                        <div class="st__form__box p-relative">
                                            <input type="text" name="text" placeholder="Distance. km*">
                                            <i class="bi bi-geo-alt-fill"></i>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 wow fadeInUp">
                                        <div class="st__form__box p-relative">
                                            <select>
                                                <option value="1">Select Freight</option>
                                                <option value="2">Air Freight</option>
                                                <option value="3">Sea Freight</option>
                                                <option value="4">Road Freight</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 wow fadeInUp mt-50">
                                        <div class="st__form__box">
                                            <button class="st__btn" type="submit"> Request Quote <i
                                                    class="bi bi-arrow-right"></i> </button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3"></div>
            </div>
        </div>
        <div class="st__appointment__bg wow fadeInUp">
            <img class="a__bg" src="assets/images/appointment/bg.jpg" alt="">
        </div>
        <div class="st__appointment__shape1 wow fadeInUp">
            <img src="assets/images/appointment/shape.png" alt="">
        </div>
        <div class="st__appointment__video wow fadeInUp">
            <a class="video-vemo-icon st__video venobox vbox-item" data-vbtype="youtube" data-autoplay="true"
                href="">
                <i class="bi bi-play"></i>
            </a>
        </div>
    </div>
    <!-- ST Project Area -->
    <div class="st__project__area pt-100 pb-100">
        <div class="container container-large">
            <div class="row">
                <div class="col-lg-12">
                    <div class="st__section__title mb-50 text-center wow fadeInUp">
                        <h5> Deltvering Results </h5>
                        <span class="circle"></span>
                        <h1>Proud to Deliver Excellence</h1>
                    </div>
                </div>
            </div>
            <div class="row wow fadeInUpBig">
                <div class="col-lg-4 col-md-6">
                    <div class="st__project__single p-relative">
                        <div class="st__project__thumb">
                            <img src="assets/images/project/p1.jpg" alt="">
                            <div class="st__project__content">
                                <h2><a href="project-details.html">Experts in technology fields</a></h2>
                                <span>Transportation 2024</span>
                            </div>
                            <div class="st__project__btn">
                                <a href="project-details.html"> Details <i class="bi bi-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="row mt">
                        <div class="col-lg-12">
                            <div class="st__project__single p-relative">
                                <div class="st__project__thumb">
                                    <img src="assets/images/project/p2.jpg" alt="">
                                    <div class="st__project__content">
                                        <h2><a href="project-details.html">Experts in technology fields</a></h2>
                                        <span>Transportation 2024</span>
                                    </div>
                                    <div class="st__project__btn">
                                        <a href="project-details.html"> Details <i class="bi bi-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 pmt">
                            <div class="st__project__single p-relative">
                                <div class="st__project__thumb">
                                    <img src="assets/images/project/p3.jpg" alt="">
                                    <div class="st__project__content">
                                        <h2><a href="project-details.html">Experts in technology fields</a></h2>
                                        <span>Transportation 2024</span>
                                    </div>
                                    <div class="st__project__btn">
                                        <a href="project-details.html"> Details <i class="bi bi-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="st__project__single p-relative mb-res">
                        <div class="st__project__thumb">
                            <img src="assets/images/project/p4.jpg" alt="">
                            <div class="st__project__content">
                                <h2><a href="project-details.html">Experts in technology fields</a></h2>
                                <span>Transportation 2024</span>
                            </div>
                            <div class="st__project__btn">
                                <a href="project-details.html"> Details <i class="bi bi-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ST Call To Action -->
    <div class="st-call-do-action pt-180 p-relative pb-450"
        style="background-image: url(assets/images/call-do-action/bg.jpg);background-position: center center;background-size: cover;background-repeat: no-repeat;">
        <div class="contaienr">
            <div class="row">
                <div class="col-lg-12">
                    <div class="st-call-do-action-content text-center wow fadeInUpBig">
                        <h2>Looking For The Best Logistics <br> Transport Service?</h2>
                        <a class="st__btn2" href="{{ url('track') }}"> More Details <i class="bi bi-arrow-right"></i>
                        </a>
                        <a class="st__btn mt-40" href="#"> Read More <i class="bi bi-arrow-right"></i> </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ST Subscribe Area -->
    <div class="st-subscribe-area wow fadeInUp pb-100">
        <div class="container">
            <div class="row sub__bg align-items-center">
                <div class="col-lg-8">
                    <div class="st__subscribe__content">
                        <h2>Coverage That Protect Your World!</h2>
                        <span>Not sure which policy suits you the best?</span>
                        <form action="https://formspree.io/f/maygbqwa" method="post">
                            <div class="st__subscribe__form">
                                <input type="email" name="email" placeholder="Type Your Email">
                                <button type="submit"> Subscribe </button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="st__subscribe__thumb">
                        <img src="assets/images/call-do-action/call2.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ST Blog Area -->
    <div class="st-blog-area pb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="st__section__title mb-50 text-center wow fadeInUp">
                        <h5> Our News from Blog </h5>
                        <span class="circle"></span>
                        <h1>The latest News & Best Blog</h1>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="st__blog__single__box wow fadeInUp">
                        <div class="st__blog__thumb">
                            <img src="assets/images/blog/b1.jpg" alt="">
                        </div>
                        <div class="st__blog__content">
                            <div class="st__meta__top">
                                <div class="st__blog__meta">
                                    <div class="st__blog__meta__inner d-flex align-items-center">
                                        <div class="st__meta__thumb">
                                            <img src="assets/images/blog/meta.png" alt="">
                                        </div>
                                        <div class="st__blog__meta__content">
                                            <span><a href="">By Admin</a></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="st__blog__cmt">
                                    <i class="bi bi-chat"></i>
                                    <span>{6}Comments</span>
                                </div>
                            </div>
                            <h2><a href=""> New Additions to our great Metro trucks. </a></h2>
                            <a class="st_blog_btn" href="#"> Read More <i class="bi bi-arrow-up-short"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="st__blog__single__box wow fadeInUp">
                        <div class="st__blog__content">
                            <div class="st__meta__top">
                                <div class="st__blog__meta">
                                    <div class="st__blog__meta__inner d-flex align-items-center">
                                        <div class="st__meta__thumb">
                                            <img src="assets/images/blog/meta.png" alt="">
                                        </div>
                                        <div class="st__blog__meta__content">
                                            <span><a href="">By Admin</a></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="st__blog__cmt">
                                    <i class="bi bi-chat"></i>
                                    <span>{6}Comments</span>
                                </div>
                            </div>
                            <h2><a href=""> New Additions to our great Metro trucks. </a></h2>
                            <a class="st_blog_btn" href="#"> Read More <i class="bi bi-arrow-up-short"></i></a>
                        </div>
                        <div class="st__blog__thumb style2">
                            <img src="assets/images/blog/b2.jpg" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="st__blog__single__box wow fadeInUp">
                        <div class="st__blog__thumb">
                            <img src="assets/images/blog/b3.jpg" alt="">
                        </div>
                        <div class="st__blog__content">
                            <div class="st__meta__top">
                                <div class="st__blog__meta">
                                    <div class="st__blog__meta__inner d-flex align-items-center">
                                        <div class="st__meta__thumb">
                                            <img src="assets/images/blog/meta.png" alt="">
                                        </div>
                                        <div class="st__blog__meta__content">
                                            <span><a href="">By Admin</a></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="st__blog__cmt">
                                    <i class="bi bi-chat"></i>
                                    <span>{6}Comments</span>
                                </div>
                            </div>
                            <h2><a href=""> New Additions to our great Metro trucks. </a></h2>
                            <a class="st_blog_btn" href="#"> Read More <i class="bi bi-arrow-up-short"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
