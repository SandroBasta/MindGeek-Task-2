<?php

/**
 * Created by PhpStorm.
 * User: sandro
 * Date: 30/04/2017
 * Time: 09:05
 * Usew class
 */
class User
{

    public function login($name, $email)
    {
        $db = Db::getInstance();
        $db::insert_user($name, $email);
    }
    public function logout($hidden)
    {
        $db = Db::getInstance();
        $db::delete($hidden);
    }
    public function get_users()
    {
        $array = array();
        $db = Db::getInstance();

        $query = "SELECT * from  chat.users ";

        if ($result = $db::query($query)) {

            while ($row = $result->fetch(PDO::FETCH_ASSOC)) {

                $array[] = $row;
            }
        }
        return $array;

    }

}