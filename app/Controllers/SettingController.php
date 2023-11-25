<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Setting;

class SettingController extends BaseController
{
    public function index()
    {
        helper('form');

        $set = new Setting();
        
        $data['title'] = lang('app.settings');
        $data['corousel'] = $set->where('name', 'corousel')->findAll();
        $data['socials'] = $set->where('name', 'socials')->findAll();
        $data['service'] = $set->where('name', 'service')->findAll();
        $data['footer'] = $set->where('name', 'footer')->first();
        $data['partner'] = $set->where(['name' => 'partner', 'info' => null])->findAll();
        $data['bestPartner'] = $set->where(['name' => 'partner', 'info!=' => null])->findAll();
        // dd($data);

        return view('set/index', $data);
    }

    public function corousel($id)
    {
        helper('form');

        $set = new Setting();

        // dd(empty($_FILES['img']['name']));
        $valid = $this->validate(
            [
                'img' => 'mime_in[img,image/jpg,image/jpeg,image/png]|max_size[img,2048]',
                'title' => 'required',
                'info' => 'required',
            ],
            [   // Errors
                'img' => [
                    'mime_in' => lang('error.mime'),
                    'max_size' => lang('error.max_size'),
                ],
                'title' => [
                    'required' => lang('error.required'),
                ],
                'info' => [
                    'required' => lang('error.required'),
                ],
            ]);

        $corousel = $set->find($id);
        $loc = $corousel['img'];
        $plc = 'assets/images/corousel/';
        // dd($valid);
        
        if (!$valid) {

            $data['title'] = lang('app.settings');
            $data['corousel'] = $set->where('name', 'corousel')->findAll();
            $data['errors'] = $this->validator->getErrors();
            // dd($data);

            return redirect()->back()->with('icon', 'error')->with('title', $data['errors']);
        }

        if (!empty($_FILES['img']['name'])) {
            // dd(file_exists($corousel['img']));
            if (file_exists($corousel['img'])) {

                unlink($corousel['img']);

                $img = $this->request->getFile('img');
                $ext = $img->getClientExtension();
                $name = date('ymdHis') . $id . '.' . $ext;
                $loc = $plc.date('ymdHis') . $id . '.' . $ext;
                // dd($loc);

                $img->move($plc, $name);
            } else {
                $img = $this->request->getFile('img');
                $ext = $img->getClientExtension();
                $name = date('ymdHis') . $id . '.' . $ext;
                $loc = $plc.date('ymdHis') . $id . '.' . $ext;
                // dd($name);

                $img->move($plc, $name);
            }
        }

        $d = [
            'text' => $this->request->getVar('title'),
            'info' => $this->request->getVar('info'),
            'img' => $loc,
        ];
        // dd($d);

        $set->update($id, $d);

        return redirect()->to('set')->with('toast', 'success')->with('title', lang('app.done'))->with('text', lang('app.successfully'));
    }

    public function service($id)
    {
        $set = new Setting();

        // dd($this->request->getVar());
        $valid = $this->validate(
            [
                'title' => 'required',
                'info' => 'required',
            ],
            [   // Errors
                'title' => [
                    'required' => lang('error.required'),
                ],
                'info' => [
                    'required' => lang('error.required'),
                ],
            ]);

        // dd($valid);
        
        if (!$valid) {

            $data['title'] = lang('app.settings');
            $data['corousel'] = $set->where('name', 'corousel')->findAll();
            $data['errors'] = $this->validator->getErrors();
            // dd($data);

            return redirect()->back()->with('icon', 'error')->with('title', $data['errors']);
        }

        $d = [
            'text' => $this->request->getVar('title'),
            'info' => $this->request->getVar('info'),
        ];
        // dd($d);

        $set->update($id, $d);

        return redirect()->to('set')->with('toast', 'success')->with('title', lang('app.done'))->with('text', lang('app.successfully'));
    }

