<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Insert data from user</title>
</head>
<body>
<?php include("navbar.php");?>


<body>
    <h1>insert data into a table</h1>
    <form class="container" action="insert.php" method="post">
  <div class="mb-3">
    <label for="exampleInputEmail" class="form-label">Food Name</label>
    <input type="text" class="form-control" id="exampleInputEmail" aria-describedby="emailHelp" name='fname'>

  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Number</label>
    <input type="text" class="form-control" id="exampleInputPassword1" name='lname'>
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email</label>
    <input type="email" class="form-control" id="exampleInputEmail1" name='email'>
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Customer Name</label>
    <input type="text" class="form-control" id="exampleInputPassword1" name='customerName'>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Food Price</label>
    <input type="text" class="form-control" id="exampleInputPassword1" name='FoodPrice'>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">MobileNumber</label>
    <input type="text" class="form-control" id="exampleInputPassword1" name='MobileNumber'>
    <small id="emailHelp" class="form-text text-muted">We'll never share your number with anyone else.</small>
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>
  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
</form>




    
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>


</body>
</html>
