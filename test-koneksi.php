<?php
    include 'config/database.php';
        if ($conn) {
            echo "Koneksi Berhasil!";
        } else {
            echo "Koneksi Gagal!";
        }
?>