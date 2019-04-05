<?php 

$servername = "192.168.64.2";
$username = "root";
$password = "";
$database = "webshop01";
$table = "customers";  
 
$customer_firstname= $_POST['customer_firstname']; 
$customer_lastname= $_POST['customer_lastname']; 
$customer_email= $_POST['customer_email']; 
  
  
// Connection naar DATABASE 
$db_connection= mysqli_connect($servername,$username,$password,$database)  
or die("Unable to select database"); 
 
 
$query= "INSERT INTO customers (customer_firstname, customer_lastname, customer_email) VALUES ('$customer_firstname', '$customer_lastname', '$customer_email')"; 
 
mysqli_query ($db_connection, $query) 
or die ("Error querying database"); 
 
echo "You have been added succesfully"."<script>window.open('../index.php','_self')</script>"; 
 
mysqli_close($db_connection); 
 
?> 
 