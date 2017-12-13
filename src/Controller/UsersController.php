<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;


/**
 * Users Controller
 *
 * @property \App\Model\Table\UsersTable $Users
 *
 * @method \App\Model\Entity\User[] paginate($object = null, array $settings = [])
 */
class UsersController extends AppController
{

    public function initialize(){
        parent::initialize();
        $this->loadModel('Files');
    }

     public function login()
    {

        if($this->request->is('post')){
            $user = $this->Auth->identify();
            if($user){
                $this->Auth->setUser($user);
                return $this->redirect($this->Auth->redirectUrl());
            }
            $this->Flash->error(__("Usuário invalido, Tente novamente"));

        }
    }


    public function logout(){
        return $this->redirect($this->Auth->logout());
    }

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Files']
        ];

        $users = $this->paginate($this->Users);

        $this->set(compact('users'));
        $this->set('_serialize', ['users']);
    }

    /**
     * View method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $user = $this->Users->get($id, [
            'contain' => ['Schedules', 'Files']
        ]);

        $this->set('user', $user);
        $this->set('_serialize', ['user']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function addUser()
    {
        $user = $this->Users->newEntity();
        if ($this->request->is('post')) {
            $user = $this->Users->patchEntity($user, $this->request->getData());
            if(!empty($this->request->data['file_users_id']['name'])){
                $extension = pathinfo($this->request->data['file_users_id']['name'], PATHINFO_EXTENSION);
                $image = $this->Files->uploadAndSaveFile($this->request->data['file_users_id']['tmp_name'],'/uploads/','perfil_'.uniqid(rand(), true).'.'.$extension);
                if($image){
                    $user->file_users_id = $image->id;
                    if ($this->Users->save($user)) {
                        $this->Flash->success(__('Usuário adicionado com sucesso.'));
                        return $this->redirect(['controller' => 'pages','action' => 'home']);
                    }else{
                        $this->Flash->error(__('O usuário não pode ser adicionado. Por favor, tente novamente.'));
                    }
                }else{
                    $this->Flash->error(__('Problema ao carregar a image de perfil'));
                }

            }else{
                if ($this->Users->save($user)) {
                    $this->Flash->success(__('Usuário adicionado com sucesso.'));
                    return $this->redirect(['controller' => 'pages','action' => 'home']);
                }else{
                    $this->Flash->error(__('O usuário não pode ser adicionado. Por favor, tente novamente.'));
                }
            }

        }
        $this->set(compact('user'));
        $this->set('_serialize', ['user']);
    }

    public function addBarber()
    {
        $user = $this->Users->newEntity();
        if ($this->request->is('post')) {
            $user = $this->Users->patchEntity($user, $this->request->getData());
            if(!empty($this->request->data['file_users_id']['name'])){
                $extension = pathinfo($this->request->data['file_users_id']['name'], PATHINFO_EXTENSION);
                $image = $this->Files->uploadAndSaveFile($this->request->data['file_users_id']['tmp_name'],'/uploads/','perfil_'.uniqid(rand(), true).'.'.$extension);
                if($image){
                    $user->file_users_id = $image->id;
                    if ($this->Users->save($user)) {
                        $this->Flash->success(__('Usuário adicionado com sucesso.'));
                        return $this->redirect(['controller' => 'pages','action' => 'home']);
                    }else{
                        $this->Flash->error(__('O usuário não pode ser adicionado. Por favor, tente novamente.'));
                    }
                }else{
                    $this->Flash->error(__('Problema ao carregar a image de perfil'));
                }

            }else{
                if ($this->Users->save($user)) {
                    $this->Flash->success(__('Usuário adicionado com sucesso.'));
                    return $this->redirect(['controller' => 'pages','action' => 'home']);
                }else{
                    $this->Flash->error(__('O usuário não pode ser adicionado. Por favor, tente novamente.'));
                }
            }

        }
        $this->set(compact('user'));
        $this->set('_serialize', ['user']);
    }


    /**
     * Edit method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {

        $user = $this->Users->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $user = $this->Users->patchEntity($user, $this->request->getData());
            if ($this->Users->save($user)) {
                $this->Flash->success(__('Usuário editado com sucesso.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('O usuário não pode ser editado. Por favor, tente novamente.'));
        }
        $this->set(compact('user'));
        $this->set('_serialize', ['user']);
    }

    /**
     * Delete method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $user = $this->Users->get($id);
        if ($this->Users->delete($user)) {
            $this->Flash->success(__('Usuário deletado com sucesso.'));
        } else {
            $this->Flash->error(__('O usuário não pode ser deletado. Por favor, tente novamente.'));
        }

        return $this->redirect(['action' => 'index']);
    }

}
