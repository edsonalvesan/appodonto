<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Agnus Cloud</title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="//cdnjs.cloudflare.com/ajax/libs/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <!-- Ionicons -->
        <link href="//code.ionicframework.com/ionicons/1.5.2/css/ionicons.min.css" rel="stylesheet" type="text/css" />

        <link href="{{ asset('/css/AdminLTE.css') }}" rel="stylesheet">
        
       <!-- Daterange picker -->
       <link href="{{ asset('/js/daterangepicker/daterangepicker-bs3.css') }}" rel="stylesheet" type="text/css" />
       <link href="{{ asset('/js/datepicker/css/datepicker.css') }}" rel="stylesheet" type="text/css" />

        
    <!-- Select2 -->
    <link rel="stylesheet" href="{{ asset('/select/select2/dist/css/select2.css') }}">
    <link rel="stylesheet" href="{{ asset('/select/select2-bootstrap-css/select2-bootstrap.css') }}">
    
    <link href="{{ asset('/css/material/animate-css/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/material/sweet-alert/sweet-alert.min.css') }}" rel="stylesheet">
    
     {{-- Upload --}}
     <link rel="stylesheet" href="{{ asset('/jquery-file-upload/css/jquery.fileupload.css') }}">
    
    </head>
    <body class="skin-blue">
        <!-- header logo: style can be found in header.less -->
        
        <header class="header">          
            <a href="../../index.html" class="logo">
                <!-- Add the class icon to your logo image or logo icon to add the margining -->
                Gestão de Orçamentos
            </a>
            
            <!-- Header Navbar: style can be found in header.less -->
            <nav class="navbar navbar-static-top" role="navigation">
                <!-- Sidebar toggle button-->
                <a href="#" class="navbar-btn sidebar-toggle" data-toggle="offcanvas" role="button">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </a>
                <div class="navbar-right">
                    <ul class="nav navbar-nav">
                        {{-- 
                        @include('layout.partials.alertmenu')
                        --}} 
                        {{-- User Account --}} 
                        @include('layout.partials.infouser')
                    </ul>
                </div>
            </nav>
        </header>

<!-- Menu Lateral Esquerdo-->

<div class="wrapper row-offcanvas row-offcanvas-left">
            <!-- Left side column. contains the logo and sidebar -->
            <aside class="left-side sidebar-offcanvas">
                <!-- sidebar: style can be found in sidebar.less -->
                <section class="sidebar">
                    <!-- Sidebar user panel -->
                    <div class="user-panel">
                        <div class="pull-left image">
                            <img src="{{ asset('/assets/img/avatar2.png') }}" class="img-circle" alt="User Image" />
                        </div>
                        <div class="pull-left info">
                            <p>Olá, {{ Auth::user()->name }}</p>
                        </div>
                    </div> 

 


<ul class="sidebar-menu">      
 
   @include('layout.partials.sidemenu')                    
            
</ul>

</section>               <!-- /.sidebar -->
</aside>      

<!--End Menu Lateral Esquerdo -->

@yield('content')



@section('scripts')
        <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js" type="text/javascript"></script>
        
        <!-- DATA TABES SCRIPT -->
        <script src="{{ asset('/js/plugins/datatables/jquery.dataTables.js') }}" type="text/javascript"></script>
        <script src="{{ asset('/js/plugins/datatables/dataTables.bootstrap.js') }}" type="text/javascript"></script>
        
        <!-- AdminLTE App -->
        <script src="{{ asset('/js/AdminLTE/app.js') }}" type="text/javascript"></script>
        <!-- Select2 -->
       <script src="{{ asset('/select/select2/dist/js/select2.js') }}"></script>
       <script src="{{ asset('/select/select2/dist/js/i18n/pt-BR.js') }}"></script>
       
       <!--Form Elements-->
       <script src="{{ asset('/js/pages/jquery.maskedinput.min.js') }}"></script>
       <script src="{{ asset('/js/pages/form-elements.js') }}"></script>
               
        <!-- page script -->

        <!-- Validator -->

        {{-- Upload --}}
        <script src="{{ asset('/jquery-file-upload/js/vendor/jquery.ui.widget.js') }}"></script>
        <script src="{{ asset('/jquery-file-upload/js/jquery.fileupload.js') }}"></script>
        
        
        <script src="{{ asset('/css/material/sweet-alert/sweet-alert.min.js') }}"></script>

<script type="text/javascript">
$.ajaxSetup({
    headers:{
        'X-CSRF-TOKEN':'{!! csrf_token() !!}'
    }
});
</script>
@show
    </body>
</html>             
        
