<?php
declare(strict_types=1);

namespace App\Controller;

use Cake\Http\Exception\ForbiddenException;

/**
 * GeSubGrupoProd Controller
 *
 * @property \App\Model\Table\GeSubGrupoProdTable $GeSubGrupoProd
 *
 * @method \App\Model\Entity\GeSubGrupoProd[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class GeSubGrupoProdController extends AppController
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
        if($this->autorizado($this->nivelUsuario)){
            $geSubGrupoProd = $this->paginate($this->GeSubGrupoProd->find('all')->contain('GeGrupoProd'));
            $this->set('geSubGrupoProd', $geSubGrupoProd);
        }else {
            throw new ForbiddenException(__('Você não possui acesso a este módulo'));
        }
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
        if($this->autorizado()){
            $geSubGrupoProd = $this->GeSubGrupoProd->get($id, [
                'contain' => ['GeGrupoProd'],
            ]);

            $this->set('geSubGrupoProd', $geSubGrupoProd);
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
        $geSubGrupoProd = $this->GeSubGrupoProd->newEmptyEntity();
        if ($this->request->is('post')) {
            $geSubGrupoProd = $this->GeSubGrupoProd->patchEntity($geSubGrupoProd, $this->request->getData());
            if ($this->GeSubGrupoProd->save($geSubGrupoProd)) {
                $this->Flash->success(__('Subgrupo de produto salvo com sucesso'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('O subgrupo de produto não pode ser salvo. Por favor tente novamente!'));
            $validationErrors = $geSubGrupoProd->getErrors();
            foreach($validationErrors as $assoc) {
                foreach ($assoc as $k => $v) {
                    $this->Flash->error(__($v));
                }
            }
        }
        $this->set(compact('geSubGrupoProd'));

        $grupo = $this->GeSubGrupoProd->GeGrupoProd->find('list',[
            'keyField' => 'id',
            'valueField' => 'descricao',
            'order' => 'descricao'
        ]);
        $this->set(compact('grupo'));
        }else {
            throw new ForbiddenException(__('Você não possui acesso a este módulo'));
        }
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
        if($this->autorizado()){
        $geSubGrupoProd = $this->GeSubGrupoProd->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $geSubGrupoProd = $this->GeSubGrupoProd->patchEntity($geSubGrupoProd, $this->request->getData());
            if ($this->GeSubGrupoProd->save($geSubGrupoProd)) {
                $this->Flash->success(__('Subgrupo de produto editado com sucesso'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('O subgrupo de produto não pode se editado. Por favor tente novamente!'));
            $validationErrors = $geSubGrupoProd->getErrors();
            foreach($validationErrors as $assoc) {
                foreach ($assoc as $k => $v) {
                    $this->Flash->error(__($v));
                }
            }
        }
        $this->set(compact('geSubGrupoProd'));

        $grupo = $this->GeSubGrupoProd->GeGrupoProd->find('list',[
            'keyField' => 'id',
            'valueField' => 'descricao',
            'order' => 'descricao'
        ]);
        $this->set(compact('grupo'));
        }else {
            throw new ForbiddenException(__('Você não possui acesso a este módulo'));
        }
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
        if($this->autorizado()){
        $this->request->allowMethod(['post', 'delete']);
        $geSubGrupoProd = $this->GeSubGrupoProd->get($id);
        if ($this->GeSubGrupoProd->delete($geSubGrupoProd)) {
            $this->Flash->success(__('O subgrupo de produto foi excluído'));
        } else {
            $this->Flash->error(__('O subgrupo de produto não pode ser excluído. Por favor tente novamente'));
        }

        return $this->redirect(['action' => 'index']);
        }else {
            throw new ForbiddenException(__('Você não possui acesso a este módulo'));
        }
    }
}
