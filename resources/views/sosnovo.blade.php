@extends('layouts.appMain2')

@section('tittle')
    Campig60
@endsection
@section('contentSosnovo')
    <div>

        @include('inc.sosnovo.sliderMainPage')
        @include('inc.sosnovo.animatedText')
        @include('inc.sosnovo.textWithWomen')
        @include('inc.sosnovo.video')
{{--        @include('inc.main.news')--}}
        @include('inc.sosnovo.showplace')
        @include('inc.sosnovo.aboutCompanyMain')
        @include('inc.sosnovo.modelProcess')
    </div>
@endsection
