@extends('layouts.appUser')
@section('content')
    <div class="main-container" id="container">

        <div class="overlay"></div>
        <div class="search-overlay"></div>
        <div id="content" class="main-content">
            <div class="layout-px-spacing">

                <div class="row invoice layout-top-spacing layout-spacing">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">

                        <div class="doc-container">

                            <div class="row">
                                <div class="col-xl-9">

                                    <div class="invoice-content">

                                        <div class="invoice-detail-body">

                                            <div class="invoice-detail-title">

                                                <div class="invoice-logo">
                                                    <div class="upload">
                                                        <img srcset="{{asset("style/images/logo-dark.jpg")}} 18x">
                                                    </div>
                                                </div>

                                                <div class="invoice-title">
                                                    <input type="text" class="form-control" placeholder="{{--{{$data->tel}}--}}"
                                                           value="">
                                                </div>

                                            </div>


                                            <div class="invoice-detail-terms">

                                                <div class="row justify-content-between">


                                                    <div class="col-md-4">
                                                        <form name="aaa">
                                                            @csrf
                                                            <div class="form-group mb-6">
                                                                <label  for="date">Выберите дату(даты) доставки</label>
                                                                <input type="text" class="form-control form-control-sm"
                                                                       id="date" form="aaa" name="date"
                                                                       placeholder="Add date picker">
                                                            </div>
                                                        </form>
                                                    </div>

                                                </div>

                                            </div>


                                            <div class="invoice-detail-items">

                                                <div class="table-responsive">
                                                    <table class="table table-bordered item-table">
                                                        <thead>
                                                        <tr>

                                                            <th>Выберите категорию</th>
                                                            <th class="">Кол-во</th>
                                                            <th class="">Цена/шт.</th>
                                                            <th class="text-right">Стоимость</th>
                                                            <th class=""></th>
                                                        </tr>
                                                        </thead>
                                                        <tbody id="colors">
                                                        <tr id="tabler">
                                                            <td >
                                                                {{-- <td class="description">
                                                                     <select class="js-example-basic-multiple" name="cat_id"
                                                                             multiple="multiple">
                                                                         <option></option>
                                                                     </select>

                                                                 </td>
                                                                 <td class="rate">
                                                                     <input type="text" class="form-control form-control-sm"
                                                                            placeholder="шт.">
                                                                 </td>
                                                                 <td class="text-center qty ">
                                                                     <p>5р/шт</p>
                                                                 </td>
                                                                 <td class="text-right amount"><span class="editable-amount">
                                                                         <span class="currency"></span> <span class="amount">рублей</span>
                                                                 </td>
                                                                 <td class="delete-item-row">
                                                                     <ul class="table-controls">
                                                                         <li>
                                                                             <button id="biton">X</button>
                                                                         </li>
                                                                     </ul>
                                                                 </td>--}}
                                                            </td>
                                                        </tr>



                                                        </tbody>

                                                    </table>
                                                </div>

                                                <script>
                                                    const $table = document.querySelector('#tabler');

                                                    $table.insertAdjacentHTML('afterbegin',
                                                        '<tr>' +
                                                        '<td class="description"> <select class="js-example-basic-multiple" ' +
                                                        'name="category" form="aaa" multiple="multiple">' +
                                                        '<option>фыв</option><option>выф</option></select></td>' +
                                                        '<td class="rate">' +
                                                        '<input type="text" form="aaa" class="form-control form-control-sm" placeholder="шт.">' +
                                                        '</td><td class="text-center qty ">' +
                                                        '<p>р/шт</p></td>' +
                                                        '<td class="text-right amount">' +
                                                        '<span class="editable-amount">' +
                                                        '<span class="currency"></span> ' +
                                                        '<span class="amount">рублей</span></td>' +
                                                        '<td class="delete-item-row">' +
                                                        '<ul class="table-controls"><li>' +
                                                        '</li>' +
                                                        '<button id="addbut"class="delete-item">+</button></ul></td>' +
                                                        '</tr>');


                                                    document.querySelector('#addbut').onclick = function () {
                                                        createItem = document.querySelectorAll('.delete-item')
                                                        for (var i = 0; i < createItem.length; i++) {
                                                            console.log(createItem.length);
                                                            $table.setAttribute("id", "i");
                                                            $table.insertAdjacentHTML('afterend', '' +
                                                                '<tr id="dletethis">' +
                                                                '<td class="description"> ' +
                                                                '<select class="js-example-basic-multiple" name="category" multiple="multiple">' +
                                                                '<option></option>' +
                                                                '</select>' +
                                                                '</td>' +
                                                                '<td class="rate"><input type="text" class="form-control form-control-sm" placeholder="шт."></td>' +
                                                                '<td class="text-center qty "><p>5р/шт</p></td>' +
                                                                '<td class="text-right amount"><span class="editable-amount"><span class="currency"></span> <span class="amount">рублей</span>' +
                                                                '</td>' +
                                                                '<td class="delete-item-row">' +
                                                                '<ul class="table-controls"><li><a href="##" onclick="removeThis()"><button id="biton" class="delete">X</button></a></li></ul>' +
                                                                '</td>' +
                                                                '</tr>');

                                                                $(document).ready(function () {
                                                                $('.js-example-basic-multiple').select2();
                                                            });

                                                        }



                                                    }
                                                    function removeThis(){
                                                        var elem = document.getElementById('dletethis');
                                                        elem.remove();
                                                        return false;
                                                    }
                                                    // document.querySelector('#biton').onclick = function () {
                                                    //     deleteItem = document.querySelectorAll('.delete');
                                                    //     for (var i = 0; i < deleteItem.length; i++) {
                                                    //         $table.remove();
                                                    //     }
                                                    // }


                                                </script>
                                            </div>


                                            <div class="invoice-detail-total">

                                                <div class="row">


                                                    <div class="col-md-6">
                                                        <div class="totals-row">
                                                            <div class="invoice-totals-row invoice-summary-balance-due">

                                                                <div class="invoice-summary-label">Сумма</div>

                                                                <div class="invoice-summary-value">
                                                                    <div class="balance-due-amount">
                                                                        <span class="currency"></span><span>Рублей</span>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>

                                            </div>

                                            <div class="invoice-detail-note">

                                                <div class="row">

                                                    <div class="col-md-12 align-self-center">

                                                        <div class="form-group row invoice-note">
                                                            <label for="invoice-detail-notes"
                                                                   class="col-sm-12 col-form-label col-form-label-sm">Коментарий
                                                                к заказу</label>
                                                            <div class="col-sm-12">
                                                                <textarea class="form-control" form="aaa" name="comment" id="invoice-detail-notes"
                                                                          placeholder='Добавить коментарий к заказу, так же можно добавить даты доставки'
                                                                          style="height: 88px;"></textarea>
                                                            </div>
                                                        </div>

                                                    </div>

                                                </div>
                                                <div class="form-group row invoice-note">
                                                    <div class="invoice-totals-row invoice-summary-balance-due">
                                                        <div class="col-md-10">
                                                            <label for="date">Введите адресс доставки</label>
                                                            <input id="address" type="text" form="aaa" name="address"
                                                                   class="form-group"
                                                                   placeholder="Начните вводить адрес ...">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>

                                        <div class="col-xl-12 mt-4 ">
                                            <div class="invoice-action-btn">
                                                <div class="col-xl-12 col-md-4">
                                                    <a href="" class="btn btn-primary btn-send">Сделать заказ</a>
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
        </div>
    </div>

