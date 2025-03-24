@extends('layouts.main') 

@section('body')
    <!-- bradcam_area_start  -->
    <div class="bradcam_area">
        <div class="bradcam_inner bradcam_bg d-flex align-items-center">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="bradcam_text text-center">
                            <h3>{{__("Our Team")}}</h3>
                            <h1>{{__("Dedication. Expertise. Passion.")}}</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @php
    $locale = session('locale', 'en');
    @endphp 

    <section class="team-section">
        <!-- <h1 class="text-center">Our Team</h1> -->
        <div class="team-container">
            @foreach ($teamMembers as $member)
            <div class="team-card">
                <div class="team-image">
                    <img 
                        src="{{ asset('images/team/' . $member->photo) }}" 
                        alt="{{ $locale === 'en' ? $member->name_en : $member->name_ar }}"
                        loading="lazy"
                    >
                </div>

                <div class="team-info">
                    <h3 class="member-name">
                        {{ $locale === 'en' ? $member->name_en : $member->name_ar }}
                    </h3>
                    <p class="position">
                        {{ $locale === 'en' ? $member->position_en : $member->position_ar }}
                    </p>
                    <p class="bio">
                        {{ $locale === 'en' ? $member->bio_en : $member->bio_ar }}
                    </p>
                </div>
            </div>
            @endforeach
        </div>
    </section>

@endsection