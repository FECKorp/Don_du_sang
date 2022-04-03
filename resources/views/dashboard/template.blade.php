<!DOCTYPE html>
<html dir="ltr" lang="en">
<head>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>

    <meta name="robots" content="noindex,nofollow"/>
    <title>DDS - Dashboard</title>
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
          integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset("dashboard/plugins/images/favicon.png") }}"/>
    <!-- Custom CSS -->
    <link href="{{ asset("dashboard/plugins/bower_components/chartist/dist/chartist.min.css") }}" rel="stylesheet"/>
    <link rel="stylesheet"
          href="{{ asset("dashboard/plugins/bower_components/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.css") }}"/>
    <!-- Custom CSS -->
    <link href="{{ asset("dashboard/css/style.css") }}" rel="stylesheet"/>
</head>

<body>

<div class="preloader">
    <div class="lds-ripple">
        <div class="lds-pos"></div>
        <div class="lds-pos"></div>
    </div>
</div>

<div id="main-wrapper" data-layout="vertical" data-navbarbg="skin5" data-sidebartype="full"
     data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">
    @include("dashboard.component.topbar")

    @include("dashboard.component.sidebar")

    <div class="page-wrapper">

        @if(Session::has("error"))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                {{ Session::get("error") }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif

        @if(Session::has("success"))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ Session::get("success") }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif

        @if ($errors->any())
            <div class="row" style="margin-top: 10px">
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            </div>
        @endif

        @yield("content")
    </div>

    @include("components.footer")
</div>

<script src="{{ asset("dashboard/plugins/bower_components/jquery/dist/jquery.min.js") }}"></script>
<!-- Bootstrap tether Core JavaScript -->
<script src="{{ asset("dashboard/bootstrap/dist/js/bootstrap.bundle.min.js") }}"></script>
<script src="{{ asset("dashboard/js/app-style-switcher.js") }}"></script>
<script src="{{ asset("dashboard/plugins/bower_components/jquery-sparkline/jquery.sparkline.min.js") }}"></script>
<!-- Bootstrap -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF"
        crossorigin="anonymous">
</script>
<!--Wave Effects -->
<script src="{{ asset("dashboard/js/waves.js") }}"></script>
<!--Menu sidebar -->
<script src="{{ asset("dashboard/js/sidebarmenu.js") }}"></script>
<!--Custom JavaScript -->
<script src="{{ asset("dashboard/js/custom.js") }}"></script>
<!--This page JavaScript -->
<script src="{{ asset("dashboard/plugins/bower_components/chartist/dist/chartist.min.js") }}"></script>
<script src="{{ asset("dashboard/plugins/bower_components/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js") }}"></script>
<!-- My Custom Script -->
<script src="{{ asset("dashboard/js/pages/dashboards/dashboard1.js") }}"></script>
<script src="{{ asset("dashboard/js/User_Gestion.js") }}"></script>
</body>
</html>
