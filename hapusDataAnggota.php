<?php 
    include 'koneksi.php';

    if (isset($_GET['idanggota'])){

        $id = $_GET['idanggota'];

        $result = mysqli_query($conn, "DELETE FROM tbanggota WHERE idanggota='$id'");
        // var_dump($result);
        if($result > 0){
            echo '
                <script>alert("Data Berhasil Dihapus");
                document.location.href="dataAnggota.php";
                </script>
            ';
        }else{
            echo '
                <script>alert("Data Gagal Dihapus");
                document.location.href="dataAnggota.php";
                </script>
            ';
        }
    }