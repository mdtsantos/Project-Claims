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
					<h1>Report a Claim</h1>
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
						In order to make a claim, immediately contact your insurance company about any potential claim under a policy. Then contact your McLarens representative or one of our local offices, or submit an inquiry through this website.
						Please provide as much information as possible about your claim so that we can help you in the most timely and efficient manner.
					</p>
					<div class="fieldset">
						<legend>Report a Claim</legend>
						<div class="form-horizontal">
							<div class="form-group">
								<div class="col-md-6">
									<div class="alert" role="alert" id = "alert" style="display:none"></div>
									<label for="">Claim Type</label>
									<select class="form-control" id="claim_type">
										<option value="0">Choose</option>
										<option value="motor_vehicle">Motor Vehicle</option>
										<option value="property_loss">Property Loss/Damage</option>
										<option value="liability">Liability</option>
										<option value="aviation">Aviation</option>
										<option value="construct_engine">Construction/Engineering/Plant</option>
										<option value="transit_marine">Transit/Marine</option>
									</select>
								</div>
							</div>

							<div>

							  

								<!-- Motor Vehicle -->
								<div class="claim form-group" style="display:none" id="motor_vehicle">
									<div class="col-md-12">
									<!-- Nav tabs -->
									  <ul class="nav nav-tabs" role="tablist">
									    <li role="presentation" class="active"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Profile</a></li>
									    <li role="presentation"><a href="#policy" aria-controls="policy" role="tab" data-toggle="tab">Policy</a></li>
									    <li role="presentation"><a href="#broker" aria-controls="broker" role="tab" data-toggle="tab">Broker</a></li>
									    <li role="presentation"><a href="#insured" aria-controls="insured" role="tab" data-toggle="tab">Insured</a></li>
									    <li role="presentation"><a href="#loss" aria-controls="loss" role="tab" data-toggle="tab">Loss</a></li>
									    <li role="presentation"><a href="#vehicle" aria-controls="vehicle" role="tab" data-toggle="tab">Vehicle</a></li>
									    <li role="presentation"><a href="#thirdparty" aria-controls="thirdparty" role="tab" data-toggle="tab">Third Party</a></li>
									  </ul>
									</div>
									<div class="col-md-12">
										<!-- Tab panes -->

									<br/>
								  	<div class="tab-content">
										<div class=" tab-pane active" role="tabpanel" id="profile">
										  	<div class="col-md-12">
											  	<div class="row">
											  		<div class="well">
														<div class="form-group">
															<div class="col-md-6">
																<label>Name</label>
																<input type="text" class="form-control" placeholder = "ex. John Smith" maxlength="50" required/>
															</div>
															<div class="col-md-6">
																<label>Company Name</label>
																<input type="text" class="form-control" placeholder = "ex. Company Inc." maxlength="50" required/>
															</div>
														</div>
														<div class="form-group">
															<div class="col-md-6">
																<label>Role</label>
																<select class="form-control" required>
																	<option>Choose</option>
																	<option>Choose</option>
																	<option>Choose</option>
																</select>
															</div>

															<div class="col-md-6">
																<label>Email</label>
																<input type="email" class="form-control" placeholder = "sample@email.com" maxlength="50" required/>
															</div>
															
														</div>
														<div class="form-group">
															<div class="col-md-3">
																	<label>Telephone</label>
																	<input type="tel" class="form-control" placeholder = "02 123 4567" maxlength="9" required/>
															</div>
															<div class="col-md-3">
																	<label>Fax</label><sup>Optional</sup>
																	<input type="tel" class="form-control" placeholder = "0123456789" maxlength="10" />
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
										<div class="tab-pane" role="tabpanel" id="policy">
										  	<div class="col-md-12">
											  	<div class="row">
											  		<div class="well">
														<div class="form-group">
															<div class="col-md-6">
																<label>Insurance Company</label>
																<input type="text" class="form-control" placeholder = "ex. Company Inc." maxlength="50" />
															</div>
															<div class="col-md-3">
																<label>Policy No.</label>
																<input type="text" class="form-control" placeholder = "ABC123456" maxlength="35" />
															</div>
															<div class="col-md-3">
																<label>Property Reference No.</label>
																<input type="tel" class="form-control" placeholder = "ABC123456" maxlength="35" />
															</div>
														</div>
														<div class="form-group">
															<div class="col-md-6">
																<label>Policy Wording</label>
																<textarea class="form-control" maxlength = "400"> </textarea>
															</div>
															<div class="col-md-3">
																<label>Deductable/Excess</label>
															    <div class="input-group"> 
															        <span class="input-group-addon">$</span>
															        <input type="number" value="0" min="0" step="0.01" data-number-to-fixed="2" data-number-stepfactor="100" class="form-control currency" id="c2" />
															    </div> 
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
										<div class=" tab-pane" role="tabpanel" id="broker">
										  	<div class="col-md-12">
											  	<div class="row">
											  		<div class="well">
														<div class="form-group">
															<div class="col-md-6">
																<label>Company Name</label>
																<input type="text" class="form-control" placeholder = "ex. Company Inc." maxlength="50" />
															</div>
															<div class="col-md-6">
																<label>Contact Name</label>
																<input type="text" class="form-control" placeholder = "ex. John Smith" maxlength="50" />
															</div>
														</div>
														<div class="form-group">
															<div class="col-md-3">
																<label>Broker Reference</label>
																<input type="text" class="form-control" placeholder = "ABC123456" maxlength="35" />
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
																<input type="text" class="form-control" placeholder = "ex. John Smith" maxlength="50" required/>
															</div>
															<div class="col-md-6">
																<label>Contact Person</label>
																<input type="text" class="form-control" placeholder = "ex. John Smith" maxlength="50" required/>
															</div>
														</div>
														<div class="form-group">
															<div class="col-md-6">
																<label>Did you know the address?</label>
																<span><input type="radio" name="address" onclick="showDiv('address_motor');"> Yes</span>
																<span><input type="radio" name="address" onclick="hideDiv('address_motor');"> No</span>
															</div>
														</div>
														<div id="address_motor" style="display:none">
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
																	<input type="text" class="form-control" placeholder = ""/>
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
																	<input type="tel" class="form-control" placeholder = ""/>
																</div>
															</div>
															<div class="form-group">
																<div class="col-md-6">
																	<label>Address line 1</label>
																	<input type="text" class="form-control" placeholder = ""/>
																</div>
																<div class="col-md-6">
																	<label>Address line 2</label><sup>Optional</sup> 
																	<input type="text" class="form-control" placeholder = ""/>
																</div>
															</div>
														</div>
														<div class="form-group">
															<div class="col-md-3">
																<label>Telephone</label>
																<input type="tel" class="form-control" placeholder = "02 123 4567"/>
															</div>
															<div class="col-md-3">
																<label>Fax</label><sup>Optional</sup>
																<input type="tel" class="form-control" placeholder = "0123456789"/>
															</div>
															<div class="col-md-6">
																<label>Email</label><sup>Optional</sup>
																<input type="text" class="form-control" placeholder = "sample@email.com"/>
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
										<div class="tab-pane" role="tabpanel" id="loss">
										  	<div class="col-md-12">
											  	<div class="row">
											  		<div class="well">
														<div class="form-group">
															<div class="col-md-3">
																<label>Reporting Form</label>
																<input type="date" class="form-control" placeholder = "MM/DD/YYY" required/>
															</div>
															
														</div>
														<div class="form-group">
															<div class="col-md-6">
																<label>Location of Loss</label><sup>Optional</sup>
																<input type="text" class="form-control" placeholder = ""/>
															</div>
															<div class="col-md-3">
																<label>Sums Insured</label><sup>Optional</sup>
															    <div class="input-group"> 
															        <span class="input-group-addon">$</span>
															        <input type="number" value="0" min="0" step="0.01" data-number-to-fixed="2" data-number-stepfactor="100" class="form-control currency" />
															    </div> 
															</div>
															<div class="col-md-3">
																<label>Estimated Loss</label><sup>Optional</sup>
															    <div class="input-group"> 
															        <span class="input-group-addon">$</span>
															        <input type="number" value="0" min="0" step="0.01" data-number-to-fixed="2" data-number-stepfactor="100" class="form-control currency" />
															    </div> 
															</div>
														</div>
														<div class="form-group">
															<div class="col-md-6">
																<label>Description of Loss</label>
																<textarea class="form-control" required></textarea>
															</div>
															<div class="col-md-6">
																<label>Damage Description</label><sup>Optional</sup>
																<textarea class="form-control"></textarea>
															</div>
														</div>
														<div class="form-group">
															<div class="col-md-12">
																<label>Is Car Driveable?</label>
																<span><input type="radio" name="driveable" onclick="showDiv('driveable_motor');"> Yes</span>
																<span><input type="radio" name="driveable" onclick="hideDiv('driveable_motor');"> No</span>
															</div>
														</div>
														<div class="form-group" id="driveable_motor" style="display:none">
															<div class="col-md-6">
																<label>Where is the car?</label>
																<input type="text" class="form-control" placeholder = ""/>
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
										<div class="tab-pane" role="tabpanel" id="vehicle">
										  	<div class="col-md-12">
											  	<div class="row">
											  		<div class="well">
											  			<div class="form-group">
															<div class="col-md-3">
																<label>Maker</label><sup>Optional</sup>
																<select class="form-control">
																	<option>Choose</option>
																	<option></option>
																	<option></option>
																	<option></option>
																</select>
															</div>
															<div class="col-md-3">
																<label>Model</label><sup>Optional</sup>
																<input type="text" class="form-control" placeholder = "ABC123456" maxlength="35"/>
															</div>
															<div class="col-md-3">
																<label>Plate/Registration #</label>
																<input type="tel" class="form-control" placeholder = "ABC123" required maxlength="35"/>
															</div>
														</div>
														<div class="form-group">
															<div class="col-md-6">
																<label>Driver Name</label>
																<input type="text" class="form-control" placeholder = "ex. John Smith" required maxlength="50" />
															</div>
															<div class="col-md-6">
																<label>Address Line 1</label><sup>Optional</sup>
																<input type="text" class="form-control" placeholder = ""  maxlength="50" required/>
															</div>
														</div>
														<div class="form-group">
															<div class="col-md-6">
																<label>Address Line 2</label><sup>Optional</sup>
																<input type="text" class="form-control" placeholder = ""  maxlength="50" required/>
															</div>
															<div class="col-md-3">
																<label>Home Phone</label><sup>Optional</sup>
																<input type="tel" class="form-control" placeholder = "02 123 4567"/>
															</div>
															<div class="col-md-3">
																<label>Business Phone</label><sup>Optional</sup>
																<input type="tel" class="form-control" placeholder = "02 123 4567"/>
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
										<div class="tab-pane" role="tabpanel" id="thirdparty" style="display">
										  	<div class="col-md-12">
											  	<div class="row">
											  		<div class="well">
											  			<div class="form-group">
															<div class="col-md-6">
																<label>Name</label>
																<input type="text" class="form-control" placeholder = "ex. John Smith" maxlength="50" />
															</div>
															<div class="col-md-6">
																<label>Address</label>
																<textarea class="form-control" maxlength = "400"></textarea>
															</div>
														</div>
														<div class="form-group">
															<div class="col-md-12">
																<button class="btn btn-default pull-right" disabled>Add</button>
															</div>
														</div>
														<div class="form-group">
															
														</div>
														<div class="form-group" style="display:">
															<div class="col-md-12">
																<label>Third Party List</label>
																<ul>
																	<li>
																		<div class="well">
																			<label>Name</label>
																			<p>John Smith</p>
																		    <label>Address</label>
																		    <p>#123 Jasmin St. Metro Manila</p>
																		</div>
																	</li>
																</ul>
															</div>
														</div>
														<div class="form-group">
															<div class="col-md-6">
																<label>Special Handling Instructions</label>
																<textarea class="form-control"></textarea>
															</div>
														</div>
														
													</div>
												</div>												
										  	</div>
										</div>																			
									</div>
								</div>	
							</div>

							<!-- Property Loss Damage -->
							<div class="form-group claim" style="display:none" id="property_loss">
								<div class="col-md-12">
									<!-- Nav tabs -->
									<ul class="nav nav-tabs" role="tablist">
									    <li role="presentation" class="active"><a href="#profile2" aria-controls="profile2" role="tab" data-toggle="tab">Profile</a></li>
									    <li role="presentation"><a href="#policy2" aria-controls="policy2" role="tab" data-toggle="tab">Policy</a></li>
									    <li role="presentation"><a href="#insured2" aria-controls="insured2" role="tab" data-toggle="tab">Insured</a></li>
									    <li role="presentation"><a href="#loss2" aria-controls="loss2" role="tab" data-toggle="tab">Loss</a></li>
									 </ul>
								</div>
								<div class="col-md-12">
										<!-- Tab panes -->
									<br/>
								  	<div class="tab-content">
										<div class="tab-pane active" role="tabpanel" id="profile2">
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
															<input type="text" class="form-control" placeholder = "ex. Company Inc."maxlength="50" />
														</div>
													</div>
													<div class="form-group">
														<div class="col-md-6">
															<label>Role</label>
															<select class="form-control">
																<option>Choose</option>
																<option>Choose</option>
																<option>Choose</option>
															</select>
														</div>
														<div class="col-md-3">
																<label>Telephone</label>
																<input type="tel" class="form-control" placeholder = "02 123 4567" maxlength="9" />
														</div>
														<div class="col-md-3">
																<label>Fax</label><sup>Optional</sup>
																<input type="tel" class="form-control" placeholder = "0123456789" maxlength="10" />
														</div>
													</div>
													<div class="form-group">
														<div class="col-md-6">
															<label>Email</label>
															<input type="email" class="form-control" placeholder = "sample@email.com" maxlength="50" />
														</div>
													</div>
													<div class="form-group">
														<div class="col-md-12">
															<input type="submit" id = "submit_motor" class="btn btn-primary pull-right" value="Next">
														</div>
													</div>
												</div>
											</div>												
									  	</div>
									</div>		
									<div class="tab-pane" role="tabpanel" id="policy2">
									  	<div class="col-md-12">
										  	<div class="row">
										  		<div class="well">
													<div class="form-group">
														<div class="col-md-6">
															<label>Insurance Company</label>
															<input type="text" class="form-control" placeholder = "ex. Company Inc." maxlength="50" />
														</div>
														<div class="col-md-3">
															<label>Policy No.</label>
															<input type="tel" class="form-control" placeholder = "" maxlength="35"/>
														</div>
														<div class="col-md-3">
																<label>Property Reference No.</label>
																<input type="tel" class="form-control" placeholder = ""  maxlength="35"/>
														</div>
													</div>
													<div class="form-group">
														<div class="col-md-6">
																<label>Policy Wording</label>
																<textarea class="form-control" maxlength="400"> </textarea>
														</div>
														<div class="col-md-3">
															<label>Deductable/Excess</label>
															<div class="input-group"> 
														        <span class="input-group-addon">$</span>
														        <input type="number" value="0" min="0" step="0.01" data-number-to-fixed="2" data-number-stepfactor="100" class="form-control currency" />
														    </div> 
														</div>
													</div>
													<div class="form-group">
														<div class="col-md-12">
															<input type="submit" id = "submit_motor" class="btn btn-primary pull-right" value="Next">
														</div>
													</div>
												</div>
											</div>												
									  	</div>
									</div>	
									<div class="tab-pane" role="tabpanel" id="broker2">
									  	<div class="col-md-12">
										  	<div class="row">
										  		<div class="well">
													<div class="form-group">
														<div class="col-md-6">
															<label>Company Name</label>
															<input type="text" class="form-control" placeholder = "ex. Company Inc." maxlength="50" />
														</div>
														<div class="col-md-6">
															<label>Contact Name</label>
															<input type="tel" class="form-control" placeholder = "ex. John Smith" maxlength="50"/>
														</div>
													</div>
													<div class="form-group">
														<div class="col-md-6">
															<label>Broker Reference</label>
															<input type="text" class="form-control" placeholder = "ABC123456" maxlength="35"/>
														</div>
													</div>
													<div class="form-group">
														<div class="col-md-12">
															<input type="submit" id = "submit_motor" class="btn btn-primary pull-right" value="Next">
														</div>
													</div>
												</div>
											</div>												
									  	</div>
									</div>	
									<div class="tab-pane" role="tabpanel" id="insured2">
									  	<div class="col-md-12">
										  	<div class="row">
										  		<div class="well">
													<div class="form-group">
														<div class="col-md-6">
															<label>Insured Name</label>
															<input type="text" class="form-control" placeholder = "ex. John Smith" maxlength="50" />
														</div>
														<div class="col-md-6">
															<label>Contact Person</label>
															<input type="text" class="form-control" placeholder = "ex. John Smith" maxlength="50"/>
														</div>
													</div>
													<div class="form-group">
														<div class="col-md-12">
															<label>Do you know the address?</label>
															<span><input type="radio" onclick = "showDiv('address_property');" name="address"> Yes</span>
															<span><input type="radio" onclick = "hideDiv('address_property');"  name="address"> No</span>
														</div>
													</div>
													<div id="address_property" style="display:none">
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
																<input type="text" class="form-control" placeholder = "" maxlength="35" />
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
													</div>
													<div class="form-group">
														<div class="col-md-3">
															<label>Telephone</label>
															<input type="tel" class="form-control" placeholder = "02 123 4567" maxlength="9"/>
														</div>
														<div class="col-md-3">
															<label>Fax</label><sup>Optional</sup>
															<input type="tel" class="form-control" placeholder = "0123456789" maxlength="10"/>
														</div>
														<div class="col-md-6">
															<label>Email</label><sup>Optional</sup>
															<input type="text" class="form-control" placeholder = "sample@email.com" maxlength="50"/>
														</div>
													</div>
													<div class="form-group">
														<div class="col-md-12">
															<input type="submit" id = "submit_motor" class="btn btn-primary pull-right" value="Next">
														</div>
													</div>
												</div>
											</div>												
									  	</div>
									</div>
									<div class="tab-pane" role="tabpanel" id="loss2">
									  	<div class="col-md-12">
										  	<div class="row">
										  		<div class="well">
										  			<div class="form-group">
														<div class="col-md-3">
															<label>Type of Loss</label>
															<select id = "others_property" class="form-control others_specify">
																<option>Choose</option>
																<option>Burglarly/Theft</option>
																<option>Fire</option>
																<option>Flood</option>
																<option>Hail</option>
																<option>Lightning</option>
																<option>Storm</option>
																<option>Water Damage</option>
																<option>Other</option>
															</select>
														</div>
														<div class="col-md-3" id="others_property1" style="display:none">
																<label>Please specify:</label>
																<input type="text" class="form-control" placeholder = ""/>
															</div>
														<div class="col-md-3">
															<label>Date of Loss</label>
															<input type="date" class="form-control" placeholder = "MM/DD/YYYY"/>
														</div>
														<div class="col-md-3 col-md-3">
															<label>Sums Insured</label><sup>Optional</sup>
															<div class="input-group"> 
															    <span class="input-group-addon">$</span>
															    <input type="number" value="0" min="0" step="0.01" data-number-to-fixed="2" data-number-stepfactor="100" class="form-control currency"  maxlength="35" />
															</div> 
														</div>
													</div>
													<div class="form-group">
														<div class="col-md-3">
															<label>Estimated Loss</label>
															<div class="input-group"> 
															    <span class="input-group-addon">$</span>
															    <input type="number" value="0" min="0" step="0.01" data-number-to-fixed="2" data-number-stepfactor="100" class="form-control currency" maxlength="35" />
															</div> 
														</div>
														<div class="col-md-6 col-md-offset-3">
															<label>Location of Loss</label>
															<input type="text" class="form-control" placeholder = "" maxlength="50" />
														</div>
													</div>
													<div class="form-group">
														<div class="col-md-6">
															<label>Description of Loss</label>
															<textarea class="form-control" maxlength = "400"></textarea>
														</div>
														<div class="col-md-6">
															<label>Special Handling Instructions</label>
															<textarea class="form-control" maxlength = "400"></textarea>
														</div>
													</div>
													<div class="form-group">
														<div class="col-md-12">
															<p>
																Upload any attachments here. Please put your all your documents in one folder if you are going to upload multiple.
															</p>
														</div>
														<div class="col-md-6">
															
															<form>
															<div class="form-group">
																<div class="col-md-12">
																	<input type="file" id = "file_property" class=" form-control file" multiple>
																</div>
															</div>
															<div class="form-group">
																<div class="col-md-12">
																	<input type="submit" id = "upload_property" class="btn btn-default" value="Upload Files" disabled = "">
																</div>
															</div>
															</form>
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
							<!-- Liability -->

							<div class="form-group claim" style="display:none" id="liability">
								<div class="col-md-12">
									<!-- Nav tabs -->
									<ul class="nav nav-tabs" role="tablist">
									    <li role="presentation" class="active"><a href="#profile3" aria-controls="profile3" role="tab" data-toggle="tab">Profile</a></li>
									    <li role="presentation"><a href="#policy3" aria-controls="policy3" role="tab" data-toggle="tab">Policy</a></li>
									    <li role="presentation"><a href="#broker3" aria-controls="broker3" role="tab" data-toggle="tab">Broker</a></li>
									    <li role="presentation"><a href="#insured3" aria-controls="insured3" role="tab" data-toggle="tab">Insured</a></li>
									    <li role="presentation"><a href="#loss3" aria-controls="loss3" role="tab" data-toggle="tab">Loss</a></li>
									 </ul>
								</div>
								<div class="col-md-12">
									<!-- Tab panes -->
									<br/>
								  	<div class="tab-content">
									<div class="tab-pane active" role="tabpane" id="profile3">
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
															<input type="text" class="form-control" placeholder = "ex. Company Inc."maxlength="50" />
														</div>
													</div>
													<div class="form-group">
														<div class="col-md-3">
															<label>Role</label>
															<select class="form-control">
																<option>Choose</option>
																<option>Choose</option>
																<option>Others</option>
															</select>
														</div>
														<div class="col-md-3">
																<label>Telephone</label>
																<input type="tel" class="form-control" placeholder = "02 123 4567" maxlength="9" />
														</div>
														<div class="col-md-3">
																<label>Fax</label><sup>Optional</sup>
																<input type="tel" class="form-control" placeholder = "0123456789" maxlength="10" />
														</div>
													</div>
													<div class="form-group">
														<div class="col-md-6">
															<label>Email</label>
															<input type="email" class="form-control" placeholder = "sample@email.com" maxlength="50" />
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
									<div class="tab-pane " role="tabpane" id="policy3">
									  	<div class="col-md-12">
										  	<div class="row">
										  		<div class="well">
													<div class="form-group">
														<div class="col-md-6">
															<label>Insurance Company</label>
															<input type="text" class="form-control" placeholder = "ex. Company Inc." maxlength="50" />
														</div>
														<div class="col-md-3">
															<label>Policy No.</label>
															<input type="tel" class="form-control" placeholder = "ABC123456" maxlength="35" />
														</div>
														<div class="col-md-3">
															<label>Property Reference No.</label>
															<input type="tel" class="form-control" placeholder = "ABC123456" maxlength="35"  />
														</div>
													</div>
													<div class="form-group">
														<div class="col-md-6">
															<label>Policy Wording</label>
															<textarea class="form-control" maxlength="400"> </textarea>
														</div>
														<div class="col-md-3">
															<label>Deductable/Excess</label>
															<div class="input-group"> 
															    <span class="input-group-addon">$</span>
															    <input type="number" value="0" min="0" step="0.01" data-number-to-fixed="2" data-number-stepfactor="100" class="form-control currency" maxlength="35" />
															</div> 
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
									<div class="tab-pane " role="tabpane" id="broker3">
									  	<div class="col-md-12">
										  	<div class="row">
										  		<div class="well">
													<div class="form-group">
														<div class="col-md-6">
															<label>Company Name</label>
															<input type="text" class="form-control" placeholder = "ex. Company Inc."/>
														</div>
														<div class="col-md-6">
															<label>Contact Name</label>
															<input type="text" class="form-control" placeholder = "John Smith"/>
														</div>
													</div>
													<div class="form-group">
														<div class="col-md-3">
															<label>Broker Reference</label>
															<input type="text" class="form-control" placeholder = "ABC123456"/>
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
									<div class="tab-pane " role="tabpane" id="insured3">
									  	<div class="col-md-12">
										  	<div class="row">
										  		<div class="well">
													<div class="form-group">
														<div class="col-md-6">
															<label>Insured Name</label>
															<input type="text" class="form-control" placeholder = "ex. John Smith"/>
														</div>
														<div class="col-md-6">
															<label>Contact Person</label>
															<input type="text" class="form-control" placeholder = "ex. John Smith"/>
														</div>
													</div>
													<div class="form-group">
														<div class="col-md-12">
															<label>Do you know the address?</label>
															<span><input type="radio" onclick="showDiv('address_liability');" name="address"> Yes</span>
															<span><input type="radio" onclick="hideDiv('address_liability');" name="address"> No</span>
														</div>
													</div>
													<div id="address_liability" style="display:none">
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
																<input type="text" class="form-control" placeholder = "" maxlength="50" />
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
													</div>
													<div class="form-group">
														<div class="col-md-3">
															<label>Telephone</label>
															<input type="tel" class="form-control" placeholder = "02 123 4567"/>
														</div>
														<div class="col-md-3">
															<label>Fax</label><sup>Optional</sup>
															<input type="tel" class="form-control" placeholder = "0123456789"/>
														</div>
														<div class="col-md-6">
															<label>Email</label><sup>Optional</sup>
															<input type="text" class="form-control" placeholder = "sample@email.com"  maxlength="50"/>
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
									<div class="tab-pane " role="tabpane" id="loss3">
									  	<div class="col-md-12">
										  	<div class="row">
										  		<div class="well">
										  			<div class="form-group">
														<div class="col-md-3">
															<label>Type of Loss</label><sup>Optional</sup>
															<select id="other_liability" class="form-control others_specify">
																<option>Choose</option>
																<option>Burglarly/Theft</option>
																<option>Fire</option>
																<option>Flood</option>
																<option>Hail</option>
																<option>Lightning</option>
																<option>Storm</option>
																<option>Water Damage</option>
																<option>Other</option>
															</select>
														</div>
														<div class="col-md-3"  id="other_liability1" style="display:none">
															<label>Please specify:</label>
															<input type="text" class="form-control" placeholder = "" maxlength="50" />
														</div>
														<div class="col-md-3">
															<label>Reporting Form</label>
															<input type="date" class="form-control" placeholder = "MM/DD/YYYY"/>
														</div>
														<div class="col-md-3">
															<label>Sums Insured</label><sup>Optional</sup>
															<div class="input-group"> 
															    <span class="input-group-addon">$</span>
															    <input type="number" value="0" min="0" step="0.01" data-number-to-fixed="2" data-number-stepfactor="100" class="form-control currency" maxlength="35" />
															</div> 
														</div>
													</div>
													<div class="form-group">
														<div class="col-md-3">
															<label>Estimated Loss</label>
															<div class="input-group"> 
															    <span class="input-group-addon">$</span>
															    <input type="number" value="0" min="0" step="0.01" data-number-to-fixed="2" data-number-stepfactor="100" class="form-control currency" maxlength="35" />
															</div> 
														</div>
														<div class="col-md-6 col-md-offset-3">
															<label>Location of Loss</label>
															<input type="text" class="form-control" placeholder = "" maxlength="50" />
														</div>
													</div>
													<div class="form-group">
														<div class="col-md-6">
															<label>Description of Loss</label>
															<textarea class="form-control" maxlength = "400"></textarea>
														</div>
														<div class="col-md-6">
															<label>Name of Injured Party / Owner of Damaged Property</label><sup>Optional</sup>
															<textarea class="form-control" maxlength = "400"></textarea>
														</div>
													</div>
													<div class="form-group">
														<div class="col-md-6">
															<label>Injury / Damage</label><sup>Optional</sup>
															<textarea class="form-control" maxlength = "400"></textarea>
														</div>
														<div class="col-md-6">
															<label>Special Handling Instructions</label><sup>Optional</sup>
															<textarea class="form-control" maxlength = "400"></textarea>
														</div>
													</div>
													<div class="form-group">
														<div class="col-md-12">
															<p>
																Upload any attachments here. Please put your all your documents in one folder if you are going to upload multiple.
															</p>
															<form>
															<div class="form-group">
																<div class="col-md-6">
																	<input type="file" id = "file_liability" class=" form-control file" multiple>
																</div>
															</div>
															<div class="form-group">
																<div class="col-md-12">
																	<input type="submit" id = "upload_liability" class="btn btn-default" value="Upload Files" disabled = "">
																</div>
															</div>
															</form>
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
							<!-- Aviation -->
							<div class="form-group claim" style="display:none" id="aviation">
								<div class="col-md-12">
									<!-- Nav tabs -->
									<ul class="nav nav-tabs" role="tablist">
									    <li role="presentation" class="active"><a href="#profile4" aria-controls="profile4" role="tab" data-toggle="tab">Profile</a></li>
									    <li role="presentation"><a href="#policy4" aria-controls="policy4" role="tab" data-toggle="tab">Policy</a></li>
									    <li role="presentation"><a href="#broker4" aria-controls="broker4" role="tab" data-toggle="tab">Broker</a></li>
									    <li role="presentation"><a href="#insured4" aria-controls="insured4" role="tab" data-toggle="tab">Insured</a></li>
									    <li role="presentation"><a href="#loss4" aria-controls="loss4" role="tab" data-toggle="tab">Loss</a></li>
									 </ul>
								</div>
								<div class="col-md-12">
									<!-- Tab panes -->
									<br/>
								  	<div class="tab-content">
									<div class="tab-pane active" role="tabpane" id="profile4">
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
															<label>Role</label>
															<select class="form-control">
																<option>Choose</option>
																<option>Choose</option>
																<option>Choose</option>
															</select>
														</div>
														<div class="col-md-3">
															<label>Telephone</label>
															<input type="tel" class="form-control" placeholder = "02 123 4567"  maxlength="9"/>
														</div>
														<div class="col-md-3">
															<label>Fax</label><sup>Optional</sup>
															<input type="tel" class="form-control" placeholder = "0123456789"  maxlength="10"/>
														</div>
													</div>
													<div class="form-group">
														<div class="col-md-6">
															<label>Email</label>
															<input type="email" class="form-control" placeholder = "sample@email.com" maxlength="50" />
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
									<div class="tab-pane" role="tabpane" id="policy4">
									  	<div class="col-md-12">
										  	<div class="row">
										  		<div class="well">
													<div class="form-group">
														<div class="col-md-6">
															<label>Insurance Company</label>
															<input type="text" class="form-control" placeholder = "ex. Company Inc." maxlength="50" />
														</div>
														<div class="col-md-3">
															<label>Policy No.</label>
															<input type="tel" class="form-control" placeholder = "" maxlength="35"/>
														</div>
														<div class="col-md-3">
															<label>Property Reference No.</label>
															<input type="tel" class="form-control" placeholder = ""  maxlength="35"/>
														</div>
													</div>
													<div class="form-group">
														<div class="col-md-6">
															<label>Policy Wording</label>
															<textarea class="form-control" maxlength="400"> </textarea>
														</div>
														<div class="col-md-3">
															<label>Deductable/Excess</label>
															<div class="input-group"> 
															    <span class="input-group-addon">$</span>
															    <input type="number" value="0" min="0" step="0.01" data-number-to-fixed="2" data-number-stepfactor="100" class="form-control currency" maxlength="35" />
															</div> 
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
									<div class="tab-pane" role="tabpane" id="broker4">
									  	<div class="col-md-12">
										  	<div class="row">
										  		<div class="well">
													<div class="form-group">
														<div class="col-md-6">
															<label>Company Name</label>
															<input type="text" class="form-control" placeholder = "ex. Company Inc." maxlength="50" />
														</div>
														<div class="col-md-6">
															<label>Contact Name</label>
															<input type="tel" class="form-control" placeholder = "ex. John Smith" maxlength="50"/>
														</div>
													</div>
													<div class="form-group">
														<div class="col-md-3">
															<label>Broker Reference</label>
															<input type="text" class="form-control" placeholder = "" maxlength="35"/>
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
									<div class="tab-pane" role="tabpane" id="insured4">
									  	<div class="col-md-12">
										  	<div class="row">
										  		<div class="well">
													<div class="form-group">
														<div class="col-md-6">
															<label>Insured Name</label>
															<input type="text" class="form-control" placeholder = "ex. John Smith" maxlength="50"/>
														</div>
														<div class="col-md-6">
															<label>Contact Person</label>
															<input type="text" class="form-control" placeholder = "ex. John Smith" maxlength="50"/>
														</div>
													</div>
													<div class="form-group">
														<div class="col-md-6">
															<label>Do you know the address?</label>
															<span><input type="radio" onclick = "showDiv('address_aviation');" name="address"> Yes</span>
															<span><input type="radio" onclick = "hideDiv('address_aviation');" name="address"> No</span>
														</div>
													</div>
													<div class="address_aviation" style="display:none">
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
																<input type="text" class="form-control" placeholder = "" maxlength="50" />
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
																<input type="tel" class="form-control" placeholder = "" maxlength="10" />
															</div>
														</div>
														<div class="form-group">
															<div class="col-md-6">
																<label>Address line 1</label>
																<input type="text" class="form-control" placeholder = "" maxlength="50" />
															</div>
															<div class="col-md-6">
																<label>Address line 2</label><sup>Optional</sup> 
																<input type="text" class="form-control" placeholder = "" maxlength="50" />
															</div>
														</div> 
													</div>
													<div class="form-group">
														<div class="col-md-3">
															<label>Telephone</label><sup>Optional</sup>
															<input type="tel" class="form-control" placeholder = "02 123 4567" maxlength="9" />
														</div>
														<div class="col-md-3">
															<label>Fax</label>
															<input type="tel" class="form-control" placeholder = "0123456789" maxlength="10" />
														</div>
														<div class="form-group">
														<div class="col-md-6">
															<label>Email</label>
															<input type="text" class="form-control" placeholder = "sample@email.com" maxlength="50" />
														</div>
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
									<div class="tab-pane" role="tabpane" id="loss4">
									  	<div class="col-md-12">
										  	<div class="row">
										  		<div class="well">
										  			<div class="form-group">
														<div class="col-md-6">
															<label>Aircraft Type & Registration</label>
															<input type="text" class="form-control" placeholder = "" maxlength="50" />
														</div>
														<div class="col-md-3">
															<label>Type of Loss</label><sup>Optional</sup>
															<select id="others_aviation" class="form-control others_specify">
																<option>Choose</option>
																<option>Premises</option>
																<option>Products</option>
																<option>Other</option>
															</select>
														</div>
														<div class="col-md-3" id="others_aviation1" style="display:none">
															<label>Please specify:</label>
															<input type="text" class="form-control" placeholder = "" maxlength="35"/>
														</div>
													</div>
													<div class="form-group">
														<div class="col-md-3">
															<label>Reporting Form</label>
															<input type="date" class="form-control" placeholder = "MM/DD/YYYY"/>
														</div>
														<div class="col-md-3">
															<label>Sums Insured</label><sup>Optional</sup>
															<div class="input-group"> 
															    <span class="input-group-addon">$</span>
															    <input type="number" value="0" min="0" step="0.01" data-number-to-fixed="2" data-number-stepfactor="100" class="form-control currency" maxlength="35" />
															</div> 
														</div>
														<div class="col-md-3">
															<label>Estimated Loss</label><sup>Optional</sup>
															<div class="input-group"> 
															    <span class="input-group-addon">$</span>
															    <input type="number" value="0" min="0" step="0.01" data-number-to-fixed="2" data-number-stepfactor="100" class="form-control currency" maxlength="35" />
															</div> 
														</div>
													</div>
													<div class="form-group">
														<div class="col-md-6">
															<label>Location of Loss</label><sup>Optional</sup>
															<input type="text" class="form-control" placeholder = "" maxlength="50" />
														</div>
														<div class="col-md-6">
															<label>Description of Loss</label>
															<textarea class="form-control" maxlength="400"></textarea>
														</div>
													</div>
													<div class="form-group">
														<div class="col-md-6">
															<label>Name of Injured Party / Owner of Damaged Property</label><sup>Optional</sup>
															<textarea class="form-control" maxlength="400"></textarea>
														</div>
														<div class="col-md-6">
															<label>Injury / Damage</label><sup>Optional</sup>
															<textarea class="form-control" maxlength="400"></textarea>
														</div>
													</div>
													<div class="form-group">
														<div class="col-md-6">
															<label>Special Handling Instructions</label><sup>Optional</sup>
															<textarea class="form-control" maxlength="400"></textarea>
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
							<!-- Construction Engineering Plant -->
							
							<div class="form-group claim" style="display:none" id="construct_engine">
								<div class="col-md-12">
									<!-- Nav tabs -->
									<ul class="nav nav-tabs" role="tablist">
									    <li role="presentation" class="active"><a href="#profile5" aria-controls="profile5" role="tab" data-toggle="tab">Profile</a></li>
									    <li role="presentation"><a href="#policy5" aria-controls="policy5" role="tab" data-toggle="tab">Policy</a></li>
									    <li role="presentation"><a href="#broker5" aria-controls="broker5" role="tab" data-toggle="tab">Broker</a></li>
									    <li role="presentation"><a href="#insured5" aria-controls="insured5" role="tab" data-toggle="tab">Insured</a></li>
									    <li role="presentation"><a href="#loss5" aria-controls="loss5" role="tab" data-toggle="tab">Loss</a></li>
									 </ul>
								</div>
								<div class="col-md-12">
									<!-- Tab panes -->
									<br/>
								  	<div class="tab-content">
									<div class="tab-pane active" role="tabpane" id="profile5">
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
															<label>Role</label>
															<select class="form-control">
																<option>Choose</option>
																<option>Choose</option>
																<option>Choose</option>
															</select>
														</div>
														<div class="col-md-3">
																<label>Telephone</label>
																<input type="tel" class="form-control" placeholder = "02 123 4567"  maxlength="9"/>
														</div>
														<div class="col-md-3">
																<label>Fax</label>
																<input type="tel" class="form-control" placeholder = "0123456789" maxlength="10" />
														</div>
													</div>
													<div class="form-group">
														<div class="col-md-6">
															<label>Email</label>
															<input type="email" class="form-control" placeholder = "sample@email.com" maxlength="50" />
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
									<div class="tab-pane" role="tabpane" id="policy5">
									  	<div class="col-md-12">
										  	<div class="row">
										  		<div class="well">
													<div class="form-group">
														<div class="col-md-6">
															<label>Insurance Company</label>
															<input type="text" class="form-control" placeholder = "ex. Company Inc." maxlength="50"/>
														</div>
														<div class="col-md-3">
															<label>Policy No.</label>
															<input type="tel" class="form-control" placeholder = "ABC123456" maxlength="35"/>
														</div>
														<div class="col-md-3">
																<label>Property Reference No.</label>
																<input type="tel" class="form-control" placeholder = "ABC123456"  maxlength="35"/>
														</div>
													</div>
													<div class="form-group">
														<div class="col-md-6">
																<label>Policy Wording</label>
																<textarea class="form-control" maxlength="400"> </textarea>
														</div>
														<div class="col-md-3">
															<label>Deductable/Excess</label>
															<div class="input-group"> 
															    <span class="input-group-addon">$</span>
															    <input type="number" value="0" min="0" step="0.01" data-number-to-fixed="2" data-number-stepfactor="100" class="form-control currency" maxlength="35" />
															</div> 
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
									<div class="tab-pane" role="tabpane" id="broker5">
									  	<div class="col-md-12">
										  	<div class="row">
										  		<div class="well">
													<div class="form-group">
														<div class="col-md-6">
															<label>Company Name</label>
															<input type="text" class="form-control" placeholder = "ex. Company Inc." maxlength="50" />
														</div>
														<div class="col-md-3">
															<label>Contact Name</label>
															<input type="text" class="form-control" placeholder = "ex. John Smith" maxlength="50"/>
														</div>
														<div class="col-md-3">
															<label>Broker Reference</label>
															<input type="text" class="form-control" placeholder = "ABC123456" maxlength="50"/>
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
									<div class="tab-pane" role="tabpane" id="insured5">
									  	<div class="col-md-12">
										  	<div class="row">
										  		<div class="well">
													<div class="form-group">
														<div class="col-md-6">
															<label>Insured Name</label>
															<input type="text" class="form-control" placeholder = "ex. John Smith" maxlength="50" />
														</div>
													</div>
													<div class="form-group">
														<div class="col-md-6">
															<label>Contact Person</label>
															<input type="text" class="form-control" placeholder = "ex. John Smith" maxlength="50"/>
														</div>
													</div>
													<div class="form-group">
														<div class="col-md-12">
															<label>Do you know the address?</label>
															<span><input type="radio" onclick="showDiv('address_construct');" name="address"> Yes</span>
															<span><input type="radio" onclick="hideDiv('address_construct');"  name="address"> No</span>
														</div>
													</div>
													<div id="address_construct" style="display:none">
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
																<input type="text" class="form-control" placeholder = "" maxlength="50" />
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
																<input type="text" class="form-control" placeholder = "ex." maxlength="50"/>
															</div>
															<div class="col-md-6">
																<label>Address line 2</label><sup>Optional</sup> 
																<input type="text" class="form-control" placeholder = "ex." maxlength="50"/>
															</div>
														</div>
													</div>
													<div class="form-group">
														<div class="col-md-3">
															<label>Telephone</label>
															<input type="tel" class="form-control" placeholder = "02 123 4567" maxlength="9"/>
														</div>
														<div class="col-md-3">
															<label>Fax</label><sup>Optional</sup>
															<input type="tel" class="form-control" placeholder = "0123456789" maxlength="10"/>
														</div>
														<div class="col-md-6">
															<label>Email</label><sup>Optional</sup>
															<input type="text" class="form-control" placeholder = "sample@email.com" maxlength="50"/>
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
									<div class="tab-pane" role="tabpane" id="loss5">
									  	<div class="col-md-12">
										  	<div class="row">
										  		<div class="well">
										  			<div class="form-group">
														<div class="col-md-6">
															<label>Aircraft Type & Registration</label>
															<input type="text" class="form-control" placeholder = "" maxlength="50" />
														</div>
														<div class="col-md-3">
															<label>Type of Loss</label><sup>Optional</sup>
															<select id = "others_construct" class="form-control others_specify">
																<option>Choose</option>
																<option>Premises</option>
																<option>Products</option>
																<option>Other</option>
															</select>
														</div>
														<div class="col-md-3" id="others_construct1" style="display:none">
															<label>Please specify:</label>
															<input type="text" class="form-control" placeholder = "" maxlength="35"/>
														</div>
													</div>
													<div class="form-group">
														<div class="col-md-3">
															<label>Reporting Form</label>
															<input type="date" class="form-control" placeholder = "MM/DD/YYYY"/>
														</div>
														<div class="col-md-3">
															<label>Sums Insured</label><sup>Optional</sup>
															<div class="input-group"> 
															    <span class="input-group-addon">$</span>
															    <input type="number" value="0" min="0" step="0.01" data-number-to-fixed="2" data-number-stepfactor="100" class="form-control currency" maxlength="35" />
															</div> 						
														</div>
														<div class="col-md-3">
															<label>Estimated Loss</label><sup>Optional</sup>
															<div class="input-group"> 
															    <span class="input-group-addon">$</span>
															    <input type="number" value="0" min="0" step="0.01" data-number-to-fixed="2" data-number-stepfactor="100" class="form-control currency" maxlength="35" />
															</div> 
														</div>
													</div>
													<div class="form-group">
														<div class="col-md-6">
															<label>Location of Loss</label><sup>Optional</sup>
															<input type="text" class="form-control" placeholder = "" maxlength="50"/>
														</div>
														<div class="col-md-6">
															<label>Description of Loss</label>
															<textarea class="form-control" maxlength="400"></textarea>
														</div>
													</div>
													<div class="form-group">
														<div class="col-md-6">
															<label>Special Handling Instructions</label><sup>Optional</sup>
															<textarea class="form-control" maxlength="400"></textarea>
														</div>
													</div>
													<div class="form-group">
														<div class="col-md-12">
															<p>
																Upload any attachments here. Please put your all your documents in one folder if you are going to upload multiple.
															</p>
															<form>
															<div class="form-group">
																<div class="col-md-6">
																	<input type="file" id = "file_construct" class=" form-control file" multiple>
																</div>
															</div>
															<div class="form-group">
																<div class="col-md-12">
																	<input type="submit" id = "upload_construct" class="btn btn-default" value="Upload Files" disabled = "">
																</div>
															</div>
															</form>
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
						<!-- Transit Marine -->
						<div class="form-group claim" style="display:none" id="transit_marine">
							<div class="col-md-12">
								<!-- Nav tabs -->
								<ul class="nav nav-tabs" role="tablist">
								    <li role="presentation" class="active"><a href="#profile6" aria-controls="profile6" role="tab" data-toggle="tab">Profile</a></li>
								    <li role="presentation"><a href="#policy6" aria-controls="policy6" role="tab" data-toggle="tab">Policy</a></li>
								    <li role="presentation"><a href="#broker6" aria-controls="broker6" role="tab" data-toggle="tab">Broker</a></li>
								    <li role="presentation"><a href="#insured6" aria-controls="insured6" role="tab" data-toggle="tab">Insured</a></li>
								    <li role="presentation"><a href="#loss6" aria-controls="loss6" role="tab" data-toggle="tab">Loss</a></li>
								 </ul>
							</div>
							<div class="col-md-12">
								<!-- Tab panes -->
								<br/>
							  	<div class="tab-content">
								<div class="tab-pane active" role="tabpane" id="profile6">
								  	<div class="col-md-12">
									  	<div class="row">
									  		<div class="well">
												<div class="form-group">
													<div class="col-md-6">
														<label>Name</label>
														<input type="text" class="form-control" placeholder = "ex. John Smith" maxlength="50"/>
													</div>
													<div class="col-md-6">
														<label>Company Name</label>
														<input type="text" class="form-control" placeholder = "ex. Company Inc." maxlength="50"/>
													</div>
												</div>
												<div class="form-group">
													<div class="col-md-6">
														<label>Role</label>
														<select class="form-control">
															<option>Choose</option>
															<option>Choose</option>
															<option>Choose</option>
														</select>
													</div>
													<div class="col-md-3">
															<label>Telephone</label>
															<input type="tel" class="form-control" placeholder = "02 123 4567" maxlength="50" />
													</div>
													<div class="col-md-3">
															<label>Fax</label>
															<input type="tel" class="form-control" placeholder = "0123456789" maxlength="10"/>
													</div>
												</div>
												<div class="form-group">
													<div class="col-md-6">
														<label>Email</label>
														<input type="email" class="form-control" placeholder = "sample@email.com" maxlength="50"/>
													</div>
												</div>
												<div class="form-group">
													<div class="col-md-12">
														<input type="submit" class="btn btn-primary pull-right" value="Next" >
													</div>
												</div>
											</div>
										</div>												
								  	</div>
								</div>		
								<div class="tab-pane" role="tabpane" id="policy6">
								  	<div class="col-md-12">
									  	<div class="row">
									  		<div class="well">
												<div class="form-group">
													<div class="col-md-6">
														<label>Insurance Company</label>
														<input type="text" class="form-control" placeholder = "ex. Company Inc." maxlength="50"/>
													</div>
													<div class="col-md-3">
														<label>Policy No.</label>
														<input type="tel" class="form-control" placeholder = "" maxlength="35"/>
													</div>
													<div class="col-md-3">
														<label>Property Reference No.</label>
														<input type="tel" class="form-control" placeholder = ""  maxlength="35"/>
													</div>
												</div>
												<div class="form-group">
													<div class="col-md-6">
														<label>Policy Wording</label>
														<textarea class="form-control" maxlength="400"> </textarea>
													</div>
													<div class="col-md-3">
														<label>Deductable/Excess</label>
														<div class="input-group"> 
															    <span class="input-group-addon">$</span>
															    <input type="number" value="0" min="0" step="0.01" data-number-to-fixed="2" data-number-stepfactor="100" class="form-control currency" maxlength="35" />
															</div> 
													</div>
												</div>
												<div class="form-group">
													<div class="col-md-12">
														<input type="submit" class="btn btn-primary pull-right" value="Next" >
													</div>
												</div>
											</div>
										</div>												
								  	</div>
								</div>	
								<div class="tab-pane" role="tabpane" id="broker6">
								  	<div class="col-md-12">
									  	<div class="row">
									  		<div class="well">
												<div class="form-group">
													<div class="col-md-6">
														<label>Company Name</label>
														<input type="text" class="form-control" placeholder = "ex. Company Inc." maxlength="50"/>
													</div>
													<div class="col-md-6">
														<label>Contact Name</label>
														<input type="text" class="form-control" placeholder = "" maxlength="50"/>
													</div>
												</div>
												<div class="form-group">
													<div class="col-md-3">
														<label>Broker Reference</label>
														<input type="text" class="form-control" placeholder = "" maxlength="35"/>
													</div>
												</div>
												<div class="form-group">
													<div class="col-md-12">
														<input type="submit" class="btn btn-primary pull-right" value="Next" >
													</div>
												</div>
											</div>
										</div>												
								  	</div>
								</div>	
								<div class="tab-pane" role="tabpane" id="insured6">
								  	<div class="col-md-12">
									  	<div class="row">
									  		<div class="well">
												<div class="form-group">
													<div class="col-md-6">
														<label>Insured Name</label>
														<input type="text" class="form-control" placeholder = "ex. John Smith" maxlength="50"/>
													</div>
													<div class="col-md-6">
														<label>Contact Person</label>
														<input type="text" class="form-control" placeholder = "ex. John Smith" maxlength="50"/>
													</div>
												</div>
												<div class="form-group">
													<div class="col-md-12">
														<label>Do you know the address?</label>
														<span><input type="radio" onclick="showDiv('address_transit');" name="address"> Yes</span>
														<span><input type="radio" onclick="hideDiv('address_transit');"name="address"> No</span>
													</div>
												</div>
												<div id = "address_transit" style="display:none">
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
															<input type="text" class="form-control" placeholder = "" maxlength="35" />
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
												</div>
												<div class="form-group">
													<div class="col-md-3">
														<label>Telephone</label>
														<input type="tel" class="form-control" placeholder = "02 123 4567" maxlength="9"/>
													</div>
													<div class="col-md-3">
														<label>Fax</label><sup>Optional</sup>
														<input type="tel" class="form-control" placeholder = "0123456789" maxlength="10"/>
													</div>
												</div>
												<div class="form-group">
													<div class="col-md-12">
														<input type="submit" class="btn btn-primary pull-right" value="Next" >
													</div>
												</div>
											</div>
										</div>												
								  	</div>
								</div>
								<div class="tab-pane" role="tabpane" id="loss6">
								  	<div class="col-md-12">
									  	<div class="row">
									  		<div class="well">
									  			<div class="form-group">
													<div class="col-md-6">
														<label>Consignee</label>
														<input type="text" class="form-control" placeholder = "" maxlength="50"/>
													</div>
													<div class="col-md-6">
														<label>Description of Consignment</label>
														<textarea class="form-control" maxlength="400"></textarea>
													</div>
												</div>
									  			<div class="form-group">
													<div class="col-md-6">
														<label>Carrier / Cargo Forwarder</label>
														<input type="text" class="form-control" placeholder = "" maxlength="50"/>
													</div>
													<div class="col-md-6">
														<label>Location of Incident</label>
														<input type="text" class="form-control" placeholder = "" maxlength="50"/>
													</div>
												</div>
												<div class="form-group">
													<div class="col-md-6">
														<label>Loss Description</label>
														<textarea class="form-control" maxlength="400"></textarea>
													</div>
													<div class="col-md-3">
														<label>Date of Incident</label>
														<input type="date" class="form-control" placeholder = "MM/DD/YYYY"/>
													</div>
													<div class="col-md-3">
														<label>Damage / Loss</label>
														<div class="input-group"> 
														    <span class="input-group-addon">$</span>
														    <input type="number" value="0" min="0" step="0.01" data-number-to-fixed="2" data-number-stepfactor="100" class="form-control currency" maxlength="35" />
														</div> 
													</div>
												</div>
												<div class="form-group">
													<div class="col-md-6">
														<label>Description</label>
														<textarea class="form-control" maxlength="400"></textarea>
													</div>
													<div class="col-md-6">
														<label>Cause</label>
														<input type="text" class="form-control" placeholder = "" maxlength="50"/>
													</div>
												</div>
												<div class="form-group">
													<div class="col-md-6">
														<label>Estimated Cost of Damage / Loss</label>
													</div>
												</div>
												<div class="form-group">
													<div class="col-md-3">
														<div class="input-group"> 
														    <span class="input-group-addon">$</span>
														    <input type="number" value="0" min="0" step="0.01" data-number-to-fixed="2" data-number-stepfactor="100" class="form-control currency" maxlength="35" />
														</div> 
													</div>
												</div>
												<div class="form-group">
													<div class="col-md-12">
														<label>Claim Made against Carrier of Other Party</label><br/>
														<span>
															<input type="radio" onclick="showDiv('against_carrier');" name="against_carrier" placeholder = ""/>
															Yes
														</span>
														<span>
															<input type="radio" onclick="hideDiv('against_carrier');" name="against_carrier" placeholder = ""/>
															No
														</span>
													</div>
												</div>
												<div class="form-group" id="against_carrier" style="display:none">
													<div class="col-md-6">
														<label>Name of Other Party</label>
														<input type="text" class="form-control" placeholder = "" maxlength="50"/>
													</div>
													<div class="col-md-3">
														<label>Claim Made</label>
														<input type="date" class="form-control" placeholder = "MM-DD-YYYY"/>
													</div>
												</div>
												<div class="form-group">
													<div class="col-md-6">
														<label>How was claim made</label>
														<input type="text" class="form-control" placeholder = "" maxlength="50"/>
													</div>
												</div>
												<div class="form-group">
													<div class="col-md-12">
														<p>
															Upload any attachments here. Please put your all your documents in one folder if you are going to upload multiple.
														</p>
														<form>
														<div class="form-group">
															<div class="col-md-6">
																<input type="file" id = "file_transit" class=" form-control file" multiple>
															</div>
														</div>
														<div class="form-group">
															<div class="col-md-12">
																<input type="submit" id = "upload_transit" class="btn btn-default" value="Upload Files" disabled = "">
															</div>
														</div>
														</form>
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
		<script type="text/javascript">
		$(document).ready(function (){
			$('#claim_type').change(function(){
				var value = $(this).val();
				$('#alert').hide();
				$('.claim').hide();
				$('#' + $(this).val()).fadeIn();
				console.log(value);
				console.log($('#' + $(this).val()));
			});

			$('.others_specify').change(function(e){
				var elem_val = $(this).val();
				var other_id = $(this).attr('id');
				if(elem_val == 'Other'){
					$('#'+other_id+'1').show();
				}else{
					$('#'+other_id+'1').hide();
				}
				
			});
			$('#submit_motor').click(function() {
				var alert_type = 'alert-success';
				var alert_msg = '<strong>Well done!</strong> You successfully read this important alert message.';
				$('#alert').addClass(alert_type);
				$('#alert').html(alert_msg);
				$('#alert').fadeIn();
			});
			$('#file_property').change(function(){
				var file_name = $(this).val();
				if(file_name == '') {
					alert('it cannot be empty');
				} else {
					$('#upload_property').removeAttr('disabled');
				}
			});
			$('#file_liability').change(function(){
				var file_name = $(this).val();
				if(file_name == '') {
					alert('it cannot be empty');
				} else {
					$('#upload_liability').removeAttr('disabled');
				}
			});
			$('#file_construct').change(function(){
				var file_name = $(this).val();
				if(file_name == '') {
					alert('it cannot be empty');
				} else {
					$('#upload_construct').removeAttr('disabled');
				}
			});
			$('#file_transit').change(function(){
				var file_name = $(this).val();
				if(file_name == '') {
					alert('it cannot be empty');
				} else {
					$('#upload_transit').removeAttr('disabled');
				}
			});
			$('#myTabs a[href="#profile"]').tab('show') // Select tab by name
			$('#myTabs a:first').tab('show') // Select first tab
			$('#myTabs a:last').tab('show') // Select last tab
			$('#myTabs li:eq(2) a').tab('show') // Select third tab (0-indexed)
					
		});
			function showDiv(element_id){
				$('#'+element_id).fadeIn();
			}
			function hideDiv(element_id){
				$('#'+element_id).hide();
			}

			$('#myTabs a').click(function (e) {
				e.preventDefault()
			$(this).tab('show')
			})


		</script>

	</body>
</html>