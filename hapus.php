<?php
    require 'function.php';
    $id = $_GET['id_buku'];

    if(hapus($id) > 0){
        echo"<script> alert('data berhasil di hapus!');
            document.location.href = 'index.php'
        </script>";
    }
?>