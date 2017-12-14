<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;

/**
 * Schedules Controller
 *
 * @property \App\Model\Table\SchedulesTable $Schedules
 *
 * @method \App\Model\Entity\Schedule[] paginate($object = null, array $settings = [])
 */
class SchedulesController extends AppController
{


    public function isAuthorized($user)
    {
        if ($this->request->getParam('action') === 'add') {
            if ($user['role'] === 'adminBarber' || $user['role'] === 'userBarber') {
                return true;
            }
            if($user['role'] === 'admin'){
                return true;
            }
        }

        if ($this->request->getParam('action') === 'edit') {
            $userId = (int)$this->request->getParam('pass.0');
            if (($userId === $user['id'] && $user['role'] === 'adminBarber') || 
                ($userId === $user['id'] && $user['role'] === 'userBarber')) {
                return true;
            }
            if($user['role'] === 'admin'){
                return true;
            }
        }

        if ($this->request->getParam('action') === 'delete') {
            $userId = (int)$this->request->getParam('pass.0');
            if (($userId === $user['id'] && $user['role'] === 'adminBarber') || 
                ($userId === $user['id'] && $user['role'] === 'userBarber')) {
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
            if (($userId === $user['id'] && $user['role'] === 'adminBarber') || 
                ($userId === $user['id'] && $user['role'] === 'userBarber')) {
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
        $this->Auth->deny(['edit','index','view','delete', 'add']);
    }

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Users', 'Services']
        ];
        $schedules = $this->paginate($this->Schedules);

        $this->set(compact('schedules'));
        $this->set('_serialize', ['schedules']);
    }

    /**
     * View method
     *
     * @param string|null $id Schedule id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $schedule = $this->Schedules->get($id, [
            'contain' => ['Users', 'Services']
        ]);

        $this->set('schedule', $schedule);
        $this->set('_serialize', ['schedule']);

    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $schedule = $this->Schedules->newEntity();
        if ($this->request->is('post')) {
            $schedule = $this->Schedules->patchEntity($schedule, $this->request->getData());
            if ($this->Schedules->save($schedule)) {
                $this->Flash->success(__('The schedule has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The schedule could not be saved. Please, try again.'));
        }
        //$users = $this->Schedules->Users->find('list', ['id' => $this->Auth->user('id')]);
        $users = $this->Schedules->Users->find('list', ['limit' => 200]);
        $services = $this->Schedules->Services->find('list', ['limit' => 200]);
        $this->set(compact('schedule', 'users', 'services'));
        $this->set('_serialize', ['schedule']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Schedule id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {

        $schedule = $this->Schedules->get($id, ['contain' => []]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $schedule = $this->Schedules->patchEntity($schedule, $this->request->getData());
            if ($this->Schedules->save($schedule)) {
                $this->Flash->success(__('The schedule has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The schedule could not be saved. Please, try again.'));
        }
        $users = $this->Schedules->Users->find('list', ['limit' => 200]);
        $services = $this->Schedules->Services->find('list', ['limit' => 200]);
        $this->set(compact('schedule', 'users', 'services'));
        $this->set('_serialize', ['schedule']);

    }

    /**
     * Delete method
     *
     * @param string|null $id Schedule id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {

        $this->request->allowMethod(['post', 'delete']);
        $schedule = $this->Schedules->get($id);
        if ($this->Schedules->delete($schedule)) {
            $this->Flash->success(__('The schedule has been deleted.'));
        } else {
            $this->Flash->error(__('The schedule could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
