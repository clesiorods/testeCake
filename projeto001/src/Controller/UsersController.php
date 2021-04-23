<?php

namespace App\Controller;

use App\Controller\AppController;

class UsersController extends AppController 
{
    public function index() 
    {
        //$usuario = 'Clesio';
        //$this->set(['usuarios' => $usuario]);

        //Configuração de paginação | o método paginete(); deve ser usado na coleta de dados que seram passados para a view
        $this->paginate = [
            'limit' => 3,
            'order' => [
                'Users.id' => 'desc'
            ]
        ];
        $usuarios = $this->paginate($this->Users);
        //$usuarios = $this->Users->find()->all();
        $this->set(['usuarios' => $usuarios]);
    }

    public function add() 
    {
        $user = $this->Users->newEmptyEntity();
        if($this->request->is('post')) {
            $user = $this->Users->patchEntity($user, $this->request->getData());
            if($this->Users->save($user)) {
                $this->Flash->success(__('Usuário cadastrado com sucesso'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('Não foi possível cadastrar o usuário'));
            }
        }
        $this->set(compact('user'));
    }
}




?>