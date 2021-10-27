<?php 

    include 'koneksi.php';

    if(isset($_POST['submit']))
    {
        $id             = $_POST['idtransaksi'];
        $idanggota      = $_POST['idanggota'];
        $idbuku         = $_POST['idbuku'];
        $tglpinjam      = $_POST['tgl_peminjaman'];

        $result = mysqli_query($conn, "INSERT INTO tbtransaksi(idtransaksi,idanggota,idbuku,tgl_peminjaman)
                                VALUES ('$id','$idanggota','$idbuku','$tglpinjam')");
        if($result > 0){
            echo '
                <script>alert("Data Berhasil Ditambahkan");
                document.location.href="transaksiPeminjaman.php";
                </script>
            ';
        }else{
            echo '
                <script>alert("Data Gagal Ditambahkan");
                document.location.href="transaksiPeminjaman.php";
                </script>
            ';
        }
    }