<?php

class servicoController
{
    public function index()
    {
        $servicos = App::get('database')->selectAll('servico');
        $clientes = App::get('database')->selectAll('cliente');
        return view('servico/index', compact('servicos', 'clientes'));
    }

    public function create()
    {
        $clientes = App::get('database')->selectAll('cliente');
        $projetos = App::get('database')->selectAll('projeto');
        $usuarios = App::get('database')->selectAll('usuario');
        return view('servico/create', compact('clientes', 'projetos', 'usuarios'));
    }

    public function delete()
    {
        App::get('database')->delete('servico', $_POST['id']);

        header("Location: /servico/index");
    }

    public function edit()
    {
        $servico = App::get('database')->select('servico', $_GET['id']);
        $clientes = App::get('database')->selectAll('cliente');
        $projetos = App::get('database')->selectAll('projeto');
        $usuarios = App::get('database')->selectAll('usuario');

        return view('servico/edit', compact('servico', 'clientes', 'projetos', 'usuarios'));
    }

    public function show()
    {
        $servico = App::get('database')->select('servico', $_GET['id']);
        $cliente = App::get('database')->select('cliente', $servico->cliente_id);
        $projeto = App::get('database')->select('projeto', $servico->produto_id);
        $usuario = App::get('database')->select('usuario', $servico->usuario_id);

        return view('servico/show', compact('servico', 'cliente', 'projeto', 'usuario'));
    }

    public function store()
    {
        App::get('database')->insert('servico', [
            'nome' => $_POST['nome'],
            'desconto' => $_POST['desconto'],
            'preco' => $_POST['preco'],
            'anotacoes' => $_POST['anotacoes'],
            'cliente_id' => $_POST['cliente_id'],
            'produto_id' => $_POST['produto_id'],
            'usuario_id' => $_POST['usuario_id']
        ]);

        header("Location: /servico/index");
    }

    public function update()
    {
        App::get('database')->update('servico', [
            'nome' => $_POST['nome'],
            'desconto' => $_POST['desconto'],
            'preco' => $_POST['preco'],
            'anotacoes' => $_POST['anotacoes'],
            'cliente_id' => $_POST['cliente_id'],
            'produto_id' => $_POST['produto_id'],
            'usuario_id' => $_POST['usuario_id']
        ], $_POST['id']);
        header("Location: /servico/index");
    }
}
