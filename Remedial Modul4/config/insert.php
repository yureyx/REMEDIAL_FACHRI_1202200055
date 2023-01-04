<?php

if(include("connector.php")) {
    $fileName = $_FILES['foto']['name'];
    $tmpName = $_FILES['foto']['tmp_name'];
    $dirTarget = "../assets/images/";
    $upload = move_uploaded_file($tmpName, $dirTarget.$fileName);

    if($upload) {
        $bike = $_POST['motor'];
        $ownr = $_POST['pemilik'];
        $merk = $_POST['merk'];
        $date = $_POST['date'];
        $desc = $_POST['deskripsi'];
        $imgs = $fileName;
        $paym = $_POST['pembayaran'];

        $query = "INSERT INTO showroom_fachri_table (nama_motor, pemilik_motor, merk_motor, tanggal_beli, deskripsi, foto_motor, status_pembayaran)
                    VALUE ('$bike', '$ownr', '$merk', '$date', '$desc', '$imgs', '$paym')";
        $insert = mysqli_query ($db, $query);

        if($insert) {
            session_start();
            $_SESSION['msg'] = 'success';
            echo "<meta http-equiv='refresh' content='1 url=../pages/ListFachri.php'>";
        } else {
            session_start();
            $_SESSION['msg'] = 'failed';
            echo "<meta http-equiv='refresh' content='1 url=../pages/ListFachri.php'>";
        }
    } else {
        echo "Gagal upload gambar";
    }
} else {
    session_start();
    $_SESSION['msg'] = 'cfailed';
    echo "<meta http-equiv='refresh' content='1 url=../pages/ListFachri.php'>";
}

?>