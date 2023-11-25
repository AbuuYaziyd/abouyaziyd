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
        helper('form');

        $cat = new Category();
        // dd($this->request->getVar());
        // dd(!empty($_FILES['cat_img']['name']));
        $valid = $this->validate(
            [
                'cat_img' => 'mime_in[cat_img,image/jpg,image/jpeg,image/png]|max_size[cat_img,2048]',
                'name' => 'required|is_unique[categories.name]',
            ],
            [   // Errors
                'cat_img' => [
                    'mime_in' => lang('error.mime'),
                    'max_size' => lang('error.max_size'),
                ],
                'name' => [
                    'required' => lang('error.required'),
                    'is_unique' => lang('error.is_unique'),
                ],
            ]);

        $plc = 'assets/img/category/';
        $loc = 'assets/demo/no-image.png';
        // dd($valid);
        
        if (!$valid) {

            $data['title'] = lang('app.categories');
            $data['errors'] = $this->validator->getErrors();
            // dd($data);

            return redirect()->back()->with('icon', 'error')->with('title', $data['errors']);
        }

        if (!empty($_FILES['cat_img']['name'])) {
            $img = $this->request->getFile('cat_img');
            $ext = $img->getClientExtension();
            $name = date('ymdHis') . '.' . $ext;
            $loc = $plc.date('ymdHis') . '.' . $ext;
            // dd($name);

            $img->move($plc, $name);
        }

        $d = [
            'name' => $this->request->getVar('name'),
            'info' => $this->request->getVar('info'),
            'cat_img' => $loc,
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
        helper('form');

        $cat = new Category();

        $category = $cat->find($id);
        // dd($this->request->getVar());
        // dd(!empty($_FILES['cat_img']['name']));
        $valid = $this->validate(
            [
                'cat_img' => 'mime_in[cat_img,image/jpg,image/jpeg,image/png]|max_size[cat_img,2048]',
                'name' => 'required',
            ],
            [   // Errors
                'cat_img' => [
                    'mime_in' => lang('error.mime'),
                    'max_size' => lang('error.max_size'),
                ],
                'name' => [
                    'required' => lang('error.required'),
                ],
            ]);

        // dd($valid);
        if (!$valid) {

            $data['title'] = lang('app.categories');
            $data['errors'] = $this->validator->getErrors();
            // dd($data);

            return redirect()->back()->with('icon', 'error')->with('title', $data['errors']);
        }
        
        $plc = 'assets/img/category/';
        $loc = $category['cat_img']??'assets/demo/no-image.png';

        if (!empty($_FILES['cat_img']['name'])) {
            // dd(file_exists($category['cat_img']));
            if (file_exists($category['cat_img'])) {

                unlink($category['cat_img']);

                $img = $this->request->getFile('cat_img');
                $ext = $img->getClientExtension();
                $name = date('ymdHis') . $id . '.' . $ext;
                $loc = $plc.date('ymdHis') . $id . '.' . $ext;
                // dd($loc);

                $img->move($plc, $name);
            } else {
                $img = $this->request->getFile('cat_img');
                $ext = $img->getClientExtension();
                $name = date('ymdHis') . $id . '.' . $ext;
                $loc = $plc.date('ymdHis') . $id . '.' . $ext;
                // dd($name);

                $img->move($plc, $name);
            }
        }

        $d = [
            'name' => $this->request->getVar('name'),
            'info' => $this->request->getVar('info'),
            'cat_img' => $loc,
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
