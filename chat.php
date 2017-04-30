<?php
/**
 * Created by PhpStorm.
 * User: sandro
 * Date: 30/04/2017
 * Time: 13:12
 */

require_once('config/config.php');

if (isset($_POST['id']) && !empty($_POST['msg'])) {
    $id= $_POST['id'];
    $msg= $_POST['msg'];
    //var_dump($msg);
     $chat = new Chat();
    $chat->insert_chat($id,$msg);

}
header('Location:index.php');