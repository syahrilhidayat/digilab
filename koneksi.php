<?php 
   $conn = mysqli_connect('localhost','root','','digilab');
      if(!$conn){
         echo "Koneksi Gagal , Silahkan periksa koneksi anda".mysqli_connect_error();
      }
?>