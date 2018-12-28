<?php 
/* 
  Aplication : Kelola SISWA
  Version : V.07
  Author Created : Tsaqif Setyo
  PHP : Native (No Framework)
  WA : 081228154479
*/

/* Koneksi Kedatabase */
$konek = mysqli_connect('localhost','root','','pesanan');

/* Utility */
$judul = "Adminbootcamp";
$link = "http://localhost:8080/Admin";

/* Tanggal */
date_default_timezone_set('Asia/Jakarta');
$tanggal = date('d M Y');
$waktu = date('G:i:s');


?>