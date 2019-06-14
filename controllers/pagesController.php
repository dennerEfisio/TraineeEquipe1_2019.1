<?php

class pagesController
{


    public function home()
    {

        require 'vendor/autolog.php';

        $cargos = App::get('database')->selectAll('cargo');
        return view('index', ['users'=>$users]);
    }
}
