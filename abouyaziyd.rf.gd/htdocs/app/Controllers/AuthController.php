<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class AuthController extends BaseController
{
    public function login()
    {
        $data['title'] = lang('app.login');

        if (session('isLoggedIn') == true) {
            return redirect()->to('user');
        } else {
            helper('form');
            return view('auth/login', $data);
        }
    }

    // public function auth()
    // {
    //     $session = session();
    //     $user = new User();

    //     // dd($this->request->getVar());
    //     $iqama = $this->request->getVar('iqama');
    //     $password = $this->request->getVar('password');
    //     $data = $user->where('iqama =', $iqama)->first();

    //     // dd($data);
    //     if ($data) {
    //         $pass = $data['password'];
    //         $auth = password_verify($password, $pass);

    //         // dd($auth);
    //         if ($auth) {
    //             $sessData = [
    //                 'id' => $data['id'],
    //                 'name' => $data['name'],
    //                 'malaf' =>sprintf('%04s', ($data['malaf']!=1111?$data['malaf']:'----')),
    //                 'bitaqa' => $data['bitaqa'],
    //                 'role' => $data['role'],
    //                 'isLoggedIn' => TRUE
    //             ];
    //             $session->set($sessData);
    //             return redirect()->to('/user');
    //         }else {
    //             return redirect()->to('login')->with('password', lang('app.wrongPassword'));
    //         }
    //     }else {
    //         return redirect()->to('login')->with('iqama', lang('app.notSigned'));
    //     }
    // }

    // public function logout()
    // {
    //     $session = session();
    //     $session->destroy();
    //     return redirect()->to('/');
    // }

    // public function recover()
    // {
    //     helper('form');
    //     $data['title'] = lang('app.recoverpassword');

    //     return view('auth/forgot', $data);
    // }

    // public function password()
    // {
    //     helper('form');
    //     $user = new User();

    //     // dd($this->request->getVar());
    //     $malaf = $this->request->getVar('malaf');
    //     $iqama = $this->request->getVar('iqama');
    //     $phone = $this->request->getVar('phone');
    //     $data = $user->where('malaf', $malaf)->first();
    //     // dd($data);

    //     if ($data > 0) {
    //         if (!($iqama == $data['iqama'] && $phone == $data['phone'])) {
    //             return redirect()->to('recover')->with('type', 'error')->with('title', lang('app.incorrect'))->with('text', lang('app.iqama').'/'. lang('app.phone'));
    //         } else {
    //             $user = new User();
    //             $id = $data['id'];

    //             $data = [
    //                 'password' => password_hash($iqama, PASSWORD_DEFAULT),
    //             ];

    //             $ok = $user->update($id, $data);

    //             if ($ok) {
    //                 return redirect()->to('login')->with('type', 'success')->with('text', lang('app.passchanged'))->with('title', lang('app.ok'));
    //             }
    //         }
    //     }else {        
    //         return redirect()->to('recover')->with('type', 'error')->with('text', lang('app.notFoundIdentity'))->with('title', lang('app.sorry'));
    //     }
    // }

    // public function pass()
    // {
    //     helper('form');
    //     $user = new User();

    //     $data['title'] = lang('app.recoverpassword');
        
    //     $role = $user->find(session('id'));
    //     $auth = password_verify('1234567890', $role['password']);
    //     ($auth?$data['old'] = '1234567890':$data['old'] = null);

    //     if (!$auth) {
    //         return view('auth/change', $data);
    //     } else {
    //         // dd($auth);
    //         return view('auth/change', $data);
    //     }
        

    // }

    // public function change($id)
    // {
    //     helper('form');
    //     $input = $this->validate(
    //         [   //Rules
    //             'old' => 'required',
    //             'new' => 'required|min_length[8]',
    //         ],
    //         [   // Errors
    //             'old' => [
    //                 'required' => lang('error.required'),
    //             ],
    //             'new' => [
    //                 'required' => lang('error.required'),
    //                 'min_length' => lang('error.min_length'),
    //             ],
    //         ]
    //     );

    //     $user = new User();

    //     $old = $this->request->getVar('old');
    //     $new = $this->request->getVar('new');

    //     $role = $user->find($id);
    //     $pass = $role['password'];
    //     $auth = password_verify($old, $pass);
    //     // dd($auth); 

    //     if (!$input) {
    //         $data['title'] = lang('app.passchange');
    //         // $data['old'] = null;
    //         $auth = password_verify('1234567890', $role['password']);
    //         (!$auth?$data['old'] = null:$data['old'] = '1234567890');
    //         $data['validation'] = $this->validator;
    //         echo view('auth/change', $data);
    //     } elseif (!$auth) {
    //         $data['title'] = lang('app.recoverpassword');
    //         return redirect()->to('change/password')->with('title', lang('app.notokoldpass'))->with('type', 'error');
    //     } else {
    //         $data = [
    //             'password' => password_hash($new, PASSWORD_DEFAULT)
    //         ];

    //         // dd($data); 
    //         $ok = $user->update($id, $data);

    //         if ($ok) {
    //             session()->destroy();
    //             return redirect()->to('login')->with('type', 'success')->with('title', lang('app.ok'))->with('text', lang('app.passchanged'));
    //         } else {
    //             return redirect()->to('password/change')->with('toast', 'danger')->with('message', lang('app.errorOccured'));
    //         }
    //     }
    // }
}
