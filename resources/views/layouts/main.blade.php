<!doctype html>
<html lang="{{ app()->getLocale() }}" dir="{{ app()->getLocale() == 'ar' ? 'rtl' : 'ltr' }}">


<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Hattab Law Firm @yield('title', 'Hattab lawyer')</title>
    <link rel="canonical" href="{{url('/')}}"/>

    <meta property="og:title" content="@yield('title') | Hattab law Firm"/>
    <meta property="og:image" content="{{url('/img/homePage/logo.png')}}"/>
    <meta property="og:image:width" content="2500"/>
    <meta property="og:image:height" content="1330"/>
    <meta property="og:url" content="{{url('/')}}"/>
    <meta property="og:site_name" content="hattab"/>
    <meta property="og:type" content="website"/>
    <script type="application/ld+json">{"@context":"https://schema.org/","@type":"LocalBusiness","name":"Hattab Law","url":"{{url('/')}}","image":"{{url('img/homePage/logo.png')}}","address":{"@type":"PostalAddress","addressCountry":"JO","addressLocality":"Amman"}}</script>
    <link rel="alternate" href="{{url('/about')}}" type="application/rss+xml" title="hattab - RSS"/>
    <meta name="twitter:card" content="summary_large_image"/>
    <meta name="twitter:title" content="@yield('title') | Hattab Law Firm"/>
    <meta name="twitter:image" content="{{url('img/homePage/logo.png')}}"/>
    

    <meta name="description" content="legal organization with deep family roots spanning three generations of dedication and excellence in the field of law. Founded by Bashir Al Hattab, one of the leading lawyers in Jordan and Palestine, who held bar number 20, he established a distinguished professional approach that has allowed his family's legal legacy to endure for generations, inspiring them to continue their legal careers.">
    <meta name="keywords" content="Hattab Law, Legal Services, Jordan Law Firm, Family Law, Corporate Law, Criminal Law, Civil Law, Legal Consultancy, Amman Lawyers, Professional Legal Services, مكتب حطاب للمحاماة, مكتب محاماة, محامي في عمان, استشارات قانونية, قانون الأسرة, قانون الشركات, قانون جنائي, قانون مدني">
    <meta name="author" content="Hattab Law Firm">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" sizes="192x192" href="{{url('img/homePage/logo.png')}}" type="image/jpeg">

    <!-- CSS here -->
    <link rel="stylesheet" href="{{asset('home/css/bootstrap.min.css')}}">
    @if(app()->getLocale() == 'ar')
    <link rel="stylesheet" href="{{asset('home/css/bootstrap.rtl.min.css')}}">
    @endif
    <link rel="stylesheet" href="{{asset('home/OwlCarousel2/dist/assets/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{ asset('home/OwlCarousel2/dist/assets/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{asset('home/css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('home/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('home/css/themify-icons.css')}}">
    <link rel="stylesheet" href="{{asset('home/css/nice-select.css')}}">
    <link rel="stylesheet" href="{{asset('home/css/flaticon.css')}}">
    <link rel="stylesheet" href="{{asset('home/css/gijgo.css')}}">
    <link rel="stylesheet" href="{{asset('home/css/slicknav.css')}}">
    <link rel="stylesheet" href="{{asset('home/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('home/css/team.css')}}">
    <link rel="stylesheet" href="{{asset('home/css/responsive.css')}}">
    <link rel="stylesheet" href="{{asset('home/css/practice.css')}}">
    
    @yield('style')

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=EB+Garamond:ital,wght@0,400..800;1,400..800&display=swap" rel="stylesheet" >

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200..1000&display=swap" rel="stylesheet">


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
                                                        {{ $single_practice->name }}
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

                            <div class="col-lg-2 lang-selector">
                                @foreach(['en' => 'EN', 'ar' => 'AR'] as $locale => $label)
                                    <a href="{{ url('lang/'.$locale) }}" class="lang-btn {{ app()->getLocale() === $locale ? 'active-lang' : '' }}">{{ $label }}</a>
                                @endforeach
                            </div>
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
     
    @yield('body')
                
    <!-- footer_start -->
    <div class="footer-dark">
    <footer>
        <div class="container-fluid" id="container-footer">
            <div class="row">
                <div class="col-12 col-md-4 item">
                    <h3>{{__("Address")}}</h3>
                    <div class="contactInfo">
                        <p><i id="footer-i" class="fa fa-map-marker"></i> {{__("Jordan - Amman - Hashim Khair Street - Building 79")}}</p>
                        <p><i id="footer-i" class="fa fa-phone"></i> <a href="tel:+962795534658">00962-79-5534658</a></p>
                        <p><i id="footer-i" class="fa fa-envelope"></i> <a href="mailto:{{config('general.main_email')}}">{{config('general.main_email')}}</a></p>
                    </div>
                </div>
                <div class="col-12 col-md-4 item">
                    <h3>{{__("Practice Areas")}}</h3>
                    <div class="practiceArea">
                        <ul>
                            @foreach ($practices as $practice)
                            <li><a href="{{url('practices', $practice->id)}}">{{ $practice->name }}</a></li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <div class="col-12 col-md-4 item text">
                    <h3>{{__("Al-Hattab attorneys")}}</h3>
                    <p>{{__("Recognized for delivering exceptional legal solutions that empower clients to navigate complex challenges with confidence and success.")}}</p>
                    <div class="social-media">
                        <a href="https://www.linkedin.com/company/al-hattab-attorneys-and-legal-consultants/about/?viewAsMember=true" target="_blank">
                            <i class="fa fa-linkedin-square fs-3"></i>
                        </a>
                    </div>
                </div>
            </div>
            
            <div class="row">
                <div class="col-12 text-center copyright">
                    <h6>{{__("Copyright")}} <a href="{{ url('/') }}"><span>@thirtysix36</span></a> {{date("Y")}}</h6>
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
    {{-- <script src="{{asset('home/js/vendor/jquery-1.12.4.min.js')}}"></script>if i download it edit it  --}}
    <script src="{{asset('home/js/popper.min.js')}}"></script>
    {{-- <script src="{{asset('home/js/bootstrap.min.js')}}"></script> --}}
    <script src="{{asset('home/OwlCarousel2/dist/owl.carousel.min.js')}}"></script>
    {{-- <script src="{{asset('home/js/isotope.pkgd.min.js')}}"></script> --}}
    <script src="{{asset('home/js/ajax-form.js')}}"></script>
    <script src="{{asset('home/js/waypoints.min.js')}}"></script>
    <script src="{{asset('home/js/jquery.counterup.min.js')}}"></script>
    <script src="{{asset('home/js/imagesloaded.pkgd.min.js')}}"></script>
    <script src="{{asset('home/js/scrollIt.js')}}"></script>
    <script src="{{asset('home/js/jquery.scrollUp.min.js')}}"></script>
    <script src="{{asset('home/js/wow.min.js')}}"></script>
    <script src="{{asset('home/js/nice-select.min.js')}}"></script>
    {{-- <script src="{{asset('home/js/gijgo.min.js')}}"></script> --}}
    <script src="{{asset('home/js/jquery.slicknav.min.js')}}"></script>
    <script src="{{asset('home/js/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{asset('home/js/plugins.js')}}"></script>

    <!--contact js-->
    <script src="{{asset('home/js/contact.js')}}"></script>
    <script src="{{asset('home/js/jquery.ajaxchimp.min.js')}}"></script>
    {{-- <script src="{{asset('home/js/jquery.form.js')}}"></script> --}}
    <script src="{{asset('home/js/jquery.validate.min.js')}}"></script>
    <script src="{{asset('home/js/mail-script.js')}}"></script>

    <script src="{{asset('home/js/main.js')}}"></script>
    <script src="{{asset('home/js/custom.js')}}"></script>

</body>

</html>