<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * GaNivelAcesso Controller
 *
 * @property \App\Model\Table\GaNivelAcessoTable $GaNivelAcesso
 *
 * @method \App\Model\Entity\GaNivelAcesso[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class GaNivelAcessoController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $gaNivelAcesso = $this->paginate($this->GaNivelAcesso);

        $this->set(compact('gaNivelAcesso'));
    }

    /**
     * View method
     *
     * @param string|null $id Ga Nivel Acesso id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $gaNivelAcesso = $this->GaNivelAcesso->get($id, [
            'contain' => [],
        ]);

        $this->set('gaNivelAcesso', $gaNivelAcesso);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $gaNivelAcesso = $this->GaNivelAcesso->newEmptyEntity();
        if ($this->request->is('post')) {
            $gaNivelAcesso = $this->GaNivelAcesso->patchEntity($gaNivelAcesso, $this->request->getData());
            if ($this->GaNivelAcesso->save($gaNivelAcesso)) {
                $this->Flash->success(__('Nível de acesso salvo com sucesso'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('O nível de acesso não pode ser salvo. Por favor tente novamente!'));
        }
        $this->set(compact('gaNivelAcesso'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Ga Nivel Acesso id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $gaNivelAcesso = $this->GaNivelAcesso->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $gaNivelAcesso = $this->GaNivelAcesso->patchEntity($gaNivelAcesso, $this->request->getData());
            if ($this->GaNivelAcesso->save($gaNivelAcesso)) {
                $this->Flash->success(__('Nível de acesso editado com sucesso'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('O nível de acesso não pode ser salvo. Por favor tente novamente!'));
        }
        $this->set(compact('gaNivelAcesso'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Ga Nivel Acesso id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $gaNivelAcesso = $this->GaNivelAcesso->get($id);
        if ($this->GaNivelAcesso->delete($gaNivelAcesso)) {
            $this->Flash->success(__('Nível de acesso excluído!'));
        } else {
            $this->Flash->error(__('O nível de acesso não pode ser salvo. Por favor tente novamente!'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
