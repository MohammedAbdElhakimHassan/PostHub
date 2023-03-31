<?php
include("connect.php");
// include("header.php");
session_start();
if(!isset($_SESSION['login'])){
   header('Location: login.php');
}else if(isset($_SESSION['login'])){
 echo "<br> اهلا بك ".$_SESSION['user']."<br>";
 echo "sessionUser : ".$_SESSION['user'];
 echo "sessionPass : ".$_SESSION['password'];
if(isset($_POST["title"])) {
  // تعريف المتغير $title
  $title=$_POST["title"];
}

if(isset($_POST["content"])) {
  // تعريف المتغير $post
  $post = $_POST["content"];
}

if(isset($_POST["send"])) {
  // تعريف المتغير $send
  $send=$_POST["send"];

  if(isset($send)){
      include("connect.php");
      $query= "INSERT INTO publishing(title,content) VALUES('$title','$post')";
      mysqli_query($conn,$query);
      echo "Post Published Successfully";
      header('Location:index.php');
  }
}
}
?>