<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Pelanggan</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <style>
        body {
            background-image: url('images/background.jpg');
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
        }
    </style>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
        <div class="col-lg-12 text-center">
        <h1 style="color: white;">Data Pelanggan Laundry</h1>
            </div>

            <div class="col-lg-6">
                <a href="tambah.php" class="btn btn-primary">Tambah Pelanggan</a>
            </div>
            <div class="col-lg-6 text-end">
                <a href="index.php" class="btn btn-primary">Simpan</a>
            </div>
            <br>
            <br>
            <br>
            <div class="card">
                <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>ID Pelanggan</th>
                            <th>Nama</th>
                            <th>Alamat</th>
                            <th>Nomor HP</th>
                            <th>Berat Pakaian (Kg)</th>
                            <th>Jenis Pesanan</th>
                            <th>Catatan</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        // include database.php
                        include_once "database.php";
                        // buat sql tampil data
                        $sql="SELECT*FROM pelanggan";
                        $q=mysqli_query($koneksi,$sql)or die("SQL Error");
                        $nomor=1;
                        // tampilkan data dengan perulangan
                        while($data=mysqli_fetch_assoc($q)):
                        ?>
                        <tr>
                            <td><?=$nomor?></td>
                            <td><?=$data['no_antrian']?></td>
                            <td><?=$data['nama']?></td>
                            <td><?=$data['alamat']?></td>
                            <td><?=$data['nomorhp']?></td>
                            <td><?=$data['berat']?></td>
                            <td><?=$data['jenis_pesanan']?></td>
                            <td><?=$data['catatan']?></td>
                            <td>
                                <a href="edit.php?no_antrian=<?=$data['no_antrian']?>" class="btn btn-success">Edit</a>
                                <a href="hapus.php?no_antrian=<?=$data['no_antrian']?>" class="btn btn-danger">Selesai</a>
                            </td>
                        </tr>
                        <?php $nomor++; endwhile; ?>
                    </tbody>
                </table>
                </div>
            </div>
        </div>
    </div>

<script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>