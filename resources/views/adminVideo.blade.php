@extends('layouts.appAdmin')
@section('content')

    <div id="content" class="main-content">
        <div class="container">

            <div class="container">
                <div class="mt-4  col-md-10 col-10 mx-auto row justify-content-center">
                    <h1>Редактирование видеофрагмента</h1>
                </div>


                <div class="container ml-5 col-12-xl">

                    <div class="container">

                        <div id="navSection" data-spy="affix" class="nav  sidenav">
                            <div class="sidenav-content">
                                <a href="#1" class="active nav-link">Текст поверх видео</a>
                                <a href="#2" class="nav-link">Загрузить видео</a>
                                <a href="#3" class="nav-link">Таблица</a>
                            </div>
                        </div>

                        <div class="row layout-top-spacing ">

                            <div class="statbox widget box box-shadow">

                                <div id="1" class="widget-header">
                                    <div class="row">
                                        <div class="mt-5 col-md-10 col-10 mx-auto">
                                            <h3>Текст поверх видео</h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-content widget-content-area">
                                    <div class="row">
                                        <div class="col-lg-8 col-12 mx-auto">
                                            <form method="POST" id="asd" name="asd"
                                                  action="{{ route('video','videoid') }}"
                                                  enctype="multipart/form-data">
                                                @csrf
                                                <div class="form-group">
                                                    <label for="t-text" class="sr-only">Text</label>
                                                    <input form="asd" id="t-text" type="text" name="textUp"
                                                           placeholder="это будет отображаьбся поверх видео"
                                                           class="form-control" required>
                                                </div>
                                            </form>
                                        </div>
                                    </div>


                                    <div id="2" class="widget-header">
                                        <div class="row">
                                            <div class="mt-5 col-md-10 col-10 mx-auto">
                                                <h4>Загрузить видео</h4>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="widget-content widget-content-area">
                                        <div class="row">

                                            <div class="mt-2 col-md-8 col-10 mx-auto">

                                                <div id="fuSingleFile" class="col-lg-12 layout-spacing">

                                                    <div class="widget-content widget-content-area">
                                                        <div class="custom-file-container"
                                                             data-upload-id="myFirstImage">
                                                            <label>Upload (Single File) <a href="javascript:void(0)"
                                                                                           class="custom-file-container__image-clear"
                                                                                           title="Clear Image">x</a></label>
                                                            <label class="custom-file-container__custom-file">
                                                                <input type="file" name="video" form="asd"
                                                                       class="custom-file-container__custom-file__custom-file-input"
                                                                       accept="">
                                                                <input type="hidden" name="video" form="asd"
                                                                       value="10485760"/>
                                                                <span
                                                                    class="custom-file-container__custom-file__custom-file-control"></span>
                                                            </label>
                                                            <div class="custom-file-container__image-preview"></div>
                                                        </div>
                                                    </div>
                                                    <div>
                                                        <button type="submit"
                                                                class="mt-4 col-md-10 col-10 mx-auto  btn btn-primary"
                                                                form="asd">Отправить
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


                    <div class="container mt-5 ml-4">

                        <div id="3" class="table-responsive">
                            <table class="table table-bordered table-hover table-striped mb-4">
                            <thead>
                            <tr>
                                <th>Заголовок</th>
                                <th class="text-center">Превью видео</th>
                                <th>Редактировать</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($data as $el)
                                <tr>

                                    <td>{{ $el-> textUp }}</td>

                                    <td>
                                        <video width="150" height="100" autoplay>
                                            <source src="{{asset('storage/'.$el-> video)}}"
                                                    type='video/webm; codecs="vp8, vorbis"'/>
                                            >
                                        </video>
                                    </td>
                                    <td>
                                        <a href="{{route('videoid', $el->id)}}">
                                            <button class="mt-4 mb-4 btn btn-primary">
                                                редактировать
                                            </button>
                                        </a>
                                        <a href="{{route('deletevideo', $el->id)}}">
                                            <button class="mt-4 mb-4 btn btn-primary">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                     height="24" viewBox="0 0 24 24" fill="none"
                                                     stroke="currentColor"
                                                     stroke-width="2" stroke-linecap="round"
                                                     stroke-linejoin="round"
                                                     class="feather feather-trash-2 icon">
                                                    <polyline points="3 6 5 6 21 6"></polyline>
                                                    <path
                                                        d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                                                    <line x1="10" y1="11" x2="10" y2="17"></line>
                                                    <line x1="14" y1="11" x2="14" y2="17"></line>
                                                </svg>
                                            </button>
                                        </a>
                                    </td>

                                </tr>
                            @endforeach


                            </tbody>
                        </table>
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
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700" rel="stylesheet">
    <link href={{asset("assets/css/scrollspyNav.css")}} rel="stylesheet" type="text/css"/>
    <link href={{asset("bootstrap/css/bootstrap.min.css")}} rel="stylesheet" type="text/css"/>
    <link href={{asset("assets/css/plugins.css")}} rel="stylesheet" type="text/css"/>

    <!-- END GLOBAL MANDATORY STYLES -->

    <!-- BEGIN PAGE LEVEL STYLES -->
    <link
        href={{asset("plugins/file-upload/file-upload-with-preview.min.css")}} rel="stylesheet"
        type="text/css"/>

@endsection
@section('script')
    <script src={{asset("plugins/blockui/jquery.blockUI.min.js")}}></script>


    <script src={{asset("plugins/highlight/highlight.pack.js")}}></script>
    <!-- END GLOBAL MANDATORY SCRIPTS -->
    <!-- BEGIN PAGE LEVEL PLUGINS -->
    <script src={{asset("assets/js/scrollspyNav.js")}}></script>
    <script src={{asset("plugins/file-upload/file-upload-with-preview.min.js")}}></script>
    <script>
        let firstUpload = new FileUploadWithPreview('myFirstImage')
    </script>
@endsection
