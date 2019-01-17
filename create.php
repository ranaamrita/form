<?php include('header.php') ?>
<div class="container">
	<div class="row">
		<div class="col-md-8">
			<form action="createControl.php" method="POST">
				<h3>REGISTRATION FORM</h3>
				<label>First Name</label>
				<input type="text" name="firstname" placeholder="First Name" class="form-control"><br>
                <label>Last Name</label>
				<input type="text" name="lastname" placeholder="Last Name" class="form-control"><br>
				<label>Email*</label>
				<input type="email" name="email" placeholder="Email" class="form-control"><br>
				<label>Password</label>
				<input type="text" name="password" placeholder="Password" class="form-control"><br>
				<label>Confirm Password*</label>
				<input type="text" name="cpassword" placeholder="ConfirmPassword" class="form-control"><br>
				<label>Date of Birth*</label>
				<input type="Date" name="dob" placeholder="mm/dd/yyyy" class="form-control"><br>
				<label>Phone number</label>
				<input type="text" name="phone" placeholder="Phone number" class="form-control"><br>
				<label>Height*</label>
				<input type="text" name="height" placeholder="Please write your height in centimetres" class="form-control"><br>
				<label>Weight*</label>
				<input type="text" name="weight" placeholder="Please write your weight in kilograms" class="form-control"><br>
				<label>Gender: </label>
			     <label>
			     	<input type="radio" name="gender" value="female">female
			     	<input type="radio" name="gender" value="male">male
			     	<input type="radio" name="gender" value="other">other
			     </label><br>
				<button type="submit">Registered</button>
			</form>
		</div>
		
	</div>
	
</div>
<?php include('footer.php') ?>