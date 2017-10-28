<?php

?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>The Money Keeper for Trip Sem 5</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
</head>
<body>

<section name="Navbar">

	<nav class="navbar navbar-default">
	  <div class="container">
	    <div class="navbar-header">
	      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
	        <span class="sr-only">Toggle navigation</span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	      </button>
	      <a class="navbar-brand" href="<?php echo ROOT ; ?>">The Money Keeper</a>
	    </div>

	    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
	      <ul class="nav navbar-nav">
	        <li class="active"><a href="<?php echo ROOT ; ?>">Home <span class="sr-only">(current)</span></a></li>
	      </ul>
	    </div>

	    

	  </div>
	</nav>
</section>

<section name="Content">
	
	<div class="container">
		<div class="well well-lg">

			<h1 align="center">Login</h1>
			<form action="login.php" method="POST" class="form-horizontal">
				<div class="form-group" >
			      <label for="inputUsername" class="col-lg-2 control-label">Username</label>
			      <div class="col-lg-6">
			        <input type="text" class="form-control" name="username" id="inputUsername" placeholder="Username">
			      </div>
			    </div>

			    <div class="form-group">
			      <label for="inputPassword" class="col-lg-2 control-label">Password</label>
			      <div class="col-lg-6">
			        <input type="password" class="form-control" name="password" id="inputPassword" placeholder="Password">
			      </div>
			    </div>

				<div class="form-group">
			      <div class="col-lg-10 col-lg-offset-2">
			        <button type="submit" class="btn btn-info">Submit</button>
			      </div>
			    </div>


			</form>		    
		</div>
	</div>

</section>
	
</body>
</html>