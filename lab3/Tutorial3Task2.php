<!DOCTYPE html>
<html lang="en">
	<head>
		<link href="Tutorial2Task2.css" rel="stylesheet" type="text/css" />
	</head>
	<body>
		<section id="container">
			<?php
			echo '<h2>PHP Fundamentals</h2>';
			echo 'Zarina Ali';
			echo '<br />';
			echo 'C351534';
			echo '<br />';
			echo '<h3>Variables and Arithmetic Operators</h3>';
			echo '<h4>Variables</h4>';
			$name ='David';
			$age =12;
			echo 'Hello my name is '.$name;
			echo ' and my age is '.$age;
			echo '<br />';
			echo 'Mi nombre es David y tengo 12 anos de edad';
			echo '<h4>Functions</h4>';
			//gettype()returns..
			echo gettype($name); // shows what the type is declared as
			echo '<br />';
			//strlen() returns..
			echo strlen($name); // shows number of characters
			echo '<br />';
			//strtoUpper()returns..
			echo strtoUpper($name); // shows name capitalized
			echo '<h4>Arithmetic</h4>';
			$number1 = 9;
			$number2 = 12;
			echo 'num1 = '.$number1;
			echo '<br />';
			echo 'num2 = '.$number2;
			echo '<br />';
			$result = $number1 * $number2;
			echo 'num1 x num2 = '.$result;
			echo '<br />';
			$percentage = ($number1 / $number2) * 100;
			echo 'num1 as a percentage of num2 = '.$percentage.'%';
			echo '<br />';
			$result = number_format($number2/$number1,2);
			echo 'num2 divided by num1 = '.$result;
			
			//missed chunk-  box
			
			echo '<h4>Selection</h4>';
			$day = date('l'); //l represents day name in full, D is similar however only outputs three letters
			echo 'it\'s '.$day;
			echo '<br />';
			$day = date('z'); //z represents the day of the year
			echo 'it\'s day '.$day.' out of 365';
			echo '<br />';
			$time =19;
			if($time < 12 ){
        	echo 'Good Morning';
			} elseif($time>=12  && $time<=18){
    		echo 'Good Afternoon';
    		} else{ // brackets to close statement before another
        	echo 'Good Night';
    		}
    		echo '<br />';
    		$password = 'Sar';
			if(strlen($password)>=4  && strlen($password)<=10){
    		echo 'Password length is valid';
    		} else{
        	echo 'Password length is invalid';
    		}
    		echo '<br />';
			
			?>
			
		</section>
	</body>
</html>