<?php

if(isset($_POST['send'])) {
    if(!empty($_POST['email']) && !empty($_POST['password'])) {
        $email = $_POST['email'];
        $password = $_POST['password'];
        session_start();
        $_SESSION['isLogin'] = true;
        header('location: ../../index.php');
    } else $errorMessage = 'Veuillez remplir le formulaire';
}
