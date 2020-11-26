<?php
include './controller.php';
class Search extends Controller
{
    function doModel()
    {
        $author = $this->getAuthor();
        if (!$author->username) $this->redirect("sign-in");
    }
    function render()
    {
        $author = $this->getAuthor();

        include_once '../view/search.html';
    }
}

new Search();
