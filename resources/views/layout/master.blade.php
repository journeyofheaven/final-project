<!DOCTYPE html>
<html lang="en">
   <head>
      <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.css">
  
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.js"></script>

      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>Pluto - Responsive Bootstrap Admin Panel Templates</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- site icon -->
      <link rel="icon" href="{{asset('pluto-1.0.0/images/fevicon.png')}}" type="image/png" />
      <!-- bootstrap css -->
      <link rel="stylesheet" href="{{asset('pluto-1.0.0/css/bootstrap.min.css')}}" />
      <!-- site css -->
      <link rel="stylesheet" href="{{asset('pluto-1.0.0/style.css')}}" />
      <!-- responsive css -->
      <link rel="stylesheet" href="{{asset('pluto-1.0.0/css/responsive.css')}}" />
      <!-- color css -->
      <link rel="stylesheet" href="{{asset('pluto-1.0.0/css/colors.css')}}" />
      <!-- select bootstrap -->
      <link rel="stylesheet" href="{{asset('pluto-1.0.0/css/bootstrap-select.css')}}" />
      <!-- scrollbar css -->
      <link rel="stylesheet" href="{{asset('pluto-1.0.0/css/perfect-scrollbar.css')}}" />
      <!-- custom css -->
      <link rel="stylesheet" href="{{asset('pluto-1.0.0/css/custom.css')}}" />
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->
   </head>
   <body class="dashboard dashboard_1">
      <div class="full_container">
         <div class="inner_container">
            <!-- Sidebar  -->
           @include('partial/sidebar')
            <!-- end sidebar -->
            <!-- right content -->
            <div id="content">
               <!-- topbar -->
                @include('partial/navbar')
               <!-- end topbar -->
               <!-- dashboard inner -->
               @yield('content')
               </div>
               <!-- end dashboard inner -->

            </div>
         </div>
      </div>
      <!-- jQuery -->
      <script src="{{asset('pluto-1.0.0/js/jquery.min.js')}}"></script>
      <script src="{{asset('pluto-1.0.0/js/popper.min.js')}}"></script>
      <script src="{{asset('pluto-1.0.0/js/bootstrap.min.js')}}"></script>
      <!-- wow animation -->
      <script src="{{asset('pluto-1.0.0/js/animate.js')}}"></script>
      <!-- select country -->
      <script src="{{asset('pluto-1.0.0/js/bootstrap-select.js')}}"></script>
      <!-- owl carousel -->
      <script src="{{asset('pluto-1.0.0/js/owl.carousel.js')}}"></script> 
      <!-- chart js -->
      <script src="{{asset('pluto-1.0.0/js/Chart.min.js')}}"></script>
      <script src="{{asset('pluto-1.0.0/js/Chart.bundle.min.js')}}"></script>
      <script src="{{asset('pluto-1.0.0/js/utils.js')}}"></script>
      <script src="{{asset('pluto-1.0.0/js/analyser.js')}}"></script>
      <!-- nice scrollbar -->
      <script src="{{asset('pluto-1.0.0/js/perfect-scrollbar.min.js')}}"></script>
      <script>
         var ps = new PerfectScrollbar('#sidebar');
      </script>
      <!-- custom js -->
      <script src="{{asset('pluto-1.0.0/js/custom.js')}}"></script>
      <script src="{{asset('pluto-1.0.0/js/chart_custom_style1.js')}}"></script>
      <script src="{{asset('js/dataTables.bootstrap4.js')}}"></script>
      <script src="{{asset('js/jquery.dataTables.js')}}"></script>
      <script>
         $(function (){
             $("#tabel").DataTable();
         });
     </script>
               <script>
                  $(document).ready(function() {
                  $('#tabel').DataTable();
                } );
              </script>
    @include('sweetalert::alert')
   
    @stack('scripts')
    @stack('tabel')
  </body>
</html>