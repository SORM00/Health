<!DOCTYPE html>
<html lang="en">
<head>
	<title>Appointment Form</title>
	
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<link rel="stylesheet" href="css/font-awesome.css">
	<link rel="stylesheet" href="css/style1.css">
	<style>

button
{
	background:transparent;
	border:none;
outline: none;
color: #fff;
background:#03a9f4;
padding: 10px 20px;
cursor: pointer;
border-radius: 5px;
}
	</style>
	</head>
<body>
	<div class="banner">
	<div class="heading">
		<h1>Appoint My Doctor</h1>
	</div>
		<div class="container">
			<div class="heading">
				<h2>Please Enter Patients Details</h2>
				<p>Fill the form below and submit your query we will contact you as soon as possible.</p>
			</div>
			<div class="agile-form">
				<form action="appoint_store.php" method="POST">          
					<ul class="field-list">
						<li>
							<label class="form-label"> 
								Full Name 
								<span class="form-required"> * </span>
							</label>
							<div class="form-input">
								<input type="text" name="name" placeholder="Enter Patients Name" required >
							</div>
						</li>
						<li>
							<label class="form-label">
							   Gender
							   <span class="form-required"> * </span>
							</label>
							<div class="form-input">
								<select class="form-dropdown" name="gender" required>
									<option value="">&nbsp;</option>
									<option value="Male"> Male </option>
									<option value="Female"> Female </option>
									<option value="Transgender"> Transgender </option>
								</select>
							</div>
						<li>
						<li> 
							<label class="form-label">
							   Mobile Number
							   <span class="form-required"> * </span>
							</label>
							<div class="form-input">
								<input type="text" name="mobile_number" placeholder="Mobile Number" required >
							</div>
						</li>
						<li> 
							<label class="form-label">
							   Address
							   <span class="form-required"> * </span>
							</label>
							<div class="form-input add">
								<span class="form-sub-label">
									<input type="text" name="street_address" placeholder=" " required>
									<label class="form-sub-label1"> Street Address </label>
								</span>
								<span class="form-sub-label">
									<input type="text" name="street_address2" placeholder=" ">
									<label class="form-sub-label1"> Line 2 </label>
								</span>
								<span class="form-sub-label">
									<input type="text" name="city" placeholder=" " required>
									<label class="form-sub-label1"> City </label>
								</span>
								<span class="form-sub-label">
									<input type="text" name="state" placeholder=" " required>
									<label class="form-sub-label1"> State</label>
								</span>
								<span class="form-sub-label">
									<input type="text" name="zipcode" placeholder=" " required>
									<label class="form-sub-label1"> Postal / Zip Code </label>
								</span>
								<span class="form-sub-label">
									<input type="text" name="country" placeholder=" " required>
									<label class="form-sub-label1"> Country </label>
								</span>
							</div>
						</li>
						<li> 
							<label class="form-label">
							   E-Mail Address
							   <span class="form-required"> * </span>
							</label>
							<div class="form-input">
								<input type="email" name="email" placeholder="myname@example.com" required>
							
							</div>
						</li>
						<li> 
							<label class="form-label1">
								Mention the details of previous consultings with us.
							</label>
							<div class="form-input2">
								<textarea rows="5" cols="20" name="textarea"></textarea>
							
							</div>
						</li>
						<li class="last-type"> 
							<label class="form-label1">
								Select which time slot of appointment suits you.
								<span class="form-required"> * </span>
							</label>
							<div class="form-input2">
								<input type="radio" name="test" ><label class="type-of-test">10AM</label>
								<input type="radio" name="test" ><label class="type-of-test">12PM</label>
								<input type="radio" name="test" ><label class="type-of-test">3PM</label>
								<input type="radio" name="test" ><label class="type-of-test">5PM</label>
								<input type="radio" name="test" ><label class="type-of-test">7PM</label>
								<input type="radio" name="test" ><label class="type-of-test">9PM</label>
							</div>
						</li>
					</ul>
					<center><button type="button" onclick="window.location.href='appoint_store.php'">Book Appointment</button></center>
				</form>	
			</div>
		</div>
	</div>
</body>
</html>