<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\User;

class AuthController extends BaseController
{
    public function register()
    {
        helper('form');
        

        $data['title'] = lang('app.signup');

        return view('auth/register',$data);
    }

    public function reg()
    {
        if (session()->role == 'admin') {
            helper('form');

            $data['title'] = lang('app.signup');

            return view('auth/reg', $data);
        } else {
            return redirect('/');
        }
        
    }

    public function secure()
    {
        dd($this->request->getVar());

        helper('form');

        $input = $this->validate(
            [   //Rules
                'name' => 'required|min_length[3]',
                'lname' => 'required|min_length[3]',
                'email' => 'required|valid_email|is_unique[users.email]',
                'malaf' => 'required|is_unique[users.malaf]',
                'nameArabic' => 'required',
                'phone' => 'required|exact_length[12]|is_unique[users.phone]',
                'sex' => 'required',
                'dob' => 'required',
                'city' => 'required',
            ],
            [   // Errors
                'name' =>
                [
                    'required' => lang('error.required'),
                    'min_length' => lang('error.min_length'),
                ],
                'lname' =>
                [
                    'required' => lang('error.required'),
                    'min_length' => lang('error.min_length'),
                ],
                'email' => [
                    'required' => lang('error.required'),
                    'valid_email' => lang('error.valid_email'),
                    'is_unique' => lang('error.is_unique'),
                ],
                'malaf' => [
                    'required' => lang('error.required'),
                    'is_unique' => lang('error.is_unique'),
                ],
                'nameArabic' => [
                    'required' => lang('error.required'),
                ],
                'phone' => [
                    'required' => lang('error.required'),
                    'exact_length' => lang('error.exact_length'),
                ],
                'sex' => [
                    'required' => lang('error.required'),
                ],
                'dob' => [
                    'required' => lang('error.required'),
                ],
                'city' => [
                    'required' => lang('error.required'),
                ],
            ]
        );

        if (!$input) {
            $data['title'] = lang('app.register');
            $data['validation'] = $this->validator;
            echo view('auth/register', $data);
        } else {

            $user = new User();

            $data = [
                'name'       => strtoupper($this->request->getVar('name')),
                'lname'      => strtoupper($this->request->getVar('lname')),
                'email'      => $this->request->getVar('email'),
                'password'   => password_hash(strtoupper($this->request->getVar('lname')), PASSWORD_DEFAULT),
                'nameArabic' => $this->request->getVar('nameArabic'),
                'city'       => $this->request->getVar('city'),
                'malaf'      => $this->request->getVar('malaf'),//4mula
                'phone'      => $this->request->getVar('phone'),
                'sex'        => $this->request->getVar('sex'),
                'dob'        => $this->request->getVar('dob'),
                'role'       => 'user',
                'fn'         => 'student',
            ];

            // dd($data);
            $ok = $user->save($data);

            if ($ok) {
                $to = $this->request->getVar('email');
                $subject = lang('app.welcome');
                // $message = 'message';
                $data['title'] = lang('app.welcome');
                $message = view("email", $data);
                // $data['id'] = $user->getInsertID();
                // dd($data);
                // return view('email', $data);

                $email = \Config\Services::email();

                $email->setTo($to);
                $email->setFrom('markazomaribnkhattwab@gmail.com', lang('app.appName'));
                $email->setSubject($subject);
                $email->setMessage($message);

                if ($email->send()) {
                return redirect()->to('login')->with('type', 'success')->with('text', lang('app.successful').lang('app.useLast'))->with('title', lang('app.done'));
                }
            }
        }
    }


    public function regNew()
    {
        // dd($this->request->getVar());

        helper('form');

        $input = $this->validate(
            [   //Rules
                'name' => 'required|min_length[3]',
                'lname' => 'required|min_length[3]',
                'malaf' => 'required|is_unique[users.malaf]',
                'nameArabic' => 'required',
                'sex' => 'required',
            ],
            [   // Errors
                'name' =>
                [
                    'required' => lang('error.required'),
                    'min_length' => lang('error.min_length'),
                ],
                'lname' =>
                [
                    'required' => lang('error.required'),
                    'min_length' => lang('error.min_length'),
                ],
                'email' => [
                    'required' => lang('error.required'),
                    'valid_email' => lang('error.valid_email'),
                    'is_unique' => lang('error.is_unique'),
                ],
                'malaf' => [
                    'required' => lang('error.required'),
                    'is_unique' => lang('error.is_unique'),
                ],
                'nameArabic' => [
                    'required' => lang('error.required'),
                ],
                'phone' => [
                    'required' => lang('error.required'),
                    'exact_length' => lang('error.exact_length'),
                ],
                'sex' => [
                    'required' => lang('error.required'),
                ],
                'dob' => [
                    'required' => lang('error.required'),
                ],
                'city' => [
                    'required' => lang('error.required'),
                ],
            ]
        );

        if (!$input) {
            $data['title'] = lang('app.register');
            $data['validation'] = $this->validator;
            echo view('auth/register', $data);
        } else {

            $user = new User();

            $data = [
                'name'       => strtoupper($this->request->getVar('name')),
                'lname'      => strtoupper($this->request->getVar('lname')),
                'password'   => password_hash(strtoupper($this->request->getVar('lname')), PASSWORD_DEFAULT),
                'nameArabic' => $this->request->getVar('nameArabic'),
                'malaf'      => $this->request->getVar('malaf'), //4mula
                'sex'        => $this->request->getVar('sex'),
                'role'       => 'user',
                'fn'         => 'student',
            ];

            // dd($data);
            $ok = $user->save($data);

            if ($ok) {
                return redirect()->to('login')->with('type', 'success')->with('text', lang('app.successful') . lang('app.useLast'))->with('title', lang('app.done'));
            }
        }
    }

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

