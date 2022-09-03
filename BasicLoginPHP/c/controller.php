<?php

    require_once("../m/Users.php");

    $account = new Users();

    if(isset($_POST['Login'])) {
        $password = sha1($_POST['Password']);
        $username = $_POST['User'];
        $account->LogIn($username,$password);
        }

    if(isset($_POST['Logout'])) {

    }

?>