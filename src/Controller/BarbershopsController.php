<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;

/**
 * Barbershops Controller
 *
 * @property \App\Model\Table\BarbershopsTable $Barbershops
 *
 * @method \App\Model\Entity\Barbershop[] paginate($object = null, array $settings = [])
 */
class BarbershopsController extends AppController
{

    public function isAuthorized($user)
    {
        if ($this->request->getParam('action') === 'add') {
            if($user['role'] === 'admin' || $user['role'] === 'adminBarber'){
                return true;
            }
        }

        if ($this->request->getParam('action') === 'edit') {
            $userId = (int)$this->request->getParam('pass.0');
            if ($userId === $user['id'] && $user['role'] === 'adminBarber') {
                return true;
            }
            if($user['role'] === 'admin'){
                return true;
            }
        }

        if ($this->request->getParam('action') === 'delete') {
            if($user['role'] === 'admin'){
                return true;
            }
        }

        if ($this->request->getParam('action') === 'index') {
            if($user['role'] === 'admin' || $user['role'] === 'adminBarber' || $user['role'] === 'userBarber'){
                return true;
            }
        }

        if ($this->request->getParam('action') === 'view') {
            if($user['role'] === 'admin' || $user['role'] === 'adminBarber'){
                return true;
            }
        }

        return parent::isAuthorized($user);
    }


    public function beforeFilter(Event $event)
    {
        parent::beforeFilter($event);
        $this->Auth->deny(['edit','index','view','delete', 'add']);
    }

    public function initialize()
    {
        parent::initialize();
        $this->loadModel('Files');
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

        $barbershops = $this->paginate($this->Barbershops);

        $this->set(compact('barbershops'));
        $this->set('_serialize', ['barbershops']);
    }

    /**
     * View method
     *
     * @param string|null $id Barbershop id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $barbershop = $this->Barbershops->get($id, [
            'contain' => ['Files']
        ]);

        $this->set('barbershop', $barbershop);
        $this->set('_serialize', ['barbershop']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $barbershop = $this->Barbershops->newEntity();
        if ($this->request->is('post')) {
            $barbershop = $this->Barbershops->patchEntity($barbershop, $this->request->getData());
            if(!empty($this->request->data['file_barbershops_id']['name'])){
                $extension = pathinfo($this->request->data['file_barbershops_id']['name'], PATHINFO_EXTENSION);
                $image = $this->Files->uploadAndSaveFile($this->request->data['file_barbershops_id']['tmp_name'],'/uploads/barbearia/','barbearia_'.uniqid(rand(), true).'.'.$extension);
                if($image){
                    $barbershop->file_barbershops_id = $image->id;
                    if ($this->Barbershops->save($barbershop)) {
                        $this->Flash->success(__('Barbearia adicionada com sucesso.'));
                        return $this->redirect(['controller' => 'pages','action' => 'home']);
                    }else{
                        $this->Flash->error(__('A barbearia não pode ser adicionada. Por favor, tente novamente.'));
                    }
                }else{
                    $this->Flash->error(__('Problema ao carregar a image de perfil'));
                }
            }else{
                if ($this->Barbershops->save($barbershop)) {
                    $this->Flash->success(__('Barbearia adicionada com sucesso.'));
                    return $this->redirect(['controller' => 'pages','action' => 'home']);
                }else{
                    $this->Flash->error(__('A barbearia não pode ser adicionada. Por favor, tente novamente.'));
                }
            }
        }
        $this->set(compact('barbershop'));
        $this->set('_serialize', ['barbershop']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Barbershop id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $barbershop = $this->Barbershops->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $barbershop = $this->Barbershops->patchEntity($barbershop, $this->request->getData());
            if ($this->Barbershops->save($barbershop)) {
                $this->Flash->success(__('The barbershop has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The barbershop could not be saved. Please, try again.'));
        }
        $files = $this->Barbershops->Files->find('list', ['limit' => 200]);
        $this->set(compact('barbershop', 'files'));
        $this->set('_serialize', ['barbershop']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Barbershop id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $barbershop = $this->Barbershops->get($id);
        if ($this->Barbershops->delete($barbershop)) {
            $this->Flash->success(__('The barbershop has been deleted.'));
        } else {
            $this->Flash->error(__('The barbershop could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }

}
