<?php
   $host = 'localhost:3315';
   $user = 'root';
   $password = '';
   $db = "modul3wad_fachri";

   $db = mysqli_connect($host, $user, $password, $db);

   if (!$db){
      die("koneksi gagal".mysqli_connect_error());
   }
?>