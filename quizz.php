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
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
	<meta charset="utf-8">
	<title>quizz</title>
    <h1>quizz on south africa provinces</h1>
</head>
<body>
<pre>
    <?php
    function form(){
        ?><h2>enter your answer<h2>
            <form name = "quizz" action = "" method="get" ><br>
                1 : What is the population of Eastern Cape : <input type="text" name="question[Eastern Cape]" required ></br>
                2 : What is the population of Free State : <input type="text" name="question[Free State]" required ></br>
                3 : What is the population of Gauteng : <input type="text" name="question[Gauteng]" required ></br>
                4 : What is the population of KwaZulu Natal : <input type="text" name="question[KwaZulu Natal]" required ></br>
                5 : What is the population of Limpopo : <input type="text" name="question[Limpopo]" required ></br>
                6 : What is the population of Mpumalanga : <input type="text" name="question[Mpumalanga]" required ></br>
                7 : What is the population of Northern Cape : <input type="text" name="question[Northern Cape]" required ></br>
                8 : What is the population of North West : <input type="text" name="question[North West]" required ></br>
                9 : What is the population of Western Cape : <input type="text" name="question[Western Cape]" required ></br>

                <input type="submit" name="submit">

            </form>
            <?php
    }
            $Provinces = array(
                'Eastern Cape'=> 6.56,
                'Free State'=> 2.74,
                'Gauteng'=> 12.27,
                'KwaZulu Natal'=> 10.27,
                'Limpopo'=> 5.4,
                'Mpumalanga'=> 4.04,
                'Northern Cape'=> 1.15,
                'North West'=> 3.5,
                'Western Cape'=> 5.82);
            $cpt = 0;

            if(isset($_GET['submit']))
            {
                $answer = $_GET['question'];
                foreach($Provinces as $town => $Population)
                {
                    if($Population == $answer[$town])
                    {
                        $cpt++;
                    }

                }
                echo "vous avez $cpt points";
            }
            else
            {
                form();
            }

            ?>

</pre>
</body>
</html>