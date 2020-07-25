<?php
//Make connection to database
include 'connection.php';

//Display heading
echo '<h2>Select ALL from the Customer Table</h2>';

//run query to select all records from customer table
$query="SELECT * FROM Customer";

//store the result of the query in a variable called $result
$result=mysqli_query($connection, $query);

//Use a while loop to iterate through your $result array and display
//the first name, last name and email for each record
while ($row=mysqli_fetch_assoc($result)){
echo $row['FirstName'].' '.$row['LastName'].' '.$row['Email'].'<br />';
}

//Display heading
echo '<h2>Select ALL from the Customer Table with age > 22</h2>';
$query1="SELECT * FROM Customer
        WHERE Age > 22";
// $result1 = result for $query1
$result1=mysqli_query($connection, $query1);

// while loop to display $result2 array
while ($row=mysqli_fetch_assoc($result1)){
    echo $row['FirstName']. ' '.$row['LastName']. ' '.$row['Email'].'<br />';
}

echo '<h2>Select ALL females from the Customer Table with age > 22</h2>';
$query2="SELECT * FROM Customer
        WHERE Gender = 'F'
        AND Age >= 22";
        
// $result2 = result for $query2
$result2=mysqli_query($connection, $query2);

// while loop to display $result1 array
while ($row=mysqli_fetch_assoc($result2)){
    echo $row['FirstName']. ' '.$row['LastName']. ' '.$row['Email'].'<br />';
}

echo '<h2>Select ALL males from the Customer Table list by age descending</h2>';
$query3="SELECT * FROM Customer
        WHERE Gender = 'M'
        ORDER BY Age DESC";
// $result3 = result for $query3
$result3=mysqli_query($connection, $query3);

// while loop to display $result3 array
while ($row=mysqli_fetch_assoc($result3)){
    echo $row['FirstName']. ' '.$row['LastName']. ' '.$row['Email'].'<br />';
}

echo '<h2>Select ALL with "a" in the first name</h2>';
$query4="SELECT * FROM Customer
        WHERE FirstName like '%a%'";
// $result4 = result for $query4
$result4=mysqli_query($connection, $query4);

// while loop to display $result4 array
while ($row=mysqli_fetch_assoc($result4)){
    echo $row['FirstName']. ' '.$row['LastName']. ' '.$row['Email'].'<br />';
}

?>
