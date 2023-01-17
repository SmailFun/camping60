@extends('layouts.appAdmin')
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
                                        <form method="post" id="asd" name="a1" action="{{ route('galery') }}" >
                                            @csrf
                                            <div class="form-group">
                                                <label for="t-text" class="sr-only">Text</label>
                                                <input form="asd" id="t-text" type="text" name="textUp"  class="form-control" required>
                                            </div>
                                        </form>
                                    </div>







                        <div id="fs2Tagging" class="col-lg-12 layout-spacing">

                                <div class="widget-header">
                                    <div class="row layout-top-spacing">

                                        <div class="form-group mb-4 mt-3">
                                            <div class="widget-header">
                                                <div class="row">
                                                    <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                                        <h4>Загрузить фотографию</h4>
                                                    </div>
                                                </div>
                                            </div>
                                            <input form="asd" type="file" name="photo" class="form-control-file" id="exampleFormControlFile1">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                            <h4>Выбрать категорию</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-content widget-content-area">

                                    <select class="js-example-basic-multiple" name="select" multiple="multiple" form="asd">
                                        <option value="AL">обеспечение</option>
                                        <option value="WY">продукция</option>
                                    </select>

                                </div>
                            </div>
                        </div>


                        <button type="submit" class="mt-4 mb-4 btn btn-primary" form="asd"> отправить</button>
                    </div>
                </div>
            </div>

    </div>



@endsection
@section('style')
    <link href={{asset("styleB/bootstrap/css/bootstrap.min.css")}} rel="stylesheet" type="text/css" />
    <link href={{asset("assets/css/plugins.css")}} rel="stylesheet" type="text/css" />

    <link href={{asset("styleB/assets/css/scrollspyNav.css")}} rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href={{asset("styleB/plugins/select2/select2.min.css")}}>

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
        $(document).ready(function() {
            App.init();
        });
    </script>
    <script>
        var ss = $(".basic").select2({
            tags: true,
        });
    </script>
<script>
    $(document).ready(function() {
        $('.js-example-basic-multiple').select2();
    });
</script>
@endsection
