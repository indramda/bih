<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>.:: {{ $title }} | BIH</title>

    <link rel="shortcut icon" href="{{ asset('home/images/img/favicon.png') }}" />
    <link rel="stylesheet" href="{{ asset('administrator/plugins/fontawesome-free/css/all.css') }}">
    <link rel="stylesheet" href="{{ asset('administrator/plugins/fontawesome-free/css/all.min.css') }}">

    <link rel="stylesheet" href="{{ asset('administrator/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css') }}"">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('administrator/dist/css/adminlte.min.css') }}">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="{{ asset('administrator/plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="{{ asset('administrator/plugins/daterangepicker/daterangepicker.css') }}">
    <link rel="stylesheet" href="{{ asset('administrator/plugins/select2/css/select2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('administrator/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('administrator/plugins/bootstrap4-duallistbox/bootstrap-duallistbox.min.css') }}">
    <!-- BS Stepper -->
    <link rel="stylesheet" href="{{ asset('administrator/plugins/bs-stepper/css/bs-stepper.min.css') }}">
    <!-- dropzonejs -->
    <link rel="stylesheet" href="{{ asset('administrator/plugins/dropzone/min/dropzone.min.css') }}">
    <!-- Theme style -->

    <!-- summernote -->
    <link rel="stylesheet" href="{{ asset('administrator/plugins/summernote/summernote-bs4.min.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/admin-lte@3.1/dist/css/adminlte.min.css">
    {{-- <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css"> --}}
    <link rel="stylesheet" href="{{ asset('administrator/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('administrator/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('administrator/plugins/jqvmap/jqvmap.min.css') }}">




    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css" />
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap4.min.css" />
    
    
    



</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">
        @include('partial.navadmin')
        @yield('konten')
        @include('partial.footeradmin')
    </div>
    <!-- ./wrapper -->

    <script src="{{ asset('administrator/plugins/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('administrator/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('administrator/dist/js/adminlte.js') }}"></script>
    <script src="{{ asset('administrator/dist/js/pages/dashboard.js') }}"></script>
    <script src="{{ asset('administrator/plugins/dropzone/min/dropzone.min.js') }}"></script>
    <script src="{{ asset('administrator/plugins/select2/js/select2.full.min.js') }}"></script>
    <script src="{{ asset('administrator/plugins/summernote/summernote-bs4.min.js') }}"></script>
    <script src="{{ asset('administrator/plugins/bootstrap4-duallistbox/jquery.bootstrap-duallistbox.min.js') }}"></script>
    <script src="{{ asset('administrator/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') }}"></script>

<script src="{{ asset('administrator/plugins/inputmask/jquery.inputmask.min.js') }}"></script>
<script src="{{ asset('administrator/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js') }}"></script>  

    <script src="{{ asset('administrator/plugins/bootstrap-switch/js/bootstrap-switch.min.js') }}"></script>
    <!-- BS-Stepper -->
    <script src="{{ asset('administrator/plugins/jquery-ui/jquery-ui.min.js') }}"></script>
    <script src="{{ asset('administrator/plugins/jquery-knob/jquery.knob.min.js') }}"></script>
    <script src="{{ asset('administrator/plugins/sparklines/sparkline.js') }}"></script>
    <script src="{{ asset('administrator/plugins/moment/moment.min.js') }}"></script>
    <script src="{{ asset('administrator/plugins/daterangepicker/daterangepicker.js') }}"></script>
    <script src="{{ asset('administrator/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>
    <script>
        $(function() {
            // Summernote
            $('#summernote').summernote({
                height: 300,
            })
        })
    </script>
    <script>
        $.widget.bridge('uibutton', $.ui.button)
    </script>
 

 


 <script type="text/javascript" language="javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
 <script type="text/javascript" language="javascript" src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
 <script type="text/javascript" language="javascript" src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap4.min.js"></script>
 <script>  
   $(document).ready(function () {
    $('#example').DataTable();
   });
    </script>
  
 








</body>

</html>


