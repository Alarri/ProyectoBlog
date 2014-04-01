<!DOCTYPE html>
<html>
  <head>
    <title>
      Ingresar clientes
    </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet">
    <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet" />
    
    <link href="http://fonts.googleapis.com/css?family=Abel|Open+Sans:400,600" rel="stylesheet" />
    
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js">
</script>
<script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js">
</script>
<![endif]-->
    
    <style>
      
      body {
        padding-top: 15px;
        font-size: 12px
      }
      .main {
        max-width: 320px;
        margin: 0 auto;
      }
      .login-or {
        position: relative;
        font-size: 18px;
        color: #aaa;
        margin-top: 10px;
                margin-bottom: 10px;
        padding-top: 10px;
        padding-bottom: 10px;
      }
      .span-or {
        display: block;
        position: absolute;
        left: 50%;
        top: -2px;
        margin-left: -25px;
        background-color: #fff;
        width: 50px;
        text-align: center;
      }
      .hr-or {
        background-color: #cdcdcd;
        height: 1px;
        margin-top: 0px !important;
        margin-bottom: 0px !important;
      }
      h3 {
        text-align: center;
        line-height: 300%;
      }
      
    </style>
    
  </head>
  <body>
    
  <div class="container">
    <div class="row">

      <div class="main">

        <h3>Please Log In, or <a href="#">Sign Up</a></h3>
        <div class="row">
          <div class="col-xs-6 col-sm-6 col-md-6">
            <a href="#" class="btn btn-lg btn-primary btn-block">Facebook</a>
          </div>
          <div class="col-xs-6 col-sm-6 col-md-6">
            <a href="#" class="btn btn-lg btn-info btn-block">Google</a>
          </div>
        </div>
        <div class="login-or">
          <hr class="hr-or">
          <span class="span-or">or</span>
        </div>

        <form role="form" action="<?php echo base_url();?>Login/Autenticar" method="Post">
          <div class="form-group">
            <label for="inputUsernameEmail">Usuario</label>
            <input type="text" class="form-control" id="usuario" name="usuario">
          </div>
          <div class="form-group">
            <a class="pull-right" href="#">Forgot password?</a>
            <label for="inputPassword">Password</label>
            <input type="password" class="form-control" id="clave" name="clave">
          </div>
          <div class="checkbox pull-right">
            <label>
              <input type="checkbox">
              Remember me </label>
          </div>
          <button type="submit" class="btn btn btn-primary">
            Log In
          </button>
        </form>
      
      </div>
      
    </div>
  </div>
    
    <!-- //container -->
    
    
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery.js">
    </script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.2/js/bootstrap.min.js">
    </script>
  </body>
</html>