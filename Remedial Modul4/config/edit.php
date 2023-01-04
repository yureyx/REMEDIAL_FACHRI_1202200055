<?php

include("connector.php");

$id = $_POST['id'];
$bike = $_POST['motor'];
$ownr = $_POST['pemilik'];
$merk = $_POST['merk'];
$date = $_POST['date'];
$desc = $_POST['deskripsi'];
$paym = $_POST['pembayaran'];


$fileName = $_FILES['foto']['name'];
$tmpName = $_FILES['foto']['tmp_name'];
$dirTarget = "../assets/images/";
$upload = move_uploaded_file($tmpName, $dirTarget.$fileName);

if($upload) {
    $sql = "UPDATE showroom_fachri_table
        SET nama_motor='$bike', pemilik_motor='$ownr', merk_motor='$merk', tanggal_beli='$date', deskripsi='$desc', foto_motor='$fileName', status_pembayaran='$paym' 
        WHERE id_motor=$id";
} else {
    $sql = "UPDATE showroom_fachri_table
        SET nama_motor='$bike', pemilik_motor='$ownr', merk_motor='$merk', tanggal_beli='$date', deskripsi='$desc', status_pembayaran='$paym' 
        WHERE id_motor=$id";
}

$update = mysqli_query($db, $sql);

if($update) {
    session_start();
    $_SESSION['msg'] = 'success';
    echo "<meta http-equiv='refresh' content='1 url=../pages/ListFachri.php'>";
} else {
    session_start();
    $_SESSION['msg'] = 'failed';
    echo "<meta http-equiv='refresh' content='1 url=../pages/ListFachri.php'>";
}
?>