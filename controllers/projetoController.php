<?php

class projetoController
{
    public function index()
    {
        $projetos = App::get('database')->selectAll('projeto');
        if (require('views/partials/loginCheck.php')) {
            return view('projetos/index', compact('projetos'));
        }
    }

    public function create()
    {
        if (require('views/partials/loginCheck.php')) {
            return view('projetos/create');
        }
    }

    public function delete()
    {
        App::get('database')->delete('projeto', $_POST['id']);

        header("Location: /projeto/index");
    }

    public function edit()
    {
        $projetos = App::get('database')->select('projeto', $_GET['id']);
        if (require('views/partials/loginCheck.php')) {
            return view('projetos/edit', compact('projetos'));
        }
    }

    public function show()
    {
        $projetos = App::get('database')->select('projeto', $_GET['id']);
        if (require('views/partials/loginCheck.php')) {
            return view('projetos/show', compact('projetos'));
        }
    }

    public function store()
    {
        App::get('database')->insert('projeto', [
            'nome' => $_POST['nome'],
            'descricao' => $_POST['descricao']
        ]);
        header("Location: /projeto/index");
    }

    public function update()
    {
        App::get('database')->update('projeto', [
            'nome' => $_POST['nome'],
            'descricao' => $_POST['descricao']
        ], $_POST['id']);
        header("Location: /projeto/index");
    }
}
