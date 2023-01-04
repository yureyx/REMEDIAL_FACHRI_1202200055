<?php

if(include("connector.php")) {

    if(isset($_POST['submit']) ) {
        $email = $_POST['email'];
        $password = $_POST['password'];

        if(isset($_POST['submit'])) {
            session_start();
            $_SESSION['msg'] = 'success';
            echo "<meta http-equiv='refresh' content='1 url=../pages/HomeFachri.php'>";
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