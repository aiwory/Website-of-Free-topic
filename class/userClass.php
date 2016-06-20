<?php


/**
 * Created by PhpStorm.
 * User: Aigars
 * Date: 02.02.2016
 * Time: 12:28
 */
class userClass extends DB_Class
{

    var $username;
    var $email;
    var $password;
    var $name;
    var $surname;
    var $gender;
    var $hash;
    var $sessionStatus;

    function convertPassword($password){

        return password_hash((string)$password,PASSWORD_BCRYPT);
    }


    function checkUser($username, $email, $password, $name, $surname, $gender){
        $this->username = $this->con->real_escape_string($username);
        $this->email = $this->con->real_escape_string($email);
        $this->hash = $this->convertPassword($password);
        $this->name = $this->con->real_escape_string($name);
        $this->surname = $this->con->real_escape_string($surname);
        $this->gender = $this->con->real_escape_string($gender);
    }

    function insertUser($username, $email, $password, $name, $surname, $gender){

        $this->checkUser($username, $email, $password, $name, $surname, $gender);
        $sql = "INSERT INTO user(username, email, password, name, surname, gender) VALUES ('{$this->username}','{$this->email}','{$this->hash}','{$this->name}','{$this->surname}','{$this->gender}')";
        $this->con->query($sql);

    }


    function checkUserLogin($email, $password){
        $this->email = $this->con->real_escape_string($email);
        $this->password =$this->con->real_escape_string($password);

    }

    function userLogin($email, $password){
        $this->checkUserLogin($email, $password);
        $sql = "SELECT username, email, password, name, surname, gender FROM user WHERE email = '{$this->email}'";
        $result=$this->con->query($sql);
        while($row = mysqli_fetch_array($result)) {
            $this->hash = $row['password'];
            $this->username =$row['username'];
            $this->name =$row['name'];
            $this->surname =$row['surname'];
            $this->gender =$row['gender'];
            $this->password=$password;
        }
        if(!password_verify($this->password,$this->hash)) {
            echo '<div class="alert alert-danger">Nepareizs lietotājvārds vai parole!</div>';
            echo $this->email;
            echo$this->password;
            echo $this->hash;
        }
        else {
            //header("location:sakums.php");
            session_start();
            $_SESSION['username'] = $this->username;
            $_SESSION['name'] = $this->name;
            $_SESSION['surname'] = $this->surname;
            $_SESSION['gender'] = $this->gender;
        }
    }
    function sessionCheck(){
        session_start();
        if(!isset($_SESSION['username']))
        {
            session_destroy();
            $this->sessionStatus=false;
        }
        else $this->sessionStatus=true;
    }


    function getSessionStatus(){
        return $this->sessionStatus;
    }

    function murderSession(){
        session_start();
        session_destroy();
        $this->sessionStatus=false;

    }

}