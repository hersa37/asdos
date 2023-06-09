<?php

namespace App\Controllers;

use App\Models\AsistenModel;
use App\Models\LoginModel;

class LoginController extends BaseController
{
    public function index()
    {
        return view('login/loginpage');
    }

    public function check()
    {
        $post = $this->request->getPost(['usr', 'pwd']);
        $model = model(LoginModel::class);
        $user = $model->getUser($post['usr']);
        if ($user != null && $user['Password'] == $post['pwd']) {
            $session = session();
            $session->set('pengguna', $post['usr']);
            $view = new AsistenController();
            return $view->index();
        } else {
            return view('login/loginpage', [
                'errors' => ['Username atau password salah'],
            ]);
        }
    }

    public function home()
    {
        $session = session();
        if ($session->has('pengguna'))
        {
           return view('asisten/AsistenView');
        } else {
            return view('login/loginpage');
        }

    }

    public function logout()
    {
        $session = session();
        $session->remove('pengguna');
        return view('login/loginpage');
    }
}
