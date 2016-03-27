<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Sistea de control de casos">
    <meta name="author" content="pepeordonez.com">
    <meta name="keyword" content="despacho, abogados, casos, leyes, chihuahua">

    <title>Sistema de control de Casos</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <!--external css-->
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
        
    <!-- Custom styles for this template -->
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/style-responsive.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->

      <div id="login-page">
        <div class="container">
            {!! Form::open (['route' => 'login', 'method' => 'POST', 'class' => 'form-login'])!!}

                <h2 class="form-login-heading">DÁVILA & ORTEGA ASOCIADOS</h2>

                <div class="login-wrap">
                    @include('flash::message')
                    {!! Form::text('email',null, ['class' => 'form-control','required','placeholder'=>'Usuario'])!!}
                    <br>
                    {!! Form::password('password', ['class' => 'form-control', 'required', 'placeholder'=>'Contraseña'])!!}
                    <hr>
                    {!! form::button('<i class="fa fa-lock"></i> Iniciar Sesion', ['class'=> 'btn btn-theme btn-block', 'type' => 'submit'])!!}
                </div>
              {!! Form::close() !!}
                    
        </div>
      </div>

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

    <!--BACKSTRETCH-->
    <!-- You can use an image of whatever size. This script will stretch to fit in any screen size.-->
    <script type="text/javascript" src="assets/js/jquery.backstretch.min.js"></script>
    <script>
        $.backstretch("assets/img/login-bg.jpg", {speed: 500});
    </script>


  </body>
</html>
