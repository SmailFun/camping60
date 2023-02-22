@extends('layouts.appAdmin')
@section('content')

    <div id="content" class="main-content">
        <div class="container">

            <div class="container">

                <div class="row layout-top-spacing">
                    <div id="basic" class="col-lg-12 layout-spacing">
                        <div class="statbox widget box box-shadow">
                            <div class="widget-header">
                                <div class="row">
                                    <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                        <h4>Название товара</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="widget-content widget-content-area">
                                <div class="row">
                                    <div class="col-lg-6 col-12 mx-auto">
                                        <form method="POST" id="asd" name="asd" action="{{ route('tovup',$data->id)}}"
                                              enctype="multipart/form-data">
                                            @csrf
                                            <div class="form-group">
                                                <label for="t-text" class="sr-only">Text</label>
                                                <input form="asd" id="t-text" type="text" name="cat"
                                                       value="{{ $data->cat }}" class="form-control" required>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>


                            <div class="row layout-top-spacing">

                                <div id="basic" class="col-lg-12 layout-spacing">

                                    <div class="widget-header">
                                        <div class="row">
                                            <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                                <h4>Кол-во товара</h4>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="widget-content widget-content-area">

                                        <div class="row">
                                            <div class="col-lg-6 col-12 mx-auto">

                                                <div class="form-group">

                                                    <label for="t-text" class="sr-only">Text</label>
                                                    <input form="asd" id="t-text" type="text" name="count"
                                                           value="{{ $data->count }}" class="form-control" required>

                                                </div>

                                            </div>
                                        </div>

                                    </div>

                                    <div id="basic" class="col-lg-12 layout-spacing">

                                        <div class="widget-header">
                                            <div class="row">
                                                <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                                    <h4>Цена товара</h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="widget-content widget-content-area">

                                            <div class="row">
                                                <div class="col-lg-6 col-12 mx-auto">

                                                    <div class="form-group">

                                                        <label for="t-text" class="sr-only">Text</label>
                                                        <input form="asd" id="t-text" type="text" name="sale"
                                                               value="{{$data->sale}}" class="form-control" required>

                                                    </div>

                                                </div>

                                            </div>
                                            <a href="{{route('tovup', $data->id)}}" ><button type="submit" class="mt-4 mb-4 btn btn-primary" form="asd" > Изменить</button></a>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

        </div>

@endsection
@section('style')

@endsection

@section('script')

@endsection
