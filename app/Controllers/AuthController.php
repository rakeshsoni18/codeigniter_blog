<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\User;
use CodeIgniter\HTTP\RedirectResponse;

class AuthController extends BaseController
{
    private $user;
    private $session;

    public function __construct()
    {
        helper(['form', 'url', 'session']);
        $this->user = new User();
        $this->session = session();
    }

    public function login(): string
    {
        return view('login');
    }

    public function do_login()
    {
        $inputs = $this->validate([
            'email' => 'required|valid_email',
            'password' => 'required|min_length[5]'
        ]);

        if (!$inputs) {
            return view('login', [
                'validation' => $this->validator
            ]);
        }

        $email = $this->request->getVar('email');
        $password = $this->request->getVar('password');

        $user = $this->user->where('email', $email)->first();

        if ($user) {

            $pass = $user['password'];
            $authPassword = password_verify($password, $pass);

            if ($authPassword) {
                $sessionData = [
                    'id' => $user['id'],
                    'name' => $user['name'],
                    'email' => $user['email'],
                    'loggedIn' => true,
                ];

                $this->session->set($sessionData);

                return redirect()->to('admin/blog');
            }

            session()->setFlashdata('failed', 'Failed! incorrect password');
            return redirect()->to(site_url('/login'));
        }

        session()->setFlashdata('failed', 'Failed! incorrect email');
        return redirect()->to(site_url('/login'));
    }

    public function logout(): RedirectResponse
    {
        $session = session();
        $session->destroy();
        return redirect()->to('login');
    }
}
