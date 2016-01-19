<!DOCTYPE html>
<html>
	<head>
		<title></title>
		<link rel="stylesheet" type="text/css" href="assets/css/style.css">
		<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700' rel='stylesheet' type='text/css'>
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	</head>
	<body>
		<nav class="navbar navbar-default">
  			<div class="container-fluid">
	    	<!-- Brand and toggle get grouped for better mobile display -->
	    		<div class="navbar-header">
		     		<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
				        <span class="sr-only">Toggle navigation</span>
				        <span class="icon-bar"></span>
				        <span class="icon-bar"></span>
				        <span class="icon-bar"></span>
		      		</button>
		      		<a class="navbar-brand" href="#">Brand</a>
	    		</div>
			    <!-- Collect the nav links, forms, and other content for toggling -->
			    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			      	<ul class="nav navbar-nav">
				        <li><a href="index.php">Home <span class="sr-only">(current)</span></a></li>
				        <li><a href="#">Link</a></li>
				        <li class="dropdown">
				          	<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
				          	<ul class="dropdown-menu">
					           	<li><a href="#">Action</a></li>
					            <li><a href="#">Another action</a></li>
					            <li><a href="#">Something else here</a></li>
					            <li role="separator" class="divider"></li>
					            <li><a href="#">Separated link</a></li>
					            <li role="separator" class="divider"></li>
					            <li><a href="#">One more separated link</a></li>
				          	</ul>
				        </li>
			      	</ul>
			      	<form class="navbar-form navbar-left" role="search">
				        <div class="form-group">
				          <input type="text" class="form-control" placeholder="Search">
				        </div>
			        	<button type="submit" class="btn btn-default">Submit</button>
			      	</form>
				    <ul class="nav navbar-nav navbar-right">
				        <li><a href="#">Link</a></li>
				        <li class="dropdown">
				          	<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
				          	<ul class="dropdown-menu">
					            <li><a href="#">Action</a></li>
					            <li><a href="#">Another action</a></li>
					            <li><a href="#">Something else here</a></li>
					            <li role="separator" class="divider"></li>
					            <li><a href="#">Separated link</a></li>
				          	</ul>
				        </li>
				    </ul>
	    		</div><!-- /.navbar-collapse -->
	  		</div><!-- /.container-fluid -->
		</nav>
		<div class="container">
			<div class="row">
				<h1>Assign a Claim</h1>
				<p>
					Thank you for choosing McLarens as your trusted resource for global claims services. Please select one of our business units below to submit an assignment.

					Not sure who to contact?
					Email: claims@mclarens.com
					Call: 800.813.mclarens

					You will receive immediate assistance from a member of our management team.

				</p>

				<div class="col-md-6 col-xs-12">
					<div class="row">
						<h2>Complex Loss (McLarens)</h2>
						<a href="report_claim.php"><p><button class="btn btn-primary">Report a Claim</button></p></a>
						<a href="report_webscheme.php"><p><button class="btn btn-primary">Report a Claim Webscheme</button></p></a>
						<a href="instructions.php"><p><button class="btn btn-primary">Instructions</button></p></a>
					</div>	
				</div>
				<div class="col-md-6 col-xs-12">
					<div class="row">
						<h2>McLarens Aviation</h2>
						<a href=""><p><button class="btn btn-primary">Salvage Portal</button></p></a>
					</div>
				</div>
				<div class="col-md-6 col-xs-12">
					<div class="row">
						<h2>Agriculture (Agrical)</h2>
						<a href="new_assignment_agrical.php"><p><button class="btn btn-primary">Submit an Assignment</button></p></a>
					</div>
				</div>

				<div class="col-md-6 col-xs-12">
					<div class="row">
						<h2>Field Adjusting (Norcross)</h2>
						<a href="new_assignment_property.php"><p><button class="btn btn-primary">New Assignment - Property</button></p></a>
						<a href="new_assignment_casualty.php"><p><button class="btn btn-primary">New Assignment - Casualty</button></p></a>
						<a href="new_assignment_auto.php"><p><button class="btn btn-primary">New Assignment - Auto & Heavy Equipment</button></p></a>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>