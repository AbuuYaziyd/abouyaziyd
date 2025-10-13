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

    public function page()
    {
        $drs = new Duroos();

        $data['title'] = lang('app.duroos');
        $data['drs_type'] = $drs->select('type')->distinct()->findAll();
        $data['drs'] = $drs;
        // dd($data);

        return view('duroos/page', $data);
    }

    public function add($type)
    {
        helper('form');

        $drs = new Duroos();

        $data['title'] = lang('app.duroos');
        $data['types'] = $drs->select('type')->distinct()->findAll();
        $data['darsa'] = $drs->where('type', $type)->first();
        $data['type'] = $type;
        $data['drs'] = $drs;
        // dd($data);

        return view('duroos/add', $data);
    }

    public function create()
    {
        // dd($this->request->getVar());

        helper('form');

        $drs = new Duroos();

        $type = $this->request->getVar('type');
        // dd($type);

        $valid = $this->validate(
            [
                'name' => 'required|is_unique[duroos.name]',
                'link' => 'required',
            ],
            [   // Errors
                'name' => [
                    'required' => lang('error.required'),
                    'is_unique' => lang('error.is_unique'),
                ],
                'link' => [
                    'required' => lang('error.required'),
                ],
            ]
        );

        // dd($valid);
        if (!$valid) {
            $data['title'] = lang('app.duroos');
            $data['types'] = $drs->select('type')->distinct()->findAll();
            $data['darsa'] = $drs->where('type', $type)->first();
            $data['type'] = $type;
            $data['drs'] = $drs;
            $data['errors'] = $this->validator->getErrors();
            // dd($data);

            return view('duroos/add', $data);
        }


        $d = [
            'category_id' => $this->request->getVar('category_id'),
            'info' => $this->request->getVar('info'),
            'type' => $this->request->getVar('type'),
            'link' => $this->request->getVar('link'),
            'name' => $this->request->getVar('name'),
        ];
        // dd($d);

        $drs->save($d);

        return redirect()->to('duroos/type/' . $type)->with('toast', 'success')->with('title', lang('app.done'))->with('text', lang('app.successfully'));
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
