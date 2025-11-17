<!DOCTYPE HTML>
<html lang="en-US">


<head>
    <meta charset="UTF-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title> Logistcwr - Transport and Logistics HTML5 Template </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <link rel="icon" sizes="56x56" href="assets/images/logo/fav-icon.png">
    <!-- bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!-- carousel CSS -->
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <!-- Animate Css -->
    <link rel="stylesheet" href="assets/css/animate.css">
    <!-- Nice Select CSS -->
    <link rel="stylesheet" href="assets/css/nice-select.css">
    <!-- Mobile Menu CSS -->
    <link rel="stylesheet" href="assets/css/meanmenu.min.css">
    <!-- theme-default CSS -->
    <link rel="stylesheet" href="assets/css/template-default.css">
    <!-- Owl Theme CSS -->
    <link rel="stylesheet" href="assets/css/owl.theme.default.min.css">
    <!-- Main Style CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- Commom Style CSS -->
    <link rel="stylesheet" href="assets/css/common.css">
    <!-- venobox CSS -->
    <link rel="stylesheet" href="venobox/venobox.css">
    <!-- responsive CSS -->
    <link rel="stylesheet" href="assets/css/responsive.css">
    <!-- bootstrap icons -->
    <link rel="stylesheet" href="../../cdn.jsdelivr.net/npm/bootstrap-icons%401.11.3/font/bootstrap-icons.min.css">
    <!-- modernizr js -->
    <script src="assets/js/vendor/modernizr-3.5.0.min.js"></script>

    <style>
        @media (min-width: 1365px) and (max-width: 1600px) {
            .st__main__menu {
                left: 300px !important;
            }
        }
    </style>
</head>
<script>
    function googleTranslateElementInit() {

        new google.translate.TranslateElement({

            pageLanguage: 'en'

        }, 'google_translate_element1234');

    }
</script>
<script src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
<script src="https://code.jquery.com/jquery-3.7.1.min.js"
    integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>



<script>
    // WORK IN PROGRESS BELOW

    $('document').ready(function() {


        // RESTYLE THE DROPDOWN MENU
        $('#google_translate_element').on("click", function() {

            // Change font family and color
            $("iframe").contents().find(
                    ".goog-te-menu2-item div, .goog-te-menu2-item:link div, .goog-te-menu2-item:visited div, .goog-te-menu2-item:active div, .goog-te-menu2 *"
                )
                .css({
                    'color': '#544F4B',
                    'font-family': 'Roboto',
                    'width': '100%'
                });
            // Change menu's padding
            $("iframe").contents().find('.goog-te-menu2-item-selected').css('display', 'none');

            // Change menu's padding
            $("iframe").contents().find('.goog-te-menu2').css('padding', '0px');

            // Change the padding of the languages
            $("iframe").contents().find('.goog-te-menu2-item div').css('padding', '20px');

            // Change the width of the languages
            $("iframe").contents().find('.goog-te-menu2-item').css('width', '100%');
            $("iframe").contents().find('td').css('width', '100%');

            // Change hover effects
            $("iframe").contents().find(".goog-te-menu2-item div").hover(function() {
                $(this).css('background-color', '#4385F5').find('span.text').css('color',
                    'white');
            }, function() {
                $(this).css('background-color', 'white').find('span.text').css('color',
                    '#544F4B');
            });

            // Change Google's default blue border
            $("iframe").contents().find('.goog-te-menu2').css('border', 'none');

            // Change the iframe's box shadow
            $(".goog-te-menu-frame").css('box-shadow',
                '0 16px 24px 2px rgba(0, 0, 0, 0.14), 0 6px 30px 5px rgba(0, 0, 0, 0.12), 0 8px 10px -5px rgba(0, 0, 0, 0.3)'
            );



            // Change the iframe's size and position?
            $(".goog-te-menu-frame").css({
                'height': '100%',
                'width': '100%',
                'top': '0px'
            });
            // Change iframes's size
            $("iframe").contents().find('.goog-te-menu2').css({
                'height': '100%',
                'overflow': 'scroll',
                'width': '100%'
            });
        });
    });
</script>

