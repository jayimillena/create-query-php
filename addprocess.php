<?php 
include('config.php');

if($_POST['save'])
{
  $name = $_POST['name'];
  $address = $_POST['address'];
  $dateofbirth = $_POST['dateofbirth'];
  $db = mysqli_select_db($conn, 'lazada');
  $sql = "INSERT INTO users (name, address, dateofbirth) VALUES ('$name', '$address', '$dateofbirth')";
  $insert = mysqli_query($conn ,$sql);

  if($insert)
  {
    echo "Naka insert na";
  }
  else 
  {
    echo "Error";
  }
}
