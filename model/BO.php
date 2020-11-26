<?php
class BO
{
    function doCheckSignIn($username, $password)
    {
        if ($username && $password) return new Account("huy", "123", "asf", "asdf");
    }
    function doSearch()
    {
        return [
            new Account("1", "2", "2", "4"),
            new Account("1", "2", "2", "4"),
            new Account("1", "2", "2", "4"),
            new Account("1", "2", "2", "4"),
            new Account("1", "2", "2", "4")
        ];
    }
}
