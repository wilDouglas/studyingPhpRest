<?php
/**
 * Created by PhpStorm.
 * User: william
 * Date: 12/09/15
 * Time: 16:17
 */

class DataBaseFactory
{
    private static $instance;

    public function openConnection()
    {
        if(!isset(self::$instance)) {
            self::$instance = new PDO('mysql:host=localhost;dbname=mydatabase', 'root', 'root');
        }

        return self::$instance;
    }
}