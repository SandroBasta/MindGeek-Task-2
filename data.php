<?php
/**
 * Created by PhpStorm.
 * User: sandr
 * Date: 30.4.2017.
 * Time: 18.26
 * 
 */
require_once('config/config.php');
$get = new Chat();
?>
<div class="panel-body chat-box-main">
      <?php foreach ($get->get_messages() as $msg ):?>
    <div class="chat-box-left">

        <?php echo $msg['text'];?>
    </div>
    <div class="chat-box-name-left">
        <img src="image/avatar.png" class="img-circle">
        -  <?php echo $msg['name']; ?> - <span ><?php echo date('g:i a', strtotime($msg['date'])); ?></span>
    </div>
<?php endforeach;?>
</div>