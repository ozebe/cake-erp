<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * GeEstoque Controller
 *
 * @property \App\Model\Table\GeEstoqueTable $GeEstoque
 *
 * @method \App\Model\Entity\GeEstoque[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class GeEstoqueController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $geEstoque = $this->paginate($this->GeEstoque);

        $this->set(compact('geEstoque'));
    }

    /**
     * View method
     *
     * @param string|null $id Ge Estoque id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $geEstoque = $this->GeEstoque->get($id, [
            'contain' => [],
        ]);

        $this->set('geEstoque', $geEstoque);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $geEstoque = $this->GeEstoque->newEmptyEntity();
        if ($this->request->is('post')) {
            $geEstoque = $this->GeEstoque->patchEntity($geEstoque, $this->request->getData());
            if ($this->GeEstoque->save($geEstoque)) {
                $this->Flash->success(__('The ge estoque has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The ge estoque could not be saved. Please, try again.'));
        }
        $this->set(compact('geEstoque'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Ge Estoque id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $geEstoque = $this->GeEstoque->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $geEstoque = $this->GeEstoque->patchEntity($geEstoque, $this->request->getData());
            if ($this->GeEstoque->save($geEstoque)) {
                $this->Flash->success(__('The ge estoque has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The ge estoque could not be saved. Please, try again.'));
        }
        $this->set(compact('geEstoque'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Ge Estoque id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $geEstoque = $this->GeEstoque->get($id);
        if ($this->GeEstoque->delete($geEstoque)) {
            $this->Flash->success(__('The ge estoque has been deleted.'));
        } else {
            $this->Flash->error(__('The ge estoque could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
