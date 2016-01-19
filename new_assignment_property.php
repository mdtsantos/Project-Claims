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
				<div class="col-md-12">
					<h1>New Assignment - Property</h1>
				</div>
				<div class="col-md-3">
					<div class="well">
						<ul>
							<a href="new_assignment_property.php"><li>- Property</li></a>
							<a href="new_assignment_casualty.php"><li>- Casualty</li></a>
							<a href="new_assignment_auto.php"><li>- Auto & Heavy Equipment</li></a>
						</ul>
					</div>
				</div>
				<div class="col-md-9">
					<p>To submit a claim, send the information via email to assignments@norcross.com, which notifies the Claims Team immediately. As an alternative, you may complete the form below.

Please complete as many fields as possible so that we are able to process your instructions as soon as we can once we receive them. Fields marked with an asterisk are required.​</p>
					
					<div class="fieldset">
						<legend>New Assigment</legend>
						<div class="form-horizontal">
							<div class="form-group">
								<div class="col-md-6">
									<div class="panel panel-primary">
									<div class="panel-heading">Client Information<span class = "pull-right">1/4</span></div>
									  	<div class="panel-body">
										  	<div class="col-md-12">
										  		<div class="row">
													<div class="form-group">
														<div class="col-md-12">
															<label>Name</label>
															<input type="text" class="form-control" placeholder = "ex. John Smith" maxlength="50" />
														</div>
													</div>
													<div class="form-group">
														<div class="col-md-12">
															<label>Company Name</label>
															<input type="text" class="form-control" placeholder = "ex. Company Inc." maxlength="50"/>
														</div>
													</div>
													<div class="form-group">
														<div class="col-md-6">
															<label>Country</label>
															<select class="form-control">
																<option></option>
																<option></option>
																<option></option>
																<option></option>
															</select>
														</div>
														<div class="col-md-6">
															<label>State/Province/Region</label>
															<input type="text" class="form-control" placeholder = "" maxlength="35"/>
														</div>
													</div>
													<div class="form-group">
														<div class="col-md-6">
															<label>City</label>
															<select class="form-control">
																<option></option>
																<option></option>
																<option></option>
																<option></option>
															</select>
														</div>
														<div class="col-md-3">
															<label>Zip Code</label>
															<input type="tel" class="form-control" placeholder = "" maxlength="10"/>
														</div>
													</div>
													<div class="form-group">
														<div class="col-md-12">
															<label>Address line 1</label>
															<input type="text" class="form-control" placeholder = "" maxlength="50"/>
														</div>
													</div>
													<div class="form-group">
														<div class="col-md-12">
															<label>Address line 2</label><sup>Optional</sup> 
															<input type="text" class="form-control" placeholder = "" maxlength="50"/>
														</div>
													</div>
													<div class="form-group">
														<div class="col-md-12">
															<label>Email</label>
															<input type="text" class="form-control" placeholder = "sample@email.com" maxlength="50"/>
														</div>
													</div>
													<div class="form-group">
														<div class="col-md-6">
															<label>Contact Number</label>
															<input type="tel" class="form-control" placeholder = "" maxlength="15"/>
														</div>
														<div class="col-md-6">
															<label>Fax</label>
															<input type="tel" class="form-control" placeholder = "0123456789" maxlength="10"/>
														</div>
													</div>
													<div class="form-group">
														<div class="col-md-6">
															<label>Date of Loss</label>
															<input type="date" class="form-control" placeholder = "MM/DD/YYYY"/>
														</div>
														<div class="col-md-6">
															<label>Claim Number</label>
															<input type="text" class="form-control" placeholder = "ABC123456" maxlength="35"/>
														</div>
													</div>
												</div>
											</div>												
									  	</div>
									</div>
									<div class="panel panel-primary">
									<div class="panel-heading">Coverage Information<span class = "pull-right">1/4</span></div>
									  	<div class="panel-body">
										  	<div class="col-md-12">
										  		<div class="row">
													<div class="form-group">
														<div class="col-md-6">
															<label>Policy Number</label>
															<input type="text" class="form-control" placeholder = "ABC12345635" maxlength="35"/>
														</div>
														<div class="col-md-6">
															<label>Policy Dates</label>
															<input type="date" class="form-control" placeholder = "MM/DD/YYYY"/>
														</div>
													</div>
													<div class="form-group">
														<div class="col-md-6">
															<label>Coverage Amount</label>
															<div class="input-group"> 
															    <span class="input-group-addon">$</span>
															    <input type="number" value="0" min="0" step="0.01" data-number-to-fixed="2" data-number-stepfactor="100" class="form-control currency" maxlength="35" />
															</div> 
														</div>
														<div class="col-md-6">
															<label>Deductable</label>
															<div class="input-group"> 
															    <span class="input-group-addon">$</span>
															    <input type="number" value="0" min="0" step="0.01" data-number-to-fixed="2" data-number-stepfactor="100" class="form-control currency" maxlength="35" />
															</div> 
														</div>
													</div>
													<div class="form-group">
														<div class="col-md-6">
															<label>Reserves</label>
															<div class="input-group"> 
															    <span class="input-group-addon">$</span>
															    <input type="number" value="0" min="0" step="0.01" data-number-to-fixed="2" data-number-stepfactor="100" class="form-control currency" maxlength="35" />
															</div> 
														</div>
														<div class="col-md-6">
															<label>Limit</label>
															<div class="input-group"> 
															    <span class="input-group-addon">$</span>
															    <input type="number" value="0" min="0" step="0.01" data-number-to-fixed="2" data-number-stepfactor="100" class="form-control currency" maxlength="35" />
															</div> 
														</div>
													</div>
													<div class="form-group">
														<div class="col-md-12">
															<label>Coinsurance</label>
															<input type="text" class="form-control" placeholder = "" maxlength="50"/>
														</div>
													</div>
													<div class="form-group">
														<div class="col-md-12">
															<label>ITV</label>
															<input type="text" class="form-control" placeholder = "" maxlength="50"/>
														</div>
													</div>
												</div>
											</div>												
									  	</div>
									</div>
									<div class="panel panel-primary">
									<div class="panel-heading">Insured<span class = "pull-right">1/4</span></div>
									  	<div class="panel-body">
										  	<div class="col-md-12">
										  		<div class="row">
										  			<div class="form-group">
														<div class="col-md-12">
															<label>Insured Name</label>
															<input type="text" class="form-control" placeholder = "" maxlength="50"/>
														</div>
													</div>
													<div class="form-group">
														<div class="col-md-12">
															<label>Insured Contact</label><sup>Optional</sup> 
															<input type="text" class="form-control" placeholder = "" maxlength="50"/>
														</div>
													</div>	
													<div class="form-group">
														<div class="col-md-6">
															<label>Country</label>
															<select class="form-control">
																<option></option>
																<option></option>
																<option></option>
																<option></option>
															</select>
														</div>
														<div class="col-md-6">
															<label>State/Province/Region</label>
															<input type="text" class="form-control" placeholder = "" maxlength="35"/>
														</div>
													</div>
													<div class="form-group">
														<div class="col-md-6">
															<label>City</label>
															<select class="form-control">
																<option></option>
																<option></option>
																<option></option>
																<option></option>
															</select>
														</div>
														<div class="col-md-3">
															<label>Zip Code</label>
															<input type="tel" class="form-control" placeholder = "" maxlength="10"/>
														</div>
													</div>
													<div class="form-group">
														<div class="col-md-12">
															<label>Address line 1</label>
															<input type="text" class="form-control" placeholder = "" maxlength="50"/>
														</div>
													</div>
													<div class="form-group">
														<div class="col-md-12">
															<label>Address line 2</label><sup>Optional</sup> 
															<input type="text" class="form-control" placeholder = "" maxlength="50"/>
														</div>
													</div>											  			
													<div class="form-group">
														<div class="col-md-12">
															<label>Location of Loss</label>
															<input type="text" class="form-control" placeholder = "" maxlength="50"/>
														</div>
													</div>
													<div class="form-group">
														<div class="col-md-6">
															<label>City of Loss</label>
															<input type="text" class="form-control" placeholder = "" maxlength="50"/>
														</div>
													</div>
													<div class="form-group">
														<div class="col-md-12">
															<label>Loss Description</label>
															<textarea class="form-control" maxlength="400"></textarea>
														</div>
													</div>
													<div class="form-group">
														<div class="col-md-12">
															<label>Comments</label>
															<textarea class="form-control" maxlength="400"></textarea>
														</div>
													</div>
												</div>
											</div>												
									  	</div>
									</div>	
									<div class="panel panel-primary">
									<div class="panel-heading">Instructions<span class = "pull-right">1/4</span></div>
									  	<div class="panel-body">
										  	<div class="col-md-12">
										  		<div class="row">
													<div class="form-group">
														<div class="col-md-6">
															<label>Report Due Date</label>
															<input type="date" class="form-control" placeholder = "MM/DD/YYYY"/>
														</div>
														<div class="col-md-6">
															<label>Budget</label>
															<div class="input-group"> 
															    <span class="input-group-addon">$</span>
															    <input type="number" value="0" min="0" step="0.01" data-number-to-fixed="2" data-number-stepfactor="100" class="form-control currency" maxlength="35" />
															</div> 
														</div>
													</div>
													<div class="form-group">
														<div class="col-md-12">
															<label>Upload Attachment</label>
															<input type="file" class="form-control" placeholder = "" value = ""/>
														</div>
													</div>
													<div class="form-group">
														<div class="col-md-12">
															<input type="submit" class="btn btn-primary pull-right" value="send">
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