<?php
// اتصال بقاعدة البيانات
include('header.php');
include('connect.php');
//:للقيام بعمليه الفحص
// 1-جلب البيانات من قاعده البيانات
// 2-جلب البيانات من الفورم
// 3-جلب بيانات من قاعده البيانات بشرط تشاببهها مع بيانات الفورم
//في حاله تشابه البيانات يتم نقل المستخدم لصفحه الترحيب-4     

// جلب البيانات من قاعده البيانات
$data="SELECT username,password FROM users"; //دي البيانات المحفوظف في قاعده البيانات 
// هنا حنجت البيانات الجبناها في مصفوفه
$result=mysqli_query($conn,$data);
//  result وحنعرض البيانات الجاتنا وحففظماها في مصفوفه
// حنستخدم داله mysqli_fetch_assoc()
if(mysqli_fetch_assoc($result) > 0){
    // اي بيانات حتطلع حنعرضها كل واحده براها في متغير وحنستخدم لووب
    while($row=mysqli_fetch_assoc($result)){
        echo "username :  ".$row ['username'];
        echo"<br>";
        echo "password : ".$row['password']."<br>";
    }
}
else{
   echo"result=0 مافيش بيانات جات من قاعده البيانات";
}

// جلب البيانات من الفورم
$username=$_POST['username'];
$password=$_POST['password'];
//   او من اي سكريبتات ضار فلتره البيانات من اي خطوره
$username=filter_var($_POST['username'],FILTER_SANITIZE_STRING);
$password=filter_var($_POST['password'],FILTER_SANITIZE_STRING);

//عشان نتاكد انو احنا ماشين صح قبل ما نكمل
echo "الباسوورد الجاي من الفورم:".$password."<br> اليوزر نيم الجاي من الفورم:".$username;
// حنعمل استدعاء من قاعده البيانات بشرط تشابه اليوزر نيم والباسورد الجاي من الفورم والا
// لو مافيش بيانات في قاعده البيانات بتتشابه مع البيانات بتاعت الفورم كده يكون في خطا ايرور 

// عمل البيانات مع قاعده البيانات بشرط تشابهها مع البيانات بتاعت الفورم
$query="SELECT * FROM users WHERE username='$username' AND password='$password'";
//كل الداتا الجايه من السيكوال حنختها في شكل مصفوفه في المتغير ده
echo "<br>";
$dataOfsql=mysqli_query($conn,$query);
if(mysqli_num_rows($dataOfsql) > 0){
    session_start();
    $_SESSION['user']=$username;
    $_SESSION['password']=$password;
    $_SESSION['login']=true;
    header('Location: index.php');
    echo"تم تسجيل الدخول بنجاح";
    exit();

}else{
    echo "incorrect username or password";
    header("Location: login.php");


}
// اغلاق الاتصال بقاعده البيانات
mysqli_close($conn);

?>