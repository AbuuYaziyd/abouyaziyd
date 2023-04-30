<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Category;
use App\Models\Project;

class ProjectController extends BaseController
{
    public function index()
    {
        $pr = new Project();

        $data['title'] = lang('app.projects');
        $data['pr'] = $pr->findAll();
        // dd($data);

        return view('project/index', $data);
    }

    public function add()
    {
        helper('form');
        
        $cat = new Category();

        $data['title'] = lang('app.projects');
        $data['cat'] = $cat->findAll();
        // dd($data);

        return view('project/add', $data);
    }

    public function create()
    {
        helper('form');

        $pr = new Project();
        // dd($this->request->getVar());
        // dd(!empty($_FILES['pr_img']['name']));
        $valid = $this->validate(
            [
                'pr_img' => 'mime_in[pr_img,image/jpg,image/jpeg,image/png]|max_size[pr_img,2048]',
                'name' => 'required|is_unique[projects.name]',
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

        $plc = 'assets/img/project/';
        $loc = 'assets/demo/no-image.png';
        // dd($valid);
        
        if (!$valid) {

            $data['title'] = lang('app.projects');
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
            'info' => $this->request->getVar('info'),
            'status' => $this->request->getVar('status'),
            'link' => $this->request->getVar('link'),
            'name' => $this->request->getVar('name'),
            'pr_img' => $loc,
        ];
        // dd($d);

        $pr->save($d);

        return redirect()->to('project')->with('toast', 'success')->with('title', lang('app.done'))->with('text', lang('app.successfully'));
    }
    
    public function show($id)
    {
        helper('form');

        $cat = new Category();
        $pr = new Project();

        $data['title'] = lang('app.project');
        $data['cat'] = $cat->findAll();
        $data['pr'] = $pr->find($id);
        // dd($data);

        return view('project/show', $data);
    }

    public function edit($id)
    {
        helper('form');

        $pr = new Project();

        $project = $pr->find($id);
        // dd($this->request->getVar());
        // dd(!empty($_FILES['pr_img']['name']));
        $valid = $this->validate(
            [
                'pr_img' => 'mime_in[pr_img,image/jpg,image/jpeg,image/png]|max_size[pr_img,2048]',
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

            $data['title'] = lang('app.projects');
            $data['errors'] = $this->validator->getErrors();
            // dd($data);

            return redirect()->back()->with('icon', 'error')->with('title', $data['errors']);
        }
        
        $plc = 'assets/img/project/';
        $loc = $project['pr_img']??'assets/demo/no-image.png';

        if (!empty($_FILES['pr_img']['name'])) {
            // dd(file_exists($project['pr_img']));
            if (file_exists($project['pr_img'])) {

                unlink($project['pr_img']);

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
            'info' => $this->request->getVar('info'),
            'status' => $this->request->getVar('status'),
            'link' => $this->request->getVar('link'),
            'name' => $this->request->getVar('name'),
            'pr_img' => $loc,
        ];
        // dd($d);

        $pr->update($id, $d);

        return redirect()->to('project')->with('toast', 'success')->with('title', lang('app.done'))->with('text', lang('app.successfully'));
    }

    public function delete($id)
    {
        $pr = new Project();

        $pr->delete($id);
        
        return redirect()->to('project')->with('toast', 'success')->with('title', lang('app.done'))->with('text', lang('app.successfully'));
    }
}
