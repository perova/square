<!DOCTYPE html>
<html>
<head>
	<title>Square</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
	<link rel="stylesheet" href="css/main.css">

	<meta charset="utf-8">
	
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	
</head>
<body>
	<div class="container">
		<div class="col-lg-12">
			<h1><i class="fa fa-pencil" aria-hidden="true"></i>Drawing Square on Canvas</h1>
		</div>
	</div>
	<div class="container content">
		<div class="row">
			<div class="col-lg-6">
				<h2><span class="fa fa-square"></span> Canvas View</h2>
				<canvas  id="canvas" width="500" height="500">
					
				</canvas>	
			</div>
			<div class="col-lg-6">
				<h2><span class="fa fa-edit"></span>Draw Square</h2>
				<input id="width" class="form-control" type="text" placeholder="Width">
				<input id="height" class="form-control" type="text" placeholder="Height">
				<input id="button" class="btn btn-success" value="Submit" type="submit" onclick="Box()">
			</div>
		</div>
		
	</div>
	<script src="script.js"></script>
</body>
</html>