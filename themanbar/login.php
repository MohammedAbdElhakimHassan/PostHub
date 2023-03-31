<?php 
include("header.php");
?>

  <link rel="stylesheet" href="./style/login.css">
  <div class="containerOfForm">
    <div class="form-container">
      <form id="register-form" class="form" method="POST" action="newuser.php">
        <h2>تسجيل حساب جديد</h2>
        <input type="text" id="register-username" name="username" placeholder="اسم المستخدم"  required>
        <input type="email" id="register-email" name="email" placeholder="البريد الإلكتروني" required>
        <input type="password" id="register-password" name="pass" placeholder="كلمة المرور" required>
        <button type="submit">تسجيل</button>
        <p>لديك حساب بالفعل؟ <a href="#" id="to-login-form">تسجيل الدخول</a></p>
      </form>

      <form id="login-form" class="form" style="display:none;"  method="POST" action="checklogin.php">
        <h2>تسجيل الدخول</h2>
        <input type="text" id="login-username" name="username"  placeholder="اسم المستخدم" required>
        <input type="password" id="login-password" name="password"  placeholder="كلمة المرور" required>
        <button type="submit">تسجيل الدخول</button>
        <p>ليس لديك حساب؟ <a href="#" id="to-register-form">تسجيل حساب جديد</a></p>
      </form>
    </div>
  </div>
  <script>
    document.getElementById("to-login-form").addEventListener("click", function(event) {
    event.preventDefault();
    document.getElementById("register-form").style.display = "none";
    document.getElementById("login-form").style.display = "block";
  });
  
  document.getElementById("to-register-form").addEventListener("click", function(event) {
    event.preventDefault();
    document.getElementById("login-form").style.display = "none";
    document.getElementById("register-form").style.display = "block";
  });</script>
</body>
</html>
