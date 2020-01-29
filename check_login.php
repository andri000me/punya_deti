<?php
session_start();
require './config/koneksi.php';
$input = $_POST;
$pesan = '';
$status = 'gagal';
if ($input['username'] != null && $input['password']) {
  $sql = 'SELECT * FROM admin WHERE user = ' . "'" . $input['username'] .  "'";
  $query = mysqli_query($conn, $sql);
  if (mysqli_num_rows($query) == true) {
      $check = '';
      $row = mysqli_fetch_assoc($query);
      $check = checkLogin($row, $input['password']); 
      if ($check != '') {
        if ($check == 'berhasil') {
          $_SESSION['user'] = $row['user'];
          $_SESSION['pass'] = $row['pass'];
          $status = 'berhasil';
        }else{
          $pesan = 'Password Salah';
        }
      } else {
          $pesan = 'User tidak ditemukan';
      }
  } else {
    $pesan = 'User tidak ditemukan';
  } 
} else {
  $pesan = 'Username dan password harus diisi';
}


if ($status == 'berhasil') {
  header('location: admin/index.php');
}else{
  header('location: login.php?error='.$pesan);
}

function checkLogin($data, $pass)
{
  $status = 'berhasil';
  if ($data['pass'] != $pass) {
    $status = 'gagal';
  }
  return $status;
}