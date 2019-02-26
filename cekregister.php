<?php

include 'koneksi.php';

if (isset($_POST['register'])) {
  $username = $_POST['username'];
  $password = md5($_POST['password']);
  $role = 'user';

  $register = $koneksi->prepare("SELECT * FROM  users WHERE username = '".$username."'");
  $register -> execute();
  $hasil = $register->fetchAll();

  if (sizeof($hasil)==1) {
    $_SESSION['message_warning'] = "Username sudah pernah terdaftar";
    header("location:register.php");
  }else {
    $insert = $koneksi->prepare("INSERT INTO users (username,password,role) VALUES
    ('".$username."','".$password."','".$role."')");

    $res = $insert->execute();
    if ($res) {
        $_SESSION['logged_in'] = true;
        $_SESSION['username'] = $username;
        $_SESSION['role'] = $role;
        $_SESSION['message_success'] = "Register Berhasil";
          header("location:login.php");
    }else {
      $_SESSION['logged_in'] = false;
      $_SESSION['message_failed'] = "Register Gagal";
      header("location:register.php");
    }
  }
}

?>
