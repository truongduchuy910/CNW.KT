<?php
include_once './controller.php';
class SearchResult extends Controller
{
    public $accounts;
    function doModel()
    {
        $this->accounts = $this->BO->doSearch();
    }
    function render()
    {
        $author = $this->getAuthor();
        $accounts = $this->accounts;
        include_once '../view/search-result.html';
    }
}
new SearchResult();
