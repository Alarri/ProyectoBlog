<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" /> 
	<!-- include libries(jQuery, bootstrap, fontawesome) -->
	<link rel="stylesheet"  href="css/bootstrap.css"> 
	<link rel="stylesheet"  href="css/font-awesome.min.css">
	<link rel="stylesheet"  href="css/summernote.min.css">

</head>

<body>
	<div class="row">
		<div class="container">
			<div class="col-lg-12">

				<form action="" >

					<div class="form-group">
						<label for="">Descripcion</label>
						<textarea name="" id="description" rows="10" class="form-control"></textarea>
					</div>

					<button type="sumit" class="btn btn-sumit" >guardar</button>

				</form>
			</div>
		</div>
	</div>


	<script src="jquery.js"></script> 
	<script src="bootstrap.min.js"></script> 

	
	<script src="dist/summernote.min.js"></script>

	<script>
		$(document).ready(function() {
	  		$('#description').summernote(
	  			{
	  				height: 300
	  			});
		});

	

	</script>

	

</body>
</html>