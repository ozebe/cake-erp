<?php
declare(strict_types=1);

namespace App\Controller;

use Cake\Http\Exception\ForbiddenException;

/**
 * GeEstoque Controller
 *
 * @property \App\Model\Table\GeEstoqueTable $GeEstoque
 *
 * @method \App\Model\Entity\GeEstoque[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class GeEstoqueController extends AppController
{
    public function autorizado(){
        $aut = false;
        foreach($this->nivelUsuario as $nivel){
            if($nivel->ga_nivel_acesso->sigla == "ADM"){
                $aut = true;
                break;
            }
        }
        return $aut;
    }

    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        if($this->autorizado()){
        $geEstoque = $this->paginate($this->GeEstoque);

        $this->set(compact('geEstoque'));
        }else {
            throw new ForbiddenException(__('Você não possui acesso a este módulo'));
        }
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
        if($this->autorizado()){
        $geEstoque = $this->GeEstoque->get($id, [
            'contain' => [],
        ]);

        $this->set('geEstoque', $geEstoque);
        }else {
            throw new ForbiddenException(__('Você não possui acesso a este módulo'));
        }
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        if($this->autorizado()){
        $geEstoque = $this->GeEstoque->newEmptyEntity();
        if ($this->request->is('post')) {
            $geEstoque = $this->GeEstoque->patchEntity($geEstoque, $this->request->getData());
            if ($this->GeEstoque->save($geEstoque)) {
                $this->Flash->success(__('Estoque salvo com sucesso.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('O estoque não pode ser salvo. Por favor tente novamente!'));
        }
        $this->set(compact('geEstoque'));
        }else {
            throw new ForbiddenException(__('Você não possui acesso a este módulo'));
        }

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
        if($this->autorizado()){
        $geEstoque = $this->GeEstoque->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $geEstoque = $this->GeEstoque->patchEntity($geEstoque, $this->request->getData());
            if ($this->GeEstoque->save($geEstoque)) {
                $this->Flash->success(__('Estoque editado com sucesso.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('O estoque não pode ser salvo. Por favor tente novamente!'));
        }
        $this->set(compact('geEstoque'));
        }else {
            throw new ForbiddenException(__('Você não possui acesso a este módulo'));
        }
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
        if($this->autorizado()){
        $this->request->allowMethod(['post', 'delete']);
        $geEstoque = $this->GeEstoque->get($id);
        if ($this->GeEstoque->delete($geEstoque)) {
            $this->Flash->success(__('The ge estoque has been deleted.'));
        } else {
            $this->Flash->error(__('The ge estoque could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
        }else {
            throw new ForbiddenException(__('Você não possui acesso a este módulo'));
        }
    }
}
