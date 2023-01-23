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
                                        <h4>Изменить верхний текст</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="widget-content widget-content-area">

                                <div class="row">
                                    <div class="col-lg-6 col-12 mx-auto">
                                        <form method="POST" id="asd" name="asd" action="{{ route('slideridup',$data->id) }}" enctype="multipart/form-data" >
                                            @csrf
                                            <div class="form-group">
                                                <label for="t-text" class="sr-only">Text</label>
                                                <input form="asd" id="t-text" type="text" name="textUp" value="{{ $data->textUp }}" class="form-control" required>
                                            </div>
                                        </form>

                                    </div>
                                </div>

                            </div>



                        <div class="row layout-top-spacing">

                            <div id="basic" class="col-lg-12 layout-spacing">

                                    <div class="widget-header">
                                        <div class="row">
                                            <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                                <h4>Изменить нижний текст</h4>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="widget-content widget-content-area">

                                        <div class="row">
                                            <div class="col-lg-6 col-12 mx-auto">

                                                <div class="form-group">

                                                    <label for="t-text" class="sr-only">Text</label>
                                                    <input form="asd" id="t-text" type="text" name="textDown" value="{{ $data->textDown }}" class="form-control" required>

                                                </div>

                                            </div>
                                        </div>

                                    </div>







                                    <div class="col-lg-12 layout-spacing">

                                            <div class="widget-header">
                                                <div class="row">
                                                    <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                                        <h4>изменить ссылку</h4>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="widget-content widget-content-area">

                                                <div class="row">

                                                    <div class="col-lg-6 col-12 mx-auto">

                                                        <div class="form-group">

                                                            <label for="url-text" class="sr-only">Url</label>
                                                            <input form="asd"  name="link" value="{{ $data->link }}" class="form-control" required>




                                                        </div>

                                                    </div>

                                                </div>


                                            <div class="widget-content widget-content-area">

                                                <div class="form-group mb-4 mt-3">
                                                    <div class="widget-header">
                                                        <div class="row">
                                                            <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                                                <h4>Изменить фотографию</h4>

                                                             <img src="{{asset('storage/'.$data->photo)}}">

                                                            </div>
                                                        </div>

                                                    <input form="asd" type="file" name="photo" class="form-control-file" id="exampleFormControlFile1" >
                                                    </div>
                                                </div>
                                                <a href="{{route('slideridup', $data->id)}}" ><button type="submit" class="mt-4 mb-4 btn btn-primary" form="asd" > Изменить</button></a>
                                            </div>
                                              {{--  <div class="table-responsive">
                                                    <table class="table table-bordered table-hover table-striped mb-4">
                                                        <thead>
                                                        <tr>
                                                            <th>Заголовок</th>
                                                            <th>подзагаловок</th>
                                                            <th>ссылка</th>
                                                            <th class="text-center">Превью фотографии</th>
                                                            <th>Редактировать</th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>

                                                                <tr>

                                                                <td>{{ $el-> textUp }}</td>
                                                                <td>{{ $el-> textDown }}</td>
                                                                <td>{{ $el-> link }}</td>
                                                                <td><img width="150" height="100" src="storage/{{($el-> photo)}}"></td>
                                                                <td>
                                                                    <button href="{{route('sliderid', $el->id)}}" class="mt-4 mb-4 btn btn-primary">редактировать</button>
                                                                    <button class="mt-4 mb-4 btn btn-primary"><svg  xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2 icon"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path><line x1="10" y1="11" x2="10" y2="17"></line><line x1="14" y1="11" x2="14" y2="17"></line></svg></button>
                                                                </td>

                                                                </tr>
                                                            @endforeach




                                                        </tbody>
                                                    </table>
                                                </div>--}}

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

@endsection

@section('script')

@endsection
