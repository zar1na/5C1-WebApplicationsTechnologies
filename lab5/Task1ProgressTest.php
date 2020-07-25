<!DOCTYPE html>
<html>
	<head><title>WAT Week 5 Progress Check</title></head>
	<body>
		<h1>WAT Week 5 Progress Check</h1>
		<h1>Generate Statements</h1>
		<?php
		//produce code that will display your name and ID on separate lines
		echo 'Zarina Ali';
		echo '<br />';
		echo 'C3513534';
		echo '<br />';
		
		//produce code to output the string "It's not more than £3" including all
		//speech marks.
		print "It's not more than &pound;3";
		echo '<br />';
		
		?>
		<h1>Use Arithmetic Operators </h1>
		<?php
		/*Calculate annual interest paid for a loan.  Declare two variables one to 
		*hold the value of loan and one the interest rate.  Set these to 500 and 3.5
		*respectively.  Calculate the annual interest payable based on the formula
		*interest paid = (loan amount / 100) x rate of interest
		*Display the following statement using your variables:
		* Loan: 500
		* Rate: 3.5%
		* Payable: £17.50
		*/
		$loan = 500;
		echo 'Loan: '.$loan;
		echo '<br />';
		$interestrate = 3.5;
		echo 'Rate: '.$interestrate.'%';
		echo '<br />';
		$annualinterest = ($loan / 100) * $interestrate;
		echo 'Payable: '.$annualinterest;
		echo '<br />';
		?>
		<h1>Use Conditional Statements</h1>
		<?php
		/*Declare variables to hold username and password, assign the values
		 * "user01" and "pass".  Write code that will test the value
		 * of your two variables and display the word "success" if
		 * user is "user01" and password is "passwd", or "fail" if not.
		 */
		$user ='user01';
		$pass ='passwd';
		if ($user = 'user01' && $pass = 'passwd'){
		    echo 'Success';
		}
		else {
		    echo 'Fail';
		}
		
		/*Use the same variables but this time write code to first test if
		 * the password is at least 6 characters in length, if not
		 * display a message "Please use at least 6 characters", if this test 
		 * is passed then test as before. 
		 */
		 if (strlen $pass > 6) {
		     echo 'Password longer than 6';
		     
		 }
       
		?>
	</body>
</html>
