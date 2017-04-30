<?php
/**
 * Created by PhpStorm.
 * User: sandro
 * Date: 30/04/2017
 * Time: 13:10
 */
require_once('config/config.php');

if (isset($_POST['name']) and isset($_POST['email'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $login = new User();
    $login->login($name, $email);
}

header('Location:index.php');