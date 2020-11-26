<?php
class DAO
{
    public $connect;
    function __construct()
    {
        $this->connect = mysqli_connect("localhost", "root", "", "CNW.KT");
        if (mysqli_connect_errno()) {
            echo "Failed to connect to MySQL: " . mysqli_connect_error();
            exit();
        }
    }
}
