<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Data Mahasiswa-Tambah</title>
</head>

<body>

    <form action="prosestambah.php" method="post">
        <table cellpadding="8">
            <tr>
                <td>NIM</td>
                <td><input type="text" name="nim"></td>
            </tr>
            <tr>
                <td>Nama</td>
                <td><input type="text" name="nama"></td>
            </tr>

            <tr>
            <td>Jenis Kelamin </td>
            <td>
            <form action="prosestambah.php" method="post">
		<input type="radio" name="kelamin" value="LK">Laki-laki
		<input type="radio" name="kelamin" value="PR">Perempuan
        <br>
	</form>
            </td>
            </tr>

            <tr>
                <td>Jurusan </td>
            <td>
            <form action="prosestambah.php" method="post">
		<input type="radio" name="jurusan" value="TI">TI
		<input type="radio" name="jurusan" value="SI">SI
		<input type="radio" name="jurusan" value="MI">MI
		<input type="radio" name="jurusan" value="MI">TK
		<input type="radio" name="jurusan" value="MI">KA

        <br>
	</form>
            </td>
            </tr>

             
                
               <tr>
               <td>
                <td>
                    <input type="submit" value="Tambah">
                </td>
                </td>
                </tr>
            </tr>
        </table>

    </form>

</body>

</html>