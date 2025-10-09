<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Category;
use App\Models\Duroos;

class DuroosController extends BaseController
{
    public function index()
    {
        $cat = new Category();

        $data['title'] = lang('app.duroos');
        $data['cat'] = $cat->where('type', 'duroos')->findAll();
        $data['c'] = $cat;
        // dd($data);

        return view('duroos/index', $data);
    }

    public function show($id)
    {
        helper('form');

        $cat = new Category();
        $drs = new Duroos();

        $data['title'] = lang('app.project');
        $data['cat'] = $cat->findAll();
        $data['pr'] = $drs->find($id);
        // dd($data);
        
        return view('duroos/show', $data);
    }
}
