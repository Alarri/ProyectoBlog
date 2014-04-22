<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
  	<!--<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" /> -->
	<!-- include libries(jQuery, bootstrap, fontawesome) -->
	<title>Editar Post</title>

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
			<h2>Crear Blogs</h2>

			<div class="col-lg-12">

				<form class="form-horizontal" action="<?php echo base_url();?>Post/EditarPost" method="Post">
					<input type="hidden" name='id' value="<?php echo $data->id_blog; ?>" > 
					<label>
			          Titulo del Blog
			        </label>
			        <input id="titulo" name="titulo" type="text" value="<?php echo $data->titulo; ?>" class="input-xlarge">
			        <br><br>
					<div class="form-group">
						<textarea rows="8" cols="50" id="texto" name="texto" rows="10"  class="form-control" class="input-xlarge"><?php echo $data->texto; ?></textarea>
					</div>
					<label>
			          Fecha
			        </label>
			        <input id="fecha" name="fecha" type="text" value="<?php echo $data->fecha; ?>" class="input-xlarge">
			        <br><br>
			        
					<button type="sumit" class="btn btn-success btn-lg" >Editar</button>
					<br><br><br><br>
				</form>				
				
			</div>
		</div>
	</div>


	<script src="https://code.jquery.com/jquery.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.2/js/bootstrap.min.js"></script>
</body>
</html>