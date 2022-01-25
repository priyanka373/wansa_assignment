<?php
$server="localhost";
$username="root";
$password="";
$conn= mysqli_connect($server,$username,$password);
if(!$conn)
{
    echo "Can't connect to database";
}
// echo "Connection successful";
$name=$_POST['name'];
$email=$_POST['email'];
$password=$_POST['password'];
$sql="INSERT INTO `form`.`form_data`(`name`,`email`,`password`) VALUES ('$name','$email','$password')";
if($conn->query($sql)==true)
{
    // echo "Data entered successfully";
    echo "<script>window.location.assign('index.html')</script>";
}
else{
    echo "Data did not enter successfully";
}
?>