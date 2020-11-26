<?php
class Account
{
    public $username;
    public $password;
    public $lastname;
    public $roles;
    function __construct($username, $password, $lastname, $roles)
    {
        $this->username = $username;
        $this->password = $password;
        $this->lastname = $lastname;
        $this->roles = $roles;
    }
}
