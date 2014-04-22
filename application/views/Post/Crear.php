<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
  	<!--<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" /> -->
	<!-- include libries(jQuery, bootstrap, fontawesome) -->
	<title>Crear Blogs</title>
<!--
	<link rel="stylesheet"  href="http://127.0.0.1/ProyectoBlog/Post/css/bootstrap.css"> 
	<link rel="stylesheet"  href="http://localhost/ProyectoBlog/Post/css/font-awesome.min.css">
	<link rel="stylesheet"  href="http://localhost/ProyectoBlog/Post/css/codemirror/codemirror.min.css">
	<link rel="stylesheet"  href="http://localhost/ProyectoBlog/Post/css/codemirror/monokai.min.css">
	<link rel="stylesheet"  href="http://localhost/ProyectoBlog/Post/css/summernote.min.css">
-->
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
      
      /* http://css-tricks.com/perfect-full-page-background-image/ */
      html {
        /* background: url(img/6133364748_89f2365922_o.jpg) no-repeat center center fixed;
        */
        -webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: cover;
        background-size: cover;
      }
      
      body {
        padding-top: 20px;
        font-size: 16px;
        font-family: "Open Sans",serif;
        background: transparent;
      }
      
      h1 {
        font-family: "Abel", Arial, sans-serif;
        font-weight: 400;
        font-size: 40px;
      }
      
      /* Override B3 .panel adding a subtly transparent background */
      .panel {
        background-color: rgba(255, 255, 255, 0.9);
      }
      
      .margin-base-vertical {
        margin: 40px 0;
        text-align: center;
      }
      
    </style>

</head>

<body>
	<div class="row">
		<div class="container">
			<h2>Crear Post</h2>

			<div class="col-lg-12">

				<form class="form-horizontal" action="<?php echo base_url();?>Post/CrearPost" method="Post">

					<label>
			          Titulo del Post
			        </label>
			        <input id="titulo" name="titulo" type="text" placeholder="Digite el titulo del Blog" class="input-xlarge">
			        <br><br>
					<div class="form-group">

						<textarea rows="8" cols="50" id="texto" name="texto" rows="10" class="form-control" class="input-xlarge"></textarea>
					</div>

					<button type="sumit" class="btn btn-success btn-lg" >Guardar</button>
					<br><br><br><br>
				</form>
				<h3>Editar Post</h3>
				<div class="container">
			      <?php
			        $cont=1;
			        foreach ($listaDePost as $row) { 
			            echo '  <div class="row"> ';
			            echo '      <div class="col-md-4 col-md-offset-1 panel panel-default"> ';
			            echo '          <div class="right"> ';
			            echo '              <div class="btn-group pull-right">';
			            echo '                  <a class="btn dropdown-toggle btn-info" data-toggle="dropdown" href="#">';
			            echo '                      Actualizaci&#243;n ';
			            echo '                      <span class="icon-cog icon-white"></span><span class="caret"></span>';
			            echo '                  </a>';
			            echo '                  <ul class="dropdown-menu">';
			            echo '                      <li><a href="' . base_url() . 'Post/Editar/' . $row['id_blog'] . '"><span class="icon-wrench"></span> Editar</a></li>';
			            echo '                      <li><a href="' . base_url() . 'Post/Eliminar/' . $row['id_blog'] . '"><span class="icon-trash"></span> Eliminar</a></li>';
			            echo '                  </ul>';
			            echo '              </div>';
			            echo '              <div class="media-body"> ';
			            echo '                  <h5 class="margin-base-vertical">'.$cont.'->  <a href="' . base_url() . 'Comentarios/Estado/' . $row['id_blog'] . '">' . $row['titulo'] . '</a></h5> ';
			            echo '          	</div>';
			            echo '          </div>';
			            echo '      </div>';
			            echo '        <!-- //main content -->';
			            echo '  </div>';    
			            $cont=$cont+1;       
			        }
			      ?>

			      <!-- //row -->
			    </div>
				
			</div>
		</div>
	</div>

<!--
	<script src="system/js/jquery.js"></script> 
	<script src="http://127.0.0.1/ProyectoBlog/Post/js/bootstrap.min.js"></script> 
	<script src="http://127.0.0.1/ProyectoBlog/Post/js/codemirror/codemirror.js"></script> 
	<script src="http://127.0.0.1/ProyectoBlog/Post/js/codemirror/formatting.min.js"></script> 
	<script src="http://127.0.0.1/ProyectoBlog/Post/js/codemirror/xml.min.js"></script>
	<script src="http://127.0.0.1/ProyectoBlog/Post/js/summernote.min.js"></script>
	
	<script>
		$(document).ready(function(){
	  		$('#description').summernote(
	  			{
	  				height: 200/**
	  				codemirror: {
	  					theme: 'monokai' //theme
	  				}*/
	  			});
		});

	</script>
-->
	<script src="https://code.jquery.com/jquery.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.2/js/bootstrap.min.js"></script>
</body>
</html>