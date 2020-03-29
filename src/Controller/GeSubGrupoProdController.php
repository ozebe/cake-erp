<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * GeSubGrupoProd Controller
 *
 * @property \App\Model\Table\GeSubGrupoProdTable $GeSubGrupoProd
 *
 * @method \App\Model\Entity\GeSubGrupoProd[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class GeSubGrupoProdController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $geSubGrupoProd = $this->paginate($this->GeSubGrupoProd);

        $this->set(compact('geSubGrupoProd'));
    }

    /**
     * View method
     *
     * @param string|null $id Ge Sub Grupo Prod id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $geSubGrupoProd = $this->GeSubGrupoProd->get($id, [
            'contain' => [],
        ]);

        $this->set('geSubGrupoProd', $geSubGrupoProd);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $geSubGrupoProd = $this->GeSubGrupoProd->newEmptyEntity();
        if ($this->request->is('post')) {
            $geSubGrupoProd = $this->GeSubGrupoProd->patchEntity($geSubGrupoProd, $this->request->getData());
            if ($this->GeSubGrupoProd->save($geSubGrupoProd)) {
                $this->Flash->success(__('The ge sub grupo prod has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The ge sub grupo prod could not be saved. Please, try again.'));
        }
        $this->set(compact('geSubGrupoProd'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Ge Sub Grupo Prod id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $geSubGrupoProd = $this->GeSubGrupoProd->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $geSubGrupoProd = $this->GeSubGrupoProd->patchEntity($geSubGrupoProd, $this->request->getData());
            if ($this->GeSubGrupoProd->save($geSubGrupoProd)) {
                $this->Flash->success(__('The ge sub grupo prod has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The ge sub grupo prod could not be saved. Please, try again.'));
        }
        $this->set(compact('geSubGrupoProd'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Ge Sub Grupo Prod id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $geSubGrupoProd = $this->GeSubGrupoProd->get($id);
        if ($this->GeSubGrupoProd->delete($geSubGrupoProd)) {
            $this->Flash->success(__('The ge sub grupo prod has been deleted.'));
        } else {
            $this->Flash->error(__('The ge sub grupo prod could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
