<?php
include_once './controller.php';
class CheckSignUp extends Controller
{
    public function getParams()
    {
        $this->lastname = isset($_REQUEST['lastname']) ? $_REQUEST['lastname'] : false;
        $this->username = isset($_REQUEST['username']) ? $_REQUEST['username'] : false;
        $this->password = isset($_REQUEST['password']) ? $_REQUEST['password'] : false;
        $this->password_repeat = isset($_REQUEST['password-repeat']) ? $_REQUEST['password-repeat'] : false;
    }
    public function doModel()
    {

        $account = $this->BO->doCheckSignUp($this->lastname, $this->username, $this->password, $this->password_repeat);
        if ($account) {
            $this->setAuthor($account);
            $this->redirect("search-result");
        } else {
            $this->redirect("sign-up");
        }
    }
}
new CheckSignUp();
