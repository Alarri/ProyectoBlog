<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>Crear Blogs</title>

	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet">
    <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet" />
    
    <link href="http://fonts.googleapis.com/css?family=Abel|Open+Sans:400,600" rel="stylesheet" />
    
    
    
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
			<h1><?php echo $Admin->tituloblog; ?></h1>

			<div class="col-lg-12">

				<p></p>
				
				<div class="container" style="height:400px;width:800px;float:left;">
			      <?php
			        
			        foreach ($listaDePost as $row) { 
			            echo '  <div class="row"> ';
			            echo ' 		<h3>'.$row['titulo'].'</h3><br>';
			            echo ' 		<p>'.$row['texto'].'</p><br>';
			            echo ' 		<h4 class="margin-base-vertical"> <small> ' . $row['fecha'] . '</small></h4> ';
			            echo '      <h5 class="margin-base-vertical"> <a href="' . base_url() . 'Comentarios/Ver/' . $row['id_blog'] . '"> Comnetarios </a></h5> ';
			            echo '  </div>';    
			                 
			        }
			      ?>

			      <!-- //row -->
			    </div>
			    <div class="container" style="height:200px;width:100px;float:left;">
				<form class="form-horizontal" action="<?php echo base_url();?>Login/Autenticar" method="Post">
					<h3>Loguin</h3>
					<label>
			          Usuario
			        </label>
			        <input id="usuario" name="usuario" type="text" placeholder="Usuario" class="input-xlarge">
			        <br><br>
			        <label>
			          Clave
			        </label>
					<input id="clave" name="clave" type="text" placeholder="Clave" class="input-xlarge">
			        <br><br>

					<button type="sumit" class="btn btn-success btn-lg" >Entrar</button>
					<br><br>
				</form>
				</div>

			</div>
		</div>
	</div>


	<script src="https://code.jquery.com/jquery.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.2/js/bootstrap.min.js"></script>
</body>
</html>