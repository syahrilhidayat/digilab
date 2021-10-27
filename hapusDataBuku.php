<?php 
    include 'koneksi.php';

    if (isset($_GET['idbuku'])){

        $id = $_GET['idbuku'];

        $result = mysqli_query($conn, "DELETE FROM tbbuku WHERE idbuku='$id'");
        // var_dump($result);
        if($result > 0){
            echo '
                <script>alert("Data Berhasil Dihapus");
                document.location.href="dataBuku.php";
                </script>
            ';
        }else{
            echo '
                <script>alert("Data Gagal Dihapus");
                document.location.href="dataBuku.php";
                </script>
            ';
        }
    }