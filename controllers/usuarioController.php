<?php

class usuarioController
{
    public function index()
    {
        $usuario = App::get('database')->selectAll('usuario');
        return view('usuario/index', compact('usuario'));
    }

    public function create()
    {
        $cargos = App::get('database')->selectAll('cargo');
        return view('usuario/create', compact('cargos'));
    }

    public function delete()
    {
        App::get('database')->delete('usuario', $_POST['id']);

        header("Location: /usuario/index");
    }

    public function edit()
    {
        $usuario = App::get('database')->select('usuario', $_GET['id']);
        $cargos = App::get('database')->selectAll('cargo');

        return view('usuario/edit', compact('usuario'), compact('cargos'));
    }

    public function show()
    {
        $usuario = App::get('database')->select('usuario', $_GET['id']);

        return view('usuario/show', compact('usuario'));
    }

    public function store()
    {
        App::get('database')->insert('usuario', [
            'nome' => $_POST['nome'],
            'email' => $_POST['email'],
            'senha' => $_POST['senha'],
            'cargo_id'=> $_POST['cargo_id'],
            'url_imagem' => $_POST['url_imagem']

        ]);
        header("Location: /usuario/index");
    }

    public function update()
    {
        App::get('database')->update('usuario', [
            'nome' => $_POST['nome'],
            'email' => $_POST['email'],
            'senha' => $_POST['senha'],
            'cargo_id'=> $_POST['cargo_id'],
            'url_imagem' => $_POST['url_imagem']

        ], $_POST['id']);
        header("Location: /usuario/index");
    }
}
