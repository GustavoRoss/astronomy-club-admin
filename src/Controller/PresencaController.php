<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Presenca Controller
 *
 * @property \App\Model\Table\PresencaTable $Presenca
 *
 * @method \App\Model\Entity\Presenca[] paginate($object = null, array $settings = [])
 */
class PresencaController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $presenca = $this->paginate($this->Presenca);

        $this->set(compact('presenca'));
        $this->set('_serialize', ['presenca']);
    }

    /**
     * View method
     *
     * @param string|null $id Presenca id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $presenca = $this->Presenca->get($id, [
            'contain' => []
        ]);

        $this->set('presenca', $presenca);
        $this->set('_serialize', ['presenca']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $presenca = $this->Presenca->newEntity();
        if ($this->request->is('post')) {
            $presenca = $this->Presenca->patchEntity($presenca, $this->request->getData());
            if ($this->Presenca->save($presenca)) {
                $this->Flash->success(__('The presenca has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The presenca could not be saved. Please, try again.'));
        }
        $this->set(compact('presenca'));
        $this->set('_serialize', ['presenca']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Presenca id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $presenca = $this->Presenca->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $presenca = $this->Presenca->patchEntity($presenca, $this->request->getData());
            if ($this->Presenca->save($presenca)) {
                $this->Flash->success(__('The presenca has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The presenca could not be saved. Please, try again.'));
        }
        $this->set(compact('presenca'));
        $this->set('_serialize', ['presenca']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Presenca id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $presenca = $this->Presenca->get($id);
        if ($this->Presenca->delete($presenca)) {
            $this->Flash->success(__('The presenca has been deleted.'));
        } else {
            $this->Flash->error(__('The presenca could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
