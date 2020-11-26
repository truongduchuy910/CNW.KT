<?php
include_once './controller.php';
class DeleteAccount extends Controller
{
    public function getParams()
    {
        $this->username = isset($_REQUEST['username']) ? $_REQUEST['username'] : false;
    }
    public function doModel()
    {

        $this->BO->doDeleteAccount($this->username);
        $this->redirect("search-result");
    }
}
new DeleteAccount();
