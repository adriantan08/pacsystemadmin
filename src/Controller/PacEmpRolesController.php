<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * PacEmpRoles Controller
 *
 * @property \App\Model\Table\PacEmpRolesTable $PacEmpRoles
 */
class PacEmpRolesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $pacEmpRoles = $this->paginate($this->PacEmpRoles);

        $this->set(compact('pacEmpRoles'));
        $this->set('_serialize', ['pacEmpRoles']);
    }

    /**
     * View method
     *
     * @param string|null $id Pac Emp Role id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $pacEmpRole = $this->PacEmpRoles->get($id, [
            'contain' => []
        ]);

        $this->set('pacEmpRole', $pacEmpRole);
        $this->set('_serialize', ['pacEmpRole']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $pacEmpRole = $this->PacEmpRoles->newEntity();
        if ($this->request->is('post')) {
            $pacEmpRole = $this->PacEmpRoles->patchEntity($pacEmpRole, $this->request->data);
            if ($this->PacEmpRoles->save($pacEmpRole)) {
                $this->Flash->success(__('The pac emp role has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The pac emp role could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('pacEmpRole'));
        $this->set('_serialize', ['pacEmpRole']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Pac Emp Role id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $pacEmpRole = $this->PacEmpRoles->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $pacEmpRole = $this->PacEmpRoles->patchEntity($pacEmpRole, $this->request->data);
            if ($this->PacEmpRoles->save($pacEmpRole)) {
                $this->Flash->success(__('The pac emp role has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The pac emp role could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('pacEmpRole'));
        $this->set('_serialize', ['pacEmpRole']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Pac Emp Role id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $pacEmpRole = $this->PacEmpRoles->get($id);
        if ($this->PacEmpRoles->delete($pacEmpRole)) {
            $this->Flash->success(__('The pac emp role has been deleted.'));
        } else {
            $this->Flash->error(__('The pac emp role could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
