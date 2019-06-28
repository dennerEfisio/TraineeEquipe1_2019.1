<?php

class departamentoController
{
    public function index()
    {
        $departamentos = App::get('database')->selectAll('departamento');
        if (require('views/partials/loginCheck.php')) {
            return view('departamento/index', compact('departamentos'));
        }
    }

    public function create()
    {
        if (require('views/partials/loginCheck.php')) {
            return view('departamento/create');
        }
    }

    public function delete()
    {
        App::get('database')->delete('departamento', $_POST['id']);

        header("Location: /departamento/index");
    }

    public function edit()
    {
        $departamentos = App::get('database')->select('departamento', $_GET['id']);
        if (require('views/partials/loginCheck.php')) {
            return view('departamento/edit', compact('departamentos'));
        }
    }

    public function show()
    {
        $departamentos = App::get('database')->select('departamento', $_GET['id']);
        if (require('views/partials/loginCheck.php')) {
            return view('departamento/show', compact('departamentos'));
        }
    }

    public function store()
    {
        App::get('database')->insert('departamento', [
            'nome' => $_POST['nome'],
        ]);
        header("Location: /departamento/index");
    }

    public function update()
    {
        App::get('database')->update('departamento', [
            'nome' => $_POST['nome'],
        ], $_POST['id']);
        header("Location: /departamento/index");
    }
}
