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

    public function page()
    {
        $cat = new Category();
        $drs = new Duroos();

        $data['title'] = lang('app.duroos');
        $data['cat'] = $cat->where('type', 'duroos')->findAll();
        $data['drs_type'] = $drs->select('type')->distinct()->findAll();
        $data['drs'] = $drs;
        // dd($data);

        return view('duroos/page', $data);
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

    public function type($type)
    {
        $drs = new Duroos();

        $data['title'] = lang('app.duroos');
        $data['drs'] = $drs;
        $data['type'] = $type;
        $data['duroos'] = $drs->where('type', $type)->findAll();
        // dd($data);

        return view('duroos/type', $data);
    }

    public function edit($id)
    {
        helper('form');

        $drs = new Duroos();

        $data['title'] = lang('app.duroos');
        $data['drs'] = $drs;
        $data['type'] = $drs->select('type')->distinct()->findAll();
        $data['darsa'] = $drs->find($id);
        // dd($data);

        return view('duroos/edit', $data);
    }
}
