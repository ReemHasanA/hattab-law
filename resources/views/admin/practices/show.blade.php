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

    <link rel="stylesheet" href="{{asset('home/css/show.css')}}">


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

    <style>
    


</style>
 
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
                                <img id="LawLogo" src="{{ asset('img/homePage/logo.png') }}" alt="">
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
   
    


    <div class="detail-container">
    <!-- Display the Practice Name -->
    <h1>{{ app()->getLocale() == 'ar' ? $practice1->name_ar : $practice1->name_en }}</h1>

    <!-- Display the Image -->
    @if ($practice1->photo)
        <img src="{{ asset('images/' . $practice1->photo) }}" alt="{{ app()->getLocale() == 'ar' ? $practice1->name_ar : $practice1->name_en }}" class="detail-image">
    @else
        <img src="{{ asset('images/default-placeholder.png') }}" alt="No Image Available" class="detail-image">
    @endif

    <!-- Display the Description -->
    <div class="detail-description">
    {!! app()->getLocale() == 'ar' ? $practice1->description_ar : $practice1->description_en !!}
    </div>
</div>

@endsection