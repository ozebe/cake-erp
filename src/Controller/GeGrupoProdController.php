<?php
declare(strict_types=1);

namespace App\Controller;

use Cake\Http\Exception\ForbiddenException;
/**
 * GeGrupoProd Controller
 *
 * @property \App\Model\Table\GeGrupoProdTable $GeGrupoProd
 *
 * @method \App\Model\Entity\GeGrupoProd[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class GeGrupoProdController extends AppController
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
            $geGrupoProd = $this->paginate($this->GeGrupoProd);
            $this->set(compact('geGrupoProd'));
        }else {
            throw new ForbiddenException(__('Você não possui acesso a este módulo'));
        }
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
        if($this->autorizado()){
            $geGrupoProd = $this->GeGrupoProd->get($id, [
                'contain' => [],
            ]);

            $this->set('geGrupoProd', $geGrupoProd);
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
            $geGrupoProd = $this->GeGrupoProd->newEmptyEntity();
            if ($this->request->is('post')) {
                $geGrupoProd = $this->GeGrupoProd->patchEntity($geGrupoProd, $this->request->getData());
                if ($this->GeGrupoProd->save($geGrupoProd)) {
                    $this->Flash->success(__('Grupo de produto salvo com sucesso'));

                    return $this->redirect(['action' => 'index']);
                }
                $this->Flash->error(__('O grupo de produto não pode ser salvo. Por favor tente novamente!'));
                $validationErrors = $geGrupoProd->getErrors();
                foreach($validationErrors as $assoc) {
                    foreach ($assoc as $k => $v) {
                        $this->Flash->error(__($v));
                    }
                }
            }
            $this->set(compact('geGrupoProd'));
        }else {
            throw new ForbiddenException(__('Você não possui acesso a este módulo'));
        }
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
        if($this->autorizado()){
            $geGrupoProd = $this->GeGrupoProd->get($id, [
                'contain' => [],
            ]);
            if ($this->request->is(['patch', 'post', 'put'])) {
                $geGrupoProd = $this->GeGrupoProd->patchEntity($geGrupoProd, $this->request->getData());
                if ($this->GeGrupoProd->save($geGrupoProd)) {
                    $this->Flash->success(__('Grupo de produto editado com sucesso'));

                    return $this->redirect(['action' => 'index']);
                }
                $this->Flash->error(__('O grupo de produto não pode se editado. Por favor tente novamente!'));
                $validationErrors = $geGrupoProd->getErrors();
                foreach($validationErrors as $assoc) {
                    foreach ($assoc as $k => $v) {
                        $this->Flash->error(__($v));
                    }
                }
            }
            $this->set(compact('geGrupoProd'));
        }else {
            throw new ForbiddenException(__('Você não possui acesso a este módulo'));
        }
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
        if($this->autorizado()){
            $this->request->allowMethod(['post', 'delete']);
            $geGrupoProd = $this->GeGrupoProd->get($id);
            if ($this->GeGrupoProd->delete($geGrupoProd)) {
                $this->Flash->success(__('O grupo de produto foi excluído'));
            } else {
                $this->Flash->error(__('O grupo de produto não pode ser excluído. Por favor tente novamente'));
            }

            return $this->redirect(['action' => 'index']);
        }else {
            throw new ForbiddenException(__('Você não possui acesso a este módulo'));
        }
    }
}
