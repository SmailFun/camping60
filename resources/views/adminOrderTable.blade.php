@extends('layouts.appAdmin')
@section('content')

    <div id="content" class="main-content">
        <div class="container">
                <div class="row layout-spacing layout-top-spacing" id="cancel-row">
                    <div class="col-lg-12">
                        <div class="widget-content searchable-container list">
                            <div class="searchable-items list">
                                <div class="items items-header-section">
                                    <div class="item-content">
                                        <div class="column">
                                            <h4 style="margin-left: 5px;">Дата заказа</h4>
                                        </div>
                                        <div class="column">
                                            <h4  style="margin-left: 5px;">Категория товара</h4>
                                        </div>
                                        <div class="column">
                                            <h4  style="margin-left: 5px;">Колличество гостей</h4>
                                        </div>
                                        <div class="column">
                                            <h4  style="margin-left: 5px;">Сумма заказа</h4>
                                        </div>
                                        <div class="column">
                                            <h4 style="margin-left: 5px;">Номер телефона</h4>
                                        </div>
                                        <div class="column">
                                            <h4 style="margin-left: 5px;">Статус заказа</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                              {{--  @foreach($data as $el)

                                    <div class="items">
                                        <div class="item-content">

                                            <div class="date">
                                                    <p  class="date">{{$el->date}}</p>
                                            </div>
                                            <div class="category">
                                                <p class="category">{{$el->category}}</p>
                                            </div>
                                            <div class="count">
                                                <p class="count">{{$el->count}}</p>
                                            </div>
                                            <div class="cost">
                                                <p class="cost">{{$el->cost}}</p>
                                            </div>
                                            <div class="user-mes">
                                                <p class="user-mes">{{$el->comment}}</p>
                                            </div>
                                            <div class="adress">
                                                <p class="adress">{{$el->adress}}</p>
                                            </div>
                                            <div class="action-btn">
                                                <a href="" >
                                                    <button type="submit" form="aaa">
                                                        Статус заказа
                                                    </button>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach--}}
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
