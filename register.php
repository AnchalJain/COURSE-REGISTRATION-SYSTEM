<!DOCTYPE html>
<html>
<head>
	<title>R G Academy</title>
		<meta charset="utf-8">
    	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
    	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
      	<link rel="stylesheet" href="bootstrap-3.3.5-dist/css/bootstrap.min.css">
      	<link rel="stylesheet" type="text/css" href="css/stylesheet.css">
      	<link href="https://getbootstrap.com/dist/css/bootstrap.min.css" rel="stylesheet"/>
   		<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
   		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  		<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
		<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
		

		<link href="http://netdna.bootstrapcdn.com/twitter-bootstrap/2.3.1/css/bootstrap-combined.min.css" rel="stylesheet">
		<link rel="stylesheet" type="text/css" media="screen" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.9.3/css/bootstrap-select.min.css">
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
		<script src="http://netdna.bootstrapcdn.com/twitter-bootstrap/2.3.1/js/bootstrap.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.9.3/js/bootstrap-select.min.js"></script>

	<script>	
		$(document).ready(function() {
  		$('.selectpicker').selectpicker({
    	style: 'btn-info',
    	size: 4
  		});
		});
	</script>


</head>

<body>

	<?php require 'header.php'; ?>
	
	<div class="container well">
		<br>
		<h3><span class="glyphicon glyphicon-user"></span> New Registration</h3>
		<hr width="80%">
		<br>
		<h4>Please fill in the following field:</h4>
		<br>

		<form class="form-horizontal" role="form">
				
				<div class="form-group">
				
					<div class="row">
					<div class="col-xs-5">
					<label for="name" class="col-sm-2 control-label"></label>
				 		<div class="input-group input-group-lg">
							<input type="text" class="form-control" id="name" placeholder="First Name" value="">
							<span class="input-group-addon"><span class=" glyphicon glyphicon-user"></span></span>
						</div>
					</div>	
				

				
					<div class="col-xs-5">
					<label for="name" class="col-sm-2 control-label"></label>
				 		<div class="input-group input-group-lg">
							<input type="text" class="form-control" id="name" placeholder="Last Name" value="">
							<span class="input-group-addon"><span class=" glyphicon glyphicon-user"></span></span>
						</div>
					</div>	
				</div>
				</div>	
					<br>
				
				<div class="form-group">	
					<div class="row">
					<div class="col-xs-5">
					<label for="name" class="col-sm-2 control-label"></label>
				 		<div class="input-group input-group-lg">
							<input type="text" class="form-control" id="name" placeholder="Username" value="">
							<span class="input-group-addon"><span class=" glyphicon glyphicon-user"></span></span>
						</div>
					</div>	
					
				
					<div class="col-xs-5">
					<label for="email" class="col-sm-2 control-label"></label>
				 		<div class="input-group input-group-lg">
							<input type="email" class="form-control" id="email" placeholder="Email" value="">
							<span class="input-group-addon"><span class=" glyphicon glyphicon-envelope"></span></span>
						</div>
					</div>
					</div>
				</div>
								
					<br>

				<div class="form-group">
					<div class="row">	
						<div class="col-xs-5">
							<label for="psw" class="col-sm-2 control-label"></label>
				 				<div class="input-group input-group-lg" >
									<input type="password" class="form-control" id="psw" placeholder="Password" value="">
									<span class="input-group-addon"><span class="glyphicon glyphicon-eye-open"></span></span>
								</div>
						</div>

						<div class="col-xs-5">
							<label for="psw" class="col-sm-2 control-label"></label>
				 				<div class="input-group input-group-lg" >
									<input type="password" class="form-control" id="psw" placeholder="Retype Password" value="">
									<span class="input-group-addon"><span class="glyphicon glyphicon-eye-open"></span></span>
								</div>
						</div>

					</div>
				</div>	

				<br>


 			<div class="form-group">
 				<div class="row">
        		<div  class="col-xs-5" >
                	<label class="col-sm-2 control-label"></label>
        			<select class="selectpicker" data-dropup-auto="false" data-width= "300px" multiple title="Gender">
  						<option > Male</option>
  						<option >female</option>
  						<option >Other</option>
					</select>
				</div>
				


        		<div  class="col-sm-5" >
                	<label class="col-sm-2 control-label"></label>
        			<select class="selectpicker" data-dropup-auto="false" data-width= "300px" multiple title="Standard">
  						<option>10th pass</option>
  						<option>11th pass</option>
  						<option>12th pass</option>
					</select>
				</div>
				</div>
    		</div>
    		<br>
    		<div class="form-group">
 				<div class="row">
        		<div  class="col-xs-5" >
                	<label class="col-sm-2 control-label"></label>
        			<select class="selectpicker" data-dropup-auto="false" data-width= "300px" multiple title="Select Course">
  						<option >JEE MAINS</option>
  						<option >JEE MAINS + ADVANCE</option>
  						<option >BITSAT</option>
					</select>
				</div>
				</div>
			</div>	
			<br>
			<div class="col-sm-2"></div>
			<div class="col-sm-2"></div>
			<div class="col-xs-1"></div>
			<div class="col-lg-2">	
			<button type="button" class="btn btn-primary">Register</button>
			</div>
							
					
				
		

			
	
		</form>


	</div>
</body>
</html>