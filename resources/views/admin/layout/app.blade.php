<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>


    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('admin/css/app.css') }}" rel="stylesheet">
    <link rel="apple-touch-icon" sizes="76x76" href={{asset('admin/assets/img//apple-icon.png')}}>
    <link rel="icon" type="image/png" href={{asset("admin/assets/img//favicon.png")}}>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no'
          name='viewport'/>
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet"/>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <!-- CSS Files -->
    <link href="{{asset('admin/assets/css/bootstrap.min.css')}}" rel="stylesheet"/>
    <link href={{asset("admin/assets/css/paper-dashboard.css")}} rel="stylesheet"/>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
</head>
<body class="{{(\Request::is('login')) ? "login-" : ""}}">
    @include('admin.inc.header')
    <div class="wrapper wrapper-full-page ">
        <div class="full-page section-image" filter-color="black" data-image="../../assets/img/bg/fabio-mangione.jpg">
            <!--   you can change the color of the filter page using: data-color="blue | purple | green | orange | red | rose " -->
            <div class="content">
                    @yield('content')
            </div>
            @include('admin.inc.footer')
        </div>
    </div>
    <script src={{asset("admin/assets/js/core/jquery.min.js")}}></script>
    <script src={{asset("admin/assets/js/core/popper.min.js")}}></script>
    <script src={{asset("admin/assets/js/core/bootstrap.min.js")}}></script>
    <script src={{asset("admin/assets/js/plugins/perfect-scrollbar.jquery.min.js")}}></script>
    <script src={{asset("admin/assets/js/plugins/moment.min.js")}}></script>
    <!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
    <script src={{asset("admin/assets/js/plugins/bootstrap-switch.js")}}></script>
    <!--  Plugin for Sweet Alert -->
    <script src="{{asset("admin/assets/js/plugins/sweetalert2.min.js")}}"></script>
    <!-- Forms Validations Plugin -->
    <script src={{asset("admin/assets/js/plugins/jquery.validate.min.js")}}></script>
    <!--  Plugin for the Wizard, full documentation here: https://github.com/VinceG/twitter-bootstrap-wizard -->
    <script src={{asset("admin/assets/js/plugins/jquery.bootstrap-wizard.js")}}></script>
    <!--	Plugin for Select, full documentation here: http://silviomoreto.github.io/bootstrap-select -->
    <script src={{asset("admin/assets/js/plugins/bootstrap-selectpicker.js")}}></script>
    <!--  Plugin for the DateTimePicker, full documentation here: https://eonasdan.github.io/bootstrap-datetimepicker/ -->
    <script src="{{asset("admin/assets/js/plugins/bootstrap-datetimepicker.js")}}"></script>
    <!--  DataTables.net Plugin, full documentation here: https://datatables.net/    -->
    <script src="{{asset("admin/assets/js/plugins/jquery.dataTables.min.js")}}"></script>
    <!--	Plugin for Tags, full documentation here: https://github.com/bootstrap-tagsinput/bootstrap-tagsinputs  -->
    <script src="{{asset("admin/assets/js/plugins/bootstrap-tagsinput.js")}}"></script>
    <!-- Plugin for Fileupload, full documentation here: http://www.jasny.net/bootstrap/javascript/#fileinput -->
    <script src={{asset("admin/assets/js/plugins/jasny-bootstrap.min.js")}}></script>
    <!--  Full Calendar Plugin, full documentation here: https://github.com/fullcalendar/fullcalendar    -->
    <script src={{asset("admin/assets/js/plugins/fullcalendar/fullcalendar.min.js")}}></script>
    <script src={{asset("admin/assets/js/plugins/fullcalendar/daygrid.min.js")}}></script>
    <script src={{asset('admin/assets/js/plugins/fullcalendar/timegrid.min.js')}}></script>
    <script src="{{asset('admin/assets/js/plugins/fullcalendar/interaction.min.js')}}"></script>
    <!-- Vector Map plugin, full documentation here: http://jvectormap.com/documentation/ -->
    <script src="{{asset('admin/assets/js/plugins/jquery-jvectormap.js')}}"></script>
    <!--  Plugin for the Bootstrap Table -->
    <script src={{asset('admin/assets/js/plugins/nouislider.min.js')}}></script>
    <!--  Google Maps Plugin    -->
{{--    <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>--}}
    <!-- Chart JS -->
    <script src={{asset('admin/assets/js/plugins/chartjs.min.js')}}></script>
    <!--  Notifications Plugin    -->
    <script src="{{asset('admin/assets/js/plugins/bootstrap-notify.js')}}"></script>
    <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
    <script src={{asset('admin/assets/js/paper-dashboard.min.js?v=2.1.1')}} type="text/javascript"></script>
    <!-- Paper Dashboard DEMO methods, don't include it in your project! -->
{{--    <script src={{asset('admin/assets/demo/demo.js')}}></script>--}}
{{--    <script>--}}
{{--        $(document).ready(function () {--}}
{{--            // Javascript method's body can be found in assets/js/demos.js--}}
{{--            demo.initDashboardPageCharts();--}}


{{--            demo.initVectorMap();--}}

{{--        });--}}
{{--    </script>--}}
</body>
</html>
