@extends('layouts.appMain')

@section('tittle')
    Campig60
@endsection
@section('contentMain')
    <div>

        @include('inc.main.sliderMainPage')
        @include('inc.main.animatedText')
        @include('inc.main.textWithWomen')
        @include('inc.main.video')
{{--        @include('inc.main.news')--}}
        @include('inc.main.showplace')
        @include('inc.main.aboutCompanyMain')
        @include('inc.main.modelProcess')
    </div>
@endsection
