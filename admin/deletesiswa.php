<?php  
session_start();
if (is_null(@$_SESSION['user'])) {
    header('location:../index.html');
}
include '../config/koneksi.php';
$r = mysqli_query($conn, 'DELETE * FROM siswa WHERE nis="' . $_GET['nis'] .'"');
					echo"<meta http-equiv='refresh' content='1;URL=siswa.php'>";
?>
