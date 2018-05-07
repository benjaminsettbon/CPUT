<!doctype html>
<?php
  /*Name: Settbon
	Surname: Benjamin
	Student#: 218327862
	Title of Project
	Declaration: This is my own work and 
	  any code obtained from other sources
	  will be referenced
*/  
	?>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Your Title</title>
</head>
<body>
<pre>
<?php
$ProvincialCapitals = array(
    "Newfoundland and Labrador" => "St. John's",
    "Prince Edward Island" => "Charlottetown",
    "Nova Scotia" => "Halifax",
    "New Brunswick" => "Fredericton",
    "Quebec" => "Quebec City",
    "Ontario" => "Toronto",
    "Manitoba" => "Winnipeg",
    "Saskatchewan" => "Regina",
    "Alberta"=>"Edmonton",
    "British Columbia" => "Victoria");

    $pers_data = array("abc@abc.com", "2345fsgh", "ben@efrei.net", "P@55w0rd");
    echo "<pre>";
        echo"pers_data \n";
        print_r($pers_data);

        echo "Provicial Capitals \n";
        print_r($ProvincialCapitals);
        echo "<pre>";


foreach ($ProvincialCapitals as $Prov => $Capital) {
    echo "The capital of " . $Prov. " is $Capital<br />\n";
}
?>
</pre>
</body>
</html>