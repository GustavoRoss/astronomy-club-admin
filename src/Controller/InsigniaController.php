<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Insignia Controller
 *
 * @property \App\Model\Table\InsigniaTable $Insignia
 *
 * @method \App\Model\Entity\Insignium[] paginate($object = null, array $settings = [])
 */
class InsigniaController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $insignia = $this->paginate($this->Insignia);

        $this->set(compact('insignia'));
        $this->set('_serialize', ['insignia']);
    }

    /**
     * View method
     *
     * @param string|null $id Insignium id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $insignium = $this->Insignia->get($id, [
            'contain' => []
        ]);

        $this->set('insignium', $insignium);
        $this->set('_serialize', ['insignium']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $insignium = $this->Insignia->newEntity();
        if ($this->request->is('post')) {
            $insignium = $this->Insignia->patchEntity($insignium, $this->request->getData());
            if ($this->Insignia->save($insignium)) {
                $this->Flash->success(__('The insignium has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The insignium could not be saved. Please, try again.'));
        }
        $this->set(compact('insignium'));
        $this->set('_serialize', ['insignium']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Insignium id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $insignium = $this->Insignia->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $insignium = $this->Insignia->patchEntity($insignium, $this->request->getData());
            if ($this->Insignia->save($insignium)) {
                $this->Flash->success(__('The insignium has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The insignium could not be saved. Please, try again.'));
        }
        $this->set(compact('insignium'));
        $this->set('_serialize', ['insignium']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Insignium id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $insignium = $this->Insignia->get($id);
        if ($this->Insignia->delete($insignium)) {
            $this->Flash->success(__('The insignium has been deleted.'));
        } else {
            $this->Flash->error(__('The insignium could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
