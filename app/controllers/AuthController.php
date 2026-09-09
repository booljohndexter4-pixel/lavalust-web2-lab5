<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class AuthController extends Controller
{
    public function register()
    {
        $this->call->library('auth');

        if ($this->io->method() == 'post') {
            $username = $this->io->post('username');
            $password = $this->io->post('password');

            if ($this->auth->register($username, $password, 'user')) {
                redirect('auth/login');
            } else {
                $this->call->view('auth/register', ['error' => 'Registration failed. Username might already exist.']);
                return;
            }
        }

        $this->call->view('auth/register');
    }

    public function login()
    {
        $this->call->library('auth');

        if ($this->io->method() == 'post') {
            $username = $this->io->post('username');
            $password = $this->io->post('password');

            if ($this->auth->login($username, $password)) {
                redirect('products');
            } else {
                $this->call->view('auth/login', ['error' => 'Invalid username or password.']);
                return;
            }
        }

        $this->call->view('auth/login');
    }

    public function logout()
    {
        $this->call->library('auth');
        $this->auth->logout();
        redirect('auth/login');
    }
}