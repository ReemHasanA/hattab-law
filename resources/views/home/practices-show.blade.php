
@extends('layouts.main') 

@section('style')
<link rel="stylesheet" href="{{asset('home/css/show.css')}}"><!doctype html>
@endsection

@section('body')

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