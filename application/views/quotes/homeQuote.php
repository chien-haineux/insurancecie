<div class="container">
	<div class="col">
		<h1>Get a quote for your home</h1>

		<p>Client information</p>

		<?=validation_errors()?>

		<form method="post">
			<div class="form-group">
				<label class="col-form-label">First name</label>
				<input type="text" class="form-control" name="firstName">
			</div>

			<div class="form-group">
				<label class="col-form-label">Last name</label>
				<input type="text" class="form-control" name="lastName">
			</div>

			<div class="form-group">
			  <label>Province</label>
			  <select class="form-control" name="province">
				<option value="">Select your province</option>
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
				<textarea class="form-control" id="exampleTextarea" rows="3" name="address"></textarea>
			</div>

			<div class="form-group">
				<label class="col-form-label">Phone number</label>
				<input type="text" class="form-control" name="phoneNumber">
			</div>

			<div class="form-group">
				<label class="col-form-label">Email</label>
				<input type="email" class="form-control" name="email">
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
				<input type="number" class="form-control" min="1" max="31" name="DOBDay">
			</div>

			<div class="form-group">
				<label class="col-form-label">Year</label>
				<input type="number" class="form-control" min="1900" max="2020" name="DOBYear">
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
			<h2>Home insurance</h2>

			<div class="form-group">
				<label class="col-form-label">What type of home insurance do you need?</label>
				<br />

				<select name="homeType">
					<option>Homeowner</option>
					<option>Condo</option>
					<option>Tenant</option>
				</select>
			</div>

			<div class="form-group">
				<label class="col-form-label">Construction year</label>
				<input type="number" class="form-control" min="1900" max="2020" name="constructionYear">
			</div>

			<hr />
			<h2>Insurance history</h2>

			<div class="form-group">
				<label class="col-form-label">How many insurance claims have you made in the last 5 years?</label>
				<input type="number" class="form-control" min="0" max="500" name="claimsLast5Years">
			</div>

			<input class="btn btn-primary" type="submit" value="Submit">
		</form>
	</div>
</div>
