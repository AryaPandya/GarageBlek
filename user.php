<?php
include('connect.php');
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $instagram = $_POST['instagram'];
    $address = $_POST['address'];
    $phone = $_POST['phone'];

    $sql = "insert into user (name, email, instagram, address, phone) values('$name','$email','$instagram','$address','$phone')";

    $result=mysqli_query($conn,$sql);
    if(!$result){
        die(mysqli_error($conn));
    }
    
}

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">

    <title>Membership Login</title>
  </head>
  <body>
    <h1 class="text-center my-5">Membership Form</h1>
    <div class="container my-5"></div>
      <div class="container">
        <form method="post">
            <div class="form-group">
                <label >Name :</label>
                <input type="text" class="form-control" placeholder="Enter your name" name="name" autocomplete="off">
            </div>  
            <div class="form-group">
                <label >Email :</label>
                <input type="email" class="form-control" placeholder="yourname@gmail.com" name="email" autocomplete="off" >
            </div>  
            <div class="form-group">
                <label >instagram :</label>
                <input type="text" class="form-control" placeholder="@blabla" name="instagram" autocomplete="off">
            </div>  
            <div class="form-group">
                <label >Address :</label>
                <input type="text" class="form-control" placeholder="City, Town" name="address" autocomplete="off">
            </div>  
            <div class="form-group">
                <label >Phone :</label>
                <input type="text" class="form-control" placeholder="+62xxxxxxxx" name="phone" autocomplete="off">
            </div>  
            <button type="submit" class="btn btn-dark" name="submit">Submit</button>
        </form>
        <a href="display.php" class="btn btn-dark my-3" name="member">Member list</a>
</div>

  </body>
</html>