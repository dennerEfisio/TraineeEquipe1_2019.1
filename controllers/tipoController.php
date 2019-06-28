<?php

class tipoController
{
    public function index()
    {
        $tipos = App::get('database')->selectAll('tipo');
        if (require('views/partials/loginCheck.php')) {
            return view('tipo/index', compact('tipos'));
        }
    }

    public function create()
    {
        if (require('views/partials/loginCheck.php')) {
            return view('tipo/create');
        }
    }

    public function delete()
    {
        App::get('database')->delete('tipo', $_POST['id']);
        header("Location: /tipo/index");
    }

    public function edit()
    {
        $tipos = App::get('database')->select('tipo', $_GET['id']);
        if (require('views/partials/loginCheck.php')) {
            return view('tipo/edit', compact('tipos'));
        }
    }

    public function show()
    {
        $tipos = App::get('database')->select('tipo', $_GET['id']);
        if (require('views/partials/loginCheck.php')) {
            return view('tipo/show', compact('tipos'));
        }
    }

    public function store()
    {
        App::get('database')->insert('tipo', [
            'nome' => $_POST['nome'],
        ]);
        header("Location: /tipo/index");
    }

    public function update()
    {
        App::get('database')->update('tipo', [
            'nome' => $_POST['nome'],
        ], $_POST['id']);
        header("Location: /tipo/index");
    }
}
