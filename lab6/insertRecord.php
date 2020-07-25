<?php
//Make connection to database
include 'connection.php';
//(a)Gather from $_POST[]all the data submitted and store in variables
        if(isset($_POST['subUser'])){
            $firstname=$_POST['txtFN'];
            $lastname=$_POST['txtLN'];
            $email=$_POST['txtEmail'];
            $pass=$_POST['txtPass'];
            $gender=$_POST['txtGender'];
            $age=$_POST['txtAge'];

//(b)Construct INSERT query using variables holding data gathered
        $query="
        INSERT INTO Customer
        (FirstName, LastName, Email, Password, Gender, Age)
        VALUES
        ('$firstname', '$lastname', '$email', '$pass', '$gender', '$age')
            ";

//Temporarily echo $query for debugging purposes	
        echo $query;
            exit();
            
//run $query
        mysqli_query($connection, $query);
}
?>