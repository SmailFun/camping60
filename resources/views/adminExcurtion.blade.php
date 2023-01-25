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
                                        <form method="POST" id="asd" name="asd" action="{{ route('excurtion','excurtionid') }}" enctype="multipart/form-data" >
                                            @csrf
                                            <div class="form-group">
                                                <label for="t-text" class="sr-only">Text</label>
                                                <input form="asd" id="t-text" type="text" name="textUp" placeholder="Заголовок..." class="form-control" required>
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
                                                <h4>Подзаголовок</h4>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="widget-content widget-content-area">

                                        <div class="row">
                                            <div class="col-lg-6 col-12 mx-auto">

                                                <div class="form-group">

                                                    <label for="t-text" class="sr-only">Text</label>
                                                    <input form="asd" id="t-text" type="text" name="textDown"  class="form-control" required>

                                                </div>

                                            </div>
                                        </div>

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
                        </div>




                                    <button type="submit" class="mt-4 mb-4 btn btn-primary" form="asd"> отправить</button>
                    </div>
                </div>
            </div>
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover table-striped mb-4">
                                <thead>
                                <tr>
                                    <th>Заголовок</th>
                                    <th>подзагаловок</th>
                                    <th class="text-center">Превью фотографии</th>
                                    <th>Редактировать</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($data as $el)
                                    <tr>

                                        <td>{{ $el-> textUp }}</td>
                                        <td>{{ $el-> textDown }}</td>
                                        <td><img width="150" height="100" src="storage/{{($el-> photo)}}"></td>
                                        <td>
                                            <a href="{{route('excurtionid', $el->id)}}"><button  class="mt-4 mb-4 btn btn-primary">редактировать</button></a>
                                            <a href="{{route('deleteexcurtion', $el->id)}}">
                                                <button   class="mt-4 mb-4 btn btn-primary">
                                                    <svg  xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                          stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2 icon">
                                                        <polyline points="3 6 5 6 21 6"></polyline>
                                                        <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                                                        <line x1="10" y1="11" x2="10" y2="17"></line><line x1="14" y1="11" x2="14" y2="17"></line>
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



@endsection
@section('style')

@endsection

@section('script')

@endsection
