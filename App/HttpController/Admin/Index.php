<?php


namespace App\HttpController\Admin;


class Index extends Base
{
    function login()
    {
        $this->display('login.html');
    }

    function index()
    {
        $this->display('index.html');
    }
}