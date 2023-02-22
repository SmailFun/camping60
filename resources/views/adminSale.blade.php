@extends('layouts.appAdmin')
@section('content')

    <div id="content" class="main-content">
        <div class="container">

            <div class="container">
        <div class="mt-4  col-md-10 col-10 mx-auto row justify-content-center">
            <h1>Создание товаров и категорий</h1>
        </div>


        <div class="container ml-5 col-12-xl">

            <div class="container">

                <div id="navSection" data-spy="affix" class="nav  sidenav">
                    <div class="sidenav-content">
                        <a href="#1" class="active nav-link">Наименование товара</a>
                        <a href="#2" class="nav-link">Количество товара</a>
                        <a href="#3" class="nav-link">Цена</a>
                        <a href="#5" class="nav-link">Таблица</a>
                    </div>
                </div>

                <div class="row layout-top-spacing ">

                    <div class="statbox widget box box-shadow">

                        <div id="1" class="widget-header">
                            <div class="row">
                                <div class="mt-5 col-md-10 col-10 mx-auto">
                                    <h3>Нзвание товара</h3>
                                </div>
                            </div>
                        </div>
                        <div class="widget-content widget-content-area">
                            <div class="row">
                                <div class="mt-2 col-md-8 col-10 mx-auto">
                                    <form method="POST" id="asd" name="asd" action="{{ route('tov','tovid') }}"
                                          enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-group">
                                            <label for="t-text" class="sr-only">Count</label>
                                            <input form="asd" id="t-text" type="text" name="cat"
                                                   placeholder="" class="form-control">
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                        <div id="2" class="widget-header">
                            <div class="row">
                                <div class="mt-5 col-md-10 col-10 mx-auto">
                                    <h3>Колличество товара</h3>
                                </div>
                            </div>
                        </div>
                        <div class="widget-content widget-content-area">

                            <div class="row">
                                <div class="mt-2 col-md-8 col-10 mx-auto">

                                    <div class="form-group">
                                        <label for="t-text" class="sr-only">Text</label>
                                        <input form="asd" id="t-text" type="text" name="count"
                                               placeholder="" class="form-control" required>
                                    </div>

                                </div>
                            </div>

                        </div>


                        <div id="3" class="widget-header">
                            <div class="row">
                                <div class="mt-5 col-md-10 col-10 mx-auto">
                                    <h3>Цена за еденицу(в рублях)</h3>
                                </div>
                            </div>
                        </div>
                        <div class="widget-content widget-content-area">

                            <div class="row">

                                <div class="mt-2 col-md-8 col-10 mx-auto">

                                    <div class="form-group">

                                        <label for="url-text" class="sr-only">Url</label>
                                        <input form="asd" name="sale" placeholder=""
                                               class="form-control" required>


                                    </div>

                                </div>
                                <button type="submit" class="mt-4 col-md-10 col-10 mx-auto  btn btn-primary"
                                        form="asd">Отправить
                                </button>
                            </div>
                        </div>

                    </div>
                </div>
            </div>




        <div class="container mt-5 ml-4">

            <div id="5" class="table-responsive">
                <table class="table table-bordered table-hover table-striped mb-4">
                    <thead>
                    <tr>
                        <th>Наименования товара</th>
                        <th>Колличества товара</th>
                        <th>Цена</th>
                        <th>Редактировать</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($data as $el)
                        <tr>

                            <td>{{ $el-> cat }}</td>
                            <td>{{ $el-> count }}</td>
                            <td>{{ $el-> sale }}</td>

                            <td>
                                <a href="{{route('tovid', $el->id)}}">
                                    <button class="mt-4 mb-4 btn btn-primary">
                                        редактировать
                                    </button>
                                </a>
                                <a href="{{route('deletesTov', $el->id)}}">
                                    <button class="mt-4 mb-4 btn btn-primary">
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                             width="24" height="24" viewBox="0 0 24 24"
                                             fill="none" stroke="currentColor"
                                             stroke-width="2" stroke-linecap="round"
                                             stroke-linejoin="round"
                                             class="feather feather-trash-2 icon">
                                            <polyline points="3 6 5 6 21 6"></polyline>
                                            <path
                                                d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                                            <line x1="10" y1="11" x2="10"
                                                  y2="17"></line>
                                            <line x1="14" y1="11" x2="14"
                                                  y2="17"></line>
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

@endsection
@section('style')
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700" rel="stylesheet">
    <link href={{asset("assets/css/scrollspyNav.css")}} rel="stylesheet" type="text/css"/>
    <link href={{asset("bootstrap/css/bootstrap.min.css")}} rel="stylesheet" type="text/css"/>
    <link href={{asset("assets/css/plugins.css")}} rel="stylesheet" type="text/css"/>

    <!-- END GLOBAL MANDATORY STYLES -->

    <!-- BEGIN PAGE LEVEL STYLES -->
    <link href={{asset("plugins/file-upload/file-upload-with-preview.min.css")}} rel="stylesheet" type="text/css"/>


    <!-- END PAGE LEVEL STYLES -->
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