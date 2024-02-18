<?php
include 'connect.php';

if (isset($_GET['did']))  {

  $did = $_GET['did'];

  $sql = "DELETE FROM `crud` WHERE id =$did";
  $result = mysqli_query($conn,$sql);

  if ($result) {
    header('location:index.php');
  } else {
    die(mysqli_error($conn));
  }


  

}