<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Category;
use App\Models\Project;

class ProductController extends BaseController
{
    public function index()
    {
        $pr = new Project();

        $data['title'] = lang('app.products');
        $data['pr'] = $pr->findAll();
        dd($data);

        return view('product/index', $data);
    }

    public function add()
    {
        helper('form');
        
        $cat = new Category();

        $data['title'] = lang('app.products');
        $data['cat'] = $cat->findAll();
        // dd($data);

        return view('product/add', $data);
    }

    public function create()
    {
        helper('form');

        $pr = new Project();
        $featured = $pr->where('featured>',0)->countAllResults();
        // dd($featured);
        // dd($this->request->getVar());
        // dd(!empty($_FILES['pr_img']['name']));
        $valid = $this->validate(
            [
                'pr_img' => 'mime_in[img,image/jpg,image/jpeg,image/png]|max_size[pr_img,2048]',
                'name' => 'required|is_unique[categories.name]',
                'cat_id' => 'required',
            ],
            [   // Errors
                'pr_img' => [
                    'mime_in' => lang('error.mime'),
                    'max_size' => lang('error.max_size'),
                ],
                'name' => [
                    'required' => lang('error.required'),
                    'is_unique' => lang('error.is_unique'),
                ],
                'cat_id' => [
                    'required' => lang('error.required'),
                ],
            ]);

        $plc = 'assets/images/products/';
        $loc = 'assets/images/product-1.jpg';
        // dd($valid);
        
        if (!$valid) {

            $data['title'] = lang('app.categories');
            $data['errors'] = $this->validator->getErrors();
            // dd($data);

            return redirect()->back()->with('icon', 'error')->with('title', $data['errors']);
        }

        if (!empty($_FILES['pr_img']['name'])) {
            $img = $this->request->getFile('pr_img');
            $ext = $img->getClientExtension();
            $name = date('ymdHis') . '.' . $ext;
            $loc = $plc.date('ymdHis') . '.' . $ext;
            // dd($name);

            $img->move($plc, $name);
        }

        $d = [
            'cat_id' => $this->request->getVar('cat_id'),
            'price' => $this->request->getVar('price'),
            'name' => $this->request->getVar('name'),
            'measure' => '@'.($this->request->getVar('measure')??'Kg'),
            'pr_img' => $loc,
            'featured' => ($featured<8?$featured+1:0),
        ];
        // dd($d);

        $pr->save($d);

        return redirect()->to('product')->with('toast', 'success')->with('title', lang('app.done'))->with('text', lang('app.successfully'));
    }
    
    public function show($id)
    {
        helper('form');

        $cat = new Category();
        $pr = new Project();

        $data['title'] = lang('app.categories');
        $data['cat'] = $cat->findAll();
        $data['pr'] = $pr->find($id);
        // dd($data);

        return view('product/show', $data);
    }

    public function edit($id)
    {
        helper('form');

        $pr = new Project();

        $product = $pr->find($id);
        // dd($this->request->getVar());
        // dd(!empty($_FILES['pr_img']['name']));
        $valid = $this->validate(
            [
                'pr_img' => 'mime_in[img,image/jpg,image/jpeg,image/png]|max_size[pr_img,2048]',
                'name' => 'required',
            ],
            [   // Errors
                'pr_img' => [
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
        // Where to save the Image
        $plc = 'assets/images/product/';
        // Default Image if Image is not Set!
        $loc = 'assets/images/product-1.jpg';

        // Featured
        $fe = $this->request->getVar('featured');
        if ($fe!=$product['featured'] && $fe!=0) {
            $ch = $pr->where('featured', $fe)->first();
            if ($ch) {
                $f = ['featured' => 0];

                $pr->update($ch['id'],$f);
            }
        }

        if (!empty($_FILES['pr_img']['name'])) {
            // dd(file_exists($product['pr_img']));
            if (file_exists($product['pr_img'])) {

                unlink($product['pr_img']);

                $img = $this->request->getFile('pr_img');
                $ext = $img->getClientExtension();
                $name = date('ymdHis') . $id . '.' . $ext;
                $loc = $plc.date('ymdHis') . $id . '.' . $ext;
                // dd($loc);

                $img->move($plc, $name);
            } else {
                $img = $this->request->getFile('pr_img');
                $ext = $img->getClientExtension();
                $name = date('ymdHis') . $id . '.' . $ext;
                $loc = $plc.date('ymdHis') . $id . '.' . $ext;
                // dd($name);

                $img->move($plc, $name);
            }
        }

        $d = [
            'cat_id' => $this->request->getVar('cat_id'),
            'price' => $this->request->getVar('price'),
            'name' => $this->request->getVar('name'),
            'measure' => $this->request->getVar('measure')??'@Kg',
            'pr_img' => $loc,
            'featured' => $fe,
        ];
        // dd($d);

        $pr->update($id, $d);

        return redirect()->to('product')->with('toast', 'success')->with('title', lang('app.done'))->with('text', lang('app.successfully'));
    }

    public function delete($id)
    {
        $pr = new Project();

        $pr->delete($id);
        
        return redirect()->to('product')->with('toast', 'success')->with('title', lang('app.done'))->with('text', lang('app.successfully'));
    }
}
