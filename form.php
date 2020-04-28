<!DOCTYPE html>
<html>

<head>
    <title>
        FORM NILAI MAHASISWA
    </title>
</head>

<body>

    <form action="./add_mhs.php" method="post">
        <h2>
            <center>.:: SELAMAT DATANG ::.</center>
        </h2>
        <fieldset>

            <legend><strong>BIODATA MAHASISWA FST UNRIYO</strong></legend><br>
            <table border="0" cellpadding="2">
                <tr>

                    <td>NIM</td>
                    <td>:</td>

                    <td><input type="text" name="nim" placeholder="Masukkan NIM Lengkap Anda" required size="30"></td>
                </tr>
                <tr>

                    <td>Nama</td>
                    <td>:</td>

                    <td><input type="text" name="nama" placeholder="Masukkan Nama Lengkap Anda" required size="30"></td>
                </tr>

                <tr>
                    <td>Jurusan</td>
                    <td>:</td>
                    <td><select name="jurusan">
                            <option>Teknik Informatika (S1)</option>
                            <option>Sistem Informasi (S1)</option>
                            <option>Managemen Informatika (D3)</option>
                            <option>Teknik Komputer (D3)</option>
                            <option>Komputerisasi Akuntansi (D3)</option>
                    </td>
                </tr>
                <tr>
                    <td>Semester</td>
                    <td>:</td>
                    <td><input type="radio" name="semester" value="1">1
                        <input type="radio" name="semester" value="2">2
                        <input type="radio" name="semester" value="3">3
                        <input type="radio" name="semester" value="4">4
                        <input type="radio" name="semester" value="5">5
                        <input type="radio" name="semester" value="6">6
                        <input type="radio" name="semester" value="7">7
                        <input type="radio" name="semester" value="8">8
                        <input type="radio" name="semester" value="9">9
                        <input type="radio" name="semester" value="10">10
                    </td>
                </tr>
                <tr>
                    <td>Jenis Kelamin</td>
                    <td>:</td>
                    <td><input type="radio" name="jenis" value="laki-laki">Laki-Laki
                        <input type="radio" name="jenis" value="perempuan">Perempuan

                    </td>
                </tr>

                <tr>
                    <td>Masukkan Nilai</td>
                    <td>:</td>
                    <td><input type="number" name="nilai" min="0" max="100" required></td>
                </tr>
            </table>
        </fieldset>
        <br>
        <center>
            <input type="submit" name="simpan" value="SIMPAN">
            <input type="reset" name="hapus" value="HAPUS">
        </center>
    </form>
</body>

</html>