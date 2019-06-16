<?php

class projetoController
{
    public function index()
    {
        $projetos = App::get('database')->selectAll('projeto');

        require 'views/projetos/index.view.php';
    }

    public function create()
    {
        require 'views/projetos/create.view.php';
    }

    public function delete()
    {
        App::get('database')->delete('projeto', '6');
    }

    public function edit()
    {
        $projeto = App::get('database')->select('projeto', 6);

        require 'views/projetos/edit.view.php';
    }

    public function show()
    {
        $projeto = App::get('database')->select('projeto', 6);

        require 'views/projetos/show.view.php';
    }

    public function store()
    {
        App::get('database')->insert('projeto', [
            'nome' => $_POST['nome'],
            'descricao' => $_POST['descricao']
        ]);
        header('Location: /');
    }

    public function update()
    {
        App::get('database')->update2('projeto', [
            'nome' => $_POST['nome'],
            'descricao' => $_POST['descricao']
        ], '6');
        header('Location: /');
    }
}
