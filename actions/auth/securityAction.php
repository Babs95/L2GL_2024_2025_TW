<?php
session_start(); // Démarrer une nouvelle session ou reprendre une session existante
if(!isset($_SESSION['isLogin']) && !isset($login)){
    header('location: ../../views/auth/login.php');
}
