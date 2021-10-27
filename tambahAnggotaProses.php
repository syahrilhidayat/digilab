<?php
    include 'koneksi.php';
    if(isset($_POST['submit'])){
        
        $id     = $_POST['idanggota'];
        $nama   = $_POST['nama'];
        $jk     = $_POST['jeniskelamin'];
        $alamat = $_POST['alamat'];
        $status = 'Tidak Meminjam';

        $result = mysqli_query($conn,"INSERT INTO tbanggota(idanggota,nama,jeniskelamin,alamat,status)
                        VALUES('$id','$nama','$jk','$alamat','$status')");
        if($result > 0){
            echo '
                <script>alert("Data Berhasil Ditambahkan");
                document.location.href="dataAnggota.php";
                </script>
            ';
        }else{
            echo '
                <script>alert("Data Gagal Ditambahkan");
                document.location.href="dataAnggota.php";
                </script>
            ';
        }
    }