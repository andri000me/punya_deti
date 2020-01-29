<?php
include '../config/koneksi.php';
//menyimpan data kedalam variabel
$nip         			= $_POST['nip'];
$nama        	 		= $_POST['nama'];
$jenis_kelamin  		= $_POST['jenis_kelamin'];
$jabatan     			= $_POST['jabatan'];
$bidang        		    = $_POST['bidang'];
$foto       			= $_POST['foto'];
// query SQL untuk insert data
$query="INSERT INTO guru SET nip='$nip',nama='$nama',jenis_kelamin='$jenis_kelamin',jabatan='$jabatan',bidang='$bidang',foto='$foto'";
mysqli_query($conn, $query);
// mengalihkan ke halaman simpantmbhguru.php
header("location: ../admin/guru.php");
?>