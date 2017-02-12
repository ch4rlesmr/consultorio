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
    <link href="css/libs/nprogress.css" rel="stylesheet"> -->
    <!-- <link href="css/libs/fullcalendar.min.css" rel="stylesheet">
    <link href="css/libs/fullcalendar.print.css" rel="stylesheet" media="print"> -->
    <!-- <link href="css/libs/custom.min.css" rel="stylesheet"> -->
    <!-- <link href="css/libs/image-picker.css" rel="stylesheet"> -->
    <!-- <link href="css/app.css" rel="stylesheet"> -->
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
            <!-- <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
              {{ csrf_field() }} -->
            <!-- {!! Form::open(['url' => 'foo/bar']) !!} -->
            
            {{ Form::open(array('action' => 'Auth\RegisterController@register', 'method'=>'POST', 'class' => 'mode2', 'novalidate')) }}

              <h1>Registrar usuario</h1>
              <div class="item form-group">
                <input id="name" type="text" class="form-control" name="name" data-validate-length-range="6" data-validate-words="1" placeholder="Nombre" required="required" />
              </div>
              <div class="item">
                <input id="email" type="email" class="form-control" name="email" placeholder="Email" required="required"/>
              </div>
              <div class="item">
                <input id="password" type="password" name="password" data-validate-length="6,8" class="form-control" placeholder="Contraseña" required="required"/>
              </div>
              <!-- <div class="item">
                <input id="confirm_password" type="password" class="form-control" name="confirm_password" placeholder="Confirmar Contraseña" required="required"/>
              </div> -->
              <div class="item">
                <select name="role" id="role" class="form-control" required>
                    <option value="AD">Administrador</option>
                    <option value="SU">Super Administrador</option>
                </select>
                <div class="separator"></div>
              </div>
              <div>
                <button id="send" type="submit" class="btn btn-success">Conectarse</button>
              </div>

              <div class="clearfix"></div>
              
            {!! Form::close() !!}
          </section>
        </div>

      </div>
    </div>
    
    <!--<script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/fastclick.js"></script>
    <script src="js/nprogress.js"></script>
    <script src="js/moment.min.js"></script>
    <script src="js/fullcalendar.min.js"></script>
    <script src="js/es.js"></script>
    <script src="js/jquery.smartWizard.js"></script>
    <script src="js/image-picker.js"></script>
    <script src="js/validator.js"></script>
    <script src="js/custom.min.js"></script>-->

    <script type="text/javascript" src="{!! asset('js/lib/libs.js') !!}"></script>
    <script src="{{ asset('js/app.js') }}"></script>

    <!--<script src="{{ asset('js/libs/libs.js') }}"></script>-->
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