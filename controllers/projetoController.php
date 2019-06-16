<?php

class projetoController
{
    public function index()
    {
        $projetos = App::get('database')->selectAll('projeto');

        require view('projetos/index');
    }

    public function create()
    {
        require view('projetos/create');
    }

    public function delete()
    {
        App::get('database')->delete('projeto', '6');
    }

    public function edit()
    {
        $projeto = App::get('database')->select('projeto', 6);

        require view('projetos/edit');
    }

    public function show()
    {
        $projeto = App::get('database')->select('projeto', 6);

        require view('projetos/show');
    }

    public function store()
    {
        App::get('database')->insert('projeto', [
            'nome' => $_POST['nome'],
            'descricao' => $_POST['descricao']
        ]);
        return redirect('projetos/index');
    }

    public function update()
    {
        App::get('database')->update2('projeto', [
            'nome' => $_POST['nome'],
            'descricao' => $_POST['descricao']
        ], '6');
        return redirect('projetos/index');
    }
}
