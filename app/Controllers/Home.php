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
        helper('form');

        $cat = new Category();

        $data['title'] = lang('app.welcome');
        $data['cat'] = $cat->findAll();
        // dd($data);

        return view('home/contact', $data);
    }

    public function admin()
    {
        // dd('link to Admin Panel');
        return redirect()->to('http://localhost/admin');
        // return redirect()->to('http://admin.abouyaziyd.rf.gd');
    }

    public function about()
    {
        $data['title'] = lang('app.about');
        // dd($data);

        return view('home/about', $data);
    }

    public function privacy()
    {
        $data['title'] = lang('app.privacy');
        // dd($data);

        return view('home/privacy', $data);
    }

    public function terms()
    {
        $data['title'] = lang('app.terms');
        // dd($data);

        return view('home/terms', $data);
    }
    
    public function projects()
    {
        $pr = new Project();
        $cat = new Category();

        $data['title'] = lang('app.projects');
        $data['cat'] = $cat->findAll();
        $data['c'] = $cat;
        // dd($data);

        return view('home/category', $data);
    }
    
    public function project($id)
    {
        $pr = new Project();
        $cat = new Category();

        $data['title'] = lang('app.projects');
        $data['cat'] = $cat->find($id);
        $data['pr'] = $pr->where('cat_id', $id)->findAll();
        // dd($data);

        return view('home/project', $data);
    }
    
    public function content($id)
    {
        $pr = new Project();
        $cat = new Category();

        $project = $pr->find($id);

        $data['title'] = lang('app.projects');
        $data['cat'] = $cat->find($project['cat_id']);
        $data['pr'] = $project;
        // dd($data);

        return view('home/content', $data);
    }
}
