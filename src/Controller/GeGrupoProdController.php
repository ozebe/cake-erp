<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * GeGrupoProd Controller
 *
 * @property \App\Model\Table\GeGrupoProdTable $GeGrupoProd
 *
 * @method \App\Model\Entity\GeGrupoProd[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class GeGrupoProdController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $geGrupoProd = $this->paginate($this->GeGrupoProd);

        $this->set(compact('geGrupoProd'));
    }

    /**
     * View method
     *
     * @param string|null $id Ge Grupo Prod id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $geGrupoProd = $this->GeGrupoProd->get($id, [
            'contain' => [],
        ]);

        $this->set('geGrupoProd', $geGrupoProd);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $geGrupoProd = $this->GeGrupoProd->newEmptyEntity();
        if ($this->request->is('post')) {
            $geGrupoProd = $this->GeGrupoProd->patchEntity($geGrupoProd, $this->request->getData());
            if ($this->GeGrupoProd->save($geGrupoProd)) {
                $this->Flash->success(__('The ge grupo prod has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The ge grupo prod could not be saved. Please, try again.'));
        }
        $this->set(compact('geGrupoProd'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Ge Grupo Prod id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $geGrupoProd = $this->GeGrupoProd->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $geGrupoProd = $this->GeGrupoProd->patchEntity($geGrupoProd, $this->request->getData());
            if ($this->GeGrupoProd->save($geGrupoProd)) {
                $this->Flash->success(__('The ge grupo prod has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The ge grupo prod could not be saved. Please, try again.'));
        }
        $this->set(compact('geGrupoProd'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Ge Grupo Prod id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $geGrupoProd = $this->GeGrupoProd->get($id);
        if ($this->GeGrupoProd->delete($geGrupoProd)) {
            $this->Flash->success(__('The ge grupo prod has been deleted.'));
        } else {
            $this->Flash->error(__('The ge grupo prod could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
