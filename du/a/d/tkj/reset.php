<?php
// koneksi database
include '../../../../koneksi.php';


session_start();
if ($_SESSION['status']!="tkj") {
    header("location:../../index.php?pesan=belum_login");
} else {
    $nik = $_GET['nik'];

    mysqli_query($koneksi, "UPDATE daftar_ulang SET
               nik='$nik',
               pdf_fakta='',
               pdf_swa_fakta='',
               pdf_akta='',
               pdf_kk='',
               pdf_photo='',
               pdf_surat_dokter='',
               pdf_skl=''
               where nik='$nik'
               ") or die(mysqli_error($koneksi));
    ;

    header("location:tampil.php?nik=$nik");
}
