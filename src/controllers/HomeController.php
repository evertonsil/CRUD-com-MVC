<?php

namespace src\controllers;

use \core\Controller;
use \src\models\User;

//cada método da classe Controller é uma execução diferente, que recebe as requisições
class HomeController extends Controller
{

    public function index()
    {
        $users = User::select()->get();
        //o método render() é responsável por renderizar a view
        $this->render('home', [
            'users' => $users
        ]);
    }
}
