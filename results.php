<?php
  
	// get the three messurements from the textfields
	$farenheit = $_POST['farenheit'];

	// calculate the pay
  $temputure = (5.0 / 9.0) * ($farenheit - 32);;
?>
<?php echo "<h3>Results:</h3>
  The temputure in celcius is " . round($temputure, 2) . "<sup>°</sup>."
?>