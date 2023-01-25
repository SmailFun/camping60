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

                            <div class="widget-content widget-content-area">

                                <div class="row">
                                    <div class="col-lg-6 col-12 mx-auto">
                                        <form method="post" id="asd" name="a1" action="{{ route('news') }}" >
                                            @csrf
                                            <div class="form-group">
                                                <label for="t-text" class="sr-only">Text</label>
                                                <input form="asd" id="t-text" type="text" name="textUp"  class="form-control" required>
                                            </div>
                                        </form>
                                    </div>
                                </div>


                        <div class="form-group mb-4">
                            <label for="exampleFormControlTextarea1">Текст новости</label>
                            <textarea form="asd" class="form-control" id="exampleFormControlTextarea1" name="textDown" rows="3"></textarea>

                        </div>

                                    <div class="row layout-top-spacing">

                                        <div class="form-group mb-4 mt-3">

                                                <div class="row">
                                                    <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                                        <h4>Загрузить фотографию</h4>
                                                    </div>
                                                </div>
                                            <input form="asd" type="file" name="photo" class="form-control-file" id="exampleFormControlFile1">
                                            </div>

                                        </div>
                                <button type="submit" class="mt-4 mb-4 btn btn-primary" form="asd"> отправить</button>
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
