<?php
    // cek method yang digunakan
    if($_POST){
        // ambil data dari form
        $no_antrian=$_POST['no_antrian'];
        $nama=$_POST['nama'];
        $alamat=$_POST['alamat'];
        $nomorhp=$_POST['nomorhp'];
        $berat=$_POST['berat'];
        $jenis_pesanan=$_POST['jenis_pesanan'];
        $catatan=$_POST['catatan'];
        // include koneksi database
        include_once "database.php";
        // query insert ke database
        $sql="UPDATE pelanggan SET nama='$nama',alamat='$alamat',nomorhp='$nomorhp',berat='$berat',jenis_pesanan='$jenis_pesanan',catatan='$catatan' WHERE no_antrian='$no_antrian'";

        $save=mysqli_query($koneksi,$sql)or die('SQL Error, Please Check Your SQL');

        if($save){
            echo "<script>alert('Data berhasil di update'); window.location.assign('tampil.php');</script>";
         
        }else{
            echo "<script>alert('Data gagal di update'); window.location.assign('tampil.php');</script>";

        }

    }
?>