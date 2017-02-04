<!DOCTYPE html>
<html lang="en">

  <!-- Head del documento, se incluye estilos y propios y del template -->
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- <link href="css/libs.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{asset('css/libs.css')}}"/>    -->
    
    <!-- <link href="css/libs/bootstrap.min.css" rel="stylesheet">
    <link href="css/libs/font-awesome.min.css" rel="stylesheet">
    <link href="css/libs/nprogress.css" rel="stylesheet">
    <link href="css/libs/fullcalendar.min.css" rel="stylesheet">
    <link href="css/libs/fullcalendar.print.css" rel="stylesheet" media="print">
    <link href="css/libs/custom.min.css" rel="stylesheet"> -->
    <!-- <link href="css/libs/image-picker.css" rel="stylesheet"> -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/libs/libs.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}"/>

    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>
    
  </head>

  <body class="login">

    <div>
      <a class="hiddenanchor" id="signup"></a>
      <a class="hiddenanchor" id="signin"></a>

      <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content">
            <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
              {{ csrf_field() }}

              <h1>Iniciar Sesion</h1>
              <div>
                <input id="email" type="email" class="form-control" name="email" placeholder="Email" required autofocus />
              </div>
              <div>
                <input id="password" type="password" class="form-control" name="password" placeholder="Contraseña" required/>
              </div>
              <div>
                <button class="btn btn-default submit" type="submit">Conectarse</button>
                <div class="separator"></div>
                <a class="reset_pass" href="{{ url('/password/reset') }}">¿ Olvido su contraseña ?</a>
              </div>

              <div class="clearfix"></div>
              
              

              <!-- <div class="separator">
                <p class="change_link">New to site?
                  <a href="#signup" class="to_register"> Create Account </a>
                </p>

                <div class="clearfix"></div>
                <br />

                <div>
                  <h1><i class="fa fa-paw"></i> Gentelella Alela!</h1>
                  <p>©2016 All Rights Reserved. Gentelella Alela! is a Bootstrap 3 template. Privacy and Terms</p>
                </div>
              </div> -->
            </form>
          </section>
        </div>

        <!-- <div id="register" class="animate form registration_form">
          <section class="login_content">
            <form>
              <h1>Create Account</h1>
              <div>
                <input type="text" class="form-control" placeholder="Username" required="" />
              </div>
              <div>
                <input type="email" class="form-control" placeholder="Email" required="" />
              </div>
              <div>
                <input type="password" class="form-control" placeholder="Password" required="" />
              </div>
              <div>
                <a class="btn btn-default submit" href="index.html">Submit</a>
              </div>

              <div class="clearfix"></div>

              <div class="separator">
                <p class="change_link">Already a member ?
                  <a href="#signin" class="to_register"> Log in </a>
                </p>

                <div class="clearfix"></div>
                <br />

                <div>
                  <h1><i class="fa fa-paw"></i> Gentelella Alela!</h1>
                  <p>©2016 All Rights Reserved. Gentelella Alela! is a Bootstrap 3 template. Privacy and Terms</p>
                </div>
              </div>
            </form>
          </section>
        </div> -->
      </div>
    </div>
    
    <!-- <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/fastclick.js"></script>
    <script src="js/nprogress.js"></script> -->
    <!--<script src="js/moment.min.js"></script>
    <script src="js/fullcalendar.min.js"></script>
    <script src="js/es.js"></script>
    <script src="js/jquery.smartWizard.js"></script>
    <script src="js/image-picker.js"></script>
    <script src="js/custom.min.js"></script> -->

    <script type="text/javascript" src="{!! asset('js/lib/libs.js') !!}"></script>
    <script src="{{ asset('js/app.js') }}"></script>
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