<?php

class dashboardController
{
    public function index()
    {
        if (require('views/partials/loginCheck.php')) {
            return view('dashboard/dashboard');
        }
    }
}
