<?php
include './controller.php';
class SignIn extends Controller
{
    public function render()
    {
        include '../view/sign-in.html';
    }
}
new SignIn();
