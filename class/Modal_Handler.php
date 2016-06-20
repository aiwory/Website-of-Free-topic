<?php

/**
 * Created by PhpStorm.
 * User: Aigars
 * Date: 15.06.2016
 * Time: 21:21
 */

require_once './DB_Class.php';
require_once './userClass.php';
//$categoryID = $_POST['categoryID'];
//$categoryNew = $_POST['categoryNewValue'];
//$buttonType = $_POST['categoryButtomName'];

$buttonId = $_POST['modalButtonId'];


switch ($buttonId) {
    case 'reguser':
        $username = $_POST['modalUsername'];
        $email = $_POST['modalEmail'];
        $password = $_POST['modalPwd'];
        $name = $_POST['modalFname'];
        $surname = $_POST['modalLname'];
        $gender = $_POST['modalSex'];
        $user = new Userclass();
        //echo (string)$password;
        $user->insertUser($username,$email,$password,$name,$surname,$gender);
        break;
    case 'loguser':
        $email = $_POST['modalEmail'];
        $pwd = $_POST['modalPwd'];
        $user = new Userclass();
        $user->userLogin($email,$pwd);


        break;

    case 'exit-button':
        $user = new Userclass();
        $user->murderSession();

        break;
    default:
        # code...
        break;
}