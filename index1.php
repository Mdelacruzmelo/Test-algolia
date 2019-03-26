<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
	<head>
		<meta charset="UTF-8">
		<title>Testing</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
		<!-- jQuery library -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<!-- Popper JS -->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
		<!-- Latest compiled JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
		<script src="index.js" type="text/javascript"></script>
	</head>
	<body>
		<div class="container text-center">
			<div class="jumbotron">
				<h1>Bootstrap Tutorial</h1> 
				<p>Bootstrap is the most popular HTML, CSS...</p> 
			</div>
			<div class="col-8 offset-2">
				<form action="" method="GET">
					<div class="form-group">
						<label for="nombre">Nombre</label>
						<input type="text" name="nombre" class="form-control" id="nombre" value="trip">
					</div>

					<div class="form-check">
						<label class="form-check-label">
							<input name="type[]" type="checkbox" class="form-check-input" value="activity">
							Activity
						</label>
					</div>
					<div class="form-check">
						<label class="form-check-label">
							<input name="type[]" type="checkbox" class="form-check-input" value="tour">
							Tour
						</label>
					</div>
					<div class="form-check disabled">
						<label class="form-check-label">
							<input name="type[]" type="checkbox" class="form-check-input" value="ticket">
							Ticket
						</label>
					</div>


					<a id="linkForm" href="" class="btn btn-primary">Submit</a>
				</form>
			</div>


		</div>
		<div class="col-md-12 pl-5">
			<div class="form-check">
			<label class="form-check-label">Current Parameter</label><br>
			<input class="form-check-input" style="width: 600px;" id="currentParam"><br>
			<br>
			<label class="form-check-label">Current url</label><br>
			<input class="form-check-input" style="width: 600px;" id="currentUrl"><br>
			<br>
			<label class="form-check-label">To url</label><br>
			<input class="form-check-input" style="width: 600px;" id="totheUrl"><br>
		</div>
		</div>

	</body>
</html>