<?php

namespace src\controllers;

use \core\Controller;
//necessário especificar o uso do model User
use \src\models\User;

class UsersController extends Controller
{
    //rota para página de cadastrar usuário
    public function add()
    {
        $this->render('new_user');
    }

    //rota para editar usuário
    public function edit($args)
    {
        //busca os dados do usuário selecinado, utilizando o método find() específico para buscar apenas um item pelo ID
        $user = User::select()->find($args['id']);

        //chama a rota para a página de edição de usuário, enviado os dados do usuário
        $this->render('edit_user', [
            'userData' => $user
        ]);
    }

    //rota para deletar usuário
    public function delete($args)
    {
        User::delete()->where('id', $args['id'])->execute();

        $this->redirect('/');
    }

    //cadastrando novo usuário no banco
    public function addUser()
    {
        $userName = filter_input(INPUT_POST, 'userNameInput');
        $userMail = filter_input(INPUT_POST, 'userMailInput');

        if ($userName && $userMail) {
            //utilizando o query builder 'Hydrahon' para facilitar a manipulação com banco de dados
            $data = User::select()->where('email', $userMail)->execute();
            if (count($data) === 0) {
                User::insert([
                    'name' => $userName,
                    'email' => $userMail
                ])->execute();

                $this->redirect('/');
            }
        }
        $this->redirect('/add');
    }

    //editando usuário no banco
    public function editUser($args)
    {
        $userName = filter_input(INPUT_POST, 'userNameInput');
        $userMail = filter_input(INPUT_POST, 'userMailInput');

        if ($userName && $userMail) {
            User::update()->set([
                'name' => $userName,
                'email' => $userMail
            ])->where('id', $args['id'])->execute();

            $this->redirect('/');
        }
        $this->redirect('/user/edit/' . $args['id']);
    }
}
