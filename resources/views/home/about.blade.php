<!doctype html>
<html lang="{{ app()->getLocale() }}" dir="{{ app()->getLocale() == 'ar' ? 'rtl' : 'ltr' }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>⚖️ Hattab Law Firm</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    
    <!-- CSS here -->
    <link rel="stylesheet" href="{{asset('home/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('home/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('home/css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('home/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('home/css/themify-icons.css')}}">
    <link rel="stylesheet" href="{{asset('home/css/nice-select.css')}}">
    <link rel="stylesheet" href="{{asset('home/css/flaticon.css')}}">
    <link rel="stylesheet" href="{{asset('home/css/gijgo.css')}}">
    <link rel="stylesheet" href="{{asset('home/css/slicknav.css')}}">
    <link rel="stylesheet" href="{{asset('home/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('home/css/responsive.css')}}">
    <link rel="stylesheet" href="{{asset('home/css/practice.css')}}">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=EB+Garamond:ital,wght@0,400..800;1,400..800&display=swap" rel="stylesheet" async>

    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200..1000&display=swap" rel="stylesheet">
    

    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <!-- FontAwesome 6 Free -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" >



    @if (app()->getLocale() == 'ar')
    <link rel="stylesheet" href="{{ asset('home/css/arabic.css') }}">
    @endif


    <!-- Bootstrap JS (Popper.js included) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</head>

<body>


   <!-- header-start -->
   <header>
    <div class="header-area">
        <div id="sticky-header" class="main-header-area">
            <div class="container-fluid p-0">
                <div class="row align-items-center justify-content-between no-gutters">
                    <div class="col-xl-2 col-lg-2">
                        <div class="logo-img">
                            <a href="{{ url('/') }}">
                                <img id="LawLogo" src="{{ asset('img/homePage/logo.png') }}" alt="">
                            </a>
                        </div>
                    </div>

                    <div class="col-xl-7 col-lg-8">
                            <div class="main-menu  d-none d-lg-block">
                                <nav>
                                <ul id="navigation">
                                <li><a href="{{ url('/') }}" class="{{ request()->path() == '/' ? 'active' : '' }}">{{ __("Home") }}</a></li>
                                
                                <li><a href="{{ url('about') }}" class="{{ request()->path() == 'about' ? 'active' : '' }}">{{ __("About") }}</a></li>

                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle custom-dropdown-toggle {{ request()->is('practices*') ? 'active' : '' }}" href="#" id="practiceDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        {{ __("Practice Areas") }}
                                    </a>
                                    <ul class="dropdown-menu custom-dropdown-menu" aria-labelledby="practiceDropdown">
                                        @foreach ($practices as $single_practice)
                                            <li>
                                                <a class="dropdown-item custom-dropdown-item {{ request()->path() == 'practices/'.$single_practice->id ? 'active' : '' }}" href="{{ route('practices.show', $single_practice->id) }}">
                                                    {{ app()->getLocale() == 'ar' ? $single_practice->name_ar : $single_practice->name_en }}
                                                </a>
                                            </li>
                                        @endforeach
                                    </ul>
                                </li>

                                <li><a href="{{ url('team') }}" class="{{ request()->path() == 'team' ? 'active' : '' }}">{{ __("Our Team") }}</a></li>
                                
                                <li><a href="{{ url('contact') }}" class="{{ request()->path() == 'contact' ? 'active' : '' }}">{{ __("Contact") }}</a></li>
                            </ul>
                                </nav>
                            </div>
                        </div>

                        <div class="lang-selector">
                        <a href="{{ url('lang/en') }}" class="lang-btn {{ app()->getLocale() === 'en' ? 'active-lang' : '' }}">EN</a>
                        <a href="{{ url('lang/ar') }}" class="lang-btn {{ app()->getLocale() === 'ar' ? 'active-lang' : '' }}">AR</a>
                        </div>


                    <div class="col-12">
                        <div class="mobile_menu d-block d-lg-none"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
    <!-- header-end -->

    <!-- slider_area_start -->
    <div class="slider_area ">
        <div class="slider_area_inner slider_area_inner2 slider_bg_2 d-flex align-items-center">
           
        </div>
    </div>
    <!-- slider_area_end -->

     <!-- About Us Section -->
     <section class="about-us py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-6" style="width: 204%; display:contents">
                    <h2 class="text-primary1">{{__("Al-Hattab Attorneys & Legal Consultants")}}</h2>
                    <p>{{__("Al Hattab Law Firm is a legal organization with deep family roots spanning three generations of dedication and excellence in the field of law. Founded by Bashir Al Hattab, one of the leading lawyers in Jordan and Palestine, who held bar number 20, he established a distinguished professional approach that has allowed his family's legal legacy to endure for generations, inspiring them to continue their legal careers.")}}</p>
                    <p>{{__("Over the decades, members of the Al Hattab family have adhered to the founder's approach, making the family name synonymous with leadership in the field of law in Jordan. The firm has evolved into a specialized entity that blends inherited expertise with a modern vision, becoming one of the most prominent law firms in Jordan, offering a wide range of legal services.")}}</p>
                    <p>{{__("Al Hattab Law Firm is proud to be the first choice for many individuals, as well as local and international companies. The firm prioritizes client satisfaction, ensuring their legal needs are successfully and effectively met by a diverse team of highly qualified and experienced lawyers who are dedicated to upholding the highest standards of professionalism and ethics.")}}</p>
                </div>
            </div>
            </section>


            <section class="abouts">
            <div class="values-section">  
    <div class="container">
        <div class="row">
            <div class="col-md-4 value-box">
                <i class="fas fa-eye"></i>
                <h4>{{__("Our Vision")}}</h4>
                <p>{{__("To be the most trusted and innovative legal consultancy firm in Jordan and the region, recognized for delivering exceptional legal solutions that empower clients to navigate complex challenges with confidence and success.")}}</p>
            </div>
            <div class="col-md-4 value-box">
                <i class="fas fa-balance-scale"></i>
                <h4>{{__("Our Mission")}}</h4>
                <p>{{__("At Al Hattab Law Firm, we are committed to being a trusted strategic legal partner, meeting our clients' needs efficiently and professionally by providing comprehensive, high-quality legal services.")}}</p>
            </div>
            <div class="col-md-4 value-box">
                <i class="fas fa-handshake"></i>
                <h4>{{__("Core Values")}}</h4>
                <ul>
                    <li>✔ {{__("Integrity & Honesty")}}</li>
                    <li>✔ {{__("Professionalism")}}</li>
                    <li>✔ {{__("Client Confidentiality")}}</li>
                    <li>✔ {{__("Clarity and Transparency")}}</li>
                </ul>
            </div>
        </div>
