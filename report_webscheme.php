<!DOCTYPE html>
<html>
	<head>
		<title></title>
		<link rel="stylesheet" type="text/css" href="assets/css/style.css">
		<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700' rel='stylesheet' type='text/css'>
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
		<script type="text/javascript" src = "https://code.jquery.com/jquery-2.2.0.min.js"></script>
		<!-- Latest compiled and minified JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
		<script type="text/javascript" src = "http://afarkas.github.io/webshim/js-webshim/minified/polyfiller.js"></script>
		<script type="text/javascript">
		webshims.setOptions('forms-ext', {
		    replaceUI: 'auto',
		    types: 'number'
		});
		webshims.polyfill('forms forms-ext');

		</script>
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
				<div class="col-md-12">
					<h1>How to File a Claim</h1>
				</div>
				<div class="col-md-3">
					<div class="well">
						<ul>
							<a href="report_claim.php"><li>- Notify McLarens of a claim</li></a>
							<a href="report_webscheme.php"><li>- Report a Claim WebScheme</li></a>
							<a href="instructions.php"><li>- Instructions</li></a>
						</ul>
					</div>
				</div>
				<div class="col-md-9">
					<p>
						Reporting a claim to McLarens is quick and easy.
						Simply fill out and submit the following information,
						and our claims service professionals will promptly begin to process your claim. 
					</p>
					<p>
						If you have been provided with a WebScheme Identifier and Passcode,
						please use the next section. If not, please select the Claim type below.
					</p>
					<div class="fieldset">
						<div class="form-horizontal">
							<div class="form-group">
								<div class="col-md-6">
									<div class="panel panel-primary">
										<div class="panel-heading">Report a Claim WebScheme</div>
									  	<div class="panel-body">
									  		<p>
												This general facility is available to insurers, brokers and companies with whom we have claims settlement arrangements. Use this section if you have been provided with a WebScheme Identifier and Passcode. Once these have been entered, you will be able to access an area designed specifically for your use.</p>
											<p>
												To report a Claim WebScheme claim, please enter your Claim WebScheme Identifier and Claim WebScheme Passcode below:</p>
										  	<div class="col-md-12">
										  		<div class="row">
													<div class="form-group">
														<div class="col-md-12">
															<label>WebScheme Identifier</label>
															<input type="text" class="form-control" placeholder = "" maxlength="50" />
														</div>
													</div>
													<div class="form-group">
														<div class="col-md-12">
															<label>WebScheme Passcode</label>
															<input type="password" class="form-control" placeholder = "" maxlength="50"/>
														</div>
													</div>
													<div class="form-group">
														<div class="col-md-12">
															<input type="submit" class="btn btn-primary pull-right">
														</div>
													</div>
												</div>
											</div>												
								  		</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>