<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Edit data from user</title>
</head>
<body>

<?php
include("navbar.php");
include("connection.php");
//include("updatefunc.php");

$usersid = $_GET['id'];
$_SESSION['editid'] = $usersid;

?>


<body>
    <h1>Edit data Of The table</h1>
    <form class="container" action="updatefunc.php" method="post">
  <div class="mb-3">
    <label for="exampleInputEmail" class="form-label">set First Name</label>
    <input type="text" class="form-control" id="exampleInputEmail" aria-describedby="emailHelp" name='fnameedit'>
    <div id="emailHelp" class="form-text">hehe</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">set Last Name</label>
    <input type="text" class="form-control" id="exampleInputPassword1" name='lnameedit'>
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">set Email</label>
    <input type="email" class="form-control" id="exampleInputEmail1" name='emailedit'>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">set Customer Name</label>
    <input type="text" class="form-control" id="exampleInputPassword1" name='customerNameedit'>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">set Food Price</label>
    <input type="text" class="form-control" id="exampleInputPassword1" name='FoodPriceedit'>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">set MobileNumber</label>
    <input type="text" class="form-control" id="exampleInputPassword1" name='MobileNumberedit'>
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>






    
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>



</body>
</html>
