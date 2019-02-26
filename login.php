<?php
  session_start();
if (isset($_SESSION['message_success'])) {
    if ($_SESSION['message_success']!="") {
      echo "<p class='alert_success'>".$_SESSION['message_success']."</p>";
      $_SESSION['message_success'] = "";
    }
  }
  else if(isset($_SESSION['message_warning'])){
    if ($_SESSION['message_warning']!=""){
      echo "<p class='alert_warning'>".$_SESSION['message_warning']."</p>";
      $_SESSION['message_warning'] = "";
    }
  }
  else if(isset($_SESSION['message_failed'])){
    if ($_SESSION['message_failed']!=""){
      echo "<p class='alert_failed'>".$_SESSION['message_failed']."</p>";
      $_SESSION['message_failed'] = "";
    }
  }
 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Login</title>
    <link rel="stylesheet" href="css/login.css">
  </head>
  <body>
    <form action="ceklogin.php" method="POST">
    <div class="kotak">
      <h2 class="login">Sign In</h2>
        <input class="pengguna" type="text" name="username" value="" placeholder="Username" required>
        <input class="sandi" type="password" name="password" value="" placeholder="Password" required>
        <button class="signin" type="submit" name="login" class="button">SIGN IN</button>
        <span class="pertanyaan">Dont Have an Account?</span>
        <a class="daftar" href="register.php" class="Sign-up">SIGN UP NOW</a>
    </div>
    </form>

  </body>
</html>
