<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>Document</title>
</head>

<body style="background-color: lightblue;">
    <h1 style="background-color: yellow; text-align: center;">Sistem informasi sekolahan</h1>
    <h2 style="background-color: yellow; text-align: center;">SMAN1 masalembu</h2>
    <a href="data_siswa.php" style="background-color: lightgreen; align-items: center;">Daftar Siswa"</a><br>
    <a href="tambah_siswa.php" style="background-color: lightgreen; align-items: center;">pendaftaran</a>
</body>

</html>

<?php
include 'koneksi.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Document</title>
</head>

<body>
    <h2 style="background-color: yellow; text-align: center;">Data siswa</h2>
    <center>
        <table border="1">
            <tr>
                <td>No</td>
                <td>nama siswa</td>
                <td>Alamat</td>
                <td>Agama</td>
                <td>Asal sekolah</td>
                <td>aksi</td>
            </tr>


            <?php
            $konek = mysqli_connect("localhost", "root", "", "sekolahan");
            $no = 1;
            $query = mysqli_query($konek, "SELECT * FROM data_siswa");
            while ($data = mysqli_fetch_array($query)) {
            ?>
                <tr>
                    <td><?php echo $no++; ?></td>
                    <td><?php echo $data['nama_siswa']; ?></td>
                    <td><?php echo $data['alamat_siswa']; ?></td>
                    <td><?php echo $data['agama_siswa']; ?></td>
                    <td><?php echo $data['asal_sekolah']; ?></td>
                    <td>
                        <a href="">Edit</a> <a href="">Hapus</a>
                    </td>
                </tr>

            <?php
            }
            ?>
        </table>
    </center>

    <body>

</html>