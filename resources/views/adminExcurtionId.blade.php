@extends('layouts.appAdmin')
@section('content')

    <div id="content" class="main-content">
        <div class="container">

            <div class="container">
                <div class="mt-4  col-md-10 col-10 mx-auto row justify-content-center">
                    <h1>Редактирования плана</h1>
                </div>


                <div class="container ml-5 col-12-xl">

                    <div class="container">

                        <div id="navSection" data-spy="affix" class="nav  sidenav">
                            <div class="sidenav-content" style="margin-right: 8px">
                                <a href="#1" class="active nav-link">Заголовок</a>
                                <a href="#2" class="nav-link">Подзаголовок</a>
                                <a href="#3" class="nav-link">Загрузить фотографию</a>
                            </div>
                        </div>

                        <div class="row layout-top-spacing ">

                            <div class="statbox widget box box-shadow">

                                <div id="1" class="widget-header">
                                    <div class="row">
                                        <div class="mt-5 col-md-10 col-10 mx-auto">
                                            <h4>Заголовок</h4>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-8 col-12 mx-auto">
                                        <form method="post" id="asd" name="asd"
                                              action="{{ route('excurtionup', $data->id) }}"
                                              enctype="multipart/form-data">
                                            @csrf
                                            <div class="form-group">
                                                <label for="t-text" class="sr-only">Text</label>
                                                <input form="asd" id="t-text" type="text" name="textUp"
                                                       value="{{ $data->textUp }}" class="form-control" required>
                                            </div>
                                        </form>
                                    </div>
                                </div>


                                <div id="2" class="widget-header">
                                    <div class="row">
                                        <div class="mt-5 col-md-10 col-10 mx-auto">
                                            <h4>Подзаголовок</h4>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-8 col-12 mx-auto">

                                        <div class="form-group">
                                            <label for="t-text" class="sr-only">Text</label>
                                            <input form="asd" id="t-text" type="text" name="textDown"
                                                   value="{{ $data->textDown }}" class="form-control"
                                                   required>
                                        </div>
                                    </div>
                                </div>


                                <div id="2" class="widget-header">
                                    <div class="row">
                                        <div class="mt-5 col-md-10 col-10 mx-auto">
                                            <h4>Изменить фоторафию </h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-content widget-content-area">
                                    <div class="row">

                                        <div class="mt-2 col-md-8 col-10 mx-auto">

                                            <div id="fuSingleFile" class="col-lg-12 layout-spacing">
                                                <img width="250" height="200"
                                                     src="{{asset('storage/'.$data->photo)}}">
                                                <div class="widget-content widget-content-area">
                                                    <div class="custom-file-container"
                                                         data-upload-id="myFirstImage">
                                                        <label>Upload (Single File) <a href="javascript:void(0)"
                                                                                       class="custom-file-container__image-clear"
                                                                                       title="Clear Image">x</a></label>
                                                        <label class="custom-file-container__custom-file">
                                                            <input type="file" name="photo" form="asd"
                                                                   class="custom-file-container__custom-file__custom-file-input"
                                                                   accept="image/*">
                                                            <input type="hidden" name="photo" form="asd"
                                                                   value="10485760"/>
                                                            <span
                                                                class="custom-file-container__custom-file__custom-file-control"></span>
                                                        </label>
                                                        <div class="custom-file-container__image-preview"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        <button type="submit" class="mt-4 col-md-10 col-10 mx-auto  btn btn-primary"
                                                form="asd">Изменить
                                        </button>
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
            <!-- BEGIN GLOBAL MANDATORY STYLES -->
            <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700"
                  rel="stylesheet">
            <link href={{asset("assets/css/scrollspyNav.css")}} rel="stylesheet"
                  type="text/css"/>
            <link href={{asset("bootstrap/css/bootstrap.min.css")}} rel="stylesheet"
                  type="text/css"/>
            <link href={{asset("assets/css/plugins.css")}} rel="stylesheet" type="text/css"/>

            <!-- END GLOBAL MANDATORY STYLES -->

            <!-- BEGIN PAGE LEVEL STYLES -->
            <link
                href={{asset("plugins/file-upload/file-upload-with-preview.min.css")}} rel="stylesheet"
                type="text/css"/>


            <!-- END PAGE LEVEL STYLES -->
        @endsection

        @section('script')
            <script src={{asset("plugins/blockui/jquery.blockUI.min.js")}}></script>


            <script src={{asset("plugins/highlight/highlight.pack.js")}}></script>
            <!-- END GLOBAL MANDATORY SCRIPTS -->
            <!-- BEGIN PAGE LEVEL PLUGINS -->
            <script src={{asset("assets/js/scrollspyNav.js")}}></script>
            <script
                src={{asset("plugins/file-upload/file-upload-with-preview.min.js")}}></script>
            <script>
                let firstUpload = new FileUploadWithPreview('myFirstImage')
            </script>
@endsection
