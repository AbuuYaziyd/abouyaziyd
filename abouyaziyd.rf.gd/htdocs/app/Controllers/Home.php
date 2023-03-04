<?php

namespace App\Controllers;

use App\Models\Category;
use App\Models\Project;

class Home extends BaseController
{
    public function index()
    {
        helper('form');

        $cat = new Category();

        $data['title'] = lang('app.welcome');
        $data['cat'] = $cat->findAll();
        // dd($data);

        return view('home/index', $data);
    }

    public function contact()
    {
        dd($this->request->getVar());
    }
    
    public function projects($id)
    {
        $pr = new Project();
        $cat = new Category();

        $data['title'] = lang('app.projects');
        $data['cat'] = $cat->find($id);
        $data['pr'] = $pr->where('cat_id', $id)->findAll();
        // dd($data);

        return view('home/projects', $data);
    }
}
