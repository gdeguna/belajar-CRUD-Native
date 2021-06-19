<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Input Data Mahasiswa</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div id="input_form">
        <h3 align="center">INPUT DATA MAHASISWA</h3>
        <form action="save_data.php" method="POST" name="RegForm">
            <table align="center">
                <tr>
                    <td>Nim :</td><td><input type="number" id="nim" name="nim" required="required"></td>
                </tr>
                <tr>
                    <td>Nama :</td><td><input type="text" id="nama" name="nama" required="required"></td>
                </tr>
                <tr>
                    <td>Alamat :</td>
                    <td>
                        <textarea cols="45" rows="7" name="alamat" class="texarea" id="alamat" size="15px" required="required">
                        </textarea>
                    </td>
                </tr>
                <tr>
                    <td>Telepon :</td><td><input type="text" name="notelp" required="required" maxlength="12">
                    </td>
                </tr>
                <tr>
                    <td>Jenis Kelamin :
                    </td>
                    <td><input type="radio" id="pria" name="gender" value="pria">
                <label for="pria">Pria</label>
                <input type="radio" id="wanita" name="gender" value="wanita">
                <label for="wanita">wanita</label><br>
                <tr>
                    <td>jurusan :</td>
                    <td><select placeholder="Pilih jurusan" name="jurusan" id="jurusan">
                        <option selected="selected">–PILIH JURUSAN–</option>
                        <option value="Sistem_Komputer">SISTEM KOMPUTER</option>
                        <option value="Teknik_Informatika">TEKNIK INFORMATIKA</option></select>
                    </td>
            </table>
            <p align="center">
                <input type="submit" value="Submit">
                <input type="reset" value="cancel">
                <button><a href="/form_input/show_data.php">Lihat Data</a></button>
            </p>
        </form>
    </div>
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