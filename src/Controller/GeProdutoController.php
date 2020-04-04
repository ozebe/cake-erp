<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * GeProduto Controller
 *
 * @property \App\Model\Table\GeProdutoTable $GeProduto
 *
 * @method \App\Model\Entity\GeProduto[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class GeProdutoController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $geProduto = $this->paginate($this->GeProduto);

        $this->set(compact('geProduto'));
    }

    /**
     * View method
     *
     * @param string|null $id Ge Produto id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $geProduto = $this->GeProduto->get($id, [
            'contain' => [],
        ]);

        $this->set('geProduto', $geProduto);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $geProduto = $this->GeProduto->newEmptyEntity();
        if ($this->request->is('post')) {
            $geProduto = $this->GeProduto->patchEntity($geProduto, $this->request->getData());
            if ($this->GeProduto->save($geProduto)) {
                $this->Flash->success(__('The ge produto has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The ge produto could not be saved. Please, try again.'));
        }
        $this->set(compact('geProduto'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Ge Produto id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $geProduto = $this->GeProduto->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $geProduto = $this->GeProduto->patchEntity($geProduto, $this->request->getData());
            if ($this->GeProduto->save($geProduto)) {
                $this->Flash->success(__('The ge produto has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The ge produto could not be saved. Please, try again.'));
        }
        $this->set(compact('geProduto'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Ge Produto id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $geProduto = $this->GeProduto->get($id);
        if ($this->GeProduto->delete($geProduto)) {
            $this->Flash->success(__('The ge produto has been deleted.'));
        } else {
            $this->Flash->error(__('The ge produto could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
