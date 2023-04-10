<?php
include('connect.php');
$id=$_GET['updateid'];
$sql="Select * from user where id='$id'";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($result);
$name=$row['name'];
$email=$row['email'];
$instagram=$row['instagram'];
$address=$row['address'];
$phone=$row['phone'];

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $instagram = $_POST['instagram'];
    $address = $_POST['address'];
    $phone = $_POST['phone'];

    $sql = "update  user set id='$id',name='$name',email='$email',instagram='$instagram',address='$address',phone='$phone' where id='$id'";
    $result=mysqli_query($conn,$sql);
    if($result){
        header('location:display.php');
    } else{
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
                <input type="text" class="form-control" placeholder="Enter your name" name="name" autocomplete="off" value=<?php echo $name;?>>
            </div>  
            <div class="form-group">
                <label >Email :</label>
                <input type="email" class="form-control" placeholder="yourname@gmail.com" name="email" autocomplete="off" value=<?php echo $email;?>>
            </div>  
            <div class="form-group">
                <label >instagram :</label>
                <input type="text" class="form-control" placeholder="@blabla" name="instagram" autocomplete="off"value=<?php echo $instagram;?>>
            </div>  
            <div class="form-group">
                <label >Address :</label>
                <input type="text" class="form-control" placeholder="City, Town" name="address" autocomplete="off"value=<?php echo $address;?>>
            </div>  
            <div class="form-group">
                <label >Phone :</label>
                <input type="text" class="form-control" placeholder="+62xxxxxxxx" name="phone" autocomplete="off"value=<?php echo $phone;?>>
            </div>  
            <button type="submit" class="btn btn-dark" name="submit">Update</button>
        </form>
</div>

  </body>
</html>