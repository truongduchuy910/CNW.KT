<?php
include_once './controller.php';
class Update extends Controller
{
    public function getParams()
    {
        $this->username = isset($_REQUEST['username']) ? $_REQUEST['username'] : false;
    }
    function doModel()
    {
        $this->account = $this->BO->getAccount($this->username);
    }
    function render()
    {
        $author = $this->getAuthor();
        $account = $this->account;
        include_once '../view/update.html';
    }
}
new Update();
