<?php
include_once './controller.php';
class SignUp extends Controller
{
    function render()
    {
        include_once '../view/sign-up.html';
    }
}
new SignUp();
