<?php
    function koneksi(){
        $conn = mysqli_connect('localhost', 'root', '', 'prakweb_2023_c_213040108') or die("koneksi gagal!");
        return $conn;
    }

    function query($query){
        $conn = koneksi();
        $result = mysqli_query($conn, "SELECT * FROM buku") or die ("salah table".mysqli_error($conn));

        $rows = [];
        while($row = mysqli_fetch_assoc($result)){
            $rows[] = $row;
        }

        return $rows;
    }

    function tambah($data){
        $conn = koneksi();

        $judul_buku = mysqli_real_escape_string($conn, htmlspecialchars($data['judul_buku']));
        $penerbit = mysqli_real_escape_string($conn, htmlspecialchars($data['penerbit']));
        $tahun_terbit = mysqli_real_escape_string($conn, htmlspecialchars($data['tahun_terbit']));
        $kategori = mysqli_real_escape_string($conn, htmlspecialchars($data['kategori']));

        $query = "INSERT INTO buku VALUES (null, '$judul_buku', '$tahun_terbit', '$penerbit', '$kategori')";

        mysqli_query($conn, $query) or die ('query gagal'.mysqli_error($conn));

        return mysqli_affected_rows($conn);
    }

    function hapus($id){
        $conn = koneksi();
        mysqli_query($conn, "DELETE FROM buku WHERE id_buku =$id") or die('Query GAGAL!'.mysqli_error($conn));
        return mysqli_affected_rows($conn);

    }

    function ubah($data){
        $conn = koneksi();

        $id = $data['id_buku'];
        $judul_buku = mysqli_real_escape_string($conn, htmlspecialchars($data['judul_buku']));
        $penerbit = mysqli_real_escape_string($conn, htmlspecialchars($data['penerbit']));
        $tahun_terbit = mysqli_real_escape_string($conn, htmlspecialchars($data['tahun_terbit']));
        $kategori = mysqli_real_escape_string($conn, htmlspecialchars($data['kategori']));

        $query = "UPDATE buku SET (
            judul_buku = '$judul_buku',
            penerbit = '$penerbit',
            tahun_terbit = '$tahun_terbit',
            kategori = '$kategori'
            WHERE id_buku = $id
        )";

        mysqli_query($conn, $query) or die ('query gagal'.mysqli_error($conn));

        return mysqli_affected_rows($conn);
    }
?>