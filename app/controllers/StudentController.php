<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class StudentController extends Controller
{
    public function index()
    {
        session_start();
        $_SESSION['student_access'] = true;
        $this->call->view('dexter/home');
    }

    public function profile()
    {
        $student = [
            'student_id' => '00028',
            'name'       => 'John Dexter Bool',
            'course'     => 'BS Information Technology',
            'year'       => '3rd Year',
            'section'    => 'A',
            'email'      => 'john@example.com'
        ];

        $this->call->view('dexter/profile', $student);
    }
}
