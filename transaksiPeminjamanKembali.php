<?php 
    include 'koneksi.php';
    
    $id = $_GET['idtransaksi'];
    
    $date  = date("Y-m-d");

    $result = mysqli_query($conn , "UPDATE tbtransaksi SET 

    tgl_pengembalian = '$date' WHERE idtransaksi = '$id' ");

    if($result > 0){
        echo '
            <script>alert("Data Berhasil DiUpdate");
            document.location.href="transaksiPeminjaman.php";
            </script>
        ';
    }else{
        echo '
            <script>alert("Data Gagal DiUpdate");
            document.location.href="transaksiPeminjaman.php";
            </script>
        ';
    }