<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\AuthModel;

class Auth extends BaseController
{
    public function index()
    {
        //
        $context = [
            'title'=>'Login'
        ];
        return view('auth/login', $context);
    }

    function login(){
        $session = session();
        $model = new AuthModel();
        $username = $this->request->getVar('username');
        $password = $this->request->getVar('password');
        $data = $model->where('username', $username)->first();
        if($data){
            $pass = $data['password'];
            $verify_pass = password_verify($password, $pass);
            if($verify_pass){
                $ses_data = [
                    'user_id'       => $data['id'],
                    'user_name'     => $data['username'],
                    'user_email'    => $data['nama_lengkap'],
                    'logged_in'     => TRUE
                ];
                $session->set($ses_data);
                return redirect()->route('dashboard');
            }else{
                $session->setFlashdata('msg', 'Wrong Password');
                return redirect()->route('login');
            }
        }else{
            $session->setFlashdata('msg', 'Email not Found');
            return redirect()->route('login');
        }
    }

    function logout(){
        $session = session();
        $session->destroy();
        return redirect()->to('/login');
    }
}
