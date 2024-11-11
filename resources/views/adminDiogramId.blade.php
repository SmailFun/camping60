@extends('layouts.appAdmin')
@section('content')

    <div id="content" class="main-content">
        <div class="container">

            <div class="container">
                <div class="mt-4  col-md-10 col-10 mx-auto row justify-content-center">
                    <h1>Редактирование диограмм</h1>
                </div>


                <div class="container ml-5 col-12-xl">

                    <div class="container">

                        <div id="navSection" data-spy="affix" class="nav  sidenav">
                            <div class="sidenav-content" style="margin-right: 8px">
                                <a href="#1" class="active nav-link">Заголовок</a>
                                <a href="#2" class="nav-link">Подзаголовок</a>
                                <a href="#3" class="nav-link">1 диограмма</a>
                                <a href="#4" class="nav-link">2 диограмма</a>
                                <a href="#5" class="nav-link">3 диограмма</a>
                                <a href="#6" class="nav-link">4 диограмма</a>
                                <a href="#7" class="nav-link">Текст под диограммы</a>

                            </div>
                        </div>

                        <div class="row layout-top-spacing ">
                            <div class="statbox widget box box-shadow">
                                <div class="widget-content widget-content-area">

                                    <div id="1" class="widget-header">
                                        <div class="row">
                                            <div class="mt-5 col-md-10 col-10 mx-auto">
                                                <h4>Заголовок</h4>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="row">
                                        <div class="col-lg-6 col-12 mx-auto">
                                            <form method="post" id="asm" name="asm"
                                                  action="{{ route('diogramup',$data->id ) }}">
                                                @csrf
                                                <div class="form-group">
                                                    <label for="t-text" class="sr-only">Text</label>
                                                    <input form="asm" id="t-text" type="text" name="textBig"
                                                           VALUE="{{ $data->textBig }}" class="form-control" required>
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
                                        <div class="col-lg-6 col-12 mx-auto">

                                            <div class="form-group">

                                                <label for="t-text" class="sr-only">Text</label>
                                                <input form="asm" id="t-text" type="text" name="textPre"
                                                       VALUE="{{ $data->textPre }}"
                                                       class="form-control" required>

                                            </div>

                                        </div>
                                    </div>


                                    <div id="3" class="widget-header">
                                        <div class="row">
                                            <div class="mt-5 col-md-10 col-10 mx-auto">
                                                <h4>1 диограмма</h4>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="row">
                                        <div class="col-lg-6 col-12 mx-auto">

                                            <div class="form-group">

                                                <label for="t-text" class="sr-only">Text</label>
                                                <input form="asm" id="t-text" type="text" name="dio1"
                                                       VALUE="{{ $data->dio1 }}" class="form-control" required>

                                            </div>

                                        </div>

                                    </div>


                                    <div id="4" class="widget-header">
                                        <div class="row">
                                            <div class="mt-5 col-md-10 col-10 mx-auto">
                                                <h4>2 диограмма</h4>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="row">
                                        <div class="col-lg-6 col-12 mx-auto">

                                            <div class="form-group">

                                                <label for="t-text" class="sr-only">Text</label>
                                                <input form="asm" id="t-text" type="text"
                                                       name="dio2" VALUE="{{ $data->dio2 }}"
                                                       class="form-control" required>

                                            </div>

                                        </div>
                                    </div>


                                    <div id="5" class="widget-header">
                                        <div class="row">
                                            <div class="mt-5 col-md-10 col-10 mx-auto">
                                                <h4>3 диограмма</h4>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="row">
                                        <div class="col-lg-6 col-12 mx-auto">

                                            <div class="form-group">

                                                <label for="t-text"
                                                       class="sr-only">Text</label>
                                                <input form="asm" id="t-text" type="text"
                                                       name="dio3" VALUE="{{ $data->dio3 }}"
                                                       class="form-control"
                                                       required>

                                            </div>

                                        </div>
                                    </div>

                                    <div id="6" class="widget-header">
                                        <div class="row">
                                            <div class="mt-5 col-md-10 col-10 mx-auto">
                                                <h4>4 диограмма</h4>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="row">
                                        <div class="col-lg-6 col-12 mx-auto">

                                            <div class="form-group">

                                                <label for="t-text" class="sr-only">Text</label>
                                                <input form="asm" id="t-text"
                                                       type="text" name="dio4" VALUE="{{ $data->dio4 }}"
                                                       class="form-control"
                                                       required>

                                            </div>

                                        </div>
                                    </div>

                                    <div id="7" class="widget-header">
                                        <div class="row">
                                            <div class="mt-5 col-md-10 col-10 mx-auto">
                                                                            <textarea form="asm" class="form-control"
                                                                                      id="exampleFormControlTextarea1"
                                                                                      name="textAL" rows="3">{{$data->textAL}}
                                                                            </textarea>

                                            </div>
                                            <button type="submit"
                                                    class="mt-4 mb-4 btn btn-primary"
                                                    form="asm"> отправить
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
