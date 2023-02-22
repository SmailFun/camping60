@extends('layouts.appAdmin')
@section('name')
@endsection
@section('content')

    <div id="content" class="main-content">

        <div class="container">

            <div class="row layout-top-spacing">

                <div id="basic" class="col-lg-12 layout-spacing">
                    <div class="statbox widget box box-shadow">
                        <div class="widget-header">
                            <div class="row">
                                <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                    <h4>Название категории</h4>
                                </div>
                            </div>
                        </div>
                        <div class="widget-content widget-content-area">

                            <div class="row">
                                <div class="col-lg-6 col-12 mx-auto">
                                    <form method="post" id="asd" name="asd" action="{{ route('categorys') }}">
                                        @csrf
                                        <div class="form-group">
                                            <label for="t-text" class="sr-only">Text</label>
                                            <input form="asd" id="t-text" type="text" name="category"
                                                   class="form-control" required>
                                        </div>

                                        <button type="submit" class="mt-4 mb-4 btn btn-primary" form="asd"> отправить
                                        </button>
                                    </form>

                                </div>


                                <form method="POST" id="a1" name="a1" action="{{ route('galery') }}"
                                      enctype="multipart/form-data">

                                    <div id="fs2Tagging" class="col-lg-12 layout-spacing">
                                        <div class="widget-header">


                                            <div class="container">

                                                <div class="row layout-top-spacing">

                                                    <div id="basic" class="col-lg-12 layout-spacing">


                                                        <div class="form-group mb-4 mt-3">
                                                            <div class="widget-header">
                                                                <div class="row">
                                                                    <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                                                        <h3>Загрузить фотографию</h3>
                                                                    </div>


                                                                </div>
                                                                <input form="a1" type="file" name="photo"
                                                                       class="form-control-file"
                                                                       id="exampleFormControlFile1">
                                                            </div>
                                                        </div>


                                                        <div class="row">
                                                            <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                                                <h4>Выбрать категорию</h4>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    @csrf
                                                    <div class="widget-content widget-content-area">
                                                        <div class="row">
                                                            <div class="widget-content widget-content-area">
                                                        <select class="js-example-basic-multiple" name="cat_id"
                                                                multiple="multiple" form="a1">
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
                                        </div>
                                      </div>

                                </form>
                            </div>
                        </div>
                    </div>


                    @foreach($categories as $dat)

                        <div class="col-xl-12 statbox widget box box-shadow" style="margin-top: 15px">
                            <div class="col-xl-12 row justify-content-center">
                               <div class="mt-3 mb-4"> <h1>{{$dat['category']}}</h1> </div>
                                <div> <button class="mt-4 mb-4 btn btn-primary"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                            <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"/>
                                            <path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"/>
                                        </svg></button></div>
                                <div><a href="{{route('deletecat', $dat->id)}}"> <button class="mt-4 mb-4 btn btn-danger"> <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x-octagon"><polygon points="7.86 2 16.14 2 22 7.86 22 16.14 16.14 22 7.86 22 2 16.14 2 7.86 7.86 2"></polygon><line x1="15" y1="9" x2="9" y2="15"></line><line x1="9" y1="9" x2="15" y2="15"></line></svg></button></a></div>
                            </div>
                            <div class="col-xl-12 row justify-content-center">

                                @if(count($dat->cat)==null)
                                    <h4>Нет загруженных фотографий</h4>
                                @endif
                                @foreach($dat->cat as $onePhoto)
                                <div class="col-lg-4">
                                    <div>
                                        <style>
                                            .nukuta-img {
                                                width: 150px;
                                                height: 150px;

                                            }
                                        </style>
                                        <img class="nukuta-img" src="{{asset("storage/".$onePhoto['photo'])}}">
                                    </div>
                                    <div class="row justify-content-center">
                                        <div>
                                            <a href="{{route('galeryid', $onePhoto->id)}}">
                                                <button class="mt-1 btn btn-primary">
                                                    редактировать
                                                </button>
                                            </a>
                                        </div>
                                        <div>
                                            <a href="{{route('deleteaph', $onePhoto->id)}}">
                                                <button class="mt-4 mb-4 btn btn-danger"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x-octagon"><polygon points="7.86 2 16.14 2 22 7.86 22 16.14 16.14 22 7.86 22 2 16.14 2 7.86 7.86 2"></polygon><line x1="15" y1="9" x2="9" y2="15"></line><line x1="9" y1="9" x2="15" y2="15"></line></svg></button>
                                            </a>
                                        </div>
                                    </div>
                               </div>
                                @endforeach
                            </div>
                        </div>
                    @endforeach


                </div>
            </div>
        </div>
    </div>






        @endsection
        @section('style')

            <link href={{asset("styleB/assets/css/scrollspyNav.css")}} rel="stylesheet" type="text/css"/>

            <link rel="stylesheet" type="text/css" href={{asset("styleB/plugins/select2/select2.min.css")}}>

        @endsection

        @section('script')

            <script src={{asset("styleB/assets/js/app.js")}}></script>
            <script src={{asset("styleB/plugins/highlight/highlight.pack.js")}}></script>
            <script src={{asset("styleB/assets/js/custom.js")}}></script>


            <script src={{asset("styleB/assets/js/scrollspyNav.js")}}></script>

            <script src={{asset("styleB/plugins/select2/select2.min.js")}}></script>
            <script src={{asset("styleB/plugins/select2/custom-select2.js")}}></script>

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