@endsection
@section('style')
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href={{asset("assets/css/scrollspyNav.css")}} rel="stylesheet" type="text/css"/>
    <link href={{asset("plugins/file-upload/file-upload-with-preview.min.css")}} rel="stylesheet" type="text/css"/>
    <link href={{asset("styleB/assets/css/scrollspyNav.css")}} rel="stylesheet" type="text/css"/>
    <link href={{asset("assets/css/apps/invoice-add.css")}} rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" type="text/css" href={{asset("plugins/dropify/dropify.min.css")}}>
    <link rel="stylesheet" type="text/css" href={{asset("assets/css/forms/theme-checkbox-radio.css")}}>
    <link href={{asset("plugins/flatpickr/flatpickr.css")}} rel="stylesheet" type="text/css">
    <link href={{asset("plugins/flatpickr/custom-flatpickr.css")}} rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href={{asset("styleB/plugins/select2/select2.min.css")}}>

    <!-- END PAGE LEVEL STYLES -->
@endsection

@section('script')
    <script src="https://data.pbprog.ru/fiasSuggestions.min.js"></script>
    <script>
        let input = document.getElementById('address');

        let inputSuggestion = new FiasSuggestions({
            APIKey: "5f14c023fa6645c6b5c8246ae788204aff223819",
            hierarchyMode: 'adm',
            input: input,
            /* Вызывается, когда пользователь выбирает подсказку */
            onSelect: function (suggestion) {
                console.log(suggestion);
            },
        });
    </script>

    </script>
    <script src={{asset("plugins/dropify/dropify.min.js")}}></script>
    <script src={{asset("plugins/flatpickr/flatpickr.js")}}></script>
    <script src={{asset("assets/js/apps/invoice-add.js")}}></script>
    <script src={{asset("styleB/plugins/select2/select2.min.js")}}></script>
    <script src={{asset("styleB/plugins/select2/custom-select2.js")}}></script>
    <script>
        $(document).ready(function () {
            $('.js-example-basic-multiple').select2();
        });
    </script>
@endsection
