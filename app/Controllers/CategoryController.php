<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Category;

class CategoryController extends BaseController
{
    public function index()
    {
        $cat = new Category();

        $data['title'] = lang('app.categories');
        $data['cat'] = $cat->findAll();
        // dd($data);

        return view('cat/index', $data);
    }

    public function add()
    {
        helper('form');

        $data['title'] = lang('app.categories');

        return view('cat/add', $data);
    }

    public function create()
    {
        // dd($this->request->getVar());

        helper('form');

        $cat = new Category();
        
        $valid = $this->validate(
            [
                'name' => 'required|is_unique[categories.name]',
            ],
            [   // Errors
                'name' => [
                    'required' => lang('error.required'),
                    'is_unique' => lang('error.is_unique'),
                ],
            ]
        );
        // dd($valid);
        
        if (!$valid) {

            $data['title'] = lang('app.categories');
            $data['errors'] = $this->validator->getErrors();
            // dd($data);

            return redirect()->back()->with('icon', 'error')->with('title', $data['errors']);
        }

        $d = [
            'name' => $this->request->getVar('name'),
            'info' => $this->request->getVar('info'),
        ];
        // dd($d);

        $cat->save($d);

        return redirect()->to('cat')->with('toast', 'success')->with('title', lang('app.done'))->with('text', lang('app.successfully'));
    }
    
    public function show($id)
    {
        helper('form');

        $cat = new Category();

        $data['title'] = lang('app.categories');
        $data['cat'] = $cat->find($id);
        // dd($data);

        return view('cat/show', $data);
    }

    public function edit($id)
    {
        // dd($this->request->getVar());

        helper('form');

        $cat = new Category();

        $category = $cat->find($id);
        
        $valid = $this->validate(
            [
                'name' => 'required',
            ],
            [   // Errors
                'name' => [
                    'required' => lang('error.required'),
                ],
            ]
        );
        // dd($valid);

        if (!$valid) {

            $data['title'] = lang('app.categories');
            $data['errors'] = $this->validator->getErrors();
            // dd($data);

            return redirect()->back()->with('icon', 'error')->with('title', $data['errors']);
        }

        $d = [
            'name' => $this->request->getVar('name'),
            'info' => $this->request->getVar('info'),
        ];
        // dd($d);

        $cat->update($id, $d);

        return redirect()->to('cat')->with('toast', 'success')->with('title', lang('app.done'))->with('text', lang('app.successfully'));
    }

    public function delete($id)
    {
        $cat = new Category();

        $cat->delete($id);
        
        return redirect()->to('cat')->with('toast', 'success')->with('title', lang('app.done'))->with('text', lang('app.successfully'));
    }
}
