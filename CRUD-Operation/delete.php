<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Data data from user</title>
</head>
<body>
<?php 
include("navbar.php");
include("connection.php");
$usersid = $_GET['id'];

// sql to delete a record
$sql = "DELETE FROM table1 WHERE id='$usersid'";

if (mysqli_query($conn, $sql)) {
  echo "<div class='alert alert-primary' role='alert'>
        Order '$usersid' deleted successfully :)
        </div>";
} else {
  echo "Error deleting record: " . mysqli_error($conn);
}

mysqli_close($conn);
?>


</body>
</html>
