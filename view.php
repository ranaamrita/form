
<?php include('header.php') ?>

<?php

   $servername = "localhost";
   $username = "amrita";
   $password = "amrit";
   $dbname ="merosathi";


   $conn = new mysqli($servername, $username, $password, $dbname);

   if($conn->connect_error) {

   		die("Connection Problem:".$conn->connect_error);
   }

   $sql = "SELECT *FROM Registration";
   $result = $conn->query($sql);
?>



    <div class="container">
    	<div class="row">
    		<div class="col-md-12">
    			<table class="table">
    				<thead class=" thead-dark">
    					<th>ID</th>
    					<th>Firstname</th>
    					<th>Lastname</th>
    					<th>Email</th>
    					<th>Password</th>
    					<th>Conform password</th>
    					<th>Date of Birth</th>
    					<th>Phone number</th>
    					<th>Height</th>
    					<th>Weight</th>
    					<th>Gender</th>
    				</thead>
    				<tbody>
    					<?php
	    					if ($result->num_rows > 0) {
	    						while ($row = $result->fetch_assoc()) {
	    							echo "<tr>";
	    							  echo "<td>" .$row["id"]."</td>";
	    							  echo "<td>" .$row["firstname"]."</td>";
	    							  echo "<td>" .$row["lastname"]."</td>";
	    							  echo "<td>" .$row["email"]."</td>";
	    							  echo "<td>" .$row["password"]."</td>";
	    							  echo "<td>" .$row["cpassword"]."</td>";
	    							  echo "<td>" .$row["dob"]."</td>";
	    							  echo "<td>" .$row["phone"]."</td>";
	    							  echo "<td>" .$row["height"]."</td>";
	    							  echo "<td>" .$row["weight"]."</td>";
	    							  echo "<td>" .$row["gender"]."</td>";
	    							 echo "</tr>"; 
	    						}
	    					}
    				    ?>	
    				</tbody>
    			</table>
    			
    		</div>
    		
    	</div>
    	
    </div>
<?php include('footer.php') ?>   