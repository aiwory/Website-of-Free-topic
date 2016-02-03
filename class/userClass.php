<?php


/**
 * Created by PhpStorm.
 * User: Aigars
 * Date: 02.02.2016
 * Time: 12:28
 */
class userClass extends DB_Class
{
    function insertUser($username, $email, $password, $name, $surname, $gender){
        $sql = "INSERT INTO user(username, email, password, name, surname, gender) VALUES ('{$username}','{$email}','{$password}','{$name}','{$surname}','{$gender}')";
        $this->con->query($sql);

    }
}