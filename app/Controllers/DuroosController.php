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

        $data['title'] = lang('app.duroos');
        $data['cat'] = $cat->find($id);
        $data['drs'] = $drs;
        $data['duroos'] = $drs->where('category_id', $id)->select('type')->distinct()->findAll();
        // dd($data);
        
        return view('duroos/show', $data);
    }

    public function view($id)
    {
        helper('form');

        $cat = new Category();
        $drs = new Duroos();

        $darsa = $drs->find($id);

        $data['title'] = lang('app.duroos');
        $data['cat'] = $cat->find($darsa['category_id']);
        $data['drs'] = $drs;
        $data['darsa'] = $darsa;
        // dd($data);

        return view('duroos/view', $data);
    }
}
