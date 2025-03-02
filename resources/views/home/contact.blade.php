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
    <link rel="stylesheet" href="{{asset('home/css/team.css')}}">
    <link rel="stylesheet" href="{{asset('home/css/responsive.css')}}">
    <link rel="stylesheet" href="{{asset('home/css/practice.css')}}">

    <link rel="stylesheet" href="{{asset('home/css/contact.css')}}">
   

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=EB+Garamond:ital,wght@0,400..800;1,400..800&display=swap" rel="stylesheet" >
    
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <!-- FontAwesome 6 Free -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">


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
    
        <div class="contact_us_6">
  <div class="responsive-container-block container">
    <form class="form-box">
      <div class="container-block form-wrapper">
        <div class="mob-text">
          <p class="text-blk contactus-head">
            {{__("Get in Touch")}}
          </p>
        </div>
        <div class="responsive-container-block" id="i2cbk">
          <div class="responsive-cell-block wk-tab-12 wk-mobile-12 wk-desk-12 wk-ipadp-12" id="i10mt-3">
            <p class="text-blk input-title">
              {{__("Name")}}
            </p>
            <input class="input" id="ijowk-3" name="FirstName" placeholder="{{__('Please enter your name...')}}">
          </div>
          <div class="responsive-cell-block wk-tab-12 wk-mobile-12 wk-desk-12 wk-ipadp-12" id="ip1yp">
            <p class="text-blk input-title">
              {{__("Email")}}
            </p>
            <input class="input" id="ipmgh-3" name="Email" placeholder="{{__('Please enter your email...')}}">
          </div>
          <div class="responsive-cell-block wk-tab-12 wk-mobile-12 wk-desk-12 wk-ipadp-12" id="ih9wi">
            <p class="text-blk input-title">
              {{__("Phone Number")}}
            </p>
            <input class="input" id="imgis-3" name="PhoneNumber" placeholder="{{__('Please enter your phone number...')}}">
          </div>
          <div class="responsive-cell-block wk-tab-12 wk-mobile-12 wk-desk-12 wk-ipadp-12" id="i634i-3">
            <p class="text-blk input-title">
              {{__("Message")}}
            </p>
            <textarea class="textinput" id="i5vyy-3" placeholder="{{__('Type your message here...')}}"></textarea>
          </div>
        </div>
        <button class="submit-btn" id="w-c-s-bgc_p-1-dm-id-2">
          {{__("Submit")}}
        </button>
      </div>
    </form>
    <div class="responsive-cell-block wk-desk-7 wk-ipadp-12 wk-tab-12 wk-mobile-12" id="i772w">
      <div class="map-part">
        <div class="logo-img">
          <a href="{{ url('/') }}">
            <img id="LawLogo" src="{{ asset('img/homePage/lawLogo.png') }}" alt="">
          </a>
        </div>

        <!-- Embedded Google Map -->
        <div class="map-container" >
          <iframe 
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d108319.84356074348!2d35.841605270888245!3d31.961029331254768!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x151b5f96de2007e9%3A0xad7d56c9879b63fd!2sTalal%20Al%20Hattab%20Law%20Firm!5e0!3m2!1sen!2sjo!4v1739799968753!5m2!1sen!2sjo" 
            width="100%" 
            height="100%" 
            style="border:0;" 
            allowfullscreen 
            loading="lazy" 
            referrerpolicy="no-referrer-when-downgrade">
          </iframe>
        </div>

        
        <!-- Contact Info Section -->
        <div class="contact-info">
          <p><i class="fas fa-map-marker-alt"></i>{{__("Jordan - Amman - Hashim Khair Street - Building 79")}}</p>
          <p><i class="fas fa-phone-alt"></i> <a href="tel:+962795534658">{{__("00962-79-5534658")}}</a></p>
          <p><i class="fas fa-envelope"></i> <a href="mailto:hhattablawfirm@gmail.com">{{__("hhattablawfirm@gmail.com")}}</a></p>
        </div>

      </div>
    </div>
  </div>
</div>
        

   
                
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