<?php

if(include("connector.php")) {

    if(isset($_POST['submit']) ) {
        $nama = $_POST['nama'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $nohp = $_POST['nohp'];

        $query = "INSERT INTO users (nama, email, password, nohp) 
                    VALUE ('$nama', '$email', '$password', '$nohp')";
        $insert = mysqli_query ($db, $query);

        if($insert) {
            session_start();
            $_SESSION['msg'] = 'success';
            echo "<meta http-equiv='refresh' content='1 url=../pages/LoginFachri.php'>";
        } else {
            session_start();
            $_SESSION['msg'] = 'failed';
            echo "<meta http-equiv='refresh' content='1 url=../pages/LoginFachri.php'>";
        }
    } else {
        echo "";
    }
} else {
    session_start();
    $_SESSION['msg'] = 'cfailed';
    echo "<meta http-equiv='refresh' content='1 url=../pages/LoginFachri.php'>";
}

?>