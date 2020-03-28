<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * GeUnidadeMassa Controller
 *
 * @property \App\Model\Table\GeUnidadeMassaTable $GeUnidadeMassa
 *
 * @method \App\Model\Entity\GeUnidadeMassa[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class GeUnidadeMassaController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $geUnidadeMassa = $this->paginate($this->GeUnidadeMassa);

        $this->set(compact('geUnidadeMassa'));
    }

    /**
     * View method
     *
     * @param string|null $id Ge Unidade Massa id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $geUnidadeMassa = $this->GeUnidadeMassa->get($id, [
            'contain' => [],
        ]);

        $this->set('geUnidadeMassa', $geUnidadeMassa);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $geUnidadeMassa = $this->GeUnidadeMassa->newEmptyEntity();
        if ($this->request->is('post')) {
            $geUnidadeMassa = $this->GeUnidadeMassa->patchEntity($geUnidadeMassa, $this->request->getData());
            if ($this->GeUnidadeMassa->save($geUnidadeMassa)) {
                $this->Flash->success(__('The ge unidade massa has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The ge unidade massa could not be saved. Please, try again.'));
        }
        $this->set(compact('geUnidadeMassa'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Ge Unidade Massa id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $geUnidadeMassa = $this->GeUnidadeMassa->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $geUnidadeMassa = $this->GeUnidadeMassa->patchEntity($geUnidadeMassa, $this->request->getData());
            if ($this->GeUnidadeMassa->save($geUnidadeMassa)) {
                $this->Flash->success(__('The ge unidade massa has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The ge unidade massa could not be saved. Please, try again.'));
        }
        $this->set(compact('geUnidadeMassa'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Ge Unidade Massa id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $geUnidadeMassa = $this->GeUnidadeMassa->get($id);
        if ($this->GeUnidadeMassa->delete($geUnidadeMassa)) {
            $this->Flash->success(__('The ge unidade massa has been deleted.'));
        } else {
            $this->Flash->error(__('The ge unidade massa could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
