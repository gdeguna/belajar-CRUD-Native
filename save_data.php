<?php
session_start();
include "connect.php";

$nim = $_POST['nim'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$notelp = $_POST['notelp'];
$gender = $_POST['gender'];
$jurusan = $_POST['jurusan'];

$query = "insert into data_mahasiswa values('$nim','$nama','$alamat','$notelp','$gender','$jurusan')";

//check apakah qwery jalan atau tidak
if ($conn->query($query) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $query . "<br>" . $conn->error;
}

//untuk tombol back
$url = htmlspecialchars($_SERVER['HTTP_REFERER']);
echo "<a href='$url'>Back</a>";

?>