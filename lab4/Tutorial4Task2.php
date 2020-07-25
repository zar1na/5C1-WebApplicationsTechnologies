<!DOCTYPE html>
<html lang="en">
   <head>
      <title>Web Applications and Technologies</title>
      <link type="text/css" rel="stylesheet" href="Tutorial4Task2.css" />
   </head>
   <body>
      <header>
         <h1>Zarina Ali C3513534</h1> 
      </header>
      
      <section id="container">
         <h1>More Fundamentals of PHP</h1>
         <?php
         	echo '<h3>Arrays:</h3>';
         	echo '<h4>Simple Arrays:</h4>'; //Simple Arrays
         	$products = array('t-shirt', 'trousers', 'mug');
         	$prices = array('t-shirt' => 9.99, 'trousers' => 12.99, 'mug' => 6.99);
         	print_r($products);
         	echo '<br />';
         	$products[2]= 'skirt'; // overwrites an array value
         	print_r($products);
         	echo '<br />'; // br = breakvalue
         	$products = array('t-shirt', 'trousers', 'mug', 'sweater');
         	$prices = array('t-shirt' => 9.99, 'trousers' => 12.99, 'mug' => 6.99, 'sweater' => 15.99);
         	print_r($products);
         	echo '<br />';
         	print 'The item at index [2] is: '.$products[2];
         	echo '<br />';
         	print 'The item at index [3] is: '.$products[3];
         	echo '<br />';
         	echo '<h4>Associative Arrays:</h4>'; // Associative Arrays
         	$cust = array('CustID', 'CustName', 'CustAge', 'CustGender');
         	$customer = array('CustID' => 12, 'CustName' => 'Sarah', 'CustAge' => 23, 'CustGender' => 'F');
         	print_r($customer);
         	echo '<br />';
         	$cust = array('CustID', 'CustName', 'CustAge', 'CustGender', 'CustEmail');
         	$customer = array('CustID' => 12,'CustName' => 'Sarah', 'CustAge' => 23, 'CustGender' => 'F', 'CustEmail' => 'sarah@gmail.com');
         	print_r($customer);
         	echo '<br />';
         	echo 'Items in my customer array<br />';
         	print 'The item at index [CustomerName] is: '.$customer['CustName'];
         	echo '<br />';
         	print 'The item at index [CustEmail] is: '.$customer['CustEmail'];
         	echo '<br />';
         	echo '<h4>While Loops:</h4>'; // While Loops
         	$counter = 1;
         	while ($counter < 6) {
         	   echo 'Count = '.$counter.'<br />';
         	   $counter++;
         	}
         	echo '<br />';
         	$shirtprice = 9.99;
         	$counter = 1;
         	while ($counter <= 10) {
         	      $total = $counter * $shirtprice;
         	   echo $counter.' - '.$total.'<br />';
         	   $counter++;
         	}
         	echo '<br />';
         	echo '<h4>For and Foreach Loops:</h4>'; // For and Foreach Loops
         	echo '<h5>For Loop:</h5>';
         	$names = array('Sam', 'Daisy', 'Bella', 'Ethan', 'Jason');
         	for ($i = 0; $i < 6; $i++) {
             echo $names[$i] .'<br />';
         	}
         	echo '<h5>Foreach Loop:</h5>'; // FOREACH
            $names = array('Sam ID => c3518263', 'Daisy ID => c1736482',
                           'Bella ID = > c7263842', 'Ethan ID => c9284627',
                           'Jason ID => c8263548');
            foreach ($names as $value) {
            echo $value.'<br />';
            }
            
	      	?>
      </section>
      <footer>   
         <small> <a href="/wat2018/WatIndex.php">Home</a></small>
      </footer>
   </body>
</html>
