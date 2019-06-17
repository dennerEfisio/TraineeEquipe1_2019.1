<?php

class CargoController
{

     public function index(){
        $cargos = App::get('database')->selectAll('cargo');
        return view('cargo/index', compact('cargos'));
    }

    public function store(){
        App::get('database')->insert('cargo', [
            'nome' =>$_POST['nome'],
            'departamento_id'=>1
        ]);
        header('location: /index');
    }

    public function create(){
        return view('cargo/create');
    }

    public function destroy(){
        App::get('database')->delete('cargo', [
            'id' =>'2'
        ]);
        header('location: /index');
    }

    public function show(){
        $cargo=App::get('database')->show('cargo', [
            'id' =>'2'
        ]);
        return view('cargo/show', compact('cargo'));
    }

    public function edit(){
        $cargo=App::get('database')->show('cargo', [
            'id' =>'2'
        ]);
        return view('cargo/edit', compact('cargo'));
    }

    public function update(){
        header('location: /index');
    }
}