<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;

/**
 * Services Controller
 *
 * @property \App\Model\Table\ServicesTable $Services
 *
 * @method \App\Model\Entity\Service[] paginate($object = null, array $settings = [])
 */
class ServicesController extends AppController
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
            if ($userId === $user['id'] && $$user['role'] === 'adminBarber') {
                return true;
            }
            if($user['role'] === 'admin'){
                return true;
            }
        }

        if ($this->request->getParam('action') === 'delete') {
            $userId = (int)$this->request->getParam('pass.0');
            if ($userId === $user['id'] && $$user['role'] === 'adminBarber') {
                return true;
            }
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
            $userId = (int)$this->request->getParam('pass.0');
            if ($userId === $user['id'] && $$user['role'] === 'adminBarber') {
                return true;
            }
            if($user['role'] === 'admin'){
                return true;
            }
        }

        return parent::isAuthorized($user);
    }


    public function beforeFilter(Event $event)
    {
        parent::beforeFilter($event);
        $this->Auth->deny(['edit','index','view','delete']);
    }

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Barbershops']
        ];
        $services = $this->paginate($this->Services);

        $this->set(compact('services'));
        $this->set('_serialize', ['services']);
    }

    /**
     * View method
     *
     * @param string|null $id Service id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $service = $this->Services->get($id, [
            'contain' => ['Barbershops', 'Schedules']
        ]);

        $this->set('service', $service);
        $this->set('_serialize', ['service']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $service = $this->Services->newEntity();
        if ($this->request->is('post')) {
            $service = $this->Services->patchEntity($service, $this->request->getData());
            if ($this->Services->save($service)) {
                $this->Flash->success(__('The service has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The service could not be saved. Please, try again.'));
        }
        $barbershops = $this->Services->Barbershops->find('list', ['limit' => 200]);
        $this->set(compact('service', 'barbershops'));
        $this->set('_serialize', ['service']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Service id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $service = $this->Services->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $service = $this->Services->patchEntity($service, $this->request->getData());
            if ($this->Services->save($service)) {
                $this->Flash->success(__('The service has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The service could not be saved. Please, try again.'));
        }
        $barbershops = $this->Services->Barbershops->find('list', ['limit' => 200]);
        $this->set(compact('service', 'barbershops'));
        $this->set('_serialize', ['service']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Service id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $service = $this->Services->get($id);
        if ($this->Services->delete($service)) {
            $this->Flash->success(__('The service has been deleted.'));
        } else {
            $this->Flash->error(__('The service could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
