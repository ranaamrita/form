<!DOCTYPE html>
<html>
<head>
	<title>static demo</title>
</head>
<body>
<?php
class Car {
	function Car(){
	$this->model ="VW";
 }
}
//create an object
$herbie = new Car();
//show object properties
echo $herbie->model;
echo "<br>";
?>
<?php
	define("GREETING","Welcome to W3Schools.com!");
	echo GREETING;
	echo"<br>";
?>


<?php
$week="";
switch ($week) {
		case "Sunday":
			echo "Today is sunday!";
			break;
		case "Monday":
			echo "Today is Monday!!";
			break;
		case "Tuesday":
			echo "Today is Tuesday!!";
			break;
		case "Wednesday":
			echo "Today is Wednesday!";
			break;
		case "Thursday":
			echo "Today is Thursday!!";
			break;
		case "Friday":
			echo "Today is Friday!!";
			break;
		case "Saturday":
			echo"Today is Saturday";
			break;
		default:
			echo "Today is holiday";
			echo "<br>";

}
?>

<?php

			$t = date("20");
			echo "<p> The hour(of the sever) is".$t;
			echo ",and will give the following message:</p>";
			if($t< "10"){
			  echo "Have a good day!!";
		}	elseif ($t<="20"){

			echo ("Have a good morning");
		}else{
			echo "Have a good night!!";
		}
?>

<?php
  $number =20 ;
  echo "<p>The number is".$number;
  	if ($number==0)
  	{
  	echo "It's not even or odd";
  	}elseif ($number %2 !==0){
		 echo("It's odd!");
			}else{
			echo "It is even!!";
		}

?>

<?php
	  function isprime($n)
	  {
	  	for($x=2;$x<$n;$x++)
	  }
	  if($n %$x ==0)
	{
		return 0;
	}
	return 1;
	$a =isprime(3);
	if($a==0)
	echo 'This is not a prime number'."\n";
	else
	echo 'This is a prime number'."\n";
?>
</body>
</html>