<!DOCTYPE html>
<html lang="en-ca">
  <head>
    <!-- Metadata -->
    <meta charset="utf-8">
    <meta name="description" content="My first webpage with user input">
    <meta name="keywords" content="immaculata, ics2o">
    <meta name="author" content="Ms Raffin">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Code for the favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="./fav_index/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="./fav_index/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./fav_index/favicon-16x16.png">
    <link rel="manifest" href="./fav_index/site.webmanifest">
    <!-- Link to CSS file -->
    <link rel="stylesheet" href="./css/style.css">
    <!-- Title -->
    <title>Guess My Number</title>
  </head>
  <body>
		<!-- php echo to print the html to the page -->
    <?php 
			echo "<h1>Guess My Number</h1>";
			echo "<h3>Please enter your a Numbher in Between 1 and 6</h3>";
		?>
		 <!--- A side --->
      <form action="./results.php" method="post" target="results">
        <label for="userGuess"> Please entre the Number you Guess</label>
        <input type="number" id="user-guess" placeholder="Ex. 3" step="1" min="1" max="6" name="userGuess"><br><br>
        <input type="submit" value="calculate">
      </form>
			<!-- iframe for the results to show on the web page. -->
			<iframe id="results" name="results">			
				The temputure in celcius is" + $$temputure.tofixed(2) + (<sup>°</sup>)
	    </iframe>
    <centre>
    <img src="./images/sphere.png" width="300" height="300">
    </centre>
	</body>
</html>