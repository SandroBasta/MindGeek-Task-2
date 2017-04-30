<?php
/**
 * Created by PhpStorm.
 * User: sandro
 * Date: 29/04/2017
 * Time: 17:08
 */

require_once('config/config.php');
$get_users = new User();


if (isset($_POST['id']) && !empty($_POST['msg'])) {
    $id= $_POST['id'];
    $msg= $_POST['msg'];
    $chat = new Chat();
    $chat->insert_chat($id,$msg);

}
require_once('templates/head.php');
require_once('templates/body.php');
require_once('templates/footer.php');