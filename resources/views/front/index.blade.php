@extends('front.layouts.master')
@section('content')
    @include('front.components.slider')
    <div class="container">
        @include('front.components.services')
        @include('front.components.about')
               <!-- تواصلوا معنا الان Section -->
               <div class="mb-4">
                <div class="">
                    {!! $contact_section->description  !!}
                </div>
                <div class="d-flex justify-content-center text-white">
                    <a href="{{route('front.contact')}}">
                        <button class="btn sliderBtn">{{$contact_section->title}}</button>
                    </a>
                </div>
            </div>
    </div>
@endsection
