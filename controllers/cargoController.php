<?php

class cargoController
{
    public function index()
    {
        $cargos = App::get('database')->selectAll('cargo');
        $departamentos = App::get('database')->selectAll('departamento');
        return view('cargo/index', compact('cargos', 'departamentos'));
    }

    public function create()
    {
        $departamentos = App::get('database')->selectAll('departamento');
        return view('cargo/create', compact('departamentos'));
    }

    public function delete()
    {
        App::get('database')->delete('cargo', $_POST['id']);

        header("Location: /cargo/index");
    }

    public function edit()
    {
        $cargo = App::get('database')->select('cargo', $_GET['id']);
        $departamentos = App::get('database')->selectAll('departamento');

        return view('cargo/edit', compact('cargo', 'departamentos'));
    }

    public function show()
    {
        $cargo = App::get('database')->select('cargo', $_GET['id']);
        $departamento = App::get('database')->select('departamento', $cargo->departamento_id);

        return view('cargo/show', compact('cargo', 'departamento'));
    }

    public function store()
    {
        App::get('database')->insert('cargo', [
            'nome' => $_POST['nome'],
            'departamento_id' => $_POST['departamento_id'],

        ]);
        header("Location: /cargo/index");
    }

    public function update()
    {
        App::get('database')->update('cargo', [
            'nome' => $_POST['nome'],
            'departamento_id' => $_POST['departamento_id'],
        ], $_POST['id']);

        header("Location: /cargo/index");
    }
}
