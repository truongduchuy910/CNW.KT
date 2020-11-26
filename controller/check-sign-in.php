<?php
include './controller.php';
class CheckSignIn extends Controller
{
    public function getParams()
    {
        $this->username = isset($_REQUEST['username']) ? $_REQUEST['username'] : false;
        $this->password = isset($_REQUEST['password']) ? $_REQUEST['password'] : false;
    }
    public function doModel()
    {
        $account = $this->BO->doCheckSignIn($this->username, $this->password);
        if ($account) {
            $this->setAuthor($account);
            $this->redirect("search");
        };
    }
    function render()
    {
        include '../view/check-sign-in.html';
    }
}
new CheckSignIn();