    public function partner($id)
    {
        helper('form');

        $set = new Setting();

        // dd($this->request->getVar());
        // dd(empty($_FILES['img']['name']));
        $valid = $this->validate(
            [
                'img' => 'mime_in[img,image/jpg,image/jpeg,image/png]|max_size[img,2048]',
                'text' => 'required',
                'link' => 'required',
            ],
            [   // Errors
                'img' => [
                    'mime_in' => lang('error.mime'),
                    'max_size' => lang('error.max_size'),
                ],
                'text' => [
                    'required' => lang('error.required'),
                ],
                'link' => [
                    'required' => lang('error.required'),
                ],
            ]);

        $corousel = $set->find($id);
        $loc = $corousel['img'];
        $plc = 'assets/images/partners/';
        // dd($valid);
        
        if (!$valid) {

            $data['title'] = lang('app.settings');
            $data['corousel'] = $set->where('name', 'corousel')->findAll();
            $data['errors'] = $this->validator->getErrors();
            // dd($data);

            return redirect()->back()->with('icon', 'error')->with('title', $data['errors']);
        }

        if (!empty($_FILES['img']['name'])) {
            // dd(file_exists($corousel['img']));
            if (file_exists($corousel['img'])) {

                unlink($corousel['img']);

                $img = $this->request->getFile('img');
                $ext = $img->getClientExtension();
                $name = date('ymdHis') . $id . '.' . $ext;
                $loc = $plc.date('ymdHis') . $id . '.' . $ext;
                // dd($loc);

                $img->move($plc, $name);
            } else {
                $img = $this->request->getFile('img');
                $ext = $img->getClientExtension();
                $name = date('ymdHis') . $id . '.' . $ext;
                $loc = $plc.date('ymdHis') . $id . '.' . $ext;
                // dd($name);

                $img->move($plc, $name);
            }
        }

        $d = [
            'text' => $this->request->getVar('text'),
            'link' => $this->request->getVar('link'),
            'img' => $loc,
        ];
        // dd($d);

        $set->update($id, $d);

        return redirect()->to('set')->with('toast', 'success')->with('title', lang('app.done'))->with('text', lang('app.successfully'));
    }
    
    public function infos($id)
    {
        $set = new Setting();

        // dd($this->request->getVar());
        $valid = $this->validate(
            [
                'text' => 'required',
                'info' => 'required',
                'link' => 'required',
                'button' => 'required',
                'img' => 'required',
            ],
            [   // Errors
                'text' => [
                    'required' => lang('error.required'),
                ],
                'info' => [
                    'required' => lang('error.required'),
                ],
                'link' => [
                    'required' => lang('error.required'),
                ],
                'button' => [
                    'required' => lang('error.required'),
                ],
                'img' => [
                    'required' => lang('error.required'),
                ],
            ]);

        // dd($valid);
        
        if (!$valid) {

            $data['title'] = lang('app.settings');
            $data['errors'] = $this->validator->getErrors();
            // dd($data);

            return redirect()->back()->with('icon', 'error')->with('title', $data['errors']);
        }

        $d = [
            'text' => $this->request->getVar('text'),
            'info' => $this->request->getVar('info'),
            'link' => $this->request->getVar('link'),
            'button' => $this->request->getVar('button'),
            'img' => $this->request->getVar('img'),
        ];
        // dd($d);

        $set->update($id, $d);

        return redirect()->to('set')->with('toast', 'success')->with('title', lang('app.done'))->with('text', lang('app.successfully'));
    }
    
    public function soci($id)
    {
        $set = new Setting();

        // dd($this->request->getVar());
        $valid = $this->validate(
            [
                'link' => 'required',
            ],
            [   // Errors
                'link' => [
                    'required' => lang('error.required'),
                ],
            ]);

        // dd($valid);
        
        if (!$valid) {

            $data['title'] = lang('app.settings');
            $data['errors'] = $this->validator->getErrors();
            // dd($data);

            return redirect()->back()->with('icon', 'error')->with('title', $data['errors']);
        }

        $d = [
            'link' => $this->request->getVar('link'),
        ];
        // dd($d);

        $set->update($id, $d);

        return redirect()->to('set')->with('toast', 'success')->with('title', lang('app.done'))->with('text', lang('app.successfully'));
    }
}
