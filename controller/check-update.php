<?php
include_once './controller.php';
class CheckSignUp extends Controller
{
    public function getParams()
    {
        $this->lastname = isset($_REQUEST['lastname']) ? $_REQUEST['lastname'] : false;
        $this->username = isset($_REQUEST['username']) ? $_REQUEST['username'] : false;
        $this->roles = isset($_REQUEST['roles']) ? $_REQUEST['roles'] : false;
    }
    public function doModel()
    {
        $this->BO->doUpdate($this->username, $this->lastname, $this->roles);
        $this->dispache("update", "username=" . $this->username);
    }
}
new CheckSignUp();
