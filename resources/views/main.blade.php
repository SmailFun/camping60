@extends('layouts.appMain')

@section('tittle')
    Branko
@endsection
@section('contentMain')
    <div>

        @include('inc.main.sliderMainPage')
        @include('inc.main.animatedText')
        @include('inc.main.textWithWomen')
        <div class="light-wrapper">
            @include('inc.main.photoGalery')
        </div>
        @include('inc.main.video')
        @include('inc.main.news')
        @include('inc.main.aboutCompanyMain')
        @include('inc.main.modelProcess')
    </div>
@endsection
