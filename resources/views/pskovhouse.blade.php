@extends('layouts.appMainHouse')

@section('tittle')
    Pskovhouse60
@endsection
@section('contentHouse')
    <div>

        @include('inc.pskovhouse.sliderMainPage')
        @include('inc.pskovhouse.animatedText')
        @include('inc.pskovhouse.textWithWomen')
        @include('inc.pskovhouse.video')
{{--        @include('inc.main.news')--}}
        @include('inc.pskovhouse.showplace')
        @include('inc.pskovhouse.aboutCompanyMain')
        @include('inc.pskovhouse.modelProcess')
    </div>
@endsection
