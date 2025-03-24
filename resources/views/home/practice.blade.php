@extends('layouts.main') 

@section('body')
   

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
   
@endsection