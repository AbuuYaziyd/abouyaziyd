<?php

namespace App\Controllers;

use App\Models\Category;

class Home extends BaseController
{
    public function index()
    {
        helper('form');

        $cat = new Category();

        $data['cat'] = $cat->findAll(6);
        // dd($data);

        return view('home/index', $data);
        // return view('welcome');
    }

    public function contact()
    {
        dd($this->request->getVar());
    }
}
