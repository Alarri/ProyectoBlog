<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
    <!--<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" /> -->
  <!-- include libries(jQuery, bootstrap, fontawesome) -->
  <title>Comentarios</title>

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
      <h2>Comentarios</h2><br>

      <div class="col-lg-12">

        
          
          <!-- MUESTRA EL POST AL QUE SE DESEA VER O  CREAR LOS COMENTARIOS-->
           
          <label>
                Titulo del Blog
          </label>
          <div> 
            <p><?php echo $UnPost->titulo; ?></p>
          </div>
          
          <h3>Post</h3>
          <div>
            <p><?php echo $UnPost->texto; ?></p>
          </div>
          <label>
                Fecha
          </label>
          <p><?php echo $UnPost->fecha; ?></p>          
          <br><br>
          <!-- Lista de Comentarios-->
          <h3>Comentarios anteriores</h3>
          <div class="container">
            <?php
              
              foreach ($ListaDeComments as $row) { 
                if ($row['activo']=="1") {
                  echo '  <div class="row"> ';
                  echo '    <h3>'.$row['usuario_comentario'].'</h3>';
                  echo '    <p>'.$row['comentario'].'</p>';
                  echo '    <h4 class="margin-base-vertical"> <small> ' . $row['fecha'] . '</small></h4> ';                 
                  echo '  </div>';    
                } 
              }
            ?>
          </div>
          <!-- CREAR Comentarios-->
        <form class="form-horizontal" action="<?php echo base_url();?>Comentarios/CrearComments" method="Post">
          <br><br><br>
          <h3>Crear Comentario</h3>

          <input type="hidden" id='blog_id' name='blog_id' value="<?php echo $UnPost->id_blog; ?>" > 

          <label>Usuario</label>
          <input id="usuario_comentario" name="usuario_comentario" type="text" placeholder="Digite su Nombre" class="input-xlarge">
          <br><br>
          <label>Comentario</label>
          <div class="form-group">
            <textarea rows="6" cols="30" id="comentario" name="comentario" class="form-control" class="input-xlarge"></textarea>
          </div>

          <button type="sumit" class="btn btn-success btn-lg" >Ingresar Comentario</button>
          <br><br><br><br>
        </form>       
        
      </div>
    </div>
  </div>


  <script src="https://code.jquery.com/jquery.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.2/js/bootstrap.min.js"></script>
</body>
</html>