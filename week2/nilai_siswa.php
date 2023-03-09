<?php
//ambil data yang diinput atau dikirim
//panggil file function untuk dapat digunakanz
require_once 'function.php';
$name = $_POST['name'];
$mata_kuliah = $_POST['Matkul'];
$uts = $_POST['nilai_uts'];
$uas = $_POST['nilai_uas'];
$nilai_tugas = $_POST['nilai_tugas'];
$_nilai = ($uts + $uas + $nilai_tugas) / 3;
$keterangan = kelulusan($_nilai);
$grade = grade($_nilai);

//mencetak nilai variable
echo "Nama Mahasiswa : $name";
echo "<br/>Mata Kuliah : $mata_kuliah";
echo "<br/>Nilai UTS : $uts";
echo "<br/>Nilai UAS : $uas";
echo "<br/>Nilai Tugas Praktikum : $nilai_tugas";
echo "<br/>Keterangan : $keterangan";
echo "<br/>Grade : $grade";
?>