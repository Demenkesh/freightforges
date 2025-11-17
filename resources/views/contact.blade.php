@extends('layouts.frontend')
@section('title')
    Welcome admin
@endsection
@section('content')
    <!-- ST Breadcumb Area -->
    <div class="st-breadcumb-area pt-150" style="background: url(assets/images/breadcumb/breadcumb.jpg) no-repeat;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcumb__top__content text-center wow fadeInUpBig">
                        <span> Business Models you can Consider </span>
                        <h2> Contact </h2>
                    </div>
                    <div class="breadcumb__links">
                        <ul>
                            <li><a href="{{ url('/') }}">Home</a></li>
                            <li><a href="#"> / </a></li>
                            <li><a href="#">Contact</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ST FAQ Area -->
    <div class="st-contact-section pt-100 pb-100">
        <div class="container">
            <div class="row align-items-center contact__bg">
                <div class="col-lg-5">
                    <div class="st__contact__info">
                        <div class="st__contact__title">
                            <h2> Contact Informatlon </h2>
                        </div>
                        <div class="st__contactinfo__inner">
                            <div class="st__cinfobox">
                                <div class="st__cinfobox_icon">
                                    <i class="bi bi-geo-alt-fill"></i>
                                </div>
                                <div class="st__cinfobox_content">
                                    <h5> Address </h5>
                                    <span> {{ env('address') }} </span>
                                </div>
                            </div>
                            <div class="st__cinfobox">
                                <div class="st__cinfobox_icon">
                                    <i class="bi bi-phone-fill"></i>
                                </div>
                                <div class="st__cinfobox_content">
                                    <h5> Contact Number </h5>
                                    <span> {{ env('number') }} </span>
                                </div>
                            </div>
                            <div class="st__cinfobox">
                                <div class="st__cinfobox_icon">
                                    <i class="bi bi-chat-square-fill"></i>
                                </div>
                                <div class="st__cinfobox_content">
                                    <h5> Email Us </h5>
                                    <span> {{ env('MAIL_FROM_ADDRESS') }}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="st__contact__right">
                        <div class="st__contact__right__title">
                            <h2> Get A Quote </h2>
                        </div>
                        <form action="{{ url('mail') }}" method="post">
                            @csrf
                            <div class="row">
                                <div class="col-lg-6 wow fadeInUp">
                                    <div class="st__form__box">
                                        <input type="text" name="name" placeholder="Your Name">
                                    </div>
                                </div>
                                <div class="col-lg-6 wow fadeInUp">
                                    <div class="st__form__box">
                                        <input type="email" name="email" placeholder="Email Address">
                                    </div>
                                </div>
                                <div class="col-lg-12 wow fadeInUp">
                                    <div class="st__form__box">
                                        <input type="text" name="phone" placeholder="Phone Number">
                                    </div>
                                </div>
                                <div class="col-lg-12 wow fadeInUp">
                                    <div class="st__form__box">
                                        <textarea placeholder="Write Your Question Here" name="user_message" cols="30" rows="7"></textarea>
                                    </div>
                                </div>
                                <div class="col-lg-12 wow fadeInUp">
                                    <div class="st__form__box">
                                        <button class="st__btn2" type="submit"> Request Quote <i
                                                class="bi bi-arrow-right"></i> </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="st-map-area">
        <div class="container-fluid p-0">
            <div class="row">
                <div class="col-lg-12">
                    <div class="st__map">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2444.8362232871273!2d0.11543797681535012!3d52.21002367198155!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47d870bfa50cc79f%3A0xaf6bdb2aa40b0919!2s29%20Thompsons%20Ln%2C%20Cambridge%20CB5%208AQ%2C%20UK!5e0!3m2!1sen!2sng!4v1763369437835!5m2!1sen!2sng"
                            width="400" height="745" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br /><br /><br /><br /><br />
@endsection
