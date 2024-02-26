<?php
include("connection.php");
session_start();
$usersid = $_SESSION['editid'];

$fnameedit = $_POST['fnameedit'];
$lnameedit = $_POST['lnameedit'];
$emailedit = $_POST['emailedit'];
$customerNameedit = $_POST['customerNameedit'];
$FoodPriceedit = $_POST['FoodPriceedit'];
$MobileNumberedit = $_POST['MobileNumberedit'];


if(isset($fnameedit) && $fnameedit!=''){
    $sql = "UPDATE table1 SET FoodName='$fnameedit', Numberr='$lnameedit',CustomerName='$emailedit', FoodPrice='$customerNameedit', MobileNumber='$FoodPriceedit', email='$MobileNumberedit' WHERE id='$usersid'";

    if ($conn->query($sql) === TRUE) {
        header('Location: '.'show.php');

    } else {
        echo "Error updating record: " . $conn->error;
    }

$conn->close();
}
// $sql = "UPDATE table1 SET FoodName='$fname' WHERE id='$usersid'";

// if (mysqli_query($conn, $sql)) {
//   echo "Record updated successfully";
// } else {
//   echo "Error updating record: " . mysqli_error($conn);
// }

// mysqli_close($conn);
?>