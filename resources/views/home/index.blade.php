@extends('layouts.main') 

@section('body')
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
                                
                                <a href="{{url('contact')}}" class="boxed-btn4 ">{{__("Request a consultation")}}</a>
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
                        <h2 class="section_title"><span>{{__("ABOUT US")}}</span></h2>
                        <p class="about_text">
                        {{__("Al Hattab Law Firm is a legal organization with deep family roots spanning three generations of dedication and excellence in the field of law. Founded by Bashir Al Hattab, one of the leading lawyers in Jordan and Palestine, who held bar number 20, he established a distinguished professional approach that has allowed his family's legal legacy to endure for generations, inspiring them to continue their legal careers.")}}
                        </p>
                        <a href="{{url('about')}}" class="about-btn ">{{__("Read More")}}</a>
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
                <a href="{{url('practices',1)}}" class="col-xl-3 col-md-6 col-sm-12">
                    <div class="single_practice">
                        <div class="practice_image">
                            <img src="img/practice/1.png" alt="">
                        </div>
                        <div class="practice_hover text-center">
                            <div class="hover_inner">
                                <i class="flaticon-case"></i>
                                <h3>{{__("Litigation and Arbitration")}}</h3>
                                <p>{{__("Al Hattab Law Firm is distinguished by its specialized team in various fields of arbitration and litigation highly trusted by clients as arbitrators and mediators.")}}</p>
                                
                            </div>
                        </div>
                    </div>
                </a>

                <a href="{{url('practices',2)}}" class="col-xl-3 col-md-6 col-sm-12">
                    <div class="single_practice">
                        <div class="practice_image">
                            <img src="img/practice/2.png" alt="">
                        </div>
                        <div class="practice_hover text-center">
                            <div class="hover_inner">
                                <i class="flaticon-courthouse"></i>
                                <h3>{{__("Tax and Customs services")}}</h3>
                                <p>{{__("Al Hattab Law Firm provides a comprehensive range of tax and customs services to assist clients in complying with both local and foreign legislation.")}}</p>
                                
                            </div>
                        </div>
                    </div>
                </a>

                <a href="{{url('practices',3)}}" class="col-xl-3 col-md-6 col-sm-12">
                    <div class="single_practice">
                        <div class="practice_image">
                            <img src="img/practice/3.png" alt="">
                        </div>
                        <div class="practice_hover text-center">
                            <div class="hover_inner">
                                <i class="flaticon-judge"></i>
                                <h3>{{__("Intellectual property")}}</h3>
                                <p>{{__("Al Hattab offers a wide range of services to ensure the protection of the intellectual property (IP) rights of its clients and their creative businesses.")}}</p>
                               
                            </div>
                        </div>
                    </div>
                </a>

                <a href="{{url('practices',4)}}" class="col-xl-3 col-md-6 col-sm-12">
                    <div class="single_practice">
                        <div class="practice_image">
                            <img src="img/practice/4.png" alt="">
                        </div>
                        <div class="practice_hover text-center">
                            <div class="hover_inner">
                                <i class="flaticon-jury"></i>
                                <h3>{{__("Corporate")}}</h3>
                                <p>{{__("Our Corporate team provides comprehensive legal support to companies, from incorporation to the execution of their growth and expansion strategies.")}}</p>
                            </div>
                        </div>
                    </div>
                </a>

                <a href="{{url('practices',6)}}" class="col-xl-3 col-md-6 col-sm-12">
                    <div class="single_practice">
                        <div class="practice_image">
                            <img src="img/practice/4.png" alt="">
                        </div>
                        <div class="practice_hover text-center">
                            <div class="hover_inner">
                                <i class="flaticon-jury"></i>
                                <h3>{{__("Family and Inheritance")}}</h3>
                                <p>{{__("Al Hattab Law Firm has extensive experience in handling family and inheritance matters. We provide legal advice and representation in cases involving marriage, divorce,custody.")}}</p>
                               
                            </div>
                        </div>
                    </div>
                </a>

                <a href="{{url('practices',7)}}" class="col-xl-3 col-md-6 col-sm-12">
                    <div class="single_practice">
                        <div class="practice_image">
                            <img src="img/practice/4.png" alt="">
                        </div>
                        <div class="practice_hover text-center">
                            <div class="hover_inner">
                            <i class="flaticon-judge"></i>
                                <h3>{{__("Citizenship, Residency and Investment")}}</h3>
                                <p>{{__("Al Hattab Law Firm is characterized by its ability to deal with various cases and legal issues related to citizenship, residency and investment.")}}</p>
                                
                            </div>
                        </div>
                    </div>
                </a>

                <a href="{{url('practices',5)}}" class="col-xl-3 col-md-6 col-sm-12">
                    <div class="single_practice">
                        <div class="practice_image">
                            <img src="img/practice/4.png" alt="">
                        </div>
                        <div class="practice_hover text-center">
                            <div class="hover_inner">
                            <i class="flaticon-courthouse"></i>
                                <h3>{{__("Organization and Association")}}</h3>
                                <p>{{__("Al Hattab Law Firm, through its experienced team, offers comprehensive legal support to local and international organizations and associations across various sectors.")}}</p>
                                
                            </div>
                        </div>
                    </div>
                </a>

                <a href="{{url('practices',8)}}" class="col-xl-3 col-md-6 col-sm-12">
                    <div class="single_practice">
                        <div class="practice_image">
                            <img src="img/practice/4.png" alt="">
                        </div>
                        <div class="practice_hover text-center">
                            <div class="hover_inner">
                            <i class="flaticon-case"></i>
                                <h3>{{__("Specialized Legal Services")}}</h3>
                                <p>{{__("Al Hattab Law Firm, through its experienced team, offers extensive expertise in a range of specialized legal aspects. We can provide a number of specialized services.")}}</p>
                               
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
    <!-- practice_area_end -->


   
    <!-- Our Clients Section -->
    <section class="clients-section">
        <div class="container">
            <div class="section_title1 text-center">
            <div class="title-line"></div>
                <h3 class="clients-title">{{ __("Our Clients") }}</h3>
            <div class="title-line"></div>
            </div>
            <div class="owl-carousel clients-carousel">
                <div class="client-logo"><img src="{{ asset('img/clients/acdima.png') }}" alt="Client 1" style="margin-top: 8px;"></div>
                <div class="client-logo"><img src="{{ asset('img/clients/ak.png') }}" alt="Client 2"></div>
                <div class="client-logo"><img src="{{ asset('img/clients/gce.png') }}" alt="Client 3" style="margin-top: 8px;"></div>
                <div class="client-logo"><img src="{{ asset('img/clients/manara.png') }}" alt="Client 4" style="margin-top: 22px;"></div>
                <div class="client-logo"><img src="{{ asset('img/clients/micro.png') }}" alt="Client 5" style="margin-top: 26px;"></div>
                <div class="client-logo"><img src="{{ asset('img/clients/orient.png') }}" alt="Client 6"></div>
                <div class="client-logo"><img src="{{ asset('img/clients/techno.png') }}" alt="Client 7" style=" margin-top: 17px; width: 122%;margin-left: 101px;"></div>
                <div class="client-logo"><img src="{{ asset('img/clients/tesco1.jpg') }}" alt="Client 8" style="width:143.333px; transform: scale(1.3); "></div>
                <div class="client-logo"><img src="{{ asset('img/clients/gce1.png') }}" alt="Client 8"></div>
            </div>
        </div>
    </section>



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
                        <p>{{__("We provide a full range of legal services, combining expertise, dedication, and strategic solutions to meet every client's needs.")}}</p>
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
                        <p>{{__("We are committed to delivering comprehensive legal services with professionalism, transparency, and a results-driven approach.")}}</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection