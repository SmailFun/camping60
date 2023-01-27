@extends('layouts.appAdmin')
@section('content')

    <div id="content" class="main-content">

        <div class="container">

            <div class="row layout-top-spacing">

                <div id="basic" class="col-lg-12 layout-spacing">
                    <div class="statbox widget box box-shadow">

                        <form method="POST" id="a1" name="a1" action="{{ route('galeryup',$data->id) }}"
                              enctype="multipart/form-data">
                        </form>
                        <div id="fs2Tagging" class="col-lg-12 layout-spacing">
                            <div class="widget-header">


                                <div class="container">

                                    <div class="row layout-top-spacing">

                                        <div id="basic" class="col-lg-12 layout-spacing">


                                            <div class="form-group mb-4 mt-3">
                                                <div class="widget-header">
                                                    <div class="row">
                                                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                                            <h3>Изменить фотографию</h3>
                                                        </div>

                                                        <input form="a1" type="file" name="photo"
                                                               class="form-control-file" id="exampleFormControlFile1">
                                                    </div>

                                                </div>
                                            </div>

                                            <img width="250" height="200"
                                                 src="{{asset('storage/'.$data->photo)}}">

                                            <div class="row">
                                                <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                                    <h4>Выбрать категорию</h4>
                                                </div>
                                            </div>
                                        </div>

                                        @csrf
                                        <div class="widget-content widget-content-area">

                                            <select class="js-example-basic-multiple" name="cat_id" multiple="multiple"
                                                    form="a1">
                                                @foreach($categories as $el)
                                                    <option value="{{ $el-> id }}">
                                                        {{ $el-> category }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="mt-4 mb-4 btn btn-primary" form="a1"> отправить</button>
                        </div>


                        @endsection
                        @section('style')
                            <link href={{asset("styleB/bootstrap/css/bootstrap.min.css")}} rel="stylesheet"
                                  type="text/css"/>
                            <link href={{asset("assets/css/plugins.css")}} rel="stylesheet" type="text/css"/>

                            <link href={{asset("styleB/assets/css/scrollspyNav.css")}} rel="stylesheet"
                                  type="text/css"/>
                            <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700" rel="stylesheet">
                            <link rel="stylesheet" type="text/css"
                                  href={{asset("styleB/plugins/select2/select2.min.css")}}>

                        @endsection

                        @section('script')
                            <script src={{asset("styleB/assets/js/libs/jquery-3.1.1.min.js")}}></script>
                            <script src={{asset("styleB/bootstrap/js/popper.min.js")}}></script>
                            <script src={{asset("styleB/bootstrap/js/bootstrap.min.js")}}></script>
                            <script src={{asset("styleB/plugins/perfect-scrollbar/perfect-scrollbar.min.js")}}></script>
                            <script src={{asset("styleB/assets/js/app.js")}}></script>
                            <script src={{asset("styleB/plugins/highlight/highlight.pack.js")}}></script>
                            <script src={{asset("styleB/assets/js/custom.js")}}></script>


                            <script src={{asset("styleB/assets/js/scrollspyNav.js")}}></script>

                            <script src={{asset("styleB/plugins/select2/select2.min.js")}}></script>
                            <script src={{asset("styleB/plugins/select2/custom-select2.js")}}></script>

                            <script>
                                $(document).ready(function () {
                                    App.init();
                                });
                            </script>
                            <script>
                                var ss = $(".basic").select2({
                                    tags: true,
                                });
                            </script>
                            <script>
                                $(document).ready(function () {
                                    $('.js-example-basic-multiple').select2();
                                });
                            </script>
@endsection
