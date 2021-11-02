<?php 

    include 'koneksi.php';

    if(isset($_POST['username'])){
        $username       = $_POST['username'];
        $password       = $_POST['password'];

        $user = mysqli_query($conn,"select * from tbusers where username='$username' and password='$password'");
        $chek = mysqli_num_rows($user);
        if($chek>0)
        {
            session_start();
            $row = mysqli_fetch_array($user);
            $_SESSION['nama'] = $row['nama'];
            header("location:admin.php");
        }else
        {
            echo '
            <script>alert("Username atau Password Salah");
            document.location.href="index.php";
            </script>
        ';
        }
    }
 