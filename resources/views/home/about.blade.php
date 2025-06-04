@extends('layouts.main') 

@section('body')
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
        </div>
    </section>


    <section class="abouts">
        <div class="values-section">  
            <div class="container">
            <div class="row">
                <div class="col-md-4 value-box">
                    <i class="fa fa-eye"></i>
                    <h4>{{__("Our Vision")}}</h4>
                    <p>{{__("To be the most trusted and innovative legal consultancy firm in Jordan and the region, recognized for delivering exceptional legal solutions that empower clients to navigate complex challenges with confidence and success.")}}</p>
                </div>
                <div class="col-md-4 value-box">
                    <i class="fa fa-balance-scale"></i>
                    <h4>{{__("Our Mission")}}</h4>
                    <p>{{__("At Al Hattab Law Firm, we are committed to being a trusted strategic legal partner, meeting our clients' needs efficiently and professionally by providing comprehensive, high-quality legal services.")}}</p>
                </div>
                <div class="col-md-4 value-box">
                    <i class="fa fa-handshake-o"></i>
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
    </section>

@endsection