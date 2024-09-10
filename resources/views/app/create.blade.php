<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="Sleek Dashboard - Free Bootstrap 4 Admin Dashboard Template and UI Kit. It is very powerful bootstrap admin dashboard, which allows you to build products like admin panels, content management systems and CRMs etc.">

    <!-- theme meta -->
    <meta name="theme-name" content="sleek" />

    <title>Tambah Pendaftaran</title>

    <!-- GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500|Poppins:400,500,600,700|Roboto:400,500" rel="stylesheet" />

    <link href="https://cdn.materialdesignicons.com/4.4.95/css/materialdesignicons.min.css" rel="stylesheet" />

    <!-- PLUGINS CSS STYLE -->
    <link href="{{ url ('assets/plugins/simplebar/simplebar.css') }}" rel="stylesheet" />
    <link href="{{ url ('assets/plugins/nprogress/nprogress.css') }}" rel="stylesheet" />

    <!-- No Extra plugin used -->
    <link href="{{ url ('assets/plugins/jvectormap/jquery-jvectormap-2.0.3.css')}}" rel="stylesheet">
    <link href="{{ url ('assets/plugins/daterangepicker/daterangepicker.css')}}" rel="stylesheet">


    <link href="{{ url ('assets/plugins/toastr/toastr.min.css')}}" rel="stylesheet">







    <!-- SLEEK CSS -->
    <link id="sleek-css" rel="stylesheet" href="{{ url ('assets/css/sleek.css') }}" />

    <!-- FAVICON -->
    <link href="{{ url ('assets/img/favicon.png') }}" rel="shortcut icon" />

    <!--
      HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries
    -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script src="{{ url ('assets/plugins/nprogress/nprogress.js') }}"></script>
  </head>

  <body class="header-fixed sidebar-fixed sidebar-dark header-light" id="body">

    <!-- ====================================
    ——— WRAPPER
    ===================================== -->
    <div class="wrapper">

        <!-- ====================================
          ——— LEFT SIDEBAR WITH OUT FOOTER
        ===================================== -->
        @include ('app.layouts.sidebar')


          <!-- ====================================
        ——— PAGE WRAPPER
        ===================================== -->
        <div class="page-wrapper">

          <!-- Header -->

          @include('app.layouts.header')


          <!-- ====================================
          ——— CONTENT WRAPPER
          ===================================== -->
          <div class="content-wrapper">
            <div class="content">






                  <!-- Top Statistics -->

                  @yield('content')



    <!-- End Content Wrapper -->


    <!-- Footer -->

    @include('app.layouts.footer')

    </div> <!-- End Page Wrapper -->
  </div> <!-- End Wrapper -->


    <!-- <script type="module">
      import 'https://cdn.jsdelivr.net/npm/@pwabuilder/pwaupdate';

      const el = document.createElement('pwa-update');
      document.body.appendChild(el);
    </script> -->

    <!-- Javascript -->
    <script src="{{ url('assets/plugins/jquery/jquery.min.js') }}"></script>
    <script src="{{ url('assets/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ url('assets/plugins/simplebar/simplebar.min.js') }}"></script>

    <script src="{{ url('assets/plugins/charts/Chart.min.js') }}"></script>
    <script src="{{ url ('assets/js/chart.js') }}"></script>




    <script src="{{ url ('assets/plugins/jvectormap/jquery-jvectormap-2.0.3.min.js') }}"></script>
    <script src="{{ url('assets/plugins/jvectormap/jquery-jvectormap-world-mill.js')}} "></script>
    <script src="{{ url('assets/js/vector-map.js')}} "></script>

    <script src="{{ url('assets/plugins/daterangepicker/moment.min.js')}} "></script>
    <script src="{{ url('assets/plugins/daterangepicker/daterangepicker.js')}} "></script>
    <script src="{{ url('assets/js/date-range.js')}} "></script>








    <script src='assets/plugins/toastr/toastr.min.js'></script>












    <script src="assets/js/sleek.js"></script>
    <link href="assets/options/optionswitch.css" rel="stylesheet">
    <script src="assets/options/optionswitcher.js"></script>
</body>
</html>
