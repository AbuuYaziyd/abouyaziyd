<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Category;

class DuroosController extends BaseController
{
    public function index()
    {
        $cat = new Category();

        $data['title'] = lang('app.duroos');
        $data['cat'] = $cat->where('type', 'duroos')->findAll();
        $data['c'] = $cat;
        // dd($data);

        return view('home/duroos', $data);
    }
}
