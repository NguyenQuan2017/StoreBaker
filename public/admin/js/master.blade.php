<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from adminui-v1.0.bittyfox.com/default/aqua-black/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 20 Jun 2017 04:40:17 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PHIM</title>
    <!-- Bootstrap -->
    <link href="{{asset('admin/css/bootstrap.min.css')}}" rel="stylesheet">
 
    <!-- dataTables -->
    <link href="{{asset('admin/css/buttons.dataTables.min.css')}}" rel="stylesheet">
    <link href="{{asset('admin/css/dataTables.bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('admin/css/responsive.dataTables.min.css')}}" rel="stylesheet">
    <link href="{{asset('admin/css/fixedHeader.dataTables.min.css')}}" rel="stylesheet">

    <!-- Fontes -->
    <link href="{{asset('admin/css/font-awesome.min.css')}}" rel="stylesheet">
    
    <link href="{{asset('admin/css/buttons.css')}}" rel="stylesheet">
    <!-- animate css -->
    <link href="{{asset('admin/css/animate.css')}}" rel="stylesheet">
    <!-- top nev css -->
    <link href="{{asset('admin/css/page-header.css')}}" rel="stylesheet">
    <!-- adminui main css -->
    <link href="{{asset('admin/css/main.css')}}" rel="stylesheet">


    <!-- aqua black theme css -->
    <link href="{{asset('admin/css/aqua-black.css')}}" rel="stylesheet">
    <!-- media css for responsive  -->
    <link href="{{asset('admin/css/main.media.css')}}" rel="stylesheet">

        <!-- AdminUI demo css-->
    <link href="{{asset('admin/css/adminUIdemo.css')}}" rel="stylesheet">

    <!-- Jquery confirm -->
    <link href="{{asset('admin/css/jquery-confirm.min.css')}}" rel="stylesheet">
    <!-- Summernote -->
    <link href="{{asset('admin/css/bootstrap-wysihtml5.css')}}" rel="stylesheet">
    <link href="{{asset('admin/css/bootstrap-multiselect.css')}}" rel="stylesheet">
    <!-- <link href="{{asset('admin/css/jquery.dataTables.min.css')}}" rel="stylesheet"> -->
</head>

<body class="page-header-fixed ">
   <!-- BEGIN HEADER -->
        @include('admin/master/layout/header/header')
   <!-- END HEADER -->

    <div class="page-container">
    <!-- Start page sidebar wrapper -->
        @include('admin/master/layout/sidebar/sidebar')
    <!-- End page sidebar wrapper -->
        <!-- Start page content wrapper -->
        <div class="page-content-wrapper animated fadeInRight">
            <div class="page-content">  
                @yield('content')   

                 <!-- Footer -->
                 @include('admin/master/layout/footer/footer')
                 <!-- End footer -->              
            </div>
        </div>
      <div class="clearfix"> </div>
       
     
        
    </div>

    <!-- start theme config -->
        @include('admin/master/layout/setting/theme-config')
    <!-- end theme config -->
   

    <!-- Go top -->
    <a href="#" class="scrollup"><i class="fa fa-chevron-up"></i></a>
    <!-- Go top -->
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="{{asset('admin/js/vendor/jquery.min.js')}}"></script>
    <!-- bootstrap js -->
    <script src="{{asset('admin/js/vendor/bootstrap.min.js')}}"></script>
    <!--  morris Charts  -->

    <!-- dataTables-->
    <script type="text/javascript" src="{{asset('admin/js/vendor/jquery.dataTables.js')}}"></script>
    <script type="text/javascript" src="{{asset('admin/js/vendor/dataTables.bootstrap.min.js')}}"></script>
    <!-- js for print and download -->
    <script type="text/javascript" src="{{asset('admin/js/vendor/dataTables.buttons.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('admin/js/vendor/buttons.flash.min.js')}}"></script>
   
    <script type="text/javascript" src="{{asset('admin/js/vendor/buttons.print.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('admin/js/vendor/dataTables.responsive.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('admin/js/vendor/dataTables.fixedHeader.min.js')}}"></script>
    
    <script src="{{asset('admin/js/vendor/chartJs/Chart.bundle.js')}}"></script>
    <script src="{{asset('admin/js/dashboard1.js')}}"></script>
    <script src="{{asset('admin/js/bootstrapValidator.min.js')}}"></script>

    <!-- slimscroll js -->
    <script type="text/javascript" src="{{asset('admin/js/vendor/jquery.slimscroll.js')}}"></script>
  
    <!-- Sparkline -->
<script src="{{asset('admin/js/vendor/jquery.sparkline.min.js')}}"></script>
<!-- main js -->
<script src="{{asset('admin/js/main.js')}}"></script>
<!-- AdminUI demo js-->
<script src="{{asset('admin/js/adminUIdemo.js')}}"></script>

<!-- Jquery confirm -->
<script src="{{asset('admin/js/jquery-confirm.min.js')}}"></script>
<!-- Summer note -->
<script src="{{asset('admin/js/summernote.min.js')}}"></script>
<script src="{{asset('admin/js/validate.js')}}"></script>
<script src="{{asset('admin/js/wysihtml5-0.3.0.js')}}"></script>
<script src="{{asset('admin/js/bootstrap-wysihtml5.js')}}"></script>
<script src="{{asset('admin/js/bootstrap-multiselect.min.js')}}"></script>
<script src="{{asset('admin/js/jquery-confirm.min.js')}}"></script>
<!-- <script src="{{asset('admin/js/jquery.dataTables.min.js')}}"></script> -->

    <script>
    $(document).ready(function() {

        $('.textarea_editor').wysihtml5();
    });
    </script>

<script>
    $(document).ready(function(){
        $('#example').DataTable();
    });
</script>

<script>
    $('div.alert').delay(3000).slideUp();
</script>

        <!-- Initialize the plugin: -->
    <script type="text/javascript">
        $(document).ready(function() {
            $('#select_multi').multiselect();
        });
    </script>

    <script>
    $(".confirm").confirm();
    </script>
</body>
</html>