<!DOCTYPE html>
<html>
	<head>
		<title></title>
		<link rel="stylesheet" type="text/css" href="assets/css/style.css">
		<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700' rel='stylesheet' type='text/css'>
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
		<script type="text/javascript" src = "https://code.jquery.com/jquery-2.2.0.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>	
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
					<h1>New Assignment - Casualty</h1>
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
								<div class="col-md-12">
									<!-- Nav tabs -->
								  	<ul class="nav nav-tabs" role="tablist">
									    <li role="presentation" class="active"><a href="#client" aria-controls="client" role="tab" data-toggle="tab">Client</a></li>
									    <li role="presentation"><a href="#coverage" aria-controls="coverage" role="tab" data-toggle="tab">Coverage Information</a></li>
									    <li role="presentation"><a href="#insured" aria-controls="insured" role="tab" data-toggle="tab">Insured</a></li>
									    <li role="presentation"><a href="#instructions" aria-controls="instructions" role="tab" data-toggle="tab">Instructions</a></li>
									</ul>
								</div>
								<div class="col-md-12">
										<!-- Tab panes -->
									<br/>
								  	<div class="tab-content">
										<div class=" tab-pane active" role="tabpanel" id="client">
										  	<div class="col-md-12">
											  	<div class="row">
											  		<div class="well">
											  			<div class="form-group">
															<div class="col-md-6">
																<label>Name</label>
																<input type="text" class="form-control" placeholder = "ex. John Smith" maxlength="50" />
															</div>
															<div class="col-md-6">
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
															<div class="col-md-2">
																<label>Zip Code</label>
																<input type="tel" class="form-control" placeholder = "" maxlength="10"/>
															</div>
														</div>
														<div class="form-group">
															<div class="col-md-6">
																<label>Address line 1</label>
																<input type="text" class="form-control" placeholder = "" maxlength="50"/>
															</div>
															<div class="col-md-6">
																<label>Address line 2</label><sup>Optional</sup> 
																<input type="text" class="form-control" placeholder = "" maxlength="50"/>
															</div>
														</div>
														<div class="form-group">
															<div class="col-md-6">
																<label>Email</label>
																<input type="text" class="form-control" placeholder = "sample@email.com" maxlength="50"/>
															</div>
															<div class="col-md-3">
																<label>Contact Number</label>
																<input type="tel" class="form-control" placeholder = "" maxlength="15"/>
															</div>
															<div class="col-md-3">
																<label>Fax</label>
																<input type="tel" class="form-control" placeholder = "0123456789" maxlength="10"/>
															</div>
														</div>
														<div class="form-group">
															<div class="col-md-3">
																<label>Date of Loss</label>
																<input type="date" class="form-control" placeholder = "MM/DD/YYYY"/>
															</div>
															<div class="col-md-3">
																<label>Claim Number</label>
																<input type="text" class="form-control" placeholder = "ABC123456" maxlength="35"/>
															</div>
														</div>
														<div class="form-group">
															<div class="col-md-12">
																<input type="submit" class="btn btn-primary pull-right" value="Next">
															</div>
														</div>
											  		</div>
											  	</div>
											</div>
										</div>
										<div class=" tab-pane" role="tabpanel" id="coverage">
										  	<div class="col-md-12">
											  	<div class="row">
											  		<div class="well">
											  			<div class="form-group">
															<div class="col-md-3">
																<label>Policy Number</label>
																<input type="text" class="form-control" placeholder = "ABC12345635" maxlength="35"/>
															</div>
															<div class="col-md-3">
																<label>Policy Dates</label>
																<input type="date" class="form-control" placeholder = "MM/DD/YYYY"/>
															</div>
															<div class="col-md-3">
																<label>Coverage Amount</label>
																<div class="input-group"> 
																    <span class="input-group-addon">$</span>
																    <input type="number" value="0" min="0" step="0.01" data-number-to-fixed="2" data-number-stepfactor="100" class="form-control currency" maxlength="35" />
																</div> 
															</div>
															<div class="col-md-3">
																<label>Deductable</label>
																<div class="input-group"> 
																    <span class="input-group-addon">$</span>
																    <input type="number" value="0" min="0" step="0.01" data-number-to-fixed="2" data-number-stepfactor="100" class="form-control currency" maxlength="35" />
																</div> 
															</div>
														</div>
														<div class="form-group">
															<div class="col-md-3">
																<label>Reserves</label>
																<div class="input-group"> 
																    <span class="input-group-addon">$</span>
																    <input type="number" value="0" min="0" step="0.01" data-number-to-fixed="2" data-number-stepfactor="100" class="form-control currency" maxlength="35" />
																</div> 
															</div>
															<div class="col-md-3">
																<label>Limit</label>
																<div class="input-group"> 
																    <span class="input-group-addon">$</span>
																    <input type="number" value="0" min="0" step="0.01" data-number-to-fixed="2" data-number-stepfactor="100" class="form-control currency" maxlength="35" />
																</div> 
															</div>
															<div class="col-md-6">
																<label>Coinsurance</label>
																<input type="text" class="form-control" placeholder = "" maxlength="50"/>
															</div>
														</div>
														<div class="form-group">
															<div class="col-md-6 col-md-offset-6">
																<label>ITV</label>
																<input type="text" class="form-control" placeholder = "" maxlength="50"/>
															</div>
														</div>
														<div class="form-group">
															<div class="col-md-12">
																<input type="submit" class="btn btn-primary pull-right" value="Next">
															</div>
														</div>
											  		</div>
											  	</div>
											</div>
										</div>
										<div class="tab-pane" role="tabpanel" id="insured">
										  	<div class="col-md-12">
											  	<div class="row">
											  		<div class="well">
												  		<div class="form-group">
															<div class="col-md-6">
																<label>Insured Name</label>
																<input type="text" class="form-control" placeholder = "" maxlength="50"/>
															</div>
															<div class="col-md-6">
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
															<div class="col-md-2">
																<label>Zip Code</label>
																<input type="tel" class="form-control" placeholder = "" maxlength="10"/>
															</div>
														</div>
														<div class="form-group">
															<div class="col-md-6">
																<label>Address line 1</label>
																<input type="text" class="form-control" placeholder = "" maxlength="50"/>
															</div>
															<div class="col-md-6">
																<label>Address line 2</label><sup>Optional</sup> 
																<input type="text" class="form-control" placeholder = "" maxlength="50"/>
															</div>
														</div>										  			
														<div class="form-group">
															<div class="col-md-6">
																<label>Location of Loss</label>
																<input type="text" class="form-control" placeholder = "" maxlength="50"/>
															</div>
															<div class="col-md-3">
																<label>City of Loss</label>
																<input type="text" class="form-control" placeholder = "" maxlength="50"/>
															</div>
														</div>
														<div class="form-group">
															<div class="col-md-6">
																<label>Loss Description</label>
																<textarea class="form-control" maxlength="400"></textarea>
															</div>
															<div class="col-md-6">
																<label>Comments</label>
																<textarea class="form-control" maxlength="400"></textarea>
															</div>
														</div>
														<div class="form-group">
															<div class="col-md-12">
																<input type="submit" class="btn btn-primary pull-right" value="Next">
															</div>
														</div>
											  		</div>
											  	</div>
											</div>
										</div>
										<div class="tab-pane" role="tabpanel" id="instructions">
										  	<div class="col-md-12">
											  	<div class="row">
											  		<div class="well">
												  		<div class="form-group">
															<div class="col-md-3">
																<label>Report Due Date</label>
																<input type="date" class="form-control" placeholder = "MM/DD/YYYY" />
															</div>
															<div class="col-md-3">
																<label>Budget</label>
																<div class="input-group"> 
																    <span class="input-group-addon">$</span>
																    <input type="number" value="0" min="0" step="0.01" data-number-to-fixed="2" data-number-stepfactor="100" class="form-control currency" maxlength="35" />
																</div> 
															</div>
															<div class="col-md-3">
																<label>Vehicle Registration</label>
																<input type="text" class="form-control" placeholder = "" maxlength="50" />
															</div>
														</div>
														<div class="form-group">
															<div class="col-md-6">
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