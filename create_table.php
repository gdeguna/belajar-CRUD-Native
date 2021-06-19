<?php
include "connect.php";

//sql to create table
$sql = "CREATE TABLE data_mahasiswa (
    nim varchar(8) not null,
    nama varchar(50) not null,
    alamat varchar(50) not null,
    no_telp varchar(13) not null,
    jenis_kelamin enum('pria','wanita') not null,
    jurusan varchar(50) not null,
    constraint primary key(nim)
)";

if ($conn->query($sql) === true) {
    echo "tabel created successfully";
}else {
    echo "error creating table: " , $conn->error;
}

$conn->close();
?>