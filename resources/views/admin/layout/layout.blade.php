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
    <link rel="icon" type="image/png" href={{asset("assets/img//favicon.png")}}>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no'
          name='viewport'/>
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet"/>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <!-- CSS Files -->
    <link href="{{asset('admin/assets/css/bootstrap.min.css')}}" rel="stylesheet"/>
    <link href={{asset("admin/assets/css/paper-dashboard.css")}} rel="stylesheet"/>

    <script src={{asset("admin/assets/js/core/jquery.min.js")}}></script>
</head>
<body class="{{(\Request::is('login')) ? "login-" : ""}}">
<div class="wrapper">
    @include('admin.dashboard.sidebar')
    <div class="main-panel">
        @include('admin.dashboard.navbar')
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
<script src="{{asset("admin/assets/js/plugins/dataTables.bootstrap4.min.js")}}"></script>
<script src="{{asset("admin/assets/js/plugins/dataTables.buttons.min.js")}}"></script>
<script src="{{asset("admin/assets/js/plugins/buttons.bootstrap4.min.js")}}"></script>
<script src="{{asset("admin/assets/js/plugins/buttons.print.min.js")}}"></script>



{{--https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js--}}
{{--https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js--}}
{{--https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js--}}
{{--https://cdn.datatables.net/buttons/1.7.1/js/buttons.html5.min.js--}}
{{--https://cdn.datatables.net/buttons/1.7.1/js/buttons.print.min.js--}}
{{--https://cdn.datatables.net/buttons/1.7.1/js/buttons.colVis.min.js--}}
<!--	Plugin for Tags, full documentation here: https://github.com/bootstrap-tagsinput/bootstrap-tagsinputs  -->
<script src="{{asset("admin/assets/js/plugins/bootstrap-tagsinput.js")}}"></script>
<!-- Plugin for Fileupload, full documentation here: http://www.jasny.net/bootstrap/javascript/#fileinput -->
<script src={{asset("admin/assets/js/plugins/jasny-bootstrap.min.js")}}></script>
{{--<!--  Full Calendar Plugin, full documentation here: https://github.com/fullcalendar/fullcalendar    -->--}}
{{--<script src={{asset("admin/assets/js/plugins/fullcalendar/fullcalendar.min.js")}}></script>--}}
{{--<script src={{asset("admin/assets/js/plugins/fullcalendar/daygrid.min.js")}}></script>--}}
{{--<script src={{asset("admin/assets/js/plugins/fullcalendar/timegrid.min.js')}}></script>--}}
{{--<script src="{{asset("admin/assets/js/plugins/fullcalendar/interaction.min.js')}}"></script>--}}
{{--<!-- Vector Map plugin, full documentation here: http://jvectormap.com/documentation/ -->--}}
{{--<script src="{{asset("admin/assets/js/plugins/jquery-jvectormap.js')}}"></script>--}}
<!--  Plugin for the Bootstrap Table -->
<script src={{asset("admin/assets/js/plugins/nouislider.min.js")}}></script>
<!--  Google Maps Plugin    -->
{{--    <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>--}}
<!-- Chart JS -->
<script src={{asset("admin/assets/js/plugins/chartjs.min.js")}}></script>
<!--  Notifications Plugin    -->
<script src="{{asset("admin/assets/js/plugins/bootstrap-notify.js")}}"></script>
<script src="{{asset("admin/js/tinymce.min.js")}}"></script>
<!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
<script src={{asset("admin/assets/js/paper-dashboard.min.js")}} type="text/javascript"></script>
 <script type="text/javascript">
    tinymce.init({
        setup: function (editor) {
            editor.on('change', function () {
                editor.save();
            });
        },
        selector:'textarea.tinymce-editor',
        branding: false,
        plugins: [
            "advlist autolink lists link image charmap print preview anchor",
            "searchreplace visualblocks code fullscreen",
            "insertdatetime media table contextmenu paste"
        ],
        toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image"

    });
</script>
<script>
    <!--Active class on click-->
    $(document).ready(function(){
        $('.nav li').click(function(){
            $('.nav li').removeClass('active');
            $(this).addClass('active');
        });
    });
    $(document).ready(function () {
        var table =  $('#datatable').DataTable({
            dom: "Blfrtip",
            stateSave: true,
            "pagingType": "full_numbers",
            "lengthMenu": [
                [10, 25, 50, -1],
                [10, 25, 50, "All"]
            ],
            responsive: true,
            language: {
                search: "_INPUT_",
                searchPlaceholder: "Search records",
            },
            buttons: [
                {
                    extend: 'print',
                    exportOptions: {
                        @stack('admin-dashboard-push')
                    },
                    customize: function ( win ) {
                        $(win.document.body)
                            .css( 'font-size', '10pt' )

                        $(win.document.body).find( 'table' )
                            .addClass( 'compact' )
                            .css( 'font-size', 'inherit' );
                    }
                }
            ]

        });
        table.buttons().container()
            .appendTo( '#example_wrapper .col-md-6:eq(0)' );
    });
</script>

@stack('dcmc-push')
@stack('case-nature-push')
@stack('case-proceeding-push')
</body>
</html>
