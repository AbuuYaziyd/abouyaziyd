<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\User;

class UserController extends BaseController
{
    public function index()
    {
        $data['title'] = lang('app.dashboard');
        // dd($data);

        if (session('role') == 'admin') {
        //     return redirect()->to('admin');
        // } elseif(session('role') == 'admin') {
            return view('user/index', $data);
        }
    }

    public function profile()
    {
        $usr = new User();

        $data['title'] = lang('app.profile');
        $data['user'] = $usr->find(session('id'));
        // dd($data);

        return view('user/profile', $data);
    }
}
