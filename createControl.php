<?php
	$servername = "localhost";
	$username = "amrita";
	$password = "amrit";
	$dbname = "merosathi";
	$conn = new mysqli($servername,$username,$password,$dbname);
	if ($conn->connect_error) {
		die("Connection Problem:" .$conn->connect_error);
	}

	else
	{
		if ($_SERVER["REQUEST_METHOD"] == "POST") {
			$Firstname=$_POST["firstname"];
			$Lastname=$_POST["lastname"];
			$Email=$_POST["email"];
			$Password=$_POST["password"];
			$Confirm_Password=$_POST["cpassword"];
			$Date_of_Birth=$_POST["dob"];
			$Phone_number=$_POST["phone"];
			$Height=$_POST["height"];
			$Weight=$_POST["weight"];
			$Gender=$_POST["gender"];
			print_r($Gender);
			$sql = "INSERT INTO registration(firstname,lastname,email,password,cpassword,dob,phone,height,weight,gender) VALUES('".$Firstname."','".$Lastname."','".$Email."','".$Password."','".$Confirm_Password."','".$Date_of_Birth."','".$Phone_number."','".$Height."','".$Weight."','".$Gender."')";
			if ($conn->query($sql) === TRUE)
			 {
				echo "<h2> Registration is successful!!!</h2>";
			}else
			{
				echo "Error:" .$sql."<br>" . $conn->error;
			}
		}
	}
	$conn->close();
?>