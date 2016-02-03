<?php

/**
 * Created by PhpStorm.
 * User: Aigars
 * Date: 02.02.2016
 * Time: 11:59
 */
class DB_Class
{
    protected $server = "localhost";
    protected $dbuser = "root";
    protected $dbpw = "";
    protected $db = "planets";
    protected $con;

    function __construct() {

        $this->con = new mysqli($this->server,$this->dbuser,$this->dbpw, $this->db);
        $this->con->set_charset("utf8");
    }

}
