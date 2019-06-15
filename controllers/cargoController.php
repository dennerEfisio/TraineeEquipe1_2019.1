<?php

class pagesController
{


    public function home()
    {


        $cargos = App::get('database')->selectAll('cargo');
        return view('create', compact('user'));
    }

    public function store(){


        $cargos = App::get('database')->store('cargo');
        return view('create',['user'=>$users]);
    }

    

    
}
