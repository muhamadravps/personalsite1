<?php
include 'core/koneksi.php';

$a = mysqli_query($conn, "SELECT * FROM user");
$b = mysqli_query($conn, "SELECT * FROM about");
$p = mysqli_query($conn, "SELECT * FROM project");
$c = mysqli_query($conn, "SELECT * FROM contact");
$ul = mysqli_query($conn, "SELECT * FROM user_login");
function data($isi){
  global $conn;
  $sa = mysqli_query($conn,$isi);
  $box = [];
  while ($keluarkan = mysqli_fetch_assoc($sa)){
    $box[] = $keluarkan;
  }

  return $box;
}