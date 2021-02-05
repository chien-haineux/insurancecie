<div class="container">
	<div class="col-lg">
		<h1>Get a quote for your car</h1>

		<p>Driver information</p>

		<?=validation_errors()?>

		<form method="post">
			<input type="hidden" name="id" value="<?=isset($id) ? $id : 0?>"/>
			<div class="form-group">
				<label class="col-form-label">First name</label>
				<input type="text" class="form-control" name="firstName" value="<?=set_value('firstName', $firstName)?>">
			</div>

			<div class="form-group">
				<label class="col-form-label">Last name</label>
				<input type="text" class="form-control" name="lastName" value="<?=set_value('lastName', $lastName)?>">
			</div>

			<div class="form-group">
			  <label>Province</label>
			  <select class="form-control" name="province">
				<option value="AB">Alberta</option>
				<option value="BC">British Columbia</option>
				<option value="MB">Manitoba</option>
				<option value="NB">New Brunswick</option>
				<option value="NL">Newfoundland and Labrador</option>
				<option value="NS">Nova Scotia</option>
				<option value="ON">Ontario</option>
				<option value="PE">Prince Edward Island</option>
				<option value="QC">Quebec</option>
				<option value="SK">Saskatchewan</option>
				<option value="NT">Northwest Territories</option>
				<option value="NU">Nunavut</option>
				<option value="YT">Yukon</option>
			  </select>
			</div>

			<div class="form-group">
				<label for="exampleTextarea">Address</label>
				<input type="text" class="form-control" name="address" value="<?=set_value('address', $address)?>">
			</div>

			<div class="form-group">
				<label class="col-form-label">Phone number</label>
				<input type="text" class="form-control" name="phoneNumber" value="<?=set_value('phoneNumber', $phoneNumber)?>">
			</div>

			<div class="form-group">
				<label class="col-form-label">Email</label>
				<input type="email" class="form-control" name="email" value="<?=set_value('email', $email)?>">
			</div>

			<h2>Date of birth</h2>

			<div class="form-group">
				<select name="DOBMonth">
					<label class="col-form-label">Month</label>
					<option value="1">January</option>
					<option value="2">Febuary</option>
					<option value="3">March</option>
					<option value="4">April</option>
					<option value="5">May</option>
					<option value="6">June</option>
					<option value="7">July</option>
					<option value="8">August</option>
					<option value="9">September</option>
					<option value="10">October</option>
					<option value="11">November</option>
					<option value="12">December</option>
				</select>
			</div>

			<div class="form-group">
				<label class="col-form-label">Day</label>
				<input type="number" class="form-control" min="1" max="31" name="DOBDay" value="<?=set_value('DOBDay', $DOBDay)?>">
			</div>

			<div class="form-group">
				<label class="col-form-label">Year</label>
				<input type="number" class="form-control" min="1900" max="2020" name="DOBYear" value="<?=set_value('DOBYear', $DOBYear)?>">
			</div>

			<fieldset class="form-group">
				<legend>Gender</legend>
				<div class="form-check">
					<label class="form-check-label">
						<input type="radio" class="form-check-input" name="gender" id="optionsRadios1" value="male">
						Male
					</label>
				</div>

				<div class="form-check">
					<label class="form-check-label">
						<input type="radio" class="form-check-input" name="gender" id="optionsRadios2" value="female">
						Female
					</label>
				</div>
			</fieldset>

			<hr />
			<h2>Driver's license information</h2>

			<fieldset class="form-group">
				<legend>Class of license</legend>
				<div class="form-check">
					<label class="form-check-label">
						<input type="radio" class="form-check-input" name="driverClass" id="optionsRadios1" value="5">5 - Private passenger vehicle (automobile, light truck, motor home or moped)
					</label>
				</div>

				<div class="form-check">
					<label class="form-check-label">
						<input type="radio" class="form-check-input" name="driverClass" id="optionsRadios2" value="5pl">5PL - Class 5 probationary license
					</label>
				</div>

				<div class="form-group">
					<label class="col-form-label">What year did you acquire this license?</label>
					<input type="number" class="form-control" min="1900" max="2020" name="driverLicenseYear" value="<?=set_value('driverLicenseYear', $driverLicenseYear)?>">
				</div>
			</fieldset>

			<hr>
			<h2>Vehicle information</h2>
			<div class="form-group">
				<label class="col-form-label">Vehicle year</label>
				<input type="number" class="form-control" min="1900" max="2020" name="vehicleYear" value="<?=set_value('vehicleYear', $vehicleYear)?>">
			</div>

			<div class="form-group">
				<label class="col-form-label">Vehicle model and make</label><br/>

				<select name="vehicleMake">
					<option>Nissan Versa Note S 5DR</option>
					<option>Toyota Camry LE 4DR</option>
					<option>BMW M4 2DR</option>
					<option>AUDI A4</option>
				</select>
			</div>

			<div class="form-group">
				<label class="col-form-label">How many kilometres are driven each day?</label>
				<input type="number" class="form-control" min="0" max="500" name="vehicleDailyKms" value="<?=set_value('vehicleDailyKms', $vehicleDailyKms)?>">
			</div>

			<hr />
			<h2>Insurance history</h2>

			<div class="form-group">
				<label class="col-form-label">How many insurance claims have you made in the last 5 years?</label>
				<input type="number" class="form-control" min="0" max="500" name="claimsLast5Years" value="<?=set_value('claimsLast5Years', $claimsLast5Years)?>">
			</div>

			<input class="btn btn-primary" type="submit" value="Submit">
		</form>
	</div>
</div>
