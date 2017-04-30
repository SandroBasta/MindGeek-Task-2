<?php
/**
 * Created by PhpStorm.
 * User: sandro
 * Date: 30/04/2017
 * Time: 13:06
 * 
 */

require_once('config/config.php');

if (isset($_POST['hidden'])) {
     $hidden = $_POST['hidden'];
     $logout = new User();
     $logout->logout($hidden);
}

header('Location:index.php');
