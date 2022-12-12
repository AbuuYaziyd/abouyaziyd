<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        helper('form');

        return view('home/index');
        // return view('welcome');
    }

    public function contact()
    {
        dd($this->request->getVar());
    }
}
