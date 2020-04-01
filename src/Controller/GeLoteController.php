<?php
declare(strict_types=1);

namespace App\Controller;

use Cake\Http\Exception\ForbiddenException;
/**
 * GeLote Controller
 *
 * @property \App\Model\Table\GeLoteTable $GeLote
 *
 * @method \App\Model\Entity\GeLote[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class GeLoteController extends AppController
{
    public function autorizado(){
        $aut = false;
        foreach($this->nivelUsuario as $nivel){
            if(($nivel->ga_nivel_acesso->sigla == "ADM") OR ($nivel->ga_nivel_acesso->sigla == "GE")){
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
        $geLote = $this->paginate($this->GeLote);

        $this->set(compact('geLote'));
        }else {
            throw new ForbiddenException(__('Você não possui acesso a este módulo'));
        }
    }

    /**
     * View method
     *
     * @param string|null $id Ge Lote id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        if($this->autorizado()){
        $geLote = $this->GeLote->get($id, [
            'contain' => [],
        ]);

        $this->set('geLote', $geLote);
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
        $geLote = $this->GeLote->newEmptyEntity();
        if ($this->request->is('post')) {
            $geLote = $this->GeLote->patchEntity($geLote, $this->request->getData());
            if ($this->GeLote->save($geLote)) {
                $this->Flash->success(__('Lote de produto salvo com sucesso'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('O lote de produto não pode ser salvo. Por favor tente novamente!'));
            $validationErrors = $geLote->getErrors();
            foreach($validationErrors as $assoc) {
                foreach ($assoc as $k => $v) {
                    $this->Flash->error(__($v));
                }
            }
        }
        $this->set(compact('geLote'));
        }else {
            throw new ForbiddenException(__('Você não possui acesso a este módulo'));
        }
    }

    /**
     * Edit method
     *
     * @param string|null $id Ge Lote id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        if($this->autorizado()){
        $geLote = $this->GeLote->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $geLote = $this->GeLote->patchEntity($geLote, $this->request->getData());
            if ($this->GeLote->save($geLote)) {
                $this->Flash->success(__('Lote de produto editado com sucesso'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('O lote de produto não pode se editado. Por favor tente novamente!'));
            $validationErrors = $geLote->getErrors();
            foreach($validationErrors as $assoc) {
                foreach ($assoc as $k => $v) {
                    $this->Flash->error(__($v));
                }
            }
        }
        $this->set(compact('geLote'));
        }else {
            throw new ForbiddenException(__('Você não possui acesso a este módulo'));
        }
    }

    /**
     * Delete method
     *
     * @param string|null $id Ge Lote id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        if($this->autorizado()){
        $this->request->allowMethod(['post', 'delete']);
        $geLote = $this->GeLote->get($id);
        if ($this->GeLote->delete($geLote)) {
            $this->Flash->success(__('O lote de produto foi excluído'));
        } else {
            $this->Flash->error(__('O lote de produto não pode ser excluído. Por favor tente novamente'));
        }

        return $this->redirect(['action' => 'index']);
        }else {
            throw new ForbiddenException(__('Você não possui acesso a este módulo'));
        }
    }
}
