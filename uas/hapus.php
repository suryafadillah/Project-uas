<?php
    if(!empty($_GET['no_antrian'])){
        // hapus data
        include_once "database.php";
        $no_antrian=$_GET['no_antrian'];
        // sql hapus
        
        if(mysqli_query($koneksi,"DELETE FROM pelanggan WHERE no_antrian='$no_antrian'")){
            echo "<script>window.location.assign('tampil.php');</script>";
        }else{
            echo "<script>alert('Gagal dihapus'); window.location.assign('tampil.php');</script>";
        }
    }
?>