<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * PacEmployees Controller
 *
 * @property \App\Model\Table\PacEmployeesTable $PacEmployees
 */
class PacEmployeesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['PacEmpRoles']
        ];
        $pacEmployees = $this->paginate($this->PacEmployees);

        $this->set(compact('pacEmployees'));
        $this->set('_serialize', ['pacEmployees']);
    }

    /**
     * View method
     *
     * @param string|null $id Pac Employee id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $pacEmployee = $this->PacEmployees->get($id, [
            'contain' => ['PacEmpRoles']
        ]);

        $this->set('pacEmployee', $pacEmployee);
        $this->set('_serialize', ['pacEmployee']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $pacEmployee = $this->PacEmployees->newEntity();
        if ($this->request->is('post')) {
            $pacEmployee = $this->PacEmployees->patchEntity($pacEmployee, $this->request->data);
            if ($this->PacEmployees->save($pacEmployee)) {
                $this->Flash->success(__('The pac employee has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The pac employee could not be saved. Please, try again.'));
            }
        }
        $pacEmpRoles = $this->PacEmployees->PacEmpRoles->find('list', ['limit' => 200]);
        $this->set(compact('pacEmployee', 'pacEmpRoles'));
        $this->set('_serialize', ['pacEmployee']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Pac Employee id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $pacEmployee = $this->PacEmployees->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $pacEmployee = $this->PacEmployees->patchEntity($pacEmployee, $this->request->data);
            if ($this->PacEmployees->save($pacEmployee)) {
                $this->Flash->success(__('The pac employee has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The pac employee could not be saved. Please, try again.'));
            }
        }
        $pacEmpRoles = $this->PacEmployees->PacEmpRoles->find('list', ['limit' => 200]);
        $this->set(compact('pacEmployee', 'pacEmpRoles'));
        $this->set('_serialize', ['pacEmployee']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Pac Employee id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $pacEmployee = $this->PacEmployees->get($id);
        if ($this->PacEmployees->delete($pacEmployee)) {
            $this->Flash->success(__('The pac employee has been deleted.'));
        } else {
            $this->Flash->error(__('The pac employee could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
