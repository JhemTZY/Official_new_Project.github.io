<?php namespace App\Controllers;
  
use CodeIgniter\Controller;
  
class Dashboard extends Controller
{
    public function index()
    {
        $session = session();
        echo view('dashboard');
        // echo "Welcome back, ".$session->get('user_name');
    }

    public function logout()
    {
        $session = session();
        $session->destroy();
        return redirect()->to('/login');
    }

    public function profile()
    {
        $session = session();
        echo view('profile');

    }

}