<!DOCTYPE html>
<html>
	<head>
		<link type="text/css" rel="stylesheet" href="main.css"/>
		<title>Tutorial 6- lab work</title>
	</head>
	<body>
		<form method="POST" action="insertRecord.php">
        <fieldset>
        	<legend>
        		Enter Customer Details
        	</legend>
        	<label for="firstname">First Name: </label>
        	<input type="text" name="txtFN"/><br />
        	<label for="lastname">Last Name: </label>
        	<input type="text" name="txtLN" /><br />
        	<label for="email">Email: </label>
        	<input type="text" name="txtEmail" /><br />
        	<label for="password">Password: </label>
        	<input type="password" name="txtPass" /><br />
        	<label for="gender">Gender: </label>
        	<select class="form-control" input type="text" name="txtGender" /><br />
              <option>Male</option>
              <option>Female</option>
            </select><br />
            <label for="age">Age: </label>
        	<input type="text" name="txtAge" /><br />
        	<input type="submit" value="Submit" name="subUser" /><br />
        </fieldset>
        </form>
		<?php
		    //include select
		    include 'select.php';
		?>

	</body>
</html>