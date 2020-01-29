<?php
include '../config/koneksi.php';
//menyimpan data kedalam variabel
$nis         			    = $_POST['nis'];
$nisn        	            = $_POST['nisn'];
$nama        	 		    = $_POST['nama'];
$tempat     			    = $_POST['tempat'];
$tanggal_lahir   		    = $_POST['tanggal_lahir'];
$jenis_kelamin  		    = $_POST['jenis_kelamin'];
$agama 	                    = $_POST['agama'];
$pendidikan_sebelumnya      = $_POST['pendidikan_sebelumnya'];
$alamat_siswa        		= $_POST['alamat_siswa'];
$kelas        				= $_POST['kelas'];
$semester     			    = $_POST['semester'];
$na_ayah      			    = $_POST['na_ayah'];
$na_ibu       			    = $_POST['na_ibu'];
$pek_ayah     			    = $_POST['pek_ayah'];
$pek_ibu      			    = $_POST['pek_ibu'];
$na_wali   	 			    = $_POST['na_wali'];
$pek_wali   		        = $_POST['pek_wali'];
$alamat_wali    		    = $_POST['alamat_wali'];
$foto       			    = $_POST['foto'];
// query SQL untuk insert data
$query="INSERT INTO siswa SET nis='$nis',nisn='$nisn',nama='$nama',tempat='$tempat',tanggal_lahir='$tanggal_lahir',jenis_kelamin='$jenis_kelamin',agama='$agama',pendidikan_sebelumnya='$pendidikan_sebelumnya',alamat_siswa='$alamat_siswa',kelas='$kelas',semester='$semester',na_ayah='$na_ayah',na_ibu='$na_ibu',pek_ayah='$pek_ayah',pek_ibu='$pek_ibu',na_wali='$na_wali',pek_wali='$pek_wali',alamat_wali='$alamat_wali',foto='$foto'";
mysqli_query($conn, $query);
// mengalihkan ke halaman simpantmbhsiswa.php
header("location: ../admin/siswa.php");
?>