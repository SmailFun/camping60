<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title>Branko-Admin panel</title>
    <link rel="shortcut icon" type="image/x-icon" href={{asset("style/images/fav.svg")}}/>
    <link href={{asset("assets/css/loader.css")}} rel="stylesheet" type="text/css" />
    <script src={{asset("assets/js/loader.js")}}></script>
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700" rel="stylesheet">
    <link href={{asset("bootstrap/css/bootstrap.min.css")}} rel="stylesheet" type="text/css"/>
    <link href={{asset("assets/css/plugins.css")}} rel="stylesheet" type="text/css"/>
    <!-- END GLOBAL MANDATORY STYLES -->

    <!-- BEGIN PAGE LEVEL STYLES -->

    <link href={{asset("assets/css/apps/mailing-chat.css")}} rel="stylesheet" type="text/css"/>
    <link href={{asset("plugins/apex/apexcharts.css")}} rel="stylesheet" type="text/css">
    <link href={{asset("assets/css/dashboard/dash_1.css")}} rel="stylesheet" type="text/css" />
    <!-- END PAGE LEVEL STYLES -->
    <!-- BEGIN CUSTOM STYLES -->
    @yield('style')

</head>
<body class="sidebar-noneoverflow" data-spy="scroll" data-target="#navSection" data-offset="100">
@include('inc.user.navbar')
<div class="main-container" id="container">

    <div class="overlay"></div>
    <div class="cs-overlay"></div>
    <div class="search-overlay"></div>
    @include('inc.user.sidebar')
    @yield('content')
</div>
<script src={{asset("assets/js/libs/jquery-3.1.1.min.js")}}></script>
<script src={{asset("bootstrap/js/popper.min.js")}}></script>
<script src={{asset("bootstrap/js/bootstrap.min.js")}}></script>
<script src={{asset("plugins/perfect-scrollbar/perfect-scrollbar.min.js")}}></script>
<script src={{asset("assets/js/app.js")}}></script>
@yield('script')
<script>
    $(document).ready(function () {
        App.init();
    });
</script>
<script src={{asset("assets/js/custom.js")}}></script>
<!-- END GLOBAL MANDATORY SCRIPTS -->

<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src={{asset("assets/js/apps/mailbox-chat.js")}}></script>
<script src={{asset("plugins/apex/apexcharts.min.js")}}></script>
<script src={{asset("assets/js/dashboard/dash_1.js")}}></script>
<script src={{asset("plugins/bootstrap-touchspin/custom-bootstrap-touchspin.js")}} ></script>
</body>
</html>
