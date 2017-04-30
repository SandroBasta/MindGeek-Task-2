<?php

/**
 * Created by PhpStorm.
 * User: sandro
 * Date: 30/04/2017
 * Time: 09:11
 * this is class for input and output msg from database
 */
class Chat
{
    


    public function get_messages()
    {


        $array = array();
        $db = Db::getInstance();
        $query = "SELECT * from chat.msg  INNER JOIN chat.users ON msg.user_id=users.id ORDER BY msg.id DESC ";
        if ($result = $db::query($query)) {
            while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
                $array[] = $row;
            }
        }
        return $array;



    }

    public function insert_chat($id, $msg)
    {
        $db = DB::getInstance();
        $db::insert_chat($id, $msg);
    }

}