<body>

    <!-- pre loader area start -->
    <div id="loading">
        <div id="loading-center">
            <div id="loading-center-absolute">
                <!-- loading content here -->
                <div class="preloader__content text-center">
                    <div class="preloader__logo logo-container">
                        <img src="assets/images/logo/ts_logo.png" alt=""><span>{{ env('APP_NAME') }}</span>
                    </div>
                    <div id="st-loading-bar" class="preloader__bar">
                        <div id="st-loading-line" class="preloader__bar-inner"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- pre loader area end -->

    <!-- Header Top Area -->
    <div class="st-header-top-area">
        <div class="container container-large">
            <div class="row">
                <div class="col-lg-9">
                    <div class="st-header-top-info">
                        <ul>
                            <li><a href="#"><i class="bi bi-geo-alt-fill"></i> Location :{{ env('address') }}</a>
                            </li>
                            <li><a href="#"> <i class="bi bi-envelope"></i> Our Email :
                                    {{ env('MAIL_FROM_ADDRESS') }} </a>
                            </li>
                            <li><a href="#"> <i class="bi bi-clock"></i> Office Time : Mon - Fri 8:00 - 6:30 </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="st-header-top-social">
                        <span>Follow On:</span>
                        <ul>
                            <li><a href="#"> <i class="bi bi-facebook"></i> </a></li>
                            <li><a href="#"> <i class="bi bi-twitter-x"></i> </a></li>
                            <li><a href="#"> <i class="bi bi-linkedin"></i> </a></li>
                            <li><a href="#"> <i class="bi bi-instagram"></i> </a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Offcanvas area start -->
    <div class="st__offcanvas__area">
        <div class="offcanvas__wrapper">
            <div class="offcanvas__content">
                <div class="offcanvas__top d-flex justify-content-between align-items-center">
                    <div class="offcanvas__logo">
                        <a href="{{ url('/') }}">
                            <img src="assets/images/logo/ts_logo.png" alt="logo not found">
                        </a>
                    </div>
                    <div class="offcanvas__close">
                        <button class="offcanvas-close-icon animation--flip">
                            <span class="offcanvas-m-lines">
                                <span class="offcanvas-m-line line--1"></span><span
                                    class="offcanvas-m-line line--2"></span><span
                                    class="offcanvas-m-line line--3"></span>
                            </span>
                        </button>
                    </div>
                </div>
                <div class="mobile-menu fix"></div>
                <div class="offcanvas__social">
                    <h4 class="offcanvas__title mb-20">Subscribe & Follow</h4>
                    <ul class="header-top-socail-menu d-flex">
                        <li><a href="https://www.facebook.com/"><i class="bi bi-facebook"></i></a></li>
                        <li><a href="https://twitter.com/"><i class="bi bi-twitter-x"></i></a></li>
                        <li><a href="https://www.pinterest.com/"><i class="bi bi-pinterest"></i></a></li>
                        <li><a href="https://vimeo.com/"><i class="bi bi-vimeo"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="offcanvas__overlay"></div>
    <!-- Header Area -->
    <header>
        <style>
            div.skiptranslate,
            #google_translate_element2 {
                display: block !important;
                color: transparent !important;
            }

            #goog-gt-tt {
                display: none !important;
            }

            .goog-te-gadget {
                color: transparent !important;
            }

            .logo {
                display: flex;
                align-items: center;
                gap: 10px;
                /* space between image and text */
                text-decoration: none;
                /* remove underline */
            }

            .logo img {
                height: 50px;
                /* adjust size as needed */
            }

            .logo-text {
                display: flex;
                flex-direction: column;
                /* stack main text and tagline */
                line-height: 1.1;
            }

            .logo-text span {
                font-size: 24px;
                /* main text size */
                font-weight: bold;
            }

            .logo-text .freight {
                color: white;
            }

            .logo-text .forges {
                color: #f68b21;
                margin-left: 5px;
            }

            .logo-text .tagline {
                font-size: 12px;
                color: white;
                /* you can adjust */
                font-weight: normal;
                margin-top: 2px;
            }
        </style>
        <div style="position: fixed; z-index: 9999 !important; bottom: 15px; left: 12px;">
            <div id="google_translate_element1234"></div>
        </div>
        <div class="st-header-menu-area">
            <div class="header-sticky">
                <div class="st__logo__overlay"></div>
                <div class="container container-large">
                    <div class="row align-items-center">
                        <div class="col-lg-2 col-md-6 col-sm-2">
                            <div class="st-header-logo">
                                <a href="{{ url('/') }}" class="logo">
                                    <img src="assets/images/logo/ts_logo.png" alt="Logo">
                                    <div class="logo-text">
                                        <span class="freight">Freight<span class="forges">forges</span></span>
                                        <div class="tagline">Logistics, your way</div>
                                    </div>
                                </a>

                            </div>
                        </div>
                        <div class="col-lg-10 col-md-6 col-sm-10">
                            <div class="st__menu__wrap">
                                <div class="st__main__menu">
                                    <nav class="main__menu" id="mobile-menu">
                                        <ul>
                                            <li><a href="{{ url('/') }}"> Home </a>
                                            </li>
                                            <li><a href="{{ url('about_us') }}"> About
                                                </a>
                                            </li>
                                            <li><a href="{{ url('contact_us') }}"> Contacts
                                                </a>
                                            </li>
                                            <li><a href="{{ url('track') }}"> Track
                                                </a>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                                <div class="st__header__right">
                                    <div class="st-contact-meta">
                                        <div class="st__contact__meta__inner">
                                            <div class="st-contact-icon">
                                                <a href="tel:{{ env('number') }}"> <i class="bi bi-telephone"></i>
                                                </a>
                                            </div>
                                            <div class="st-contact-content">
                                                <span>Emergency</span>
                                                {{ env('number') }}
                                            </div>
                                        </div>
                                    </div>
                                    <div class="st__header__hamburger">
                                        <div class="sidebar__toggle">
                                            <a class="bar-icon" href="javascript:void(0)">
                                                <span></span>
                                                <span></span>
                                                <span></span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    @yield('content')

    <!-- ST Footer Area -->
    <div class="st-footer-area pt-120 pb-32"
        style="background-image: url(assets/images/footer/bg.jpg);background-position: center center;background-size: cover;background-repeat: no-repeat;">
        <div class="container">
            <div class="row ft_borer">
                <div class="col-lg-3 col-md-6 wow fadeInUpBig">
                    <div class="st__footer__logo">
                        <a href="#"> <img src="assets/images/logo/ts_logo.png" alt=""> </a>
                    </div>
                    <div class="st__footer__text">
                        <p>We provide reliable and secure shipping solutions, ensuring your packages arrive safely and
                            on time anywhere in the world.</p>
                    </div>

                    <div class="st__social__icon">
                        <h2>Social Info</h2>
                        <a href="#"> <i class="bi bi-facebook"></i> </a>
                        <a href="#"> <i class="bi bi-twitter-x"></i> </a>
                        <a href="#"> <i class="bi bi-pinterest"></i> </a>
                        <a href="#"> <i class="bi bi-instagram"></i> </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUpBig">
                    <div class="st__footer__title">
                        <h2> Our Navigation </h2>
                    </div>
                    <div class="st__footer__link">
                        <a href="#"> <i class="bi bi-chevron-double-right"></i> Airplane Fright </a>
                        <a href="#"> <i class="bi bi-chevron-double-right"></i> About Portx </a>
                        <a href="#"> <i class="bi bi-chevron-double-right"></i> Meet The Team </a>
                        <a href="#"> <i class="bi bi-chevron-double-right"></i> News & Media </a>
                        <a href="#"> <i class="bi bi-chevron-double-right"></i> Our Projects </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUpBig">
                    <div class="st__footer__title">
                        <h2> Our Service </h2>
                    </div>
                    <div class="st__footer__link">
                        <a href="#"> <i class="bi bi-chevron-double-right"></i> Reliability & Punctuality </a>
                        <a href="#"> <i class="bi bi-chevron-double-right"></i> Trusted Franchise </a>
                        <a href="#"> <i class="bi bi-chevron-double-right"></i> Warehoues Storage </a>
                        <a href="#"> <i class="bi bi-chevron-double-right"></i> Real Time Tracking </a>
                        <a href="#"> <i class="bi bi-chevron-double-right"></i> Transparent Pricing </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUpBig">
                    <div class="st__footer__title">
                        <h2>Stay Updated</h2>
                        <p>Get the latest delivery updates, shipping tips, and exclusive logistics insights straight to
                            your inbox.</p>
                    </div>
                    <div class="st__footer__subscribe__form p-relative mt-45">
                        <input type="email" name="email" placeholder="Email Address">
                        <button type="submit"> <i class="bi bi-chevron-double-right"></i> </button>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 wow fadeInUpBig">
                    <div class="st__footer__copyright text-center">
                        <span> © Copyrights {{ date('Y') }} <a href="#"> {{ env('APP_NAME') }} </a> All
                            rights reserved. </span>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Back to top-->
    <div class="prgoress_scrollup">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
    </div>


    <!-- jquery js -->
    <script src="assets/js/vendor/jquery-3.6.2.min.js"></script>
    <!-- bootstrap js -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- Nice Select -->
    <script src="assets/js/nice-select.js"></script>
    <!-- carousel js -->
    <script src="assets/js/owl.carousel.min.js"></script>
    <!-- counterup js -->
    <script src="assets/js/jquery.counterup.min.js"></script>
    <!-- swiper -->
    <script src="assets/js/swiper-bundle.min.js"></script>
    <!-- waypoints js -->
    <script src="assets/js/waypoints.min.js"></script>
    <!-- Wow Js -->
    <script src="assets/js/wow.min.js"></script>
    <!-- Mobile Menu Js -->
    <script src="assets/js/jquery.meanmenu.js"></script>
    <!-- venobox js -->
    <script src="venobox/venobox.js"></script>
    <!-- venobox min js -->
    <script src="venobox/venobox.min.js"></script>
    <!-- theme js -->
    <script src="assets/js/theme.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">


    @if (session('status'))
        <script>
            toastr['success'](
                '{{ session('status') }}', // The flash message
                {
                    closeButton: true,
                    tapToDismiss: false,
                    rtl: false
                }
            );
        </script>
    @endif

    @if ($errors->any())
        @foreach ($errors->all() as $error)
            <script>
                toastr['error'](
                    '{{ $error }}', // The individual error message
                    '⚠️ Error!', {
                        closeButton: true,
                        tapToDismiss: false,
                        rtl: false
                    }
                );
            </script>
        @endforeach
    @endif

    @if (session('error'))
        <script>
            toastr['error'](
                '{{ session('error') }}', // The error from the session
                '⚠️ Error!', {
                    closeButton: true,
                    tapToDismiss: false,
                    rtl: false
                }
            );
        </script>
    @endif
    @yield('scripts')
</body>

</html>
