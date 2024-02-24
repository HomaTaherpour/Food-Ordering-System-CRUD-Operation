<?php
include('connection.php');
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$customerName = $_POST['customerName'];
$FoodPrice = $_POST['FoodPrice'];
$MobileNumber = $_POST['MobileNumber'];

if(isset($fname) && $fname!=''){
  $sql = "INSERT INTO table1 (FoodName, Numberr, CustomerName, FoodPrice, MobileNumber, email)
  VALUES ('$fname', '$lname', '$email', '$customerName', '$FoodPrice', '$MobileNumber')";

  if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }

  mysqli_close($conn);
  header('Location: '.'show.php');

}

// Create database
#$sql = "CREATE DATABASE crud";
#if (mysqli_query($conn, $sql)) {
#  echo "Database created successfully";
#} else {
#  echo "Error creating database: " . mysqli_error($conn);
#}

// sql to create table
// $sql = "CREATE TABLE table1 (
//     id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
//     FoodName VARCHAR(30) NOT NULL,
//     Numberr VARCHAR(30) NOT NULL,
//     CustomerName VARCHAR(30) NOT NULL,
//     FoodPrice VARCHAR(30) NOT NULL,
//     MobileNumber VARCHAR(30) NOT NULL,
//     email VARCHAR(50),
//     reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
//     )";
    
//     if (mysqli_query($conn, $sql)) {
//       echo "Table table1 created successfully";
//     } else {
//       echo "Error creating table: " . mysqli_error($conn);
//     }
    
//     mysqli_close($conn);



?>