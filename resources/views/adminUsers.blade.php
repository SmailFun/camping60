@extends('layouts.appAdmin')
@section('content')

    <div id="content" class="main-content">
        <div class="container">

            <div class="container">

                <div class="row layout-spacing layout-top-spacing" id="cancel-row">
                    <div class="col-lg-12">
                        <div class="widget-content searchable-container list">
                            <div class="searchable-items list">
                                <div class="items items-header-section">
                                    <div class="item-content">
                                        <div class="name">
                                            <h4>Имя</h4>
                                        </div>
                                        <div class="email">
                                            <h4>Email</h4>
                                        </div>
                                        <div class="email">
                                            <h4>Телефон</h4>
                                        </div>
                                        <div class="redact">
                                            <h4 style="margin-left: 3px;">Редактировать</h4>
                                        </div>
                                    </div>
                                </div>
                                @foreach($data as $el)
                                    <div class="items">
                                        <div class="item-content">

                                            <div class="user-location">
                                                <div class="name">
                                                    <input type="hidden" form="aaa" name="name" value="{{$el->name}}">
                                                    <p  class="name">{{$el->name}}</p>
                                                </div>
                                            </div>
                                            <div class="user-email">
                                                <p class="info-title">Email: </p>
                                                <input type="hidden" form="aaa" name="email" value="{{$el->email}}">
                                                <p class="usr-email-addr">{{$el->email}}</p>

                                            </div>
                                            <div class="user-tel">
                                                <p class="info-title"></p>
                                                <input type="hidden" form="aaa" name="tel" value="{{$el->tel}}">
                                                <p class="usr-tell">{{$el->tel}}</p>

                                            </div>
                                                <a href="{{route('deleteUser',$el->id)}}"><button>
                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                         xmlns:serif="http://www.serif.com/"
                                                         xmlns:xlink="http://www.w3.org/1999/xlink" height="24"
                                                         style="fill-rule:evenodd;clip-rule:evenodd;stroke-linejoin:round;stroke-miterlimit:2;"
                                                         version="1.1" viewBox="0 0 32 32" width="24"
                                                         xml:space="preserve"><path
                                                            d="M11.162,3l9.678,0c-0.405,-1.178 -1.523,-2.024 -2.838,-2.024l-4.002,-0c-1.315,-0 -2.433,0.846 -2.838,2.024Z"/>
                                                        <path
                                                            d="M6.413,10.987l1.435,17.247c0.129,1.555 1.429,2.751 2.989,2.751l10.323,0c1.56,0 2.86,-1.196 2.989,-2.751l1.435,-17.247l1.411,0c1.105,0 2.002,-0.897 2.002,-2.002c0,0 0,-2.004 0,-2.004c0,-1.105 -0.897,-2.002 -2.002,-2.002l-21.982,0c-1.105,0 -2.002,0.897 -2.002,2.002c0,0 0,2.004 0,2.004c0,1.105 0.897,2.002 2.002,2.002l1.4,0Zm8.59,4.013l-0.003,-0c-1.656,-0 -3,1.344 -3,3c-0,1.656 1.344,3 3,3c0,0 2,-0 2,-0c0.552,-0 1,0.448 1,1c-0,0.552 -0.448,1 -1,1c-0,-0 -3,-0 -3,-0c-0.552,0 -1,0.448 -1,1c0,0.552 0.448,1 1,1l1.003,-0l0,1c0,0.552 0.449,1 1,1c0.552,0 1,-0.448 1,-1l0,-1c1.655,-0.002 2.997,-1.345 2.997,-3c-0,-1.656 -1.344,-3 -3,-3c-0,-0 -2,0 -2,0c-0.552,0 -1,-0.448 -1,-1c0,-0.552 0.448,-1 1,-1l3,0c0.552,0 1,-0.448 1,-1c0,-0.552 -0.448,-1 -1,-1l-0.997,0l0,-1c0,-0.552 -0.448,-1 -1,-1c-0.551,0 -1,0.448 -1,1l0,1Z"/></svg>
                                                    </button>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('style')
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700" rel="stylesheet">
    <link href={{asset("bootstrap/css/bootstrap.min.css")}} rel="stylesheet" type="text/css"/>
    <link href={{asset("assets/css/plugins.css")}} rel="stylesheet" type="text/css"/>
    <!-- END GLOBAL MANDATORY STYLES -->

    <!-- BEGIN PAGE LEVEL STYLES -->
    <link rel="stylesheet" type="text/css" href={{asset("assets/css/forms/theme-checkbox-radio.css")}}>
    <link href={{asset("plugins/jquery-ui/jquery-ui.min.css")}} rel="stylesheet" type="text/css"/>
    <link href={{asset("assets/css/apps/contacts.css")}} rel="stylesheet" type="text/css"/>
@endsection

@section('script')

    <!-- END GLOBAL MANDATORY SCRIPTS -->
    <script src={{asset("plugins/jquery-ui/jquery-ui.min.js")}}></script>
    <script src={{asset("assets/js/apps/contact.js")}}></script>
@endsection
