<!DOCTYPE html>
<html>
	<head>
		<title></title>
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
		<link rel="stylesheet" type="text/css" href="assets/css/style.css">
		<link rel="stylesheet" type="text/css" href="assets/css/style-responsive.css">
		<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700' rel='stylesheet' type='text/css'>
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
		<script type="text/javascript" src = "https://code.jquery.com/jquery-2.2.0.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>	
	</head>
	<body class="login-body">
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
				          	<ul class="dropdown-menu"> col-xs
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
		<div class="container wrapper">
			<div class="main">
				<div class="column">
					<center><div><img class="small-logo" src="assets/images/logo.png"></div></center>

					<div class="col-md-12">
					<div>

 					<!-- Nav tabs -->
  						<ul class="nav nav-tabs login" role="tablist">
						    <li role="presentation" class="active"><a href="#login" aria-controls="login" role="tab" data-toggle="tab"><h4>Login</h4></a></li>
						    <li role="presentation"><a href="#register" aria-controls="register" role="tab" data-toggle="tab"><h4>Register</h4></a></li>
						    <li role="presentation"><a href="#resetpsw" aria-controls="resetpsw" role="tab" data-toggle="tab"><h4>Reset Password</h4></a></li>
  						</ul>

						<!-- Tab panes -->
						<div class="tab-content">
						    <div role="tabpanel" class="tab-pane active" id="login">
								<div class="panel login-panel panel-default shadow">
							  		<div class="panel-body scy_color">
								    	<fieldset>
											<div class="form-horizontal">
												<div class="form-group">
													<div class="col-md-12">
														<h1>Login on Project Claims</h1>
														<p><small>Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Maecenas sed diam eget risus varius bladit sit amet non</small></p>
													</div>
												</div>
												<div class="form-group">
													<div class="col-md-12">
														<input type="text" class="form-control valid" placeholder = "username" maxlength="35" />
														<span class="glyphicon glyphicon-user inner" aria-hidden="true"></span>
														<span class = "validation" style = "display:block">
															<small>username is required!</small>
														</span>
													</div>
												</div>
												<div class="form-group">
													<div class="col-md-12">
														<input type="password" class="form-control invalid" placeholder = "password" maxlength="50" />
														<span class="glyphicon glyphicon-lock inner" aria-hidden="true"></span>
														<span class = "validation" style = "display:block">
															<small>password is required!</small>
														</span>
													</div>
												</div>
												<div class="form-group">
													<div class="col-md-12">
														<input type="submit" class="btn btn-primary pull-right login-btn" value="Login">
													</div>
												</div>
											</div>
										</fieldset>
							  		</div>
								</div>						    	
						    </div>
						    <div role="tabpanel" class="tab-pane" id="register">
						    	<div class="panel login-panel panel-default shadow">
							  		<div class="panel-body scy_color">
								    	<fieldset>
											<div class="form-horizontal">
												<div class="form-group">
													<div class="col-md-12">
														<h1 class="login-h1">Register</h1>
														<p><small>Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Maecenas sed diam eget risus varius bladit sit amet non</small></p>
													</div>
												</div>
												<div class="form-group">
													<div class="col-md-12">
														<input type="text" class="form-control valid" placeholder = "username" maxlength="35" />
														<span class="glyphicon glyphicon-user inner" aria-hidden="true"></span>
														<span class = "validation" style = "display:block">
															<small>username is required!</small>
														</span>
													</div>
												</div>
												<div class="form-group">
													<div class="col-md-12">
														<input type="password" class="form-control invalid" placeholder = "password" maxlength="50" />
														<span class="glyphicon glyphicon-lock inner" aria-hidden="true"></span>
														<span class = "validation" style = "display:block">
															<small>password is required!</small>
														</span>
													</div>
												</div>
												<div class="form-group">
													<div class="col-md-12">
														<input type="submit" class="btn btn-primary pull-right login-btn" value="Sign Up">
													</div>
												</div>
											</div>
										</fieldset>
							  		</div>
								</div>
						    </div>
						    <div role="tabpanel" class="tab-pane" id="resetpsw">
						    	<div class="panel login-panel panel-default shadow">
							  		<div class="panel-body scy_color">
								    	<fieldset>
											<div class="form-horizontal">
												<div class="form-group">
													<div class="col-md-12">
														<h1 class="login-h1">Reset Password</h1>
														<p><small>Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Maecenas sed diam eget risus varius bladit sit amet non</small></p>
													</div>
												</div>
												<div class="form-group">
													<div class="col-md-12">
														<input type="email" class="form-control valid" placeholder = "email" maxlength="35" />
														<span class="glyphicon glyphicon-user inner" aria-hidden="true"></span>
														<span class = "validation" style = "display:block">
															<small>email is required!</small>
														</span>
													</div>
												</div>
												<div class="form-group">
													<div class="col-md-12">
														<input type="birthdate" class="form-control invalid" id="login_birthdate" placeholder = "birthdate" onfocus="(this.type='date')"/>
														<span class = "validation" style = "display:block">
															<small>birthday is required!</small>
														</span>
													</div>
												</div>
												<div class="form-group">
													<div class="col-md-12">
														<input type="submit" class="btn btn-primary pull-right login-btn" value="Send">
													</div>
												</div>
											</div>
										</fieldset>
							  		</div>
								</div>
						    </div>
						</div>

					</div>					

					
					</div>
				</div>
			</div>
		</div>
		<script type="text/javascript">
			$('#myTabs a[href="#profile"]').tab('show') // Select tab by name
			$('#myTabs a:first').tab('show') // Select first tab
			$('#myTabs a:last').tab('show') // Select last tab
			$('#myTabs li:eq(2) a').tab('show') // Select third tab (0-indexed)
			$('#myTabs a').click(function (e) {
			  e.preventDefault()
			  $(this).tab('show')
			})
		</script>
	</body>
</html>