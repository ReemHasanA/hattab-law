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

    <!-- FontAwesome 6 Free -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=EB+Garamond:ital,wght@0,400..800;1,400..800&display=swap" rel="stylesheet" async>

    
    @if (app()->getLocale() == 'ar')
    <link rel="stylesheet" href="{{ asset('home/css/arabic.css') }}">
    @endif


    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous" ></script>
    
   

    <!-- Bootstrap JS (Popper.js included) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" ></script>

    

    
   
    
</head>

<body>
    <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->

     <!-- header-start -->
   <header>
    <div class="header-area">
        <div id="sticky-header" class="main-header-area">
            <div class="container-fluid p-0">
                <div class="row align-items-center justify-content-between no-gutters">
                    <div class="col-xl-2 col-lg-2">
                        <div class="logo-img">
                            <a href="{{ url('/') }}">
                                <img id="LawLogo" src="{{ asset('img/homePage/lawLogo.png') }}" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="col-xl-7 col-lg-8">
                            <div class="main-menu  d-none d-lg-block">
                                <nav>
                                <ul id="navigation">
                                        <li><a class="active" href="{{url('/')}}">{{__("Home")}}</a></li>
                                        <li><a href="{{url('about')}}">{{__("About")}}</a></li>

                                        <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle custom-dropdown-toggle" href="{{url('practice')}}" id="practiceDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        {{ __("Practice Areas") }}
                                    </a>
                                    <ul class="dropdown-menu custom-dropdown-menu" aria-labelledby="practiceDropdown">
                                        @foreach ($practices as $practice)
                                            <li>
                                                <a class="dropdown-item custom-dropdown-item" href="{{ route('practices.show', $practice->id) }}">
                                                    {{ $practice->translated_name }}
                                                </a>
                                            </li>
                                        @endforeach
                                    </ul>
                                </li>




                                        <li><a href="{{url('team')}}">{{__("Our Team")}}</a></li>
                                        <li><a href="{{url('contact')}}">{{__("Contact")}}</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    <!-- <div class="col-xl-3 col-lg-2 d-flex justify-content-end align-items-center"> -->
                        <!-- Language Switcher -->
                        <!-- <div class="language-switcher">
                        <form id="lang-form" action="{{ url('/set-language') }}" method="POST">
                            @csrf
                            <input type="hidden" name="language" id="language-input" value="{{ session('locale', 'EN') }}">
                            <button type="submit" class="lang-toggle">
                                {{ session('locale', 'EN') === 'en' ? ' عربي' :'  English' }}
                            </button>
                        </form>
                         </div>
                    </div> -->

                    <div class="wrapper">
                    <div class="lang-selector">
                        <button class="lang-btn">{{__("Language")}} <i class="fas fa-angle-down"></i></button>
                        <ul class="lang-menu">
                            <li><a href="{{ url('lang/en') }}">{{__("English")}}</a></li>
                            <li><a href="{{ url('lang/ar') }}">{{__("Arabic")}}</a></li>
                        </ul>
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
   

   <!-- practice_area_start -->
   <div style="width: 1085px;" class="container">
    <h1 style="font-weight: 700; margin-top: 54px;" class="text-center text-gold mb-5">{{__("Our Practice Areas")}}</h1>
    
    @if($practices->isEmpty())
    <p class="text-center text-muted">{{__("No practice areas available.")}}</p>
@else
    <div class="row">
        @foreach ($practices as $practice)
            <div class="col-md-6 mb-4">
                <div class="card border-0 shadow-lg h-100 practice-card">
                    <div class="image-container">
                        <img src="{{ asset('images/' . $practice->photo) }}" alt="{{ $practice->name }}" class="card-img-top rounded-top">
                    </div>
                    <div class="card-body text-center">
                        <h4 class="card-title text-dark">{{ $practice->translated_name }}</h4>
                        <p class="card-text text-muted">{{ Str::limit($practice->description, 100) }}</p>
                    </div>
                    <div class="card-footer text-center border-0 bg-transparent">
                        <a href="{{ route('practices.show', $practice->id) }}" class="btn btn-outline-dark rounded-pill">{{__("Read More")}}</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endif
</div>
    <!-- practice_area_end -->

    
   

   

     <!-- footer_start -->
    <div class="footer-dark">
    <footer>
        <div class="container-fluid" id="container-footer">
            <div class="row">
                <div class="col-12 col-md-4 item">
                    <h3>{{__("Address")}}</h3>
                    <div class="contactInfo">
                        <p>
                            <i style="margin-right: 10px;" class="fas fa-map-marker-alt"></i> {{__("Jordan - Amman - Hashim Khair Street - Building 79")}}</p>
                        <p><i class="fas fa-phone-alt"></i> <a href="tel:+962795534658">{{__("00962-79-5534658")}}</a></p>
                        <p><i class="fas fa-envelope"></i> <a href="mailto:hhattablawfirm@gmail.com">{{__("hhattablawfirm@gmail.com")}}</a></p>
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
                    <h3>{{__("Hattab Law Firm")}}</h3>
                    <p>{{__("A legal organization with deep family roots spanning three generations of dedication and excellence in the field of law.")}}</p>
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

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js" ></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js" ></script>


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

        // Get all Learn More buttons
    


            $('#datepicker').datepicker({
                iconsLibrary: 'fontawesome',
                // disableDaysOfWeek: [0, 0],
            //     icons: {
            //      rightIcon: '<span class="fa fa-caret-down"></span>'
            //  }
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