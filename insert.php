<?php
 include "connect.php";

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];

$sql = "INSERT INTO `crud`(`name`, `email`, `phone`) VALUES ('$name','$email','$phone')";

$result = mysqli_query($conn,$sql);

if($result){
    header("location:index.php");
}
?>
