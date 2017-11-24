<?php
namespace App\Controller;

use App\Controller\AppController;
use App\Model\Entity\Image;

/**
 * Membro Controller
 *
 * @property \App\Model\Table\MembroTable $Membro
 *
 * @method \App\Model\Entity\Membro[] paginate($object = null, array $settings = [])
 */
class MembroController extends AppController
{

    public function initialize()
    {
        parent::initialize();
        $this->loadComponent('Member');
    }
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $membros = $this->paginate($this->Membro);
        $imagens = array();

        foreach($membros as $membro) {
            $membro->set('has_image', true);
            
            $base64Code = base64_encode($this->Member->getMemberPicture($membro->matricula));
            $image = new Image($membro->matricula, $base64Code);
            array_push($imagens, $image);
        }

        $this->set(compact('membros', 'imagens'));
        $this->set('_serialize', ['membros', 'imagens']);
    }

    /**
     * View method
     *
     * @param string|null $id Membro id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $membro = $this->Membro->get($id, [
            'contain' => []
        ]);

        $this->set('membro', $membro);
        $this->set('_serialize', ['membro']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $membro = $this->Membro->newEntity();
        if ($this->request->is('post')) {
            $membro = $this->Membro->patchEntity($membro, $this->request->getData());
            if ($this->Membro->save($membro)) {
                $this->Flash->success(__('The membro has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The membro could not be saved. Please, try again.'));
        }
        $this->set(compact('membro'));
        $this->set('_serialize', ['membro']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Membro id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $membro = $this->Membro->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $membro = $this->Membro->patchEntity($membro, $this->request->getData());
            if ($this->Membro->save($membro)) {
                $this->Flash->success(__('The membro has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The membro could not be saved. Please, try again.'));
        }
        $this->set(compact('membro'));
        $this->set('_serialize', ['membro']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Membro id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $membro = $this->Membro->get($id);
        if ($this->Membro->delete($membro)) {
            $this->Flash->success(__('The membro has been deleted.'));
        } else {
            $this->Flash->error(__('The membro could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }

    public final function searchMemberByRegisterOrName () 
    {
        $parameters = $this->request->getQueryParams();
        
        $this->paginate($this->Membro);
        
        $membros = $this->Member->search($parameters['q']);
        $membros = $this->Membro->newEntities($membros);

        $this->set(compact('membros'));
        $this->set('_serialize', ['membros']);
        $this->render('index');
    
    }

}
