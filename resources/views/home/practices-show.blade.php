
@extends('layouts.main') 

@section('style')
<link rel="stylesheet" href="{{asset('home/css/show.css')}}">
@endsection

@section('body')

<div class="detail-container">
    <!-- Display the Practice Name -->
    <h1>{{ $practice1->name }}</h1>

    <!-- Display the Image -->
    @if ($practice1->photo)
        <img src="{{ asset('images/' . $practice1->photo) }}" alt="{{ $practice1->name }}" class="detail-image">
    @else
        <img src="{{ asset('images/default-placeholder.png') }}" alt="No Image Available" class="detail-image">
    @endif

    <!-- Display the Description -->
    <div class="detail-description">
    {!! $practice1->description !!}
    </div>
</div>

@endsection