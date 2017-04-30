<?php

/**
 * Created by PhpStorm.
 * User: sandro
 * Date: 29/04/2017
 * Time: 22:10
 * DB Class
 */
class Db
{
    static $_instance;
    private $_con;
    private $dbhost = "localhost";
    private $dbuser = "root";
    private $dbpass = "";
    private $dbname = "chat";

  private function __construct()
  {
      $this->_con= new PDO("mysql:$this->dbhost;dbname=$this->dbname",$this->dbuser,$this->dbpass);
      $this->_con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  }
    private function __clone(){}

    public static function getInstance() {
        if (!(self::$_instance instanceof self)) {
            self::$_instance = new self();
        }
        return self::$_instance;
    }

    public static function query($sql) {
        return self::$_instance->_con->query($sql);
    }

    public static function insert_user($name,$email) {
        $stm= self::$_instance->_con->prepare("INSERT Into chat.users (name,email) VALUES (:name,:email)");
        $stm->execute(array(
            ':email'=>$email,
            ':name'=>$name,
        ));
        $id = self::$_instance->_con->lastInsertId();
        $_SESSION['user'] = $name;
        $_SESSION['email'] = $email;
        $_SESSION['id']=$id;
    }
    public static function delete($hidden) {
        $stm= self::$_instance->_con->prepare("DELETE FROM chat.users WHERE email =  :email");
        $stm->bindParam(':email', $hidden);
        $stm->execute();
        unset($_SESSION['user']);
        unset($_SESSION['email']);
        unset($_SESSION['id']);
    }

    public static function insert_chat($id,$msg) {

        $stm= self::$_instance->_con->prepare("INSERT Into chat.msg (user_id,text) VALUES (:id,:msg)");

        $stm->execute(array(
            ':id'=>$id,
            ':msg'=>$msg,
        ));

    }
}
















