
<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta content="" name="description" />
    <meta content="webthemez" name="author" />
    <title>@yield('title')</title>
	<!-- Bootstrap Styles-->
    <link href="{{ asset('admin') }}/assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FontAwesome Styles-->
    <link href="{{ asset('admin') }}/assets/css/font-awesome.css" rel="stylesheet" />
     <!-- Morris Chart Styles-->
   
        <!-- Custom Styles-->
    <link href="{{ asset('admin') }}/assets/css/custom-styles.css" rel="stylesheet" />
     <!-- Google Fonts-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
     <!-- TABLE STYLES-->
    <link href="{{ asset('admin') }}/assets/js/dataTables/dataTables.bootstrap.css" rel="stylesheet" />
</head>
<body>
    <div id="wrapper">
        
        {{-- navbar --}}
        @include('admin.layouts.include.navbar')
        {{-- end navbar --}}

        {{-- sidebar --}}
        @include('admin.layouts.include.sidebar')
        {{-- end sidebar --}}
        <div id="page-wrapper" >
		    @stack('header')
		
            <div id="page-inner"> 
               
            {{-- content --}}
            @yield('content')
            {{-- end content --}}
            
        </div>
               <footer><p>All right reserved. Template by: <a href="http://webthemez.com">WebThemez.com</a></p></footer>
    </div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
     <!-- /. WRAPPER  -->
    <!-- JS Scripts-->
    <!-- jQuery Js -->
    <script src="{{ asset('admin') }}/assets/js/jquery-1.10.2.js"></script>
      <!-- Bootstrap Js -->
    <script src="{{ asset('admin') }}/assets/js/bootstrap.min.js"></script>
    <!-- Metis Menu Js -->
    <script src="{{ asset('admin') }}/assets/js/jquery.metisMenu.js"></script>
     <!-- DATA TABLE SCRIPTS -->
    <script src="{{ asset('admin') }}/assets/js/dataTables/jquery.dataTables.js"></script>
    <script src="{{ asset('admin') }}/assets/js/dataTables/dataTables.bootstrap.js"></script>
    <script src="{{ asset('admin') }}/assets/ckeditor/ckeditor.js"></script>
    <script>
        $(document).ready(function () {
            $('#dataTables-example').dataTable();
        });
        CKEDITOR.replace('ckeditor');
    </script>
         <!-- Custom Js -->
    <script src="{{ asset('admin') }}/assets/js/custom-scripts.js"></script>
    
   
</body>
</html>
