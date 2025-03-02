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
    <link rel="preload" href="https://fonts.googleapis.com/css2?family=EB+Garamond:wght@400;800&display=swap" as="style" onload="this.onload=null;this.rel='stylesheet'">
     <noscript><link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=EB+Garamond:wght@400;800&display=swap"></noscript>

    
    @if (app()->getLocale() == 'ar')
    <link rel="stylesheet" href="{{ asset('home/css/arabic.css') }}">
    @endif


    <!-- <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous" ></script> -->
    
   

    <!-- Bootstrap JS (Popper.js included) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" ></script>

    

    
   
    
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
                                <img  id="LawLogo" src="{{ asset('img/homePage/lawLogo.png') }}"  alt="Law Logo">
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
                                        <a class="nav-link dropdown-toggle custom-dropdown-toggle" href="#" id="practiceDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            {{ __("Practice Areas") }}
                                        </a>
                                        <ul class="dropdown-menu custom-dropdown-menu" aria-labelledby="practiceDropdown">
                                            @foreach ($practices as $single_practice)
                                                <li>
                                                    <a class="dropdown-item custom-dropdown-item" href="{{ route('practices.show', $single_practice->id) }}">
                                                        {{ app()->getLocale() == 'ar' ? $single_practice->name_ar : $single_practice->name_en }}
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



    <!-- slider_area_start -->
    <div class="slider_area ">
        <div class="slider_area_inner slider_bg_1 d-flex align-items-center">
            <div class="container">
                <div class="row">
                    <div class="col-xl-7">
                        <div class="single_slider">
                            <div class="slider_text">
                                <h3>{{__("Your Trusted Legal Partners")}}<br>
                                <span>
                                    {{__("legal solutions tailored to your needs")}}</span>  </h3>
                                
                                <a href="{{url('contact')}}" class="boxed-btn4 ">{{__("Contact Us")}}</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- slider_area_end -->

    <!-- about_area _start  -->
    <div class="about_area">
    <div class="opacity_icon d-none d-lg-block">
        <i class="flaticon-balance"></i>
    </div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-8 col-lg-10">
                <div class="single_about_info text-center">
                    <h2 class="section_title">{{__("About")}} <span>{{__("Al Hattab Law Firm")}}</span></h2>
                    <p class="about_text">
                    {{__("Al Hattab Law Firm is a legal organization with deep family roots spanning three generations of dedication and excellence in the field of law. Founded by Bashir Al Hattab, one of the leading lawyers in Jordan and Palestine, who held bar number 20, he established a distinguished professional approach that has allowed his family's legal legacy to endure for generations, inspiring them to continue their legal careers.")}}
                    </p>
                   
                </div>
            </div>
        </div>
    </div>
