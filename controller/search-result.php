<?php
include_once './controller.php';
class SearchResult extends Controller
{
    public $accounts;
    function getParams()
    {
        $this->keyword = isset($_REQUEST['keyword']) ? $_REQUEST['keyword'] : null;
    }
    function doModel()
    {
        $this->accounts = $this->BO->doSearch($this->keyword);
    }
    function render()
    {
        $author = $this->getAuthor();
        $accounts = $this->accounts;
        include_once '../view/search-result.html';
    }
}
new SearchResult();
