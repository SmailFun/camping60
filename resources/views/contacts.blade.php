@extends('layouts.appContact')

@section('tittle')
    Контакты
@endsection
@section('contentContact')

    @include('inc.contacts.map')
    @include('inc.contacts.form')

@endsection
