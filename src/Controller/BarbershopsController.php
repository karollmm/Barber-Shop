<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Barbershops Controller
 *
 *
 * @method \App\Model\Entity\Barbershop[] paginate($object = null, array $settings = [])
 */
class BarbershopsController extends AppController
{

    public function isAuthorized($user){
        if ($this->request->getParam('action') === 'add') {
            return true;
        }
        if (in_array($this->request->getParam('action'), ['edit', 'delete'])) {
            $barbershopId = (int)$this->request->getParam('pass.0');
            if ($this->Barbershops->isOwnedBy($barbershopId, $user['id'])) {
               return true;
            }
        }
        return parent::isAuthorized($user);
    }

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
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
            'contain' => []
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
            if ($this->Barbershops->save($barbershop)) {
                $this->Flash->success(__('The barbershop has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The barbershop could not be saved. Please, try again.'));
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
        $this->set(compact('barbershop'));
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
