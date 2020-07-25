<?php
//turn on all errors
error_reporting(E_ALL);
//turn off error reporting
//error_reporting(0);
?>
<!DOCTYPE html>
<html>
	<head>
		<link type="text/css" rel="stylesheet" href="main.css"/>
		<title>WAT Week 4</title>
	</head>
	<body>
		<h1>Here is a form</h1>
		<!-- complete form by adding method, action and names-->
		<form method="post" action="">
		    <label>Username:</label>
			<input type="text" name="txtUser" value="" /><br />
			<label>Email:</label>
			<input type="text" name="txtEmail" value="<?php
			if(isset($_POST['txtEmail'])){
			    echo $_POST['txtEmail'];
			}
			?>" /><br />
			<label>List:</label>
			<select name="selThings">
				<option value="Please select" >Please select</option>
				<option value="this">This</option>
				<option value="that">That</option>
				<option value="those">Those</option>
				<option value="them">Them</option>
			</select><br />

			<input type="submit" value="Submit" name="subForm"/>
			
		</form>
		<?php
		//simple collect data and echo back
        if(isset($_POST['subForm'])){
            if(empty($_POST['txtEmail'])){
                echo 'Please enter an email';
            }else{
                if(empty($_POST['txtUser'])){
                    echo 'Please enter a username';
                }else{
                    $email=$_POST['txtEmail'];
                    if(filter_var($email,FILTER_VALIDATE_EMAIL)){
                        $user=trim($_POST['txtUser']);
                        $user=filter_var($user,FILTER_SANITIZE_STRING);
                        $thing=$_POST['selThings'];
                        echo 'Inputs:<pre>'.$email.' '.$user.' '.$thing.'</pre>';
                    }else{
                        echo 'Please enter a valid email';
                    }
                    
                }
                
            }
            
        }
        
    
         /* Has form been submitted?
         * save and clean
		 * Is username empty or email empty?
 		 * No .. then is it a valid email?
 		 * Can data persist
 		 */
        ?>
		
		<!-- append data to url and pass to display.php-->
        <p><a href="display.php?name=paul&id=12345">Say</a></p>
		
		
	</body>
</html>
<?php
        if($_POST['subForm']){
            if(empty($_POST['txtEmail'])){
                echo 'Please enter an email';
            }else{
                if(empty($_POST['txtUser'])){
                    echo 'Please enter a username';
                }else{
                    $email=$_POST['txtEmail'];
                    if(filter_var($email,FILTER_VALIDATE_EMAIL)){
                        $user=trim($_POST['txtUser']);
                        $user=filter_var($user,FILTER_SANITIZE_STRING);
                        $thing=$_POST['selThings'];
                        echo 'Inputs:<pre>'.$email.' '.$user.' '.$thing.'</pre>';
                    }else{
                        echo 'Please enter a valid email';
                    }
                    
                }
                
            }
            
        }
        
       
        
        
        ?>
