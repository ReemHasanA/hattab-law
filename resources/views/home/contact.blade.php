@extends('layouts.main') 

@section('style')
<link rel="stylesheet" href="{{asset('home/css/contact.css')}}"><!doctype html>
@endsection

@section('body')
  <div class="contact_us_6">
  <div class="responsive-container-block container">
    <form class="form-box" action="{{ route('contact.store') }}" method="POST">
      @csrf
      <div class="container-block form-wrapper">
        @if (session('success'))
            <div class="success-message">
              <h2>{{ session('success') }}</h2>
            </div>
        @else
        <div class="mob-text">
          <p class="text-blk contactus-head">
            {{__("Request a consultation")}}
          </p>
        </div>
        <div class="responsive-container-block" id="i2cbk">
          <div class="responsive-cell-block wk-tab-12 wk-mobile-12 wk-desk-12 wk-ipadp-12" id="i10mt-3">
            <p class="text-blk input-title">
              {{__("Name")}}
            </p>
            <input type="text" class="input" id="ijowk-3" name="name" placeholder="{{__('Please enter your name...')}}" maxlength="100" value="{{ old('name') }}">
            @error('name')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
          </div>
          <div class="responsive-cell-block wk-tab-12 wk-mobile-12 wk-desk-12 wk-ipadp-12" id="ip1yp">
            <p class="text-blk input-title">
              {{__("Email")}}
            </p>
            <input type="email" class="input" id="ipmgh-3" name="email" placeholder="{{__('Please enter your email...')}}" maxlength="100" value="{{ old('email') }}">
            @error('email')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
          </div>
          <div class="responsive-cell-block wk-tab-12 wk-mobile-12 wk-desk-12 wk-ipadp-12" id="ih9wi">
            <p class="text-blk input-title">
              {{__("Phone Number")}}
            </p>
            <input type="text" class="input" id="imgis-3" name="phone_number" placeholder="{{__('Please enter your phone number...')}}" maxlength="20" value="{{ old('phone_number') }}">
            @error('phone_number')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
          </div>
          <div class="responsive-cell-block wk-tab-12 wk-mobile-12 wk-desk-12 wk-ipadp-12" id="i634i-3">
            <p class="text-blk input-title">
              {{__("Message")}}
            </p>
            <textarea class="textinput" id="i5vyy-3" name="message" placeholder="{{__('Type your message here...')}}">{{ old('message') }}</textarea>
            @error('message')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
          </div>
        </div>
        <button class="btn submit-btn" id="w-c-s-bgc_p-1-dm-id-2">
          {{__("Submit")}}
        </button>
        @endif
      </div>
    </form>
    <div class="responsive-cell-block wk-desk-7 wk-ipadp-12 wk-tab-12 wk-mobile-12" id="i772w">
      <div class="map-part">

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
          <p><i id="footer-i" class="fas fa-map-marker-alt"></i>{{__("Jordan - Amman - Hashim Khair Street - Building 79")}}</p>
          <p><i id="footer-i" class="fas fa-phone-alt"></i> <a href="tel:+962795534658">{{__("00962-79-5534658")}}</a></p>
          <p><i id="footer-i"  class="fas fa-envelope"></i> <a href="mailto:{{config('general.main_email')}}">{{config('general.main_email')}}</a></p>
        </div>

      </div>
    </div>
  </div>
</div>
        
@endsection