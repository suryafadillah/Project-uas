<!-- mengambil data yang akan diubah berdasarkan nip yang dipilih -->
<?php
if(!empty($_GET['no_antrian'])) {
    include_once "database.php";
    $no_antrian=$_GET['no_antrian'];
    $sql="SELECT * FROM pelanggan WHERE no_antrian='$no_antrian'";
    // proses query
    $query=mysqli_query($koneksi,$sql)or die ("SQL Error");
    $data=mysqli_fetch_assoc($query);
} else {
    echo "<script> alert('Data Kosong'); window.location.assign('tampil.php');</script>";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Pelanggan</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
    <div class="container-fluid">
        <!-- form add guru -->

        <div class="card">
            <div class="card-body">

        <h2> Form Edit Data Pelanggan</h2>
         <form action="update.php" method="post">

    <div class="mb-3">
        <label for="no_antrian" class="form-label">ID Pelanggan</label>
        <input type="text" value="<?=$data['no_antrian']?>" class="form-control" id="no_antrian" name="no_antrian" readonly>
        <div id="emailHelp" class="form-text">Masukkan Nomor Antrian yang benar</div>
    </div>

    <div class="mb-3">
        <label for="nama" class="form-label">Nama</label>
        <input type="text" value="<?=$data['nama']?>" class="form-control" id="nama" name="nama">
        <div id="emailHelp" class="form-text">Masukkan Nama yang benar</div>
    </div>

    <div class="mb-3">
        <label for="alamat" class="form-label">Alamat</label>
        <input type="text" value="<?=$data['alamat']?>" class="form-control" id="alamat" name="alamat">
        <div id="emailHelp" class="form-text">Masukkan Alamat yang benar</div>
    </div>

    <div class="mb-3">
        <label for="nomorhp" class="form-label">No HP / WA</label>
        <input type="text" value="<?=$data['nomorhp']?>" class="form-control" id="hp" name="nomorhp">
        <div id="emailHelp" class="form-text">Masukkan No HP / WA yang benar</div>
    </div>


    <div class="mb-3">
        <label for="berat" class="form-label">Berat Pesanan</label>
        <input type="text" value="<?=$data['berat']?>" class="form-control" id="berat" name="berat">
        <div id="emailHelp" class="form-text">Masukkan Berat Pesanan yang benar</div>
    </div>

    <div class="mb-3">
        <label for="jenis_pesanan" class="form-label">Jenis Pesanan</label>
        <input type="text" value="<?=$data['jenis_pesanan']?>" class="form-control" id="jenis_pesanan" name="jenis_pesanan">
        <div id="emailHelp" class="form-text">Masukkan jenis pesanan yang benar</div>
    </div>

    <div class="mb-3">
        <label for="catatan" class="form-label">Catatan</label>
        <input type="text" value="<?=$data['catatan']?>" class="form-control" id="catatan" name="catatan">
        <div id="emailHelp" class="form-text">Masukkan Catatan yang benar</div>
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
    </form>

    </div>
</div>
        <!-- end form -->
    </div>

</body>
</html>