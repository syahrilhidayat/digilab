<?php

    // var_dump($_POST);

    include 'koneksi.php';
    if(isset($_POST['submit'])){
        
    $id             =   $_POST['idbuku'];
    $judul          =   $_POST['judul'];
    $kategori       =   $_POST['kategori'];
    $pengarang      =   $_POST['pengarang'];
    $penerbit       =   $_POST['penerbit'];

        

        $result = mysqli_query($conn, "UPDATE tbbuku SET  
                                judul               = '$judul', 
                                kategori            = '$kategori',
                                pengarang           = '$pengarang',    
                                penerbit            = '$penerbit'    
                                WHERE idbuku = '$id' ");

        
        
        if($result > 0){
            echo '
                <script>alert("Data Berhasil DiUpdate");
                document.location.href="databuku.php";
                </script>
            ';
        }else{
            echo '
                <script>alert("Data Gagal DiUpdate");
                document.location.href="databuku.php";
                </script>
            ';
        }
    }
    
