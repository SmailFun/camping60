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
                                        <form method="post" id="asm" name="asm" action="{{ route('diogram') }}" >
                                            @csrf
                                            <div class="form-group">
                                                <label for="t-text" class="sr-only">Text</label>
                                                <input form="asm" id="t-text" type="text" name="textBig" placeholder="Заголовок..." class="form-control" required>
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
                                                    <input form="asm" id="t-text" type="text" name="textPre"  class="form-control" required>

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
                                                            <h4>1 диограмма</h4>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="widget-content widget-content-area">

                                                    <div class="row">
                                                        <div class="col-lg-6 col-12 mx-auto">

                                                            <div class="form-group">

                                                                <label for="t-text" class="sr-only">Text</label>
                                                                <input form="asm" id="t-text" type="text" name="dio1"  class="form-control" required>

                                                            </div>

                                                        </div>
                                                    </div>

                                                </div>
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
                                                        <h4>2 диограмма</h4>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="widget-content widget-content-area">

                                                <div class="row">
                                                    <div class="col-lg-6 col-12 mx-auto">

                                                        <div class="form-group">

                                                            <label for="t-text" class="sr-only">Text</label>
                                                            <input form="asm" id="t-text" type="text" name="dio2"  class="form-control" required>

                                                        </div>

                                                    </div>
                                                </div>

                                            </div>
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
                                                    <h4>3 диограмма</h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="widget-content widget-content-area">

                                            <div class="row">
                                                <div class="col-lg-6 col-12 mx-auto">

                                                    <div class="form-group">

                                                        <label for="t-text" class="sr-only">Text</label>
                                                        <input form="asm" id="t-text" type="text" name="dio3"  class="form-control" required>

                                                    </div>

                                                </div>
                                            </div>

                                        </div>
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
                                                <h4>4 диограмма</h4>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="widget-content widget-content-area">

                                        <div class="row">
                                            <div class="col-lg-6 col-12 mx-auto">

                                                <div class="form-group">

                                                    <label for="t-text" class="sr-only">Text</label>
                                                    <input form="asm" id="t-text" type="text" name="dio4"  class="form-control" required>

                                                </div>

                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                                </div>
                                <div class="form-group mb-4">
                                    <label for="exampleFormControlTextarea1">Текст gjl lbjuhfvvfvb</label>
                                    <textarea form="asm" class="form-control" id="exampleFormControlTextarea1" name="textAL" rows="3"></textarea>

                                </div>

                            </div>
                             <button type="submit" class="mt-4 mb-4 btn btn-primary" form="asm"> отправить</button>
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