</div>
</div>
        </div>
    </section>


    <!-- About Us End -->

    <!-- footer_start -->
    <div class="footer-dark">
    <footer>
        <div class="container-fluid" id="container-footer">
            <div class="row">
                <div class="col-12 col-md-4 item">
                    <h3>{{__("Address")}}</h3>
                    <div class="contactInfo">
                    <p>
                        <i id="footer-i" class="fas fa-map-marker-alt"></i> {{__("Jordan - Amman - Hashim Khair Street - Building 79")}}</p>
                        <p><i id="footer-i" class="fas fa-phone-alt"></i> <a href="tel:+962795534658">{{__("00962-79-5534658")}}</a></p>
                        <p><i id="footer-i" class="fas fa-envelope"></i> <a href="mailto:hhattablawfirm@gmail.com">{{__("hhattablawfirm@gmail.com")}}</a>
                    </p>
                    </div>
                </div>
                <div class="col-12 col-md-4 item">
                    <h3>{{__("Practice Areas")}}</h3>
                    <div class="practiceArea">
                        <ul>
                            <li>{{__("Litigation and Arbitration")}}</li>
                            <li>{{__("Tax and Customs services")}}</li>
                            <li>{{__("Intellectual property")}}</li>
                            <li>{{__("Family and Inheritance")}}</li>
                            <li>{{__("Citizenship, Residency and Investment")}}</li>
                            <li>{{__("Organization and Association")}}</li>
                            <li>{{__("Specialized Legal Services")}}</li>
                        </ul>
                    </div>
                </div>
                <div class="col-12 col-md-4 item text">
                    <h3>{{__("Al-Hattab attorneys")}}</h3>
                    <p>{{__("Recognized for delivering exceptional legal solutions that empower clients to navigate complex challenges with confidence and success.")}}</p>
                    <div class="social-media">
                        <a href="https://www.linkedin.com/company/al-hattab-attorneys-and-legal-consultants/about/?viewAsMember=true" target="_blank">
                            <i class="fa-brands fa-linkedin"></i> {{__("Follow us on LinkedIn")}}
                        </a>
                    </div>
                </div>
            </div>
            
            <div class="row">
                <div class="col-12 text-center copyright">
                    <h6>{{__("Copyright")}} <a href="{{ url('/') }}"><span>@thirtysix36</span></a> <?php echo date("Y"); ?></h6>
                </div>
            </div> 
        </div>
    </footer>
</div>
    <!-- footer_end -->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>


    <!-- JS here -->
    <script src="{{asset('home/js/vendor/modernizr-3.5.0.min.js')}}"></script>
    <script src="{{asset('home/js/vendor/jquery-1.12.4.min.js')}}"></script>
    <script src="{{asset('home/js/popper.min.js')}}"></script>
    <script src="{{asset('home/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('home/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('home/js/isotope.pkgd.min.js')}}"></script>
    <script src="{{asset('home/js/ajax-form.js')}}"></script>
    <script src="{{asset('home/js/waypoints.min.js')}}"></script>
    <script src="{{asset('home/js/jquery.counterup.min.js')}}"></script>
    <script src="{{asset('home/js/imagesloaded.pkgd.min.js')}}"></script>
    <script src="{{asset('home/js/scrollIt.js')}}"></script>
    <script src="{{asset('home/js/jquery.scrollUp.min.js')}}"></script>
    <script src="{{asset('home/js/wow.min.js')}}"></script>
    <script src="{{asset('home/js/nice-select.min.js')}}"></script>
    <script src="{{asset('home/js/gijgo.min.js')}}"></script>
    <script src="{{asset('home/js/jquery.slicknav.min.js')}}"></script>
    <script src="{{asset('home/js/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{asset('home/js/plugins.js')}}"></script>

    <!--contact js-->
    <script src="{{asset('home/js/contact.js')}}"></script>
    <script src="{{asset('home/js/jquery.ajaxchimp.min.js')}}"></script>
    <script src="{{asset('home/js/jquery.form.js')}}"></script>
    <script src="{{asset('home/js/jquery.validate.min.js')}}"></script>
    <script src="{{asset('home/js/mail-script.js')}}"></script>

    <script src="{{asset('home/js/main.js')}}"></script>

    <script>
            $('#datepicker').datepicker({
                iconsLibrary: 'fontawesome',
            });
            $('#datepicker2').datepicker({
                iconsLibrary: 'fontawesome',
                icons: {
                 rightIcon: '<span class="fa fa-caret-down"></span>'
             }
    
            });
            var timepicker = $('#timepicker').timepicker({
             format: 'HH.MM'
         });

         
        </script>
</body>

</html>