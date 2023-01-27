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
                                        <h4>Заголовок</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="widget-content widget-content-area">

                                <div class="row">
                                    <div class="col-lg-6 col-12 mx-auto">
                                        <form method="post" id="asd" name="asd" action="{{ route('excurtionup', $data->id) }}" enctype="multipart/form-data" >
                                            @csrf
                                            <div class="form-group">
                                                <label for="t-text" class="sr-only">Text</label>
                                                <input form="asd" id="t-text" type="text" name="textUp" value="{{ $data->textUp }}" class="form-control" required>
                                            </div>
                                        </form>
                                    </div>
                                </div>

                            </div>
                        </div>


                        <div class="row layout-top-spacing">

                            <div id="basic" class="col-lg-12 layout-spacing">
                                <div class="statbox widget box box-shadow">
                                    <div class="widget-header">
                                        <div class="row">
                                            <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                                <h4>Подзаголовок</h4>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="widget-content widget-content-area">

                                        <div class="row">
                                            <div class="col-lg-6 col-12 mx-auto">

                                                <div class="form-group">

                                                    <label for="t-text" class="sr-only">Text</label>
                                                    <input form="asd" id="t-text" type="text" name="textDown"  value="{{ $data->textDown }}"  class="form-control" required>

                                                </div>

                                            </div>
                                        </div>


                                            <div class="widget-header">
                                                <div class="row">
                                                    <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                                        <h4>Изменить фоторафию </h4>
                                                        <img width="250" height="200" src="{{asset('storage/'.$data->photo)}}">
                                                    </div>
                                                </div>
                                            </div>
                                            <input form="asd" type="file" name="photo" class="form-control-file" id="exampleFormControlFile1">
                            </div>

                        </div>




                                    <a href="{{route('slideridup', $data->id)}}" ><button type="submit" class="mt-4 mb-4 btn btn-primary" form="asd" > Изменить</button></a>
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