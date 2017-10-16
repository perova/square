<!DOCTYPE html>
<html>
<head>
	<title>Square</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css">
	<link rel="stylesheet" href="css/main.css">

	<meta charset="utf-8">
	
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!--
		
	This is Sass example.

	-->
</head>
<body>
	<div class="container">
	
	</div>
	<div class="container content">
		<div class="row">
			<div class="col-lg-6">
				<h2>Canvas View</h2>
				<canvas  id="canvas" width="500" height="500">
					
				</canvas>	
			</div>
			<div class="col-lg-6">
				<h2>Insert details</h2>
				<input id="width" class="form-control" type="text" placeholder="Width">
				<input id="height" class="form-control" type="text" placeholder="Height">
				<input id="button" class="btn btn-success" type="submit" onclick="Box()" name="">
			</div>
		</div>
		
	</div>
	<script
	  src="https://code.jquery.com/jquery-3.2.1.js"
	  integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE="
	  crossorigin="anonymous"></script>
	<script src="script.js"></script>
</body>
</html>