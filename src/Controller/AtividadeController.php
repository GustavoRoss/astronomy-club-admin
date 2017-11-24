<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Atividade Controller
 *
 * @property \App\Model\Table\AtividadeTable $Atividade
 *
 * @method \App\Model\Entity\Atividade[] paginate($object = null, array $settings = [])
 */
class AtividadeController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $atividade = $this->paginate($this->Atividade);

        $this->set(compact('atividade'));
        $this->set('_serialize', ['atividade']);
    }

    /**
     * View method
     *
     * @param string|null $id Atividade id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $atividade = $this->Atividade->get($id, [
            'contain' => []
        ]);

        $this->set('atividade', $atividade);
        $this->set('_serialize', ['atividade']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $atividade = $this->Atividade->newEntity();
        if ($this->request->is('post')) {
            $atividade = $this->Atividade->patchEntity($atividade, $this->request->getData());
            if ($this->Atividade->save($atividade)) {
                $this->Flash->success(__('The atividade has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The atividade could not be saved. Please, try again.'));
        }
        $this->set(compact('atividade'));
        $this->set('_serialize', ['atividade']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Atividade id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $atividade = $this->Atividade->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $atividade = $this->Atividade->patchEntity($atividade, $this->request->getData());
            if ($this->Atividade->save($atividade)) {
                $this->Flash->success(__('The atividade has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The atividade could not be saved. Please, try again.'));
        }
        $this->set(compact('atividade'));
        $this->set('_serialize', ['atividade']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Atividade id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $atividade = $this->Atividade->get($id);
        if ($this->Atividade->delete($atividade)) {
            $this->Flash->success(__('The atividade has been deleted.'));
        } else {
            $this->Flash->error(__('The atividade could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
