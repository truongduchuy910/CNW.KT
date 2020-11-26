<?php

class BO
{
    public $DAO;
    function __construct()
    {
        $this->DAO = new DAO();
    }
    function doCheckSignIn($username, $password)
    {
        if ($username && $password) {
            $result = $this->DAO->connect->query("select username, lastname, roles from account where username = '" . $username . "' and password = '" . $password . "'");
            if (mysqli_num_rows($result)) {
                $row = $result->fetch_row();
                return new Account($row[0], null, $row[1], $row[2]);
            } else return null;
        }
    }
    function getAccount($username)
    {
        if ($username) {
            $result = $this->DAO->connect->query("select username, lastname, roles from account where username = '" . $username . "'");
            if (mysqli_num_rows($result)) {
                $row = $result->fetch_row();
                return new Account($row[0], null, $row[1], $row[2]);
            } else return null;
        }
    }
    function doCheckSignUp($lastname, $username, $password, $password_repeat)
    {
        if ($lastname && $username && $password && $password == $password_repeat) {
            $sql = "INSERT INTO account(username, password, lastname, roles) VALUES ('" . $username . "','" . $password . "','" . $lastname . "','client')";
            $result = $this->DAO->connect->query($sql);
            if ($result)
                return $this->doCheckSignIn($username, $password);
            else return null;
        }
    }
    function doUpdate($username, $lastname, $roles)
    {
        if ($username) {
            $sql = "UPDATE account SET lastname='" . $lastname . "',roles='" . $roles . "' WHERE username='" . $username . "'";
            $this->DAO->connect->query($sql);
        }
    }
    function doDeleteAccount($username)
    {
        if ($username) {
            $sql = "DELETE FROM account WHERE username = '" . $username . "'";
            $this->DAO->connect->query($sql);
        }
    }
    function doSearch($keyword)
    {
        $result = $this->DAO->connect->query("select username, lastname, roles from account where lastname LIKE '%" . $keyword . "%'");
        $accounts = [];
        while ($row = $result->fetch_row()) {
            array_push($accounts, new Account($row[0], null, $row[1], $row[2]));
        }
        return $accounts;
    }
}
