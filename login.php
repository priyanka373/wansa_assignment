<?php
session_start();
$server="localhost";
$username="root";
$password="";
$database="form";
$conn= mysqli_connect($server,$username,$password,$database);
if(!$conn)
{
    echo "Can't connect to database";
}
// echo "Connection successful";
$email=$_POST['login_email'];
$password=$_POST['login_password'];
$sql="SELECT name,password FROM `form_data` where email='$email'";
// if($conn->query($sql)==true)
$result = mysqli_query($conn,$sql);
$num=mysqli_num_rows($result);

    $row=mysqli_fetch_assoc($result);
    // $var_value=$row['name'];
    $_SESSION["name"] = $row['name'];
    // echo $_SESSION["name"];
    // echo $row['password'];
    // echo $password;
    if($row['password']==$password)
    {
        echo "<script>window.location.assign('dashboard.php')</script>";
    }
    else
    {
        echo "<script>window.location.assign('index.html')</script>";
    }



  $conn->close();
?>