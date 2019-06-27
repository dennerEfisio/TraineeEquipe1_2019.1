<?php

class loginController
{
    public function index()
    {
        return view('login/login');
    }

    public function login()
    {
        $usuario = App::get('database')->login($_POST['email'], md5($_POST['senha']));
        if ($usuario > 0) {
            session_start();
            $_SESSION['login'] = true;
            $_SESSION['nome'] = $usuario;
            header("Location: /home");
        } else {
            return view('login/login');
        }
    }

    public function destroy()
    {
        session_destroy();
        return view('login/login');
    }
}
