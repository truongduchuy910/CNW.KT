<?php
include_once './controller.php';
class Update extends Controller
{
    function render()
    {
        $author = $this->getAuthor();
        include_once '../view/search-result.html';
    }
}
new Update();
