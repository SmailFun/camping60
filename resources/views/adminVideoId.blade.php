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
                                        <h4>Текст поверх видео</h4>
                                    </div>
                                </div>

                                <div class="widget-content widget-content-area">

                                    <div class="row">
                                        <div class="col-lg-6 col-12 mx-auto">
                                            <form method="POST" id="asd" name="asd"
                                                  action="{{ route('videoup',$data->id)}}">
                                                @csrf
                                                <div class="form-group">
                                                    <label for="t-text" class="sr-only">Text</label>
                                                    <input form="asd" id="t-text" type="text" name="textUp"
                                                           value="{{ $data->textUp }}" class="form-control" required>
                                                </div>
                                            </form>
                                        </div>
                                    </div>


                                    <div class="widget-content widget-content-area">

                                        <div class="form-group mb-4 mt-3">
                                            <div class="widget-header">
                                                <div class="row">
                                                    <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                                        <h4>Изменить видео</h4>
                                                    </div>
                                                </div>

                                                <video width="250" height="200" autoplay>
                                                    <source src="{{asset('storage/'.$data->video)}}" type='video/webm; codecs="vp8, vorbis"'></source>
                                                </video>

                                                <input form="asd" type="file" name="video" class="form-control-file" id="exampleFormControlFile1" >
                                            </div>
                                        </div>
                                        <button type="submit" class="mt-4 mb-4 btn btn-primary" form="asd"> отправить
                                        </button>
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