    public function auth()
    {
        // dd($this->request->getVar());
        $session = session();
        $user = new User();

        $identity = $this->request->getVar('id');
        $password = $this->request->getVar('password');
        $data = $user->where('username', $identity)->orWhere('email', $identity)->first();

        // dd($data);

        if ($data) {
            $pass = $data['password'];
            $auth = password_verify($password, $pass);
            // dd($auth);

            if ($auth) {
                $sessData = [
                    'id' => $data['id'],
                    'name' => $data['name'],
                    'dob' => $data['dob'],
                    'email' => $data['email'],
                    'username' => $data['username'],
                    'phone' => $data['phone'],
                    'fn' => $data['fn'],
                    'sex' => $data['sex'],
                    'role' => $data['role'],
                    'isLoggedIn' => TRUE
                ];
                $session->set($sessData);
                return redirect()->to('user');
                
            }else {
                return redirect()->to('login')->with('password', lang('app.wrongPassword'));
            }
        }else {
            return redirect()->to('login')->with('id', lang('app.notSigned'));
        }
    }

    public function logout()
    {
        $session = session();
        $session->destroy();
        return redirect()->to('/');
    }

    public function pass()
    {
        helper('form');
        $data['title'] = lang('app.recoverpassword');

        return view('auth/change', $data);
    }

    public function change($id)
    {
        helper('form');
        $input = $this->validate(
            [   //Rules
                'old' => 'required',
            ],
            [   // Errors
                'old' => [
                    'required' => lang('error.required'),
                ],
            ]
        );

        $user = new User();

        $old = $this->request->getVar('old');
        $new = $this->request->getVar('new');

        $data = $user->find($id);
        $pass = $data['password'];
        $auth = password_verify($old, $pass);
            // dd($auth);

        if (!$input) {
            $data['title'] = lang('app.passchange');
            $data['validation'] = $this->validator;
            echo view('auth/change', $data);
        } elseif (!$auth) {
            $data['title'] = 'settings';
            return redirect()->to('change/password')->with('text', lang('app.notokoldpass'))->with('type', 'error')->with('title', lang('app.sorry'));
        } else {


            $data = [
                'password' => password_hash($new, PASSWORD_DEFAULT)
            ];

            // dd($data);
            $ok = $user->update($id, $data);

            if ($ok) {
                return redirect()->to('user')->with('type', 'success')->with('title', lang('app.done'))->with('text', lang('app.passchanged'));
            } else {
                return redirect()->to('change/password')->with('type', 'error')->with('text', lang('app.errorOccured'))->with('title', lang('app.sorry'));
            }
        }
    }

    public function recover()
    {
        helper('form');
        $data['title'] = lang('app.recoverpassword');

        return view('auth/forgot', $data);
    }

    public function password()
    {
        // dd($this->request->getVar());
        helper('form');

        $input = $this->validate(
            [   //Rules
                'identity' => 'required|min_length[3]',
                'lname' => 'required|min_length[3]',
                'phone' => 'required|exact_length[9]',
            ],
            [   // Errors
                'identity' =>
                [
                    'required' => lang('error.required'),
                    'min_length' => lang('error.min_length'),
                ],
                'lname' =>
                [
                    'required' => lang('error.required'),
                    'min_length' => lang('error.min_length'),
                ],
                'phone' => [
                    'required' => lang('error.required'),
                    'exact_length' => lang('error.exact_length'),
                ],
            ]
        );

        if (!$input) {
            $data['title'] = lang('app.recoverpassword');
            $data['validation'] = $this->validator;
            echo view('auth/forgot', $data);
        } else {
            $user = new User();

            $identity = $this->request->getVar('identity');
            $lname = strtoupper($this->request->getVar('lname'));
            $phone = $this->request->getVar('phone');
            $data = $user->where('email', $identity)->orWhere('malaf', $identity)->first();
            // dd($data);

            if ($data > 0) {
                if (!($lname == $data['lname'] && $phone == $data['phone'])) {
                    return redirect()->to('recover')->with('type', 'error')->with('title', lang('app.incorrect'))->with('text', lang('app.lname') . '/' . lang('app.phone'));
                } else {
                    $user = new User();
                    $id = $data['id'];

                    $data = [
                        'password' => password_hash($lname, PASSWORD_DEFAULT),
                    ];

                    $ok = $user->update($id, $data);

                    if ($ok) {
                        return redirect()->to('login')->with('type', 'success')->with('text', lang('app.passchanged').' '. lang('app.useLast'))->with('title', lang('app.done'));
                    }
                }
            } else {
                // dd(lang('app.notFound'));
                return redirect()->to('recover')->with('type', 'error')->with('text', lang('app.notFound'))->with('title', lang('app.sorry'));
            }
        }
    }
}