</div>


    <!-- about_area _end -->

    <!-- practice_area_start -->
    <div class="practice_area">
        <div class="container-fluid p-0">
            <div class="row">
                <div class="col-xl-12">
                    <div class="section_title text-center mb-60">
                        <h3>{{__("Practice Areas")}}</h3>
                        <p>{{__("At Al Hattab Law Firm, we provide comprehensive legal counsel and tailored solutions across a diverse range of legal fields. Our team combines deep expertise, strategic thinking, and a commitment to justice to ensure the best outcomes for our clients.")}}</p>
                    </div>
                </div>
            </div>
            <div class="row no-gutters">

            <div class="col-xl-3 col-md-6 col-sm-12">
                    <div class="single_practice">
                        <div class="practice_image">
                            <img src="img/practice/1.png" alt="">
                        </div>
                        <div class="practice_hover text-center">
                            <div class="hover_inner">
                                <i class="flaticon-case"></i>
                                <h3>{{__("Litigation and Arbitration")}}</h3>
                                <p>{{__("Al Hattab Law Firm is distinguished by its specialized team in various fields of arbitration and litigation highly trusted by clients as arbitrators and mediators")}}</p>
                                
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-md-6 col-sm-12">
                    <div class="single_practice">
                        <div class="practice_image">
                            <img src="img/practice/2.png" alt="">
                        </div>
                        <div class="practice_hover text-center">
                            <div class="hover_inner">
                                <i class="flaticon-courthouse"></i>
                                <h3>{{__("Tax and Customs services")}}</h3>
                                <p>{{__("Al Hattab Law Firm provides a comprehensive range of tax and customs services to assist clients in complying with both local and foreign legislation")}}</p>
                                
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-md-6 col-sm-12">
                    <div class="single_practice">
                        <div class="practice_image">
                            <img src="img/practice/3.png" alt="">
                        </div>
                        <div class="practice_hover text-center">
                            <div class="hover_inner">
                                <i class="flaticon-judge"></i>
                                <h3>{{__("Intellectual property")}}</h3>
                                <p>{{__("Al Hattab offers a wide range of services to ensure the protection of the intellectual property (IP) rights of its clients and their creative businesses")}}</p>
                               
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-md-6 col-sm-12">
                    <div class="single_practice">
                        <div class="practice_image">
                            <img src="img/practice/4.png" alt="">
                        </div>
                        <div class="practice_hover text-center">
                            <div class="hover_inner">
                                <i class="flaticon-jury"></i>
                                <h3>{{__("Corporate")}}</h3>
                                <p>{{__("Our Corporate team provides comprehensive legal support to companies, from incorporation to the execution of their growth and expansion strategies")}}</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-md-6 col-sm-12">
                    <div class="single_practice">
                        <div class="practice_image">
                            <img src="img/practice/4.png" alt="">
                        </div>
                        <div class="practice_hover text-center">
                            <div class="hover_inner">
                                <i class="flaticon-jury"></i>
                                <h3>{{__("Family and Inheritance")}}</h3>
                                <p>{{__("Al Hattab Law Firm has extensive experience in handling family and inheritance matters. We provide legal advice and representation in cases involving marriage, divorce,custody")}}</p>
                               
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-md-6 col-sm-12">
                    <div class="single_practice">
                        <div class="practice_image">
                            <img src="img/practice/4.png" alt="">
                        </div>
                        <div class="practice_hover text-center">
                            <div class="hover_inner">
                            <i class="flaticon-judge"></i>
                                <h3>{{__("Citizenship, Residency and Investment")}}</h3>
                                <p>{{__("Al Hattab Law Firm is characterized by its ability to deal with various cases and legal issues related to citizenship, residency")}}</p>
                                
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-md-6 col-sm-12">
                    <div class="single_practice">
                        <div class="practice_image">
                            <img src="img/practice/4.png" alt="">
                        </div>
                        <div class="practice_hover text-center">
                            <div class="hover_inner">
                            <i class="flaticon-courthouse"></i>
                                <h3>{{__("Organization and Association")}}</h3>
                                <p>{{__("Al Hattab Law Firm, through its experienced team, offers comprehensive legal support to local and international organizations and associations across various sectors")}}</p>
                                
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-md-6 col-sm-12">
                    <div class="single_practice">
                        <div class="practice_image">
                            <img src="img/practice/4.png" alt="">
                        </div>
                        <div class="practice_hover text-center">
                            <div class="hover_inner">
                            <i class="flaticon-case"></i>
                                <h3>{{__("Specialized Legal Services")}}</h3>
                                <p>{{__("Al Hattab Law Firm, through its experienced team, offers extensive expertise in a range of specialized legal aspects. We can provide a number of specialized services")}}</p>
                               
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>
    <!-- practice_area_end -->

    
    <!-- Elegant Services Section -->
    <section class="services-section">
    <div class="container">
        <h1 class="service-title">{{__("With Over 30 Years of Legal Experience")}}</h1>
        <div class="services-grid">
            <!-- Service Item 1 -->
            <div class="service-card">
                <div class="service-img">
                    <img src="{{ asset('img/homePage/law3.jpg') }}" alt="Comprehensive Services">
                </div>
                <div class="service-content">
                    <h3>{{__("Comprehensive Services")}}</h3>
                    <p>{{__("We offer a wide range of legal services, from divorce to child custody, ensuring the best guidance for you.")}}</p>
                </div>
            </div>

            <!-- Service Item 2 -->
            <div class="service-card">
                <div class="service-img">
                    <img src="{{ asset('img/homePage/law7.jpg') }}" alt="Personalized Approach" >
                </div>
                <div class="service-content">
                    <h3>{{__("Personalized Approach")}}</h3>
                    <p>{{__("Every case is unique, and we provide tailored legal solutions to ensure the best possible outcome for you.")}}</p>
                </div>
            </div>

            <!-- Service Item 3 -->
            <div class="service-card">
                <div class="service-img">
                    <img src="{{ asset('img/homePage/law8.jpg') }}" alt="Client Satisfaction">
                </div>
                <div class="service-content">
                    <h3>{{__("Client Satisfaction")}}</h3>
                    <p>{{__("We prioritize client satisfaction, delivering excellent legal services with professionalism and dedication.")}}</p>
                </div>
            </div>
        </div>
    </div>
</section>





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
                    <h6>{{__("Copyright")}} <a target="_blank" href="{{ url('https://www.thirtysix36.com/') }}"><span>@thirtysix36</span></a> <?php echo date("Y"); ?></h6>
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
    <!-- <script src="{{asset('home/js/jquery.form.js')}}"></script> -->
    <script src="{{asset('home/js/jquery.validate.min.js')}}"></script>
    <script src="{{asset('home/js/mail-script.js')}}"></script>

    <script src="{{asset('home/js/main.js')}}"></script>

    <script>
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