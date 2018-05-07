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
function DisplayResult($Nb)
{
    $cpt1 = $cpt2 = $cpt3 = $cpt4 = $cpt5 = $cpt6 = 0;
    for ($x = 0; $x < $Nb; $x++) {
        $die = mt_rand(1, 6);
        switch ($die) {
            case 1:
                $cpt1++;
                break;
            case 2:
                $cpt2++;
                break;
            case 3:
                $cpt3++;
                break;
            case 4:
                $cpt4++;
                break;
            case 5:
                $cpt5++;
                break;
            case 6:
                $cpt6++;
                break;
        }
    }
    echo "<img src =\"Die_images/die1.jpg\" alt = \"image inexistante\"/> lancé $cpt1 fois</br>";
    echo "<img src =\"Die_images/die2.jpg\" alt = \"image inexistante\"/> lancé $cpt2 fois</br>";
    echo "<img src =\"Die_images/die3.jpg\" alt = \"image inexistante\"/> lancé $cpt3 fois</br>";
    echo "<img src =\"Die_images/die4.jpg\" alt = \"image inexistante\"/> lancé $cpt4 fois</br>";
    echo "<img src =\"Die_images/die5.jpg\" alt = \"image inexistante\"/> lancé $cpt5 fois</br>";
    echo "<img src =\"Die_images/die6.jpg\" alt = \"image inexistante\"/> lancé $cpt6 fois</br>";

}
?>
</pre>
</body>
</html>