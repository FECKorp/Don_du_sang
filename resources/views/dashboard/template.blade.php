<!DOCTYPE html>
<html dir="ltr" lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <meta name="robots" content="noindex,nofollow" />
    <title>DDS - Dashboard</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset("dashboard/plugins/images/favicon.png") }}"/>
    <!-- Custom CSS -->
    <link href="{{ asset("dashboard/plugins/bower_components/chartist/dist/chartist.min.css") }}" rel="stylesheet"/>
    <link rel="stylesheet" href="{{ asset("dashboard/plugins/bower_components/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.css") }}"/>
    <!-- Custom CSS -->
    <link href="{{ asset("dashboard/css/style.css") }}" rel="stylesheet" />
</head>

<body>

<div class="preloader">
    <div class="lds-ripple">
        <div class="lds-pos"></div>
        <div class="lds-pos"></div>
    </div>
</div>

<div
    id="main-wrapper"
    data-layout="vertical"
    data-navbarbg="skin5"
    data-sidebartype="full"
    data-sidebar-position="absolute"
    data-header-position="absolute"
    data-boxed-layout="full"
>
    @include("dashboard.component.topbar")

    @include("dashboard.component.sidebar")

    <div class="page-wrapper">
        @yield("content")
    </div>

</div>

<script src="{{ asset("dashboard/plugins/bower_components/jquery/dist/jquery.min.js") }}"></script>
<!-- Bootstrap tether Core JavaScript -->
<script src="{{ asset("dashboard/bootstrap/dist/js/bootstrap.bundle.min.js") }}"></script>
<script src="{{ asset("dashboard/js/app-style-switcher.js") }}"></script>
<script src="{{ asset("dashboard/plugins/bower_components/jquery-sparkline/jquery.sparkline.min.js") }}"></script>
<!--Wave Effects -->
<script src="{{ asset("dashboard/js/waves.js") }}"></script>
<!--Menu sidebar -->
<script src="{{ asset("dashboard/js/sidebarmenu.js") }}"></script>
<!--Custom JavaScript -->
<script src="{{ asset("dashboard/js/custom.js") }}"></script>
<!--This page JavaScript -->
<script src="{{ asset("dashboard/plugins/bower_components/chartist/dist/chartist.min.js") }}"></script>
<script src="{{ asset("dashboard/plugins/bower_components/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js") }}"></script>
<script src="{{ asset("dashboard/js/pages/dashboards/dashboard1.js") }}"></script>
</body>
</html>