<?php 
// include("header.php");
include ('connect.php');
$username=$_POST['username'];
$email=$_POST['email'];
$pass=$_POST['pass'];

$query="INSERT INTO users(username,email,password) VALUES ('$username','$email','$pass')";
if(mysqli_query($conn,$query)){
    header ('Location:index.php');
}else{
    echo "حدث خطا عند محاوله ادخال المستخدم الجديد";
}

?>