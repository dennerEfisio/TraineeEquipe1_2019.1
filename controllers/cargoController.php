<?php

class CargoController
{

     public function index(){
        $cargos = App::get('database')->selectAll('cargo');
        return view('cargo/index', compact('cargos'));
    }

    public function store(){
        $cargo = App::get('database')->insert('cargo');
        return view('cargo/create', compact('cargo'));
    }

    public function create(){
        return view('cargo/create');
    }

    public function delete(){
        App::get('database')->delete('cargo', [
            'id' =>$_POST['id']
        ]);
        header('location: /');
    }

    public function show(){
        App::get('database')->show('cargo', [
            'id' =>$_POST['2']
        ]);
        return view('cargo/show');
    }

    public function edit(){
        return view('cargo/edit');
    }
}