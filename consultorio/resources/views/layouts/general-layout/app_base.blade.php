<!DOCTYPE html>
<html lang="en">

  <!-- Head del documento, se incluye estilos y propios y del template -->
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Consultorio</title>

    <!-- <link href="css/libs.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{asset('css/libs.css')}}"/>    -->
    
    <link href="css/libs/bootstrap.min.css" rel="stylesheet">
    <link href="css/libs/font-awesome.min.css" rel="stylesheet">
    <link href="css/libs/nprogress.css" rel="stylesheet">
    <link href="css/libs/fullcalendar.min.css" rel="stylesheet">
    <link href="css/libs/fullcalendar.print.css" rel="stylesheet" media="print">
    <link href="css/libs/custom.min.css" rel="stylesheet">
    <link href="css/libs/image-picker.css" rel="stylesheet">
    <link href="css/app.css" rel="stylesheet">
    
  </head>

  <body class="nav-md">

    <div class="container body">
      <div class="main_container">
        
        <!-- lateral menu left_col -->
        @yield('lateral_menu')
        <!-- /lateral menu left_col -->

        <!-- top navigation -->        
        @yield('top_bar')
        <!-- /top navigation -->

        <!-- page content -->
        @yield('content')
        <!-- /page content -->        

        <!-- footer content -->
        <footer>
          <div class="pull-right">
            Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a>
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

    @yield('popup')
    
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/fastclick.js"></script>
    <script src="js/nprogress.js"></script>
    <script src="js/moment.min.js"></script>
    <script src="js/fullcalendar.min.js"></script>
    <script src="js/es.js"></script>
    <script src="js/jquery.smartWizard.js"></script>
    <script src="js/image-picker.js"></script>
    <script src="js/custom.min.js"></script>

    <script src="{{ asset('js/libs/libs.js') }}"></script>
    <!-- <script>
      $(document).ready(function() {
        $('#wizard').smartWizard();

        $('#wizard_verticle').smartWizard({
          transitionEffect: 'slide'
        });

        $('.buttonNext').addClass('btn btn-success');
        $('.buttonPrevious').addClass('btn btn-primary');
        $('.buttonFinish').addClass('btn btn-default');
      });
    </script> -->

  </body>

</html>