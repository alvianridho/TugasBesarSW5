<?php
include 'koneksi.php';
$id = $_GET["id"];
if (!empty($id)) {
    $query = "DELETE FROM mahasiswa WHERE id_mahasiswa='$id'";
    $statement = $dbConn->prepare($query);
    $statement->execute();

    echo "<script>alert('Dihapus!')</script>";
    echo '<script>window.history.back()</script>';
} else {
    echo "<script>alert('Gagal')</script>";
    echo '<script>window.history.back()</script>';
}