<?php

class clienteController
{
    public function index()
    {
        $clientes = App::get('database')->selectAll('cliente');
        if (require('views/partials/loginCheck.php')) {
            return view('cliente/index', compact('clientes'));
        }
    }

    public function create()
    {
        $tipos = App::get('database')->selectAll('tipo');
        if (require('views/partials/loginCheck.php')) {
            return view('cliente/create', compact('tipos'));
        }
    }

    public function delete()
    {
        App::get('database')->delete('cliente', $_POST['id']);

        header("Location: /cliente/index");
    }

    public function edit()
    {
        $cliente = App::get('database')->select('cliente', $_GET['id']);
        $tipos = App::get('database')->selectAll('tipo');

        if (require('views/partials/loginCheck.php')) {
            return view('cliente/edit', compact('cliente', 'tipos'));
        }
    }

    public function show()
    {
        $cliente = App::get('database')->select('cliente', $_GET['id']);
        $tipo = App::get('database')->select('tipo', $cliente->tipo_id);
        if (require('views/partials/loginCheck.php')) {
            return view('cliente/show', compact('cliente', 'tipo'));
        }
    }

    public function store()
    {
        App::get('database')->insert('cliente', [
            'nome' => $_POST['nome'],
            'sobrenome' => $_POST['sobrenome'],
            'cpf' => $_POST['cpf'],
            'email' => $_POST['email'],
            'cidade' => $_POST['cidade'],
            'bairro' => $_POST['bairro'],
            'rua' => $_POST['rua'],
            'numero' => $_POST['numero'],
            'complemento' => $_POST['complemento'],
            'anotacoes' => $_POST['anotacoes'],
            'tipo_id' => $_POST['tipo_id'],

        ]);
        header("Location: /cliente/index");
    }

    public function update()
    {
        App::get('database')->update('cliente', [
            'nome' => $_POST['nome'],
            'sobrenome' => $_POST['sobrenome'],
            'cpf' => $_POST['cpf'],
            'email' => $_POST['email'],
            'cidade' => $_POST['cidade'],
            'bairro' => $_POST['bairro'],
            'rua' => $_POST['rua'],
            'numero' => $_POST['numero'],
            'complemento' => $_POST['complemento'],
            'anotacoes' => $_POST['anotacoes'],
            'tipo_id' => $_POST['tipo_id'],

        ], $_POST['id']);
        header("Location: /cliente/index");
    }
}
