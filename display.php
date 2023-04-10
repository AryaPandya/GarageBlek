<?php
include('connect.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Membership</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">

</head>
<body>
    <div class="container">
        <button class="btn btn-dark my-5"><a href="user.php" class="text-light">Add user</a></button>
        <table class="table">
        <thead class="thead-dark">
        <tr>
            <th scope="col">No</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">instagram</th>
            <th scope="col">Address</th>
            <th scope="col">Phone</th>
            <th scope="col"></th>
        </tr>
    </thead>
    <tbody>
        <?php
$sql = "Select * from user";
$result = mysqli_query($conn,$sql);
if($result){
    while($row=mysqli_fetch_assoc($result)){
        $id=$row['id'];
        $name=$row['name'];
        $email=$row['email'];
        $instagram=$row['instagram'];
        $address=$row['address'];
        $phone=$row['phone'];
        echo'<tr>
        <th scope="row">'.$id.'</th>
        <td>'.$name.'</td>
        <td>'.$email.'</td>
        <td>'.$instagram.'</td>
        <td>'.$address.'</td>
        <td>'.$phone.'</td>
        <td>
        <button class="btn btn-dark"><a href="update.php? updateid='.$id.'" class="text-light">Update</a></button>
        <button class="btn btn-danger"><a href="delete.php? deleteid='.$id.'"  class="text-light">Delete</a></button>
        </td>
    </tr>';
    
    }
}

?>
        

    </tbody>
</table>
<button class="btn btn-dark my-5"><a href="index.html" class="text-light">Back to web</a></button>
    </div>
</body>
</html>