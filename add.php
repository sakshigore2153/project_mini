<div class="content-wrapper">
    <section class="content">
        <div class="container"> 
			<div class="row" > 
				<div class="col-md-12" style="margin-left:-2%">
				<div class="box box-info">
					
					<span id="error_message"></span>	
					
					  					<div class="box-header with-border">
						<h3 class="box-title">Address Details</h3>
					</div>
			
					<div class="form-body" >
						<div class="container" >
							<form action="https://rkmm.rayaterp.in/index.php/registration_student/update_registration_address" enctype="multipart/form-data" method="post">

								<div class="row" style="margin-top:1%">
									<div class="col-md-6">
										<div class="row" style="margin-top:1%">

											<div class="col-md-12">
												<label for="exampleInputPassword1">Permenant Address</label> <span class="required">*</span>
												<!-- <input type="checkbox" class="form-check checkbox" name="pin_code" id="pin_code" value=""  onkeypress="return isNumber(event)"> Same as Permenant -->
												<textarea class="form-control per_address" name="per_address" id="per_address" placeholder="Permenant Address"  required> </textarea>
											</div>

											<div class="col-md-6">
		            							<label for="exampleInputEmail1">Country</label> <span class="required">*</span>
		            							<select name="per_country" class="form-control" id="per_country" required>
		            								<option   value="India">India</option>
		            								<option   value="Other">Other</option>										
		            							</select>
		            						</div>

		            						<div class="col-md-6" id="getState">
												<label for="exampleInputPassword1">State</label> <span class="required">*</span> 
												<select name="per_state_id" class="form-control" id="per_state_id" required> 
													<option value="">Select State</option>		
														
													<option  value="1">ANDHRA PRADESH</option>											
														
													<option  value="2">ASSAM</option>											
														
													<option  value="3">ARUNACHAL PRADESH</option>											
														
													<option  value="4">BIHAR</option>											
														
													<option  value="5">GUJRAT</option>											
														
													<option  value="6">HARYANA</option>											
														
													<option  value="7">HIMACHAL PRADESH</option>											
														
													<option  value="8">JAMMU & KASHMIR</option>											
														
													<option  value="9">KARNATAKA</option>											
														
													<option  value="10">KERALA</option>											
														
													<option  value="11">MADHYA PRADESH</option>											
														
													<option  value="12">MAHARASHTRA</option>											
														
													<option  value="13">MANIPUR</option>											
														
													<option  value="14">MEGHALAYA</option>											
														
													<option  value="15">MIZORAM</option>											
														
													<option  value="16">NAGALAND</option>											
														
													<option  value="17">ORISSA</option>											
														
													<option  value="18">PUNJAB</option>											
														
													<option  value="19">RAJASTHAN</option>											
														
													<option  value="20">SIKKIM</option>											
														
													<option  value="21">TAMIL NADU</option>											
														
													<option  value="22">TRIPURA</option>											
														
													<option  value="23">UTTAR PRADESH</option>											
														
													<option  value="24">WEST BENGAL</option>											
														
													<option  value="25">DELHI</option>											
														
													<option  value="26">GOA</option>											
														
													<option  value="27">PONDICHERY</option>											
														
													<option  value="28">LAKSHDWEEP</option>											
														
													<option  value="29">DAMAN & DIU</option>											
														
													<option  value="30">DADRA & NAGAR</option>											
														
													<option  value="31">CHANDIGARH</option>											
														
													<option  value="32">ANDAMAN & NICOBAR</option>											
														
													<option  value="33">UTTARANCHAL</option>											
														
													<option  value="34">JHARKHAND</option>											
														
													<option  value="35">CHATTISGARH</option>											
														
												</select> 
											</div> 

											<div class="col-md-6">
												<label for="exampleInputPassword1">City/Village</label><span class="required">*</span> 
												<input type="text" class="form-control" name="per_city" id="per_city" placeholder="City/Village"  value="" required> 
											</div>

											<div class="col-md-6">
												<label for="exampleInputPassword1">Area</label><span class="required">*</span>
												<select name="per_area" class="form-control" id="per_area" required>
													<option value="">Select Area</option>												
													<option  value="Urban">Urban</option>	
													<option  value="Rural">Rural</option>	
												</select>
											</div>

											<div class="col-md-3">
												<label for="exampleInputPassword1">Pin Code</label><span class="required">*</span>
												<input type="text" class="form-control" name="per_pin_code" id="per_pin_code" placeholder="Pin Code" value=""  onkeypress="return isNumber(event)" required> 
											</div>

										</div>
									</div>
									<div class="col-md-6">
										<div class="row" style="margin-top:1%">
											<div class="col-md-6">
											
												
												</div>

											<div class="col-md-11">
												<label for="exampleInputPassword1">Correspondence Address</label>&nbsp;&nbsp; <input type="checkbox" id="copy" onclick="same()"> Same as Permenant
												<textarea class="form-control address" name="address" id="address" placeholder="Correspondence Address" > </textarea>
											</div>

											<div class="col-md-6">
		            							<label for="exampleInputEmail1">Country</label>
		            							<select name="country" class="form-control" id="country">
		            								<option   value="India">India</option>
		            								<option   value="Other">Other</option>										
		            							</select>
		            						</div>

		            						<div class="col-md-5" id="getState">
												<label for="exampleInputPassword1">State</label>
												<select name="state_id" class="form-control" id="state_id"> 
													<option value="">Select State</option>		
														
													<option  value="1">ANDHRA PRADESH</option>											
														
													<option  value="2">ASSAM</option>											
														
													<option  value="3">ARUNACHAL PRADESH</option>											
														
													<option  value="4">BIHAR</option>											
														
													<option  value="5">GUJRAT</option>											
														
													<option  value="6">HARYANA</option>											
														
													<option  value="7">HIMACHAL PRADESH</option>											
														
													<option  value="8">JAMMU & KASHMIR</option>											
														
													<option  value="9">KARNATAKA</option>											
														
													<option  value="10">KERALA</option>											
														
													<option  value="11">MADHYA PRADESH</option>											
														
													<option  value="12">MAHARASHTRA</option>											
														
													<option  value="13">MANIPUR</option>											
														
													<option  value="14">MEGHALAYA</option>											
														
													<option  value="15">MIZORAM</option>											
														
													<option  value="16">NAGALAND</option>											
														
													<option  value="17">ORISSA</option>											
														
													<option  value="18">PUNJAB</option>											
														
													<option  value="19">RAJASTHAN</option>											
														
													<option  value="20">SIKKIM</option>											
														
													<option  value="21">TAMIL NADU</option>											
														
													<option  value="22">TRIPURA</option>											
														
													<option  value="23">UTTAR PRADESH</option>											
														
													<option  value="24">WEST BENGAL</option>											
														
													<option  value="25">DELHI</option>											
														
													<option  value="26">GOA</option>											
														
													<option  value="27">PONDICHERY</option>											
														
													<option  value="28">LAKSHDWEEP</option>											
														
													<option  value="29">DAMAN & DIU</option>											
														
													<option  value="30">DADRA & NAGAR</option>											
														
													<option  value="31">CHANDIGARH</option>											
														
													<option  value="32">ANDAMAN & NICOBAR</option>											
														
													<option  value="33">UTTARANCHAL</option>											
														
													<option  value="34">JHARKHAND</option>											
														
													<option  value="35">CHATTISGARH</option>											
														
												</select> 
											</div> 

											<div class="col-md-6">
												<label for="exampleInputPassword1">City/Village</label> 
												<input type="text" class="form-control" name="city" id="city" placeholder="City/Village"  value="" > 
											</div>

											<div class="col-md-5">
												<label for="exampleInputPassword1">Area</label>
												<select name="area" class="form-control" id="area">
													<option value="">Select Area</option>												
													<option  value="Urban">Urban</option>	
													<option  value="Rural">Rural</option>	
												</select>
											</div>

											<div class="col-md-3">
												<label for="exampleInputPassword1">Pin Code</label> 
												<input type="text" class="form-control" name="pin_code" id="pin_code" placeholder="Pin Code" value=""  onkeypress="return isNumber(event)"> 
											</div>

										</div>
									</div>
								</div>
							    
							    <!-- <div class="row" style="margin-top:1%">	
									<div class="col-md-4">
										<label for="exampleInputPassword1">Correspondence Address</label> <span class="required">*</span>
										<textarea class="form-control" name="address" id="address" placeholder="Correspondence Address"  required> </textarea>
									</div>
									
									<div class="col-md-4">
										<label for="exampleInputPassword1">Permanent Address</label> 
										<textarea class="form-control" name="per_address" id="per_address" placeholder="Permanent Address"  required> </textarea>
									</div>
									
									<div class="col-md-3">
										<label for="exampleInputPassword1">City/Village</label> 
										<input type="text" class="form-control" name="city" id="city" placeholder="City/Village"  value="" > 
									</div>
								</div> -->
								
								<!-- <div class="row" style="margin-top:1%">	
									 <div class="col-md-2">
										<label for="exampleInputPassword1">Pin Code</label> 
										<input type="text" class="form-control" name="pin_code" id="pin_code" placeholder="Pin Code" value=""  onkeypress="return isNumber(event)"> 
									</div> -->
									
                                    <!-- <div class="col-md-3">
										<label for="exampleInputPassword1">Area</label><span class="required">*</span>
										<select name="area" class="form-control" id="area" required>
											<option value="">Select Area</option>												
											<option  value="Urban">Urban</option>	
											<option  value="Rural">Rural</option>	
										</select>
									</div> -->
									
									<!-- <div class="col-md-3" id="getState">
										<label for="exampleInputPassword1">State</label> <span class="required">*</span> 
										<select name="state_id" class="form-control" id="state_id" required> 
											<option value="">Select State</option>		
												
											<option  value="1">ANDHRA PRADESH</option>											
												
											<option  value="2">ASSAM</option>											
												
											<option  value="3">ARUNACHAL PRADESH</option>											
												
											<option  value="4">BIHAR</option>											
												
											<option  value="5">GUJRAT</option>											
												
											<option  value="6">HARYANA</option>											
												
											<option  value="7">HIMACHAL PRADESH</option>											
												
											<option  value="8">JAMMU & KASHMIR</option>											
												
											<option  value="9">KARNATAKA</option>											
												
											<option  value="10">KERALA</option>											
												
											<option  value="11">MADHYA PRADESH</option>											
												
											<option  value="12">MAHARASHTRA</option>											
												
											<option  value="13">MANIPUR</option>											
												
											<option  value="14">MEGHALAYA</option>											
												
											<option  value="15">MIZORAM</option>											
												
											<option  value="16">NAGALAND</option>											
												
											<option  value="17">ORISSA</option>											
												
											<option  value="18">PUNJAB</option>											
												
											<option  value="19">RAJASTHAN</option>											
												
											<option  value="20">SIKKIM</option>											
												
											<option  value="21">TAMIL NADU</option>											
												
											<option  value="22">TRIPURA</option>											
												
											<option  value="23">UTTAR PRADESH</option>											
												
											<option  value="24">WEST BENGAL</option>											
												
											<option  value="25">DELHI</option>											
												
											<option  value="26">GOA</option>											
												
											<option  value="27">PONDICHERY</option>											
												
											<option  value="28">LAKSHDWEEP</option>											
												
											<option  value="29">DAMAN & DIU</option>											
												
											<option  value="30">DADRA & NAGAR</option>											
												
											<option  value="31">CHANDIGARH</option>											
												
											<option  value="32">ANDAMAN & NICOBAR</option>											
												
											<option  value="33">UTTARANCHAL</option>											
												
											<option  value="34">JHARKHAND</option>											
												
											<option  value="35">CHATTISGARH</option>											
												
										</select> 
									</div> --> 
									
									<!-- <div class="col-md-3">
            							<label for="exampleInputEmail1">Country</label> <span class="required">*</span>
            							<select name="country" class="form-control" id="country" required>
            								<option   value="India">India</option>
            								<option   value="Other">Other</option>										
            							</select>
            						</div> -->
								<!-- </div> -->
								<!-- <div class="row" style="margin-top:1%; display: none" id="Display_country">
                						<div class="col-md-3">
                							<label for="exampleInputEmail1">Country Name</label>
                							<input type="text" class="form-control" name="country_name" id="country_name" placeholder="Country Name" value=""> 
                						</div>
                						<div class="col-md-5">
                							<label for="exampleInputEmail1">Passport No.</label>
                							<input type="text" class="form-control" name="passport_no" id="passport_no" placeholder="Passport No." value=""> 
                						</div>
                			            <div class="col-md-3">
                							<label for="exampleInputEmail1">Passport Validity</label>
                							<input type="date" class="form-control" name="passport_validity" id="passport_validity" placeholder="Passport Validity" value="0000-00-00"> 
                						</div>
                					</div> -->
								
								
								<!-- <div class="row" style="margin-top:1%">
									
									
								</div> -->

								
								<div class="row" style="margin-top:2%">	
									<div class="col-md-1"><a href="https://rkmm.rayaterp.in/index.php/registration_student" class="btn btn-block btn-default btn-flat">Back</a></div>
									<div class="col-md-8"></div>
																		<div class="col-md-2">
										<button type="submit" class="btn btn-block btn-success btn-flat">Submit</button> 
									</div>
																	</div>
							</form> 
							<br>
						</div>
						</div>
				</div>
				</div>
			</div>
		  
		
        </div>       
    </section>	
</div>