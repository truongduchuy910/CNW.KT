<?php
// CONNECT DATABASE
include '../lib/database.php';
// INCLUDE MODE FUNCTION

include '../model/bean/account.php';
include '../model/BO.php';

class Controller
{
    public $BO;
    public function __construct()
    {
        $this->BO = new BO();
        session_start();
        $this->getAuthor();
        $this->getParams();
        $this->doModel();
        $this->render();
    }
    public function getAuthor()
    {
        $username  = isset($_SESSION['username']) ? $_SESSION['username'] : "";
        $roles = isset($_SESSION['roles']) ? $_SESSION['roles'] : "";
        $author = new Account($username, "", "", $roles);
        return $author;
    }
    public function setAuthor(Account $account)
    {
        $_SESSION['username'] = $account->username;
        $_SESSION['roles'] = $account->roles;
    }
    public function removeAuthor()
    {
        unset($_SESSION['username']);
        unset($_SESSION['roles']);
    }
    public function getParams()
    {
    }
    public function doModel()
    {
    }
    public function render()
    {

        include '../view/sign-in.html';
    }
    public function redirect($page)
    {
        header('location:/controller/' . $page . '.php');
    }
}
