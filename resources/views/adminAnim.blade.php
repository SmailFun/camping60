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
                                        <form method="POST" id="a1" name="a1" action="{{ route('anim','animid') }}" >
                                            @csrf
                                            <div class="form-group">
                                                <label for="t-text" class="sr-only">Text</label>
                                                <input form="a1" id="t-text" type="text" name="textBig" placeholder="Заголовок..." class="form-control" required>
                                            </div>
                                        </form>
                                    </div>
                                </div>

                        </div>





                                    <div class="widget-header">
                                        <div class="row">
                                            <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                                <h4>Текст перед анимационным</h4>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="widget-content widget-content-area">

                                        <div class="row">
                                            <div class="col-lg-6 col-12 mx-auto">

                                                <div class="form-group">

                                                    <label for="t-text" class="sr-only">Text</label>
                                                    <input form="a1" id="t-text" type="text" name="textPre"  class="form-control" >

                                                </div>

                                            </div>
                                        </div>

                                    </div>
                                    <div class="row layout-top-spacing">

                                        <div id="basic" class="col-lg-12 layout-spacing">

                                                <div class="widget-header">
                                                    <div class="row">
                                                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                                            <h4>Текст анимационный</h4>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="widget-content widget-content-area">

                                                    <div class="row">
                                                        <div class="col-lg-6 col-12 mx-auto">

                                                            <div class="form-group">

                                                                <label for="t-text" class="sr-only">Text</label>
                                                                <input form="a1" id="t-text" type="text" name="animText"  class="form-control" required>

                                                            </div>

                                                        </div>
                                                    </div>
                                                    <div class="row layout-top-spacing">

                                                        <div id="basic" class="col-lg-12 layout-spacing">

                                                            <div class="widget-header">
                                                                <div class="row">
                                                                    <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                                                        <h4>Текст анимационный 2</h4>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="widget-content widget-content-area">

                                                                <div class="row">
                                                                    <div class="col-lg-6 col-12 mx-auto">

                                                                        <div class="form-group">

                                                                            <label for="t-text" class="sr-only">Text</label>
                                                                            <input form="a1" id="t-text" type="text" name="animText2"  class="form-control">

                                                                        </div>

                                                                    </div>
                                                                </div>



                                        </div>





                                            <div class="widget-header">
                                                <div class="row">
                                                    <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                                        <h4>Заголовок левого параграфа</h4>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="widget-content widget-content-area">

                                                <div class="row">
                                                    <div class="col-lg-6 col-12 mx-auto">

                                                        <div class="form-group">

                                                            <label for="t-text" class="sr-only">Text</label>
                                                            <input form="a1" id="t-text" type="text" name="textBigL"  class="form-control" required>

                                                        </div>
                                                    </div>
                                                </div>



                                                <div class="widget-header">
                                                    <div class="row">
                                                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                                            <h4>Заголовок правого параграфа</h4>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="widget-content widget-content-area">
                                                    <div class="row">
                                                        <div class="col-lg-6 col-12 mx-auto">
                                                            <div class="form-group">

                                                                <label for="t-text" class="sr-only">Text</label>
                                                                <input form="a1" id="t-text" type="text" name="textBigR"  class="form-control" required>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>





                                </div>
                                <div class="form-group mb-4">
                                    <div class="col-xl-12 col-md-12 col-sm-12 col-12">Текст левого параграфа</div>
                                    <textarea form="a1" class="form-control" id="exampleFormControlTextarea1" name="textAL" rows="3"></textarea>

                                </div>
                                <div class="form-group mb-4">
                                    <label for="exampleFormControlTextarea1">Текст правого параграфа</label>
                                    <textarea form="a1" class="form-control" id="exampleFormControlTextarea1" name="textAR" rows="3"></textarea>
                                </div>

                                <button type="submit" class="mt-4 mb-4 btn btn-primary" form="a1"> отправить</button>

                                            <div class="table-responsive">
                                                <table class="table table-bordered table-hover table-striped mb-4">
                                                    <thead>
                                                    <tr>
                                                        <th>Заголовок</th>
                                                        <th>Текст перед анимацией</th>
                                                        <th>Анимированный текст</th>
                                                        <th>Левый подзаголовок</th>
                                                        <th>Правый подзаголовок</th>
                                                        <th>Левый текст</th>
                                                        <th>Правый Текст</th>
                                                        <th>Редактировать</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    @foreach($data as $el)
                                                        <tr>

                                                            <td>{{ $el-> textBig }}</td>
                                                            <td>{{ $el-> textPre }}</td>
                                                            <td>{{ $el-> animText }}</td>
                                                            <td>{{ $el-> textBigL }}</td>
                                                            <td>{{ $el-> textBigR }}</td>
                                                            <td>{{ $el-> textAL }}</td>
                                                            <td>{{ $el-> textAR }}</td>
                                                            <td>
                                                                <a href="{{route('animid', $el->id)}}"><button  class="mt-4 mb-4 btn btn-primary">редактировать</button></a>
                                                                <a href="{{route('deleteanim', $el->id)}}">
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
