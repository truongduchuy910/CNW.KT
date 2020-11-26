<?php
include './controller.php';
class CheckSignIn extends Controller
{
    public function doModel()
    {
        $this->removeAuthor();
        $this->redirect("sign-in");
    }
}
new CheckSignIn();
