<?php error_reporting(E_ALL);?>
<html>
    <head>
        
    </head>
    <body>
        <h1>Processing Input from HTML Forms</h1>
<h2>Login Form using GET</h2>
<form method="post" action="">
<fieldset>
		<legend>
			Login
		</legend>
		<label for="email">Email: </label>
		<input type="text" name="txtEmail"/><br />
		<label for="passwd">Password: </label>
		<input type="password" name="txtPass" /><br />
		<input type="submit" value="Submit" name="loginSubmit"  />
		<input type="reset" value="Clear" />
	</fieldset>
</form>
<?php
if (isset($_POST['txtEmail'])){
    $email=$_POST['txtEmail'];
    echo $email.'<br>';
}
else{
    echo 'Error: No email stored'.'<br>';
}

if (isset($_POST['txtPass'])){
    $pass=$_POST['txtPass'];
    echo $pass.'<br>';
}
else {
    echo 'Error: No password stored'.'<br>';
}
?>

<form method="post" action="">
	<fieldset>
		<legend>Comments</legend>
		<label for="email">Email: </label>
		<input type="text" name="txtEmail" value="" /><br />
		<textarea rows="4" cols="50" name="comment">Comment</textarea><br />
		<label for="">Click to Confirm: </label>
		<input type="checkbox" name="buttonconfirm" value="agree"><br />
		<input type="submit" value="Submit" name="submit"/>
		<input type="reset" value="Clear" />
	</fieldset>
</form>
<?php
if (isset($_POST['submit'])){
    if(!empty($email1=$_POST['txtEmail1'])){
        if (filter_var($email1, FILTER_VALIDATE_EMAIL)){
            echo 'Email: '.$email1.'<br>';
        }
        else{
            echo 'Email is not valid'.'<br>';
        }
    }
    }
    
    if (isset($_POST['submit'])){
        if(!empty($comment=$_POST['comment'])){
            echo 'Comment: '.$comment.'<br>';
        }
        else{
            echo 'Comment must not be empty';
        }
        
        if (isset($_POST['buttonconfirm'])){
            $confirm='Agreed<br />';
            echo 'Confirm: '.$confirm;
        }
        else{
            $confirm='Not Agreed<br />';
            echo 'Confirm: '.$confirm;
        }
    }
        ?>

    </body>
</html>