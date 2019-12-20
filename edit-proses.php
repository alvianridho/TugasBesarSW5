<?php
    include 'koneksi.php';
    $msg_succ = "";
    if(isset($_POST["simpan"])){
        $id_mahasiswa = $_POST['id_mahasiswa'];
        $nama = $_POST['nama'];
        $jurusan = $_POST['jurusan'];
        $alamat = $_POST['alamat'];
        $telepon = $_POST['telepon'];
        $username = $_POST['username'];
        $password = $_POST['password'];

        $query = "UPDATE mahasiswa SET nama='$nama', jurusan='$jurusan', alamat='$alamat', telepon='$telepon', username='$username', password='$password' WHERE id_mahasiswa='$id_mahasiswa'";
        $statement = $dbConn->prepare($query);
        if($statement->execute()){
            echo "<script>alert('Diupdate!')</script>";
            echo '<script>window.location.href = "index.php"</script>';
        }
        else{
            echo "<script>alert('Gagal!')</script>";
            echo '<script>window.history.back()</script>';
        }
    }
?>