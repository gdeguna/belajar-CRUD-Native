<?php
include "connect.php";

$query = "select * from data_mahasiswa";

$result = $conn->query($query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa</title>
    <link rel="stylesheet" href="style.css">
</head>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>

<body>

	<h2 align="center">Data Mahasiswa</h2>
    <table class="table" id="myTable">
			  <thead>
			    <tr>
			      <th scope="col">NIM</th>
			      <th scope="col">Nama</th>
			      <th scope="col">Alamat</th>
			      <th scope="col">Action</th>
			    </tr>
			  </thead>
			  <tbody>
			  	<?php
			  	while ($row = $result->fetch_assoc()) {
			  	?>
				    <tr>
				      <th scope="row"><?php echo $row['nim'] ?></th>
				      <td><?php echo $row['nama'] ?></td>
				      <td><?php echo $row['alamat'] ?></td>
				      <td>
				      	<a href="edit_item.php?id=<?php echo $row['nim'] ?>" class="btn btn-success">Edit</a>
				      	<a href="delete_item.php?id=<?php echo $row['nim'] ?>" class="btn btn-danger">Delete</a>
				      </td>
				    </tr>
			    <?php
				}
			    ?>
			  </tbody>
	</table>

	<br>
	<a href="/form_input/form_input.php">Masukkan Data</a>
</body>

<!-- <script>
    function CheckData() {
        var nim = document.forms["RegForm"]["nim"];

        if (nim.value == "") {
            window.alert("Masukkan NIMmu");
            name.focus();
            return false;
        }
  
        return true;
    }
</script> -->

</html>