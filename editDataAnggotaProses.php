<?php

    // var_dump($_POST);

    include 'koneksi.php';
    if(isset($_POST['submit'])){
        
        $id     = $_POST['idanggota'];
        $nama   = $_POST['nama'];
        $jk     = $_POST['jeniskelamin'];
        $alamat = $_POST['alamat'];
        $status = $_POST['status'];

        // var_dump($id,$nama,$jk,$alamat,$status);}
        

        $result = mysqli_query($conn, "UPDATE tbanggota SET 
                                nama            = '$nama', 
                                jeniskelamin    = '$jk', 
                                alamat          = '$alamat',
                                status          = '$status'    
                                WHERE idanggota = '$id' ");

        
        
        if($result > 0){
            echo '
                <script>alert("Data Berhasil DiUpdate");
                document.location.href="dataAnggota.php";
                </script>
            ';
        }else{
            echo '
                <script>alert("Data Gagal DiUpdate");
                document.location.href="dataAnggota.php";
                </script>
            ';
        }
    }