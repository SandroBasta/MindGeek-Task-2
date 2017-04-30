<?php
/**
 * Created by PhpStorm.
 * User: sandro
 * Date: 29/04/2017
 * Time: 23:02
 * config file for autoload class
 *  config file, starting session, making autoload function for loading class, and define root path
 */
session_start();
define ('ROOT', dirname(dirname(__FILE__)));
spl_autoload_register(function ($class_name) {
    include ROOT.'/class/'.$class_name . '.php';
});
