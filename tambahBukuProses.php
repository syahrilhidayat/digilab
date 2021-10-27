<?php 

    include 'koneksi.php';

    if(isset($_POST['submit'])){

        $id             = $_POST['idbuku'];
        $judul          = $_POST['judul'];
        $kategori       = $_POST['kategori'];
        $pengarang      = $_POST['pengarang'];
        $penerbit       = $_POST['penerbit'];

        $result = mysqli_query($conn, "INSERT INTO tbbuku(idbuku, judul, kategori, pengarang, penerbit)
                                    VALUES('$id','$judul','$kategori','$pengarang','$penerbit')");
        if($result > 0){
            echo '
                <script>alert("Data Berhasil Ditambahkan");
                document.location.href="dataBuku.php";
                </script>
            ';
        }else{
            echo '
                <script>alert("Data Gagal Ditambahkan");
                document.location.href="dataBuku.php";
                </script>
            ';
        }
    }