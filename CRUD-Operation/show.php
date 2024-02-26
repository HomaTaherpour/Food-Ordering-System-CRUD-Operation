<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Your Food</title>
</head>
<body>
<?php
include("connection.php");
include("navbar.php"); 
$sql = "SELECT id, FoodName, Numberr, CustomerName, FoodPrice, MobileNumber, email FROM table1";
$result = mysqli_query($conn, $sql);



?>

<table class="table table-dark table-striped">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Food Name</th>
      <th scope="col">Number</th>
      <th scope="col">Mobile Number</th>
      <th scope="col">Email</th>
      <th scope="col">Customer Name</th>
      <th scope="col">Food Price</th>
      <th scope="col"> Edit/Delete </th>
    </tr>
  </thead>
  <tbody>
      <?php
      if (mysqli_num_rows($result) > 0) {
        // output data of each row
        while($row = mysqli_fetch_assoc($result)) {
      
      ?>
    <tr>
      <th scope="row"><?php echo $row["id"]?></th>
      <td><?php echo $row["FoodName"]?></td>
      <td><?php echo $row["Numberr"]?></td>
      <td><?php echo $row["email"]?></td>
      <td><?php echo $row["CustomerName"]?></td>
      <td><?php echo $row["FoodPrice"]?></td>
      <td><?php echo $row["MobileNumber"]?></td>

      <td><div class="btn-group" role="group" aria-label="Basic mixed styles example">
  <button type="button" class="btn btn-warning"><a target="_blank" href="update.php?id=<?php echo $row["id"]?>">Edit</button>
  <button type="button" class="btn btn-danger"  Onclick="return confirm('Are you sure that you wanna delete the data?')";><a target="_blank" href="delete.php?id=<?php echo $row["id"]?>">Delete</button>
    <?php 
    }
} else {
  echo "<div class='alert alert-danger' role='alert'>
        There is no data!
        </div>";
}

mysqli_close($conn);
    
    ?>

  </tbody>
</table>
    

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>