<?php

class CargoController
{


     public function index()
    {


        $cargos = App::get('database')->selectAll('cargo');
        return view('index', compact('cargos'));
    }

    public function store(){


        $cargos = App::get('database')->store('cargo');
        return view('create', compact('user'));
    }

    

    
}