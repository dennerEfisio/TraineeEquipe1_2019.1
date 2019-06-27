<?php

class dashboardController
{
    public function index()
    {
        session_start();
        if ($_SESSION['login']) {
            return view('dashboard/dashboard');
        } else {
            header('Location: /login');
        }
    }
}
