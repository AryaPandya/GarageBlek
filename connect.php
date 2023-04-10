<?php 

$conn = new mysqli('localhost', 'root', '', 'membership_garage');

if (!$conn) {
    die(mysqli_error($conn));
} 

?>