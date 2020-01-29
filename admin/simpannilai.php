<?php
require '../config/koneksi.php';
$input          = $_POST;
$nisn           = @$input['nisn'];
$kelas          = @$input['kelas'];
$semester       = @$input['semester'];
$idmapel        = @$input['idmapel'];
$ulangan_harian = @$input['ulangan_harian'];
$pts            = @$input['pts'];
$pas            = @$input['pas'];
$rata_rata      = @$input['rata_rata'];

$check = "SELECT * FROM nilai WHERE ";
$check .= "nisn = '" . $nisn . "' AND ";
$check .= "kelas = '" . $kelas . "' AND ";
$check .= "semester = '" . $semester . "' AND ";
$check .= "idmapel = '" . $idmapel . "'";

$sql_check = mysqli_query($conn, $check);
echo mysqli_num_rows($sql_check);
if (mysqli_num_rows($sql_check) != 0) {
    header('location: ../admin/nilaisiswa.php');
} else {
    $insert = 'INSERT INTO nilai SET ';
    $insert .= "nisn = '" . $nisn . "',";
    $insert .= "kelas = '" . $kelas . "',";
    $insert .= "semester = '" . $semester . "',";
    $insert .= "idmapel = '" . $idmapel . "',";
    $insert .= "ulangan_harian = '" . $ulangan_harian . "',";
    $insert .= "pts = '" . $pts . "',";
    $insert .= "pas = '" . $pas . "',";
    $insert .= "rata_rata = '" . $rata_rata . "'";
    mysqli_query($conn, $insert);
    header('location: ../admin/nilaisiswa.php');
}
