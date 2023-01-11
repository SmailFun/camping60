@extends('layouts.appMain')

@section('tittle') Branko @endsection
@section('contentMain')
<div>

    @include('inc.sliderMainPage')
    @include('inc.animatedText')
    @include('inc.textWithWomen')
    <div class="light-wrapper">
    @include('inc.photoGalery')
    </div>
    @include('inc.video')
    @include('inc.news')
    @include('inc.aboutCompanyMain')
    @include('inc.modelProcess')
</div>
@endsection
