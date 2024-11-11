@extends('layouts.appAdmin')
@section('content')
    <div id="content" class="main-content">
        <div class="container">
                    <div class="row layout-spacing layout-top-spacing" id="cancel-row">
                        <div class="col-lg-12">
                            <div class="widget-content searchable-container list">

                                <div class="row">


                                    <div
                                        class="col-xl-8 col-lg-7 col-md-7 col-sm-5 text-sm-right text-center layout-spacing align-self-center">
                                        <div class="d-flex justify-content-sm-end justify-content-center">
                                            <svg id="btn-add-contact" xmlns="http://www.w3.org/2000/svg" width="24"
                                                 height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                 stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                 class="feather feather-user-plus">
                                                <path d="M16 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                                                <circle cx="8.5" cy="7" r="4"></circle>
                                                <line x1="20" y1="8" x2="20" y2="14"></line>
                                                <line x1="23" y1="11" x2="17" y2="11"></line>
                                            </svg>

                                            <div class="switch align-self-center">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                     viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                     stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                     class="feather feather-list view-list active-view">
                                                    <line x1="8" y1="6" x2="21" y2="6"></line>
                                                    <line x1="8" y1="12" x2="21" y2="12"></line>
                                                    <line x1="8" y1="18" x2="21" y2="18"></line>
                                                    <line x1="3" y1="6" x2="3" y2="6"></line>
                                                    <line x1="3" y1="12" x2="3" y2="12"></line>
                                                    <line x1="3" y1="18" x2="3" y2="18"></line>
                                                </svg>
                                            </div>
                                        </div>

                                        <!-- Modal -->
                                        <div class="modal fade" id="addContactModal" tabindex="-1" role="dialog"
                                             aria-labelledby="addContactModalTitle" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-body">
                                                        <i class="flaticon-cancel-12 close" data-dismiss="modal"></i>
                                                        <div class="add-contact-box">
                                                            <div class="add-contact-content">
                                                                <form id="addContactModalTitle">
                                                                    <div class="row">
                                                                        <div class="col-md-6">
                                                                            <div class="contact-name">
                                                                                <i class="flaticon-user-11"></i>
                                                                                <input type="text" id="c-name"
                                                                                       class="form-control"
                                                                                       placeholder="Name">
                                                                                <span class="validation-text"></span>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-6">
                                                                            <div class="contact-email">
                                                                                <i class="flaticon-mail-26"></i>
                                                                                <input type="text" id="c-email"
                                                                                       class="form-control"
                                                                                       placeholder="Email">
                                                                                <span class="validation-text"></span>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <div class="row">
                                                                        <div class="col-md-6">
                                                                            <div class="contact-occupation">
                                                                                <i class="flaticon-fill-area"></i>
                                                                                <input type="text" id="c-occupation"
                                                                                       class="form-control"
                                                                                       placeholder="Occupation">
                                                                            </div>
                                                                        </div>

                                                                        <div class="col-md-6">
                                                                            <div class="contact-phone">
                                                                                <i class="flaticon-telephone"></i>
                                                                                <input type="text" id="c-phone"
                                                                                       class="form-control"
                                                                                       placeholder="Phone">
                                                                                <span class="validation-text"></span>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <div class="row">
                                                                        <div class="col-md-12">
                                                                            <div class="contact-location">
                                                                                <i class="flaticon-location-1"></i>
                                                                                <input type="text" id="c-location"
                                                                                       class="form-control"
                                                                                       placeholder="Location">
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button id="btn-edit" class="float-left btn">Save</button>

                                                        <button class="btn" data-dismiss="modal"><i
                                                                class="flaticon-delete-1"></i> Discard
                                                        </button>

                                                        <button id="btn-add" class="btn">Add</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="searchable-items list">
                                    <div class="items items-header-section">
                                        <div class="item-content">
                                            <div class="">
                                                <div class="n-chk align-self-center text-center">
                                                    <label class="new-control new-checkbox checkbox-primary">
                                                        <input type="checkbox" class="new-control-input"
                                                               id="contact-check-all">
                                                        <span class="new-control-indicator"></span>
                                                    </label>
                                                </div>
                                                <h4>Имя</h4>
                                            </div>
                                            <div class="user-email">
                                                <h4>Почта</h4>
                                            </div>
                                            <div class="user-location">
                                                <h4 style="margin-left: 0;">Телефон</h4>
                                            </div>
                                            <div class="user-phone">
                                                <h4 style="margin-left: 3px;">Тема обращения</h4>
                                            </div>
                                            <div class="action-btn">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                     viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                     stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                     class="feather feather-trash-2  delete-multiple">
                                                    <polyline points="3 6 5 6 21 6"></polyline>
                                                    <path
                                                        d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                                                    <line x1="10" y1="11" x2="10" y2="17"></line>
                                                    <line x1="14" y1="11" x2="14" y2="17"></line>
                                                </svg>
                                            </div>
                                        </div>
                                    </div>
                                    @foreach($data as $el)
                                        <div class="items">
                                            <div class="item-content">
                                                <div class="user-profile">
                                                    <div class="n-chk align-self-center text-center">
                                                        <label class="new-control new-checkbox checkbox-primary">
                                                            <input type="checkbox"
                                                                   class="new-control-input contact-chkbox">
                                                            <span class="new-control-indicator"></span>
                                                        </label>
                                                    </div>
                                                    <img src="assets/img/user.png" alt="avatar">
                                                    <div class="user-meta-info">
                                                        <p class="user-name" data-name="{{$el->name}}">{{$el->name}}</p>
                                                    </div>
                                                </div>
                                                <div class="user-email">
                                                    <p class="info-title">Email: </p>
                                                    <p class="usr-email-addr"
                                                       data-email="{{$el->email}}">{{$el->email}}</p>
                                                </div>
                                                <div class="user-location">
                                                    <p class="info-title">Телефон: </p>
                                                    <p class="usr-location"
                                                       data-location="{{$el->tel}}">{{$el->tel}}</p>
                                                </div>
                                                <div class="user-phone">
                                                    <p class="info-title">Обращение: </p>
                                                    <p class="usr-ph-no"
                                                       data-phone="{{$el->message}}">{{$el->message}}</p>
                                                </div>
                                                <div class="action-btn">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                         viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                         stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                         class="feather feather-edit-2 edit">
                                                        <path
                                                            d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path>
                                                    </svg>

                                                    <a href="{{route('delete',$el->id)}}">  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                         viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                         stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                         class="feather feather-user-minus delete">
                                                        <path d="M16 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                                                        <circle cx="8.5" cy="7" r="4"></circle>
                                                        <line x1="23" y1="11" x2="17" y2="11"></line>
                                                    </svg>
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


                        <a href="{{route('newUser')}}">
                            <button type="submit" form="aaa">
                                <svg xmlns="http://www.w3.org/2000/svg"
                                     xmlns:serif="http://www.serif.com/"
                                     xmlns:xlink="http://www.w3.org/1999/xlink" height="25"
                                     stroke-width="2"
                                     style="fill-rule:evenodd;clip-rule:evenodd;stroke-linejoin:round;stroke-miterlimit:2;"
                                     version="1.1" viewBox="0 0 32 32" width="25"
                                     xml:space="preserve"><path
                                        d="M22.001,18.014c0,-1.657 -1.343,-3 -3,-3c-1.742,0 -4.257,0 -6,0c-1.656,0 -3,1.343 -3,3l0,5.986c0,0.552 0.448,1 1,1l10,0c0.553,0 1,-0.448 1,-1l0,-5.986Z"/>
                                    <path
                                        d="M23.772,17.014c0.149,0.542 0.229,1.118 0.229,1.715l0,6.842c0,0.51 -0.097,0.994 -0.272,1.429l6.271,0c0.552,0 1,-0.448 1,-1l-0,-5.986c-0,-1.657 -1.343,-3 -3,-3l-4.228,0Z"/>
                                    <path
                                        d="M8.23,17.014l-4.23,0c-0.796,0 -1.559,0.316 -2.121,0.879c-0.563,0.562 -0.879,1.325 -0.879,2.121l-0,5.986c-0,0.552 0.448,1 1,1l6.274,0c-0.175,-0.435 -0.273,-0.919 -0.273,-1.429l0,-6.842c0,-0.597 0.081,-1.173 0.229,-1.715Z"/>
                                    <circle cx="7" cy="11.002" r="4"/>
                                    <circle cx="16.001" cy="9.002" r="4"/>
                                    <circle cx="25" cy="11.002" r="4"/>
                                                </svg>
                            </button>
                        </a>


                        <a href="{{route('delete',$el->id)}}">
                            <button>
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
