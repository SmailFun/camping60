<div id="content" class="main-content" style="margin-top: 102px">



        <img src={{ asset("style/images/menu.jpg") }} width="1850px" >



</div>


@section('style')
    <link href={{asset("assets/css/apps/invoice-add.css")}} rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" type="text/css" href={{asset("plugins/dropify/dropify.min.css")}}>
    <link rel="stylesheet" type="text/css" href={{asset("assets/css/forms/theme-checkbox-radio.css")}}>
    <link href={{asset("plugins/flatpickr/flatpickr.css")}} rel="stylesheet" type="text/css">
    <link href={{asset("plugins/flatpickr/custom-flatpickr.css")}} rel="stylesheet" type="text/css">
@endsection

@section('script')
    <script src={{asset("plugins/dropify/dropify.min.js")}}></script>
    <script src={{asset("plugins/flatpickr/flatpickr.js")}}></script>
    <script src={{asset("assets/js/apps/invoice-add.js")}}></script>
@endsection
