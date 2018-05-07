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
	<title>Throwing the die</title>
</head>
<body>
<pre>
<?php

    $cpt1 = 0;
    $cpt2 = 0;
    $cpt3 = 0;
    $cpt4 = 0;
    $cpt5 = 0;
    $cpt6 = 0; // creation de compteur ( 1 par face )

    for($lance = 1; $lance <= 2000; $lance++){// on demande de tirer 2000 fois
        $de = mt_rand(1, 6);//dé prend une valeur entre 1 et 6
        switch($de){// agmente le cpt correspondant a la valeur de la face
            case 1 : $cpt1++; break;
            case 2 : $cpt2++; break;
            case 3 : $cpt3++; break;
            case 4 : $cpt4++; break;
            case 5 : $cpt5++; break;
            case 6 : $cpt6++; break;
            default : break;


        }
    }



        /*echo "$cpt1</br>";
        echo "$cpt2</br>";
        echo "$cpt3</br>";
        echo "$cpt4</br>";
        echo "$cpt5</br>";
        echo "$cpt6</br>";*/



    echo"<img src =\"Die_images/die1.jpg\" alt = \"image inexistante\"/> lancé $cpt1 fois</br>";
    echo"<img src =\"Die_images/die2.jpg\" alt = \"image inexistante\"/> lancé $cpt2 fois</br>";
    echo"<img src =\"Die_images/die3.jpg\" alt = \"image inexistante\"/> lancé $cpt3 fois</br>";
    echo"<img src =\"Die_images/die4.jpg\" alt = \"image inexistante\"/> lancé $cpt4 fois</br>";
    echo"<img src =\"Die_images/die5.jpg\" alt = \"image inexistante\"/> lancé $cpt5 fois</br>";
    echo"<img src =\"Die_images/die6.jpg\" alt = \"image inexistante\"/> lancé $cpt6 fois</br>";




?>
</pre>
</body>
</html>
