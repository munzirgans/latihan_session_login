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
         <title>Signup</title>
         <link rel="stylesheet" type="text/css" href="css/register.css">
       </head>
       <body>
        <div class="kotak">
          <h2 class="font_signup">Sign Up</h2>
          <form method="POST" action="cekregister.php">
              <input class="user" type="text" name="username" placeholder="Username" required>
              <input class="pass" type="password" name="password" placeholder="Password" required>
              <button class="regist" type="submit" name="register">Register</button>
              <p class="question">Already Have an Account ?</p>
              <a class="signin" href="login.php">SIGN IN</a>
          </form>
        </div>
     </body>
 </html>
